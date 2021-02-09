<?php

/* offers.tpl */
class __TwigTemplate_5baf1306d0e0cd0bc6caa3052f5a566f40d5d2dbe9312c3819d144893d7c08eb extends Twig_Template
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
        if (($context["offers"] ?? null)) {
            // line 2
            echo "\t<form method=\"get\" class=\"float-right\">
\t\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort", array()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 4
                echo "\t\t\t";
                if (twig_length_filter($this->env, $context["item"])) {
                    // line 5
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["item"]);
                    foreach ($context['_seq'] as $context["key2"] => $context["item2"]) {
                        // line 6
                        echo "\t\t\t\t\t";
                        if (twig_length_filter($this->env, $context["item2"])) {
                            // line 7
                            echo "\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["item2"]);
                            foreach ($context['_seq'] as $context["key3"] => $context["item3"]) {
                                // line 8
                                echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"";
                                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                                echo "[";
                                echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["key3"], "html", null, true);
                                echo "]\" value=\"";
                                echo twig_escape_filter($this->env, $context["item3"], "html", null, true);
                                echo "\">
\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key3'], $context['item3'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 10
                            echo "\t\t\t\t\t";
                        } else {
                            // line 11
                            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                            echo "]\" value=\"";
                            echo twig_escape_filter($this->env, $context["item2"], "html", null, true);
                            echo "\">
\t\t\t\t\t";
                        }
                        // line 13
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key2'], $context['item2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t\t<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                    echo "\">
\t\t\t";
                }
                // line 17
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t<select name=\"sort\" onchange=\"this.form.submit()\" title=\"";
            echo twig_escape_filter($this->env, lang("Select sort method"), "html", null, true);
            echo "\" class=\"form-control\" style=\"width: auto\">
\t\t\t<option value=\"newest\" ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "sort", array()) == "newest")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, lang("Newest"), "html", null, true);
            echo "</option>
\t\t\t<option value=\"oldest\" ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "sort", array()) == "oldest")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, lang("Oldest"), "html", null, true);
            echo "</option>
\t\t\t<option value=\"cheapest\" ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "sort", array()) == "cheapest")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, lang("Cheapest"), "html", null, true);
            echo "</option>
\t\t\t<option value=\"most_expensive\" ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "sort", array()) == "most_expensive")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, lang("Most expensive"), "html", null, true);
            echo "</option>
\t\t\t<option value=\"a-z\" ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "sort", array()) == "a-z")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, lang("A - Z"), "html", null, true);
            echo "</option>
\t\t\t<option value=\"z-a\" ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "sort", array()) == "z-a")) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, lang("Z - A"), "html", null, true);
            echo "</option>
\t\t\t";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "distance", array()) > 0)) {
                // line 26
                echo "\t\t\t\t<option value=\"nearest\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "sort", array()) == "nearest")) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, lang("Nearest"), "html", null, true);
                echo "</option>
\t\t\t\t<option value=\"farthest\" ";
                // line 27
                if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "sort", array()) == "farthest")) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, lang("Farthest"), "html", null, true);
                echo "</option>
\t\t\t";
            }
            // line 29
            echo "\t\t</select>
\t</form>
\t<div class=\"clearfix\"></div>
\t<br>
\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
                echo " <!--Zobacz wszytkie-->
\t\t<div class=\"offers ";
                // line 34
                if ((twig_get_attribute($this->env, $this->source, $context["offer"], "promoted", array()) && (((($context["levels"] ?? null) == 1) && (twig_get_attribute($this->env, $this->source, $context["offer"], "promotion_type", array()) == 1)) || ((($context["levels"] ?? null) == 2) && (twig_get_attribute($this->env, $this->source, $context["offer"], "promotion_type", array()) == 0))))) {
                    echo "promoted";
                }
                echo "\"itemscope itemtype=\"http://schema.org/Product\">
\t\t\t\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2 col-sm-3 text-center\"></a>";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, $context["offer"], "promoted", array()) && (((($context["levels"] ?? null) == 1) && (twig_get_attribute($this->env, $this->source, $context["offer"], "promotion_type", array()) == 1)) || ((($context["levels"] ?? null) == 2) && (twig_get_attribute($this->env, $this->source, $context["offer"], "promotion_type", array()) == 0))))) {
                    echo "<span class=\"promowaneP\"title=\"To ogłoszenie jest promowane\">promowane</span>";
                }
                echo "<!--<span class=\"promowane\">Test</span>tutaj pokazują sie na promowanych -->
