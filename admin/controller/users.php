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
		if($_POST['action']=='remove_user' and isset($_POST['id']) and $_POST['id']>0 and checkToken('admin_remove_user')){
			user::remove($_POST['id']);
			if(isset($_POST['add_email_black_list']) and !empty($_POST['email'])){
				addEmailToBlackList($_POST['email']);
			}
			if(isset($_POST['add_ip_black_list']) and !empty($_POST['register_ip'])){
				addIpToBlackList($_POST['register_ip']);
			}
			if(isset($_POST['add_ip_black_list']) and !empty($_POST['activation_ip'])){
				addIpToBlackList($_POST['activation_ip']);
			}
			$render_variables['alert_danger'][] = lang('User has been deleted');
		}elseif($_POST['action']=='remove_users' and isset($_POST['users']) and is_array($_POST['users'])  and checkToken('admin_action_users')){
			foreach($_POST['users'] as $key => $value){
				if($value>0){
					user::remove($value);
				}
			}
			$render_variables['alert_danger'][] = lang('User has been deleted');
		}elseif($_POST['action']=='activate_users' and isset($_POST['users']) and is_array($_POST['users']) and checkToken('admin_action_users')){
			foreach($_POST['users'] as $key => $value){
				if($value>0){
					user::activate($value);
				}
			}
			$render_variables['alert_success'][] = lang('Changes have been saved');
		}elseif($_POST['action']=='set_moderators' and isset($_POST['users']) and is_array($_POST['users']) and checkToken('admin_action_users')){
			foreach($_POST['users'] as $key => $value){
				if($value>0){
					user::setModerator($value);
				}
			}
			$render_variables['alert_success'][] = lang('Changes have been saved');
		}elseif($_POST['action']=='unset_moderators' and isset($_POST['users']) and is_array($_POST['users']) and checkToken('admin_action_users')){
			foreach($_POST['users'] as $key => $value){
				if($value>0){
					user::unSetModerator($value);
				}
			}
			$render_variables['alert_success'][] = lang('Changes have been saved');
		}
	}

	$limit = 50;
	$where_statement = ' true ';
	$bind_values = [];
	if(isset($_GET['search'])){
		if(!empty($_GET['username'])){
			$where_statement .= ' AND username LIKE :username ';
			$bind_values['username'] = '%'.$_GET['username'].'%';
		}
		if(!empty($_GET['email'])){
			$where_statement .= ' AND email LIKE :email ';
			$bind_values['email'] = '%'.$_GET['email'].'%';
		}
		if(!empty($_GET['active'])){
			if($_GET['active']=='yes'){
				$where_statement .= ' AND active="1" ';
			}elseif($_GET['active']=='no'){
				$where_statement .= ' AND (active="0" OR active IS NULL) ';
			}
		}
		if(!empty($_GET['moderator'])){
			if($_GET['moderator']=='yes'){
				$where_statement .= ' AND moderator="1" ';
			}elseif($_GET['moderator']=='no'){
				$where_statement .= ' AND (moderator="0" OR moderator IS NULL) ';
			}
		}
		if(!empty($_GET['register_fb'])){
			if($_GET['register_fb']=='yes'){
				$where_statement .= ' AND register_fb="1" ';
			}elseif($_GET['register_fb']=='no'){
				$where_statement .= ' AND (register_fb="0" OR register_fb IS NULL) ';
			}
		}
		if(!empty($_GET['register_google'])){
			if($_GET['register_google']=='yes'){
				$where_statement .= ' AND register_google="1" ';
			}elseif($_GET['register_google']=='no'){
				$where_statement .= ' AND (register_google="0" OR register_google IS NULL) ';
			}
		}
		if(!empty($_GET['date_from'])){
			$where_statement .= ' AND date >= :date_from ';
			$bind_values['date_from'] = $_GET['date_from'];
		}
		if(!empty($_GET['date_to'])){
			$where_statement .= ' AND date <= :date_to ';
			$bind_values['date_to'] = $_GET['date_to'].' 23:59:59';
		}
		if(!empty($_GET['register_ip'])){
			$where_statement .= ' AND register_ip LIKE :register_ip ';
			$bind_values['register_ip'] = '%'.$_GET['register_ip'].'%';
		}
	}

	$sth = $db->prepare('SELECT SQL_CALC_FOUND_ROWS *, 
		(SELECT COUNT(1) FROM '._DB_PREFIX_.'offer WHERE user_id=u.id) AS amount_offers,
		(SELECT COUNT(1) FROM '._DB_PREFIX_.'offer WHERE user_id=u.id AND active=1) AS amount_active_offers,
		(SELECT date FROM '._DB_PREFIX_.'logs_user WHERE user_id=u.id ORDER BY date desc LIMIT 1) AS last_login,
		(SELECT COUNT(1) FROM '._DB_PREFIX_.'logs_user WHERE user_id=u.id) AS amount_logins
		FROM '._DB_PREFIX_.'user u WHERE '.$where_statement.' ORDER BY '.sortBy().' LIMIT :limit_from, :limit_to');
	$sth->bindValue(':limit_from', paginationPageFrom($limit), PDO::PARAM_INT);
	$sth->bindValue(':limit_to', $limit, PDO::PARAM_INT);
	foreach($bind_values as $key => $value){
		$sth->bindValue(':'.$key, $value, PDO::PARAM_STR);
	}
	$sth->execute();
	while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
		$users[] = $row;
	}

	if(isset($users)){$render_variables['users'] = $users;}

	generatePagination($limit);

	$title = lang('Users').' - '.$title_default;
}

