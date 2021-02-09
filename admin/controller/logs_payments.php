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

if(!isset($settings['base_url'])){
	die('Access denied!');
}

if($admin->is_logged()){

	if(empty($_GET['type'])){
		throw new noFoundException();
	}elseif($_GET['type']=='dotpay'){
		$payments_type = 'dotpay';
		$payment_table = 'payment_dotpay';
		$payment_company = 'dotpay';
		$title = lang('Logs payments').' - Dotpay - '.$title_default;
	}elseif($_GET['type']=='przelewy24'){
		$payments_type = 'przelewy24';
		$payment_table = 'payment_p24';
		$payment_company = 'p24';
		$title = lang('Logs payments').' - Przelewy24 - '.$title_default;
	}elseif($_GET['type']=='paypal'){
		$payments_type = 'paypal';
		$payment_table = 'payment_paypal';
		$payment_company = 'paypal';
		$title = lang('Logs payments').' - PayPal - '.$title_default;
	}else{
		throw new noFoundException();
	}


	if(!_ADMIN_TEST_MODE_ and isset($_POST['action'])){
		if($_POST['action']=='remove_logs' and !empty($_POST['type']) and checkToken('admin_remove_logs')){
			if($_POST['type']=='only_removed'){
				$db->query('DELETE FROM '._DB_PREFIX_.$payment_table.' WHERE item_id NOT IN (SELECT id FROM '._DB_PREFIX_.'offer)');
				$db->query('DELETE FROM '._DB_PREFIX_.'payment WHERE company="'.$payment_company.'" AND item_id NOT IN (SELECT id FROM '._DB_PREFIX_.'offer)');
				$render_variables['alert_danger'][] = lang('Successfully deleted');
			}elseif($_POST['type']=='all'){
				$db->query('TRUNCATE `'._DB_PREFIX_.$payment_table.'`');
				$db->query('DELETE FROM '._DB_PREFIX_.'payment WHERE company="'.$payment_company.'"');
				$render_variables['alert_danger'][] = lang('Successfully deleted');
			}
		}
	}

	$limit = 100;

	$sth = $db->prepare('SELECT SQL_CALC_FOUND_ROWS pt.*, p.item_id, o.slug, o.name FROM '._DB_PREFIX_.$payment_table.' AS pt, '._DB_PREFIX_.'payment AS p LEFT JOIN '._DB_PREFIX_.'offer o ON p.item_id = o.id WHERE pt.payment_id = p.id ORDER BY '.sortBy().' LIMIT :limit_from, :limit_to');
	$sth->bindValue(':limit_from', paginationPageFrom($limit), PDO::PARAM_INT);
	$sth->bindValue(':limit_to', $limit, PDO::PARAM_INT);
	$sth->execute();
	while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
		$payments[] = $row;
	}
	if(isset($payments)){$render_variables['payments'] = $payments;}

	generatePagination($limit);

	$render_variables['payments_type'] = $payments_type;
}
