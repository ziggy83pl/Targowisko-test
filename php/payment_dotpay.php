<?php
/************************************************************************
 * The script of website with announcements NOTICE2
 * Copyright (c) 2017 - 2018 Kamil Wyremski
 * http://wyremski.pl
 * kamil.wyremski@gmail.com
 *
 * All right reserved
 *
 * *********************************************************************
 * THIS SOFTWARE IS LICENSED - YOU CAN MODIFY THESE FILES
 * BUT YOU CAN NOT REMOVE OF ORIGINAL COMMENTS!
 * ACCORDING TO THE LICENSE YOU CAN USE THE SCRIPT ON ONE DOMAIN. DETECTION
 * COPY SCRIPT WILL RESULT IN A HIGH FINANSIAL PENALTY AND WITHDRAWAL
 * LICENSE THE SCRIPT
 * *********************************************************************/

session_start();

require_once('../config/config.php');

if(isset($_POST['action']) and $_POST['action']=='new_payment' and isset($_POST['item_id']) and $_POST['item_id']>0 and !empty($_POST['type'])){

	if ($_POST['total'] != '')
	{
		$total = $_POST['total'];
		updateOffer($_POST['item_id'], $_POST['days'], $_POST['offerType']);
	}
	else
		$total = $payment_data['amount'];

	$payment_data = new_payment('dotpay',$_POST['item_id'],$_POST['type'], $total);	
	if($payment_data){

		$form = '<form id="form" method="post" action="';
		if($settings['dotpay_test_mode']){
			$form .= 'https://ssl.dotpay.pl/test_payment/">';
		}else{
			$form .= 'https://ssl.dotpay.pl/t2/">';
		}

		$form .= '<input type="hidden" name="id" value="'.$settings['dotpay_id'].'">';
		$form .= '<input type="hidden" name="opis" value="'.$payment_data['description'].'">';
		$form .= '<input type="hidden" name="control" value="'.$payment_data['id'].'">';
		$form .= '<input type="hidden" name="amount" value="'.$total.'">';
		$form .= '<input type="hidden" name="typ" value="3">';
		$form .= '<input type="hidden" name="waluta" value="'.$settings['dotpay_currency'].'">';
		$form .= '<input type="hidden" name="URL" value="'.$payment_data['url'].'">';
		$form .= '<input type="hidden" name="URLC" value="'.$settings['base_url'].'/php/payment_dotpay.php">';
		$form .= '</form>';

		$form .= '<script>document.getElementById("form").submit();</script>';

		echo $form;
	}
	
	

}elseif($_SERVER['REMOTE_ADDR']=='195.150.9.37' && !empty($_POST)){

	$dotpay_id = trim($_POST['id']);
	$control = trim($_POST['control']);
	$email = trim($_POST['email']);
	$description = trim($_POST['description']);
	$operation_type = trim($_POST['operation_type']);
	$operation_status = trim($_POST['operation_status']);
	$operation_amount = trim($_POST['operation_amount']);
	$signature = trim($_POST['signature']);
	$operation_number = trim($_POST['operation_number']);
	$sign = hash('sha256', $settings['dotpay_pin'].$_POST['id'].$_POST['operation_number'].$_POST['operation_type'].$_POST['operation_status'].$_POST['operation_amount'].$_POST['operation_currency'].$_POST['operation_withdrawal_amount'].$_POST['operation_commission_amount'].$_POST['operation_original_amount'].$_POST['operation_original_currency'].$_POST['operation_datetime'].$_POST['operation_related_number'].$_POST['control'].$_POST['description'].$_POST['email'].$_POST['p_info'].$_POST['p_email'].$_POST['credit_card_issuer_identification_number'].$_POST['credit_card_masked_number'].$_POST['credit_card_brand_codename'].$_POST['credit_card_brand_code'].$_POST['credit_card_id'].$_POST['channel'].$_POST['channel_country'].$_POST['geoip_country']);

	if($operation_type == 'payment' and $signature == $sign and $settings['dotpay_id'] == $dotpay_id){

		$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'payment_dotpay WHERE operation_number=:operation_number AND operation_status="completed" LIMIT 1');
		$sth->bindValue(':operation_number', $operation_number, PDO::PARAM_STR);
		$sth->execute();
		if(!$sth->fetchColumn()){

			$sth = $db->prepare('INSERT INTO '._DB_PREFIX_.'payment_dotpay (dotpay_id, operation_status, operation_number, payment_id, operation_amount, email, description, date) VALUES (:dotpay_id, :operation_status, :operation_number, :payment_id, :operation_amount, :email, :description, NOW())');
			$sth->bindValue(':dotpay_id', $dotpay_id, PDO::PARAM_STR);
			$sth->bindValue(':operation_status', $operation_status, PDO::PARAM_STR);
			$sth->bindValue(':operation_number', $operation_number, PDO::PARAM_STR);
			$sth->bindValue(':payment_id', $control, PDO::PARAM_INT);
			$sth->bindValue(':operation_amount', $operation_amount, PDO::PARAM_STR);
			$sth->bindValue(':email', $email, PDO::PARAM_STR);
			$sth->bindValue(':description', $description, PDO::PARAM_STR);
			$sth->execute();

			if($operation_status == "completed"){
				check_payment($control,$operation_amount);
			}
		}
		echo "OK";
	}else{
		echo "ERROR";
	}
}
