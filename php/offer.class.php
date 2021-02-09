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

class offer {

	public static function loadOffers(int $limit=10,$type='all'){
		global $db, $settings, $user;
		$where_statement = ' true ';
		$select = '';
		$join = '';
		$bind_values = [];
		if(isset($_GET['category']) and $_GET['category']>0){
			$where_statement .= ' AND (o.category_id = :category OR o.category_id = any(SELECT subcategory_id FROM '._DB_PREFIX_.'subcategory WHERE category_id=:category)) ';
			$bind_values['category'] = $_GET['category'];
		}
		if(!empty($_GET['type'])){
			$where_statement .= ' AND o.type_id = (SELECT id FROM '._DB_PREFIX_.'type WHERE slug=:type LIMIT 1) ';
			$bind_values['type'] = $_GET['type'];
		}
		if(!empty($_GET['state'])){
			$where_statement .= ' AND o.state_id = (SELECT id FROM '._DB_PREFIX_.'state WHERE slug=:state LIMIT 1) ';
			$bind_values['state'] = $_GET['state'];
			if(!empty($_GET['state2'])){
				$where_statement .= ' AND o.state2_id = (SELECT id FROM '._DB_PREFIX_.'state WHERE slug=:state2 LIMIT 1) ';
				$bind_values['state2'] = $_GET['state2'];
			}
		}
		if(isset($_GET['search'])){
			if(isset($_GET['id']) and $_GET['id']>0){
				$where_statement .= ' AND o.id = :id ';
				$bind_values['id'] = $_GET['id'];
			}
			if(!empty($_GET['username'])){
				$where_statement .= ' AND o.user_id = (SELECT id FROM '._DB_PREFIX_.'user WHERE username=:username LIMIT 1) ';
				$bind_values['username'] = $_GET['username'];
			}
			if(!empty($_GET['name'])){
				$names = explode(' ', $_GET['name']);
				$where_statement .= ' AND ( ';
				for($i=0; $i < count($names); $i++){
					$where_statement .= ' o.slug LIKE :name_'.$i.' ';
					if($i!=(count($names)-1)){$where_statement .= ' OR ';}
					$bind_values['name_'.$i] = '%'.slug($names[$i]).'%';
				}
				$where_statement .= ' ) ';
			}
			if(!empty($_GET['keywords'])){
				if(isset($_GET['exact_phrase'])){
					$where_statement .= ' AND (o.slug LIKE :keywords OR o.description LIKE :keywords) ';
					$bind_values['keywords'] = '%'.slug($_GET['keywords']).'%';
				}else{
					$keywords = explode(' ', $_GET['keywords']);
					$where_statement .= ' AND ( ';
					for($i=0; $i < count($keywords); $i++){
						$where_statement .= ' (o.slug LIKE :keywords_'.$i.' OR o.description LIKE :keywords_'.$i.') ';
						if($i!=(count($keywords)-1)){$where_statement .= ' AND ';}
						$bind_values['keywords_'.$i] = '%'.slug($keywords[$i]).'%';
					}
					$where_statement .= ' ) ';
				}
			}
			if(isset($_GET['user_id']) and $_GET['user_id']>0){
				$where_statement .= ' AND o.user_id=:user_id ';
				$bind_values['user_id'] = $_GET['user_id'];
			}
			if(isset($_GET['active'])){
				if($_GET['active']=='yes'){
					$where_statement .= ' AND o.active="1" ';
				}elseif($_GET['active']=='no'){
					$where_statement .= ' AND o.active="0" ';
				}
			}
			if(isset($_GET['promoted'])){
				if($_GET['promoted']=='yes'){
					$where_statement .= ' AND o.promoted="1" ';
				}elseif($_GET['promoted']=='no'){
					$where_statement .= ' AND o.promoted="0" ';
				}
			}
			if(!empty($_GET['address'])){
				if(isset($_GET['distance']) and $_GET['distance']>0){
					$coordinates = getCoordinates($_GET['address']);
					$select .= ' , (6371 * acos( cos( radians('.$coordinates['lat'].')) * cos( radians(o.address_lat) ) * cos( radians(o.address_long) - radians('.$coordinates['long'].')) + sin(radians('.$coordinates['lat'].')) * sin(radians(o.address_lat)))) AS distance ';
					$where_statement .= ' AND o.address_lat!=0 AND o.address_long!=0 HAVING distance < :distance ';
					$bind_values['distance'] = $_GET['distance'];
				}else{
					$where_statement .= ' AND o.address LIKE :address ';
					$bind_values['address'] = $_GET['address'];
				}
			}
			if(isset($_GET['price_from']) and $_GET['price_from']>0){
				$where_statement .= ' AND o.price>=:price_from ';
				$bind_values['price_from'] = $_GET['price_from'];
			}
			if(isset($_GET['price_to']) and $_GET['price_to']>0){
				$where_statement .= ' AND o.price<=:price_to ';
				$bind_values['price_to'] = $_GET['price_to'];
			}
			if(isset($_GET['options']) and is_array($_GET['options'])){
				$options = array_filter($_GET['options']);
				foreach($options as $key => $value){
					if(is_array($value)){
						$options[$key] = array_filter($value);
					}
				}
				$options = array_filter($options);
				if(!empty($options)){
					$where_statement .= ' AND (';
					$last = count($options);
					$i = 0;
					foreach($options as $key => $value){
						if(is_array($value)){
							$where_statement .= ' ( ';
							if(isset($value['from']) || isset($value['to'])){
								if(isset($value['from']) and $value['from']>=0){
									$where_statement .= ' (SELECT count(1) FROM '._DB_PREFIX_.'option_value, `'._DB_PREFIX_.'option` WHERE '._DB_PREFIX_.'option.id='._DB_PREFIX_.'option_value.option_id AND option_id=:option_id_'.$i.'_key AND offer_id=o.id AND CAST(value AS UNSIGNED) >=:option_id_'.$i.'_from LIMIT 1) > 0 ';
									$bind_values['option_id_'.$i.'_key'] = $key;
									$bind_values['option_id_'.$i.'_from'] = $value['from'];
								}
								if(isset($value['from']) and $value['from']>=0 and isset($value['to']) and $value['to']>=0){$where_statement .= ' AND ';}
								if(isset($value['to']) and $value['to']>=0){
									$where_statement .= ' (SELECT count(1) FROM '._DB_PREFIX_.'option_value, `'._DB_PREFIX_.'option` WHERE '._DB_PREFIX_.'option.id='._DB_PREFIX_.'option_value.option_id AND option_id=:option_id_'.$i.'_key AND offer_id=o.id AND CAST(value AS UNSIGNED) <=:option_id_'.$i.'_to LIMIT 1) > 0 ';
									$bind_values['option_id_'.$i.'_key'] = $key;
									$bind_values['option_id_'.$i.'_to'] = $value['to'];
								}
							}else{
								$last2 = count($value);
								$j = 0;
								foreach($value as $key2 => $value2){
									$where_statement .= ' (SELECT count(1) FROM '._DB_PREFIX_.'option_value, `'._DB_PREFIX_.'option` WHERE '._DB_PREFIX_.'option.id='._DB_PREFIX_.'option_value.option_id AND option_id=:option_id_'.$i.'_'.$j.'_key AND offer_id=o.id AND value=:option_id_'.$i.'_'.$j.'_value LIMIT 1) > 0 ';
									$bind_values['option_id_'.$i.'_'.$j.'_key'] = $key;
									$bind_values['option_id_'.$i.'_'.$j.'_value'] = $value2;
									if($j!=$last2-1){$where_statement .= ' OR ';}
									$j++;
								}
							}
							$where_statement .= ' ) ';
						}else{
							$where_statement .= ' (SELECT count(1) FROM '._DB_PREFIX_.'option_value, `'._DB_PREFIX_.'option` WHERE '._DB_PREFIX_.'option.id='._DB_PREFIX_.'option_value.option_id AND option_id=:option_id_'.$i.'_key AND offer_id=o.id AND value LIKE :option_id_'.$i.'_value LIMIT 1) > 0 ';
							$bind_values['option_id_'.$i.'_key'] = $key;
							$bind_values['option_id_'.$i.'_value'] = $value;
						}
						if($i!=$last-1){$where_statement .= ' AND ';}
						$i++;
					}
					$where_statement .= ') ';
				}
			}
			if(!empty($_GET['date_from'])){
				$where_statement .= ' AND o.date >= :date_from ';
				$bind_values['date_from'] = $_GET['date_from'];
			}
			if(!empty($_GET['date_to'])){
				$where_statement .= ' AND o.date <= :date_to ';
				$bind_values['date_to'] = $_GET['date_to'].' 23:59:59 ';
			}
			if(!empty($_GET['date_finish_from'])){
				$where_statement .= ' AND o.date_finish >= :date_finish_from ';
				$bind_values['date_finish_from'] = $_GET['date_finish_from'];
			}
			if(!empty($_GET['date_finish_to'])){
				$where_statement .= ' AND o.date_finish <= :date_finish_to';
				$bind_values['date_finish_to'] = $_GET['date_finish_to'].' 23:59:59 ';
			}
			if(!empty($_GET['ip'])){
				$where_statement .= ' AND o.ip like :ip ';
				$bind_values['ip'] = '%'.$_GET['ip'].'%';
			}
		}
		$sort = ' o.date_start desc ';
		if(!empty($_GET['sort'])){
			if($_GET['sort']=='random'){
				$sort = ' rand() ';
			}elseif($_GET['sort']=='newest'){
				$sort = ' o.date_start desc ';
			}elseif($_GET['sort']=='oldest'){
				$sort = ' o.date_start ';
			}elseif($_GET['sort']=='cheapest'){
				$sort = ' ISNULL(o.price), o.price, o.date_start DESC ';
			}elseif($_GET['sort']=='most_expensive'){
				$sort = ' ISNULL(o.price), o.price DESC, o.date_start DESC ';
			}elseif($_GET['sort']=='a-z'){
				$sort = ' o.name, o.date_start DESC ';
			}elseif($_GET['sort']=='z-a'){
				$sort = ' o.name DESC, o.date_start DESC ';
			}elseif($select and $_GET['sort']=='nearest'){
				$sort = ' distance, o.date_start DESC ';
			}elseif($select and $_GET['sort']=='farthest'){
				$sort = ' distance DESC, o.date_start DESC ';
			}else{
				$sort = sortBy();
			}
		}
		if($type=='my_offers'){
			$where_statement .= ' AND o.user_id='.$user->id.' ';
		}elseif($type=='clipboard'){
			$where_statement .= ' AND o.active=1 AND (SELECT 1 FROM '._DB_PREFIX_.'clipboard WHERE offer_id=o.id AND user_id='.$user->id.') ';
		}elseif($type=='index_page'){
			$where_statement .= ' AND o.active=1 ';
		}elseif($type=='offers'){
			$where_statement .= ' AND o.active=1 ';
		}elseif($type=='admin'){
			$select .= ', u.username as username, (SELECT count(1) FROM '._DB_PREFIX_.'logs_offer WHERE offer_id=o.id) AS view_all, (SELECT count(Distinct lo.ip) FROM '._DB_PREFIX_.'logs_offer lo WHERE offer_id=o.id) AS view_unique ';
			$join .= ' LEFT JOIN '._DB_PREFIX_.'user u ON o.user_id = u.id ';
		}
		if($type=='offers' or $type=='my_offers' or $type=='clipboard'){
			$select .= ', c.name as category_name, s.name as state_name, s.slug as state_slug, s2.name as state2_name, s2.slug as state2_slug, t.name as type_name, t.slug as type_slug';
			$join .= 'LEFT JOIN '._DB_PREFIX_.'category c ON o.category_id = c.id
			LEFT JOIN '._DB_PREFIX_.'state s ON o.state_id = s.id
			LEFT JOIN '._DB_PREFIX_.'state s2 ON o.state2_id = s2.id
			LEFT JOIN '._DB_PREFIX_.'type t ON o.type_id = t.id';
		}
		if($type!='admin'){
			if($sort == ' o.date_start desc '){
				$sort = ' if(o.promoted="1", o.promoted_date_start, coalesce(o.promoted,0)) DESC, '.$sort;
			}else{
				$sort = ' o.promoted DESC, '.$sort;
			}
		}

		$offers = [];

		$sth = $db->prepare('SELECT SQL_CALC_FOUND_ROWS o.* '.$select.', 
			(SELECT CONCAT(folder,thumb) FROM '._DB_PREFIX_.'photo WHERE offer_id=o.id ORDER BY position LIMIT 1) AS thumb FROM '._DB_PREFIX_.'offer o '.$join.'
			WHERE '.$where_statement.' ORDER BY '.$sort.' LIMIT :limit_from, :limit_to');

		$sth->bindValue(':limit_from', paginationPageFrom($limit), PDO::PARAM_INT);
		$sth->bindValue(':limit_to', $limit, PDO::PARAM_INT);
		foreach($bind_values as $key => $value){
			$sth->bindValue(':'.$key, $value, PDO::PARAM_STR);
		}
		$sth->execute();
		while($row = $sth->fetch(PDO::FETCH_ASSOC)){
			if($type=='my_offers' and $settings['allow_refresh_offer']){
				$row['refresh']['active'] = false;
				$row['refresh']['days'] = ceil((strtotime($row['date_finish']) - time())/(60*60*24)-$settings['days_before_refresh']);
				if($row['active']==0 or $row['refresh']['days']<=0){
					$cost_offer = static::countCost($row['id']);
					if($cost_offer['total']){
						$row['refresh']['must_payed'] = true;
					}elseif(!$settings['automatically_activate_offers'] and !$row['admin_confirmed']){
						$row['refresh']['not_confirmed'] = true;
					}else{
						$row['refresh']['active'] = true;
					}
				}
			}
			$offers[] = $row;
		}

		generatePagination($limit);

		return $offers;
	}

		public static function addAd($data){
		global $db, $user, $settings;

		switch ($data['type_id']) {
			case 1:
				$data['days'] = 30;
				break;
			case 1.50:
				$data['days'] = 60;
				break;
			case 2:
				$data['days'] = 30;
				break;
			case 2.50:
				$data['days'] = 60;
				break;
			case 3:
				$data['days'] = 30;
				break;
			case 3.50:
				$data['days'] = 60;
				break;				
		}

		$date_end_d = Date("Y-m-d");
		$date_end = date('Y-m-d', strtotime($date_end_d. ' + '.$data['days'].' days'));

		$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'ad`(`user_id`, `name`, `promotion_type`, `date_start`, `days`, `date_end`, `state_id`, `state2_id`, `url`, `facebook`) VALUES (:user_id,:name,:type_id,NOW(),:days,:date_end,:state_id,:state2_id,:website,:facebook)');
		$sth->bindValue(':user_id', $user->getId(), PDO::PARAM_INT);
		$sth->bindValue(':name', $data['name'], PDO::PARAM_STR);
		$sth->bindValue(':type_id', $data['type_id'], PDO::PARAM_INT);
		$sth->bindValue(':days', $data['days'], PDO::PARAM_INT);
		$sth->bindValue(':date_end', $date_end, PDO::PARAM_STR);
		$sth->bindValue(':state_id', $data['state_id'], PDO::PARAM_INT);
		$sth->bindValue(':state2_id', $data['state2_id'], PDO::PARAM_INT);
		$sth->bindValue(':website', $data['website'], PDO::PARAM_STR);
		$sth->bindValue(':facebook', $data['facebook'], PDO::PARAM_STR);	
		$sth->execute();
		$id = $db->lastInsertId();

		$sth2 = $db->prepare('UPDATE `'._DB_PREFIX_.'photo_ad` SET offer_id=:offer_id WHERE id=:id');
		$sth2->bindValue(':offer_id', $id, PDO::PARAM_INT);
		$sth2->bindValue(':id', $data['photos'][0], PDO::PARAM_INT);
		$sth2->execute();
		
		return ['id'=>$id, 'slug'=>'slug', 'active'=>true, 'code'=>'123'];
	}
	
