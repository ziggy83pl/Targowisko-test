<?php

/* index.html */
class __TwigTemplate_410966ecb0205d605ed8b3ff5ed8fcc4c07a2ae441b097798860b153e0454153 extends Twig_Template
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
        echo "
<div class=\"page_box\">
\t</div>
\t<!-- ";
        // line 8
        if (($context["slider"] ?? null)) {
            // line 9
            echo "\t\t<div id=\"slider\" class=\"carousel slide carousel-fade d-none d-md-block\" data-ride=\"carousel\">
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 12
                echo "\t\t\t\t\t<div class=\"carousel-item ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                    echo "active";
                }
                echo "\">
\t\t\t\t\t\t";
                // line 13
                echo $context["slide"];
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t</div>
\t\t\t";
            // line 17
            if ((twig_length_filter($this->env, ($context["slider"] ?? null)) > 1)) {
                // line 18
                echo "\t\t\t\t<a class=\"carousel-control-prev\" href=\"#slider\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"carousel-control-next\" href=\"#slider\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t</a>
\t\t\t";
            }
            // line 27
            echo "\t\t</div>
\t";
        }
        // line 28
        echo " -->
    \t
\t";
        // line 30
        $this->loadTemplate("search_main.tpl", "index.html", 30)->display($context);
        // line 31
        echo "\t<div class=\"cities\"title=\"Popularne miasta\">\t\t\t\t
\t\t<div class=\"Mc-1\">
\t\t   <div><a href=\"https://targowisko.org/s-mazowieckie/warszawa\" title=\"Warszawa\" >Warszawa</a></div>
\t\t   <div><a href=\"https://targowisko.org/s-malopolskie/krakow\" title=\"Kraków\">Kraków</a></div>
\t\t   <div><a href=\"https://targowisko.org/s-lodzkie/lodz\" title=\"Łódź\">Łódź</a></div>
\t\t   <div><a href=\"https://targowisko.org/s-dolnoslaski/wroclaw\" title=\"Wrocław\">Wrocław</a></div>
\t\t   <div><a href=\"https://targowisko.org/s-mazowieckie/ostroleka\" title=\"Wrocław\">Ostrołęka</a></div>\t\t\t\t\t\t   
\t\t</div>
\t\t<div class=\"Mc-2\">
\t\t\t<div><a href=\"https://targowisko.org/s-wielkopolskie/poznan\" title=\"Poznań\">Poznań</a></div>
\t\t\t<div><a href=\"https://targowisko.org/s-pomorskie/gdansk\" title=\"Gdańsk\">Gdańsk</a></div>
\t\t\t<div><a href=\"https://targowisko.org/s-zachodniopomorskie/szczecin\" title=\"Szczecin\">Szczecin</a></div>
\t\t\t<div><a href=\"https://targowisko.org/s-lubelskie/lublin\" title=\"Lublin\">Lublin</a></div>
\t\t\t<div><a href=\"https://targowisko.org/s-wielkopolskie/kalisz\" title=\"Lublin\">Kalisz</a></div>\t\t\t\t\t\t\t
\t\t</div>\t\t\t\t\t\t
\t\t<div class=\"Mc-3\">
\t\t\t<div><a href=\"https://targowisko.org/s-slaskie/katowice\" title=\"Katowice\">Katowice</a></div>
\t\t\t<div><a href=\"https://targowisko.org/s-podlaskie/bialystok\" title=\"Białystok\">Białystok</a></div>
\t\t\t<div><a href=\"https://targowisko.org/s-kujawsko-pomorskie/bydgoszcz\" title=\"Bydgoszcz\">Bydgoszcz</a></div>
\t\t\t<div><a href=\"https://targowisko.org/s-podlaskie/lomza\" title=\"Wrocław\">Łomża</a></div>
\t\t\t<div><a href=\"https://targowisko.org/s-swietokrzyskie/kielce\" title=\"Kielce\">Kielce</a></div>
\t\t</div>\t\t\t\t\t
\t\t<div class=\"Mc-4\">
\t\t   <div><a href=\"https://targowisko.org/s-warminsko-mazurskie/olsztyn\" title=\"Olsztyn\">Olsztyn</a></div>
\t\t   <div><a href=\"https://targowisko.org/s-podkarpackie/rzeszow\" title=\"Rzeszów\" >Rzeszów</a></div>
\t\t   <div><a href=\"https://targowisko.org/s-opolskie/opole\" title=\"Opole\">Opole</a></div>
\t\t   <div><a href=\"https://targowisko.org/s-lubuskie/zielona-gora\" title=\"Zielona Góra\">Zielona Góra</a></div>
\t\t   <div><a href=\"https://targowisko.org/s-opolskie/nysa\" title=\"Zielona Góra\">Nysa</a></div>
\t\t   <div class=\"clear: both\";></div>
\t\t</div>
\t\t<div class=\"Mc-5\">
\t\t<div class=\"text-center\"><a class=\"btn btn-1\" href=\"https://targowisko.org/wszystkie_miasta\" title=\"Wszystkie miasta\">Wszystkie miasta</a></div><br/>
\t\t<div class=\"text-center\"><a class=\"btn btn-1\" href=\"https://targowisko.org/dodaj_reklame\" title=\"Dodaj reklamę\">Dodaj reklamę</a></div>
\t\t<div class=\"clear: both\";></div>
\t\t</div>
\t</div>
\t<div id=\"sale\" class=\"sale_hidden\">
\t\t<a href=\"";
        // line 68
        echo twig_escape_filter($this->env, path("add"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Add offer"), "html", null, true);
        echo "\" class=\"sale\" ><i class=\"fas fa-plus\"></i></a></div>
\t";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "index_box_subcategories", array()) && ($context["categories"] ?? null))) {
            // line 70
            echo "\t\t<div id=\"index_categories\">
\t\t\t<nav class=\"container\">
\t\t\t\t\t<div class=\"wrapper\">
\t\t\t\t<div class=\"row\">\t\t\t
\t\t\t\t\t";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 75
                echo "\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 col-12 index_categories\"><a href=\"";
                echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                echo "?category=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Category"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\" class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "list_subcategories", array())) {
                    echo "index_show_subcategories";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "\">";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", array())) {
                    // line 76
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "thumb", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\"> ";
                }
                echo "<span class=\"name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "</span>

\t\t\t\t\t\t\t

\t\t\t\t\t\t</a></div>
\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t</div></div>
\t\t\t\t
\t\t\t\t";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 85
                echo "\t\t\t\t\t<div class=\"index_subcategories col-12\" id=\"index_subcategory_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t<p>";
                // line 86
                echo twig_escape_filter($this->env, lang("See all offers in"), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                echo "?category=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Category"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\"><span class=\"name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_number_offers_in_categories", array())) {
                    echo " (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "number_offers", array()), "html", null, true);
                    echo ")</span>";
                }
                echo "</a></p>
