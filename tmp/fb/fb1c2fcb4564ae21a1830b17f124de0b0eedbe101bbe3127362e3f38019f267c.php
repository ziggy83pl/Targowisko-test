<?php

/* settings.html */
class __TwigTemplate_eb0e6620132ba44eb769f0dc8a6117cddfa2ff76cc9f03d4322718eff1eb920e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "settings.html", 2);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
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
    public function block_javascript($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script src=\"js/ckeditor/ckeditor.js\"></script>
\t<script>
\t\tvar roxyFileman = 'js/ckeditor/fileman/index.html';
\t\t\$(function(){
\t\t\tCKEDITOR.replace( 'description',{height: '200px'});
\t\t});
\t</script>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
<div class=\"page_box background_grey\">
\t<div class=\"container background_white\">
\t\t<div class=\"text-center\">
\t\t\t<br><h2>";
        // line 20
        echo twig_escape_filter($this->env, lang("Settings"), "html", null, true);
        echo "</h2>
\t\t\t<h3>";
        // line 21
        echo twig_escape_filter($this->env, lang("Here you can edit your account data"), "html", null, true);
        echo "</h3>
\t\t\t<br>
\t\t\t<h4>";
        // line 23
        echo twig_escape_filter($this->env, lang("Statistics"), "html", null, true);
        echo "</h4>
\t\t</div>
\t\t<div class=\"Statistics\">
\t\t<table class=\"table table-striped table-bordered\" style=\"width: auto !important; margin: auto;\">
\t\t\t<tr><td><i class=\"far fa-user-circle\"></i>";
        // line 27
        echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
        echo ":</td><td><a href=\"";
        echo twig_escape_filter($this->env, path("profile", 0, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array())), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</a></td></tr>
\t\t\t<tr><td><i class=\"far fa-envelope\"></i>";
        // line 28
        echo twig_escape_filter($this->env, lang("E-mail address"), "html", null, true);
        echo ":</td><td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td><i class=\"fas fa-sort-numeric-up\"></i>";
        // line 29
        echo twig_escape_filter($this->env, lang("Number of offers"), "html", null, true);
        echo ":</td><td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "number_offers", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td><i class=\"fas fa-clock\"></i>";
        // line 30
        echo twig_escape_filter($this->env, lang("Date of registration"), "html", null, true);
        echo ":</td><td>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "date", array()), "d-m-Y"), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td><i class=\"fas fa-list-ol\"></i>";
        // line 31
        echo twig_escape_filter($this->env, lang("Number of logins"), "html", null, true);
        echo ":</td><td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "number_login", array()), "html", null, true);
        echo "</td></tr>
\t\t\t";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_login", array())) {
            // line 33
            echo "\t\t\t\t<tr><td><i class=\"fas fa-sign-in-alt\"></i>";
            echo twig_escape_filter($this->env, lang("Last login"), "html", null, true);
            echo ":</td><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_login", array()), "d-m-Y"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_login", array()), "H:i"), "html", null, true);
            echo "</td></tr>
\t\t\t";
        }
        // line 35
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_reset_password", array())) {
            // line 36
            echo "\t\t\t\t<tr><td>";
            echo twig_escape_filter($this->env, lang("Last reset password"), "html", null, true);
            echo ":</td><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_reset_password", array()), "d-m-Y"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_reset_password", array()), "H:i"), "html", null, true);
            echo "</td></tr>
\t\t\t";
        }
        // line 38
        echo "\t\t</table>
\t\t</div>
\t\t<br><br>
\t\t<div class=\"text-center\">
\t\t\t<h4>";
        // line 42
        echo twig_escape_filter($this->env, lang("Avatar"), "html", null, true);
        echo "</h4>
