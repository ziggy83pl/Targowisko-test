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

if(isset($_GET['activate']) and !empty($_GET['code'])){
	offer::activateCode($_GET['code']);
}

if(!empty($_GET['code'])){$code = $_GET['code'];}else{$code = '';}

if(isset($_GET['id']) and $_GET['id']>0 and offer::checkActiveOffer($_GET['id'],$code)){

	if(isset($_GET['status'])){
		if($_GET['status']=='OK'){
			$render_variables['alert_success'][] = lang('Payment correct');
		}elseif($_GET['status']=='FAIL'){
			$render_variables['alert_danger'][] = lang('Payment error. Please contact with administrator');
		}
	}

	if($settings['show_contact_form_offer'] and isset($_POST['action']) and $_POST['action']=='send_message' and !empty($_POST['name']) and (!empty($_POST['email']) or $user->getId()) and !empty($_POST['message']) and !empty($_POST['captcha']) and (isset($_POST['rules']) or $user->getId())){

		$offer = offer::loadOffer($_GET['id']);

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
			if(sendMail('offer',$offer['email'],['name'=>$_POST['name'], 'email'=>$email, 'message'=>$_POST['message'], 'offer_name'=>$offer['name'], 'offer_url'=>path('offer',$offer['id'],$offer['slug']), 'user_id'=>$user->getId()])){
				$render_variables['alert_success'][] = lang('The message was correctly sent');
			}else{
				$render_variables['error'] = $error;
				$render_variables['alert_danger'][] = lang('The message was not sent');
				$render_variables['input'] = ['name'=>$_POST['name'], 'email'=>$_POST['email'], 'message'=>$_POST['message']];
			}
		}
		$render_variables['showContactTab'] = true;
	}elseif(isset($_POST['action']) and $_POST['action']=='clipboard_add' and checkToken('clipboard_add')){
		if($user->getId()){
			offer::clipboardAdd($_GET['id']);
			$render_variables['alert_success'][] = lang('Offer added to clipboard');
		}else{
			$render_variables['alert_danger'][] = lang('You must be logged in to post ad to clipboard');
		}
	}elseif(isset($_POST['action']) and $_POST['action']=='clipboard_remove' and checkToken('clipboard_remove')){
		offer::clipboardRemove($_GET['id']);
		$render_variables['alert_success'][] = lang('Offer remove from clipboard');

	}elseif(isset($_POST['action']) and $_POST['action']=='activate_offer' and offer::countCost($_GET['id'])['total']==0 and checkToken('activate_offer')){
		offer::activate($_GET['id']);
		$render_variables['alert_success'][] = lang('The offer has been correctly activated on the site');
	}

	$offer = offer::loadOffer($_GET['id'], 'offer');

	if($_GET['slug']!=$offer['slug']){
		header("Location: ".path('offer', $offer['id'], $offer['slug']));
		die('redirect');
	}

	if($settings['show_similar_offer']){
		$render_variables['offers'] = offer::loadSimilarOffers($offer,$settings['limit_similar_offer']);
	}

	$email_parts = explode('@', $offer['email']);
	$offer['email_part_0'] = $email_parts[0];
	$offer['email_part_1'] = $email_parts[1];

	if(!$offer['active']){
		$render_variables['offer_cost'] = offer::countCost($offer['id']);
	}


	if(isset($offer['photos'])){
		$settings['logo_facebook'] = $settings['base_url'].'/upload/photos/'.$offer['photos'][0]['folder'].$offer['photos'][0]['url'];
	}

	$settings['seo_title'] = $offer['name']." - ".$settings['title'];
	$settings['seo_description'] = substr(trim(preg_replace('/\s\s+/', ' ', strip_tags($offer['description']))),0,200);

	$render_variables['offer'] = $offer;

}else{
	throw new noFoundException();
}