\t\t\t\t\t\t";
                // line 87
                if (twig_get_attribute($this->env, $this->source, $context["item"], "list_subcategories", array())) {
                    // line 88
                    echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 90
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "list_subcategories", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                        // line 91
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 index_subcategories_list\"><a href=\"";
                        echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                        echo "?category=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item2"], "id", array()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, lang("Category"), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item2"], "name", array()), "html", null, true);
                        echo "\">> <span class=\"name\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item2"], "name", array()), "html", null, true);
                        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_number_offers_in_categories", array())) {
                            echo " (";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item2"], "number_offers", array()), "html", null, true);
                            echo ")";
                        }
                        echo "</span></a></div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 93
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t\t</nav>
\t\t</div>
\t";
        } else {
            // line 100
            echo "\t\t<br><br>
\t";
        }
        // line 102
        echo "\t
\t";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_1", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_1", array());
            echo "</div>";
        }
        // line 104
        echo "\t
\t";
        // line 105
        if (($context["offersRandom"] ?? null)) {
            // line 106
            echo "\t\t<div class=\"container\">
\t\t\t<div class=\"prom\">
\t\t\t<heder>
\t\t\t\t<h2 alt=\"ogłoszena promowane\" title=\"Wyróżnij swoje ogłoszenie.\">Ogłoszenia promowane</h2>
\t\t\t</heder></div>
\t\t\t";
            // line 111
            $this->loadTemplate("offers_index_random.tpl", "index.html", 111)->display($context);
            // line 112
            echo "\t\t\t<br><br>
\t\t\t<div class=\"btn-below\">
\t\t\t\t<!--Media social index-->
\t\t\t\t<div class=\"social\">
\t\t\t\t\t<!--Web sahre api-->
\t\t\t\t\t<a href=\"\" type=\"button\" role=\"button\"class=\"btn-floating btn-lg share-btn \"title=\"Powiedz przyjaciołom o nas.\"><i class=\"fas fa-share-alt\"></i></a>
\t\t\t\t\t<!--Facebook-->
\t\t\t\t\t<a class=\"btn-floating btn-lg btn-fb\" type=\"button\" role=\"button\" href=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "url_facebook", array()), "html", null, true);
            echo "\" target=\"_blank\" title=\"Facebook targowisko\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t\t\t<!--Twitter-->
\t\t\t\t\t<a href=\"https://twitter.com/home\" target=\"_blank\" title=\"Tweeer targowisko\"class=\"btn-floating btn-lg btn-tw\" type=\"button\" role=\"button\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t\t<!--Linkedin-->
\t\t\t\t\t<a href=\"https://www.linkedin.com/feed/\"target=\"_blank\" title=\"linkedin targowisko\" class=\"btn-floating btn-lg btn-li\" type=\"button\" role=\"button\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t\t\t<!--Instagram-->
\t\t\t\t\t<a  href=\"https://www.instagram.com/targowisko_org/\"target=\"_blank\"title=\"Instagram targowisko\"class=\"btn-floating btn-lg btn-ins\" type=\"button\" role=\"button\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t<!--Pinterest-->
\t\t\t\t\t<a href=\"https://pl.pinterest.com/pin/create/button/\"target=\"_blank\"title=\"Pinterest targowisko\" class=\"btn-floating btn-lg btn-pin\" type=\"button\" role=\"button\"><i class=\"fab fa-pinterest\"></i></a>
\t\t\t\t</div></br></br>
\t\t\t<div class=\"btn-best\">
\t\t\t<div class=\"text-center\">\t\t\t\t\t
\t\t\t\t<a href=\"";
            // line 131
            echo twig_escape_filter($this->env, path("offers"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Search the best offers"), "html", null, true);
            echo "\" class=\"btn btn-1\">";
            echo twig_escape_filter($this->env, lang("See all offers"), "html", null, true);
            echo "</a>
\t\t\t</div></div>
\t\t\t</div>
\t</div>\t\t
\t";
        }
        // line 136
        echo "\t\t
\t";
        // line 137
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_2", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_2", array());
            echo "</div>";
        }
        // line 138
        echo "\t
