<?php

/* articles.html */
class __TwigTemplate_3cdceae0ae828fd0df7e46e32af8ae5a078b391320df8cef87fd6cf4725c03db extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "articles.html", 2);
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
        echo twig_escape_filter($this->env, lang("Articles"), "html", null, true);
        echo "</h2>
\t\t<br>
\t\t";
        // line 10
        $this->loadTemplate("articles.tpl", "articles.html", 10)->display($context);
        // line 11
        echo "\t\t";
        if (($context["articles"] ?? null)) {
            // line 12
            echo "\t\t\t<br>
\t\t\t";
            // line 13
            $this->loadTemplate("pagination.tpl", "articles.html", 13)->display($context);
            // line 14
            echo "\t\t";
        }
        echo "</br>
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
\t\t\t</div></br>
\t</div>

</div>

";
    }

    public function getTemplateName()
    {
        return "articles.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  53 => 13,  50 => 12,  47 => 11,  45 => 10,  40 => 8,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "articles.html", "/home/platne/serwer24113/public_html/views/default/articles.html");
    }
}
