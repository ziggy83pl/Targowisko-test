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

class slider {

	public static function getSlider(){
		global $db;
		$slider = [];
		$sth = $db->query('SELECT * FROM '._DB_PREFIX_.'slider');
		foreach($sth as $row){$slider[] = $row['content'];}
		return $slider;
	}

	public static function add(){
		global $db;
		$db->exec('INSERT INTO `'._DB_PREFIX_.'slider`() VALUES ()');
	}

	public static function save($data){
		global $db;
		$db->query('TRUNCATE `'._DB_PREFIX_.'slider`');
		if(isset($data['content']) and is_array($data['content'])){
			$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'slider`(content) VALUES (:content)');
			foreach($data['content'] as $content){
				$sth->bindValue(':content', $content, PDO::PARAM_STR);
				$sth->execute();
			}
		}
	}

}
