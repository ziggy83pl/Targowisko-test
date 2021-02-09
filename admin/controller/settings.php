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
/* !_ADMIN_TEST_MODE_ and  */
	if(!_ADMIN_TEST_MODE_ and isset($_POST['action'])){
		if($_POST['action']=='save_settings' and !empty($_POST['base_url']) and !empty($_POST['email']) and !empty($_POST['title']) and checkToken('admin_save_settings')){

			$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'settings` SET value=:value WHERE name=:name LIMIT 1');

			$sth->bindValue(':value', webAddress($_POST['base_url']), PDO::PARAM_STR);
			$sth->bindValue(':name', 'base_url', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['email'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'email', PDO::PARAM_STR);
			$sth->execute();
			if($settings['lang']!=$_POST['lang']){
				unset($translate);
				$sth->bindValue(':value', langLoad($_POST['lang']), PDO::PARAM_STR);
				$sth->bindValue(':name', 'lang', PDO::PARAM_STR);
				$sth->execute();
			}
			$sth->bindValue(':value', $_POST['title'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'title', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['keywords'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'keywords', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['description'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'description', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['analytics'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'analytics', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['number_char_title'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'number_char_title', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['add_offers_not_logged']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'add_offers_not_logged', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['automatically_activate_offers']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'automatically_activate_offers', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['enable_articles']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'enable_articles', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['rss']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'rss', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['generate_sitemap']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'generate_sitemap', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['check_ip_user']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'check_ip_user', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['required_type']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'required_type', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['required_category']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'required_category', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['required_subcategory']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'required_subcategory', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['required_phone']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'required_phone', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['required_address']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'required_address', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['required_state']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'required_state', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['google_maps']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'google_maps', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['google_maps_api'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'google_maps_api', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['google_maps_lat'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'google_maps_lat', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['google_maps_zoom_add'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'google_maps_zoom_add', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['google_maps_zoom_offer'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'google_maps_zoom_offer', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['google_maps_long'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'google_maps_long', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['limit_page'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'limit_page', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['limit_page_index'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'limit_page_index', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['show_similar_offer']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'show_similar_offer', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['limit_similar_offer'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'limit_similar_offer', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['photo_add']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'photo_add', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['photo_max'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'photo_max', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['photo_max_size'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'photo_max_size', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['photo_max_height'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'photo_max_height', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['photo_max_width'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'photo_max_width', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['photo_quality'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'photo_quality', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['watermark_add']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'watermark_add', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['hide_data_not_logged']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'hide_data_not_logged', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['hide_phone']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'hide_phone', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['hide_email']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'hide_email', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['hide_url']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'hide_url', PDO::PARAM_STR);                 /* test dodania adresu url*/
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['hide_views']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'hide_views', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['mail_attachment']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'mail_attachment', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', isset($_POST['smtp']), PDO::PARAM_INT);
			$sth->bindValue(':name', 'smtp', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['smtp_host'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'smtp_host', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['smtp_mail'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'smtp_mail', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['smtp_user'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'smtp_user', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['smtp_password'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'smtp_password', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['smtp_port'], PDO::PARAM_INT);
			$sth->bindValue(':name', 'smtp_port', PDO::PARAM_STR);
			$sth->execute();
			$sth->bindValue(':value', $_POST['smtp_secure'], PDO::PARAM_STR);
			$sth->bindValue(':name', 'smtp_secure', PDO::PARAM_STR);
			$sth->execute();

			getSettings();
			$render_variables['alert_success'][] = lang('Changes have been saved');

		}elseif($_POST['action']=='send_test_message' and !empty($_POST['email']) and !empty($_POST['subject']) and !empty($_POST['message']) and checkToken('admin_send_test_message')){
			if(sendMail('test',$_POST['email'],['subject'=>$_POST['subject'], 'message'=>$_POST['message']])){
				$render_variables['alert_success'][] = lang('The message was correctly sent');
			}else{
				$render_variables['alert_danger'][] = lang('The message was not sent');
			}
		}
	}

	$render_variables['lang_list'] = langList();

	$title = lang('Settings').' - '.$title_default;

}
