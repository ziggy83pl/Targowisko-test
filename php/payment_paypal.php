<?php
/************************************************************************
 * The script of website with announcements Targowisko
 * Copyright (c) 2019 
 * All right reserved
 *
 * *********************************************************************
 * THIS SOFTWARE IS LICENSED - YOU CAN MODIFY THESE FILES
 * BUT YOU CAN NOT REMOVE OF ORIGINAL COMMENTS!
 * ACCORDING TO THE LICENSE YOU CAN USE THE SCRIPT ON ONE DOMAIN. DETECTION
 * COPY SCRIPT WILL RESULT IN A HIGH FINANSIAL PENALTY AND WITHDRAWAL
 * LICENSE THE SCRIPT
 * *********************************************************************/

require_once('../config/config.php');

if(isset($_POST['action']) and $_POST['action']=='new_payment' and isset($_POST['item_id']) and $_POST['item_id']>0 and !empty($_POST['type'])){

	if ($_POST['total'] != '')
	{
		$total = $_POST['total'];
		updateOffer($_POST['item_id'], $_POST['days'], $_POST['offerType']);
	}
	else
		$total = $payment_data['amount'];
	$payment_data = new_payment('paypal',$_POST['item_id'],$_POST['type'], $total);

	if($payment_data){
		
		$querystring = "?business=".urlencode($settings['paypal_email'])."&";
		$querystring .= "item_name=".urlencode($payment_data['description'])."&";
		$querystring .= "amount=".urlencode($total)."&";

		$querystring .= "cmd=".urlencode("_xclick")."&";
		$querystring .= "no_note=".urlencode("no_note")."&";
		$querystring .= "currency_code=".urlencode($settings['paypal_currency'])."&";
		$querystring .= "bn=".urlencode($payment_data['description'])."&";
		$querystring .= "payer_email=".urlencode($settings['paypal_email'])."&";
		$querystring .= "item_number=".urlencode($payment_data['id'])."&";

		$querystring .= "return=".urlencode(stripslashes($payment_data['url'].'&status=OK'))."&";
		$querystring .= "cancel_return=".urlencode(stripslashes($payment_data['url'].'&status=FAIL'))."&";
		$querystring .= "notify_url=".urlencode($settings['base_url'].'/php/payment_paypal.php');

		if($settings['paypal_test_mode']){
			header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
		}else{
			header('location:https://www.paypal.com/cgi-bin/webscr'.$querystring);
		}
	}

	exit();

}elseif(isset($_POST['item_number']) and isset($_POST['payment_status']) and isset($_POST['mc_gross']) and isset($_POST['txn_id']) and isset($_POST['payer_email'])){

	$req = 'cmd=_notify-validate';
	foreach ($_POST as $key => $value) {
		$value = urlencode(stripslashes($value));
		$value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);
		$req .= "&$key=$value";
	}

	$data['item_number'] 		= $_POST['item_number'];
	$data['payment_status'] 	= $_POST['payment_status'];
	$data['payment_amount'] 	= $_POST['mc_gross'];
	$data['txn_id']				= $_POST['txn_id'];
	$data['payer_email'] 		= $_POST['payer_email'];

	$header = "POST /cgi-bin/webscr HTTP/1.1\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	if($settings['paypal_test_mode']){
		$header .= "Host: www.sandbox.paypal.com\r\n";
	}else{
		$header .= "Host: www.paypal.com\r\n";
	}
	$header .= "Content-Length: " . strlen($req) . "\r\n";
	$header .= "Connection: close\r\n\r\n";

	if($settings['paypal_test_mode']){
		$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);
	}else{
		$fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);
	}

	if ($fp) {
		fputs($fp, $header . $req);
		while (!feof($fp)) {
			$res = fgets ($fp, 1024);
			if (stripos($res, "VERIFIED") !== false) {

				$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'payment_paypal WHERE txnid=:txnid AND status="Completed" LIMIT 1');
				$sth->bindValue(':txnid', $data['txn_id'], PDO::PARAM_STR);
				$sth->execute();
				if(!$sth->fetchColumn()){

					$sth = $db->prepare('INSERT INTO '._DB_PREFIX_.'payment_paypal (payment_id, txnid, amount, status, email, date) VALUES (:payment_id, :txnid, :amount, :status, :email, NOW())');
					$sth->bindValue(':payment_id' ,$data['item_number'], PDO::PARAM_INT);
					$sth->bindValue(':txnid', $data['txn_id'], PDO::PARAM_STR);
					$sth->bindValue(':amount', $data['payment_amount'], PDO::PARAM_STR);
					$sth->bindValue(':status', $data['payment_status'], PDO::PARAM_STR);
					$sth->bindValue(':email', $data['payer_email'], PDO::PARAM_STR);
					$sth->execute();

					if($data['payment_status']=='Completed'){
						check_payment($data['item_number'],$data['payment_amount']);
					}

				}
			}else if (stripos($res, "INVALID") !== false) {

				$sth = $db->prepare('INSERT INTO '._DB_PREFIX_.'payment_paypal (payment_id, txnid, amount, status, email, date) VALUES (:payment_id, :txnid, :amount, :status, :email, NOW())');
				$sth->bindValue(':payment_id' ,$data['item_number'], PDO::PARAM_INT);
				$sth->bindValue(':txnid', $data['txn_id'], PDO::PARAM_STR);
				$sth->bindValue(':amount', $data['payment_amount'], PDO::PARAM_STR);
				$sth->bindValue(':status', $data['payment_status'], PDO::PARAM_STR);
				$sth->bindValue(':email', $data['payer_email'], PDO::PARAM_STR);
				$sth->execute();

			}
		}
		fclose ($fp);
	}
}
