<?php

/* contact.html */
class __TwigTemplate_c17d1118a720854b617e3265e3e8aaecb988040bdd8ab0c21b9543aef4df5e68 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "contact.html", 2);
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
<div class=\"page_box\">
\t<div class=\"container\">
\t\t<h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact_page"] ?? null), "name", array()), "html", null, true);
        echo "</h2>
\t\t<br>
\t\t";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["contact_page"] ?? null), "content", array());
        echo "
\t\t<br>
\t\t";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_1", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_1", array());
            echo "</div>";
        }
        // line 13
        echo "\t\t<br>
\t\t<h3 class=\"text-center\">";
        // line 14
        echo twig_escape_filter($this->env, lang("Contact form"), "html", null, true);
        echo "</h3>
\t\t<br>
\t\t";
        // line 16
        $this->loadTemplate("alert.tpl", "contact.html", 16)->display($context);
        // line 17
        echo "\t\t";
        $this->loadTemplate("contact_form.tpl", "contact.html", 17)->display($context);
        // line 18
        echo "\t\t<br><br><br>
\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t<hr>
\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t</a>
\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "contact.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  66 => 17,  64 => 16,  59 => 14,  56 => 13,  50 => 12,  45 => 10,  40 => 8,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact.html", "/home/platne/serwer24113/public_html/views/default/contact.html");
    }
}
