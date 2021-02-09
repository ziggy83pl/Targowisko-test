<?php

/* info.html */
class __TwigTemplate_fb2750a7442e3f1dc4f5ef2cbf42988ad33cb8f4232be493620d3e43020bad6d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "info.html", 2);
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
\t\t";
        // line 8
        if (($context["info_page"] ?? null)) {
            // line 9
            echo "\t\t\t<h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["info_page"] ?? null), "name", array()), "html", null, true);
            echo "</h2>
\t\t\t<p><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, path("info"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Return to the list of pages"), "html", null, true);
            echo "\" class=\"main-color-1\">";
            echo twig_escape_filter($this->env, lang("Return to the list of pages"), "html", null, true);
            echo "</a></p>
\t\t\t<br>
\t\t\t<div class=\"content\">
\t\t\t\t";
            // line 13
            echo twig_get_attribute($this->env, $this->source, ($context["info_page"] ?? null), "content", array());
            echo "
\t\t\t</div>
\t\t";
        } else {
            // line 16
            echo "\t\t\t<h2>";
            echo twig_escape_filter($this->env, lang("Info"), "html", null, true);
            echo "</h2>
\t\t\t<br>
\t\t\t<ul class=\"list-group\">
\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["info"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "\t\t\t\t\t<li class=\"list-group-item\"><a href=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "page", array()) == "contact")) {
                    echo twig_escape_filter($this->env, path("contact"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, path("info", twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), twig_get_attribute($this->env, $this->source, $context["item"], "slug", array())), "html", null, true);
                }
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\" class=\"main-color-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t</ul>
\t\t";
        }
        // line 24
        echo "\t\t<br>
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
        return "info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 24,  91 => 22,  74 => 20,  70 => 19,  63 => 16,  57 => 13,  47 => 10,  42 => 9,  40 => 8,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "info.html", "/home/platne/serwer24113/public_html/views/default/info.html");
    }
}