	public static function addOffer($data){
		global $db, $user, $settings;
		$code = bin2hex(random_bytes(32));
		if(empty($data['category_id'])){$data['category_id']=0;}
		if(empty($data['days'])){$data['days']=0;}

		$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'offer`(`user_id`, `name`, `slug`, `code`, `ip`, `date_start`, `days`, `date_finish`, `date`) VALUES (:user_id,:name,:slug,:code,:ip,NOW(),:days,(NOW() + INTERVAL :days_to_finish DAY),NOW())');
		$sth->bindValue(':user_id', $user->getId(), PDO::PARAM_INT);
		$sth->bindValue(':name', $data['name'], PDO::PARAM_STR);
		$sth->bindValue(':slug', slug($data['name']), PDO::PARAM_STR);
		$sth->bindValue(':code', $code, PDO::PARAM_STR);
		$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
		$sth->bindValue(':days', $data['days'], PDO::PARAM_INT);
		$sth->bindValue(':days_to_finish', getDays($data['days'])['length'], PDO::PARAM_INT);
		$sth->execute();
		$id = $db->lastInsertId();

		$offer = static::editOffer($id,$data);

		$offer_cost = static::countCost($id);
		if($offer_cost['total']){
			$active = 0;
			$send_mail = false;
		}elseif($user->getId()){
			$active = $settings['automatically_activate_offers'];
			$send_mail = true;
		}else{
			$active = 0;
			$send_mail = true;
		}

