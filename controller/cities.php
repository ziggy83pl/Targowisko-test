<?php
/************************************************************************
 * The script of website with announcements Targowisko
 * Copyright (c) 2019 
 * 
 * 
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

if((isset($slug_parts) and !($slug_parts[0]>0 and $slug_parts[1]!='' and !isset($slug_parts[2])) or isset($path_parts[2]))){
	throw new noFoundException();
}

if($settings['add_offers_not_logged'] or $user->logged_in){

	if(!empty($_GET['code'])){$code = $_GET['code'];}else{$code = '';}

	if(isset($_POST['action']) and
		($user->logged_in or isset($_POST['rules']) or $_POST['action']=='edit') and
		!empty($_POST['name']) and
		!empty($_POST['email']) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) and
		/*!empty($_POST['URL']) and */
		!empty($_POST['session_code']) and offer::checkSessionCode($_POST['session_code']) and
		(!empty($_POST['phone'] or !$settings['required_phone'])) and
		(!empty($_POST['address'] or !$settings['required_address'])) and
		((!empty($_POST['category_id']) and !empty(category::getCategory($_POST['category_id'])) or !$settings['required_category'] or count(category::getCategories())==0)) and
		((!empty($_POST['type_id']) and !empty(getOfferTypeById($_POST['type_id'])) or !$settings['required_type'] or count(getTypes())==0)) and
		((!empty($_POST['state_id']) and !empty(getStateById($_POST['state_id'])) or !$settings['required_state'] or count(getStates())==0))
		){
		if($_POST['action']=='cities'){
			if(checkEmailBlackList($_POST['email']) or checkIpBlackList(getClientIp()) or slug(trim(checkWordsBlackList(strip_tags($_POST['name']))))==''){
				$render_variables['alert_danger'][] = lang('The offer could not be added');
			}else{
				if($user->logged_in and !$user->moderator){
					$_POST['email'] = $user->email;
				}
				$offer = offer::addOffer($_POST);
				if($offer['active']){
					$_SESSION['flash'] = 'offer_activated';
				}
				if($user->getId()){
					header("Location: ".path('offer',$offer['id'],$offer['slug']));
				}else{
					header("Location: ".path('offer',$offer['id'],$offer['slug']).'?code='.$offer['code']);
				}
				die('redirect');
			}
		}elseif($_POST['action']=='edit' and isset($_GET['id']) and $_GET['id']>0 and offer::checkPermissions($_GET['id'],$code)){
			if(slug(trim(checkWordsBlackList(strip_tags($_POST['name']))))==''){
				$render_variables['alert_danger'][] = lang('The offer could not be added');
			}else{
				if($user->logged_in and !$user->moderator){
					$_POST['email'] = $user->email;
				}
				$offer = offer::editOffer($_GET['id'],$_POST,true);
				$_SESSION['flash'] = 'offer_saved';
				if($user->getId()){
					header("Location: ".path('offer',$offer['id'],$offer['slug']));
				}else{
					header("Location: ".path('offer',$offer['id'],$offer['slug']).'?code='.$code);
				}
				die('redirect');
			}
		}
	}elseif(isset($_POST['action']) and $_POST['action']=='remove_offer' and isset($_GET['id']) and $_GET['id']>0 and isset($_POST['code']) and checkToken('remove_offer')){
		if(offer::checkPermissions($_GET['id'],$_POST['code'])){
			offer::remove($_GET['id']);
			$_SESSION['flash'] = 'offer_deleted';
			header("Location: ".path(''));
			die('redirect');
		}
	}elseif(isset($_GET['add_similar']) and $_GET['add_similar']>0 and offer::checkPermissions($_GET['add_similar'])){
		$render_variables['offer'] = offer::loadOffer($_GET['add_similar'], 'add_similar');
	}

	if(!$user->logged_in){
		$render_variables['alert_danger'][] = lang('You are not logged in. Log in to fully enjoy functionality of website!');
	}

	$render_variables['session_code'] = offer::newSessionCode();

	$render_variables['states'] = getAllStates();
	$render_variables['types'] = getTypes();
	$render_variables['offersDays'] = getOffersDays();

	$settings['seo_title'] = lang('Add offer').' - '.$settings['title'];
	$settings['seo_description'] = lang('Add offer').' - '.$settings['description'];
}else{
	header("Location: ".path('login')."?redirect=".path('cities'));
	die('redirect');
}
