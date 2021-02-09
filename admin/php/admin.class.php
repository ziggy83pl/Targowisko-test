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

class admin {

	public function __construct () {
		global $db;

		if(isset($_GET['log_out']) and !empty($_GET['token']) and checkToken('admin_logout',$_GET['token'])){

			$this->logOut();
			header('Location: ../'.basename(dirname($_SERVER['REQUEST_URI'])));
			die('redirect');

		}elseif(isset($_SESSION['admin']['id']) and isset($_SESSION['admin']['session_code'])){

			$sth = $db->prepare('SELECT '._DB_PREFIX_.'admin.id, username FROM '._DB_PREFIX_.'admin_session, '._DB_PREFIX_.'admin WHERE user_id='._DB_PREFIX_.'admin.id AND '._DB_PREFIX_.'admin.id=:id AND code=:code LIMIT 1');
			$sth->bindValue(':id', $_SESSION['admin']['id'], PDO::PARAM_INT);
			$sth->bindValue(':code', $_SESSION['admin']['session_code'], PDO::PARAM_STR);
			$sth->execute();
			$user_data = $sth->fetch(PDO::FETCH_ASSOC);
			if($user_data){
				$this->user_data = $user_data;
			}else{
				unset($_SESSION['admin']);
			}
		}
	}

	public function __get($value){
		if(isset($this->user_data[$value])){
			return $this->user_data[$value];
		}
		return false;
	}

