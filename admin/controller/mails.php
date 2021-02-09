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

	if(isset($_POST['action'])){
		if(!_ADMIN_TEST_MODE_ and $_POST['action']=='save_mails' and isset($_POST['mails']) and is_array($_POST['mails']) and checkToken('admin_save_mails')){
			$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'mails` SET subject=:subject, message=:message WHERE name=:name LIMIT 1');
			foreach($_POST['mails'] as $key=>$value){
				$sth->bindValue(':subject', $value['subject'], PDO::PARAM_STR);
				$sth->bindValue(':message', $value['message'], PDO::PARAM_STR);
				$sth->bindValue(':name', $key, PDO::PARAM_STR);
				$sth->execute();
			}
			$render_variables['alert_success'][] = lang('Changes have been saved');
		}
	}

	$sth = $db->query('SELECT * FROM '._DB_PREFIX_.'mails order by name');
	while($row = $sth->fetch(PDO::FETCH_ASSOC)) {$mails[] = $row;}
	$render_variables['mails'] = $mails;
	
	$title = lang('Mails').' - '.$title_default;
	
}

