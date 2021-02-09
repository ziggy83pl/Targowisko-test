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

if($admin->is_logged()){

	$category_id = 0;
	if(isset($_GET['category_id']) and $_GET['category_id']>0){
		$category = category::getCategory($_GET['category_id'], true);
		if($category){
			$render_variables['category'] = $category;
			$category_id = $category['id'];
		}
	}
	
	if(!_ADMIN_TEST_MODE_ and isset($_POST['action'])){
		if($_POST['action']=='add_category' and !empty($_POST['name']) and checkToken('admin_add_category')){

			category::add($_POST,$category_id);
			$render_variables['alert_success'][] = lang('Successfully added new category').' '.strip_tags($_POST['name']);

		}elseif($_POST['action']=='edit_category' and isset($_POST['id']) and $_POST['id']>0 and !empty($_POST['name']) and checkToken('admin_edit_category')){
			
			category::edit($_POST,$_POST['id']);
			$render_variables['alert_success'][] = lang('Changes have been saved');
			
		}elseif($_POST['action']=='remove_category' and isset($_POST['id']) and $_POST['id']>0 and checkToken('admin_remove_category')){
			
			category::remove($_POST['id']);
			$render_variables['alert_danger'][] = lang('Successfully deleted');
			
		}elseif($_POST['action']=='reload_category' and isset($_POST['category']) and $_POST['category']>=0 and checkToken('admin_reload_category')){
			
			category::refreshAllSubcategories($_POST['category']);
			$render_variables['alert_success'][] = lang('Categories have been reloaded');
			
		}
	}

	$render_variables['categories'] = category::getCategories($category_id);
	
	$title = lang('Categories').' - '.$title_default;
}
