<?php

/* index.html */
class __TwigTemplate_bb2e461deeed547fa0375774ec1b3f7bac6a752228bc8a7a6325897258d32bb4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "index.html", 2);
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
        echo "<div class=\"row\">
\t<br><br><br>
\t<div class=\"col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\"> ";
        // line 9
        echo twig_escape_filter($this->env, lang("Admin Panel"), "html", null, true);
        echo "</div>
\t\t\t<div class=\"panel-body text-center\">
\t\t\t\t<br>
\t\t\t\t<a href=\"https://targowisko.org\" title=\"Strona targowisko\" target=\"_blank\"><img src=\"images/targowisko.png\" alt=\"targowisko\" class=\"img-responsive\" style=\"margin:auto\"/></a>
\t\t\t\t<br><br>
\t\t\t\t<p>";
        // line 14
        echo twig_escape_filter($this->env, lang("Admin Panel allows an easy way to edit the content of your website. Use links in the menu on left. In case of problems with the service please with seller"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br><br><br>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  41 => 9,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/home/platne/serwer24113/public_html/admin/views/index.html");
    }
}