		if($active){
			$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'offer` SET `active`=1 WHERE id=:id LIMIT 1');
			$sth->bindValue(':id', $id, PDO::PARAM_INT);
			$sth->execute();
		}

		if($user->getId()){
			if($send_mail){
				sendMail('offer_start',$data['email'],['offer_name'=>$data['name'], 'offer_url'=>path('offer',$id,$offer['slug']),'user_id'=>$user->getId()]);
				static::refreshCountCategories($id);
			}
		}else{
			if($send_mail){
				sendMail('offer_start_not_logged',$data['email'],[
					'offer_edit_link'=>path('edit',$id,$offer['slug']).'?code='.$code, 'offer_activate_link'=>path('offer',$id,$offer['slug']).'?activate&code='.$code,
					'offer_name'=>$data['name'],
					'offer_url'=>path('offer',$id,$offer['slug'])]);
			}
		}
		return ['id'=>$id, 'slug'=>$offer['slug'], 'active'=>$active, 'code'=>$code];
	}

	public static function editOffer(int $id,$data,$checkCost=false){
		global $db, $settings, $user, $purifier;

		if($checkCost){
			$old_price = static::countCost($id)['total'];
		}

		if(!empty($data['address'])){$data['address'] = trim(strip_tags($data['address']));}else{$data['address'] = null;}
		if(empty($data['category_id'])){$data['category_id']=0;}
		if(empty($data['state_id'])){$data['state_id']=0;}
		if(empty($data['state2_id'])){$data['state2_id']=0;}
		if(empty($data['type_id'])){$data['type_id']=0;}
		if(!empty($data['address_lat'])){$data['address_lat'] = strval($data['address_lat']);}else{$data['address_lat'] = null;}
		if(!empty($data['address_long'])){$data['address_long'] = strval($data['address_long']);}else{$data['address_long'] = null;}
		if(isset($data['price_free'])){
			$data['price'] = $price_negotiate = null;
		}else{
			if(isset($data['price']) and is_numeric($data['price'])){$data['price'] = strval($data['price']);}else{$data['price'] = null;}
			$price_negotiate = isset($data['price_negotiate']);
		}

		$sth = $db->prepare('UPDATE '._DB_PREFIX_.'offer SET name=:name, slug=:slug, address=:address, phone=:phone, email=:email, url=:url, category_id=:category_id, state_id=:state_id, state2_id=:state2_id, type_id=:type_id, description=:description, address_lat=:address_lat, address_long=:address_long, price=:price, price_negotiate=:price_negotiate, price_free=:price_free WHERE id=:id LIMIT 1');
		$name = substr(trim(checkWordsBlackList(strip_tags($data['name']))),0,$settings['number_char_title']);
		$slug = slug($name);
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->bindValue(':name', $name, PDO::PARAM_STR);
		$sth->bindValue(':slug', $slug, PDO::PARAM_STR);
		$sth->bindValue(':address', $data['address'], PDO::PARAM_STR);
		$sth->bindValue(':phone', trim(strip_tags($data['phone'])), PDO::PARAM_STR);
		$sth->bindValue(':email', trim(strip_tags($data['email'])), PDO::PARAM_STR);
		$sth->bindValue(':url', trim(strip_tags($data['url'])), PDO::PARAM_STR);
		$sth->bindValue(':category_id', $data['category_id'], PDO::PARAM_INT);
		$sth->bindValue(':state_id', $data['state_id'], PDO::PARAM_INT);
		$sth->bindValue(':state2_id', $data['state2_id'], PDO::PARAM_INT);
		$sth->bindValue(':type_id', $data['type_id'], PDO::PARAM_INT);
		$sth->bindValue(':description', checkWordsBlackList(nofollow($purifier->purify(trim($data['description'])))), PDO::PARAM_STR);
		$sth->bindValue(':address_lat', $data['address_lat'], PDO::PARAM_STR);
		$sth->bindValue(':address_long', $data['address_long'], PDO::PARAM_STR);
		$sth->bindValue(':price', $data['price'], PDO::PARAM_STR);
		$sth->bindValue(':price_negotiate', $price_negotiate, PDO::PARAM_INT);
		$sth->bindValue(':price_free', isset($data['price_free']), PDO::PARAM_INT);
		$sth->execute();

		if($checkCost){
			$new_price = static::countCost($id)['total'];
			if($new_price>$old_price){
				static::deactivate($id);
			}
		}

		$where_statement = ' true ';
		if($settings['photo_add'] and !empty($data['photos'])){
			foreach($data['photos'] as $photo_id){
				if(is_numeric($photo_id) and $photo_id>0){
					$where_statement .= ' AND id!='.intval($photo_id).' ';
				}
			}
		}
		$sth = $db->prepare('SELECT * from '._DB_PREFIX_.'photo WHERE offer_id=:offer_id AND ('.$where_statement.')');
		$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
		$sth->execute();
		foreach($sth as $row){;
			unlink(_FOLDER_PHOTOS_.$row['folder'].$row['thumb']);
			unlink(_FOLDER_PHOTOS_.$row['folder'].$row['url']);
		}
		$sth = $db->prepare('DELETE from '._DB_PREFIX_.'photo WHERE offer_id=:offer_id and ('.$where_statement.')');
		$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
		$sth->execute();

		if($settings['photo_add'] and !empty($data['photos'])){

			if($user->getId() and $user->moderator){
				$sth = $db->prepare('SELECT * from '._DB_PREFIX_.'photo WHERE id=:id LIMIT 1');
			}else{
				$sth = $db->prepare('SELECT * from '._DB_PREFIX_.'photo WHERE id=:id AND user_id=:user_id LIMIT 1');
				$sth->bindValue(':user_id', $user->getId(), PDO::PARAM_INT);
			}
			$photo_position = 0;
			foreach($data['photos'] as $key => $value){
				$sth->bindValue(':id', $value, PDO::PARAM_INT);
				$sth->execute();
				$photo = $sth->fetch(PDO::FETCH_ASSOC);
				if($photo){
					if(!$settings['photo_max'] or $photo_position < $settings['photo_max']){
						$sth2 = $db->prepare('UPDATE `'._DB_PREFIX_.'photo` SET offer_id=:offer_id, position=:position WHERE id=:id');
						$sth2->bindValue(':offer_id', $id, PDO::PARAM_INT);
						$sth2->bindValue(':position', $photo_position, PDO::PARAM_INT);
						$sth2->bindValue(':id', $photo['id'], PDO::PARAM_INT);
						$sth2->execute();
					}else{
						$sth2 = $db->prepare('UPDATE `'._DB_PREFIX_.'photo` SET offer_id=0 WHERE id=:id');
						$sth2->bindValue(':id', $photo['id'], PDO::PARAM_INT);
						$sth2->execute();
					}
					$photo_position++;
				}
			}
		}

		$sth = $db->prepare('DELETE from '._DB_PREFIX_.'option_value WHERE offer_id=:offer_id');
		$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
		$sth->execute();
		if(isset($data['options']) and is_array($data['options'])){
			$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'option_value`(`offer_id`, `option_id`, `value`) VALUES (:offer_id, :option_id, :value)');
			$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
			foreach($data['options'] as $key=>$value){
				if(is_array($value)){
					foreach($value as $value2){
						$sth->bindValue(':option_id', $key, PDO::PARAM_INT);
						$sth->bindValue(':value', trim(strip_tags($value2)), PDO::PARAM_STR);
						$sth->execute();
					}
				}elseif($value){
					$sth->bindValue(':option_id', $key, PDO::PARAM_INT);
					$sth->bindValue(':value', trim(strip_tags($value)), PDO::PARAM_STR);
					$sth->execute();
				}
			}
		}

		return ['id'=>$id, 'slug'=>$slug];
	}

	public static function loadOffer(int $id,$controller=''){
		global $db, $user, $settings;
		$join = '';
		$select = '';
		if($controller == 'offer'){
			$select .= ', c.name as category_name, s.name as state_name, s.slug as state_slug, s2.name as state2_name, s2.slug as state2_slug, t.name as type_name, t.slug as type_slug, u.username as username, u.avatar as user_avatar, (SELECT count(1) FROM '._DB_PREFIX_.'logs_offer WHERE offer_id=o.id) AS view_all, (SELECT count(Distinct lo.ip) FROM '._DB_PREFIX_.'logs_offer lo WHERE offer_id=o.id) AS view_unique  ';
			$join .= 'LEFT JOIN '._DB_PREFIX_.'category c ON o.category_id = c.id
			LEFT JOIN '._DB_PREFIX_.'state s ON o.state_id = s.id
			LEFT JOIN '._DB_PREFIX_.'state s2 ON o.state2_id = s2.id
			LEFT JOIN '._DB_PREFIX_.'type t ON o.type_id = t.id
			LEFT JOIN '._DB_PREFIX_.'user u ON o.user_id = u.id ';
			if($user->getId()){
				$select .= ', (SELECT count(1) FROM '._DB_PREFIX_.'clipboard WHERE user_id='.$user->getId().' and offer_id=o.id LIMIT 1) AS clipboard';
			}
		}
		$sth = $db->prepare('SELECT o.* '.$select.' FROM '._DB_PREFIX_.'offer o '.$join.' WHERE o.id=:id LIMIT 1');
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		$offer = $sth->fetch(PDO::FETCH_ASSOC);
		if($offer){
			if($controller!='add_similar' and $controller!='payment'){
				$sth = $db->prepare('SELECT id, folder, url, thumb FROM '._DB_PREFIX_.'photo WHERE offer_id=:offer_id ORDER BY position');
				$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
				$sth->execute();
				while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
					$offer['photos'][] = $row;
				}
			}

			if($controller=='edit' || $controller=='add_similar'){

				$category = category::getCategory($offer['category_id'], true);
				$offer['categories'] = [];
				if(!empty($category['breadcrumbs'])){
					foreach($category['breadcrumbs'] as $breadcrumb){
						$offer['categories'][] = $breadcrumb['id'];
					}
				}

				$sth = $db->prepare('SELECT name, id, value FROM '._DB_PREFIX_.'option_value, `'._DB_PREFIX_.'option` WHERE '._DB_PREFIX_.'option_value.option_id = '._DB_PREFIX_.'option.id and '._DB_PREFIX_.'option_value.offer_id=:offer_id');
				$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
				$sth->execute();
				while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
					$offer['options'][$row['id']][] = $row['value'];
				}

			}elseif($controller=='offer'){
				$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'logs_offer`(`offer_id`, `user_id`, `ip`, `date`) VALUES (:offer_id,:user_id,:ip,NOW())');
				$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
				$sth->bindValue(':user_id', $user->getId(), PDO::PARAM_INT);
				$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
				$sth->execute();

				$sth = $db->prepare('SELECT name, id, value FROM '._DB_PREFIX_.'option_value, `'._DB_PREFIX_.'option` WHERE '._DB_PREFIX_.'option_value.option_id = '._DB_PREFIX_.'option.id and '._DB_PREFIX_.'option_value.offer_id=:offer_id');
				$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
				$sth->execute();
				while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
					$offer['options'][$row['name']][] = $row['value'];
				}

				$category_id = $offer['category_id'];
				$offer['categories'] = [];
				do{
					$category = category::getCategory($category_id);
					if($category){
						$offer['categories'][] = $category;
						$category_id = $category['category_id'];
					}else{
						$category_id = 0;
					}
				}while($category_id);
				$offer['categories'] = array_reverse($offer['categories']);
			}
			if($controller=='add_similar'){
				$offer['add_similar'] = true;
			}
			return $offer;
		}
	}

	public static function checkActiveOffer(int $id,$code=''){
		global $db, $user;
		if($user->moderator){
			$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'offer WHERE id=:id LIMIT 1');
		}elseif($code){
			$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'offer WHERE code=:code AND id=:id LIMIT 1');
			$sth->bindValue(':code', $code, PDO::PARAM_STR);
		}else{
			$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'offer WHERE (active=1 OR (user_id=:user_id AND user_id>0)) AND id=:id LIMIT 1');
			$sth->bindValue(':user_id', $user->getId(), PDO::PARAM_INT);
		}
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		if($sth->fetchColumn()){
			return true;
		}
		return false;
	}

	public static function activateCode($code){
		global $db, $settings, $user;
		$sth = $db->prepare('SELECT id, email FROM '._DB_PREFIX_.'offer WHERE active=0 AND user_id=0 AND code=:code LIMIT 1');
		$sth->bindValue(':code', $code, PDO::PARAM_STR);
		$sth->execute();
		$offer = $sth->fetch(PDO::FETCH_ASSOC);
		if($offer and static::countCost($offer['id'])['total']==0){
			$user_id = user::getIdFromEmail($offer['email']);
			$sth = $db->prepare('UPDATE '._DB_PREFIX_.'offer SET active=1, user_id=:user_id WHERE id=:id LIMIT 1');
			$sth->bindValue(':user_id', $user_id, PDO::PARAM_INT);
			$sth->bindValue(':id', $offer['id'], PDO::PARAM_INT);
			$sth->execute();
			static::refreshCountCategories($offer['id']);
			$_SESSION['flash'] = 'offer_activated';
		}
	}

