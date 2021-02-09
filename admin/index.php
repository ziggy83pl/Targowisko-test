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

header('Content-Type: text/html; charset=utf-8');
header('X-XSS-Protection: 0');
header('X-Frame-Options: SAMEORIGIN');

session_start();

require_once('../vendor/autoload.php');
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, [
    'cache' => 'tmp',
]);
$twig->addFilter(new Twig_Filter('lang', 'lang'));
$twig->addFilter(new Twig_Filter('showCurrency', 'showCurrency'));
$twig->addFunction(new Twig_Function('path', 'path'));
$twig->addFunction(new Twig_Function('generateToken', 'generateToken'));

require_once('../config/config.php');
require_once('php/admin.class.php');

$admin = new admin();

$title = $title_default = 'Admin Panel';

$controller = 'index';
if($admin->is_logged()){
	if(isset($_GET['controller']) and isSlug($_GET['controller'])){
		if(file_exists('controller/'.$_GET['controller'].'.php')){
			$controller = $_GET['controller'];
			$title = ucfirst($controller).' - '.$title_default;
		}else{
			$controller = '404';
		}
	}
}else{
	$controller = 'login';
}

$render_variables = [];

class noFoundException extends Exception {}

try{
	include_once('controller/'.$controller.'.php');
}catch(noFoundException $e){
	include_once('controller/404.php');
}

echo $twig->render($controller.'.html', array_merge($render_variables, ['title' => $title, 'settings' => $settings, 'admin' => $admin->user_data, '_ADMIN_TEST_MODE_' => _ADMIN_TEST_MODE_, 'get' => $_GET, 'controller' => $controller, 'folder_admin' => basename(dirname($_SERVER['REQUEST_URI']))]));
