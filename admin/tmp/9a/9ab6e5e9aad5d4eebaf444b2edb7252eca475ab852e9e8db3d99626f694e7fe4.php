<?php

/* settings_ads.html */
class __TwigTemplate_91b80d3a731184f5f3949481df12246e047fcdb9513e28217b24e5bc8f9964da extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "settings_ads.html", 2);
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
        echo "\t
<div class=\"page-header\">
\t<h1><span class=\"glyphicon glyphicon-asterisk\"></span> ";
        // line 6
        echo twig_escape_filter($this->env, lang("Ads settings"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can edit the ads of the service"), "html", null, true);
        echo "</p>
</div>

";
        // line 10
        $this->loadTemplate("alert.tpl", "settings_ads.html", 10)->display($context);
        // line 11
        echo "
<form method=\"post\" class=\"form\" role=\"form\">
\t<input type=\"hidden\" name=\"action\" value=\"save_settings_ads\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, generateToken("admin_save_settings_ads"), "html", null, true);
        echo "\">
\t<div class=\"form-group\">
\t\t<label for=\"ads_1\">";
        // line 16
        echo twig_escape_filter($this->env, lang("Ad code"), "html", null, true);
        echo " 1:</label>
\t\t<textarea name=\"ads_1\" title=\"";
        // line 17
        echo twig_escape_filter($this->env, lang("Ad code"), "html", null, true);
        echo " 1\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_1", array());
        echo "</textarea>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"ads_2\">";
        // line 20
        echo twig_escape_filter($this->env, lang("Ad code"), "html", null, true);
        echo " 2:</label>
\t\t<textarea name=\"ads_2\" title=\"";
        // line 21
        echo twig_escape_filter($this->env, lang("Ad code"), "html", null, true);
        echo " 2\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_2", array());
        echo "</textarea>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"ads_3\">";
        // line 24
        echo twig_escape_filter($this->env, lang("Ad code"), "html", null, true);
        echo " 3:</label>
\t\t<textarea name=\"ads_3\" title=\"";
        // line 25
        echo twig_escape_filter($this->env, lang("Ad code"), "html", null, true);
        echo " 3\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_3", array());
        echo "</textarea>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"ads_4\">";
        // line 28
        echo twig_escape_filter($this->env, lang("Ad code"), "html", null, true);
        echo " 4:</label>
\t\t<textarea name=\"ads_4\" title=\"";
        // line 29
        echo twig_escape_filter($this->env, lang("Ad code"), "html", null, true);
        echo " 4\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_4", array());
        echo "</textarea>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"ads_side_1\">";
        // line 32
        echo twig_escape_filter($this->env, lang("Ad code side"), "html", null, true);
        echo " 1:</label>
\t\t<textarea name=\"ads_side_1\" title=\"";
        // line 33
        echo twig_escape_filter($this->env, lang("Ad code side"), "html", null, true);
        echo " 1\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_side_1", array());
        echo "</textarea>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"ads_side_2\">";
        // line 36
        echo twig_escape_filter($this->env, lang("Ad code side"), "html", null, true);
        echo " 2:</label>
\t\t<textarea name=\"ads_side_2\" title=\"";
        // line 37
        echo twig_escape_filter($this->env, lang("Ad code side"), "html", null, true);
        echo " 2\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_side_2", array());
        echo "</textarea>
\t</div>
\t<div class=\"form-group\">
\t\t<input type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "settings_ads.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  124 => 37,  120 => 36,  112 => 33,  108 => 32,  100 => 29,  96 => 28,  88 => 25,  84 => 24,  76 => 21,  72 => 20,  64 => 17,  60 => 16,  55 => 14,  50 => 11,  48 => 10,  42 => 7,  38 => 6,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings_ads.html", "/home/platne/serwer24113/public_html/admin/views/settings_ads.html");
    }
}
