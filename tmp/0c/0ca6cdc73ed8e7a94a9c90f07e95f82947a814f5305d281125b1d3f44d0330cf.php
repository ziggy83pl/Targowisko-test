<?php

/* login.html */
class __TwigTemplate_415e94dd57adb62c65c628d94c351e7749d3f5b886cba7e352feb499c476a9a2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "login.html", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"page_box\">
\t<br>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div id=\"login_box\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item ";
        // line 12
        if ((($context["tab_active"] ?? null) == "login")) {
            echo "active";
        }
        echo "\"><a href=\"#login\" class=\"nav-link main-color-2 ";
        if ((($context["tab_active"] ?? null) == "login")) {
            echo "active";
        }
        echo "\"  data-toggle=\"tab\" role=\"tab\" aria-controls=\"login\" aria-selected=\"";
        if ((($context["tab_active"] ?? null) == "login")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\">";
        echo twig_escape_filter($this->env, lang("Log in"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-item ";
        // line 13
        if ((($context["tab_active"] ?? null) == "register")) {
            echo "active";
        }
        echo "\"><a href=\"#register\" class=\"nav-link main-color-2 ";
        if ((($context["tab_active"] ?? null) == "register")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"register\" aria-selected=\"";
        if ((($context["tab_active"] ?? null) == "register")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\">";
        echo twig_escape_filter($this->env, lang("Register"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-item ";
        // line 14
        if ((($context["tab_active"] ?? null) == "reset_password")) {
            echo "active";
        }
        echo "\"><a href=\"#reset_password\" class=\"nav-link main-color-2 ";
        if ((($context["tab_active"] ?? null) == "reset_password")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"reset_password\" aria-selected=\"";
        if ((($context["tab_active"] ?? null) == "reset_password")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\">";
        echo twig_escape_filter($this->env, lang("Reset password"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t </ul>
\t\t\t\t\t ";
        // line 16
        if ((($context["alert_success"] ?? null) || ($context["alert_danger"] ?? null))) {
            echo "<br>";
        }
        // line 17
        echo "\t\t\t\t\t ";
        $this->loadTemplate("alert.tpl", "login.html", 17)->display($context);
        // line 18
        echo "\t\t\t\t\t <div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane container ";
        // line 19
        if ((($context["tab_active"] ?? null) == "login")) {
            echo "active";
        } else {
            echo "fade";
        }
        echo "\" id=\"login\" role=\"tabpanel\" aria-labelledby=\"login-tab\">
\t\t\t\t\t\t\t";
        // line 20
        if (($context["form_complete_data"] ?? null)) {
            // line 21
            echo "\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"complete_data\">
\t\t\t\t\t\t\t\t\t<h3>";
            // line 23
            echo twig_escape_filter($this->env, lang("Complete data"), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t<h5>";
            // line 24
            echo twig_escape_filter($this->env, lang("To continue, enter the login you want to use on the site"), "html", null, true);
            echo "</h5><br>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">";
            // line 26
            echo twig_escape_filter($this->env, lang("E-mail address"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" disabled value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form_complete_data"] ?? null), "email", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"username\">";
            // line 30
            echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"";
            // line 31
            echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
            echo "\" required maxlength=\"64\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["input"] ?? null), "username", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Enter your username. Use only characters:"), "html", null, true);
            echo " a-zA-Z0-9-_\" pattern=\"[a-zA-Z0-9-_]+\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"rules\" required ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["input"] ?? null), "rules", array())) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, lang("Accepts the terms and conditions and the privacy policy"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, path("rules"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Terms of service"), "html", null, true);
            echo "\" target=\"_blank\" class=\"main-color-2\">";
            echo twig_escape_filter($this->env, lang("Terms of service"), "html", null, true);
            echo "</a> - <a href=\"";
            echo twig_escape_filter($this->env, path("privacy_policy"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Privacy policy"), "html", null, true);
            echo "\" target=\"_blank\" class=\"main-color-2\">";
            echo twig_escape_filter($this->env, lang("Privacy policy"), "html", null, true);
            echo "</a></p>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary text-uppercase\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, path("login"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "redirect", array())) {
                echo "?redirect=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "redirect", array()), "html", null, true);
            }
            echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"login\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"session_code\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["session_code"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<h3>";
            // line 45
            echo twig_escape_filter($this->env, lang("Log in"), "html", null, true);
            echo "</h3><br>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"username\"><i class=\"fas fa-user\"></i> ";
            // line 47
            echo twig_escape_filter($this->env, lang("Username / email"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"";
            // line 48
            echo twig_escape_filter($this->env, lang("example@example.com"), "html", null, true);
            echo "\" required value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "username", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Enter your username or e-mail"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"password\"><i class=\"fas fa-key\"></i> ";
            // line 51
            echo twig_escape_filter($this->env, lang("Password"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"****\" required title=\"";
            // line 52
            echo twig_escape_filter($this->env, lang("Enter your password"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-1 text-uppercase\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, lang("Log in"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 55
            if ((($context["facebook_redirect_uri"] ?? null) || ($context["google_redirect_uri"] ?? null))) {
                echo "<br><br>";
            }
            // line 56
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["facebook_redirect_uri"] ?? null)) {
                // line 57
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, ($context["facebook_redirect_uri"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Log in by FB"), "html", null, true);
                echo "\" class=\"btn btn-primary text-uppercase btn-sm\">";
                echo twig_escape_filter($this->env, lang("Log in by FB"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t\t\t\t\t\t";
            if (($context["google_redirect_uri"] ?? null)) {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, ($context["google_redirect_uri"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Log in by Google"), "html", null, true);
                echo "\" class=\"btn btn-danger text-uppercase btn-sm\">";
                echo twig_escape_filter($this->env, lang("Log in by Google"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane container ";
        // line 65
        if ((($context["tab_active"] ?? null) == "register")) {
            echo "active";
        } else {
            echo "fade";
        }
        echo "\" id=\"register\" role=\"tabpanel\" aria-labelledby=\"register-tab\">
\t\t\t\t\t\t\t<form method=\"post\" action=\"";
        // line 66
        echo twig_escape_filter($this->env, path("login"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"register\">
\t\t\t\t\t\t\t\t<h3>";
        // line 68
        echo twig_escape_filter($this->env, lang("Register"), "html", null, true);
        echo "</h3><br>
\t\t\t\t\t\t\t\t";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "email", array())) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\"><i class=\"fas fa-exclamation\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "email", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"email\">";
        // line 73
        echo twig_escape_filter($this->env, lang("E-mail address"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"";
        // line 74
        echo twig_escape_filter($this->env, lang("example@example.com"), "html", null, true);
        echo "\" id=\"email\" required maxlength=\"64\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["input"] ?? null), "email", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Enter your email address"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "username", array())) {
            // line 77
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\"><i class=\"fas fa-exclamation\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "username", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"username\">";
        // line 80
        echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"";
        // line 81
        echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
        echo "\" required maxlength=\"64\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["input"] ?? null), "username", array()), "html", null, true);
        echo "\"title=\"";
        echo twig_escape_filter($this->env, lang("Enter your username. Use only characters:"), "html", null, true);
        echo " a-zA-Z0-9-_\" pattern=\"[a-zA-Z0-9-_]+\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "password", array())) {
            // line 84
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\"><i class=\"fas fa-exclamation\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "password", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"password\">";
        // line 87
        echo twig_escape_filter($this->env, lang("Password"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"****\" required maxlength=\"32\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["input"] ?? null), "password", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Enter your password"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"password_repeat\">";
        // line 91
        echo twig_escape_filter($this->env, lang("Repeat password"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_repeat\" placeholder=\"****\" id=\"password_repeat\" required maxlength=\"32\" title=\"";
        // line 92
        echo twig_escape_filter($this->env, lang("Here repeat your password"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "rules", array())) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\"><i class=\"fas fa-exclamation\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "rules", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"rules\" required ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["input"] ?? null), "rules", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Accepts the terms and conditions and the privacy policy"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t<p><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, path("rules"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Terms of service"), "html", null, true);
        echo "\" target=\"_blank\" class=\"main-color-2\">";
        echo twig_escape_filter($this->env, lang("Terms of service"), "html", null, true);
        echo "</a> - <a href=\"";
        echo twig_escape_filter($this->env, path("privacy_policy"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Privacy policy"), "html", null, true);
        echo "\" target=\"_blank\" class=\"main-color-2\">";
        echo twig_escape_filter($this->env, lang("Privacy policy"), "html", null, true);
        echo "</a></p>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "captcha", array())) {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\"><i class=\"fas fa-exclamation\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "captcha", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"captcha\">";
        // line 107
        echo twig_escape_filter($this->env, lang("Enter the code Captcha"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 109
        echo twig_escape_filter($this->env, path("captcha"), "html", null, true);
        echo "\" alt=\"captcha\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"abc123\" title=\"";
        // line 110
        echo twig_escape_filter($this->env, lang("Enter the code Captcha"), "html", null, true);
        echo "\" name=\"captcha\" required maxlength=\"32\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-1 text-uppercase\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, lang("Register"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane container ";
        // line 115
        if ((($context["tab_active"] ?? null) == "reset_password")) {
            echo "active";
        } else {
        }
        echo "\" id=\"reset_password\" role=\"tabpanel\" aria-labelledby=\"reset_password-tab\">
\t\t\t\t\t\t\t";
        // line 116
        if (($context["form_new_password"] ?? null)) {
            // line 117
            echo "\t\t\t\t\t\t\t\t<h3>";
            echo twig_escape_filter($this->env, lang("Enter a new password"), "html", null, true);
            echo "</h3><br>
\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"new_password\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled value=\"";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form_new_password"] ?? null), "username", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" disabled value=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form_new_password"] ?? null), "email", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"password\">";
            // line 127
            echo twig_escape_filter($this->env, lang("Enter a new password"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"****\" title=\"";
            // line 128
            echo twig_escape_filter($this->env, lang("Enter here a new password"), "html", null, true);
            echo "\" required value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["input"] ?? null), "password", array()), "html", null, true);
            echo "\" maxlength=\"32\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"password_repeat\">";
            // line 131
            echo twig_escape_filter($this->env, lang("Repeat new password"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_repeat\" placeholder=\"****\" id=\"password_repeat\" title=\"";
            // line 132
            echo twig_escape_filter($this->env, lang("Repeat new password"), "html", null, true);
            echo "\" required maxlength=\"32\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-1 text-uppercase\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, lang("Change password"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
        } else {
            // line 137
            echo "\t\t\t\t\t\t\t\t<h3>";
            echo twig_escape_filter($this->env, lang("Reset password"), "html", null, true);
            echo "</h3><br>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 138
            echo twig_escape_filter($this->env, path("login"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"reset_password\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"username\">";
            // line 141
            echo twig_escape_filter($this->env, lang("Username / email"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"";
            // line 142
            echo twig_escape_filter($this->env, lang("example@example.com"), "html", null, true);
            echo "\" required maxlength=\"64\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["input"] ?? null), "username", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"captcha\">";
            // line 145
            echo twig_escape_filter($this->env, lang("Enter the code Captcha"), "html", null, true);
            echo "</label><br>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 146
            echo twig_escape_filter($this->env, path("captcha"), "html", null, true);
            echo "\" alt=\"captcha\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"abc123\" title=\"";
            // line 147
            echo twig_escape_filter($this->env, lang("Enter the code Captcha"), "html", null, true);
            echo "\" name=\"captcha\" required maxlength=\"32\" title=\"";
            echo twig_escape_filter($this->env, lang("Enter the code Captcha"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-1 text-uppercase\" value=\"";
            // line 149
            echo twig_escape_filter($this->env, lang("Reset password"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
        }
        // line 152
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 157
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "login_page", array());
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<br><br>
</div>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 157,  534 => 152,  528 => 149,  521 => 147,  517 => 146,  513 => 145,  505 => 142,  501 => 141,  495 => 138,  490 => 137,  484 => 134,  479 => 132,  475 => 131,  467 => 128,  463 => 127,  457 => 124,  451 => 121,  443 => 117,  441 => 116,  434 => 115,  428 => 112,  423 => 110,  419 => 109,  414 => 107,  411 => 106,  405 => 104,  403 => 103,  387 => 100,  379 => 99,  375 => 97,  369 => 95,  367 => 94,  362 => 92,  358 => 91,  350 => 88,  346 => 87,  343 => 86,  337 => 84,  335 => 83,  326 => 81,  322 => 80,  319 => 79,  313 => 77,  311 => 76,  302 => 74,  298 => 73,  295 => 72,  289 => 70,  287 => 69,  283 => 68,  278 => 66,  270 => 65,  267 => 64,  263 => 62,  253 => 60,  250 => 59,  240 => 57,  237 => 56,  233 => 55,  229 => 54,  224 => 52,  220 => 51,  210 => 48,  206 => 47,  201 => 45,  197 => 44,  187 => 42,  181 => 39,  165 => 36,  157 => 35,  146 => 31,  142 => 30,  136 => 27,  132 => 26,  127 => 24,  123 => 23,  119 => 21,  117 => 20,  109 => 19,  106 => 18,  103 => 17,  99 => 16,  80 => 14,  62 => 13,  44 => 12,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html", "/home/platne/serwer24113/public_html/views/default/login.html");
    }
}
