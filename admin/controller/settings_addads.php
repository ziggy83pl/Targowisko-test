<?php
/************************************************************************
 * The script of website with announcements TARGOWISKO
 * Copyright (c) 2019 targowisko.org
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
		if($_POST['action']=='remove_offer' and isset($_POST['id']) and $_POST['id']>0 and checkToken('admin_remove_offer')){
			offer::remove($_POST['id']);
			if(isset($_POST['add_email_black_list']) and !empty($_POST['email'])){
				addEmailToBlackList($_POST['email']);
			}
			if(isset($_POST['add_ip_black_list']) and !empty($_POST['ip'])){
				addIpToBlackList($_POST['ip']);
			}
			$render_variables['alert_danger'][] = lang('The offer has been deleted');
		}elseif($_POST['action']=='deactivate_offer' and isset($_POST['id']) and $_POST['id']>0 and checkToken('admin_deactivate_offer')){
			offer::deactivate($_POST['id']);
			$render_variables['alert_success'][] = lang('Changes have been saved');
		}elseif($_POST['action']=='activate_offer' and isset($_POST['id']) and $_POST['id']>0 and !empty($_POST['date_finish']) and checkToken('admin_activate_offer')){
			offer::activate($_POST['id'],$_POST['date_finish'],1);
			$render_variables['alert_success'][] = lang('Changes have been saved');
		}elseif($_POST['action']=='disable_promote_offer' and isset($_POST['id']) and $_POST['id']>0 and checkToken('admin_disable_promote_offer')){
			offer::disablePromote($_POST['id']);
			$render_variables['alert_success'][] = lang('Changes have been saved');
		}elseif($_POST['action']=='enable_promote_offer' and isset($_POST['id']) and $_POST['id']>0 and !empty($_POST['date']) and checkToken('admin_enable_promote_offer')){
			offer::enablePromote($_POST['id'],$_POST['date']);
			$render_variables['alert_success'][] = lang('Changes have been saved');
		}elseif($_POST['action']=='remove_offers' and isset($_POST['addads']) and is_array($_POST['addads']) and checkToken('admin_action_offers')){
			foreach($_POST['addads'] as $key => $value){
				if($value>0){
					offer::remove($value);
				}
			}
			$render_variables['alert_danger'][] = lang('The offer has been deleted');
		}elseif($_POST['action']=='active_offers' and isset($_POST['addads']) and is_array($_POST['addads']) and checkToken('admin_action_offers')){
			foreach($_POST['addads'] as $key => $value){
				if($value>0){
					offer::activate($value);
				}
			}
			$render_variables['alert_success'][] = lang('Changes have been saved');
		}elseif($_POST['action']=='deactive_offers' and isset($_POST['addads']) and is_array($_POST['addads'] and checkToken('admin_action_offers'))){
			foreach($_POST['addads'] as $key => $value){
				if($value>0){
					offer::deactivate($value);
				}
			}
			$render_variables['alert_success'][] = lang('Changes have been saved');
		}
	}

	$render_variables['addads'] = offer::loadOffers(50,'admin');
	
	$sth = $db->query('SELECT * FROM '._DB_PREFIX_.'user where active = 1 order by username');
	foreach($sth as $row){$users[] = $row;}
	if(isset($users)){$render_variables['users'] = $users;}

	$title = lang('addads').' - '.$title_default;

}
