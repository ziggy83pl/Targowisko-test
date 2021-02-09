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

class info {

	public static function getInfos(){
		global $db;
		$info = [];
		$sth = $db->query('SELECT * FROM '._DB_PREFIX_.'info ORDER BY position');
		while($row = $sth->fetch(PDO::FETCH_ASSOC)) {$info[] = $row;}
		return $info;
	}

	public static function getInfoByName($name){
		global $db;
		$sth = $db->prepare('SELECT * FROM '._DB_PREFIX_.'info WHERE page=:name LIMIT 1');
		$sth->bindValue(':name', $name, PDO::PARAM_STR);
		$sth->execute();
		return $sth->fetch(PDO::FETCH_ASSOC);
	}

	public static function getInfoById(int $id){
		global $db;
		$sth = $db->prepare('SELECT * FROM '._DB_PREFIX_.'info WHERE id=:id LIMIT 1');
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		return $sth->fetch(PDO::FETCH_ASSOC);
	}

	public static function add($data){
		global $db;
		$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'info`(`position`, `name`, `slug`, `content`, `keywords`, `description`) VALUES (:position, :name, :slug, :content, :keywords, :description)');
		$sth->bindValue(':position', getPosition('info'), PDO::PARAM_INT);
		$sth->bindValue(':name', $data['name'], PDO::PARAM_STR);
		$sth->bindValue(':slug', slug($data['name']), PDO::PARAM_STR);
		$sth->bindValue(':content', $data['content'], PDO::PARAM_STR);
		$sth->bindValue(':keywords', $data['keywords'], PDO::PARAM_STR);
		$sth->bindValue(':description', $data['description'], PDO::PARAM_STR);
		$sth->execute();
	}

	public static function edit($id,$data){
		global $db;
		$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'info` SET `name`=:name, `slug`=:slug, `content`=:content, `keywords`=:keywords, `description`=:description WHERE id=:id limit 1');
		$sth->bindValue(':name', $data['name'], PDO::PARAM_STR);
		$sth->bindValue(':slug', slug($data['name']), PDO::PARAM_STR);
		$sth->bindValue(':content', $data['content'], PDO::PARAM_STR);
		$sth->bindValue(':keywords', $data['keywords'], PDO::PARAM_STR);
		$sth->bindValue(':description', $data['description'], PDO::PARAM_STR);
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		if($id==1){
			$_POST['url_privacy_policy'] = slug($data['name']);
			settings::save('url_privacy_policy');
		}elseif($id==2){
			$_POST['url_rules'] = slug($data['name']);
			settings::save('url_rules');
		}
	}

	public static function remove($id){
		global $db;
		$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'info` WHERE id=:id AND (page IS NULL OR page="") LIMIT 1');
		$sth->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
		$sth->execute();
	}

}
