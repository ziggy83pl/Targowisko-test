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

require_once(realpath(dirname(__FILE__)).'/config/config.php');

function cron(){
	global $settings, $db;

	$db->query('DELETE FROM '._DB_PREFIX_.'admin_session WHERE date<(CURDATE() - INTERVAL 1 DAY)');

	$sth = $db->query('SELECT * FROM '._DB_PREFIX_.'photo WHERE (offer_id=0 OR offer_id IS NULL) AND date<(CURDATE() - INTERVAL 1 DAY)');
	foreach($sth as $row){
		unlink(_FOLDER_PHOTOS_.$row['folder'].$row['thumb']);
		unlink(_FOLDER_PHOTOS_.$row['folder'].$row['url']);
	}
	$db->query('DELETE FROM '._DB_PREFIX_.'photo WHERE (offer_id=0 OR offer_id IS NULL) AND date<(CURDATE() - INTERVAL 1 DAY)');

	$db->query('UPDATE '._DB_PREFIX_.'reset_password SET active=0 WHERE active=1 and date<(CURDATE() - INTERVAL 1 DAY)');

	$db->query('DELETE FROM '._DB_PREFIX_.'user WHERE active=0 and date<(CURDATE() - INTERVAL 1 DAY)');

	$db->query('DELETE FROM '._DB_PREFIX_.'session_offer WHERE date<(CURDATE() - INTERVAL 1 DAY)');

	$db->query('DELETE FROM '._DB_PREFIX_.'session_user WHERE date<(CURDATE() - INTERVAL 1 DAY)');

	$sth = $db->query('SELECT * FROM '._DB_PREFIX_.'offer WHERE promoted=1 and promoted_date_end<CURDATE()');
	foreach($sth as $row){
		mailsQueueAdd('finish_promote',$row['email'],['offer_name'=>$row['name'], 'offer_url'=>$row['id'].','.$row['slug'], 'user_id'=>$row['user_id']],3);
	}
	$db->query('UPDATE '._DB_PREFIX_.'offer SET promoted=0 WHERE promoted=1 and promoted_date_end<CURDATE()');

	$sth = $db->query('SELECT id FROM '._DB_PREFIX_.'offer WHERE active=0 and date_finish<(CURDATE() - INTERVAL '.$settings['days_to_remove'].' DAY)');
	foreach($sth as $row){
		offer::remove($row['id']);
	}

	$offers_deactivate = [];
	$sth = $db->query('SELECT * FROM '._DB_PREFIX_.'offer WHERE active=1 and date_finish<CURDATE()');
	foreach($sth as $row){
		offer::deactivate($row['id']);
		$offers_deactivate[$row['email']][] = $row;
	}
	foreach($offers_deactivate as $email=>$offers){
		if($offers[0]['user_id']){
			mailsQueueAdd('offers_finish',$email,['offers_list'=>$offers, 'user_id'=>$offers[0]['user_id']],4);
		}else{
			mailsQueueAdd('offers_finish_not_logged',$email,['offers_list'=>$offers],4);
		}
	}

	refresh_ecu();

}
cron();

if($settings['generate_sitemap']){
	include(realpath(dirname(__FILE__)).'/php/sitemap_generator.php');
	sitemap_generator();
}
