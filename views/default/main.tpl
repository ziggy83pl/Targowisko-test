<!doctype html>
<html lang="PL">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.6"><!--, width=768-->
	<meta name="robots" content="index, follow">
	<meta name="Keywords" content="{{ settings.seo_keywords|default(settings.keywords) }}">
	<meta name="Description" content="{{ settings.seo_description|default(settings.description) }}">
	<link rel="apple-touch-icon" sizes="57x57" href="https://targowisko.org/views/default/images/apple/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="https://targowisko.org/views/default/images/apple/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="https://targowisko.org/views/default/images/apple/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="https://targowisko.org/views/default/images/apple/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="https://targowisko.org/views/default/images/apple/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="https://targowisko.org/views/default/images/apple/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="https://targowisko.org/views/default/images/apple/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="https://targowisko.org/views/default/images/apple/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="https://targowisko.org/views/default/images/apple/apple-icon-180x180.png">
	<title>{{ settings.seo_title|default(settings.title) }}</title>
	<base href="{{ settings.base_url }}/">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;subset=latin-ext" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
	<!-- CSS style -->
	{% block css %}
		<link rel="stylesheet" href="views/{{ settings.template }}/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="views/{{ settings.template }}/css/all.css"/>
		<link rel="stylesheet" href="js/easy-autocomplete/easy-autocomplete.min.css">
		<link rel="stylesheet" href="views/{{ settings.template }}/css/style.css?{{ settings.assets_version }}"/>
		{% if settings.favicon %}<link rel="shortcut icon" href="{{ settings.favicon }}">{% endif %}
		{% if settings.code_style %}<style>{{ settings.code_style|raw }}</style>{% endif %}
		
	{% endblock %}

	<!-- integration with Facebook -->
	{% if settings.logo_facebook  %}<meta property="og:image" content="{{ settings.logo_facebook }}">{% endif %}
	<meta property="og:description" content="{{ settings.seo_description|default(settings.description) }}">
	<meta property="og:title" content="{{ settings.seo_title|default(settings.title) }}">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="{{ settings.seo_title|default(settings.title) }}">
	<meta property="og:locale" content="{{ settings.facebook_lang }}">
	{% if settings.facebook_api %}<meta property="fb:app_id" content="{{ settings.facebook_api }}">{% endif %}

	<!-- other -->
	{% if settings.rss %}<link rel="alternate" 
	type="application/rss+xml" href="{{ path('feed') }}{% if pagination.page_url.page %}?{{ pagination.page_url.page }}{% endif %}">{% endif %}
	{{ settings.code_head|raw }}
</head>


