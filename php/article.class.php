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

class article {

	public static function getArticles(int $limit=10){
		global $db;
		$articles = [];
		$sth = $db->prepare('SELECT SQL_CALC_FOUND_ROWS * FROM '._DB_PREFIX_.'article ORDER BY date desc LIMIT :limit_from, :limit_to');
		$sth->bindValue(':limit_from', paginationPageFrom($limit), PDO::PARAM_INT);
		$sth->bindValue(':limit_to', $limit, PDO::PARAM_INT);
		$sth->execute();
		while($row = $sth->fetch(PDO::FETCH_ASSOC)) {$articles[] = $row;}
		generatePagination($limit);
		return $articles;
	}

	public static function getArticle(int $id){
		global $db;
		$sth = $db->prepare('SELECT * FROM '._DB_PREFIX_.'article WHERE id=:id LIMIT 1');
		$sth->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
		$sth->execute();
		return $sth->fetch(PDO::FETCH_ASSOC);
	}

	public static function add($data){
		global $db;
		$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'article`(`name`, `slug`, `thumb`, `content`, `content_short`, `keywords`, `description`, `date`) VALUES (:name, :slug, :thumb, :content, :content_short, :keywords, :description, NOW())');
		$sth->bindValue(':name', $data['name'], PDO::PARAM_STR);
		$sth->bindValue(':slug', slug($data['name']), PDO::PARAM_STR);
		$sth->bindValue(':thumb', $data['thumb'], PDO::PARAM_STR);
		$sth->bindValue(':content', $data['content'], PDO::PARAM_STR);
		$sth->bindValue(':content_short', $data['content_short'], PDO::PARAM_STR);
		$sth->bindValue(':keywords', $data['keywords'], PDO::PARAM_STR);
		$sth->bindValue(':description', $data['description'], PDO::PARAM_STR);
		$sth->execute();
		return $db->lastInsertId();
	}

	public static function edit($id,$data){
		global $db;
		$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'article` SET `name`=:name, `slug`=:slug, `thumb`=:thumb, `content`=:content, `content_short`=:content_short, `keywords`=:keywords, `description`=:description WHERE id=:id limit 1');
		$sth->bindValue(':name', $data['name'], PDO::PARAM_STR);
		$sth->bindValue(':slug', slug($data['name']), PDO::PARAM_STR);
		$sth->bindValue(':thumb', $data['thumb'], PDO::PARAM_STR);
		$sth->bindValue(':content', $data['content'], PDO::PARAM_STR);
		$sth->bindValue(':content_short', $data['content_short'], PDO::PARAM_STR);
		$sth->bindValue(':keywords', $data['keywords'], PDO::PARAM_STR);
		$sth->bindValue(':description', $data['description'], PDO::PARAM_STR);
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
	}

	public static function remove($id){
		global $db;
		$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'article` WHERE id=:id limit 1');
		$sth->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
		$sth->execute();
	}

}
