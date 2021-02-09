<?php
/************************************************************************

 * 
 * *********************************************************************
 * THIS SOFTWARE IS LICENSED - YOU CAN MODIFY THESE FILES
 * BUT YOU CAN NOT REMOVE OF ORIGINAL COMMENTS!
 * ACCORDING TO THE LICENSE YOU CAN USE THE SCRIPT ON ONE DOMAIN. DETECTION
 * COPY SCRIPT WILL RESULT IN A HIGH FINANSIAL PENALTY AND WITHDRAWAL
 * LICENSE THE SCRIPT
 * *********************************************************************/

require_once(realpath(dirname(__FILE__)).'/config/config.php');

function cron_10min(){
	global $db;

	$sth = $db->query('SELECT * FROM '._DB_PREFIX_.'mails_queue ORDER BY priority DESC, id LIMIT 10');
	while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
		if(sendMail($row['action'], $row['receiver'], unserialize($row['data']))){
			$sth2 = $db->prepare('DELETE FROM `'._DB_PREFIX_.'mails_queue` WHERE id=:id LIMIT 1');
			$sth2->bindValue(':id', $row['id'], PDO::PARAM_INT);
			$sth2->execute();
		}
	}

}
cron_10min();