<body> <!--background swieta style="background-image: url('https://targowisko.org/views/default/images/backgraund/christmas-colour.png'); background-repeat: repeat; background-size: center center fixed; background-position: center center;" alt="Wesołych świąt!" title="Wesołych świat!"-->
	<div>
	<div id="top" class="container-fluid">
		<p class="text-right small text-white mb-0"><span>liczba osób na stronie: </span><span id="person"></span> <a href="https://www.mywebmarket.uk" title="Mywebmarket" target="_blank" class="text-white"><span style="color: #04af1a">My</span>web<span style="color: #ff8400">market</span></a></p>
		<script>var random = Math.floor(Math.random()* 24) +6;
        document.getElementById("person").innerHTML = random;</script>

	</div>
	<nav class="navbar fixed-top navbar-expand-md navbar-light indigo darken-2 " 
	id="menu_box">
	<!--<div class="menu-toggle">
    <div class="hamburger"></div><new 2
  	</div>-->
		<h1><a class="navbar-brand" href="{{ settings.base_url }}" title="{{ settings.title }}">{% if settings.logo %}<img src="{{ settings.logo }}" alt="{{ settings.title }}">{% else %}{{ settings.title }}{% endif %}</a></h1>
		<h2><a class="logo " href="{{ settings.base_url }}" title="{{ settings.title }}"><span>T</span></a></h2>
			<h3 class="ml12">Darmowe ogłoszenia</h3>	
  <button class="navbar-toggler third-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent22"
    aria-controls="navbarSupportedContent22" aria-expanded="false" aria-label="Toggle navigation">
    <div class="animated-icon3"><span></span><span></span><span></span></div>
  </button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent22">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item {% if controller=='index' %}active{% endif %}">
				<a href="{{ settings.base_url }}" title="{{ settings.title }}" class="nav-link ">{{ 'Home'|lang }}</a>
				</li>

				<li class="d-block d-md-none nav-item {% if controller=='add' %}active{% endif %}">
					<a href="{{ path('add') }}" title="{{ 'Add offer'|lang }}" class="nav-link">{{ 'Add offer'|lang }}</a><!--dodaj-->
				</li>

				<li class="d-none d-md-block nav-item {% if controller=='add' %}active{% endif %}">
					<a href="{{ path('add') }}" title="{{ 'Add offer'|lang }}" class="btn btn-1"><i id="rotate" class="fas fa-plus"></i> {{ 'Add offer'|lang }}</a>
				</li>

				<li class="nav-item {% if controller=='offers' %}active{% endif %}"><a href="{{ path('offers') }}" title="{{ 'Search the best offers'|lang }}" class="nav-link">{{ 'Offers'|lang }}</a></li>
				{% if user.id %}
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="menuMyAccount" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ 'My account'|lang }}</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="menuMyAccount">
							<a href="{{ path('add') }}" title="{{ 'Add offer'|lang }}" class="dropdown-item"><i class="fas fa-plus"></i>{{ 'Add offer'|lang }}</a>
							<a href="{{ path('addad') }}" title="{{ 'Addad'|lang }}" class="dropdown-item"><i class="fas fa-cart-plus"></i>{{ 'Addad'|lang }}</a>
							<a href="{{ path('my_offers') }}" title="{{ 'My offers'|lang }}" class="dropdown-item"><i class="fas fa-list-ul"></i>{{ 'My offers'|lang }}</a>
							<a href="{{ path('clipboard') }}" title="{{ 'Clipboard'|lang }}" class="dropdown-item"><i class="fas fa-clipboard-list"></i>{{ 'Clipboard'|lang }}</a>
							<a href="{{ path('settings') }}" title="{{ 'Settings'|lang }}" class="dropdown-item"><i class="fas fa-user-cog"></i>{{ 'Settings'|lang }}</a>
							<!--<div class="dropdown-divider"></div>-->
							<a href="{{ settings.base_url }}/?log_out&token={{ generateToken('logout') }}" title="{{ 'Log out'|lang }}" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>{{ 'Log out'|lang }}</a>
						</div>
					</li>
				{% else %}
					<li class="d-block d-md-none nav-item {% if controller=='login' %}active{% endif %}">
						<a href="{{ path('login') }}" title="{{ 'Log in on the website'|lang }}"  class="nav-link">{{ 'Log in'|lang }}</a>
					</li>
					<li class="d-none d-md-block nav-item {% if controller=='login' %}active{% endif %}">
						<a href="{{ path('login') }}" title="{{ 'Log in on the website'|lang }}"  class="btn btn-primary"><i class="fas fa-user"></i> {{ 'Log in'|lang }}</a>
					</li>
				{% endif %}
			</ul>

		</div>

	</nav>
	{% block content %}
	{% endblock %}

	{% if settings.ads_4 %}<div class="ads">{{ settings.ads_4|raw }}</div>{% endif %}
	<footer>
		<div id="footer_top">
			<br>
			<div class="container">		
				<div class="row">
					<div class="col-md-6" >
						<h4>{{ settings.title }}</h4>
						{{ settings.footer_top|raw }}
						<img src="{{ settings.base_url }}/views/{{ settings.template }}/images/PolskaStrona.jpg" alt="Polska strona" title="To jest Polska strona z ogłoszeniami" class="img-thumbnail" style="max-width: 25%;max-height: 25%;">	
						<br><br>
					</div>
					<div class="col-md-6">
						<h4>{{ 'Sitemap'|lang }}</h4>
						<ul class="list-unstyled row">
							<li class="col-sm-6"><a class="main-color-2" href="{{ settings.base_url }}" title="{{ settings.title }}"><i class="fas fa-angle-right"></i> {{ 'Home'|lang }}</a></li>
							<li class="col-sm-6"><a class="main-color-2" href="{{ path('add') }}" title="{{ 'Add offer'|lang }}"><i class="fas fa-angle-right"></i> {{ 'Add offer'|lang }}</a></li>
							<li class="col-sm-6"><a class="main-color-2" href="{{ path('offers') }}" title="{{ 'Search the best offers'|lang }}"><i class="fas fa-angle-right"></i> {{ 'Offers'|lang }}</a></li>
							<li class="col-sm-6"><a class="main-color-2" href="{{ path('my_offers') }}" title="{{ 'My offers'|lang }}"><i class="fas fa-angle-right"></i> {{ 'My offers'|lang }}</a></li>
							<li class="col-sm-6"><a class="main-color-2" href="{{ path('login') }}" title="{{ 'Log in on the website'|lang }}"><i class="fas fa-angle-right"></i> {{ 'Log in'|lang }}</a></li>
			   			    <li class="col-sm-6"><a class="main-color-2" href="{{ path('rules') }}" title="{{ 'Terms of service'|lang }}"><i class="fas fa-angle-right"></i> {{ 'Terms of service'|lang }}</a><li>
			        		<li class="col-sm-6"><a class="main-color-2" href="{{ path('privacy_policy') }}" title="{{ 'Privacy policy'|lang }}"><i class="fas fa-angle-right"></i> {{ 'Privacy policy'|lang }}</a></li>
							<li class="col-sm-6"><a class="main-color-2" href="{{ path('contact') }}" title="{{ 'Contact us'|lang }}"><i class="fas fa-angle-right"></i> {{ 'Contact'|lang }}</a></li>
							<li class="col-sm-6"><a class="main-color-2" href="{{ path('info') }}" title="{{ 'Info about us'|lang }}"><i class="fas fa-angle-right"></i> {{ 'Info'|lang }}</a></li>
							{% if settings.enable_articles %}<li class="col-sm-6"><a class="main-color-2" href="{{ path('articles') }}" title="{{ 'Articles'|lang }}"><i class="fas fa-angle-right"></i> {{ 'Articles'|lang }}</a></li>{% endif %}
							{% if settings.rss %}<li class="col-sm-6"><a class="main-color-2" href="{{ path('feed') }}{% if pagination.page_url.page %}?{{ pagination.page_url.page }}{% endif %}" title="{{ 'RSS feed'|lang }}" target="_blank">{{ 'RSS feed'|lang }}</a></li>{% endif %}
						</ul>
						<br>
						<div>									<!--Facebook-->
				<a href="https://www.facebook.com/Og%C5%82oszenia-kupi%C4%99-sprzedam-na-targowiskoorg-1853942881321358/" target="_blank" title="Facebook targowisko" class="btn-floating btn-lg btn-fb waves-effect" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
				<!--Twitter-->
				<a href="https://twitter.com/home" target="_blank" title="Tweeer targowisko" class="btn-floating btn-lg btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
				<!--Instagram-->
				<a href="https://www.instagram.com/targowisko_org/" target="_blank" title="Instagram targowisko" target_blac class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>
				</div> 
						<br>
					</div>
				</div>
			</div>
		</div>
		<div id="footer_bottom" class="text-center">
			{{ settings.footer_bottom|raw }}
			<!--{{ settings.footer_text|raw }}-->
		</div>

	</footer>

	<div id="cookies-message" class="text-center"><div class="container"></div>{{ 'This site uses cookies, so that our service may work better.'|lang }} <a href="javascript:closeCookiesWindow();" id="accept-cookies-checkbox" class="btn btn-outline-light btn-sm">{{ 'I accept'|lang }}</a></div></div>

	<a href="#" title="{{ 'Back to top'|lang }}" id="back_to_top" style="font-size:45px;" class="back_to_top_hidden"><i class="fas fa-chevron-circle-up"></i></a><!--<img src="{{ settings.base_url }}/views/{{ settings.template }}/images/back_to_top.png" alt="Back to top">-->


	{% if settings.facebook_side_panel %}
		<div id="facebook_side" class="hidden-xs">
			<div id="facebook_side_image"><img src="{{ settings.base_url }}/views/{{ settings.template }}/images/facebook-side.png" alt="Facebook" width="10" height="21"></div>
			<div class="fb-page" data-href="{{ settings.url_facebook }}" data-tabs="timeline" data-width="300" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{ settings.url_facebook }}" class="fb-xfbml-parse-ignore"><a href="{{ settings.url_facebook }}">Facebook</a></blockquote></div>
		</div>
	{% endif %}

  {% if settings.rodo_alert %}
    <div class="modal fade" id="rodo-message">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
          {{ settings.rodo_alert_text|raw }}
          </div>
          <div class="modal-footer">
            <a href="javascript:closeRodoWindow();" class="btn btn-1">{{ 'I agree to the processing my personal data'|lang }}</a>
          </div>
        </div>
      </div>
    </div>
  {% endif %}

	<div id="fb-root"></div>

	<!-- JS javascript -->
	{% block javascript %}
        
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"
				integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
				crossorigin="anonymous"></script>
		<!--<script src="js/jquery-3.3.1.min.js"></script>-->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/easy-autocomplete/jquery.easy-autocomplete.min.js"></script>
		<script src="views/{{ settings.template }}/js/engine.js?{{ settings.assets_version }}"></script>

		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/{{ settings.facebook_lang|default(en_US) }}/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>

		{{ settings.analytics|raw }}

	{% endblock %}

	{{ settings.code_body|raw }}
    	
</body>
</html>
