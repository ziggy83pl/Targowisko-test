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
		if($_POST['action']=='add_type' and !empty($_POST['name']) and checkToken('admin_add_type')){
			$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'type`(`slug`, `name`) VALUES (:slug,:name)');
			$sth->bindValue(':slug', slug($_POST['name']), PDO::PARAM_STR);
			$sth->bindValue(':name', trim($_POST['name']), PDO::PARAM_STR);
			$sth->execute();
			$render_variables['alert_success'][] = lang('Successfully added new type').' '.strip_tags($_POST['name']);
		}elseif($_POST['action']=='edit_type' and isset($_POST['id']) and $_POST['id']>0 and !empty($_POST['name']) and checkToken('admin_edit_type')){
			$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'type` SET slug=:slug, name=:name WHERE id=:id limit 1');
			$sth->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
			$sth->bindValue(':slug', slug($_POST['name']), PDO::PARAM_STR);
			$sth->bindValue(':name', trim($_POST['name']), PDO::PARAM_STR);
			$sth->execute();
			$render_variables['alert_success'][] = lang('Changes have been saved');
		}elseif($_POST['action']=='remove_type' and isset($_POST['id']) and $_POST['id']>0 and checkToken('admin_remove_type')){
			$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'type` WHERE id=:id LIMIT 1');
			$sth->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
			$sth->execute();
			$render_variables['alert_danger'][] = lang('Successfully deleted');
		}
	}

	$render_variables['types'] = getTypes();
	
	$title = lang('Types').' - '.$title_default;
	
}

