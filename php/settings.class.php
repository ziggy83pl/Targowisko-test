<?php
/************************************************************************
 * The script of website with announcements Targowisko
 * Copyright (c) 2019 
 * All right reserved
 *
 * *********************************************************************
 * THIS SOFTWARE IS LICENSED - YOU CAN MODIFY THESE FILES
 * BUT YOU CAN NOT REMOVE OF ORIGINAL COMMENTS!
 * ACCORDING TO THE LICENSE YOU CAN USE THE SCRIPT ON ONE DOMAIN. DETECTION
 * COPY SCRIPT WILL RESULT IN A HIGH FINANSIAL PENALTY AND WITHDRAWAL
 * LICENSE THE SCRIPT
 * *********************************************************************/

class settings {

	public static function save($name,$type='str'){
		global $db;
		$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'settings` SET value=:value WHERE name=:name LIMIT 1');
		$sth->bindValue(':name', $name, PDO::PARAM_STR);
		if($type=='isset'){
			$sth->bindValue(':value', isset($_POST[$name]), PDO::PARAM_INT);
		}else{
			$sth->bindValue(':value', $_POST[$name], PDO::PARAM_STR);
		}
		$sth->execute();
	}

}