//see activateCode
	public static function activateAd($adId){
		global $db, $settings, $user;
			$sth = $db->prepare('UPDATE '._DB_PREFIX_."payment SET status='completed' WHERE item_id=:id and type = 'ad' LIMIT 1"); 
			$sth->bindValue(':id', $adId, PDO::PARAM_INT);
			$sth->execute();
			$_SESSION['flash'] = 'offer_activated';
	}

	public static function checkPermissions(int $id,$code=''){
		global $user, $db;
		if($user->logged_in){
			if($user->moderator){return true;}
			$user_id = $user->id;
			$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'offer WHERE id=:id AND user_id=:user_id LIMIT 1');
			$sth->bindValue(':user_id', $user_id, PDO::PARAM_INT);
		}else{
			if(empty($code)){
				return false;
			}else{
				$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'offer WHERE id=:id AND code=:code LIMIT 1');
				$sth->bindValue(':code', $code, PDO::PARAM_STR);
			}
		}
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		if($sth->fetchColumn()){return true;}
		return false;
	}

	public static function newSessionCode(){
		global $db, $user;
		$session_code = bin2hex(random_bytes(32));
		$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'session_offer`(`user_id`, `code`, `ip`, `date`) VALUES (:user_id,:code,:ip,NOW())');
		$sth->bindValue(':user_id', $user->getId(), PDO::PARAM_INT);
		$sth->bindValue(':code', $session_code, PDO::PARAM_STR);
		$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
		$sth->execute();
		return $session_code;
	}

	public static function checkSessionCode($session_code){
		global $db, $settings;
		if($settings['check_ip_user']){
			$sth = $db->prepare('SELECT 1 from '._DB_PREFIX_.'session_offer WHERE code=:code AND ip=:ip LIMIT 1');
			$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
		}else{
			$sth = $db->prepare('SELECT 1 from '._DB_PREFIX_.'session_offer WHERE code=:code LIMIT 1');
		}
		$sth->bindValue(':code', $session_code, PDO::PARAM_STR);
		$sth->execute();
		if($sth->fetchColumn()){
			static::removeSessionCode($session_code);
			return true;
		}
		return false;
	}

	public static function removeSessionCode($session_code){
		global $db;
		$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'session_offer` WHERE code=:code');
		$sth->bindValue(':code', $session_code, PDO::PARAM_STR);
		$sth->execute();
	}

	public static function getUser($id=0){
		global $db;
		$user = [];
		if($id>0){
			$sth = $db->prepare('SELECT id, username, avatar from '._DB_PREFIX_.'user WHERE id=:id LIMIT 1');
			$sth->bindValue(':id', $id, PDO::PARAM_INT);
			$sth->execute();
			$user = $sth->fetch(PDO::FETCH_ASSOC);
		}
		return $user;
	}

	public static function getViews(int $id){
		global $db;
		$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'logs_offer WHERE offer_id=:offer_id');
		$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
		$sth->execute();
		$all = count($sth->fetchAll());

		$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'logs_offer WHERE offer_id=:offer_id GROUP BY ip');
		$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
		$sth->execute();
		$unique = count($sth->fetchAll());

		return ['all'=>$all, 'unique'=>$unique];
	}

	public static function deactivate(int $id){
		global $db;
		$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'offer` SET active=0 WHERE id=:id LIMIT 1');
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		static::refreshCountCategories($id);
	}

	public static function activate(int $id,$date_finish='',$admin_confirmed=0){
		global $db, $settings;
		if(!$date_finish){
			$date_finish = date('Y-m-d', strtotime(date("Y-m-d"). ' + '.$settings['days_default'].' days'));
		}
		$sth = $db->prepare('UPDATE '._DB_PREFIX_.'offer SET active=1, date_start=NOW(), date_finish=:date_finish, admin_confirmed=:admin_confirmed WHERE id=:id LIMIT 1');
		$sth->bindValue(':date_finish', $date_finish, PDO::PARAM_STR);
		$sth->bindValue(':admin_confirmed', $admin_confirmed, PDO::PARAM_INT);
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		static::refreshCountCategories($id);
	}

	public static function disablePromote(int $id){
		global $db;
		$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'offer` SET promoted=0 WHERE id=:id limit 1');
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
	}

	public static function updateOffer(int $id, $days, $type)
	{
		global $db;
		$date_finish = date('Y-m-d', strtotime(date(). ' + '.$days.' days'));
		
		$sth = $db->prepare('UPDATE '._DB_PREFIX_.'offer SET promoted_date_end=:promoted_date_end, days=:days, promotion_type=:type WHERE id=:id LIMIT 1');
		$sth->bindValue(':promoted_date_end', $date_finish, PDO::PARAM_STR);
		$sth->bindValue(':days', $days, PDO::PARAM_STR);
		$sth->bindValue(':type', $type, PDO::PARAM_STR);
		$sth->bindValue(':id', $id, PDO::PARAM_INT);		
		$sth->execute();
	}
	
	public static function enablePromote(int $id, $date=false){
		global $db, $settings;
		$offer = static::loadOffer($id);
	
		$date_finish = date("Y-m-d", strtotime($offer['date_finish']));
		if($date){
			$promoted_date_end = $date;
		}elseif($offer['promoted'] and $offer['promoted_date_end'] > date("Y-m-d")){
			$promoted_date_end = date('Y-m-d', strtotime($offer['promoted_date_end']. ' + '.$settings['promote_days'].' days'));
		}else{
			$promoted_date_end = date('Y-m-d', strtotime(date("Y-m-d"). ' + '.$settings['promote_days'].' days'));
		}
		if($date_finish < $promoted_date_end){
			$date_finish = $promoted_date_end;
		}
		$sth = $db->prepare('UPDATE '._DB_PREFIX_.'offer SET promoted=1, promoted_date_start=NOW(), date_finish=:date_finish, WHERE id=:id LIMIT 1');
		$sth->bindValue(':date_finish', $date_finish, PDO::PARAM_STR);
		$sth->bindValue(':id', $offer['id'], PDO::PARAM_INT);		
		$sth->execute();

	}

	public static function refresh(int $id){
		global $db, $user, $settings;
		if($settings['automatically_activate_offers']){
			$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'offer` SET active = 1, date_start=NOW(), date_finish=(CURDATE() + INTERVAL '.$settings['days_refresh'].' DAY) WHERE id=:id AND user_id="'.$user->getId().'" LIMIT 1');
		}else{
			$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'offer` SET active = 1, date_start=NOW(), date_finish=(CURDATE() + INTERVAL '.$settings['days_refresh'].' DAY) WHERE id=:id AND user_id="'.$user->getId().'" AND admin_confirmed=1 LIMIT 1');
		}
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		static::refreshCountCategories($id);
	}

	public static function remove(int $id){
		global $db;
		$offer = static::loadOffer($id);
		if($offer){
			$sth = $db->prepare('SELECT * from '._DB_PREFIX_.'photo WHERE offer_id=:offer_id');
			$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
			$sth->execute();
			foreach($sth as $row){
				unlink(_FOLDER_PHOTOS_.$row['folder'].$row['thumb']);
				unlink(_FOLDER_PHOTOS_.$row['folder'].$row['url']);
			}
			$sth = $db->prepare('DELETE from '._DB_PREFIX_.'photo WHERE offer_id=:offer_id');
			$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
			$sth->execute();
			$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'option_value` WHERE offer_id=:offer_id');
			$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
			$sth->execute();
			$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'clipboard` WHERE offer_id=:offer_id');
			$sth->bindValue(':offer_id', $id, PDO::PARAM_INT);
			$sth->execute();
			$sth = $db->prepare('DELETE FROM '._DB_PREFIX_.'offer WHERE id=:id LIMIT 1');
			$sth->bindValue(':id', $id, PDO::PARAM_INT);
			$sth->execute();

			if($offer['category_id']){
				category::refreshCount($offer['category_id']);
			}
		}
	}

	public static function refreshCountCategories(int $id){
		$offer = static::loadOffer($id);
		if($offer['category_id']){
			category::refreshCount($offer['category_id']);
		}
	}

	public static function loadSimilarOffers($offer, int $limit=10){
		global $db;
		
		$where_statement = ' (false ';

		if($offer['category_id']){
			$where_statement .= ' OR category_id = '.$offer['category_id'];
		}
		if($offer['state_id']){
			$where_statement .= ' OR state_id = '.$offer['state_id'];
		}
		if($offer['type_id']){
			$where_statement .= ' OR type_id = '.$offer['type_id'];
		}

		$where_statement .= ' ) ';

		$similar_offers = [];
		$sth = $db->prepare('SELECT *, (SELECT CONCAT(folder,thumb) FROM '._DB_PREFIX_.'photo WHERE offer_id='._DB_PREFIX_.'offer.id LIMIT 1) AS thumb
			FROM '._DB_PREFIX_.'offer WHERE id!=:id AND active=1 AND '.$where_statement.' ORDER BY rand() LIMIT :limit_to');
		$sth->bindValue(':id', $offer['id'], PDO::PARAM_INT);
		$sth->bindValue(':limit_to', $limit, PDO::PARAM_INT);
		$sth->execute();
		while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$similar_offers[] = $row;
		}
		return $similar_offers;
	}

	public static function loadOffersWithTypes(int $limit=10, $type='all', string $typePromo = '0'){
		global $db, $settings, $user;
		$where_statement = ' true ';
		$select = '';
		$join = '';
		$bind_values = [];
		if(isset($_GET['category']) and $_GET['category']>0){
			$where_statement .= ' AND (o.category_id = :category OR o.category_id = any(SELECT subcategory_id FROM '._DB_PREFIX_.'subcategory WHERE category_id=:category)) ';
			$bind_values['category'] = $_GET['category'];
		}
		if(!empty($_GET['type'])){
			$where_statement .= ' AND o.type_id = (SELECT id FROM '._DB_PREFIX_.'type WHERE slug=:type LIMIT 1) ';
			$bind_values['type'] = $_GET['type'];
		}
		if(!empty($_GET['state'])){
			$where_statement .= ' AND o.state_id = (SELECT id FROM '._DB_PREFIX_.'state WHERE slug=:state LIMIT 1) ';
			$bind_values['state'] = $_GET['state'];
			if(!empty($_GET['state2'])){
				$where_statement .= ' AND o.state2_id = (SELECT id FROM '._DB_PREFIX_.'state WHERE slug=:state2 LIMIT 1) ';
				$bind_values['state2'] = $_GET['state2'];
			}
		}
		if(isset($_GET['search'])){
			if(isset($_GET['id']) and $_GET['id']>0){
				$where_statement .= ' AND o.id = :id ';
				$bind_values['id'] = $_GET['id'];
			}
			if(!empty($_GET['username'])){
				$where_statement .= ' AND o.user_id = (SELECT id FROM '._DB_PREFIX_.'user WHERE username=:username LIMIT 1) ';
				$bind_values['username'] = $_GET['username'];
			}
			if(!empty($_GET['name'])){
				$names = explode(' ', $_GET['name']);
				$where_statement .= ' AND ( ';
				for($i=0; $i < count($names); $i++){
					$where_statement .= ' o.slug LIKE :name_'.$i.' ';
					if($i!=(count($names)-1)){$where_statement .= ' OR ';}
					$bind_values['name_'.$i] = '%'.slug($names[$i]).'%';
				}
				$where_statement .= ' ) ';
			}
			if(!empty($_GET['keywords'])){
				if(isset($_GET['exact_phrase'])){
					$where_statement .= ' AND (o.slug LIKE :keywords OR o.description LIKE :keywords) ';
					$bind_values['keywords'] = '%'.slug($_GET['keywords']).'%';
				}else{
					$keywords = explode(' ', $_GET['keywords']);
					$where_statement .= ' AND ( ';
					for($i=0; $i < count($keywords); $i++){
						$where_statement .= ' (o.slug LIKE :keywords_'.$i.' OR o.description LIKE :keywords_'.$i.') ';
						if($i!=(count($keywords)-1)){$where_statement .= ' AND ';}
						$bind_values['keywords_'.$i] = '%'.slug($keywords[$i]).'%';
					}
					$where_statement .= ' ) ';
				}
			}
			if(isset($_GET['user_id']) and $_GET['user_id']>0){
				$where_statement .= ' AND o.user_id=:user_id ';
				$bind_values['user_id'] = $_GET['user_id'];
			}
			if(isset($_GET['active'])){
				if($_GET['active']=='yes'){
					$where_statement .= ' AND o.active="1" ';
				}elseif($_GET['active']=='no'){
					$where_statement .= ' AND o.active="0" ';
				}
			}
			if(isset($_GET['promoted'])){
				if($_GET['promoted']=='yes'){
					$where_statement .= ' AND o.promoted="1" ';
				}elseif($_GET['promoted']=='no'){
					$where_statement .= ' AND o.promoted="0" ';
				}
			}
			if(!empty($_GET['address'])){
				if(isset($_GET['distance']) and $_GET['distance']>0){
					$coordinates = getCoordinates($_GET['address']);
					$select .= ' , (6371 * acos( cos( radians('.$coordinates['lat'].')) * cos( radians(o.address_lat) ) * cos( radians(o.address_long) - radians('.$coordinates['long'].')) + sin(radians('.$coordinates['lat'].')) * sin(radians(o.address_lat)))) AS distance ';
					$where_statement .= ' AND o.address_lat!=0 AND o.address_long!=0 HAVING distance < :distance ';
					$bind_values['distance'] = $_GET['distance'];
				}else{
					$where_statement .= ' AND o.address LIKE :address ';
					$bind_values['address'] = $_GET['address'];
				}
			}
			if(isset($_GET['price_from']) and $_GET['price_from']>0){
				$where_statement .= ' AND o.price>=:price_from ';
				$bind_values['price_from'] = $_GET['price_from'];
			}
			if(isset($_GET['price_to']) and $_GET['price_to']>0){
				$where_statement .= ' AND o.price<=:price_to ';
				$bind_values['price_to'] = $_GET['price_to'];
			}
			if(isset($_GET['options']) and is_array($_GET['options'])){
				$options = array_filter($_GET['options']);
				foreach($options as $key => $value){
					if(is_array($value)){
						$options[$key] = array_filter($value);
					}
				}
				$options = array_filter($options);
				if(!empty($options)){
					$where_statement .= ' AND (';
					$last = count($options);
					$i = 0;
					foreach($options as $key => $value){
						if(is_array($value)){
							$where_statement .= ' ( ';
							if(isset($value['from']) || isset($value['to'])){
								if(isset($value['from']) and $value['from']>=0){
									$where_statement .= ' (SELECT count(1) FROM '._DB_PREFIX_.'option_value, `'._DB_PREFIX_.'option` WHERE '._DB_PREFIX_.'option.id='._DB_PREFIX_.'option_value.option_id AND option_id=:option_id_'.$i.'_key AND offer_id=o.id AND CAST(value AS UNSIGNED) >=:option_id_'.$i.'_from LIMIT 1) > 0 ';
									$bind_values['option_id_'.$i.'_key'] = $key;
									$bind_values['option_id_'.$i.'_from'] = $value['from'];
								}
								if(isset($value['from']) and $value['from']>=0 and isset($value['to']) and $value['to']>=0){$where_statement .= ' AND ';}
								if(isset($value['to']) and $value['to']>=0){
									$where_statement .= ' (SELECT count(1) FROM '._DB_PREFIX_.'option_value, `'._DB_PREFIX_.'option` WHERE '._DB_PREFIX_.'option.id='._DB_PREFIX_.'option_value.option_id AND option_id=:option_id_'.$i.'_key AND offer_id=o.id AND CAST(value AS UNSIGNED) <=:option_id_'.$i.'_to LIMIT 1) > 0 ';
									$bind_values['option_id_'.$i.'_key'] = $key;
									$bind_values['option_id_'.$i.'_to'] = $value['to'];
								}
							}else{
								$last2 = count($value);
								$j = 0;
								foreach($value as $key2 => $value2){
									$where_statement .= ' (SELECT count(1) FROM '._DB_PREFIX_.'option_value, `'._DB_PREFIX_.'option` WHERE '._DB_PREFIX_.'option.id='._DB_PREFIX_.'option_value.option_id AND option_id=:option_id_'.$i.'_'.$j.'_key AND offer_id=o.id AND value=:option_id_'.$i.'_'.$j.'_value LIMIT 1) > 0 ';
									$bind_values['option_id_'.$i.'_'.$j.'_key'] = $key;
									$bind_values['option_id_'.$i.'_'.$j.'_value'] = $value2;
									if($j!=$last2-1){$where_statement .= ' OR ';}
									$j++;
								}
							}
							$where_statement .= ' ) ';
						}else{
							$where_statement .= ' (SELECT count(1) FROM '._DB_PREFIX_.'option_value, `'._DB_PREFIX_.'option` WHERE '._DB_PREFIX_.'option.id='._DB_PREFIX_.'option_value.option_id AND option_id=:option_id_'.$i.'_key AND offer_id=o.id AND value LIKE :option_id_'.$i.'_value LIMIT 1) > 0 ';
							$bind_values['option_id_'.$i.'_key'] = $key;
							$bind_values['option_id_'.$i.'_value'] = $value;
						}
						if($i!=$last-1){$where_statement .= ' AND ';}
						$i++;
					}
					$where_statement .= ') ';
				}
			}
			if(!empty($_GET['date_from'])){
				$where_statement .= ' AND o.date >= :date_from ';
				$bind_values['date_from'] = $_GET['date_from'];
			}
			if(!empty($_GET['date_to'])){
				$where_statement .= ' AND o.date <= :date_to ';
				$bind_values['date_to'] = $_GET['date_to'].' 23:59:59 ';
			}
			if(!empty($_GET['date_finish_from'])){
				$where_statement .= ' AND o.date_finish >= :date_finish_from ';
				$bind_values['date_finish_from'] = $_GET['date_finish_from'];
			}
			if(!empty($_GET['date_finish_to'])){
				$where_statement .= ' AND o.date_finish <= :date_finish_to';
				$bind_values['date_finish_to'] = $_GET['date_finish_to'].' 23:59:59 ';
			}
			if(!empty($_GET['ip'])){
				$where_statement .= ' AND o.ip like :ip ';
				$bind_values['ip'] = '%'.$_GET['ip'].'%';
			}
		}
		$sort = ' o.date_start desc ';
		if(!empty($_GET['sort'])){
			if($_GET['sort']=='random'){
				$sort = ' rand() ';
			}elseif($_GET['sort']=='newest'){
				$sort = ' o.date_start desc ';
			}elseif($_GET['sort']=='oldest'){
				$sort = ' o.date_start ';
			}elseif($_GET['sort']=='cheapest'){
				$sort = ' ISNULL(o.price), o.price, o.date_start DESC ';
			}elseif($_GET['sort']=='most_expensive'){
				$sort = ' ISNULL(o.price), o.price DESC, o.date_start DESC ';
			}elseif($_GET['sort']=='a-z'){
				$sort = ' o.name, o.date_start DESC ';
			}elseif($_GET['sort']=='z-a'){
				$sort = ' o.name DESC, o.date_start DESC ';
			}elseif($select and $_GET['sort']=='nearest'){
				$sort = ' distance, o.date_start DESC ';
			}elseif($select and $_GET['sort']=='farthest'){
				$sort = ' distance DESC, o.date_start DESC ';
			}else{
				$sort = sortBy();
			}
		}
		if($type=='my_offers'){
			$where_statement .= ' AND o.user_id='.$user->id.' ';
		}elseif($type=='clipboard'){
			$where_statement .= ' AND o.active=1 AND (SELECT 1 FROM '._DB_PREFIX_.'clipboard WHERE offer_id=o.id AND user_id='.$user->id.') ';
		}elseif($type=='index_page'){
			$where_statement .= ' AND o.active=1 ';
		}elseif($type=='offers'){
			$where_statement .= ' AND o.active=1 ';
		}elseif($type=='admin'){
			$select .= ', u.username as username, (SELECT count(1) FROM '._DB_PREFIX_.'logs_offer WHERE offer_id=o.id) AS view_all, (SELECT count(Distinct lo.ip) FROM '._DB_PREFIX_.'logs_offer lo WHERE offer_id=o.id) AS view_unique ';
			$join .= ' LEFT JOIN '._DB_PREFIX_.'user u ON o.user_id = u.id ';
		}
		if($type=='offers' or $type=='my_offers' or $type=='clipboard'){
			$select .= ', c.name as category_name, s.name as state_name, s.slug as state_slug, s2.name as state2_name, s2.slug as state2_slug, t.name as type_name, t.slug as type_slug';
			$join .= 'LEFT JOIN '._DB_PREFIX_.'category c ON o.category_id = c.id
			LEFT JOIN '._DB_PREFIX_.'state s ON o.state_id = s.id
			LEFT JOIN '._DB_PREFIX_.'state s2 ON o.state2_id = s2.id
			LEFT JOIN '._DB_PREFIX_.'type t ON o.type_id = t.id';
		}
		if($type!='admin'){
			if($sort == ' o.date_start desc '){
				$sort = ' if(o.promoted="1", o.promoted_date_start, coalesce(o.promoted,0)) DESC, '.$sort;
			}else{
				$sort = ' o.promoted DESC, '.$sort;
			}
			if (!isset($_GET['sort'])) 
			{
				if ($typePromo == '2') $sort = " o.promoted desc, o.promotion_type ";
				if ($typePromo == '1') 
				{
					$sort = " o.promoted desc, ord ";
					$select = $select. " , ABS(o.promotion_type - 1) as ord ";
				}
					
			}
		}

		$offers = [];

		$sth = $db->prepare('SELECT SQL_CALC_FOUND_ROWS o.* '.$select.', 
			(SELECT CONCAT(folder,thumb) FROM '._DB_PREFIX_.'photo WHERE offer_id=o.id ORDER BY position LIMIT 1) AS thumb FROM '._DB_PREFIX_.'offer o '.$join.'
			WHERE '.$where_statement.' ORDER BY '.$sort.' LIMIT :limit_from, :limit_to');

		$sth->bindValue(':limit_from', paginationPageFrom($limit), PDO::PARAM_INT);
		$sth->bindValue(':limit_to', $limit, PDO::PARAM_INT);
		foreach($bind_values as $key => $value){
			$sth->bindValue(':'.$key, $value, PDO::PARAM_STR);
		}
		
		$sth->execute();
		while($row = $sth->fetch(PDO::FETCH_ASSOC)){
			if($type=='my_offers' and $settings['allow_refresh_offer']){
				$row['refresh']['active'] = false;
				$row['refresh']['days'] = ceil((strtotime($row['date_finish']) - time())/(60*60*24)-$settings['days_before_refresh']);
				if($row['active']==0 or $row['refresh']['days']<=0){
					$cost_offer = static::countCost($row['id']);
					if($cost_offer['total']){
						$row['refresh']['must_payed'] = true;
					}elseif(!$settings['automatically_activate_offers'] and !$row['admin_confirmed']){
						$row['refresh']['not_confirmed'] = true;
					}else{
						$row['refresh']['active'] = true;
					}
				}
			}
			$offers[] = $row;
		}

		generatePagination($limit);

		return $offers;
	}
	
	public static function loadRandomOffers(int $limit=10){
		global $db;

		$similar_offers = [];
		$sth = $db->prepare('SELECT *, (SELECT CONCAT(folder,thumb) FROM '._DB_PREFIX_.'photo WHERE offer_id='._DB_PREFIX_.'offer.id LIMIT 1) AS thumb
			FROM '._DB_PREFIX_.'offer WHERE active=1 ORDER BY promoted desc, rand() LIMIT :limit_to');
		$sth->bindValue(':limit_to', $limit, PDO::PARAM_INT);

		$sth->execute();
		while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$similar_offers[] = $row;
		}
		return $similar_offers;
	}

	public static function clipboardAdd(int $offer_id){
		global $db, $user;
		if($user->getId() and $offer_id > 0){
			$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'clipboard WHERE user_id=:user_id and offer_id=:offer_id LIMIT 1');
			$sth->bindValue(':user_id', $user->getId(), PDO::PARAM_INT);
			$sth->bindValue(':offer_id', $offer_id, PDO::PARAM_INT);
			$sth->execute();
			if(!$sth->fetchColumn()){
				$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'clipboard`(`user_id`, `offer_id`, `date`) VALUES (:user_id,:offer_id,NOW())');
				$sth->bindValue(':user_id', $user->getId(), PDO::PARAM_INT);
				$sth->bindValue(':offer_id', $offer_id, PDO::PARAM_INT);
				$sth->execute();
			}
		}
	}

	public static function clipboardRemove(int $offer_id){
		global $db, $user;
		$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'clipboard` WHERE user_id=:user_id AND offer_id=:offer_id');
		$sth->bindValue(':user_id', $user->getId(), PDO::PARAM_INT);
		$sth->bindValue(':offer_id', $offer_id, PDO::PARAM_INT);
		$sth->execute();
	}

	public static function addPhoto(){
		global $db, $settings, $user;

		$path_parts = pathinfo($_FILES['file']['name']);
		$path_parts['extension'] = strtolower($path_parts['extension']);

		if(!in_array($path_parts['extension'] , ['jpg','jpeg','png'])){
			return ['status'=>0, 'info'=>lang('Invalid file type')];
		}elseif($settings['photo_max_size'] and $_FILES["file"]["size"] > $settings['photo_max_size']*1024){
			return ['status'=>0, 'info'=>lang('The file size is too large')];
		}elseif($settings['photo_max'] and $_POST['count_photo']>$settings['photo_max']){
			return ['status'=>0, 'info'=>lang('Photo limit exceeded').' ('.$settings['photo_max'].')'];
		}else{

			if(!file_exists(_FOLDER_PHOTOS_.date('Y'))){
				mkdir(_FOLDER_PHOTOS_.date('Y'));
			}
			$folder = date('Y').'/'.date('m').'/';
			if(!file_exists(_FOLDER_PHOTOS_.$folder)){
				mkdir(_FOLDER_PHOTOS_.$folder);
			}
			chmod(_FOLDER_PHOTOS_.$folder, 0777);

			$url = substr(slug($path_parts['filename']), 0, 200).'.'.$path_parts['extension'];
			$i = 0;
			while(file_exists(_FOLDER_PHOTOS_.$folder.$url)) {
				$url = substr(slug($path_parts['filename']), 0, 200).'_'.$i.'.'.$path_parts['extension'];
				$i++;
			}

			if($path_parts['extension']=="jpg" || $path_parts['extension']=="jpeg"){
				$src = imagecreatefromjpeg($_FILES['file']['tmp_name']);
			}else{
				$src = imagecreatefrompng($_FILES['file']['tmp_name']);
				imagesavealpha($src, true);
				$color = imagecolorallocatealpha($src, 0, 0, 0, 127);
				imagefill($src, 0, 0, $color);
			}

			if(!empty($settings['watermark_add'])){
				$settings['watermark'] = getFullUrl($settings['watermark']);
				$stamp_parts = pathinfo($settings['watermark']);
				$stamp_parts['extension'] = strtolower($stamp_parts['extension']);

				if(in_array($stamp_parts['extension'] , ['jpg','jpeg','gif','png'])){
					if($stamp_parts['extension']=="jpg" || $stamp_parts['extension']=="jpeg"){
						$stamp = imagecreatefromjpeg($settings['watermark']);
					}elseif($stamp_parts['extension']=="png"){
						$stamp = imagecreatefrompng($settings['watermark']);
					}else{
						$stamp = imagecreatefromgif($settings['watermark']);
					}
					imagecopy($src,$stamp,imagesx($src)-imagesx($stamp) - 5, imagesy($src) - imagesy($stamp) - 5, 0, 0, imagesx($stamp), imagesy($stamp));
				}
				if($path_parts['extension']=="jpg" || $path_parts['extension']=="jpeg"){
					imagejpeg($src,_FOLDER_PHOTOS_.$folder.$url,$settings['photo_quality']);
				}else{
					imagepng($src,_FOLDER_PHOTOS_.$folder.$url);
				}
			}else{
				move_uploaded_file($_FILES['file']['tmp_name'], _FOLDER_PHOTOS_.$folder.$url);
			}

			list($width,$height)=getimagesize(_FOLDER_PHOTOS_.$folder.$url);

			if($settings['photo_max_height'] or $settings['photo_max_width']){
				$newheight = $height;
				$newwidth = $width;
				if($settings['photo_max_height'] and $height >= $settings['photo_max_height']){
					$newheight = $settings['photo_max_height'];
				}else{
					$newheight = $height;
				}
				$newwidth = round($newheight / $height * $width);
				if($settings['photo_max_width'] and $newwidth >= $settings['photo_max_width']){
					$newwidth = $settings['photo_max_width'];
				}
				$newheight = round($newwidth / $width * $height);
				$new_image = imagecreatetruecolor($newwidth,$newheight);
				if($path_parts['extension']=="png"){
					imagesavealpha($new_image, true);
					$color = imagecolorallocatealpha($new_image, 0, 0, 0, 127);
					imagefill($new_image, 0, 0, $color);
				}
				imagecopyresampled($new_image,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
				if($path_parts['extension']=="jpg" || $path_parts['extension']=="jpeg"){
					imagejpeg($new_image,_FOLDER_PHOTOS_.$folder.$url,$settings['photo_quality']);
				}else{
					imagepng($new_image,_FOLDER_PHOTOS_.$folder.$url);
				}
				imagedestroy($new_image);
			}

			if($height >= 150){
				$newheight = 150;
			}else{
				$newheight = $height;
			}
			$newwidth = round($newheight / $height * $width);
			$tmp = imagecreatetruecolor($newwidth,$newheight);
			if($path_parts['extension']=="png"){
				imagesavealpha($tmp, true);
				$color = imagecolorallocatealpha($tmp, 0, 0, 0, 127);
				imagefill($tmp, 0, 0, $color);
			}
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$thumb = explode('.', $url)[0].'_thumb.'.$path_parts['extension'];

			if($path_parts['extension']=="jpg" || $path_parts['extension']=="jpeg"){
				imagejpeg($tmp,_FOLDER_PHOTOS_.$folder.$thumb,100);
			}else{
				imagepng($tmp,_FOLDER_PHOTOS_.$folder.$thumb);
			}
			imagedestroy($src);

			chmod(_FOLDER_PHOTOS_.$folder, 0755);

			$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'photo`(`user_id`, `folder`, `thumb`, `url`, `date`) VALUES (:user_id,:folder,:thumb,:url,NOW())');
			$sth->bindValue(':user_id', $user->getId(), PDO::PARAM_INT);
			$sth->bindValue(':folder', $folder, PDO::PARAM_STR);
			$sth->bindValue(':thumb', $thumb, PDO::PARAM_STR);
			$sth->bindValue(':url', $url, PDO::PARAM_STR);
			$sth->execute();
			$id = $db->lastInsertId();

			return ['status'=>1, 'id'=>$id, 'url'=>$folder.$url, 'thumb'=>$folder.$thumb, 'remove_title'=>lang('Remove photo').': '.$url, 'remove'=>lang('Remove')];
		}
	}


	public static function addPhotoAd(){
		global $db, $settings, $user;

		$path_parts = pathinfo($_FILES['file']['name']);
		$path_parts['extension'] = strtolower($path_parts['extension']);

		if(!in_array($path_parts['extension'] , ['jpg','jpeg','png'])){
			return ['status'=>0, 'info'=>lang('Invalid file type')];
		}elseif($settings['photo_max_size'] and $_FILES["file"]["size"] > $settings['photo_max_size']*1024){
			return ['status'=>0, 'info'=>lang('The file size is too large')];
		}elseif($settings['photo_max'] and $_POST['count_photo']>$settings['photo_max']){
			return ['status'=>0, 'info'=>lang('Photo limit exceeded').' ('.$settings['photo_max'].')'];
		}else{

			if(!file_exists(_FOLDER_PHOTOS_.date('Y'))){
				mkdir(_FOLDER_PHOTOS_.date('Y'));
			}
			$folder = date('Y').'/'.date('m').'/';
			if(!file_exists(_FOLDER_PHOTOS_.$folder)){
				mkdir(_FOLDER_PHOTOS_.$folder);
			}
			chmod(_FOLDER_PHOTOS_.$folder, 0777);

			$url = substr(slug($path_parts['filename']), 0, 200).'.'.$path_parts['extension'];
			$i = 0;
			while(file_exists(_FOLDER_PHOTOS_.$folder.$url)) {
				$url = substr(slug($path_parts['filename']), 0, 200).'_'.$i.'.'.$path_parts['extension'];
				$i++;
			}

			if($path_parts['extension']=="jpg" || $path_parts['extension']=="jpeg"){
				$src = imagecreatefromjpeg($_FILES['file']['tmp_name']);
			}else{
				$src = imagecreatefrompng($_FILES['file']['tmp_name']);
				imagesavealpha($src, true);
				$color = imagecolorallocatealpha($src, 0, 0, 0, 127);
				imagefill($src, 0, 0, $color);
			}

			move_uploaded_file($_FILES['file']['tmp_name'], _FOLDER_PHOTOS_.$folder.$url);

			list($width,$height)=getimagesize(_FOLDER_PHOTOS_.$folder.$url);

			if($settings['photo_max_height'] or $settings['photo_max_width']){
				$newheight = $height;
				$newwidth = $width;
				if($settings['photo_max_height'] and $height >= $settings['photo_max_height']){
					$newheight = $settings['photo_max_height'];
				}else{
					$newheight = $height;
				}
				$newwidth = round($newheight / $height * $width);
				if($settings['photo_max_width'] and $newwidth >= $settings['photo_max_width']){
					$newwidth = $settings['photo_max_width'];
				}
				$newheight = round($newwidth / $width * $height);
				$new_image = imagecreatetruecolor($newwidth,$newheight);
				if($path_parts['extension']=="png"){
					imagesavealpha($new_image, true);
					$color = imagecolorallocatealpha($new_image, 0, 0, 0, 127);
					imagefill($new_image, 0, 0, $color);
				}
				imagecopyresampled($new_image,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
				if($path_parts['extension']=="jpg" || $path_parts['extension']=="jpeg"){
					imagejpeg($new_image,_FOLDER_PHOTOS_.$folder.$url,$settings['photo_quality']);
				}else{
					imagepng($new_image,_FOLDER_PHOTOS_.$folder.$url);
				}
				imagedestroy($new_image);
			}

			if($height >= 150){
				$newheight = 150;
			}else{
				$newheight = $height;
			}
			$newwidth = round($newheight / $height * $width);
			$tmp = imagecreatetruecolor($newwidth,$newheight);
			if($path_parts['extension']=="png"){
				imagesavealpha($tmp, true);
				$color = imagecolorallocatealpha($tmp, 0, 0, 0, 127);
				imagefill($tmp, 0, 0, $color);
			}
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$thumb = explode('.', $url)[0].'_thumb.'.$path_parts['extension'];

			if($path_parts['extension']=="jpg" || $path_parts['extension']=="jpeg"){
				imagejpeg($tmp,_FOLDER_PHOTOS_.$folder.$thumb,100);
			}else{
				imagepng($tmp,_FOLDER_PHOTOS_.$folder.$thumb);
			}
			imagedestroy($src);

			chmod(_FOLDER_PHOTOS_.$folder, 0755);

			$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'photo_ad`(`user_id`, `folder`, `thumb`, `url`, `date`) VALUES (:user_id,:folder,:thumb,:url,NOW())');
			$sth->bindValue(':user_id', $user->getId(), PDO::PARAM_INT);
			$sth->bindValue(':folder', $folder, PDO::PARAM_STR);
			$sth->bindValue(':thumb', $thumb, PDO::PARAM_STR);
			$sth->bindValue(':url', $url, PDO::PARAM_STR);
			$sth->execute();
			$id = $db->lastInsertId();

			return ['status'=>1, 'id'=>$id, 'url'=>$folder.$url, 'thumb'=>$folder.$thumb, 'remove_title'=>lang('Remove photo').': '.$url, 'remove'=>lang('Remove')];
		}
	}


	public static function countCost(int $id){
		global $db, $settings;
		$costs = [];
		$offer = static::loadOffer($id);
		if($offer){
			$costs['total'] = $settings['add_cost'];
			$costs['list'][] = ['name'=>lang('The cost of issuing offer'),'value'=>$settings['add_cost']];
			$category = category::getCategory($offer['category_id']);
			if($category){
				$costs['list'][] = ['name'=>lang('The cost for issuing an offer in the category').' '.$category['name'],'value'=>$category['cost']];
				$costs['total'] += $category['cost'];
			}
			if($offer['days']){
				$days = getDays($offer['days']);
				$costs['list'][] = ['name'=>lang('The cost for the duration of offer').' ('.$days['length'].' '.lang('days').')','value'=>$days['cost']];
				$costs['total'] += $days['cost'];
			}
		}
		return $costs;
	}

	public static function getNames($name){
		global $db;
		$names = [];
		$sth = $db->prepare('SELECT DISTINCT name FROM '._DB_PREFIX_.'offer WHERE slug LIKE :name AND active=1 LIMIT 6');
		$sth->bindValue(':name', '%'.slug($name).'%', PDO::PARAM_STR);
		$sth->execute();
		while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$names[] = $row['name'];
		}
		return $names;
	}
	
	public static function loadAds($type, $today, $state, $state2){
		global $db;
		$ads = [];	
		$query = "";
		if ($state) {$query = " and state_id = ".$state;}
		if ($state2) {$query = $query." and state2_id = ".$state2;}

		$sth = $db->prepare('SELECT ad.*, photo.folder as phfolder, photo.thumb as phthumb, photo.url as phimage
			FROM '._DB_PREFIX_.'ad ad join '._DB_PREFIX_."photo_ad photo             
			on ad.id = photo.offer_id
			inner join payment pay
            on ad.id = pay.item_id
			WHERE ((promotion_type = :type and date_end >=:today ".$query.") or (ad.id in (56, 64, 67) and promotion_type = :type)) and 
			(pay.status = 'completed') 
			ORDER BY ad.id desc");
			
		$sth->bindValue(':today', $today, PDO::PARAM_STR);			
		$sth->bindValue(':type', $type, PDO::PARAM_INT);
		

//echo('type');
//print_r($type);
//echo('today');
//print_r($today);		
//echo('$sth');
//print_r($sth);
//exit();
			
		$sth->execute();
		
		while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$ads[] = $row;
		}

		return $ads;
	}
	
	
}
			
			
