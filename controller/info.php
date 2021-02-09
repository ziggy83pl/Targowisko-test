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

if(isset($_GET['id']) and $_GET['id']>0 and !empty($_GET['slug'])){

	if(!empty($path_parts[2])){
		throw new noFoundException();
	}

	$info_page = info::getInfoById($_GET['id']);
	if($info_page!=''){
		if($_GET['slug']!=$info_page['slug']){
			header("Location: ".path('info', $info_page['id'], $info_page['slug']));
			die('redirect');
		}else{
			$render_variables['info_page'] = $info_page;
			$settings['seo_title'] = $info_page['name'].' - '.$settings['title'];
			if($info_page['description']){
				$settings['seo_description'] = $info_page['description'];
			}else{
				$settings['seo_description'] = $info_page['name'].' - '.$settings['description'];
			}
			if($info_page['keywords']){
				$settings['seo_keywords'] = $info_page['keywords'];
			}
		}
	}else{
		throw new noFoundException();
	}
}else{

	if(!empty($slug_parts)){
		throw new noFoundException();
	}

	$render_variables['info'] =  info::getInfos();
	$settings['seo_title'] = lang('Info').' - '.$settings['title'];
	$settings['seo_description'] = lang('Info').' - '.$settings['description'];
}
