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

if($user->logged_in){

	if(isset($_POST['action'])){
		if($_POST['action']=='finish_offer' and isset($_POST['id']) and $_POST['id']>=0 and checkToken('finish_offer')){
			if(offer::checkPermissions($_POST['id'])){
				offer::deactivate($_POST['id']);
			}
		}elseif($_POST['action']=='remove_offer' and isset($_POST['id']) and $_POST['id']>0 and checkToken('remove_offer')){
			if(offer::checkPermissions($_POST['id'])){
				offer::remove($_POST['id']);
			}
		}elseif($_POST['action']=='refresh_offer' and isset($_POST['id']) and $_POST['id']>=0 and $settings['allow_refresh_offer'] and checkToken('refresh_offer')){
			if(offer::checkPermissions($_POST['id']) and offer::countCost($_POST['id'])['total']==0){
				offer::refresh($_POST['id']);
			}
		}
	}

	$render_variables['offers'] = offer::loadOffers($settings['limit_page'],'my_offers');

	$settings['seo_title'] = lang('My offers').' - '.$settings['title'];
	$settings['seo_description'] = lang('My offers').' - '.$settings['description'];
	
}else{
	header("Location: ".path('login')."?redirect=".path('my_offers'));
	die('redirect');
}