	public function login($data){
		global $db;

		$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'admin_logs WHERE logged=0 AND date > DATE_ADD(NOW(), INTERVAL -30 MINUTE) AND ip=:ip LIMIT 5');
		$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
		$sth->execute();
		if($sth->rowCount()<5){

			$sth = $db->prepare('SELECT '._DB_PREFIX_.'admin.id, username FROM '._DB_PREFIX_.'admin_session, '._DB_PREFIX_.'admin WHERE username=:username AND password=:password AND code=:code AND ip=:ip LIMIT 1');
			$sth->bindValue(':username', $data['username'], PDO::PARAM_STR);
			$sth->bindValue(':password', $this->createPassword($data['password']), PDO::PARAM_STR);
			$sth->bindValue(':code', $data['session_code'], PDO::PARAM_STR);
			$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
			$sth->execute();
			$user_data = $sth->fetch(PDO::FETCH_ASSOC);
			if($user_data){

				$_SESSION['admin']['id'] = $user_data['id'];
				$_SESSION['admin']['session_code'] = $data['session_code'];

				$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'admin_session` SET user_id=:id WHERE code=:code');
				$sth->bindValue(':id', $user_data['id'], PDO::PARAM_STR);
				$sth->bindValue(':code', $data['session_code'], PDO::PARAM_STR);
				$sth->execute();

				$this->saveLogs(true,$user_data['username']);
			}else{
				$this->removeSessionCode($data['session_code']);
				$this->saveLogs(false,$data['username']);
				throw new Exception(lang('The entered data are incorrect'));
			}
		}else{
			throw new Exception(lang('Exceeded the limit login attempts'));
		}
	}

	public function is_logged(){
		if(!empty($this->user_data['id'])){
			return true;
		}
		return false;
	}

	public function newSessionCode(){
		global $db;
		$this->logOut();
		$session_code = bin2hex(random_bytes(32));
		$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'admin_session`(`user_id`, `code`, `ip`, `date`) VALUES (0,:code,:ip,NOW())');
		$sth->bindValue(':code', $session_code, PDO::PARAM_STR);
		$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
		$sth->execute();
		return $session_code;
	}

	public function removeSessionCode($session_code){
		global $db;
		$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'admin_session` WHERE code=:code');
		$sth->bindValue(':code', $session_code, PDO::PARAM_STR);
		$sth->execute();
	}

	public function logOut(){
		unset($this->user_data);
		unset($_SESSION['admin']);
		unset($_SESSION['user']);
	}

	public function createPassword($password){
		return md5($password);
	}

	public function saveLogs($logged=false,$username=''){
		global $db;
		$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'admin_logs`(`username`, `logged`, `ip`, `date`) VALUES (:username, :logged, :ip, NOW())');
		$sth->bindValue(':username', $username, PDO::PARAM_STR);
		$sth->bindValue(':logged', $logged, PDO::PARAM_INT);
		$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
		$sth->execute();
	}

	public function changeUser($data){
		global $db;
		if($data['new_password']==$data['repeat_new_password']){
			if($data['new_username']!=$this->user_data['username']){
				$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'admin WHERE username=:username AND id!=:id LIMIT 1');
				$sth->bindValue(':username', $data['new_username'], PDO::PARAM_STR);
				$sth->bindValue(':id', $this->user_data['id'], PDO::PARAM_INT);
				$sth->execute();
				if($sth->fetchColumn()){
					throw new Exception(lang('The selected username is already taken'));
				}
			}

			$sth = $db->prepare('UPDATE '._DB_PREFIX_.'admin SET username=:new_username, password=:password WHERE id=:id LIMIT 1');
			$sth->bindValue(':new_username', $data['new_username'], PDO::PARAM_STR);
			$sth->bindValue(':password', $this->createPassword($data['new_password']), PDO::PARAM_STR);
			$sth->bindValue(':id', $this->user_data['id'], PDO::PARAM_INT);
			$sth->execute();

			$this->user_data['username'] = $data['new_username'];
		}else{
			throw new Exception(lang('Entered passwords are different'));
		}
	}

	public function removeLogs(){
		global $db;
		$db->query('TRUNCATE '._DB_PREFIX_.'admin_logs');
	}

	public function getLogs(){
		global $db;
		$limit = 100;
		$admin_logs = [];
		$sth = $db->query('SELECT SQL_CALC_FOUND_ROWS * FROM '._DB_PREFIX_.'admin_logs ORDER BY '.sortBy().' LIMIT '.paginationPageFrom($limit).','.$limit.'');
		while($row = $sth->fetch(PDO::FETCH_ASSOC)) {$admin_logs[] = $row;}
		generatePagination($limit);
		return $admin_logs;
	}

	public function getUsers(){
		global $db;
		$sth = $db->query('SELECT * FROM '._DB_PREFIX_.'admin ORDER BY username');
		while($row = $sth->fetch(PDO::FETCH_ASSOC)) {$admin[] = $row;}
		return $admin;
	}

	public function addUser($data){
		global $db;
		if($data['password']==$data['repeat_password']){
			$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'admin WHERE username=:username LIMIT 1');
			$sth->bindValue(':username', $data['username'], PDO::PARAM_STR);
			$sth->execute();
			if(!$sth->fetchColumn()){
				$sth = $db->prepare('INSERT INTO '._DB_PREFIX_.'admin (username, password) VALUES(:username, :password)');
				$sth->bindValue(':username', $data['username'], PDO::PARAM_STR);
				$sth->bindValue(':password', $this->createPassword($data['password']), PDO::PARAM_STR);
				$sth->execute();
			}else{
				throw new Exception(lang('The selected username is already taken'));
			}
		}else{
			throw new Exception(lang('Entered passwords are different'));
		}
	}

	public function removeUser($id){
		global $db;
		if($id!=$this->user_data['id']){
			$sth = $db->prepare('DELETE FROM '._DB_PREFIX_.'admin WHERE id=:id LIMIT 1');
			$sth->bindValue(':id', $id, PDO::PARAM_INT);
			$sth->execute();
		}else{
			throw new Exception(lang('You can not delete a user who is logged'));
		}
	}

	public function logOutAll(){
		global $db;
		$db->query('TRUNCATE '._DB_PREFIX_.'admin_session');
		header('Location: ../'.basename(dirname($_SERVER['REQUEST_URI'])));
		die('redirect');
	}
}
