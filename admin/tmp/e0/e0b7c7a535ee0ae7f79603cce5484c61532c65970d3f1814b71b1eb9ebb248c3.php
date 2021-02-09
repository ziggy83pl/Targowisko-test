<?php

/* settings_social_media.html */
class __TwigTemplate_e6c4ff23dc06a66e9e21fc5b04d2d32899dadf990d8429a214b6f357e3ffac9a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "settings_social_media.html", 2);
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
\t<h1><span class=\"glyphicon glyphicon-asterisk\"></span> ";
        // line 6
        echo twig_escape_filter($this->env, lang("Setting social networks"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can edit the settings of the service"), "html", null, true);
        echo "</p>
</div>

";
        // line 10
        $this->loadTemplate("alert.tpl", "settings_social_media.html", 10)->display($context);
        // line 11
        echo "
<form method=\"post\" class=\"form-horizontal\" role=\"form\">
\t<input type=\"hidden\" name=\"action\" value=\"save_settings_social_media\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, generateToken("admin_save_settings_social_media"), "html", null, true);
        echo "\">
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-10 col-sm-offset-2\">
\t\t\t<label><input type=\"checkbox\" name=\"social_facebook\" title=\"";
        // line 17
        echo twig_escape_filter($this->env, lang("Show icon sharing from Facebook"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_facebook", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show icon sharing from Facebook"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"social_google_plus\" title=\"";
        // line 18
        echo twig_escape_filter($this->env, lang("Show icon sharing from Google Plus"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_google_plus", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show icon sharing from Google Plus"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"social_pinterest\" title=\"";
        // line 19
        echo twig_escape_filter($this->env, lang("Show icon sharing from Pinterest"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_pinterest", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show icon sharing from Pinterest"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"social_twitter\" title=\"";
        // line 20
        echo twig_escape_filter($this->env, lang("Show icon sharing from Twitter"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_twitter", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show icon sharing from Twitter"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"social_wykop\" title=\"";
        // line 21
        echo twig_escape_filter($this->env, lang("Show icon sharing from Wykop.pl"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_wykop", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show icon sharing from Wykop.pl"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<label for=\"url_facebook\" class=\"col-sm-3 control-label\">";
        // line 26
        echo twig_escape_filter($this->env, lang("Facebook URL"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"url_facebook\" title=\"";
        // line 28
        echo twig_escape_filter($this->env, lang("Facebook URL"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "url_facebook", array()), "html", null, true);
        echo "\" class=\"target_facebook_side_panel form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"facebook_side_panel\" title=\"";
        // line 33
        echo twig_escape_filter($this->env, lang("Show side panel with Facebook"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "facebook_side_panel", array())) {
            echo "checked";
        }
        echo " class=\"set_required\" data-target=\"target_facebook_side_panel\"> ";
        echo twig_escape_filter($this->env, lang("Show side panel with Facebook"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"allow_comments_fb_profile\" title=\"";
        // line 34
        echo twig_escape_filter($this->env, lang("Allow to comment on the user's profile by Facebook Account"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "allow_comments_fb_profile", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Allow to comment on the user's profile by Facebook Account"), "html", null, true);
        echo "</label>
\t\t\t<label><input type=\"checkbox\" name=\"allow_comments_fb_article\" title=\"";
        // line 35
        echo twig_escape_filter($this->env, lang("Allow to comment on the articles by Facebook Account"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "allow_comments_fb_article", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Allow to comment on the articles by Facebook Account"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<label for=\"facebook_lang\" class=\"col-sm-3 control-label\">";
        // line 40
        echo twig_escape_filter($this->env, lang("Facebook - identification of language"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"facebook_lang\" title=\"";
        // line 42
        echo twig_escape_filter($this->env, lang("Facebook - identification of language"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "facebook_lang", array()), "html", null, true);
        echo "\" required placeholder=\"pl_PL\" class=\"form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"facebook_login\" title=\"";
        // line 47
        echo twig_escape_filter($this->env, lang("Allow login through Facebook"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "facebook_login", array())) {
            echo "checked";
        }
        echo " class=\"set_required\" data-target=\"target_facebook_login\"> ";
        echo twig_escape_filter($this->env, lang("Allow login through Facebook"), "html", null, true);
        echo "</label>
\t\t\t<p><a href=\"https://developers.facebook.com/\" target=\"_blank\" title=\"Facebook Developers\">https://developers.facebook.com/</a></p>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"facebook_api\" class=\"col-sm-3 control-label\">";
        // line 52
        echo twig_escape_filter($this->env, lang("Facebook API"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"facebook_api\" title=\"";
        // line 54
        echo twig_escape_filter($this->env, lang("Facebook API"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "facebook_api", array()), "html", null, true);
        echo "\" class=\"target_facebook_login form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"facebook_secret\" class=\"col-sm-3 control-label\">";
        // line 58
        echo twig_escape_filter($this->env, lang("Facebook Secret"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"facebook_secret\" title=\"";
        // line 60
        echo twig_escape_filter($this->env, lang("Facebook Secret"), "html", null, true);
        echo "\" value=\"";
        if (($context["_ADMIN_TEST_MODE_"] ?? null)) {
            echo "test";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "facebook_secret", array()), "html", null, true);
        }
        echo "\" class=\"target_facebook_login form-control\">
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"google_login\" title=\"";
        // line 66
        echo twig_escape_filter($this->env, lang("Allow login through Google"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_login", array())) {
            echo "checked";
        }
        echo " class=\"set_required\" data-target=\"target_google_login\"> ";
        echo twig_escape_filter($this->env, lang("Allow login through Google"), "html", null, true);
        echo "</label>
\t\t\t<p><a href=\"https://console.developers.google.com/\" target=\"_blank\" title=\"Google API Console\">https://console.developers.google.com/</a></p>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"google_id\" class=\"col-sm-3 control-label\">";
        // line 71
        echo twig_escape_filter($this->env, lang("Google ID"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"google_id\" title=\"";
        // line 73
        echo twig_escape_filter($this->env, lang("Google ID"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_id", array()), "html", null, true);
        echo "\" class=\"target_google_login form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"google_secret\" class=\"col-sm-3 control-label\">";
        // line 77
        echo twig_escape_filter($this->env, lang("Google Secret"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"google_secret\" title=\"";
        // line 79
        echo twig_escape_filter($this->env, lang("Google Secret"), "html", null, true);
        echo "\" value=\"";
        if (($context["_ADMIN_TEST_MODE_"] ?? null)) {
            echo "test";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_secret", array()), "html", null, true);
        }
        echo "\" class=\"target_google_login form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<input type=\"submit\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "settings_social_media.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 84,  260 => 79,  255 => 77,  246 => 73,  241 => 71,  227 => 66,  212 => 60,  207 => 58,  198 => 54,  193 => 52,  179 => 47,  169 => 42,  164 => 40,  150 => 35,  140 => 34,  130 => 33,  120 => 28,  115 => 26,  101 => 21,  91 => 20,  81 => 19,  71 => 18,  61 => 17,  55 => 14,  50 => 11,  48 => 10,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings_social_media.html", "/home/platne/serwer24113/public_html/admin/views/settings_social_media.html");
    }
}
