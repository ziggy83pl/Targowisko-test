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

session_start();

header('Content-Type: text/html; charset=utf-8');

error_reporting(E_ALL);
error_reporting(0);

ob_start();

if(phpversion()<7){
	die('Wrong version of PHP on the server. The minimum supported is 7.0');
}

$install = true;
require_once('../config/db.php');

if(isset($mysql_server)){
	header('location: /admin');
	die('redirect...');
}

if(!is_writable('../config/db.php')){
	die('File config/db.php is not writable!');
}

$settings['base_url'] = true;
require_once('../php/global.php');

if(isset($_GET['lang']) and $_GET['lang']!=''){
	$settings['lang'] = langLoad($_GET['lang']);
}else{
	$settings['lang'] = langLoad();
}
$langList = langList();

if(!empty($_POST['base_url']) and !empty($_POST['server']) and !empty($_POST['user']) and !empty($_POST['name']) and !empty($_POST['admin']) and !empty($_POST['password_admin']) and !empty($_POST['password_admin_repeat']) and !empty($_POST['email']) and isset($_POST['db_prefix'])){

	if($_POST['password_admin']!=$_POST['password_admin_repeat']){
		$error = lang('Error! Entered the Password to Admin Panel are different!');
	}else{

		define("_DB_PREFIX_", $_POST['db_prefix']);

		try{
			$db = new PDO('mysql:host='.$_POST['server'].';dbname='.$_POST['name'], $_POST['user'], $_POST['password'], [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
		}catch (PDOException $e){
			$error = true;
		}

		if (isset($error)) {
			$error = lang('Error! Unable to connect to the server.');
		}else{

			$dir = '../config/db.php';
			if (!file_exists($dir) ) {
				fwrite($dir,'');
			}else{
				chmod($dir, 0777);
			}

			file_put_contents('../config/db.php', '<?php
$mysql_server = "'.$_POST['server'].'";
$mysql_user = "'.$_POST['user'].'";
$mysql_pass = "'.$_POST['password'].'";
$mysql_db = "'.$_POST['name'].'";

define("_DB_PREFIX_", "'._DB_PREFIX_.'");

');

			$sql = file_get_contents('notice2.sql');

			if(isset($_POST['sample_data'])){
				$sql .= file_get_contents('notice2_sample_data.sql');
			}

			$sql = str_replace("CREATE TABLE IF NOT EXISTS `","CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_,$sql);
			$sql = str_replace("CREATE TABLE `","CREATE TABLE `"._DB_PREFIX_,$sql);
			$sql = str_replace("INSERT INTO `","INSERT INTO `"._DB_PREFIX_,$sql);
			$sql = str_replace("ALTER TABLE `","ALTER TABLE `"._DB_PREFIX_,$sql);
			$sql = str_replace("REFERENCES `","REFERENCES `"._DB_PREFIX_,$sql);

			$db->exec($sql);

			include('../admin/php/admin.class.php');
			$admin = new admin();
			$password_admin = $admin->createPassword($_POST['password_admin']);

			$sth = $db->prepare('SELECT 1 FROM '._DB_PREFIX_.'admin WHERE username=:username LIMIT 1');
			$sth->bindValue(':username', $_POST['admin'], PDO::PARAM_STR);
			$sth->execute();
			if($sth->fetchColumn()){
				$sth = $db->prepare('UPDATE '._DB_PREFIX_.'admin SET password=:password WHERE username=:username LIMIT 1');
				$sth->bindValue(':password', $password_admin, PDO::PARAM_STR);
				$sth->bindValue(':username', $_POST['admin'], PDO::PARAM_STR);
				$sth->execute();
			}else{
				$sth = $db->prepare('INSERT INTO '._DB_PREFIX_.'admin (`username`, `password`) VALUES (:username, :password)');
				$sth->bindValue(':username', $_POST['admin'], PDO::PARAM_STR);
				$sth->bindValue(':password', $password_admin, PDO::PARAM_STR);
				$sth->execute();
			}

			$sth = $db->prepare('UPDATE '._DB_PREFIX_.'settings SET value=:base_url WHERE name="base_url" LIMIT 1');
			$sth->bindValue(':base_url', webAddress($_POST['base_url']), PDO::PARAM_STR);
			$sth->execute();

			$template = 'default';
			if (!file_exists('../views/'.$template) ) {
				$dirs = array_filter(glob('../views/*'), 'is_dir');
				$template = substr($dirs[0],9);
			}

			$sth = $db->prepare('UPDATE '._DB_PREFIX_.'settings SET value=:template WHERE name="template" LIMIT 1');
			$sth->bindValue(':template', $template, PDO::PARAM_STR);
			$sth->execute();

			$sth = $db->prepare('UPDATE '._DB_PREFIX_.'settings SET value=:email WHERE name="email" LIMIT 1');
			$sth->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
			$sth->execute();

			$sth = $db->prepare('UPDATE '._DB_PREFIX_.'settings SET value=:lang WHERE name="lang" LIMIT 1');
			$sth->bindValue(':lang', $settings['lang'], PDO::PARAM_STR);
			$sth->execute();

			chmod("../config/db.php", 0644);

			header('location: ../admin');
			die('redirect...');
		}
	}
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Kamil Wyremski - wyremski.pl">
	<title><?= lang('The installer script') ?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
	<a href="" title="Creating websites"><img src="../admin/images/admin.png" alt="Admin Panel created by Kamil Wyremski" id="logo"/></a>
	<h4 class="text-center"><?= lang('Welcome to the installation program! Please fill in the fields below to pre-configure page.') ?></h4>
	<?php
		if(isset($error)){
			echo('<h3 class="text-danger text-center">'.$error.'</h3>');
		}
	?>
	<br>
	<form method="get" class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-5 control-label"><?= lang('Select language') ?>:</label>
			<div class="col-sm-7">
				<select class="form-control" name="lang" title="<?= lang('Select language') ?>" onchange="this.form.submit()">
					<?php
						foreach($langList as $key=>$lang){
							echo('<option value="'.$lang.'"');
							if($settings['lang']==$lang){
								echo(' selected ');
							}
							echo('>'.$lang.'</option>');
						}
					?>
				</select>
			</div>
		</div>
	</form>
	<br>
	<form method="post" class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-5 control-label"><?= lang('Base URL') ?>:</label>
			<div class="col-sm-7">
				<input class="form-control" type="text" name="base_url" placeholder="<?= lang('Base URL') ?>" value="<?php if(isset($_POST['base_url'])){echo($_POST['base_url']);}else{echo('http://'.$_SERVER['HTTP_HOST']);}?>" required title="<?= lang('Base URL') ?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label"><?= lang('The database server') ?>:</label>
			<div class="col-sm-7">
				<input class="form-control" type="text" name="server" placeholder="<?= lang('The database server') ?>" value="<?php if(isset($_POST['server'])){echo($_POST['server']);}else{echo('localhost');}?>" required title="<?= lang('The database server') ?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label"><?= lang('The database user name') ?>:</label>
			<div class="col-sm-7">
				<input class="form-control" type="text" name="user" placeholder="<?= lang('The database user name') ?>" value="<?php if(isset($_POST['user'])){echo($_POST['user']);}?>" required title="<?= lang('The database user name') ?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label"><?= lang('The database name') ?>:</label>
			<div class="col-sm-7">
				<input class="form-control" type="text" name="name" placeholder="<?= lang('The database name') ?>" value="<?php if(isset($_POST['name'])){echo($_POST['name']);}?>" required title="<?= lang('The database name') ?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label"><?= lang('Password for database') ?>:</label>
			<div class="col-sm-7">
				<input class="form-control" type="password" name="password" placeholder="<?= lang('Password for database') ?>" value="<?php if(isset($_POST['password'])){echo($_POST['password']);}?>" title="<?= lang('Password for database') ?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label"><?= lang('Username to Admin Panel') ?>:</label>
			<div class="col-sm-7">
				<input class="form-control" type="text" name="admin" placeholder="<?= lang('Username to Admin Panel') ?>" value="<?php if(isset($_POST['admin'])){echo($_POST['admin']);}else{echo('administrator');}?>" required title="<?= lang('Username to Admin Panel') ?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label"><?= lang('Password to Admin Panel') ?>:</label>
			<div class="col-sm-7">
				<p class="text-danger hide" id="alert_password_diferrent"><?= lang('The passwords are different') ?></p>
				<input  class="form-control" type="password" name="password_admin" placeholder="<?= lang('Password to Admin Panel') ?>" value="<?php if(isset($_POST['password_admin'])){echo($_POST['password_admin']);}?>" required title="<?= lang('Password to Admin Panel') ?>" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label"><?= lang('Repeat password to Admin Panel') ?>:</label>
			<div class="col-sm-7">
				<input class="form-control" type="password" name="password_admin_repeat" placeholder="<?= lang('Repeat password to Admin Panel') ?>" required title="<?= lang('Repeat password to Admin Panel') ?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label"><?= lang('E-mail Administrator') ?>:</label>
			<div class="col-sm-7">
				<input class="form-control" type="email" name="email" placeholder="<?= lang('E-mail Administrator') ?>" value="<?php if(isset($_POST['email'])){echo($_POST['email']);}?>" title="<?= lang('E-mail Administrator') ?>" required/>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label"><?= lang('Prefix tables in the database') ?>:</label>
			<div class="col-sm-7">
				<input class="form-control" type="text" name="db_prefix" placeholder="<?= lang('Prefix tables in the database') ?>" value="<?php if(isset($_POST['db_prefix'])){echo($_POST['db_prefix']);}?>" title="<?= lang('Prefix tables in the database') ?>" pattern="[a-z_]*"/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-7 col-sm-offset-5">
				<div class="checkbox">
					<label><input type="checkbox" name="sample_data" <?php if(isset($_POST['sample_data'])){echo('checked');}?> /><?= lang('Install sample data (categories, states, etc.)') ?></label>
				</div>
			</div>
		</div>
		<div class="form-group text-center">
			<input class="btn btn-primary" type="submit" value="<?= lang('Save') ?>"/>
		</div>
	</form>
</div>
<footer class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<p class="text-center small">Admin v4.3 - Project © 2017 - 2018 by <a href="http://wyremski.pl" target="_blank" title="Web Design">Kamil Wyremski</a></p>
		</div>
	</div>
</footer>
</body>
</html>
