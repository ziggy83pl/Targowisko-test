<?php

/* search_main.tpl */
class __TwigTemplate_9dfa81a277bb2e947d0ef94e2936be1bcab1d49b3d24ed9b3e36302e13ce332b extends Twig_Template
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
        echo "\t<div id=\"search_box\" class=\"container form-search ";
        if (($context["slider"] ?? null)) {
            echo "search_box_slider";
        }
        echo "\">
\t\t<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, path("offers"), "html", null, true);
        echo "\" method=\"get\">
\t\t\t<input type=\"hidden\" name=\"search\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_keywords", array())) {
            // line 6
            echo "\t\t\t\t\t<div class=\"col-12 col-sm\">
\t\t\t\t\t\t<label for=\"search_keywords\">";
            // line 7
            echo twig_escape_filter($this->env, lang("Keywords"), "html", null, true);
            echo ": </label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"keywords\" id=\"search_keywords\" placeholder=\"";
            // line 8
            echo twig_escape_filter($this->env, lang("Enter your keywords..."), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Enter your keywords..."), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "keywords", array()), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t";
        if ((($context["categories"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_category", array()))) {
            // line 12
            echo "\t\t\t\t\t<div class=\"col-12 col-sm\">
\t\t\t\t\t\t<label for=\"search_category\">";
            // line 13
            echo twig_escape_filter($this->env, lang("Category"), "html", null, true);
            echo ":</label>
\t\t\t\t\t\t<select class=\"form-control\" name=\"category\" id=\"search_category\" title=\"";
            // line 14
            echo twig_escape_filter($this->env, lang("Select the appropriate category"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 15
            echo twig_escape_filter($this->env, lang("All"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
            // line 16
            if (($context["category"] ?? null)) {
                // line 17
                echo "\t\t\t\t\t\t\t\t";
                if (($context["overCategory"] ?? null)) {
                    echo "<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["overCategory"] ?? null), "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["overCategory"] ?? null), "name", array()), "html", null, true);
                    echo "</option>";
                }
                // line 18
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "category", array()) == twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t\t\t<option disabled>──────────</option>
\t\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 22
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "category", array()) == twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t";
        if (($context["types"] ?? null)) {
            // line 28
            echo "\t\t\t\t\t<div class=\"col-12 col-sm\">
\t\t\t\t\t\t<label for=\"search_type\">";
            // line 29
            echo twig_escape_filter($this->env, lang("Offer type"), "html", null, true);
            echo ":</label>
\t\t\t\t\t\t<select class=\"form-control\" name=\"type\" id=\"search_type\" title=\"";
            // line 30
            echo twig_escape_filter($this->env, lang("Select the appropriate offer type"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 31
            echo twig_escape_filter($this->env, lang("All"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 33
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "slug", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "type", array()) == twig_get_attribute($this->env, $this->source, $context["type"], "slug", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t<div class=\"w-100 d-block d-lg-none\"></div>
\t\t\t\t";
        // line 39
        if (($context["search_show_price"] ?? null)) {
            // line 40
            echo "\t\t\t\t\t<div class=\"col-12 col-sm\">
\t\t\t\t\t\t<label for=\"search_price_from\">";
            // line 41
            echo twig_escape_filter($this->env, lang("Price"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
            echo "): </label>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input class=\"form-control text-right\" type=\"number\" name=\"price_from\" id=\"search_price_from\" placeholder=\"";
            // line 43
            echo twig_escape_filter($this->env, lang("Min..."), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Enter the min value"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "price_from", array()), "html", null, true);
            echo "\" min=\"0\" step=\"0.01\">
\t\t\t\t\t\t\t<div class=\"input-group-prepend input-group-append\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\"> - </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input class=\"form-control text-right\" type=\"number\" name=\"price_to\" id=\"search_price_to\" placeholder=\"";
            // line 47
            echo twig_escape_filter($this->env, lang("Max..."), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Enter the max value"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "price_to", array()), "html", null, true);
            echo "\" min=\"0\" step=\"0.01\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t<div class=\"w-100 d-none d-lg-block\"></div>
\t\t\t\t";
        // line 52
        if (($context["states"] ?? null)) {
            // line 53
            echo "\t\t\t\t\t<div class=\"";
            if (twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "state", array())) {
                echo "col";
            } else {
                echo "col";
            }
            echo " search_main_change_col\">
\t\t\t\t\t\t<label for=\"search_state\">";
            // line 54
            echo twig_escape_filter($this->env, lang("State"), "html", null, true);
            echo ":</label>
\t\t\t\t\t\t<select class=\"form-control select_state\" name=\"state\" id=\"search_state\" title=\"";
            // line 55
            echo twig_escape_filter($this->env, lang("Select the appropriate state"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 56
            echo twig_escape_filter($this->env, lang("All"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 58
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "slug", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "state", array()) == twig_get_attribute($this->env, $this->source, $context["state"], "slug", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["state"]) {
                // line 63
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["state"], "states", array())) {
                    // line 64
                    echo "\t\t\t\t\t\t\t<div class=\"col substates substate_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "slug", array()), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "state", array()) != twig_get_attribute($this->env, $this->source, $context["state"], "slug", array()))) {
                        echo "style=\"display:none\"";
                    }
                    echo " >
\t\t\t\t\t\t\t\t<label>&nbsp;</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"state2\" title=\"";
                    // line 66
                    echo twig_escape_filter($this->env, lang("Select the appropriate state"), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "state", array()) != twig_get_attribute($this->env, $this->source, $context["state"], "slug", array()))) {
                        echo "disabled";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 67
                    echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["state"], "states", array()));
                    foreach ($context['_seq'] as $context["key2"] => $context["state2"]) {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state2"], "slug", array()), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "state2", array()) == twig_get_attribute($this->env, $this->source, $context["state2"], "slug", array()))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state2"], "name", array()), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key2'], $context['state2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t<div class=\"w-100 d-block d-lg-none\"></div>
\t\t\t\t";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_address", array())) {
            // line 78
            echo "\t\t\t\t\t<div class=\"col-12 col-sm\">
\t\t\t\t\t\t<label for=\"search_main_address\">";
            // line 79
            echo twig_escape_filter($this->env, lang("Address"), "html", null, true);
            echo ":</label>
\t\t\t\t\t\t<input type=\"text\" name=\"address\" class=\"form-control\" placeholder=\"";
            // line 80
            echo twig_escape_filter($this->env, lang("1600 Pennsylvania Avenue NW, Washington, D.C. 20500"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Enter the address"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "address", array()), "html", null, true);
            echo "\" id=\"search_main_address\">
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 82
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_distance", array()) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_api", array()))) {
                // line 83
                echo "\t\t\t\t\t\t<div class=\"col-12 col-sm\">
\t\t\t\t\t\t\t<label for=\"search_distance\">";
                // line 84
                echo twig_escape_filter($this->env, lang("Distance"), "html", null, true);
                echo ":</label>
\t\t\t\t\t\t\t<div class=\"form-inline text-right\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"distance\" id=\"search_distance\" class=\"form-control text-right\" placeholder=\"20\" title=\"";
                // line 87
                echo twig_escape_filter($this->env, lang("Enter the distance from the searched address"), "html", null, true);
                echo "\" value=\"";
                if (twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "distance", array())) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "distance", array()), "html", null, true);
                } else {
                    echo "10";
                }
                echo "\" min=\"0\" step=\"1\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">";
                // line 89
                echo twig_escape_filter($this->env, lang("km"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t<div class=\"col pull-right\">
\t\t\t\t\t<label>&nbsp;</label>
\t\t\t\t\t<button type=\"submit\" class=\"form-control btn btn-1 text-uppercase\"><i class=\"fas fa-search\"></i> ";
        // line 98
        echo twig_escape_filter($this->env, lang("Search"), "html", null, true);
        echo "</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "search_main.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 98,  368 => 96,  365 => 95,  356 => 89,  345 => 87,  339 => 84,  336 => 83,  334 => 82,  325 => 80,  321 => 79,  318 => 78,  316 => 77,  313 => 76,  310 => 75,  304 => 74,  299 => 71,  284 => 69,  280 => 68,  276 => 67,  268 => 66,  258 => 64,  255 => 63,  251 => 62,  247 => 60,  232 => 58,  228 => 57,  224 => 56,  220 => 55,  216 => 54,  207 => 53,  205 => 52,  202 => 51,  191 => 47,  180 => 43,  173 => 41,  170 => 40,  168 => 39,  165 => 38,  160 => 35,  145 => 33,  141 => 32,  137 => 31,  133 => 30,  129 => 29,  126 => 28,  123 => 27,  118 => 24,  103 => 22,  99 => 21,  96 => 20,  84 => 18,  75 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  58 => 12,  55 => 11,  45 => 8,  41 => 7,  38 => 6,  36 => 5,  30 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search_main.tpl", "/home/platne/serwer24113/public_html/views/default/search_main.tpl");
    }
}
