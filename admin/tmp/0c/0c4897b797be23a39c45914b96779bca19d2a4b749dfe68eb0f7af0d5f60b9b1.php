<?php

/* pagination.tpl */
class __TwigTemplate_890d7a10f8ed4dd406bfbaecb3a18ddd5e7c07deb601d978fe8043cd0305bd26 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_count", array())) {
            // line 2
            echo "\t<div class=\"text-center\">
\t\t<ul class=\"pagination\">
\t\t\t<li ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_number", array()) == 1)) {
                echo "class=\"disabled\"";
            }
            echo "><a href=\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page_admin", array())) {
                echo "?";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page_admin", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("First page"), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_number", array()) == 1)) {
                echo "class=\"inactive\"";
            }
            echo ">&laquo;</a></li>
\t\t\t";
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
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) < 10)) {
                    // line 7
                    echo "\t\t\t\t\t<li ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_number", array()) == $context["this_page"])) {
                        echo "class=\"disabled\"";
                    }
                    echo "><a href=\"?";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page_admin", array()), "html", null, true);
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page_admin", array())) {
                        echo "&";
                    }
                    echo "page=";
                    echo twig_escape_filter($this->env, $context["this_page"], "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, lang("Page"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $context["this_page"], "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_number", array()) == $context["this_page"])) {
                        echo "class=\"inactive\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["this_page"], "html", null, true);
                    echo "</a></li>
\t\t\t\t";
                }
                // line 9
                echo "\t\t\t";
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
            echo "\t\t   <li ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_number", array()) == twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_count", array()))) {
                echo "class=\"disabled\"";
            }
            echo "><a href=\"?";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page_admin", array()), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "page_admin", array())) {
                echo "&";
            }
            echo "page=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_count", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Last page"), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_number", array()) == twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_count", array()))) {
                echo "class=\"inactive\"";
            }
            echo ">&raquo;</a></li>
\t\t</ul>
\t</div>
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
        return array (  105 => 10,  91 => 9,  66 => 7,  63 => 6,  46 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pagination.tpl", "/home/platne/serwer24113/public_html/admin/views/pagination.tpl");
    }
}