\t\t\t\t\t<a href=\"";
                // line 38
                echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), twig_get_attribute($this->env, $this->source, $context["offer"], "slug", array())), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                echo "\" itemprop=\"url\"><img src=\"";
                if (twig_get_attribute($this->env, $this->source, $context["offer"], "thumb", array())) {
                    echo "upload/photos/";
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
                echo "no_image.png'\" itemprop=\"image\" class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["offer"], "thumb", array())) {
                    echo "img-zoom";
                }
                echo "\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-7 col-sm-5 overflow_hidden\"><!-- zobacz wszytkie-->
\t\t\t\t\t<h4><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), twig_get_attribute($this->env, $this->source, $context["offer"], "slug", array())), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                echo "\" class=\"main-color-2\"><span itemprop=\"name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                echo "</span></a></h4>
\t\t\t\t\t<p class=\"text-muted\" itemprop=\"disambiguatingDescription\">";
                // line 42
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["offer"], "description", array())), 0, 150), "html", null, true);
                if (strip_tags(twig_get_attribute($this->env, $this->source, $context["offer"], "description", array()))) {
                    echo "...";
                }
                echo "</p>
\t\t\t\t\t";
                // line 43
                if (twig_get_attribute($this->env, $this->source, $context["offer"], "distance", array())) {
                    echo "<p>";
                    echo twig_escape_filter($this->env, lang("Distance"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "distance", array()), 2, ".", ","), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, lang("km"), "html", null, true);
                    echo "</p>";
                }
                // line 44
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["offer"], "type_name", array()) || twig_get_attribute($this->env, $this->source, $context["offer"], "state_name", array()))) {
                    echo "<p class=\"main-color-1\">
\t\t\t\t\t\t";
                    // line 45
                    if (twig_get_attribute($this->env, $this->source, $context["offer"], "type_name", array())) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                        echo "?type=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "type_slug", array()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, lang("Offer type"), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "type_name", array()), "html", null, true);
                        echo "\" class=\"main-color-1\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "type_name", array()), "html", null, true);
                        echo "</a>";
                    }
                    // line 46
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["offer"], "type_name", array()) && twig_get_attribute($this->env, $this->source, $context["offer"], "state_name", array()))) {
                        echo " | ";
                    }
                    // line 47
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["offer"], "state_name", array())) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                        echo "?state=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "state_slug", array()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, lang("State"), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "state_name", array()), "html", null, true);
                        echo "\" class=\"main-color-1\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "state_name", array()), "html", null, true);
                        echo "</a>";
                    }
                    // line 48
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["offer"], "state2_name", array())) {
                        echo " | <a href=\"";
                        echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                        echo "?state=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "state_slug", array()), "html", null, true);
                        echo "&state2=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "state2_slug", array()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "state2_name", array()), "html", null, true);
                        echo "\" class=\"main-color-1\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "state2_name", array()), "html", null, true);
                        echo "</a>";
                    }
                    // line 49
                    echo "\t\t\t\t\t</p>";
                }
                // line 50
                echo "\t\t\t\t</div> <!--Data cena rodzaj promowanie-->
\t\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t\t<div class=\"offers_date text-center small\"><p>";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "date_start", array()), "d-m-Y"), "html", null, true);
                echo "</p></div>
\t\t\t\t\t";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["offer"], "category_name", array())) {
                    echo "<div class=\"offers_category text-center\"><p><a href=\"";
                    echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                    echo "?category=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "category_id", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, lang("Category"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "category_name", array()), "html", null, true);
                    echo "\"><strong itemprop=\"category\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "category_name", array()), "html", null, true);
                    echo "</strong></a></p></div>";
                }
                // line 54
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["offer"], "price_free", array())) {
                    // line 55
                    echo "\t\t\t\t\t\t<div class=\"offers_price text-center\"><p><strong>";
                    echo twig_escape_filter($this->env, lang("For free"), "html", null, true);
                    echo "</strong></p></div>
\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 56
$context["offer"], "price", array()) > 0)) {
                    // line 57
                    echo "\t\t\t\t\t\t<div class=\"offers_price text-center\"><p><strong>";
                    echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, $context["offer"], "price", array())), "html", null, true);
                    echo "</strong></p>";
                    if (twig_get_attribute($this->env, $this->source, $context["offer"], "price_negotiate", array())) {
                        echo "<p class=\"small\">(";
                        echo twig_escape_filter($this->env, lang("to negotiate"), "html", null, true);
                        echo ")</p>";
                    }
                    echo "</div>
