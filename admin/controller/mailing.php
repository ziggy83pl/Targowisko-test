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

	if(!_ADMIN_TEST_MODE_ and isset($_POST['action'])){
		if($_POST['action']=='send_mailing' and !empty($_POST['subject']) and isset($_POST['message']) and checkToken('admin_send_mailing')){

			$sth = $db->query('SELECT email FROM '._DB_PREFIX_.'user WHERE active=1');
			while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
				mailsQueueAdd('mailing',$row['email'],['subject'=>$_POST['subject'], 'message'=>$_POST['message']]);
			}
			header('Location: '.$settings['base_url'].'/'.basename(dirname($_SERVER['REQUEST_URI'])).'/?controller=mailing');
			die('redirect');
		}elseif($_POST['action']=='cancel_mailing' and checkToken('admin_cancel_mailing')){
			$db->query('TRUNCATE '._DB_PREFIX_.'mails_queue');
		}
	}

	$sth = $db->query('SELECT COUNT(1) FROM '._DB_PREFIX_.'mails_queue');
	$mails_queue = $sth->fetchColumn();
	if($mails_queue){
		$render_variables['alert_danger'][] = lang('Warning! Mailing is in progress').'. '.lang('Mails in queue').': '.$mails_queue;
		$render_variables['mails_queue'] = $mails_queue;
	}
}
