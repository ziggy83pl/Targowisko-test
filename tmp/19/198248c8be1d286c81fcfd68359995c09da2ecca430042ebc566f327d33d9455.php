<?php

/* profile.html */
class __TwigTemplate_cdd11ce8db1ca9c1791b0e760501cc8f4d5b85f14af5723832e3b769a4f4ad42 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "profile.html", 2);
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
        echo "
<div class=\"page_box background_grey\">
\t<div class=\"container background_white\">
\t\t<div class=\"text-center\">
\t\t\t<br><h2>";
        // line 9
        echo twig_escape_filter($this->env, lang("Profile of"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", array()), "html", null, true);
        echo "</h2>
\t\t\t<h4><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, path("offers"), "html", null, true);
        echo "?search&username=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("See all offers added by this user"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("See all offers added by this user"), "html", null, true);
        echo "</a></h4>
\t\t</div>
\t\t";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "avatar", array())) {
            echo "<br><div class=\"text-center\"><img src=\"upload/avatars/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "avatar", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, lang("Avatar"), "html", null, true);
            echo "\" onerror=\"this.src='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
            echo "/views/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
            echo "/images/no_image.png'\"></div>";
        }
        // line 13
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "description", array())) {
            // line 14
            echo "\t\t\t<br>";
            echo twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "description", array());
            echo "<br>
\t\t";
        }
        // line 16
        echo "\t\t<br>
\t\t<h4 class=\"text-center\">";
        // line 17
        echo twig_escape_filter($this->env, lang("Statistics"), "html", null, true);
        echo "</h4>
\t\t<table class=\"table table-striped table-bordered\" style=\"width: auto !important; margin: auto;\">
\t\t\t<tr><td>";
        // line 19
        echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
        echo ":</td><td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>";
        // line 20
        echo twig_escape_filter($this->env, lang("Number of offers"), "html", null, true);
        echo ":</td><td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "number_offers", array()), "html", null, true);
        echo "</td></tr>
\t\t\t<tr><td>";
        // line 21
        echo twig_escape_filter($this->env, lang("Amount logins"), "html", null, true);
        echo ":</td><td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "number_login", array()), "html", null, true);
        echo "</td></tr>
\t\t\t";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "last_login", array())) {
            // line 23
            echo "\t\t\t\t<tr><td>";
            echo twig_escape_filter($this->env, lang("Last login"), "html", null, true);
            echo ":</td><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "last_login", array()), "d-m-Y"), "html", null, true);
            echo "</td></tr>
\t\t\t";
        }
        // line 25
        echo "\t\t\t<tr><td>";
        echo twig_escape_filter($this->env, lang("Date of registration"), "html", null, true);
        echo ":</td><td>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "date", array()), "d-m-Y"), "html", null, true);
        echo "</td></tr>
\t\t</table>
\t\t";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "allow_comments_fb_profile", array())) {
            // line 28
            echo "\t\t\t<br><br>
\t\t\t<div class=\"text-center\">
\t\t\t\t<div class=\"fb-comments\" data-href=\"";
            // line 30
            echo twig_escape_filter($this->env, path("profile", 0, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", array())), "html", null, true);
            echo "\" data-numposts=\"15\"></div>
\t\t\t</div>
\t\t";
        }
        // line 33
        echo "\t\t<br><br>
\t\t";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_contact_form_profile", array())) {
            // line 35
            echo "\t\t\t<h2 class=\"text-center\">";
            echo twig_escape_filter($this->env, lang("Contact form"), "html", null, true);
            echo "</h2>
\t\t\t<br>
\t\t\t";
            // line 37
            $this->loadTemplate("alert.tpl", "profile.html", 37)->display($context);
            // line 38
            echo "\t\t\t";
            $this->loadTemplate("contact_form.tpl", "profile.html", 38)->display($context);
            // line 39
            echo "\t\t\t<br><br><br>
\t\t";
        }
        // line 41
        echo "\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 41,  151 => 39,  148 => 38,  146 => 37,  140 => 35,  138 => 34,  135 => 33,  129 => 30,  125 => 28,  123 => 27,  115 => 25,  107 => 23,  105 => 22,  99 => 21,  93 => 20,  87 => 19,  82 => 17,  79 => 16,  73 => 14,  70 => 13,  58 => 12,  47 => 10,  41 => 9,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile.html", "/home/platne/serwer24113/public_html/views/default/profile.html");
    }
}
