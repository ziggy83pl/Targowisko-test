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

$render_variables['slider'] = slider::getSlider();

$render_variables['offers'] = offer::loadOffers($settings['limit_page_index'],'index_page');
$render_variables['offersRandom'] = offer::loadRandomOffers($settings['limit_page_index']);
$render_variables['ads'] = offer::loadAds(3, Date("Y-m-d"),0,0); //3 type - ogolnokrajowa
//print_r($render_variables['ads']);
if($settings['index_box_subcategories']){
	$categories = category::getCategories();
	foreach($categories as $key=>$category){
		$categories[$key]['list_subcategories'] = category::getCategories($category['id']);
	}
	$render_variables['categories'] = $categories;
}elseif($settings['search_box_category']){
	$render_variables['categories'] = category::getCategories();
}

if($settings['search_box_state']){
	$render_variables['states'] = getAllStates();
}
if($settings['search_box_type']){
	$render_variables['types'] = getTypes();
}

if($settings['search_box_price']){
  $render_variables['search_show_price'] = option::checkShowPrice();
}else{
  $render_variables['search_show_price'] = false;
}

if($settings['enable_articles']){
	$render_variables['articles'] = article::getArticles(5);
}
