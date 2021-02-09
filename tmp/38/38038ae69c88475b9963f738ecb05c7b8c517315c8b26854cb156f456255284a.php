<?php

/* clipboard.html */
class __TwigTemplate_79d5157b541369c5820b585eaba81db40fb3e2d6d9451b11ffab294ee9a3ce0f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "clipboard.html", 2);
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
\t<div class=\"container\">
\t\t<h1>";
        // line 8
        echo twig_escape_filter($this->env, lang("Clipboard"), "html", null, true);
        echo "</h1>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<br><br>
\t\t\t\t";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_side_1", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_side_1", array());
            echo "</div>";
        }
        // line 15
        echo "\t\t\t\t<form class=\"form-horizontal form-search\" method=\"get\" id=\"form_search_offers\">
\t\t\t\t\t<input type=\"hidden\" name=\"search\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"keywords\" class=\"control-label\">";
        // line 18
        echo twig_escape_filter($this->env, lang("Keywords"), "html", null, true);
        echo ": </label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"keywords\" id=\"keywords\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, lang("Enter your keywords..."), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Enter your keywords..."), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "keywords", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"exact_phrase\" ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "exact_phrase", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Exact phrase"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button class=\"form-control btn-1 text-uppercase\" type=\"submit\"><i class=\"fas fa-search\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, lang("Search"), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"promuj_schowek\" title=\"Promuj ogłoszenie\" alt=\"promuj_ogloszenie\">
\t\t\t\t\t\t\t<div class=\"PromujO\">Promuj swoje ogłoszenie za:";
        // line 28
        echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost", array())), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, lang("days"), "html", null, true);
        echo " i wyróżnij się na tle innych!</div>
\t\t\t\t\t\t\t<div class=\"PromujT\"title=\"Promuj ogłoszenie\" alt=\"promuj_ogloszenie\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_side_2", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_side_2", array());
            echo "</div>";
        }
        // line 33
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 35
        $this->loadTemplate("offers.tpl", "clipboard.html", 35)->display($context);
        echo "</br>
\t\t\t\t";
        // line 36
        $this->loadTemplate("ads.tpl", "clipboard.html", 36)->display($context);
        echo "</br>
\t\t\t</div>
\t\t</div>

\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "clipboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 36,  111 => 35,  107 => 33,  101 => 32,  90 => 28,  84 => 25,  73 => 21,  64 => 19,  60 => 18,  55 => 15,  49 => 14,  40 => 8,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "clipboard.html", "/home/platne/serwer24113/public_html/views/default/clipboard.html");
    }
}
