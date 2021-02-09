<?php

/* pagination.tpl */
class __TwigTemplate_e6c0a3d1136f568d9573168836d0680cea6dbc75ef371135e2db3f8f9da0de5e extends Twig_Template
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
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_count", array())) {
            // line 3
            echo "\t<ul class=\"pagination justify-content-center\">
\t\t<li class=\"page-item ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_number", array()) == 1)) {
                echo "disabled return_false";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, path(($context["controller"] ?? null)), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page", array())) {
                echo "?";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("First page"), "html", null, true);
            echo "\" class=\"page-link\" rel=\"prev\">&laquo;</a></li>
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_start", array()), twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_count", array())));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["this_page"]) {
                // line 6
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) < 10)) {
                    // line 7
                    echo "\t\t\t\t<li class=\"page-item ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_number", array()) == $context["this_page"])) {
                        echo "disabled return_false active";
                    }
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, path(($context["controller"] ?? null)), "html", null, true);
                    echo "?";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page", array()), "html", null, true);
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page", array())) {
                        echo "&";
                    }
                    echo "page=";
                    echo twig_escape_filter($this->env, $context["this_page"], "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, lang("Page"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $context["this_page"], "html", null, true);
                    echo "\" class=\"page-link\">";
                    echo twig_escape_filter($this->env, $context["this_page"], "html", null, true);
                    echo "</a></li>
\t\t\t";
                }
                // line 9
                echo "\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['this_page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t<li class=\"page-item ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_number", array()) == twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_count", array()))) {
                echo "disabled return_false";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, path(($context["controller"] ?? null)), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page", array()), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page", array())) {
                echo "&";
            }
            echo "page=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_count", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Last page"), "html", null, true);
            echo "\" class=\"page-link\" rel=\"next\">&raquo;</a></li>
\t</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "pagination.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 10,  88 => 9,  65 => 7,  62 => 6,  45 => 5,  31 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pagination.tpl", "/home/platne/serwer24113/public_html/views/default/pagination.tpl");
    }
}
