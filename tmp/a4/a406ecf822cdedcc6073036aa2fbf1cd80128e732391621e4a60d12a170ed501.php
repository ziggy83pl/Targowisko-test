<?php

/* ads.tpl */
class __TwigTemplate_51a3118cbbed06ee80cc84dd9ecd5b1839b993f470181a89d309d8099ac30801 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 2
            echo "<!--ads.tpl-->
<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "name", array()), "html", null, true);
            echo "\"> 
<hr>
\t<a href=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "url", array()), "html", null, true);
            echo "\">\t
\t\t<h2>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "name", array()), "html", null, true);
            echo "</h2>
\t</a>
\t\t<div class=\"ads\">
\t\t\t<a href=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "url", array()), "html", null, true);
            echo "\">
\t\t\t\t<img  alt=\"\" src=\"upload/photos/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "phfolder", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "phimage", array()), "html", null, true);
            echo "\">\t\t
\t\t\t</a>
\t\t\t";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["ad"], "facebook", array())) {
                // line 13
                echo "\t\t\t<a class=\"ads-fb\" href=\"http://";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "facebook", array()), "html", null, true);
                echo "\" target=\"_blank\" >
\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t</a>
\t\t\t";
            }
            // line 17
            echo "\t\t</div>
\t\t<hr>
</div>
\t<br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
<!-- style=\"background: #2980b9; width: 40px; height: 51px; padding-top: 10px; position: absolute; margin-left: -40px;\" <img src=\"https://targowisko.org/views/default/images/facebook-side.png\" alt=\"Facebook\" width=\"10\" height=\"21\"> -->
";
    }

    public function getTemplateName()
    {
        return "ads.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  66 => 17,  58 => 13,  56 => 12,  49 => 10,  45 => 9,  39 => 6,  35 => 5,  30 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ads.tpl", "/home/platne/serwer24113/public_html/views/default/ads.tpl");
    }
}
