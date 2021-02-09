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

	if(!_ADMIN_TEST_MODE_ and isset($_POST['action'])){
		if($_POST['action']=='add_article' and !empty($_POST['name']) and checkToken('admin_add_article')){
      $id = article::add($_POST);
			header('Location: ?controller=article&id='.$id);
			die('redirect');
		}elseif($_POST['action']=='edit_article' and isset($_POST['id']) and $_POST['id']>0 and !empty($_POST['name']) and checkToken('admin_edit_article')){
			article::edit($_POST['id'],$_POST);
			$render_variables['alert_success'][] = lang('Changes have been saved');
		}
	}

	if(isset($_GET['id']) and $_GET['id']>0){
		$article = article::getArticle($_GET['id']);
		if($article!=''){
			$title = $article['name'].' - '.lang('Article');
			$render_variables['article'] = $article;
		}
	}

}
