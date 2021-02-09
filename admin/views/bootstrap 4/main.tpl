<!doctype html>
<html lang="pl-PL">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Keywords" content="admin panel">
	<meta name="Description" content="Admin panel is a computer application that supports the creation and modification of digital content using a common user interface and thus usually supporting multiple users working in a collaborative environment. Created by Kamil Wyremski - wyremski.pl">
	<meta name="author" content="Kamil Wyremski">
	<title>{{ title }}</title>

	<link rel="stylesheet" href="views/css/bootstrap.min.css">
	<link rel="stylesheet" href="views/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="shortcut icon" href="images/favicon.png"/>
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<!--<script src="js/jquery-3.5.1.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/bootstrap-datepicker.pl.min.js"></script>
	<script src="js/ckeditor/ckeditor.js"></script>
	<script src="js/engine_admin.js"></script>
</head>
<body>

{% block wrapper %}
<div id="wrapper">
  <nav class="main-nav navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://targowisko.org" title="Targowisko, ogłoszenia" target="_blank" id="logo"><img src="images/PanelAdministracyjny.png" alt="Targowisko"></a>
    </div>
    <ul class="nav navbar-top-links navbar-right hidden-xs">
			<li><a href="?controller=admin" title="{{ 'Admin Panel Settings'|lang }}"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
			<li><a href="?log_out&token={{ generateToken('admin_logout') }}" title="{{ 'Log out'|lang }}"><span class="glyphicon glyphicon-log-out"></span> {{ 'Log out'|lang }}</a></li>
	  </ul>
    <div class="navbar-default sidebar" role="navigation" id="left-navigation">
      <div class="sidebar-nav navbar-collapse collapse">
		<ul class="nav" id="side-menu">
			<li {% if controller=='index' %}class="active"{% endif %}><a href="{{ settings.base_url }}/{{ folder_admin }}" title="{{ 'Home'|lang }}"><span class="glyphicon glyphicon-home"></span> {{ 'Home'|lang }}</a></li>
			<li {% if controller=='statistics' %}class="active"{% endif %}><a href="?controller=statistics" title="{{ 'Statistics'|lang }}"><span class="glyphicon glyphicon-check"></span> {{ 'Statistics'|lang }}</a></li>
			<li {% if controller=='offers' %}class="active"{% endif %}><a href="?controller=offers" title="{{ 'Offers'|lang }}"><span class="glyphicon glyphicon-list-alt"></span> {{ 'Offers'|lang }}</a></li>
			<li {% if controller=='users' %}class="active"{% endif %}><a href="?controller=users" title="{{ 'Users'|lang }}"><span class="glyphicon glyphicon-user"></span> {{ 'Users'|lang }}</a></li>
			<li {% if controller=='mailing' %}class="active"{% endif %}><a href="?controller=mailing" title="{{ 'Mailing'|lang }}"><span class="glyphicon glyphicon-envelope"></span> {{ 'Mailing'|lang }}</a></li>
			<li>
				<a href="#" data-toggle="collapse" data-target="#submenu_additional" data-parent="#menu" class="collapsed">
					<span class="glyphicon glyphicon-th"></span> {{ 'Additional'|lang }} <span class="caret"></span>
				</a>
				<div class="collapse" id="submenu_additional" style="height: 0px;">
					<ul class="nav nav-list">
						<li {% if controller=='categories' %}class="active"{% endif %}><a href="?controller=categories" title="{{ 'Categories'|lang }}">{{ 'Categories'|lang }}</a></li>
						<li {% if controller=='states' %}class="active"{% endif %}><a href="?controller=states" title="{{ 'States'|lang }}">{{ 'States'|lang }}</a></li>
						<li {% if controller=='types' %}class="active"{% endif %}><a href="?controller=types" title="{{ 'Types'|lang }}">{{ 'Types'|lang }}</a></li>
						<li {% if controller=='options' %}class="active"{% endif %}><a href="?controller=options" title="{{ 'Additional options'|lang }}">{{ 'Additional options'|lang }}</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#" data-toggle="collapse" data-target="#submenu_contents" data-parent="#menu" class="collapsed">
					<span class="glyphicon glyphicon-edit"></span> {{ 'Contents'|lang }} <span class="caret"></span>
				</a>
				<div class="collapse" id="submenu_contents" style="height: 0px;">
					<ul class="nav nav-list">
						<li {% if controller=='index_page' %}class="active"{% endif %}><a href="?controller=index_page" title="{{ 'Index page'|lang }}">{{ 'Index page'|lang }}</a></li>
						<li {% if controller=='login_page' %}class="active"{% endif %}><a href="?controller=login_page" title="{{ 'Login page'|lang }}">{{ 'Login page'|lang }}</a></li>
						<li {% if controller=='mails' %}class="active"{% endif %}><a href="?controller=mails" title="{{ 'Mails'|lang }}">{{ 'Mails'|lang }}</a></li>
						<li {% if controller=='info' %}class="active"{% endif %}><a href="?controller=info" title="{{ 'Info'|lang }}">{{ 'Info'|lang }}</a></li>
						<li {% if controller=='articles' %}class="active"{% endif %}><a href="?controller=articles" title="{{ 'Articles'|lang }}">{{ 'Articles'|lang }}</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#" data-toggle="collapse" data-target="#submenu_logs" data-parent="#menu" class="collapsed">
					<span class="glyphicon glyphicon-hdd"></span> {{ 'Logs'|lang }} <span class="caret"></span>
				</a>
				<div class="collapse" id="submenu_logs" style="height: 0px;">
					<ul class="nav nav-list">
						<li {% if controller=='logs_offers' %}class="active"{% endif %}><a href="?controller=logs_offers" title="{{ 'Offers'|lang }}">{{ 'Offers'|lang }}</a></li>
						<li {% if controller=='logs_users' %}class="active"{% endif %}><a href="?controller=logs_users" title="{{ 'Users'|lang }}">{{ 'Users'|lang }}</a></li>
						<li {% if controller=='logs_mails' %}class="active"{% endif %}><a href="?controller=logs_mails" title="{{ 'Mails'|lang }}">{{ 'Mails'|lang }}</a></li>
						<li {% if controller=='reset_password' %}class="active"{% endif %}><a href="?controller=reset_password" title="{{ 'Reset password'|lang }}">{{ 'Reset password'|lang }}</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#" data-toggle="collapse" data-target="#submenu_logs_payments" data-parent="#menu" class="collapsed">
					<span class="glyphicon glyphicon-eur"></span> {{ 'Logs payments'|lang }} <span class="caret"></span>
				</a>
				<div class="collapse" id="submenu_logs_payments" style="height: 0px;">
					<ul class="nav nav-list">
						<li {% if controller=='logs_payments' and payments_type=='dotpay' %}class="active"{% endif %}><a href="?controller=logs_payments&type=dotpay" title="Dotpay">Dotpay</a></li></a></li>
						<li {% if controller=='logs_payments' and payments_type=='przelewy24' %}class="active"{% endif %}><a href="?controller=logs_payments&type=przelewy24" title="Dotpay">Przelewy24</a></li></a></li>
						<li {% if controller=='logs_payments' and payments_type=='paypal' %}class="active"{% endif %}><a href="?controller=logs_payments&type=paypal" title="PayPal">PayPal</a></li></a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#" data-toggle="collapse" data-target="#submenu_settings" data-parent="#menu" class="collapsed">
					<span class="glyphicon glyphicon-asterisk"></span> {{ 'Settings'|lang }} <span class="caret"></span>
				</a>
				<div class="collapse" id="submenu_settings" style="height: 0px;">
					<ul class="nav nav-list">
						<li {% if controller=='settings_black_list' %}class="active"{% endif %}><a href="?controller=settings_black_list" title="{{ 'Black list'|lang }}">{{ 'Black list'|lang }}</a></li>
						<li {% if controller=='settings_days' %}class="active"{% endif %}><a href="?controller=settings_days" title="{{ 'Display time'|lang }}">{{ 'Display time'|lang }}</a></li>
						<li {% if controller=='settings_appearance' %}class="active"{% endif %}><a href="?controller=settings_appearance" title="{{ 'Appearance'|lang }}">{{ 'Appearance'|lang }}</a></li>
						<li {% if controller=='settings_social_media' %}class="active"{% endif %}><a href="?controller=settings_social_media" title="{{ 'Social Media'|lang }}">{{ 'Social Media'|lang }}</a></li>
						<li {% if controller=='settings_ads' %}class="active"{% endif %}><a href="?controller=settings_ads" title="{{ 'Ads'|lang }}">{{ 'Ads'|lang }}</a></li>
						<li {% if controller=='ads' %}class="active"{% endif %}><a href="?controller=ads" title="{{ 'Add your Ads'|lang }}">{{ 'Add your Ads'|lang }}</a></li><!--tutaj dodałem nową stronę do obsługi reklam-->
						<li {% if controller=='settings_payments' %}class="active"{% endif %}><a href="?controller=settings_payments" title="{{ 'Payment settings'|lang }}">{{ 'Payment settings'|lang }}<span class="glyphicon glyphicon-usd"></span></a></li>
						<li {% if controller=='settings' %}class="active"{% endif %}><a href="?controller=settings" title="{{ 'General settings'|lang }}">{{ 'General settings'|lang }}<span class="glyphicon glyphicon-cog"></span></a></li>
					</ul>
				</div>
			</li>
			<li class="visible-xs-block"><a href="?controller=admin" title="{{ 'Admin Panel Settings'|lang }}"><span class="glyphicon glyphicon-user"></span> {{ 'Admin Panel Settings'|lang }}</a></li>
			<li class="visible-xs-block"><a href="?log_out&token={{ generateToken('admin_logout') }}" title="{{ 'Log out'|lang }}"><span class="glyphicon glyphicon-log-out"></span> {{ 'Log out'|lang }}</a></li>
		</ul>
      </div>
    </div>
  </nav>
  <div id="page-wrapper">

		<!--{% if _ADMIN_TEST_MODE_ %}<p class="text-danger"><br><br><b>{{ 'Demo version of the Admin Panel. Editing functions are disabled'|lang }}</b></p>{% endif %}-->

		{% block content %}

		{% endblock %}

  </div>
</div>

{% endblock %}

<div id="cookies-message-container"><div id="cookies-message">{{ 'This site uses cookies, so that our service may work better.'|lang }}<a href="javascript:WHCloseCookiesWindow();" id="accept-cookies-checkbox">{{ 'I accept'|lang }}</a></div></div>

<div class="modal fade" id="roxySelectFile" tabindex="-1" role="dialog" aria-labelledby="Select file">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			 <div class="modal-body">
				<iframe frameborder="0" allowtransparency="true"></iframe>
			</div>
		</div>
	</div>
</div>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>
