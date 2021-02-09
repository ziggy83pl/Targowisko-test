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

class user {

	public function __construct () {
		global $db, $settings;
		$this->logged_in = false;

		if(isset($_GET['log_out']) and !empty($_GET['token']) and checkToken('logout',$_GET['token'])){
			$this->logOut();
			header("Location: ".$settings['base_url']);
			die('redirect');
		}elseif(!empty($_SESSION['user']['id']) and !empty($_SESSION['user']['session_code'])){
			$this->loginFromSession();
		}elseif(!empty($_COOKIE['user_id']) and !empty($_COOKIE['user_code'])){
			$_SESSION['user']['id'] = $_COOKIE['user_id'];
			$_SESSION['user']['session_code'] = $_COOKIE['user_code'];
			$this->loginFromSession();
		}
	}

	public function __get($value){
		if(isset($this->user_data[$value])){
			return $this->user_data[$value];
		}
		return false;
	}

	public function loginFromSession(){
		global $db;
		$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'session_user WHERE user_id=:user_id AND code=:code LIMIT 1');
		$sth->bindValue(':user_id', $_SESSION['user']['id'], PDO::PARAM_INT);
		$sth->bindValue(':code', $_SESSION['user']['session_code'], PDO::PARAM_STR);
		$sth->execute();

