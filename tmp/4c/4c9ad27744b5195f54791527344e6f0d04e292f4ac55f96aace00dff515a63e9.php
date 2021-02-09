<?php

/* offers_index.tpl */
class __TwigTemplate_caec5e39dfae98e79bf14b9eb79a4538be25b1cd9aaf2bbeb5f6c98f4f9acdd8 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 3
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 6) == 1)) {
                echo " 
\t\t<div class=\"row\">
\t";
            }
            // line 6
            echo "\t<div class=\"col-lg-2 col-md-4 col-sm-6 text-center\">
\t\t<div class=\"offers_index overflow_hidden ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["offer"], "promoted", array())) {
                echo "offers_index_promoted";
            }
            echo "\" itemscope itemtype=\"http://schema.org/Product\">
\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), twig_get_attribute($this->env, $this->source, $context["offer"], "slug", array())), "html", null, true);
            echo "\" 
\t\t\ttitle=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
            echo "\" itemprop=\"url\">

\t\t\t<img src=\"";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["offer"], "thumb", array())) {
                echo "upload/photos/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["photo"] ?? null), "folder", array()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "thumb", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
                echo "/views/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
                echo "/images/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, $context["offer"], "categories", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "name", array()), "html", null, true);
                echo "no_image.png";
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
            echo "\" onerror=\"this.src='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
            echo "/views/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
            echo "/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, $context["offer"], "categories", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[0] ?? null) : null), "name", array()), "html", null, true);
            echo "no_image.png'\" itemprop=\"image\">
\t\t\t
\t\t\t</a>

\t\t\t<h6><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), twig_get_attribute($this->env, $this->source, $context["offer"], "slug", array())), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
            echo "\" class=\"main-color-2\"><span itemprop=\"name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
            echo "</span></a></h6>
\t\t\t";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["offer"], "price_free", array())) {
                // line 17
                echo "\t\t\t\t<h6><strong>";
                echo twig_escape_filter($this->env, lang("For free"), "html", null, true);
                echo "</strong></h6>
\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 18
$context["offer"], "price", array()) > 0)) {
                // line 19
                echo "\t\t\t\t<h6><strong>";
                echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, $context["offer"], "price", array())), "html", null, true);
                echo " ";
                if (twig_get_attribute($this->env, $this->source, $context["offer"], "price_negotiate", array())) {
                    echo "<span class=\"small\">(";
                    echo twig_escape_filter($this->env, lang("to negotiate"), "html", null, true);
                    echo ")</span>";
                }
                echo "</strong></h6>
\t\t\t";
            } else {
                // line 21
                echo "\t\t\t\t<h6>&nbsp;</h6>
\t\t\t";
            }
            // line 23
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["offer"], "promoted", array())) {
                echo "<span class=\"promowane\"title=\"To ogłoszenie jest promowane!\">promowane</span>";
            }
            // line 24
            echo "\t\t\t
\t\t</div>
\t</div>
\t";
            // line 27
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 6) == 0)) {
                echo " 
\t\t</div><br>
\t";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        // line 32
        if (((twig_length_filter($this->env, ($context["offers"] ?? null)) % 6) > 0)) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "offers_index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 32,  155 => 31,  137 => 27,  132 => 24,  127 => 23,  123 => 21,  111 => 19,  109 => 18,  104 => 17,  102 => 16,  94 => 15,  68 => 11,  63 => 9,  59 => 8,  53 => 7,  50 => 6,  43 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "offers_index.tpl", "/home/platne/serwer24113/public_html/views/default/offers_index.tpl");
    }
}
