<?php

/* main.tpl */
class __TwigTemplate_62d61ff025d8c51844853440bd5b7c764ba0ee5e037973a1e167b833ba01a342 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lang", array()), "html", null, true);
        echo "-PL\">
<head>
    <meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.6\"><!--, width=768-->
\t<meta name=\"robots\" content=\"index, follow\">
\t<meta name=\"Keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "seo_keywords", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "seo_keywords", array()), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "keywords", array()))) : (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "keywords", array()))), "html", null, true);
        echo "\">
\t<meta name=\"Description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "seo_description", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "seo_description", array()), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "description", array()))) : (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "description", array()))), "html", null, true);
        echo "\">
\t<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"https://targowisko.org/views/default/images/apple/apple-icon-57x57.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"https://targowisko.org/views/default/images/apple/apple-icon-60x60.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"https://targowisko.org/views/default/images/apple/apple-icon-72x72.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"https://targowisko.org/views/default/images/apple/apple-icon-76x76.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"https://targowisko.org/views/default/images/apple/apple-icon-114x114.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"https://targowisko.org/views/default/images/apple/apple-icon-120x120.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"https://targowisko.org/views/default/images/apple/apple-icon-144x144.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"https://targowisko.org/views/default/images/apple/apple-icon-152x152.png\">
\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"https://targowisko.org/views/default/images/apple/apple-icon-180x180.png\">
\t<title>";
        // line 18
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "seo_title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "seo_title", array()), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()))) : (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()))), "html", null, true);
        echo "</title>
\t<base href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "/\">
  <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;subset=latin-ext\" rel=\"stylesheet\">
\t<!--[if lt IE 9]>
\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t<![endif]-->
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js\"></script>
\t<!-- CSS style -->
\t";
        // line 26
        $this->displayBlock('css', $context, $blocks);
        // line 35
        echo "
\t<!-- integration with Facebook -->
\t";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo_facebook", array())) {
            echo "<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo_facebook", array()), "html", null, true);
            echo "\">";
        }
        // line 38
        echo "\t<meta property=\"og:description\" content=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "seo_description", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "seo_description", array()), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "description", array()))) : (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "description", array()))), "html", null, true);
        echo "\">
\t<meta property=\"og:title\" content=\"";
        // line 39
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "seo_title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "seo_title", array()), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()))) : (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()))), "html", null, true);
        echo "\">
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:site_name\" content=\"";
        // line 41
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "seo_title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "seo_title", array()), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()))) : (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()))), "html", null, true);
        echo "\">
\t<meta property=\"og:locale\" content=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "facebook_lang", array()), "html", null, true);
        echo "\">
\t";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "facebook_api", array())) {
            echo "<meta property=\"fb:app_id\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "facebook_api", array()), "html", null, true);
            echo "\">";
        }
        // line 44
        echo "
\t<!-- other -->
\t";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "rss", array())) {
            echo "<link rel=\"alternate\" 
\ttype=\"application/rss+xml\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, path("feed"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page", array())) {
                echo "?";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page", array()), "html", null, true);
            }
            echo "\">";
        }
        // line 48
        echo "\t";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "code_head", array());
        echo "
</head>


<body> 
\t<div >
\t<div id=\"top\" class=\"container-fluid\">
\t\t<p class=\"text-right small text-white mb-0\"><a href=\"https://www.mywebmarket.uk\" title=\"Mywebmarket\" target=\"_blank\" class=\"text-white\"><span style=\"color: #04af1a\">My</span>web<span style=\"color: #ff8400\">market</span></a></p>

\t</div>
\t<nav class=\"navbar fixed-top navbar-expand-md navbar-light indigo darken-2 \" 
\tid=\"menu_box\">
\t<!--<div class=\"menu-toggle\">
    <div class=\"hamburger\"></div><new 2
  \t</div>-->
\t\t<h1><a class=\"navbar-brand\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), "html", null, true);
        echo "\">";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), "html", null, true);
            echo "\">";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), "html", null, true);
        }
        echo "</a></h1>
\t\t<h2><a class=\"logo \" href=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), "html", null, true);
        echo "\"<span>T</span></a></h2>
