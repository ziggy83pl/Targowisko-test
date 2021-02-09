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

class option {

	public static function getKinds(){
		return ['text'=>lang('Text field'),'number'=>lang('Numeric field'),'select'=>lang('Select field'),'checkbox'=>lang('Checkbox')];
	}

	public static function getOptions(int $category_id=0,$controller=''){
		global $db;
		$options = [];
		$statement = '';
		if($controller=='search'){
			$statement .= ' AND search=1 AND pernament IS NULL ';
		}elseif($controller=='add'){
			$statement .= ' AND pernament IS NULL ';
		}
		if($category_id>0){
			$sth = $db->prepare('SELECT * FROM `'._DB_PREFIX_.'option` WHERE (categories_all=1 OR (SELECT 1 FROM '._DB_PREFIX_.'option_category WHERE option_id='._DB_PREFIX_.'option.id AND option_category=:category_id)) '.$statement.' ORDER BY position');
			$sth->bindValue(':category_id', $category_id, PDO::PARAM_INT);
		}elseif($controller=='add' || $controller=='search'){
			$sth = $db->prepare('SELECT * FROM `'._DB_PREFIX_.'option` WHERE categories_all=1 '.$statement.' ORDER BY position');
		}else{
			$sth = $db->prepare('SELECT * FROM `'._DB_PREFIX_.'option` WHERE true '.$statement.' ORDER BY position');
		}
		$sth->execute();
		while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$row['kindName'] = static::getKindName($row['kind']);
			if($row['kind']=='select' || $row['kind']=='checkbox'){
				$row['choices'] = static::getSelectChoices($row['select_choices']);
			}
			$options[$row['id']] = $row;
		}
		return $options;
	}

	public static function getOption(int $id){
		global $db;
		$sth = $db->prepare('SELECT * FROM `'._DB_PREFIX_.'option` WHERE id=:id LIMIT 1');
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		$option = $sth->fetch(PDO::FETCH_ASSOC);
		if($option){
			$option['categories'] = static::getCategories($option['id']);
		}
		return $option;
	}

	public static function getCategories(int $id){
		global $db;
		$categories = [];
		$sth = $db->prepare('SELECT option_category FROM '._DB_PREFIX_.'option_category WHERE option_id=:option_id');
		$sth->bindValue(':option_id', $id, PDO::PARAM_INT);
		$sth->execute();
		while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$categories[] = $row['option_category'];
		}
		return $categories;
	}

	public static function getSelectChoices($choices){
		return array_unique(array_filter(array_map('trim', explode(';',$choices))));
	}

	public static function getKindName($name){
		if(isset(static::getKinds()[$name])){
			return static::getKinds()[$name];
		}
		return '';
	}

	public static function add($data){
		global $db;
		$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'option`(`name`, `slug`, `position`) VALUES (:name,:slug,:position)');
		$sth->bindValue(':name', $data['name'], PDO::PARAM_STR);
		$sth->bindValue(':slug', slug($data['name']), PDO::PARAM_STR);
		$sth->bindValue(':position', getPosition('option'), PDO::PARAM_INT);
		$sth->execute();
		static::edit($db->lastInsertId(),$data);
	}

	public static function edit(int $id,$data){
		global $db;
		if($id>0 and static::checkKind($data['kind'])){
			if(!empty($data['select_choices'])){
				$select_choices = implode(';',static::getSelectChoices($data['select_choices']));
			}else{
				$select_choices = '';
			}

			$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'option` SET kind=:kind, required=:required, search=:search, categories_all=:categories_all, select_choices=:select_choices WHERE id=:id LIMIT 1');
			$sth->bindValue(':kind', $data['kind'], PDO::PARAM_STR);
			$sth->bindValue(':required', isset($data['required']), PDO::PARAM_INT);
			$sth->bindValue(':search', isset($data['search']), PDO::PARAM_INT);
			$sth->bindValue(':categories_all', isset($data['categories_all']), PDO::PARAM_INT);
			$sth->bindValue(':select_choices', $select_choices, PDO::PARAM_STR);
			$sth->bindValue(':id', $id, PDO::PARAM_INT);
			$sth->execute();

			if(isset($data['name'])){
				$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'option` SET name=:name, slug=:slug WHERE id=:id LIMIT 1');
				$sth->bindValue(':name', $data['name'], PDO::PARAM_STR);
				$sth->bindValue(':slug', slug($data['name']), PDO::PARAM_STR);
				$sth->bindValue(':id', $id, PDO::PARAM_INT);
				$sth->execute();
			}

			$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'option_category` WHERE option_id=:option_id');
			$sth->bindValue(':option_id', $id, PDO::PARAM_INT);
			$sth->execute();

			if(!isset($data['categories_all']) and isset($data['categories']) and is_array($data['categories'])){
				$categories = $data['categories'];
				$values = '';
				foreach($categories as $category_id){
					if($values){$values .= ',';}
					$values .= ' ('.$id.', '.intval($category_id).') ';
				}
				$db->query('INSERT INTO `'._DB_PREFIX_.'option_category`(`option_id`, `option_category`) VALUES '.$values.'');
			}
		}
	}

	public static function checkKind($name){
		$kinds = static::getKinds();
		if(isset($kinds[$name]) or $name=='pernament'){
			return true;
		}
		return false;
	}

	public static function getPrice($category_id=0){
		$show = false;
		$show_in_search = false;
		$option_price = static::getOption(1);
		if($option_price['categories_all'] or in_array($category_id, $option_price['categories'])){
			$show = true;
			$show_in_search = boolval($option_price['search']);
		}
		return ['show'=>$show,'required'=>boolval($option_price['required']),'show_in_search'=>$show_in_search];
	}

	public static function checkShowPrice($category_id=0){
		$option_price = static::getPrice($category_id);
		if($option_price['show_in_search']){
			return true;
		}else{
			return false;
		}
	}

	public static function remove(int $id){
		global $db;
		$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'option_value` WHERE option_id=:option_id');
		$sth->bindValue(':option_id', $id, PDO::PARAM_INT);
		$sth->execute();
		$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'option_category` WHERE option_id=:option_id');
		$sth->bindValue(':option_id', $id, PDO::PARAM_INT);
		$sth->execute();
		$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'option` WHERE id=:id AND pernament IS NULL LIMIT 1');
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
	}
}