\t\t\t\t\t";
                }
                // line 58
                echo "<!--promowanie-->

\t\t\t\t\t\t<!--<div class=\"promujA\"title=\"Wejdź na swoje ogłoszenie!\">Promuj ogłoszenie</div>   
\t\t\t\t\t\t\tPromowanie ogłoszenia-->
\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
                // line 65
                if ((($context["controller"] ?? null) == "my_offers")) {
                    // line 66
                    echo "\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<a href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, path("add"), "html", null, true);
                    echo "/?add_similar=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, lang("Add similar"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-success\">";
                    echo twig_escape_filter($this->env, lang("Add similar"), "html", null, true);
                    echo "</a>

\t\t\t\t\t\t<a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, path("edit", twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), twig_get_attribute($this->env, $this->source, $context["offer"], "slug", array())), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, lang("Edit offer"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-info\">";
                    echo twig_escape_filter($this->env, lang("Edit"), "html", null, true);
                    echo "</a>

\t\t\t\t\t\t<button title=\"";
                    // line 71
                    echo twig_escape_filter($this->env, lang("Finish offer"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-warning ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["offer"], "active", array())) {
                        echo "disabled";
                    }
                    echo "\" data-toggle=\"modal\" data-target=\"#finish_offer_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, lang("Finish"), "html", null, true);
                    echo "</button>

\t\t\t\t\t\t<button title=\"";
                    // line 73
                    echo twig_escape_filter($this->env, lang("Delete offer"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-danger\" data-toggle=\"modal\" data-target=\"#remove_offer_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), "html", null, true);
                    echo "\"
\t\t\t\t\t\t>";
                    // line 74
                    echo twig_escape_filter($this->env, lang("Delete"), "html", null, true);
                    echo "</button>

\t\t\t\t\t\t";
                    // line 76
                    if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "allow_refresh_offer", array())) {
                        // line 77
                        echo "\t\t\t\t\t\t\t<button title=\"";
                        echo twig_escape_filter($this->env, lang("Refresh offer"), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                        echo "\" class=\"btn btn-sm btn-primary ";
                        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offer"], "refresh", array()), "active", array())) {
                            echo "disabled";
                        }
                        echo "\"  data-toggle=\"modal\" data-target=\"#refresh_offer_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, lang("Refresh offer"), "html", null, true);
                        echo "</button>
\t\t\t\t\t\t\t";
                        // line 78
                        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offer"], "refresh", array()), "active", array())) {
                            // line 79
                            echo "\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offer"], "refresh", array()), "not_confirmed", array())) {
                                // line 80
                                echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
                                echo twig_escape_filter($this->env, lang("Offer is not approved"), "html", null, true);
                                echo "</span>
\t\t\t\t\t\t\t\t";
                            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 81
$context["offer"], "refresh", array()), "must_payed", array())) {
                                // line 82
                                echo "\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
                                echo twig_escape_filter($this->env, lang("You must pay for offer"), "html", null, true);
                                echo "</span>
\t\t\t\t\t\t\t\t";
                            } else {
                                // line 84
                                echo "\t\t\t\t\t\t\t\t\t<span>";
                                echo twig_escape_filter($this->env, lang("Available for"), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offer"], "refresh", array()), "days", array()), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, lang("days"), "html", null, true);
                                echo "</span>
\t\t\t\t\t\t\t\t";
                            }
                            // line 86
                            echo "\t\t\t\t\t\t\t";
                        } elseif ( !twig_get_attribute($this->env, $this->source, $context["offer"], "active", array())) {
                            // line 87
                            echo "\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
                            echo twig_escape_filter($this->env, lang("Offer is inactive"), "html", null, true);
                            echo "</span>
\t\t\t\t\t\t\t";
                        }
                        // line 89
                        echo "\t\t\t\t\t\t";
                    }
                    // line 90
                    echo "\t\t\t\t\t</div>

