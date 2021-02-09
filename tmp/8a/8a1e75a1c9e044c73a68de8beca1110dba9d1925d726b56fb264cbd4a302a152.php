<?php

/* my_offers.html */
class __TwigTemplate_7fad654592df62a6b4a6fcfaa410ef989e9a23d260a50cc36ef5fcdac92e4a73 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "my_offers.html", 2);
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
\t\t<h1>";
        // line 8
        echo twig_escape_filter($this->env, lang("My offers"), "html", null, true);
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
\t\t\t\t\t\t<label for=\"active\">";
        // line 18
        echo twig_escape_filter($this->env, lang("Active"), "html", null, true);
        echo ":</label>
\t\t\t\t\t\t<select name=\"active\" title=\"";
        // line 19
        echo twig_escape_filter($this->env, lang("Search by active offers"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 20
        echo twig_escape_filter($this->env, lang("All"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"yes\" ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "active", array()) == "yes")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("Yes"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"no\" ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "active", array()) == "no")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("No"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"keywords\" class=\"control-label\">";
        // line 26
        echo twig_escape_filter($this->env, lang("Keywords"), "html", null, true);
        echo ": </label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"keywords\" id=\"keywords\" placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, lang("Enter your keywords..."), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Enter your keywords..."), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "keywords", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"exact_phrase\" ";
        // line 29
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
        // line 33
        echo twig_escape_filter($this->env, lang("Search"), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"promuj_ogloszenie\" title=\"Promuj ogłoszenie\" alt=\"promuj_ogloszenie\">
\t\t\t\t\t\t<div class=\"PromujO\">Promuj ogłoszenie za:";
        // line 36
        echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost", array())), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, lang("days"), "html", null, true);
        echo "
\t\t\t\t\t\t\t<div class=\"col-md-6\"><!-- payment-->
\t\t\t\t\t\t\t\t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "/views/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
        echo "/images/pay/dotpay_logo.png\" class=\"rounded float-left\" alt=\"Dotpay\" title=\"Zapłać za pomocą dotpay\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "/views/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
        echo "/images/pay/paypal_logo.png\" class=\"rounded float-left\" alt=\"PayPal\" title=\"Zapłać za pomocą PayPal\">
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"PromujP\"title=\"Promuj ogłoszenie\" alt=\"promuj_ogloszenie\"></div>
\t\t\t\t\t</div><!--Test promowania ogłoszenia-->
\t\t\t\t</form>
\t\t\t\t";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_side_2", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_side_2", array());
            echo "</div>";
        }
        // line 47
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 49
        $this->loadTemplate("offers.tpl", "my_offers.html", 49)->display($context);
        // line 50
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "my_offers.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 50,  158 => 49,  154 => 47,  148 => 46,  136 => 39,  130 => 38,  121 => 36,  115 => 33,  104 => 29,  95 => 27,  91 => 26,  80 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  55 => 15,  49 => 14,  40 => 8,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "my_offers.html", "/home/platne/serwer24113/public_html/views/default/my_offers.html");
    }
}
