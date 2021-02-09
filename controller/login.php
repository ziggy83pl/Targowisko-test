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

$get_new_session_code = true;
$tab_active = 'login';

if(isset($_POST['action']) and $_POST['action'] == 'login' and !empty($_POST['session_code']) and !empty($_POST['username']) and !empty($_POST['password'])){

	try{
		$user->login($_POST);
	}catch(Exception $e) {
		$render_variables['alert_danger'][] = $e->getMessage();
	}

}elseif(!empty($_GET['activation_code'])){

	if(user::checkCodeAndActivate($_GET['activation_code'])){
		$render_variables['alert_success'][] = lang('Account has been activated, you can now log in.');
	}else{
		$render_variables['alert_danger'][] = lang('Incorrect activation code or the account has already been activated');
	}

}elseif(!empty($_GET['complete_data'])){

	$complete_data = $user->checkCompleteData($_GET['complete_data']);
	if($complete_data){
		$render_variables['input']['username'] = preg_replace('/@.*/', '', $complete_data['email']);
		if(isset($_POST['action']) and $_POST['action']=='complete_data'){
			try{
				$user->completeData($_GET['complete_data'], $_POST);
				if(isset($_GET['redirect']) and $_GET['redirect']!=''){
					header("Location: ".$_GET['redirect']."");
				}else{
					header("Location: ".$settings['base_url']);
				}
				die('redirect');
			}catch(Exception $e) {
				$render_variables['alert_danger'][] = $e->getMessage();
				$render_variables['input'] = $_POST;
			}
		}

		$render_variables['form_complete_data'] = $complete_data;
		$get_new_session_code = false;
	}

}elseif(isset($_POST['action']) and $_POST['action']=='register' and isset($_POST['email']) and isset($_POST['username']) and isset($_POST['password']) and isset($_POST['password_repeat']) and isset($_POST['captcha'])){

	$result = $user->register($_POST);
	if($result['status']){
		$_SESSION['flash'] = 'new_account';
		header("Location: ".path('login'));
		die('redirect');
	}elseif(!empty($result['error'])){
		$render_variables['error'] = $result['error'];
		$render_variables['input'] = $_POST;
	}
  	$tab_active = 'register';

}elseif(isset($_POST['action']) and $_POST['action'] == 'reset_password' and !empty($_POST['username']) and !empty($_POST['captcha'])){

	try{
		$user->resetPassword($_POST);
		$render_variables['alert_success'][] = lang('Link to change your password has been sent to your email address.');
	}catch(Exception $e) {
		$render_variables['alert_danger'][] = $e->getMessage();
		$render_variables['input'] = $_POST;
	}
	$tab_active = 'reset_password';

}elseif(!empty($_GET['new_password'])){

  $tab_active = 'reset_password';

	$user_id = $user->resetPasswordNew($_GET['new_password'])['user_id'];
	if($user_id){
		if(isset($_POST['action']) and $_POST['action'] == 'new_password' and isset($_POST['password']) and isset($_POST['password_repeat'])){
			try{
				$user->resetPasswordNewCheck($user_id,$_POST,$_GET['new_password']);
				$render_variables['alert_success'][] = lang('The password has been changed successfully. You can now login to the site');
				$tab_active = 'login';
			}catch(Exception $e) {
				$render_variables['alert_danger'][] = $e->getMessage();
			}
		}

		$render_variables['form_new_password'] = user::getData($user_id);
	}else{
		$render_variables['alert_danger'][] = lang('Incorrect or inactive password reset code');
	}
}

if($get_new_session_code){
	if($settings['facebook_login'] and $settings['facebook_api'] and $settings['facebook_secret']){
		if(isset($_GET['facebook_login'])){
			$user->loginFB();
		}
		$render_variables['facebook_redirect_uri'] = 'https://www.facebook.com/v2.2/dialog/oauth?client_id='.$settings['facebook_api'].'&redirect_uri='.urlencode(path('login').'?facebook_login').'&sdk=php-sdk-4.0.12&scope=email';
	}
	if($settings['google_login'] and $settings['google_id'] and $settings['google_secret']){
		$user->loginGoogle();
		$render_variables['google_redirect_uri'] = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri='.urlencode(path('login')).'&response_type=code&client_id=' .$settings['google_id'].'&access_type=online';
	}
	$render_variables['session_code'] = user::newSessionCode();
}

$render_variables['tab_active'] = $tab_active;

$settings['seo_title'] = lang('Log in').' - '.$settings['title'];
$settings['seo_description'] = lang('Log in on the website').' - '.$settings['description'];
