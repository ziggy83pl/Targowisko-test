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

	if(!_ADMIN_TEST_MODE_ and isset($_POST['action']) and $_POST['action']=='save_settings_black_list' and checkToken('admin_save_settings_black_list')){
		
		$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'settings` SET value=:value WHERE name=:name limit 1');

		$black_list_email = array_map('trim', array_filter(explode(PHP_EOL, $_POST['black_list_email'])));
		asort($black_list_email);
		$black_list_email = implode(array_unique($black_list_email),PHP_EOL);
		
		$sth->bindValue(':value', $black_list_email, PDO::PARAM_STR);
		$sth->bindValue(':name', 'black_list_email', PDO::PARAM_STR);
		$sth->execute();
		
		$black_list_ip = array_map('trim', array_filter(explode(PHP_EOL, $_POST['black_list_ip'])));
		asort($black_list_ip);
		$black_list_ip = implode(array_unique($black_list_ip),PHP_EOL);
		
		$sth->bindValue(':value', $black_list_ip, PDO::PARAM_STR);
		$sth->bindValue(':name', 'black_list_ip', PDO::PARAM_STR);
		$sth->execute();
		/*keywords from removal*/
		$sth->bindValue(':value', $_POST['black_list_words'], PDO::PARAM_STR);
		$sth->bindValue(':name', 'black_list_words', PDO::PARAM_STR);
		$sth->execute();
        /*lista płatnych słów*/
		$sth->bindValue(':value', $_POST['black_list_pay'], PDO::PARAM_STR);
		$sth->bindValue(':name', 'black_list_pay', PDO::PARAM_STR);
		$sth->execute();
		
		getSettings();
		$render_variables['alert_success'][] = lang('Changes have been saved');
	}
	
	$title = lang('Black list').' - '.$title_default;
	
}


