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

	if(isset($_POST['action'])){

		if($_POST['action'] == 'adminx_change_user' and !empty($_POST['new_username']) and !empty($_POST['new_password']) and !empty($_POST['repeat_new_password']) and checkToken('adminx_change_user')){

			try{
				$adminx->changeUser($_POST);
				$render_variables['alert_success'][] = lang('The data have been updated');
			}catch(Exception $e) {
				$render_variables['alert_danger'][] = $e->getMessage();
			}

		}elseif($_POST['action'] == 'adminx_remove_logs' and checkToken('adminx_remove_logs')){

			$adminx->removeLogs();
			$render_variables['alert_success'][] = lang('Logs logon to the adminx Panel has been successfully removed');

		}elseif($_POST['action'] == 'adminx_add_user' and !empty($_POST['username']) and !empty($_POST['password']) and !empty($_POST['repeat_password']) and checkToken('adminx_add_user')){

			try{
				$adminx->addUser($_POST);
				$render_variables['alert_success'][] = lang('Added new user');
			}catch(Exception $e) {
				$render_variables['alert_danger'][] = $e->getMessage();
			}

		}elseif($_POST['action'] == 'adminx_remove_user' and isset($_POST['id']) and $_POST['id']>0 and checkToken('adminx_remove_user')){

			try{
				$adminx->removeUser($_POST['id']);
				$render_variables['alert_success'][] = lang('User has been successfully removed');
			}catch(Exception $e) {
				$render_variables['alert_danger'][] = $e->getMessage();
			}

		}elseif($_POST['action'] == 'adminx_logout_all' and checkToken('adminx_logout_all')){

			$adminx->logOutAll();

		}

	}

	$render_variables['adminx_users'] = $adminx->getUsers();
	$render_variables['adminx_logs'] = $adminx->getLogs();
	
	$title = lang('adminx Panel Settings').' - '.$title_default;

}