\t\t\t<h3 class=\"ml12\">Darmowe ogłoszenia</h3>\t
  <button class=\"navbar-toggler third-button\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent22\"
    aria-controls=\"navbarSupportedContent22\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <div class=\"animated-icon3\"><span></span><span></span><span></span></div>
  </button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent22\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t<li class=\"nav-item ";
        // line 72
        if ((($context["controller"] ?? null) == "index")) {
            echo "active";
        }
        echo "\">
\t\t\t\t<a href=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), "html", null, true);
        echo "\" class=\"nav-link \">";
        echo twig_escape_filter($this->env, lang("Home"), "html", null, true);
        echo "</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"d-block d-md-none nav-item ";
        // line 76
        if ((($context["controller"] ?? null) == "add")) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t<a href=\"";
        // line 77
        echo twig_escape_filter($this->env, path("add"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Add offer"), "html", null, true);
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, lang("Add offer"), "html", null, true);
        echo "</a><!--dodaj-->
\t\t\t\t</li>

\t\t\t\t<li class=\"d-none d-md-block nav-item ";
        // line 80
        if ((($context["controller"] ?? null) == "add")) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t<a href=\"";
        // line 81
        echo twig_escape_filter($this->env, path("add"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Add offer"), "html", null, true);
        echo "\" class=\"btn btn-1\"><i class=\"fas fa-plus\"></i> ";
        echo twig_escape_filter($this->env, lang("Add offer"), "html", null, true);
        echo "</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item ";
        // line 84
        if ((($context["controller"] ?? null) == "offers")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, path("offers"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Search the best offers"), "html", null, true);
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, lang("Offers"), "html", null, true);
        echo "</a></li>
\t\t\t\t";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) {
            // line 86
            echo "\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"menuMyAccount\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 87
            echo twig_escape_filter($this->env, lang("My account"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"menuMyAccount\">
\t\t\t\t\t\t\t<a href=\"";
            // line 89
            echo twig_escape_filter($this->env, path("add"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Add offer"), "html", null, true);
            echo "\" class=\"dropdown-item\"><i class=\"fas fa-plus\"></i>";
            echo twig_escape_filter($this->env, lang("Add offer"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 90
            echo twig_escape_filter($this->env, path("addad"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Addad"), "html", null, true);
            echo "\" class=\"dropdown-item\"><i class=\"fas fa-cart-plus\"></i>";
            echo twig_escape_filter($this->env, lang("Addad"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 91
            echo twig_escape_filter($this->env, path("my_offers"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("My offers"), "html", null, true);
            echo "\" class=\"dropdown-item\"><i class=\"fas fa-list-ul\"></i>";
            echo twig_escape_filter($this->env, lang("My offers"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 92
            echo twig_escape_filter($this->env, path("clipboard"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Clipboard"), "html", null, true);
            echo "\" class=\"dropdown-item\"><i class=\"fas fa-clipboard-list\"></i>";
            echo twig_escape_filter($this->env, lang("Clipboard"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 93
            echo twig_escape_filter($this->env, path("settings"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Settings"), "html", null, true);
            echo "\" class=\"dropdown-item\"><i class=\"fas fa-user-cog\"></i>";
            echo twig_escape_filter($this->env, lang("Settings"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<!--<div class=\"dropdown-divider\"></div>-->
\t\t\t\t\t\t\t<a href=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
            echo "/?log_out&token=";
            echo twig_escape_filter($this->env, generateToken("logout"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Log out"), "html", null, true);
            echo "\" class=\"dropdown-item\"><i class=\"fas fa-sign-out-alt\"></i>";
            echo twig_escape_filter($this->env, lang("Log out"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 99
            echo "\t\t\t\t\t<li class=\"d-block d-md-none nav-item ";
            if ((($context["controller"] ?? null) == "login")) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t<a href=\"";
            // line 100
            echo twig_escape_filter($this->env, path("login"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Log in on the website"), "html", null, true);
            echo "\"  class=\"nav-link\">";
            echo twig_escape_filter($this->env, lang("Log in"), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"d-none d-md-block nav-item ";
            // line 102
            if ((($context["controller"] ?? null) == "login")) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t<a href=\"";
            // line 103
            echo twig_escape_filter($this->env, path("login"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Log in on the website"), "html", null, true);
            echo "\"  class=\"btn btn-primary\"><i class=\"fas fa-user\"></i> ";
            echo twig_escape_filter($this->env, lang("Log in"), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 106
        echo "\t\t\t</ul>

\t\t</div>

\t</nav>
\t";
        // line 111
        $this->displayBlock('content', $context, $blocks);
        // line 113
        echo "
\t";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_4", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_4", array());
            echo "</div>";
        }
        // line 115
        echo "\t<footer>
\t\t<div id=\"footer_top\">
\t\t\t<br>
\t\t\t<div class=\"container\">\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t";
        // line 122
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_top", array());
        echo "
\t\t\t\t\t\t<img src=\"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "/views/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
        echo "/images/PolskaStrona.jpg\" alt=\"Polska strona\"title=\"To jest Polska strona z ogłoszeniami\"class=\"img-thumbnail\"style=\"max-width: 25%;max-height: 25%;\">\t
\t\t\t\t\t\t<br><br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>";
        // line 127
        echo twig_escape_filter($this->env, lang("Sitemap"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<ul class=\"list-unstyled row\">
\t\t\t\t\t\t\t<li class=\"col-sm-6\"><a class=\"main-color-2\" href=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), "html", null, true);
        echo "\"><i class=\"fas fa-angle-right\"></i> ";
        echo twig_escape_filter($this->env, lang("Home"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"col-sm-6\"><a class=\"main-color-2\" href=\"";
        // line 130
        echo twig_escape_filter($this->env, path("add"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Add offer"), "html", null, true);
        echo "\"><i class=\"fas fa-angle-right\"></i> ";
        echo twig_escape_filter($this->env, lang("Add offer"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"col-sm-6\"><a class=\"main-color-2\" href=\"";
        // line 131
        echo twig_escape_filter($this->env, path("offers"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Search the best offers"), "html", null, true);
        echo "\"><i class=\"fas fa-angle-right\"></i> ";
        echo twig_escape_filter($this->env, lang("Offers"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"col-sm-6\"><a class=\"main-color-2\" href=\"";
        // line 132
        echo twig_escape_filter($this->env, path("my_offers"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("My offers"), "html", null, true);
        echo "\"><i class=\"fas fa-angle-right\"></i> ";
        echo twig_escape_filter($this->env, lang("My offers"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"col-sm-6\"><a class=\"main-color-2\" href=\"";
        // line 133
        echo twig_escape_filter($this->env, path("login"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Log in on the website"), "html", null, true);
        echo "\"><i class=\"fas fa-angle-right\"></i> ";
        echo twig_escape_filter($this->env, lang("Log in"), "html", null, true);
        echo "</a></li>
\t\t\t   \t\t\t    <li class=\"col-sm-6\"><a class=\"main-color-2\" href=\"";
        // line 134
        echo twig_escape_filter($this->env, path("rules"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Terms of service"), "html", null, true);
        echo "\"><i class=\"fas fa-angle-right\"></i> ";
        echo twig_escape_filter($this->env, lang("Terms of service"), "html", null, true);
        echo "</a><li>
\t\t\t        \t\t<li class=\"col-sm-6\"><a class=\"main-color-2\" href=\"";
        // line 135
        echo twig_escape_filter($this->env, path("privacy_policy"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Privacy policy"), "html", null, true);
        echo "\"><i class=\"fas fa-angle-right\"></i> ";
        echo twig_escape_filter($this->env, lang("Privacy policy"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"col-sm-6\"><a class=\"main-color-2\" href=\"";
        // line 136
        echo twig_escape_filter($this->env, path("contact"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Contact us"), "html", null, true);
        echo "\"><i class=\"fas fa-angle-right\"></i> ";
        echo twig_escape_filter($this->env, lang("Contact"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"col-sm-6\"><a class=\"main-color-2\" href=\"";
        // line 137
        echo twig_escape_filter($this->env, path("info"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Info about us"), "html", null, true);
        echo "\"><i class=\"fas fa-angle-right\"></i> ";
        echo twig_escape_filter($this->env, lang("Info"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 138
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "enable_articles", array())) {
            echo "<li class=\"col-sm-6\"><a class=\"main-color-2\" href=\"";
            echo twig_escape_filter($this->env, path("articles"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Articles"), "html", null, true);
            echo "\"><i class=\"fas fa-angle-right\"></i> ";
            echo twig_escape_filter($this->env, lang("Articles"), "html", null, true);
            echo "</a></li>";
        }
        // line 139
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "rss", array())) {
            echo "<li class=\"col-sm-6\"><a class=\"main-color-2\" href=\"";
            echo twig_escape_filter($this->env, path("feed"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page", array())) {
                echo "?";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page", array()), "html", null, true);
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("RSS feed"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, lang("RSS feed"), "html", null, true);
            echo "</a></li>";
        }
        // line 140
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div>\t\t\t\t\t\t\t\t\t<!--Facebook-->
\t\t\t\t<a href=\"https://www.facebook.com/Og%C5%82oszenia-kupi%C4%99-sprzedam-na-targowiskoorg-1853942881321358/\" target=\"_blank\" title=\"Facebook targowisko\" class=\"btn-floating btn-lg btn-fb waves-effect\" type=\"button\" role=\"button\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t\t<!--Twitter-->
\t\t\t\t<a href=\"https://twitter.com/home\" target=\"_blank\" title=\"Tweeer targowisko\"class=\"btn-floating btn-lg btn-tw\" type=\"button\" role=\"button\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t<!--Instagram-->
\t\t\t\t<a href=\"https://www.instagram.com/targowisko_org/\"target=\"_blank\"title=\"Instagram targowisko\" target_blac class=\"btn-floating btn-lg btn-ins\" type=\"button\" role=\"button\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t</div> 
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"footer_bottom\" class=\"text-center\">
\t\t\t";
        // line 155
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_bottom", array());
        echo "
\t\t\t<!--";
        // line 156
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_text", array());
        echo "-->
\t\t</div>

\t</footer>

\t<div id=\"cookies-message\" class=\"text-center\"><div class=\"container\"></div>";
        // line 161
        echo twig_escape_filter($this->env, lang("This site uses cookies, so that our service may work better."), "html", null, true);
        echo " <a href=\"javascript:closeCookiesWindow();\" id=\"accept-cookies-checkbox\" class=\"btn btn-outline-light btn-sm\">";
        echo twig_escape_filter($this->env, lang("I accept"), "html", null, true);
        echo "</a></div></div>

\t<a href=\"#\" title=\"";
        // line 163
        echo twig_escape_filter($this->env, lang("Back to top"), "html", null, true);
        echo "\" id=\"back_to_top\" style=\"font-size:45px;\"class=\"back_to_top_hidden\"><i class=\"fas fa-chevron-circle-up\"></i></a><!--<img src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "/views/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
        echo "/images/back_to_top.png\" alt=\"Back to top\">-->


\t";
        // line 166
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "facebook_side_panel", array())) {
            // line 167
            echo "\t\t<div id=\"facebook_side\" class=\"hidden-xs\">
\t\t\t<div id=\"facebook_side_image\"><img src=\"";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
            echo "/views/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
            echo "/images/facebook-side.png\" alt=\"Facebook\" width=\"10\" height=\"21\"></div>
\t\t\t<div class=\"fb-page\" data-href=\"";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "url_facebook", array()), "html", null, true);
            echo "\" data-tabs=\"timeline\" data-width=\"300\" data-height=\"350\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "url_facebook", array()), "html", null, true);
            echo "\" class=\"fb-xfbml-parse-ignore\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "url_facebook", array()), "html", null, true);
            echo "\">Facebook</a></blockquote></div>
\t\t</div>
\t";
        }
        // line 172
        echo "
  ";
        // line 173
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "rodo_alert", array())) {
            // line 174
            echo "    <div class=\"modal fade\" id=\"rodo-message\">
      <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-body\">
          ";
            // line 178
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "rodo_alert_text", array());
            echo "
          </div>
          <div class=\"modal-footer\">
            <a href=\"javascript:closeRodoWindow();\" class=\"btn btn-1\">";
            // line 181
            echo twig_escape_filter($this->env, lang("I agree to the processing my personal data"), "html", null, true);
            echo "</a>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 187
        echo "
\t<div id=\"fb-root\"></div>

\t<!-- JS javascript -->
\t";
        // line 191
        $this->displayBlock('javascript', $context, $blocks);
        // line 213
        echo "
\t";
        // line 214
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "code_body", array());
        echo "
    </div>\t
</body>
</html>
";
    }

    // line 26
    public function block_css($context, array $blocks = array())
    {
        // line 27
        echo "\t\t<link rel=\"stylesheet\" href=\"views/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
        echo "/css/bootstrap.min.css\"/>
\t\t<link rel=\"stylesheet\" href=\"views/";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
        echo "/css/all.css\"/>
\t\t<link rel=\"stylesheet\" href=\"js/easy-autocomplete/easy-autocomplete.min.css\">
\t\t<link rel=\"stylesheet\" href=\"views/";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
        echo "/css/style.css?";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "assets_version", array()), "html", null, true);
        echo "\"/>
\t\t";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", array())) {
            echo "<link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", array()), "html", null, true);
            echo "\">";
        }
        // line 32
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "code_style", array())) {
            echo "<style>";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "code_style", array());
            echo "</style>";
        }
        // line 33
        echo "\t\t
\t";
    }

    // line 111
    public function block_content($context, array $blocks = array())
    {
        // line 112
        echo "\t";
    }

    // line 191
    public function block_javascript($context, array $blocks = array())
    {
        // line 192
        echo "        
\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
\t\t\t\tintegrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"
\t\t\t\tcrossorigin=\"anonymous\"></script>
\t\t<!--<script src=\"js/jquery-3.3.1.min.js\"></script>-->
\t\t<script src=\"js/bootstrap.min.js\"></script>
\t\t<script src=\"js/easy-autocomplete/jquery.easy-autocomplete.min.js\"></script>
\t\t<script src=\"views/";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
        echo "/js/engine.js?";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "assets_version", array()), "html", null, true);
        echo "\"></script>

\t\t<script>(function(d, s, id) {
\t\t\tvar js, fjs = d.getElementsByTagName(s)[0];
\t\t\tif (d.getElementById(id)) return;
\t\t\tjs = d.createElement(s); js.id = id;
\t\t\tjs.src = \"//connect.facebook.net/";
        // line 205
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "facebook_lang", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "facebook_lang", array()), ($context["en_US"] ?? null))) : (($context["en_US"] ?? null))), "html", null, true);
        echo "/all.js#xfbml=1\";
\t\t\tfjs.parentNode.insertBefore(js, fjs);
\t\t\t}(document, 'script', 'facebook-jssdk'));
\t\t</script>

\t\t";
        // line 210
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "analytics", array());
        echo "

\t";
    }

    public function getTemplateName()
    {
        return "main.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  657 => 210,  649 => 205,  638 => 199,  629 => 192,  626 => 191,  622 => 112,  619 => 111,  614 => 33,  607 => 32,  601 => 31,  595 => 30,  590 => 28,  585 => 27,  582 => 26,  573 => 214,  570 => 213,  568 => 191,  562 => 187,  553 => 181,  547 => 178,  541 => 174,  539 => 173,  536 => 172,  526 => 169,  520 => 168,  517 => 167,  515 => 166,  505 => 163,  498 => 161,  490 => 156,  486 => 155,  469 => 140,  454 => 139,  444 => 138,  436 => 137,  428 => 136,  420 => 135,  412 => 134,  404 => 133,  396 => 132,  388 => 131,  380 => 130,  372 => 129,  367 => 127,  358 => 123,  354 => 122,  350 => 121,  342 => 115,  336 => 114,  333 => 113,  331 => 111,  324 => 106,  314 => 103,  308 => 102,  299 => 100,  292 => 99,  279 => 95,  270 => 93,  262 => 92,  254 => 91,  246 => 90,  238 => 89,  233 => 87,  230 => 86,  228 => 85,  216 => 84,  206 => 81,  200 => 80,  190 => 77,  184 => 76,  174 => 73,  168 => 72,  155 => 64,  139 => 63,  120 => 48,  112 => 47,  108 => 46,  104 => 44,  98 => 43,  94 => 42,  90 => 41,  85 => 39,  80 => 38,  74 => 37,  70 => 35,  68 => 26,  58 => 19,  54 => 18,  41 => 8,  37 => 7,  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main.tpl", "/home/platne/serwer24113/public_html/views/default/main.tpl");
    }
}
