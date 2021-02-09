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
		if($_POST['action']=='add_day' and isset($_POST['length']) and $_POST['length']>0 and checkToken('admin_add_day')){
			
			$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'offer_days`(`length`,`cost`) VALUES (:length, :cost)');
			$sth->bindValue(':length', $_POST['length'], PDO::PARAM_INT);
			$sth->bindValue(':cost', $_POST['cost'], PDO::PARAM_STR);
			$sth->execute();
			$render_variables['alert_success'][] = lang('Changes have been saved');

		}elseif($_POST['action']=='edit_day' and isset($_POST['id']) and $_POST['id']>0 and isset($_POST['length']) and $_POST['length']>0 and checkToken('admin_edit_day')){
			
			$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'offer_days` SET `length`=:length, `cost`=:cost WHERE `id`=:id LIMIT 1');
			$sth->bindValue(':length', $_POST['length'], PDO::PARAM_INT);
			$sth->bindValue(':cost', $_POST['cost'], PDO::PARAM_STR);
			$sth->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
			$sth->execute();
			$render_variables['alert_success'][] = lang('Changes have been saved');

		}elseif($_POST['action']=='remove_day' and isset($_POST['id']) and $_POST['id']>0 and checkToken('admin_remove_day')){
			
			$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'offer_days` WHERE id=:id LIMIT 1');
			$sth->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
			$sth->execute();
			$render_variables['alert_danger'][] = lang('Successfully deleted');
		
		}elseif($_POST['action']=='save_settings_days' and checkToken('admin_save_settings_days')){
		
			$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'settings` SET value=:value WHERE name=:name limit 1');
			
			$sth->bindValue(':value', isset($_POST['allow_refresh_offer']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'allow_refresh_offer', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['days_refresh'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'days_refresh', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['days_before_refresh'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'days_before_refresh', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['days_default'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'days_default', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['days_to_remove'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'days_to_remove', PDO::PARAM_STR);
			$sth->execute();
		
			getSettings();
			$render_variables['alert_success'][] = lang('Changes have been saved');
			
		}
	}

	$render_variables['offers_days'] = getOffersDays();
	
	$title = lang('Display time').' - '.$title_default;
}
