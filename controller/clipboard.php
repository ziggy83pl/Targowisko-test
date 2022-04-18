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

if(!empty($path_parts[1])){
	throw new noFoundException();
}

if($user->logged_in){

	if(isset($_POST['action']) and $_POST['action']=='clipboard_remove' and isset($_POST['id']) and $_POST['id']>0 and checkToken('clipboard_remove')){
		offer::clipboardRemove($_POST['id']);
	}

	$render_variables ['offers'] = offer::loadOffers($settings['limit_page'],'clipboard');

	$settings['seo_title'] = lang('Clipboard').' - '.$settings['title'];
	$settings['seo_description'] = lang('Clipboard').' - '.$settings['description'];
	
}else{
	header("Location: ".path('login')."?redirect=".path('clipboard'));
	die('redirect');
}


