<?php

/* 404.html */
class __TwigTemplate_627c78988b7b8d418993dbf2c10c51e55fba6bcad0fcc4ff07a39d16e90351b8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("main.tpl", "404.html", 3);
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"text-center container page_box\">
\t<h2 class=\"text-danger\">";
        // line 8
        echo twig_escape_filter($this->env, lang("Error 404"), "html", null, true);
        echo "</h2>
\t";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_1", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_1", array());
            echo "</div>";
        }
        // line 10
        echo "\t<img src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "/views/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
        echo "/images/404.png\" alt=\"Error 404\" class=\"img-responsive\" style=\"margin: 40px auto\">
\t<h3>";
        // line 11
        echo twig_escape_filter($this->env, lang("Page does not exist"), "html", null, true);
        echo "</h3>
\t<p>";
        // line 12
        echo twig_escape_filter($this->env, lang("The page you are looking for has been moved, deleted, or simply never existed."), "html", null, true);
        echo "</p>
</div>

";
    }

    public function getTemplateName()
    {
        return "404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  56 => 11,  49 => 10,  43 => 9,  39 => 8,  35 => 6,  32 => 5,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "404.html", "/home/platne/serwer24113/public_html/views/default/404.html");
    }
}
