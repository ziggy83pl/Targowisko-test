<?php
/************************************************************************
 * The script of website with announcements
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

header('HTTP/1.0 404 Not Found');

global $page;
$page = '404';

$settings['seo_title'] = 'Error 404 - '.$settings['title'];
$settings['seo_description'] = 'Error 404 - '.$settings['description'];

echo $twig->render($page.'.html', ['settings' => $settings, 'user' => $user]);

die();