\t\t\t<form class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"save_avatar\">
\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, generateToken("save_avatar"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", array())) {
            // line 47
            echo "\t\t\t\t\t<img src=\"upload/avatars/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, lang("Avatar"), "html", null, true);
            echo "\" onerror=\"this.src='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
            echo "/views/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
            echo "/images/no_image.png'\">
\t\t\t\t\t<p><a href=\"#\" data-toggle=\"modal\" data-target=\"#remove_avatar\" class=\"text-danger\">";
            // line 48
            echo twig_escape_filter($this->env, lang("Remove avatar"), "html", null, true);
            echo "</a></p>
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t<input class=\"form-control-file btn\" type=\"file\" name=\"avatar\" accept=\"image/jpeg, image/png\" required style=\"width: auto\"><br><br>
\t\t\t\t<input type=\"submit\" class=\"btn btn-secondary text-uppercase\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\">
\t\t\t</form><br><br>
\t\t\t<h4>";
        // line 53
        echo twig_escape_filter($this->env, lang("Description"), "html", null, true);
        echo "</h4>
\t\t\t<h5>";
        // line 54
        echo twig_escape_filter($this->env, lang("The description will be displayed on the profile page"), "html", null, true);
        echo "</h5>
\t\t\t<form class=\"form-horizontal\" method=\"post\">
\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"save_description\">
\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, generateToken("save_description"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<textarea id=\"description\" name=\"description\" class=\"form-control\" style=\"height: 150px\">";
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "description", array());
        echo "</textarea>
\t\t\t\t</div>
\t\t\t\t<input type=\"submit\" class=\"btn btn-secondary text-uppercase\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\">
\t\t\t</form><br><br>
\t\t\t<h4>";
        // line 63
        echo twig_escape_filter($this->env, lang("Personal data"), "html", null, true);
        echo "</h4>
\t\t\t<h5>";
        // line 64
        echo twig_escape_filter($this->env, lang("The following data will automatically supplement the offer posting form"), "html", null, true);
        echo "</h5>
\t\t</div>
\t\t<form method=\"post\">
\t\t\t<input type=\"hidden\" name=\"action\" value=\"save_user_data\">
\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, generateToken("save_user_data"), "html", null, true);
        echo "\">
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label for=\"phone\" class=\"col-sm-2 col-form-label\">";
        // line 70
        echo twig_escape_filter($this->env, lang("Phone"), "html", null, true);
        echo ":</label>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"";
        // line 72
        echo twig_escape_filter($this->env, lang("+12 345 678 901"), "html", null, true);
        echo "\" id=\"phone\" maxlength=\"32\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Enter the phone number"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label for=\"add_address\" class=\"col-sm-2 col-form-label\">";
        // line 76
        echo twig_escape_filter($this->env, lang("Address"), "html", null, true);
        echo ":</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" class=\"form-control getCoordinates\" name=\"address\" placeholder=\"";
        // line 78
        echo twig_escape_filter($this->env, lang("1600 Pennsylvania Avenue NW, Washington, D.C. 20500"), "html", null, true);
        echo "\" id=\"add_address\" maxlength=\"512\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Enter the address"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t\t";
        // line 82
        if (($context["states"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t<label for=\"state_id\" class=\"col-sm-2 col-form-label\">";
            echo twig_escape_filter($this->env, lang("State"), "html", null, true);
            echo ":</label>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<select class=\"form-control select_state\" name=\"state_id\" id=\"state_id\" title=\"";
            // line 85
            echo twig_escape_filter($this->env, lang("Select the appropriate state"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 86
            echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["state"]) {
                // line 88
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state_id", array()) == $context["key"])) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["state"]) {
                // line 93
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["state"], "states", array())) {
                    // line 94
                    echo "\t\t\t\t\t\t\t<div class=\"col-sm-4 substates substate_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", array()), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state_id", array()) != $context["key"])) {
                        echo "style=\"display:none\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"state2_id\" title=\"";
                    // line 95
                    echo twig_escape_filter($this->env, lang("Select the appropriate state"), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state_id", array()) != $context["key"])) {
                        echo "disabled";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 96
                    echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                    // line 97
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["state"], "states", array()));
                    foreach ($context['_seq'] as $context["key2"] => $context["state2"]) {
                        // line 98
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state2"], "id", array()), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state2_id", array()) == $context["key2"])) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state2"], "name", array()), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key2'], $context['state2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 103
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t\t\t";
        }
        // line 105
        echo "\t\t\t</div>
