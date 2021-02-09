<?php

/* users.html */
class __TwigTemplate_522451a3f48fd082cd96a0af5a41f83884c5ffeef51d0b3c463b7c64c36f35bc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "users.html", 2);
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
        echo "<div class=\"page-header\">
\t<h1><span class=\"glyphicon glyphicon-user\"></span> ";
        // line 6
        echo twig_escape_filter($this->env, lang("Users"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can see the users. Moderator can edit offers"), "html", null, true);
        echo "</p>
</div>

";
        // line 10
        $this->loadTemplate("alert.tpl", "users.html", 10)->display($context);
        // line 11
        echo "
<form method=\"get\" class=\"form-horizontal\" role=\"form\">
\t<input type=\"hidden\" name=\"controller\" value=\"users\">
\t<input type=\"hidden\" name=\"search\">
\t<div class=\"form-group\">
\t\t<div class=\"col-md-4\">
\t\t\t<label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
        echo ":</label>
\t\t\t<input type=\"text\" name=\"username\" title=\"";
        // line 18
        echo twig_escape_filter($this->env, lang("Enter the username"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "username", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<label for=\"email\">";
        // line 21
        echo twig_escape_filter($this->env, lang("Email"), "html", null, true);
        echo ":</label>
\t\t\t<input type=\"text\" name=\"email\" title=\"";
        // line 22
        echo twig_escape_filter($this->env, lang("Enter the email"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Email"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "email", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label for=\"active\">";
        // line 25
        echo twig_escape_filter($this->env, lang("Active/2"), "html", null, true);
        echo ":</label>
\t\t\t<select name=\"active\" title=\"";
        // line 26
        echo twig_escape_filter($this->env, lang("Search by active users"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<option value=\"\">";
        // line 27
        echo twig_escape_filter($this->env, lang("All users"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"yes\" ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "active", array()) == "yes")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("Yes"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"no\" ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "active", array()) == "no")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("No"), "html", null, true);
        echo "</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label for=\"moderator\">";
        // line 33
        echo twig_escape_filter($this->env, lang("Moderator"), "html", null, true);
        echo ":</label>
\t\t\t<select name=\"moderator\" title=\"";
        // line 34
        echo twig_escape_filter($this->env, lang("Search by moderators"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<option value=\"\">";
        // line 35
        echo twig_escape_filter($this->env, lang("All users"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"yes\" ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "moderator", array()) == "yes")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("Yes"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"no\" ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "moderator", array()) == "no")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("No"), "html", null, true);
        echo "</option>
\t\t\t</select>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-md-2\">
\t\t\t<label for=\"register_fb\">";
        // line 43
        echo twig_escape_filter($this->env, lang("Register by FB"), "html", null, true);
        echo ":</label>
\t\t\t<select name=\"register_fb\" title=\"";
        // line 44
        echo twig_escape_filter($this->env, lang("Search by registered by Facebook"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<option value=\"\">";
        // line 45
        echo twig_escape_filter($this->env, lang("All users"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"yes\" ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "register_fb", array()) == "yes")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("Yes"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"no\" ";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "register_fb", array()) == "no")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("No"), "html", null, true);
        echo "</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label for=\"register_google\">";
        // line 51
        echo twig_escape_filter($this->env, lang("Register by Google"), "html", null, true);
        echo ":</label>
\t\t\t<select name=\"register_google\" title=\"";
        // line 52
        echo twig_escape_filter($this->env, lang("Search by registered by Google"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<option value=\"\">";
        // line 53
        echo twig_escape_filter($this->env, lang("All users"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"yes\" ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "register_google", array()) == "yes")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("Yes"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"no\" ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "register_google", array()) == "no")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("No"), "html", null, true);
        echo "</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<label for=\"date\">";
        // line 59
        echo twig_escape_filter($this->env, lang("Registration date"), "html", null, true);
        echo ": </label>
\t\t\t<div class=\"form-inline\">
\t\t\t\t<input name=\"date_from\" title=\"";
        // line 61
        echo twig_escape_filter($this->env, lang("Select the starting date"), "html", null, true);
        echo "\" type=\"text\" max=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "date_from", array()), "html", null, true);
        echo "\" class=\"form-control datepicker\">
\t\t\t\t -
\t\t\t\t<input name=\"date_to\" title=\"";
        // line 63
        echo twig_escape_filter($this->env, lang("Select the end date"), "html", null, true);
        echo "\" type=\"text\" max=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "date_to", array()), "html", null, true);
        echo "\" class=\"form-control datepicker\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label for=\"register_ip\">";
        // line 67
        echo twig_escape_filter($this->env, lang("Registration IP"), "html", null, true);
        echo ":</label>
\t\t\t<input type=\"text\" name=\"register_ip\" title=\"";
        // line 68
        echo twig_escape_filter($this->env, lang("IP address"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("IP address"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "register_ip", array()), "html", null, true);
        echo "\"{ class=\"form-control\">
\t\t</div>
\t\t<div class=\"col-md-2 text-right\">
\t\t\t<label>&nbsp;</label><br>
\t\t\t<input type=\"submit\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, lang("Search"), "html", null, true);
        echo "\" class=\"btn btn-primary text-uppercase\">
\t\t</div>
\t</div>
</form>
<br>
";
        // line 77
        if (($context["users"] ?? null)) {
            // line 78
            echo "\t<div class=\"table-responsive\">
\t\t<table class=\"table parent_select_checkbox table-striped table-bordered table-condensed\">
\t\t\t<tr>
\t\t\t\t<th class=\"text-center\"><input type=\"checkbox\" class=\"select_checkbox\" title=\"";
            // line 81
            echo twig_escape_filter($this->env, lang("Select all"), "html", null, true);
            echo "\"></th>
\t\t\t\t<th class=\"text-center\">";
            // line 82
            echo twig_escape_filter($this->env, lang("ID"), "html", null, true);
            echo "<br>
\t\t\t\t\t<a href=\"?";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=id\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=id&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 86
            echo twig_escape_filter($this->env, lang("Activate"), "html", null, true);
            echo "<br>
\t\t\t\t\t<a href=\"?";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=active\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=active&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 90
            echo twig_escape_filter($this->env, lang("FB"), "html", null, true);
            echo "<br>
\t\t\t\t\t<a href=\"?";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=register_fb\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=register_fb&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 94
            echo twig_escape_filter($this->env, lang("Google"), "html", null, true);
            echo "<br>
\t\t\t\t\t<a href=\"?";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=register_google\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=register_google&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th>";
            // line 98
            echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
            echo "<br>
\t\t\t\t\t<a href=\"?";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=username\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=username&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th>";
            // line 102
            echo twig_escape_filter($this->env, lang("Email"), "html", null, true);
            echo "<br>
\t\t\t\t\t<a href=\"?";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=email\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=email&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 106
            echo twig_escape_filter($this->env, lang("Moderator"), "html", null, true);
            echo "<br>
\t\t\t\t\t<a href=\"?";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=moderator\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=moderator&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 110
            echo twig_escape_filter($this->env, lang("Amount offers"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=amount_offers\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=amount_offers&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t\t<br>
\t\t\t\t\t(";
            // line 114
            echo twig_escape_filter($this->env, lang("active"), "html", null, true);
            echo ")
\t\t\t\t\t<a href=\"?";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=amount_active_offers\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=amount_active_offers&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 118
            echo twig_escape_filter($this->env, lang("Amount logins"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=amount_logins\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=amount_logins&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t\t<br>
\t\t\t\t\t";
            // line 122
            echo twig_escape_filter($this->env, lang("Last"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=last_login\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=last_login&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th>";
            // line 126
            echo twig_escape_filter($this->env, lang("Activation date"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=activation_date\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=activation_date&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t\t<br>
\t\t\t\t\t";
            // line 130
            echo twig_escape_filter($this->env, lang("Activation IP"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=activation_ip\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=activation_ip&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th>";
            // line 134
            echo twig_escape_filter($this->env, lang("Registration date"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t\t<br>
\t\t\t\t\t";
            // line 138
            echo twig_escape_filter($this->env, lang("Registration IP"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=register_ip\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=register_ip&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 142
            echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t\t";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 145
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"users[]\" value=\"";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" form=\"form_selected_users\"></td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 148
                if ( !twig_get_attribute($this->env, $this->source, $context["item"], "active", array())) {
                    echo "<a href=\"#\" title=\"";
                    echo twig_escape_filter($this->env, lang("Activate user"), "html", null, true);
                    echo "\" class=\"ajax glyphicon glyphicon-plus-sign\" data-action=\"activate_user\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\" data-token=\"";
                    echo twig_escape_filter($this->env, generateToken("admin_activate_user"), "html", null, true);
                    echo "\"></a>";
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 149
                if (twig_get_attribute($this->env, $this->source, $context["item"], "register_fb", array())) {
                    echo "<img src=\"images/fb-icon.gif\" alt=\"Facebook\">";
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 150
                if (twig_get_attribute($this->env, $this->source, $context["item"], "register_google", array())) {
                    echo "<img src=\"images/google-icon.ico\" alt=\"Google\">";
                }
                echo "</td>
\t\t\t\t\t<td><b><a href=\"";
                // line 151
                echo twig_escape_filter($this->env, path("profile", 0, twig_get_attribute($this->env, $this->source, $context["item"], "username", array())), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Profile of"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "username", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "username", array()), "html", null, true);
                echo "</a></b></td>
\t\t\t\t\t<td>";
                // line 152
                if (($context["_ADMIN_TEST_MODE_"] ?? null)) {
                    echo "TEST";
                } else {
                    echo "<a href=\"mailto:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, lang("Write to:"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                    echo "</a>";
                }
                echo "</td>\t
\t\t\t\t\t<td class=\"text-center\">";
                // line 153
                if (twig_get_attribute($this->env, $this->source, $context["item"], "moderator", array())) {
                    echo "<a href=\"#\" title=\"";
                    echo twig_escape_filter($this->env, lang("Unset moderator"), "html", null, true);
                    echo "\" class=\"ajax\" data-action=\"unset_moderator\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\" data-token=\"";
                    echo twig_escape_filter($this->env, generateToken("admin_unset_moderator"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, lang("YES"), "html", null, true);
                    echo "</b>";
                } else {
                    echo "<a href=\"#\" title=\"";
                    echo twig_escape_filter($this->env, lang("Set moderator"), "html", null, true);
                    echo "\" class=\"ajax\" data-action=\"set_moderator\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\" style=\"color: grey\" data-token=\"";
                    echo twig_escape_filter($this->env, generateToken("admin_set_moderator"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, lang("NO"), "html", null, true);
                    echo "</a>";
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount_offers", array()), "html", null, true);
                echo "<br>(<b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount_active_offers", array()), "html", null, true);
                echo "</b>)</td>
\t\t\t\t\t<td class=\"text-center\"><b>";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount_logins", array()), "html", null, true);
                echo "</b><br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "last_login", array()), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 156
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "activation_date", array()), "Y-m-d"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "activation_ip", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 157
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "Y-m-d"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "register_ip", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><a href=\"#\" title=\"";
                // line 158
                echo twig_escape_filter($this->env, lang("Delete user"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-remove text-danger\" data-toggle=\"modal\" data-target=\"#remove_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\"></a></td>
\t\t\t\t</tr>

\t\t\t\t<div class=\"modal fade\" id=\"remove_";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, lang("Delete user"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "username", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                // line 166
                echo twig_escape_filter($this->env, lang("Delete user"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"remove_user\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"email\" value=\"";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"register_ip\" value=\"";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "register_ip", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"activation_ip\" value=\"";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "activation_ip", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                // line 174
                echo twig_escape_filter($this->env, generateToken("admin_remove_user"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<p>";
                // line 176
                echo twig_escape_filter($this->env, lang("Are you sure you want to delete user"), "html", null, true);
                echo ": \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "username", array()), "html", null, true);
                echo "\"?</p>
\t\t\t\t\t\t\t\t\t<p>";
                // line 177
                echo twig_escape_filter($this->env, lang("All offers of user will be deleted"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"add_email_black_list\"> ";
                // line 178
                echo twig_escape_filter($this->env, lang("Add email to black list"), "html", null, true);
                echo "</label><br>
\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"add_ip_black_list\"> ";
                // line 179
                echo twig_escape_filter($this->env, lang("Add IP to black list"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                // line 182
                echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                // line 183
                echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t</table>
\t</div>
\t<br>
\t<form method=\"post\" id=\"form_selected_users\" class=\"form-inline\">
\t\t<input type=\"hidden\" name=\"token\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, generateToken("admin_action_users"), "html", null, true);
            echo "\">
\t\t<label for=\"action\">";
            // line 195
            echo twig_escape_filter($this->env, lang("Selected"), "html", null, true);
            echo ": </label>
\t\t<select name=\"action\" required title=\"";
            // line 196
            echo twig_escape_filter($this->env, lang("Select the appropriate action"), "html", null, true);
            echo "\" class=\"form-control\">
\t\t\t<option value=\"\">-- ";
            // line 197
            echo twig_escape_filter($this->env, lang("select"), "html", null, true);
            echo " --</option>
\t\t\t<option value=\"remove_users\">";
            // line 198
            echo twig_escape_filter($this->env, lang("Remove users"), "html", null, true);
            echo "</option>
\t\t\t<option value=\"activate_users\">";
            // line 199
            echo twig_escape_filter($this->env, lang("Activate users"), "html", null, true);
            echo "</option>
\t\t\t<option value=\"set_moderators\">";
            // line 200
            echo twig_escape_filter($this->env, lang("Set moderator"), "html", null, true);
            echo "</option>
\t\t\t<option value=\"unset_moderators\">";
            // line 201
            echo twig_escape_filter($this->env, lang("Unset moderator"), "html", null, true);
            echo "</option>
\t\t</select>
\t\t<input type=\"submit\" value=\"";
            // line 203
            echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
            echo "!\" class=\"btn btn-sm btn-danger\">
\t</form>

\t";
            // line 206
            $this->loadTemplate("pagination.tpl", "users.html", 206)->display($context);
            // line 207
            echo "
";
        } else {
            // line 209
            echo "\t<h4 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Nothing found"), "html", null, true);
            echo "</h4>
";
        }
    }

    public function getTemplateName()
    {
        return "users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  780 => 209,  776 => 207,  774 => 206,  768 => 203,  763 => 201,  759 => 200,  755 => 199,  751 => 198,  747 => 197,  743 => 196,  739 => 195,  735 => 194,  729 => 190,  716 => 183,  712 => 182,  706 => 179,  702 => 178,  698 => 177,  692 => 176,  687 => 174,  683 => 173,  679 => 172,  675 => 171,  671 => 170,  664 => 166,  652 => 161,  644 => 158,  638 => 157,  632 => 156,  626 => 155,  620 => 154,  596 => 153,  580 => 152,  570 => 151,  564 => 150,  558 => 149,  546 => 148,  542 => 147,  538 => 146,  535 => 145,  531 => 144,  526 => 142,  519 => 140,  513 => 139,  509 => 138,  502 => 136,  496 => 135,  492 => 134,  485 => 132,  479 => 131,  475 => 130,  468 => 128,  462 => 127,  458 => 126,  451 => 124,  445 => 123,  441 => 122,  434 => 120,  428 => 119,  424 => 118,  417 => 116,  411 => 115,  407 => 114,  400 => 112,  394 => 111,  390 => 110,  383 => 108,  377 => 107,  373 => 106,  366 => 104,  360 => 103,  356 => 102,  349 => 100,  343 => 99,  339 => 98,  332 => 96,  326 => 95,  322 => 94,  315 => 92,  309 => 91,  305 => 90,  298 => 88,  292 => 87,  288 => 86,  281 => 84,  275 => 83,  271 => 82,  267 => 81,  262 => 78,  260 => 77,  252 => 72,  241 => 68,  237 => 67,  226 => 63,  217 => 61,  212 => 59,  201 => 55,  193 => 54,  189 => 53,  185 => 52,  181 => 51,  170 => 47,  162 => 46,  158 => 45,  154 => 44,  150 => 43,  137 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  106 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  76 => 22,  72 => 21,  62 => 18,  58 => 17,  50 => 11,  48 => 10,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users.html", "/home/platne/serwer24113/public_html/admin/views/users.html");
    }
}
