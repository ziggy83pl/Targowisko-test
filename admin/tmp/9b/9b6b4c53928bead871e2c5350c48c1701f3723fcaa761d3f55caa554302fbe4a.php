<?php

/* statistics.html */
class __TwigTemplate_630c592e4cc5906cda1d797895e26f6cdd8c7fa7668c4378945cf514fa7a2322 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "statistics.html", 2);
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
        echo "<link rel=\"stylesheet\" href=\"js/jqplot/jquery.jqplot.css\" />
<script src=\"js/jqplot/jquery.jqplot.min.js\"></script>
<script src=\"js/jqplot/jqplot.highlighter.min.js\"></script>
<script src=\"js/jqplot/jqplot.dateAxisRenderer.min.js\"></script>
<script src=\"js/jqplot.statistics.js\"></script>

<div class=\"page-header\">
\t<h1><span class=\"glyphicon glyphicon-check\"></span> ";
        // line 12
        echo twig_escape_filter($this->env, lang("Site statistics"), "html", null, true);
        echo "</h1>
</div>

<table class=\"table\">
\t<tr>
\t\t<td><b>";
        // line 17
        echo twig_escape_filter($this->env, lang("Users"), "html", null, true);
        echo ":</b></td>
\t\t<td><b>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "users", array()), "html", null, true);
        echo "</b></td>
\t\t<td><b>";
        // line 19
        echo twig_escape_filter($this->env, lang("Offers"), "html", null, true);
        echo ":</b></td>
\t\t<td><b>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "offers", array()), "html", null, true);
        echo "</b></td>
\t</tr>
\t<tr>
\t\t<td> - ";
        // line 23
        echo twig_escape_filter($this->env, lang("by Facebook"), "html", null, true);
        echo ":</td>
\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "users_register_fb", array()), "html", null, true);
        echo "</td>
\t\t<td> - ";
        // line 25
        echo twig_escape_filter($this->env, lang("active"), "html", null, true);
        echo ":</td>
\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "offers_active", array()), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td> - ";
        // line 29
        echo twig_escape_filter($this->env, lang("by Google"), "html", null, true);
        echo ":</td>
\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "users_register_google", array()), "html", null, true);
        echo "</td>
\t\t<td><b>";
        // line 31
        echo twig_escape_filter($this->env, lang("Views offers"), "html", null, true);
        echo ":</b></td>
\t\t<td><b>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "logs_offers", array()), "html", null, true);
        echo "</b></td>
\t</tr>
\t<tr>
\t\t<td><b>";
        // line 35
        echo twig_escape_filter($this->env, lang("Sends mails"), "html", null, true);
        echo ":</b></td>
\t\t<td><b>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "logs_mails", array()), "html", null, true);
        echo "</b></td>
\t\t<td>";
        // line 37
        echo twig_escape_filter($this->env, lang("Photos"), "html", null, true);
        echo ":</td>
\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "photos", array()), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>";
        // line 41
        echo twig_escape_filter($this->env, lang("Categories"), "html", null, true);
        echo ":</td>
\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "categories", array()), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 43
        echo twig_escape_filter($this->env, lang("Reset password"), "html", null, true);
        echo ":</td>
\t\t<td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "reset_password", array()), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<td>";
        // line 47
        echo twig_escape_filter($this->env, lang("Mails in queue"), "html", null, true);
        echo ":</td>
\t\t<td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "mails_queue", array()), "html", null, true);
        echo "</td>
\t\t<td><b>";
        // line 49
        echo twig_escape_filter($this->env, lang("User logins"), "html", null, true);
        echo ":</b></td>
\t\t<td><b>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statistics"] ?? null), "logs_users", array()), "html", null, true);
        echo "</b></td>
\t</tr>
</table>\t
<br><br>
<div class=\"form-horizontal\">
\t<div class=\"form-group\">
\t\t<div class=\"col-md-3\">
\t\t\t<label>";
        // line 57
        echo twig_escape_filter($this->env, lang("Blue line"), "html", null, true);
        echo ": </label>
