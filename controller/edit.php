<?php
/************************************************************************
 * The script of website with announcements 
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

$controller = 'add';
include_once('controller/'.$controller.'.php');
	
if(!empty($_GET['code'])){$code = $_GET['code'];}else{$code = '';}

if(isset($_GET['id']) and $_GET['id']>0 and offer::checkPermissions($_GET['id'],$code)){
	$render_variables['offer'] = offer::loadOffer($_GET['id'], 'edit');
	$settings['seo_title'] = lang('Edit offer').' - '.$settings['title'];
	$settings['seo_description'] = lang('Edit offer').' - '.$settings['description'];
}else{
	header("Location: ".path('add'));
	die('redirect');
}

