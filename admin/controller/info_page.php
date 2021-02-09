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
		if($_POST['action']=='add_info' and !empty($_POST['name']) and checkToken('admin_add_info')){
		  info::add($_POST);
			header('Location: ?controller=info');
			die('redirect');
		}elseif($_POST['action']=='edit_info' and isset($_POST['id']) and $_POST['id']>0 and !empty($_POST['name']) and checkToken('admin_edit_info')){
      info::edit($_POST['id'],$_POST);
			header('Location: ?controller=info');
			die('redirect');
		}
	}

	if(isset($_GET['id']) and $_GET['id']>0){
		$info_page = info::getInfoById($_GET['id']);
		if($info_page!=''){
			$title = $info_page['name'].' - '.lang('Info');
			$render_variables['info_page'] = $info_page;
		}
	}

	$title = lang('Info').' - '.$title_default;
}