\t\t\t<select id=\"statitics_select_1\" title=\"";
        // line 58
        echo twig_escape_filter($this->env, lang("Choose what should present the blue line"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<option value=\"\"> -- </option>
\t\t\t\t<option value=\"logins\">";
        // line 60
        echo twig_escape_filter($this->env, lang("Logins"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"unique_logins\" selected>";
        // line 61
        echo twig_escape_filter($this->env, lang("Unique logins"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"registration\">";
        // line 62
        echo twig_escape_filter($this->env, lang("Registration users"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"activation_users\">";
        // line 63
        echo twig_escape_filter($this->env, lang("Activation users"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"offers\">";
        // line 64
        echo twig_escape_filter($this->env, lang("Added offers"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"views_offers\">";
        // line 65
        echo twig_escape_filter($this->env, lang("Views offers"), "html", null, true);
        echo "</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<label>";
        // line 69
        echo twig_escape_filter($this->env, lang("Orange line"), "html", null, true);
        echo ": </label>
\t\t\t<select id=\"statitics_select_2\" title=\"";
        // line 70
        echo twig_escape_filter($this->env, lang("Choose what should present the orange line"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<option value=\"\"> -- </option>
\t\t\t\t<option value=\"logins\">";
        // line 72
        echo twig_escape_filter($this->env, lang("Logins"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"unique_logins\">";
        // line 73
        echo twig_escape_filter($this->env, lang("Unique logins"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"registration\">";
        // line 74
        echo twig_escape_filter($this->env, lang("Registration users"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"activation_users\">";
        // line 75
        echo twig_escape_filter($this->env, lang("Activation users"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"offers\" selected>";
        // line 76
        echo twig_escape_filter($this->env, lang("Added offers"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"views_offers\">";
        // line 77
        echo twig_escape_filter($this->env, lang("Views offers"), "html", null, true);
        echo "</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label>";
        // line 81
        echo twig_escape_filter($this->env, lang("Date start"), "html", null, true);
        echo ": </label>
\t\t\t<input id=\"statistics_date_from\" title=\"";
        // line 82
        echo twig_escape_filter($this->env, lang("Select the starting date for analysis"), "html", null, true);
        echo "\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "-30 day"), "Y-m-d"), "html", null, true);
        echo "\" max=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" class=\"form-control datepicker\">
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label>";
        // line 85
        echo twig_escape_filter($this->env, lang("Date finish"), "html", null, true);
        echo ": </label>
\t\t\t<input id=\"statistics_date_to\" title=\"";
        // line 86
        echo twig_escape_filter($this->env, lang("Select the end date for analysis"), "html", null, true);
        echo "\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" max=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" class=\"form-control datepicker\">
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label>&nbsp;</label><br>
\t\t\t<input id=\"statistics_generate\" type=\"submit\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, lang("Generate"), "html", null, true);
        echo "\" class=\"btn btn-primary text-uppercase\">
\t\t</div>
\t</div>
\t<div id=\"jqplot\"></div>
</div><br><!--dróga sekcja statystyk-->
<div class=\"form-horizontal\">
\t<div class=\"form-group\">
\t\t<div class=\"col-md-3\">
\t\t\t<label>";
        // line 98
        echo twig_escape_filter($this->env, lang("Blue line"), "html", null, true);
        echo ": </label>
\t\t\t<select id=\"statitics_select_1\" title=\"";
        // line 99
        echo twig_escape_filter($this->env, lang("Choose what should present the blue line"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<option value=\"\"> -- </option>
\t\t\t\t<option value=\"logins\">";
        // line 101
        echo twig_escape_filter($this->env, lang("Logins"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"unique_logins\" selected>";
        // line 102
        echo twig_escape_filter($this->env, lang("Unique logins"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"registration\">";
        // line 103
        echo twig_escape_filter($this->env, lang("Registration users"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"activation_users\">";
        // line 104
        echo twig_escape_filter($this->env, lang("Activation users"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"offers\">";
        // line 105
        echo twig_escape_filter($this->env, lang("Added offers"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"views_offers\">";
        // line 106
        echo twig_escape_filter($this->env, lang("Views offers"), "html", null, true);
        echo "</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<label>";
        // line 110
        echo twig_escape_filter($this->env, lang("Orange line"), "html", null, true);
        echo ": </label>
\t\t\t<select id=\"statitics_select_2\" title=\"";
        // line 111
        echo twig_escape_filter($this->env, lang("Choose what should present the orange line"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<option value=\"\"> -- </option>
\t\t\t\t<option value=\"logins\">";
        // line 113
        echo twig_escape_filter($this->env, lang("Logins"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"unique_logins\">";
        // line 114
        echo twig_escape_filter($this->env, lang("Unique logins"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"registration\">";
        // line 115
        echo twig_escape_filter($this->env, lang("Registration users"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"activation_users\">";
        // line 116
        echo twig_escape_filter($this->env, lang("Activation users"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"offers\" selected>";
        // line 117
        echo twig_escape_filter($this->env, lang("Added offers"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"views_offers\">";
        // line 118
        echo twig_escape_filter($this->env, lang("Views offers"), "html", null, true);
        echo "</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label>";
        // line 122
        echo twig_escape_filter($this->env, lang("Date start"), "html", null, true);
        echo ": </label>
\t\t\t<input id=\"statistics_date_from\" title=\"";
        // line 123
        echo twig_escape_filter($this->env, lang("Select the starting date for analysis"), "html", null, true);
        echo "\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "-30 day"), "Y-m-d"), "html", null, true);
        echo "\" max=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" class=\"form-control datepicker\">
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label>";
        // line 126
        echo twig_escape_filter($this->env, lang("Date finish"), "html", null, true);
        echo ": </label>
\t\t\t<input id=\"statistics_date_to\" title=\"";
        // line 127
        echo twig_escape_filter($this->env, lang("Select the end date for analysis"), "html", null, true);
        echo "\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" max=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" class=\"form-control datepicker\">
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label>&nbsp;</label><br>
\t\t\t<input id=\"statistics_generate\" type=\"submit\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, lang("Generate"), "html", null, true);
        echo "\" class=\"btn btn-primary text-uppercase\">
\t\t</div>
\t</div>
\t<div id=\"jqplot\"></div>
</div>
<br><br>
";
    }

    public function getTemplateName()
    {
        return "statistics.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 131,  366 => 127,  362 => 126,  352 => 123,  348 => 122,  341 => 118,  337 => 117,  333 => 116,  329 => 115,  325 => 114,  321 => 113,  316 => 111,  312 => 110,  305 => 106,  301 => 105,  297 => 104,  293 => 103,  289 => 102,  285 => 101,  280 => 99,  276 => 98,  265 => 90,  254 => 86,  250 => 85,  240 => 82,  236 => 81,  229 => 77,  225 => 76,  221 => 75,  217 => 74,  213 => 73,  209 => 72,  204 => 70,  200 => 69,  193 => 65,  189 => 64,  185 => 63,  181 => 62,  177 => 61,  173 => 60,  168 => 58,  164 => 57,  154 => 50,  150 => 49,  146 => 48,  142 => 47,  136 => 44,  132 => 43,  128 => 42,  124 => 41,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  44 => 12,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "statistics.html", "/home/platne/serwer24113/public_html/admin/views/statistics.html");
    }
}
