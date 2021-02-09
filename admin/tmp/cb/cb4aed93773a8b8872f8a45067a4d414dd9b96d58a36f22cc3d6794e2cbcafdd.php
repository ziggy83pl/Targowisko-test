<?php

/* main.tpl */
class __TwigTemplate_f775e44c81aa77b3ce9d2fb7dcc1b8388db5439b8aa125440951f351377b6493 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'wrapper' => array($this, 'block_wrapper'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"pl-PL\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"Keywords\" content=\"admin panel\">
\t<meta name=\"Description\" content=\"Admin panel is a computer application that supports the creation and modification of digital content using a common user interface and thus usually supporting multiple users working in a collaborative environment. Created by Kamil Wyremski - wyremski.pl\">
\t<meta name=\"author\" content=\"Kamil Wyremski\">
\t<title>";
        // line 9
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>

\t<link rel=\"stylesheet\" href=\"views/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"views/css/bootstrap-datepicker.min.css\">
\t<link rel=\"stylesheet\" href=\"views/css/style.css\">
\t<link rel=\"shortcut icon\" href=\"images/favicon.png\"/>

\t<!--<script src=\"js/jquery-3.2.1.min.js\"></script>-->
\t<script
\t\t\tsrc=\"https://code.jquery.com/jquery-3.4.1.min.js\"
\t\t\tintegrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"
\t\t\tcrossorigin=\"anonymous\"></script>
\t<script src=\"js/bootstrap.min.js\"></script>
\t<script src=\"js/bootstrap-datepicker.min.js\"></script>
\t<script src=\"js/bootstrap-datepicker.pl.min.js\"></script>
\t<script src=\"js/ckeditor/ckeditor.js\"></script>
\t<script src=\"js/engine_admin.js\"></script>
</head>
<body>

";
        // line 29
        $this->displayBlock('wrapper', $context, $blocks);
        // line 140
        echo "
<div id=\"cookies-message-container\"><div id=\"cookies-message\">";
        // line 141
        echo twig_escape_filter($this->env, lang("This site uses cookies, so that our service may work better."), "html", null, true);
        echo "<a href=\"javascript:WHCloseCookiesWindow();\" id=\"accept-cookies-checkbox\">";
        echo twig_escape_filter($this->env, lang("I accept"), "html", null, true);
        echo "</a></div></div>

<div class=\"modal fade\" id=\"roxySelectFile\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Select file\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t <div class=\"modal-body\">
\t\t\t\t<iframe frameborder=\"0\" allowtransparency=\"true\"></iframe>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

</body>
</html>
";
    }

    // line 29
    public function block_wrapper($context, array $blocks = array())
    {
        // line 30
        echo "<div id=\"wrapper\">
  <nav class=\"main-nav navbar navbar-default navbar-static-top\" role=\"navigation\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-nav\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"http://targowisko.org\" title=\"Targowisko, ogłoszenia\" target=\"_blank\" id=\"logo\"><img src=\"images/PanelAdministracyjny.png\" alt=\"Targowisko\"></a>
    </div>
    <ul class=\"nav navbar-top-links navbar-right hidden-xs\">
\t\t\t<li><a href=\"?controller=admin\" title=\"";
        // line 42
        echo twig_escape_filter($this->env, lang("Admin Panel Settings"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Admin</a></li>
\t\t\t<li><a href=\"?log_out&token=";
        // line 43
        echo twig_escape_filter($this->env, generateToken("admin_logout"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Log out"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> ";
        echo twig_escape_filter($this->env, lang("Log out"), "html", null, true);
        echo "</a></li>
\t  </ul>
    <div class=\"navbar-default sidebar\" role=\"navigation\" id=\"left-navigation\">
      <div class=\"sidebar-nav navbar-collapse collapse\">
\t\t<ul class=\"nav\" id=\"side-menu\">
\t\t\t<li ";
        // line 48
        if ((($context["controller"] ?? null) == "index")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["folder_admin"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Home"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> ";
        echo twig_escape_filter($this->env, lang("Home"), "html", null, true);
        echo "</a></li>
\t\t\t<li ";
        // line 49
        if ((($context["controller"] ?? null) == "statistics")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=statistics\" title=\"";
        echo twig_escape_filter($this->env, lang("Statistics"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-check\"></span> ";
        echo twig_escape_filter($this->env, lang("Statistics"), "html", null, true);
        echo "</a></li>
\t\t\t<li ";
        // line 50
        if ((($context["controller"] ?? null) == "offers")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=offers\" title=\"";
        echo twig_escape_filter($this->env, lang("Offers"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span> ";
        echo twig_escape_filter($this->env, lang("Offers"), "html", null, true);
        echo "</a></li>
\t\t\t<li ";
        // line 51
        if ((($context["controller"] ?? null) == "users")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=users\" title=\"";
        echo twig_escape_filter($this->env, lang("Users"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
        echo twig_escape_filter($this->env, lang("Users"), "html", null, true);
        echo "</a></li>
\t\t\t<li ";
        // line 52
        if ((($context["controller"] ?? null) == "mailing")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=mailing\" title=\"";
        echo twig_escape_filter($this->env, lang("Mailing"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-envelope\"></span> ";
        echo twig_escape_filter($this->env, lang("Mailing"), "html", null, true);
        echo "</a></li>
\t\t\t<li>
\t\t\t\t<a href=\"#\" data-toggle=\"collapse\" data-target=\"#submenu_additional\" data-parent=\"#menu\" class=\"collapsed\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-th\"></span> ";
        // line 55
        echo twig_escape_filter($this->env, lang("Additional"), "html", null, true);
        echo " <span class=\"caret\"></span>
\t\t\t\t</a>
\t\t\t\t<div class=\"collapse\" id=\"submenu_additional\" style=\"height: 0px;\">
\t\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t\t<li ";
        // line 59
        if ((($context["controller"] ?? null) == "categories")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=categories\" title=\"";
        echo twig_escape_filter($this->env, lang("Categories"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Categories"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 60
        if ((($context["controller"] ?? null) == "states")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=states\" title=\"";
        echo twig_escape_filter($this->env, lang("States"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("States"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 61
        if ((($context["controller"] ?? null) == "types")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=types\" title=\"";
        echo twig_escape_filter($this->env, lang("Types"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Types"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 62
        if ((($context["controller"] ?? null) == "options")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=options\" title=\"";
        echo twig_escape_filter($this->env, lang("Additional options"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Additional options"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\" data-toggle=\"collapse\" data-target=\"#submenu_contents\" data-parent=\"#menu\" class=\"collapsed\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span> ";
        // line 68
        echo twig_escape_filter($this->env, lang("Contents"), "html", null, true);
        echo " <span class=\"caret\"></span>
\t\t\t\t</a>
\t\t\t\t<div class=\"collapse\" id=\"submenu_contents\" style=\"height: 0px;\">
\t\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t\t<li ";
        // line 72
        if ((($context["controller"] ?? null) == "index_page")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=index_page\" title=\"";
        echo twig_escape_filter($this->env, lang("Index page"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Index page"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 73
        if ((($context["controller"] ?? null) == "login_page")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=login_page\" title=\"";
        echo twig_escape_filter($this->env, lang("Login page"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Login page"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 74
        if ((($context["controller"] ?? null) == "mails")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=mails\" title=\"";
        echo twig_escape_filter($this->env, lang("Mails"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Mails"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 75
        if ((($context["controller"] ?? null) == "info")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=info\" title=\"";
        echo twig_escape_filter($this->env, lang("Info"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Info"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 76
        if ((($context["controller"] ?? null) == "articles")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=articles\" title=\"";
        echo twig_escape_filter($this->env, lang("Articles"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Articles"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\" data-toggle=\"collapse\" data-target=\"#submenu_logs\" data-parent=\"#menu\" class=\"collapsed\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-hdd\"></span> ";
        // line 82
        echo twig_escape_filter($this->env, lang("Logs"), "html", null, true);
        echo " <span class=\"caret\"></span>
\t\t\t\t</a>
\t\t\t\t<div class=\"collapse\" id=\"submenu_logs\" style=\"height: 0px;\">
\t\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t\t<li ";
        // line 86
        if ((($context["controller"] ?? null) == "logs_offers")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=logs_offers\" title=\"";
        echo twig_escape_filter($this->env, lang("Offers"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Offers"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 87
        if ((($context["controller"] ?? null) == "logs_users")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=logs_users\" title=\"";
        echo twig_escape_filter($this->env, lang("Users"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Users"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 88
        if ((($context["controller"] ?? null) == "logs_mails")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=logs_mails\" title=\"";
        echo twig_escape_filter($this->env, lang("Mails"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Mails"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 89
        if ((($context["controller"] ?? null) == "reset_password")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=reset_password\" title=\"";
        echo twig_escape_filter($this->env, lang("Reset password"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Reset password"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\" data-toggle=\"collapse\" data-target=\"#submenu_logs_payments\" data-parent=\"#menu\" class=\"collapsed\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-eur\"></span> ";
        // line 95
        echo twig_escape_filter($this->env, lang("Logs payments"), "html", null, true);
        echo " <span class=\"caret\"></span>
\t\t\t\t</a>
\t\t\t\t<div class=\"collapse\" id=\"submenu_logs_payments\" style=\"height: 0px;\">
\t\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t\t<li ";
        // line 99
        if (((($context["controller"] ?? null) == "logs_payments") && (($context["payments_type"] ?? null) == "dotpay"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=logs_payments&type=dotpay\" title=\"Dotpay\">Dotpay</a></li></a></li>
\t\t\t\t\t\t<li ";
        // line 100
        if (((($context["controller"] ?? null) == "logs_payments") && (($context["payments_type"] ?? null) == "przelewy24"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=logs_payments&type=przelewy24\" title=\"Dotpay\">Przelewy24</a></li></a></li>
\t\t\t\t\t\t<li ";
        // line 101
        if (((($context["controller"] ?? null) == "logs_payments") && (($context["payments_type"] ?? null) == "paypal"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=logs_payments&type=paypal\" title=\"PayPal\">PayPal</a></li></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\" data-toggle=\"collapse\" data-target=\"#submenu_settings\" data-parent=\"#menu\" class=\"collapsed\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-asterisk\"></span> ";
        // line 107
        echo twig_escape_filter($this->env, lang("Settings"), "html", null, true);
        echo " <span class=\"caret\"></span>
\t\t\t\t</a>
\t\t\t\t<div class=\"collapse\" id=\"submenu_settings\" style=\"height: 0px;\">
\t\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t\t<li ";
        // line 111
        if ((($context["controller"] ?? null) == "settings_black_list")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=settings_black_list\" title=\"";
        echo twig_escape_filter($this->env, lang("Black list"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Black list"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 112
        if ((($context["controller"] ?? null) == "settings_days")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=settings_days\" title=\"";
        echo twig_escape_filter($this->env, lang("Display time"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Display time"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 113
        if ((($context["controller"] ?? null) == "settings_appearance")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=settings_appearance\" title=\"";
        echo twig_escape_filter($this->env, lang("Appearance"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Appearance"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 114
        if ((($context["controller"] ?? null) == "settings_social_media")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=settings_social_media\" title=\"";
        echo twig_escape_filter($this->env, lang("Social Media"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Social Media"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 115
        if ((($context["controller"] ?? null) == "settings_ads")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=settings_ads\" title=\"";
        echo twig_escape_filter($this->env, lang("Ads"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Ads"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li ";
        // line 116
        if ((($context["controller"] ?? null) == "ads")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=ads\" title=\"";
        echo twig_escape_filter($this->env, lang("Add your Ads"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Add your Ads"), "html", null, true);
        echo "</a></li><!--tutaj dodałem nową stronę do obsługi reklam-->
\t\t\t\t\t\t<li ";
        // line 117
        if ((($context["controller"] ?? null) == "settings_payments")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=settings_payments\" title=\"";
        echo twig_escape_filter($this->env, lang("Payment settings"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Payment settings"), "html", null, true);
        echo "<span class=\"glyphicon glyphicon-usd\"></span></a></li>
\t\t\t\t\t\t<li ";
        // line 118
        if ((($context["controller"] ?? null) == "settings")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"?controller=settings\" title=\"";
        echo twig_escape_filter($this->env, lang("General settings"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("General settings"), "html", null, true);
        echo "<span class=\"glyphicon glyphicon-cog\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"visible-xs-block\"><a href=\"?controller=admin\" title=\"";
        // line 122
        echo twig_escape_filter($this->env, lang("Admin Panel Settings"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
        echo twig_escape_filter($this->env, lang("Admin Panel Settings"), "html", null, true);
        echo "</a></li>
\t\t\t<li class=\"visible-xs-block\"><a href=\"?log_out&token=";
        // line 123
        echo twig_escape_filter($this->env, generateToken("admin_logout"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Log out"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> ";
        echo twig_escape_filter($this->env, lang("Log out"), "html", null, true);
        echo "</a></li>
\t\t</ul>
      </div>
    </div>
  </nav>
  <div id=\"page-wrapper\">

\t\t<!--";
        // line 130
        if (($context["_ADMIN_TEST_MODE_"] ?? null)) {
            echo "<p class=\"text-danger\"><br><br><b>";
            echo twig_escape_filter($this->env, lang("Demo version of the Admin Panel. Editing functions are disabled"), "html", null, true);
            echo "</b></p>";
        }
        echo "-->

\t\t";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 135
        echo "
  </div>
</div>

";
    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        // line 133
        echo "
\t\t";
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
        return array (  501 => 133,  498 => 132,  490 => 135,  488 => 132,  479 => 130,  465 => 123,  459 => 122,  446 => 118,  436 => 117,  426 => 116,  416 => 115,  406 => 114,  396 => 113,  386 => 112,  376 => 111,  369 => 107,  358 => 101,  352 => 100,  346 => 99,  339 => 95,  324 => 89,  314 => 88,  304 => 87,  294 => 86,  287 => 82,  272 => 76,  262 => 75,  252 => 74,  242 => 73,  232 => 72,  225 => 68,  210 => 62,  200 => 61,  190 => 60,  180 => 59,  173 => 55,  161 => 52,  151 => 51,  141 => 50,  131 => 49,  117 => 48,  105 => 43,  101 => 42,  87 => 30,  84 => 29,  63 => 141,  60 => 140,  58 => 29,  35 => 9,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main.tpl", "/home/platne/serwer24113/public_html/admin/views/main.tpl");
    }
}
