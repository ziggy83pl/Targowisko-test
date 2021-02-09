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
		if($_POST['action']=='remove_logs' and !empty($_POST['type']) and checkToken('admin_remove_logs')){
			if($_POST['type']=='only_removed'){
				$db->query('DELETE FROM '._DB_PREFIX_.'logs_offer WHERE offer_id NOT IN (SELECT id FROM '._DB_PREFIX_.'offer)');
				$render_variables['alert_danger'][] = lang('Successfully deleted');
			}elseif($_POST['type']=='all'){
				$db->query('TRUNCATE `'._DB_PREFIX_.'logs_offer`');
				$render_variables['alert_danger'][] = lang('Successfully deleted');
			}
		}
	}
	
	$limit = 100;
	
	$sth = $db->prepare('SELECT SQL_CALC_FOUND_ROWS lo.*, o.slug, o.name, u.username, u.email FROM '._DB_PREFIX_.'logs_offer lo LEFT JOIN '._DB_PREFIX_.'offer o ON lo.offer_id = o.id LEFT JOIN '._DB_PREFIX_.'user u ON lo.user_id = u.id ORDER BY '.sortBy().' LIMIT :limit_from, :limit_to');
	$sth->bindValue(':limit_from', paginationPageFrom($limit), PDO::PARAM_INT);
	$sth->bindValue(':limit_to', $limit, PDO::PARAM_INT);
	$sth->execute();
	while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
		$logs_offers[] = $row;
	}
	if(isset($logs_offers)){$render_variables['logs_offers'] = $logs_offers;}
	
	generatePagination($limit);

	$title = lang('Logs offers').' - '.$title_default;

}