\t\t\t\t\t";
                    // line 92
                    if (twig_get_attribute($this->env, $this->source, $context["offer"], "active", array())) {
                        // line 93
                        echo "\t\t\t\t\t\t<div class=\"modal fade\" id=\"finish_offer_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\">";
                        // line 97
                        echo twig_escape_filter($this->env, lang("Finish offer"), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                        echo "</h5>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<form method=\"post\" class=\"form\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"finish_offer\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                        // line 102
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                        // line 103
                        echo twig_escape_filter($this->env, generateToken("finish_offer"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>";
                        // line 105
                        echo twig_escape_filter($this->env, lang("Are you sure you want to finish offer"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                        echo "?</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" value=\"";
                        // line 108
                        echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-warning\" value=\"";
                        // line 109
                        echo twig_escape_filter($this->env, lang("Finish"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 116
                    echo "\t\t\t\t\t<div class=\"modal fade\" id=\"remove_offer_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\">";
                    // line 120
                    echo twig_escape_filter($this->env, lang("Delete offer"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                    echo "</h5>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<form method=\"post\" class=\"form\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"remove_offer\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                    // line 125
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                    // line 126
                    echo twig_escape_filter($this->env, generateToken("remove_offer"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 128
                    echo twig_escape_filter($this->env, lang("Are you sure you want to delete offer"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                    echo "?</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" value=\"";
                    // line 131
                    echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                    // line 132
                    echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    // line 138
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offer"], "refresh", array()), "active", array())) {
                        // line 139
                        echo "\t\t\t\t\t\t<div class=\"modal fade\" id=\"refresh_offer_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\">";
                        // line 143
                        echo twig_escape_filter($this->env, lang("Refresh offer"), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                        echo "</h5>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<form method=\"post\" class=\"form\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"refresh_offer\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                        // line 148
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                        // line 149
                        echo twig_escape_filter($this->env, generateToken("refresh_offer"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>";
                        // line 151
                        echo twig_escape_filter($this->env, lang("Are you sure to refresh offer"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                        echo "?</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" value=\"";
                        // line 154
                        echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"";
                        // line 155
                        echo twig_escape_filter($this->env, lang("Refresh offer"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 162
                    echo "
\t\t\t\t";
                } elseif ((                // line 163
($context["controller"] ?? null) == "clipboard")) {
                    // line 164
                    echo "\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"clipboard_remove\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                    // line 167
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                    // line 168
                    echo twig_escape_filter($this->env, generateToken("clipboard_remove"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
                    // line 169
                    echo twig_escape_filter($this->env, lang("Remove from clipboard"), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-sm\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 173
                echo "\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "\t<br>
\t";
            // line 177
            $this->loadTemplate("pagination.tpl", "offers.tpl", 177)->display($context);
        } else {
            // line 179
            echo "\t<h3 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Nothing found"), "html", null, true);
            echo "</h3>
";
        }
    }

    public function getTemplateName()
    {
        return "offers.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 179,  669 => 177,  666 => 176,  658 => 173,  651 => 169,  647 => 168,  643 => 167,  638 => 164,  636 => 163,  633 => 162,  623 => 155,  619 => 154,  611 => 151,  606 => 149,  602 => 148,  592 => 143,  584 => 139,  582 => 138,  573 => 132,  569 => 131,  561 => 128,  556 => 126,  552 => 125,  542 => 120,  534 => 116,  524 => 109,  520 => 108,  512 => 105,  507 => 103,  503 => 102,  493 => 97,  485 => 93,  483 => 92,  479 => 90,  476 => 89,  470 => 87,  467 => 86,  457 => 84,  451 => 82,  449 => 81,  444 => 80,  441 => 79,  439 => 78,  424 => 77,  422 => 76,  417 => 74,  409 => 73,  394 => 71,  383 => 69,  370 => 67,  367 => 66,  365 => 65,  356 => 58,  344 => 57,  342 => 56,  337 => 55,  334 => 54,  320 => 53,  316 => 52,  312 => 50,  309 => 49,  294 => 48,  279 => 47,  274 => 46,  260 => 45,  255 => 44,  245 => 43,  238 => 42,  230 => 41,  198 => 38,  192 => 37,  184 => 34,  178 => 33,  172 => 29,  163 => 27,  154 => 26,  152 => 25,  144 => 24,  136 => 23,  128 => 22,  120 => 21,  112 => 20,  104 => 19,  99 => 18,  93 => 17,  85 => 15,  82 => 14,  76 => 13,  66 => 11,  63 => 10,  48 => 8,  43 => 7,  40 => 6,  35 => 5,  32 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "offers.tpl", "/home/platne/serwer24113/public_html/views/default/offers.tpl");
    }
}
