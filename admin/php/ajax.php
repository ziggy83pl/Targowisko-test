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

require_once('../../config/config.php');
require_once('admin.class.php');

$admin = new admin();
/* !_ADMIN_TEST_MODE_ and */ 
if(!_ADMIN_TEST_MODE_ and $admin->is_logged() and isset($_POST['data'])){
	$post = $_POST['data'];
	if($post['action']=='activate_user' and isset($post['id']) and $post['id']>0 and checkToken('admin_activate_user', $post['token'])){
		user::activate($post['id']);
	}elseif($post['action']=='set_moderator' and isset($post['id']) and $post['id']>0 and checkToken('admin_set_moderator', $post['token'])){
		user::setModerator($post['id']);
	}elseif($post['action']=='unset_moderator' and isset($post['id']) and $post['id']>0 and checkToken('admin_unset_moderator', $post['token'])){
		user::unSetModerator($post['id']);
	}elseif($post['action']=='position_options' and isset($post['id']) and isset($post['position']) and isset($post['plusminus']) and checkToken('admin_position_options', $post['token'])){
		setPosition('option',$post['id'],$post['position'],$post['plusminus']);
	}elseif($post['action']=='position_categories' and isset($post['id']) and isset($post['position']) and isset($post['plusminus']) and isset($post['category']) and $post['category']>=0 and checkToken('admin_position_categories', $post['token'])){
		setPosition('category',$post['id'],$post['position'],$post['plusminus'], 'category_id='.$post['category']);
	}elseif($post['action']=='arrange_categories_alphabetically' and isset($post['category']) and $post['category']>=0 and checkToken('admin_arrange_categories_alphabetically', $post['token'])){
		arrangeAlphabetically('category', 'category_id='.$post['category']);
	}elseif($post['action']=='position_states' and isset($post['id']) and isset($post['position']) and isset($post['plusminus']) and isset($post['state_id']) and checkToken('admin_position_states', $post['token'])){
		setPosition('state',$post['id'],$post['position'],$post['plusminus'], 'state_id='.$post['state_id']);
	}elseif($post['action']=='arrange_staties_alphabetically' and checkToken('admin_arrange_staties_alphabetically', $post['token'])){
		arrangeAlphabetically('state', 'state_id='.$post['state_id']);
	}elseif($post['action']=='position_info' and isset($post['id']) and isset($post['position']) and isset($post['plusminus']) and checkToken('admin_position_info', $post['token'])){
		setPosition('info',$post['id'],$post['position'],$post['plusminus']);
	}elseif($post['action']=='arrange_info_alphabetically' and checkToken('admin_arrange_info_alphabetically', $post['token'])){
		arrangeAlphabetically('info');
	}
}else{
	die('Access denied!');
}