\t";
        // line 139
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "index_page", array())) {
            // line 140
            echo "\t\t<div id=\"index_text\">
\t\t\t<div class=\"container content\">
\t\t\t\t";
            // line 142
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "index_page", array());
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 146
        echo "\t
\t";
        // line 147
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_3", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_3", array());
            echo "</div>";
        }
        // line 148
        echo "\t
\t";
        // line 149
        if (($context["articles"] ?? null)) {
            // line 150
            echo "\t<div class=\"formmedia\">
\t\t<div class=\"container\">
\t\t\t<br><br><h3 class=\"text-center\">";
            // line 152
            echo twig_escape_filter($this->env, lang("Recent articles"), "html", null, true);
            echo "</h3>
\t\t\t<br><br>
\t\t\t";
            // line 154
            $this->loadTemplate("articles.tpl", "index.html", 154)->display($context);
            // line 155
            echo "\t\t</div>
\t\t</div>
\t";
        }
        // line 157
        echo "\t
\t";
        // line 158
        $this->loadTemplate("ads.tpl", "index.html", 158)->display($context);
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
        return array (  430 => 158,  427 => 157,  422 => 155,  420 => 154,  415 => 152,  411 => 150,  409 => 149,  406 => 148,  400 => 147,  397 => 146,  390 => 142,  386 => 140,  384 => 139,  381 => 138,  375 => 137,  372 => 136,  360 => 131,  345 => 119,  336 => 112,  334 => 111,  327 => 106,  325 => 105,  322 => 104,  316 => 103,  313 => 102,  309 => 100,  304 => 97,  297 => 95,  293 => 93,  271 => 91,  267 => 90,  263 => 88,  261 => 87,  242 => 86,  237 => 85,  233 => 84,  229 => 82,  202 => 76,  183 => 75,  166 => 74,  160 => 70,  158 => 69,  152 => 68,  113 => 31,  111 => 30,  107 => 28,  103 => 27,  92 => 18,  90 => 17,  87 => 16,  70 => 13,  63 => 12,  46 => 11,  42 => 9,  40 => 8,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/home/platne/serwer24113/public_html/views/default/index.html");
    }
}
