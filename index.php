<?php
/************************************************************************
 * The script of website with announcements NOTICE2 v2.7
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

header('Content-Type: text/html; charset=utf-8');
header('X-Frame-Options: SAMEORIGIN');

require_once('config/config.php');

$loader = new Twig_Loader_Filesystem('views/'.$settings['template']);
$twig = new Twig_Environment($loader, [
    'cache' => 'tmp',
]);
$twig->addFilter(new Twig_Filter('lang', 'lang'));
$twig->addFilter(new Twig_Filter('showCurrency', 'showCurrency'));
$twig->addFunction(new Twig_Function('path', 'path'));
$twig->addFunction(new Twig_Function('generateToken', 'generateToken'));

$render_variables = [];
$user = new user();

$controller = 'index';

class noFoundException extends Exception {}

try{

	if(!empty($_GET['path'])){

		if(substr($_GET['path'], -1, 1)=='/'){
			$_GET['path'] = substr($_GET['path'], 0, strlen($_GET['path'])-1);
		}

		$path_parts = array_filter(explode('/', $_GET['path']));
		$controller = array_search($path_parts[0], $links);

		if(!$controller){
			$slug_parts = explode(',', $path_parts[0]);
			if($slug_parts[0]>0 and $slug_parts[1] and !isset($slug_parts[2])){
				$_GET['id'] = $slug_parts[0];
				$_GET['slug'] = $slug_parts[1];
				$controller = 'offer';
			}
		}elseif($controller=='profile' and isset($path_parts[1])  and !isset($path_parts[2])){
			$_GET['slug'] = $path_parts[1];
		}elseif(isset($path_parts[1])  and !isset($path_parts[2])){
			$slug_parts = explode(',', $path_parts[1]);
			if($slug_parts[0]>0 and $slug_parts[1] and !isset($slug_parts[2])){
				$_GET['id'] = $slug_parts[0];
				$_GET['slug'] = $slug_parts[1];
			}
		}

		if(!$controller and (
			substr($path_parts[0], 0, strlen(_PREFIX_STATE_))==_PREFIX_STATE_ or
			substr($path_parts[0], 0, strlen(_PREFIX_CATEGORY_))==_PREFIX_CATEGORY_ or
			substr($path_parts[0], 0, strlen(_PREFIX_TYPE_))==_PREFIX_TYPE_))
			{
			$controller = 'offers';
		}

		if(!$controller){
			throw new noFoundException();
		}
	}
	include_once('controller/'.$controller.'.php');
}catch(noFoundException $e){
	include_once('controller/404.php');
}

$settings['logo_facebook'] = getFullUrl($settings['logo_facebook']);

checkInfo();

echo $twig->render($controller.'.html', array_merge($render_variables, ['settings' => $settings, 'user' => $user->user_data, 'controller' => $controller, 'get' => $_GET]));
