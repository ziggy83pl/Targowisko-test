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

session_start();

require_once('../config/config.php');

$user = new user();

if(isset($_POST['action'])){
	if($_POST['action']=='getCoordinates' and !empty($_POST['address'])){
		echo json_encode(getCoordinates($_POST['address']));
	}elseif($_POST['action']=='get_categories_and_options' and isset($_POST['category']) and $_POST['category']>=0){
		if(!empty($_POST['load_options'])){
			echo(json_encode([
				'categories'=>category::getCategories($_POST['category']),
				'options'=>option::getOptions($_POST['category'],'add'),
				'price'=>option::getPrice($_POST['category'])
			]));
		}else{
			echo(json_encode(['categories'=>category::getCategories($_POST['category'])]));
		}
	}elseif($_POST['action']=='add_photo' and ($settings['add_offers_not_logged'] or $user->logged_in) and $settings['photo_add'] and isset($_FILES["file"]["type"])){
		echo(json_encode(offer::addPhoto()));
	}elseif($_POST['action']=='add_photo_ad' and ($settings['add_offers_not_logged'] or $user->logged_in) and $settings['photo_add'] and isset($_FILES["file"]["type"])){
		echo(json_encode(offer::addPhotoAd()));
	}else{
		die('Access denied!');
	}
}elseif(isset($_GET['action'])){
	if($_GET['action']=='offers_sugested_keywords' and !empty($_GET['keywords'])){
		echo(json_encode(offer::getNames($_GET['keywords'])));
	}else{
		die('Access denied!');
	}
}else{
	die('Access denied!');
}