\t\t\t<div class=\"text-center\">
\t\t\t\t<input type=\"submit\" class=\"btn btn-secondary text-uppercase\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</form><br><br>
\t\t<div class=\"text-center\">
\t\t\t<h4>";
        // line 111
        echo twig_escape_filter($this->env, lang("Password change"), "html", null, true);
        echo "</h4>
\t\t</div>
\t\t";
        // line 113
        $this->loadTemplate("alert.tpl", "settings.html", 113)->display($context);
        // line 114
        echo "\t\t<form class=\"form-horizontal\" method=\"post\">
\t\t\t<input type=\"hidden\" name=\"action\" value=\"change_password\">
\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, generateToken("change_password"), "html", null, true);
        echo "\">
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label for=\"old_password\" class=\"col-sm-2 offset-sm-3 col-form-label\">";
        // line 118
        echo twig_escape_filter($this->env, lang("Old password"), "html", null, true);
        echo ":</label>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"old_password\" placeholder=\"****\" id=\"old_password\" maxlength=\"32\" required title=\"";
        // line 120
        echo twig_escape_filter($this->env, lang("Old password"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label for=\"new_password\" class=\"col-sm-2 offset-sm-3 col-form-label\">";
        // line 124
        echo twig_escape_filter($this->env, lang("New password"), "html", null, true);
        echo ":</label>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"new_password\" placeholder=\"****\" id=\"new_password\" maxlength=\"32\" required title=\"";
        // line 126
        echo twig_escape_filter($this->env, lang("New password"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label for=\"repeat_new_password\" class=\"col-sm-2 offset-sm-3 col-form-label\">";
        // line 130
        echo twig_escape_filter($this->env, lang("Repeat new password"), "html", null, true);
        echo "</label>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"repeat_new_password\" placeholder=\"****\" id=\"repeat_new_password\" maxlength=\"32\" required title=\"";
        // line 132
        echo twig_escape_filter($this->env, lang("Repeat new password"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"text-center\">
\t\t\t\t<input type=\"submit\" class=\"btn btn-secondary text-uppercase\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</form>
\t\t<br><br>
\t</div>
</div>

";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", array())) {
            // line 144
            echo "\t<div class=\"modal fade\" id=\"remove_avatar\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">";
            // line 148
            echo twig_escape_filter($this->env, lang("Remove avatar"), "html", null, true);
            echo "</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t</div>
\t\t\t\t<form method=\"post\" class=\"form\">
\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"remove_avatar\">
\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, generateToken("remove_avatar"), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<p>";
            // line 155
            echo twig_escape_filter($this->env, lang("Are you sure you want to delete the avatar?"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
            // line 159
            echo twig_escape_filter($this->env, lang("Remove avatar"), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 166
        echo "
";
    }

    public function getTemplateName()
    {
        return "settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 166,  453 => 159,  449 => 158,  443 => 155,  438 => 153,  430 => 148,  424 => 144,  422 => 143,  412 => 136,  405 => 132,  400 => 130,  393 => 126,  388 => 124,  381 => 120,  376 => 118,  371 => 116,  367 => 114,  365 => 113,  360 => 111,  353 => 107,  349 => 105,  346 => 104,  340 => 103,  335 => 100,  320 => 98,  316 => 97,  312 => 96,  304 => 95,  295 => 94,  292 => 93,  288 => 92,  284 => 90,  269 => 88,  265 => 87,  261 => 86,  257 => 85,  251 => 83,  249 => 82,  238 => 78,  233 => 76,  222 => 72,  217 => 70,  212 => 68,  205 => 64,  201 => 63,  196 => 61,  191 => 59,  186 => 57,  180 => 54,  176 => 53,  171 => 51,  168 => 50,  163 => 48,  152 => 47,  150 => 46,  146 => 45,  140 => 42,  134 => 38,  124 => 36,  121 => 35,  111 => 33,  109 => 32,  103 => 31,  97 => 30,  91 => 29,  85 => 28,  75 => 27,  68 => 23,  63 => 21,  59 => 20,  53 => 16,  50 => 15,  36 => 5,  33 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings.html", "/home/platne/serwer24113/public_html/views/default/settings.html");
    }
}
