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

if(!empty($path_parts[1])){
	throw new noFoundException();
}

$contact_page = info::getInfoByName('contact');
$render_variables['contact_page'] = $contact_page;

if(isset($_POST['action']) and $_POST['action']=='send_message' and !empty($_POST['name']) and (!empty($_POST['email']) or $user->getId()) and !empty($_POST['message']) and !empty($_POST['captcha']) and (isset($_POST['rules']) or $user->getId())){

	if($_POST['captcha']!=$_SESSION['captcha']){
		$error['captcha'] = lang('Invalid captcha code.');
	}elseif(!$user->getId() and !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$error['email'] = lang('Incorrect e-mail address');
	}

	if(isset($error)){
		$render_variables['error'] = $error;
		$render_variables['alert_danger'][] = lang('The message was not sent');
		$render_variables['input'] = ['name'=>$_POST['name'], 'email'=>$_POST['email'], 'message'=>$_POST['message']];
	}else{
		if($user->getId()){
			$email = $user->email;
		}else{
			$email = $_POST['email'];
		}
		if(sendMail('contact_form',$settings['email'],['name'=>$_POST['name'], 'email'=>$email, 'message'=>strip_tags($_POST['message']), 'user_id'=>$user->getId()])){
			$render_variables['alert_success'][] = lang('The message was correctly sent');
		}else{
			$render_variables['alert_danger'][] = lang('The message was not sent');
		}
	}
}

$settings['seo_title'] = $contact_page['name'].' - '.$settings['title'];
if($contact_page['description']){
	$settings['seo_description'] = $contact_page['description'];
}else{
	$settings['seo_description'] = $contact_page['name'].' - '.$settings['description'];
}
if($contact_page['keywords']){
	$settings['seo_keywords'] = $contact_page['keywords'];
}