		if($sth->fetchColumn()){
			$sth = $db->prepare('SELECT * FROM '._DB_PREFIX_.'user WHERE id=:id LIMIT 1');
			$sth->bindValue(':id', $_SESSION['user']['id'], PDO::PARAM_INT);
			$sth->execute();
			$user = $sth->fetch(PDO::FETCH_ASSOC);
			if($user!=''){
				$this->user_data = $user;
				$this->logged_in = true;
			}
		}else{
			$this->logOut();
		}
	}

	public function login($data){
		global $db, $settings;
		if($settings['check_ip_user']){
			$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'session_user WHERE code=:code AND ip=:ip LIMIT 1');
			$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
		}else{
			$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'session_user WHERE code=:code LIMIT 1');
		}
		$sth->bindValue(':code', $data['session_code'], PDO::PARAM_STR);
		$sth->execute();
		if($sth->fetchColumn()){

			$sth = $db->prepare('SELECT * FROM '._DB_PREFIX_.'user WHERE (username=:username OR email=:username) LIMIT 1');
			$sth->bindValue(':username', $data['username'], PDO::PARAM_STR);
			$sth->execute();

			$user = $sth->fetch(PDO::FETCH_ASSOC);

			if($user and $this->checkPassword($data['password'], $user['password'])){
				if($user['active']=='1'){
					if($user['username']==''){
						header("Location: ".path('login')."?complete_data=".$user['activation_code']);
						die('redirect');
					}

					$_SESSION['user']['id'] = $user['id'];
					$_SESSION['user']['session_code'] = $data['session_code'];

					$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'session_user` SET user_id=:user_id WHERE code=:code');
					$sth->bindValue(':user_id', $user['id'], PDO::PARAM_INT);
					$sth->bindValue(':code', $data['session_code'], PDO::PARAM_STR);
					$sth->execute();

					setcookie('user_id', $user['id'], time() + (86400 * 30), "/");
					setcookie('user_code', $data['session_code'], time() + (86400 * 30), "/");

					$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'logs_user`(`user_id`, `ip`, `date`) VALUES (:user_id,:ip,NOW())');
					$sth->bindValue(':user_id', $user['id'], PDO::PARAM_INT);
					$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
					$sth->execute();

					if(!empty($_GET['redirect'])){
						header("Location: ".$_GET['redirect']."");
					}else{
						header("Location: ".$settings['base_url']);
					}
					die('redirect');
				}else{
					static::removeSessionCode($data['session_code']);
					throw new Exception(lang('The account has not been activated yet.'));
				}
			}else{
				static::removeSessionCode($data['session_code']);
				throw new Exception(lang('Username or password are incorrect'));
			}
		}else{
			throw new Exception(lang('Session error'));
		}
	}

	public static function checkCodeAndActivate($activation_code){
		global $db;
		$sth = $db->prepare('SELECT id FROM '._DB_PREFIX_.'user WHERE active=0 AND activation_code=:activation_code LIMIT 1');
		$sth->bindValue(':activation_code', $activation_code, PDO::PARAM_STR);
		$sth->execute();
		$id = $sth->fetch(PDO::FETCH_ASSOC)['id'];
		if($id){
			static::activate($id);
			return true;
		}else{
			return false;
		}
	}

	public static function getIdFromEmail($email){
		global $db;
		$id = 0;
		if($email){
			$sth = $db->prepare('SELECT id FROM '._DB_PREFIX_.'user WHERE email=:email LIMIT 1');
			$sth->bindValue(':email', $email, PDO::PARAM_STR);
			$sth->execute();
			$temp_id = $sth->fetch(PDO::FETCH_ASSOC);
			if($temp_id){$id = $temp_id['id'];}
		}
		return $id;
	}

	public static function activate(int $id){
		global $db;
		$sth = $db->prepare('UPDATE '._DB_PREFIX_.'user SET active=1, activation_ip=:activation_ip, activation_date=NOW() WHERE id=:id LIMIT 1');
		$sth->bindValue(':activation_ip', getClientIp(), PDO::PARAM_STR);
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
	}

	public static function setModerator(int $id){
		global $db;
		$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'user` SET moderator=1 WHERE id=:id limit 1');
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
	}

	public static function unSetModerator(int $id){
		global $db;
		$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'user` SET moderator=0 WHERE id=:id limit 1');
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
	}

	public static function newSessionCode(){
		global $db;
		$session_code = bin2hex(random_bytes(32));
		$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'session_user`(`code`, `ip`, `date`) VALUES (:code,:ip,NOW())');
		$sth->bindValue(':code', $session_code, PDO::PARAM_STR);
		$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
		$sth->execute();
		return $session_code;
	}

	public static function removeSessionCode($session_code){
		global $db;
		$sth = $db->prepare('DELETE FROM `'._DB_PREFIX_.'session_user` WHERE code=:code');
		$sth->bindValue(':code', $session_code, PDO::PARAM_STR);
		$sth->execute();
	}

	public function logOut(){
		global $db;
		$this->logged_in = false;
		if(!empty($_SESSION['user']['session_code'])){
			$sth = $db->prepare('DELETE FROM '._DB_PREFIX_.'session_user WHERE code=:code');
			$sth->bindValue(':code', $_SESSION['user']['session_code'], PDO::PARAM_STR);
			$sth->execute();
		}
		unset($_SESSION['user']);
		unset($_SESSION['token']);
		setcookie("user_id", "", time() - 3600);
		setcookie("user_code", "", time() - 3600);
	}

	public function register($data){
		global $db, $settings;

		if($data['captcha']!=$_SESSION['captcha']){
			$error['captcha'] = lang('Invalid captcha code.');
		}else{
			if(checkEmailBlackList($data['email']) or checkIpBlackList(getClientIp())){
				$error['info'] = lang('The account could not be submitted');
			}else{
				if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL) or strlen($data['email'])>64) {
					$error['email'] = lang('Incorrect e-mail address');
				}else{
					$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'user WHERE email=:email LIMIT 1');
					$sth->bindValue(':email', $data['email'], PDO::PARAM_STR);
					$sth->execute();
					if($sth->fetchColumn()){
						$error['email'] = lang('E-mail already exists in the database.');
					}
				}
				$old_username = $data['username'];
				$data['username'] = slugWithUpper(strip_tags($data['username']));
				if(!$data['username'] or strlen($data['username'])>64 or $old_username!=$data['username']){
					$error['username'] = lang('Invalid username');
				}else{
					$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'user WHERE username=:username LIMIT 1');
					$sth->bindValue(':username', $data['username'], PDO::PARAM_STR);
					$sth->execute();
					if($sth->fetchColumn()){
						$error['username'] = lang('The selected username is already taken');
					}
				}
				if(!$data['password'] or strlen($data['password'])>32){
					$error['password'] = lang('The password is incorrect.');
				}elseif($data['password']!=$data['password_repeat']){
					$error['password'] = lang('Entered passwords are different');
				}
				if(!isset($data['rules'])){
					$error['rules'] = lang('This field is mandatory.');
				}
			}
		}

		if(isset($error)){
			return ['status'=>false,'error'=>$error];
		}else{

			$activation_code = bin2hex(random_bytes(32));

			sendMail('register',$data['email'],['activation_code'=>$activation_code, 'password'=>$data['password'], 'username'=>$data['username'], 'email'=>$data['email']]);

			$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'user`(`username`, `email`, `password`, `activation_code`, `register_ip`, `date`) VALUES (:username,:email,:password,:activation_code,:register_ip,NOW())');
			$sth->bindValue(':username', $data['username'], PDO::PARAM_STR);
			$sth->bindValue(':email', $data['email'], PDO::PARAM_STR);
			$sth->bindValue(':password', $this->createPassword($data['password']), PDO::PARAM_STR);
			$sth->bindValue(':activation_code', $activation_code, PDO::PARAM_STR);
			$sth->bindValue(':register_ip', getClientIp(), PDO::PARAM_STR);
			$sth->execute();

			return ['status'=>true];
		}
	}

	public function resetPassword($data){
		global $db, $settings;

		if($data['captcha']!=$_SESSION['captcha']){
			throw new Exception(lang('Invalid captcha code.'));
		}

		$sth = $db->prepare('SELECT id, email, username FROM '._DB_PREFIX_.'user WHERE (username=:username OR email=:username) LIMIT 1');
		$sth->bindValue(':username', strip_tags($data['username']), PDO::PARAM_STR);
		$sth->execute();
		$user_data = $sth->fetch(PDO::FETCH_ASSOC);
		if($user_data==''){
			throw new Exception(lang('Incorrect user data'));
		}
		$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'reset_password WHERE active=1 AND date>(NOW() - INTERVAL 1 DAY) AND user_id=:user_id LIMIT 1');
		$sth->bindValue(':user_id', $user_data['id'], PDO::PARAM_INT);
		$sth->execute();
		if($sth->fetchColumn()){
			throw new Exception(lang('Link to change your password has been sent.'));
		}
		
		$code = bin2hex(random_bytes(32));

		$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'reset_password`(`user_id`, `active`, `code`, `date`) VALUES (:user_id,1,:code,NOW())');
		$sth->bindValue(':user_id', $user_data['id'], PDO::PARAM_INT);
		$sth->bindValue(':code', $code, PDO::PARAM_STR);
		$sth->execute();

		sendMail('reset_password',$user_data['email'], ['reset_password_code'=>$code, 'username'=>$user_data['username']]);
	}

	public function resetPasswordNew($code){
		global $db;
		$sth = $db->prepare('SELECT user_id FROM '._DB_PREFIX_.'reset_password WHERE active=1 AND date>(NOW() - INTERVAL 1 DAY) AND code=:code LIMIT 1');
		$sth->bindValue(':code', $code, PDO::PARAM_STR);
		$sth->execute();
		$user_id = $sth->fetch(PDO::FETCH_ASSOC);
		if($user_id){
			return $user_id;
		}
		return false;
	}

	public function resetPasswordNewCheck(int $user_id,$data,$code){
		global $db, $settings;

		if($data['password']!=$data['password_repeat']){
			throw new Exception(lang('Entered passwords are different'));
		}elseif($data['password']=='' or strlen($data['password'])>32){
			throw new Exception(lang('The password is incorrect.'));
		}
		
		$sth = $db->prepare('UPDATE '._DB_PREFIX_.'reset_password SET used=1, active=0 WHERE code=:code LIMIT 1');
		$sth->bindValue(':code', $code, PDO::PARAM_STR);
		$sth->execute();

		$sth = $db->prepare('UPDATE '._DB_PREFIX_.'user SET password=:password WHERE id=:id LIMIT 1');
		$sth->bindValue(':password', $this->createPassword($data['password']), PDO::PARAM_STR);
		$sth->bindValue(':id', $user_id, PDO::PARAM_INT);
		$sth->execute();
	}

	public function createPassword(string $password){
		return password_hash($password, PASSWORD_DEFAULT);
	}

	public function checkPassword(string $password, string $hash){
		return password_verify($password, $hash);
	}

	public function checkCompleteData($code){
		global $db;
		$sth = $db->prepare('SELECT * FROM '._DB_PREFIX_.'user WHERE (ISNULL(username) OR username="") AND active=1 AND activation_code=:code LIMIT 1');
		$sth->bindValue(':code', $code, PDO::PARAM_STR);
		$sth->execute();
		return $sth->fetch(PDO::FETCH_ASSOC);
	}

	public function completeData($code,$data){
		global $db, $settings;
		if(!isset($data['rules'])){
			throw new Exception(lang('You must approve the rules and privacy policy'));
		}
		$old_username = $data['username'];
		$data['username'] = slugWithUpper(strip_tags($data['username']));
		if(!$data['username'] or strlen($data['username'])>64 or $old_username!=$data['username']){
			throw new Exception(lang('Invalid username'));
		}
		
		$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'user WHERE username=:username LIMIT 1');
		$sth->bindValue(':username', $data['username'], PDO::PARAM_STR);
		$sth->execute();
		if($sth->fetchColumn()){
			throw new Exception(lang('The selected username is already taken'));
		}

		$sth = $db->prepare('UPDATE '._DB_PREFIX_.'user SET username=:username WHERE active=1 AND activation_code=:code AND (ISNULL(username) OR username="") LIMIT 1');
		$sth->bindValue(':username', $data['username'], PDO::PARAM_STR);
		$sth->bindValue(':code', $code, PDO::PARAM_STR);
		$sth->execute();

		$sth = $db->prepare('SELECT * FROM '._DB_PREFIX_.'user WHERE username=:username LIMIT 1');
		$sth->bindValue(':username', $data['username'], PDO::PARAM_STR);
		$sth->execute();
		$user = $sth->fetch(PDO::FETCH_ASSOC);

		$session_code = bin2hex(random_bytes(32));

		$_SESSION['user']['id'] = $user['id'];
		$_SESSION['user']['session_code'] = $session_code;

		$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'session_user`(`user_id`, `code`, `ip`, `date`) VALUES (:user_id,:code,:ip,NOW())');
		$sth->bindValue(':user_id', $user['id'], PDO::PARAM_STR);
		$sth->bindValue(':code', $session_code, PDO::PARAM_STR);
		$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
		$sth->execute();

		setcookie('user_id', $user['id'], time() + (86400 * 30), "/");
		setcookie('user_code', $session_code, time() + (86400 * 30), "/");

		$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'logs_user`(`user_id`, `ip`, `date`) VALUES (:user_id,:ip,NOW())');
		$sth->bindValue(':user_id', $user['id'], PDO::PARAM_INT);
		$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
		$sth->execute();

	}

	public function getAllData(){
		global $db;

		$sth = $db->prepare('SELECT count(1) FROM '._DB_PREFIX_.'offer WHERE user_id=:user_id');
		$sth->bindValue(':user_id', $this->id, PDO::PARAM_INT);
		$sth->execute();
		$this->user_data['number_offers'] = $sth->fetchColumn();

		$sth = $db->prepare('SELECT count(1) FROM '._DB_PREFIX_.'logs_user WHERE user_id=:user_id');
		$sth->bindValue(':user_id', $this->id, PDO::PARAM_INT);
		$sth->execute();
		$this->user_data['number_login'] = $sth->fetchColumn();

		$sth = $db->prepare('SELECT date FROM '._DB_PREFIX_.'logs_user WHERE user_id=:user_id order by date desc LIMIT 1,1');
		$sth->bindValue(':user_id', $this->id, PDO::PARAM_INT);
		$sth->execute();
		$this->user_data['last_login'] = $sth->fetch(PDO::FETCH_ASSOC)['date'];

		$sth = $db->prepare('SELECT * FROM '._DB_PREFIX_.'reset_password WHERE user_id=:user_id AND used=1 order by date desc LIMIT 1');
		$sth->bindValue(':user_id', $this->id, PDO::PARAM_INT);
		$sth->execute();
		$this->user_data['last_reset_password'] = $sth->fetch(PDO::FETCH_ASSOC)['date'];
	}

	public static function getUsernameFromId(int $user_id){
		global $db;
		$username = '';
		if($user_id>0){
			$sth = $db->prepare('SELECT username FROM '._DB_PREFIX_.'user WHERE id=:user_id LIMIT 1');
			$sth->bindValue(':user_id', $user_id, PDO::PARAM_INT);
			$sth->execute();
			$username_temp = $sth->fetch(PDO::FETCH_ASSOC);
			if($username_temp){$username = $username_temp['username'];}
		}
		return $username;
	}

	public function changePassword($data){
		global $db;
		if($data['new_password']==$data['repeat_new_password']){
			if($this->checkPassword($data['old_password'], $this->password)){
				$sth = $db->prepare('UPDATE '._DB_PREFIX_.'user SET password=:password WHERE id=:id LIMIT 1');
				$sth->bindValue(':id', $this->id, PDO::PARAM_INT);
				$sth->bindValue(':password', $this->createPassword($data['new_password']), PDO::PARAM_STR);
				$sth->execute();
			}else{
				throw new Exception(lang('Enter proper old password'));
			}
		}else{
			throw new Exception(lang('Entered passwords are different'));
		}
	}

	public function saveDescription($description){
		global $db, $purifier;
		$sth = $db->prepare('UPDATE '._DB_PREFIX_.'user SET description=:description WHERE id=:id LIMIT 1');
		$sth->bindValue(':description', checkWordsBlackList(nofollow($purifier->purify(trim($description)))), PDO::PARAM_STR);
		$sth->bindValue(':id', $this->id, PDO::PARAM_INT);
		$sth->execute();
		$this->user_data['description'] = $description;
	}

	public function saveUserData($data){
		global $db;
		if(!isset($data['state_id'])){$data['state_id']=0;}
		if(!isset($data['state2_id'])){$data['state2_id']=0;}
		$sth = $db->prepare('UPDATE '._DB_PREFIX_.'user SET address=:address, phone=:phone, state_id=:state_id, state2_id=:state2_id WHERE id=:id LIMIT 1');
		$sth->bindValue(':address', trim(strip_tags($data['address'])), PDO::PARAM_STR);
		$sth->bindValue(':phone', trim(strip_tags($data['phone'])), PDO::PARAM_STR);
		$sth->bindValue(':state_id', $data['state_id'], PDO::PARAM_INT);
		$sth->bindValue(':state2_id', $data['state2_id'], PDO::PARAM_INT);
		$sth->bindValue(':id', $this->id, PDO::PARAM_INT);
		$sth->execute();
		$this->user_data['address'] = $data['address'];
		$this->user_data['phone'] = $data['phone'];
		$this->user_data['state_id'] = $data['state_id'];
		$this->user_data['state2_id'] = $data['state2_id'];
	}

	public function getId(){
		if($this->logged_in){
			return $this->id;
		}
		return 0;
	}

	public function loginFB(){
		global $settings;
		$fb_email = '';
		if(!empty($_REQUEST['code'])){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/oauth/access_token?fields=email,name&client_id=".$settings['facebook_api']."&redirect_uri=".urlencode(path('login').'?facebook_login')."&client_secret=".$settings['facebook_secret']."&code=".$_REQUEST['code']);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$fb_params = json_decode(curl_exec($ch));
			curl_close($ch);
			if(isset($fb_params->access_token)){
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/me?fields=email,name&access_token=".$fb_params->access_token);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$fb_user = json_decode(curl_exec($ch), true);
				if(isset($fb_user['email'])){
					$fb_email = $fb_user['email'];
				}
				curl_close($ch);
			}
		}
		if($fb_email){
			$this->loginByEmail($fb_email,'fb');
		}
	}

	public function loginGoogle(){
		global $settings;
		$google_email = '';
		if(!empty($_REQUEST['code'])){
			$url = 'https://accounts.google.com/o/oauth2/token';
			$curlPost = 'client_id='.$settings['google_id'].'&redirect_uri='.urlencode(path('login')).'&client_secret='.$settings['google_secret'].'&code='.$_REQUEST['code'].'&grant_type=authorization_code';
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
			$data = json_decode(curl_exec($ch), true);
			$http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
			if($http_code == 200){
				$url = 'https://www.googleapis.com/plus/v1/people/me';

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer '.$data['access_token']]);
				$data2 = json_decode(curl_exec($ch), true);
				$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
				if($http_code == 200){
					$google_email = $data2['emails'][0]['value'];
				}
			}
		}
		if($google_email){
			$this->loginByEmail($google_email,'google');
		}
	}

	public function loginByEmail($email,$source=''){
		global $db, $settings;

		if(checkEmailBlackList($email) or checkIpBlackList(getClientIp())){
			$error['info'] = lang('The account could not be submitted');
		}else{
			$sth = $db->prepare('SELECT * FROM '._DB_PREFIX_.'user WHERE email=:email LIMIT 1');
			$sth->bindValue(':email', $email, PDO::PARAM_STR);
			$sth->execute();
			$user_data = $sth->fetch(PDO::FETCH_ASSOC);

			if($user_data){

				if($user_data['active']=='0'){
					$sth = $db->prepare('UPDATE `'._DB_PREFIX_.'user` SET active=1 WHERE id=:id');
					$sth->bindValue(':id', $user_data['id'], PDO::PARAM_INT);
					$sth->execute();
				}
				if($user_data['username']==''){
					header("Location: ".path('login')."?complete_data=".$user_data['activation_code']);
					die('redirect');
				}

				$session_code = bin2hex(random_bytes(32));

				$_SESSION['user']['id'] = $user_data['id'];
				$_SESSION['user']['session_code'] = $session_code;

				$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'session_user`(`user_id`, `code`, `ip`, `date`) VALUES (:user_id,:code,:ip,NOW())');
				$sth->bindValue(':user_id', $user_data['id'], PDO::PARAM_STR);
				$sth->bindValue(':code', $session_code, PDO::PARAM_STR);
				$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
				$sth->execute();

				setcookie('user_id', $user_data['id'], time() + (86400 * 30), "/");
				setcookie('user_code', $session_code, time() + (86400 * 30), "/");

				$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'logs_user`(`user_id`, `ip`, `date`) VALUES (:user_id,:ip,NOW())');
				$sth->bindValue(':user_id', $user_data['id'], PDO::PARAM_INT);
				$sth->bindValue(':ip', getClientIp(), PDO::PARAM_STR);
				$sth->execute();

				if(!empty($_GET['redirect'])){
					header("Location: ".$_GET['redirect']."");
				}else{
					header("Location: ".$settings['base_url']);
				}
				die('redirect');
			}else{

				$activation_code = bin2hex(random_bytes(32));
				$password = randomPassword();
				$register_fb = $register_google = 0;

				if($source=='fb'){
					sendMail('register_fb',$email,['activation_code'=>$activation_code, 'password'=>$password, 'email'=>$email]);
					$register_fb = 1;
				}elseif($source=='google'){
					sendMail('register_google',$email,['activation_code'=>$activation_code, 'password'=>$password, 'email'=>$email]);
					$register_google = 1;
				}

				$sth = $db->prepare('INSERT INTO `'._DB_PREFIX_.'user`(`active`, `email`, `password`, `activation_code`, `register_fb`, `register_google`, `register_ip`, `activation_date`, `activation_ip`, `date`) VALUES (1, :email,:password,:activation_code,:register_fb,:register_google,:register_ip,NOW(), :activation_ip, NOW())');
				$sth->bindValue(':email', strip_tags($email), PDO::PARAM_STR);
				$sth->bindValue(':password', $this->createPassword($password), PDO::PARAM_STR);
				$sth->bindValue(':activation_code', $activation_code, PDO::PARAM_STR);
				$sth->bindValue(':register_fb', $register_fb, PDO::PARAM_INT);
				$sth->bindValue(':register_google', $register_google, PDO::PARAM_INT);
				$sth->bindValue(':register_ip', getClientIp(), PDO::PARAM_STR);
				$sth->bindValue(':activation_ip', getClientIp(), PDO::PARAM_STR);
				$sth->execute();

				header("Location: ".path('login')."?complete_data=".$activation_code);
				die('redirect');
			}
		}
	}

	public static function getProfile($username){
		global $db;
		$sth = $db->prepare('SELECT u.*, 
		(SELECT count(1) FROM '._DB_PREFIX_.'offer WHERE user_id=u.id) AS number_offers,
		(SELECT count(1) FROM '._DB_PREFIX_.'logs_user WHERE user_id=u.id) AS number_login,
		(SELECT date FROM '._DB_PREFIX_.'logs_user WHERE user_id=u.id ORDER BY date DESC LIMIT 1,1) AS last_login
		FROM '._DB_PREFIX_.'user u WHERE u.active=1 AND u.username=:username LIMIT 1');
		$sth->bindValue(':username', $username, PDO::PARAM_STR);
		$sth->execute();
		$profile = $sth->fetch(PDO::FETCH_ASSOC);
		return ($profile);
	}

	public static function getData(int $id){
		global $db;
		$sth = $db->prepare('SELECT * FROM '._DB_PREFIX_.'user WHERE id=:id LIMIT 1');
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		return $sth->fetch(PDO::FETCH_ASSOC);
	}

	public function saveAvatar(){
		global $db;

		static::removeAvatar($this->getId());

		$path_parts = pathinfo($_FILES['avatar']['name']);
		$path_parts['extension'] = strtolower($path_parts['extension']);

		if(in_array($path_parts['extension'], ['jpg','jpeg','png'])){

			chmod(_FOLDER_AVATARS_, 0777);

			$url = slug($path_parts['filename']).'.png';
			$i = 0;
			while(file_exists(_FOLDER_AVATARS_.$url)) {
				$url = slug($path_parts['filename']).'_'.$i.'.png';
				$i++;
			}

			if($path_parts['extension']=="jpg" || $path_parts['extension']=="jpeg"){
				$src = imagecreatefromjpeg($_FILES['avatar']['tmp_name']);
			}else{
				$src = imagecreatefrompng($_FILES['avatar']['tmp_name']);
			}

			list($width,$height) = getimagesize($_FILES['avatar']['tmp_name']);

			if($height >= 80){
				$newheight = 80;
			}else{
				$newheight = $height;
			}
			$newwidth = round($newheight / $height * $width);

			$tmp=imagecreatetruecolor($newwidth,$newheight);
			if($path_parts['extension']=="png"){
				imagesavealpha($tmp, true);
				$color = imagecolorallocatealpha($tmp, 0, 0, 0, 127);
				imagefill($tmp, 0, 0, $color);
			}
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);

			imagepng($tmp,_FOLDER_AVATARS_.$url);
			imagedestroy($src);

			chmod(_FOLDER_AVATARS_, 0755);

			$sth = $db->prepare('UPDATE '._DB_PREFIX_.'user SET avatar=:avatar WHERE id=:id LIMIT 1');
			$sth->bindValue(':avatar', $url, PDO::PARAM_STR);
			$sth->bindValue(':id', $this->id, PDO::PARAM_INT);
			$sth->execute();
			$this->user_data['avatar'] = $url;
		}
	}

	public static function removeAvatar(int $user_id){
		global $db, $user;

		$sth = $db->prepare('SELECT avatar FROM '._DB_PREFIX_.'user WHERE id=:id LIMIT 1');
		$sth->bindValue(':id', $user_id, PDO::PARAM_INT);
		$sth->execute();
		$old_avatar = $sth->fetch(PDO::FETCH_ASSOC)['avatar'];

		if($old_avatar){
			chmod(_FOLDER_AVATARS_, 0777);
			unlink(_FOLDER_AVATARS_.$old_avatar);
			chmod(_FOLDER_AVATARS_, 0755);
		}

		$sth = $db->prepare('UPDATE '._DB_PREFIX_.'user SET avatar="" WHERE id=:id LIMIT 1');
		$sth->bindValue(':id', $user_id, PDO::PARAM_INT);
		$sth->execute();
	}

	public static function remove(int $id){
		global $db;
		static::removeAvatar($id);
		$sth = $db->prepare('SELECT id FROM '._DB_PREFIX_.'offer WHERE user_id=:user_id');
		$sth->bindValue(':user_id', $id, PDO::PARAM_INT);
		$sth->execute();
		foreach($sth as $row){;
			offer::remove($row['id']);
		}
		$sth = $db->prepare('DELETE FROM '._DB_PREFIX_.'reset_password WHERE user_id=:user_id');
		$sth->bindValue(':user_id', $id, PDO::PARAM_INT);
		$sth->execute();
		$sth = $db->prepare('DELETE FROM '._DB_PREFIX_.'session_user WHERE user_id=:user_id');
		$sth->bindValue(':user_id', $id, PDO::PARAM_INT);
		$sth->execute();
		$sth = $db->prepare('DELETE FROM '._DB_PREFIX_.'clipboard WHERE user_id=:user_id');
		$sth->bindValue(':user_id', $id, PDO::PARAM_INT);
		$sth->execute();
		$sth = $db->prepare('DELETE FROM '._DB_PREFIX_.'user WHERE id=:id LIMIT 1');
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
	}
}
