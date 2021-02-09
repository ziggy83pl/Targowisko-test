<?php

/* articles.tpl */
class __TwigTemplate_586854196a130f12248d42cc1195014dd5cda547240d6ea305932206a9c3ddad extends Twig_Template
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
        echo "

";
        // line 3
        if (($context["articles"] ?? null)) {
            // line 4
            echo "\t<ul class=\"list-unstyled articles_list\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 6
                echo "\t\t\t<li class=\"media\">
\t\t\t\t<a href=\"";
                // line 7
                echo twig_escape_filter($this->env, path("article", twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), twig_get_attribute($this->env, $this->source, $context["article"], "slug", array())), "html", null, true);
                echo "\" class=\"mr-3\">
\t\t\t\t\t<img src=\"";
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["article"], "thumb", array())) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "thumb", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
                    echo "/views/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
                    echo "/images/no_image.png";
                }
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", array()), "html", null, true);
                echo "\" class=\"img-fluid img-thumbnail\" onerror=\"this.src='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
                echo "/views/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
                echo "/images/no_image.png'\">
\t\t\t\t</a>
\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t<h5 class=\"mt-0 mb-2\"><a href=\"";
                // line 11
                echo twig_escape_filter($this->env, path("article", twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), twig_get_attribute($this->env, $this->source, $context["article"], "slug", array())), "html", null, true);
                echo "\" class=\"main-color-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", array()), "html", null, true);
                echo "</a></h5>
\t\t\t\t\t<p class=\"text-muted small mb-2\">";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", array()), "d-m-Y"), "html", null, true);
                echo "</p>
\t\t\t\t\t<p>";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content_short", array()), "html", null, true);
                echo "</p>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t</ul>
";
        } else {
            // line 19
            echo "\t<h3 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Nothing found"), "html", null, true);
            echo "</h3>
";
        }
        // line 21
        echo "

";
    }

    public function getTemplateName()
    {
        return "articles.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  86 => 19,  82 => 17,  72 => 13,  68 => 12,  62 => 11,  43 => 8,  39 => 7,  36 => 6,  32 => 5,  29 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "articles.tpl", "/home/platne/serwer24113/public_html/views/default/articles.tpl");
    }
}
