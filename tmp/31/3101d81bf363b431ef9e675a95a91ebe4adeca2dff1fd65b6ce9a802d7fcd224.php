<?php

/* offers.html */
class __TwigTemplate_0d04d8fd8a94f9440d6c820bb4a35112cd5743b54ac5845fc9bfb449f477f603 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "offers.html", 2);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
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
    public function block_javascript($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps", array()) && ($context["offers_show_map"] ?? null))) {
            // line 7
            echo "\t\t<script>
\t\t\tfunction displayMap() {
\t\t\t\tautocomplete = new google.maps.places.Autocomplete((document.getElementById('search_main_address')), {types: ['geocode']});
\t\t\t\tautocomplete2 = new google.maps.places.Autocomplete((document.getElementById('search_box_address')), {types: ['geocode']});
\t\t\t\tlet map = new google.maps.Map(document.getElementById('google_maps'), {
\t\t\t\t\tcenter: new google.maps.LatLng(";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_lat", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_long", array()), "html", null, true);
            echo "),
\t\t\t\t\tzoom: 6,
\t\t\t\t\tmapTypeId: google.maps.MapTypeId.ROADMAP,
\t\t\t\t\tscrollwheel:  false
\t\t\t\t});
\t\t\t\tlet locations = [
\t\t\t\t\t";
            // line 18
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
                // line 19
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["offer"], "address_lat", array()) && twig_get_attribute($this->env, $this->source, $context["offer"], "address_long", array()))) {
                    // line 20
                    echo "\t\t\t\t\t\t\t{name:'";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                    echo "', lat:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "address_lat", array()), "html", null, true);
                    echo ", long:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "address_long", array()), "html", null, true);
                    echo ", index:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                    echo ", content:'<a href=\"";
                    echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, $context["offer"], "id", array()), twig_get_attribute($this->env, $this->source, $context["offer"], "slug", array())), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                    echo "\"><p class=\"google_maps_p\">";
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), 0, 40), "html", null, true);
                    echo "</p>";
                    if (twig_get_attribute($this->env, $this->source, $context["offer"], "thumb", array())) {
                        echo "<img src=\"upload/photos/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "thumb", array()), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", array()), "html", null, true);
                        echo "\" onerror=\"this.src=\\'";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
                        echo "/views/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
                        echo "/images/no_image.png\\'\" class=\"google_maps_img\">";
                    }
                    echo "</a>'}";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                        echo ",";
                    }
                    // line 21
                    echo "\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t";
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
            // line 23
            echo "\t\t\t\t]
\t\t\t\tlet point, before_infoWindows;
\t\t\t\tlet bounds = new google.maps.LatLngBounds();
\t\t\t\tlet markers = [];
\t\t\t\tfor (i = 0; i < locations.length; i++) {
\t\t\t\t\tlatlngset = new google.maps.LatLng(locations[i].lat, locations[i].long);
\t\t\t\t\tlet punkt = new google.maps.Marker({
\t\t\t\t\t\tmap: map, title: locations[i].name, position: latlngset
\t\t\t\t\t});
\t\t\t\t\tmarkers.push(punkt);
\t\t\t\t\tlet content = locations[i].content;
\t\t\t\t\tlet infowindow = new google.maps.InfoWindow()
\t\t\t\t\tgoogle.maps.event.addListener(punkt,'click', (function(punkt,content,infowindow){
\t\t\t\t\t\treturn function() {
\t\t\t\t\t\t\tif(before_infoWindows){
\t\t\t\t\t\t\t\tbefore_infoWindows.close();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tinfowindow.setContent(content);
\t\t\t\t\t\t\tinfowindow.open(map,punkt);
\t\t\t\t\t\t\tbefore_infoWindows = infowindow;
\t\t\t\t\t\t};
\t\t\t\t\t})(punkt,content,infowindow));
\t\t\t\t\tbounds.extend(punkt.position);
\t\t\t\t}
\t\t\t\tgoogle.maps.event.addListener(map, 'zoom_changed', function() {
\t\t\t\t\tzoomChangeBoundsListener =
\t\t\t\t\t\tgoogle.maps.event.addListener(map, 'bounds_changed', function(event) {
\t\t\t\t\t\t\tif (this.getZoom() > 16 && this.initialZoom == true) {
\t\t\t\t\t\t\t\tthis.setZoom(16);
\t\t\t\t\t\t\t\tthis.initialZoom = false;
\t\t\t\t\t\t\t}
\t\t\t\t\t\tgoogle.maps.event.removeListener(zoomChangeBoundsListener);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\tmap.initialZoom = true;
\t\t\t\tmap.fitBounds(bounds);
\t\t\t\tlet markerCluster = new MarkerClusterer(map, markers, {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
\t\t\t}
\t\t</script>
\t\t<script src=\"https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js\"></script>
\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_api", array()), "html", null, true);
            echo "&v=3.exp&libraries=places&callback=initGoogleMap\" async defer></script>
\t";
        }
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        // line 68
        echo "
<div class=\"page_box\" id=\"offers_page\">
\t<div class=\"container\">
\t\t<h1>";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "h1", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "h1", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, lang("Offers"), "html", null, true);
        }
        echo "</h1>
\t</div>
\t";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps", array()) && ($context["offers_show_map"] ?? null))) {
            // line 74
            echo "\t\t<div id=\"google_maps\"></div>
\t";
        }
        // line 76
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_1", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_1", array());
            echo "</div>";
        }
        // line 77
        echo "\t<br>
\t<div class=\"container\">\t
\t\t<div class=\"row\">
\t\t\t";
        // line 80
        if (($context["breadcrumbs"] ?? null)) {
            // line 81
            echo "\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<nav class=\"breadcrumbs\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
\t\t\t\t\t\t<a href=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Main Page"), "html", null, true);
            echo "\" class=\"main-color-22\" itemprop=\"itemListElement\" >";
            echo twig_escape_filter($this->env, lang("Main Page"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 85
                echo "\t\t\t\t\t\t\t> <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "path", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\" class=\"main-color-23\" itemprop=\"itemListElement\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t";
        }
        // line 90
        echo "\t\t\t<div class=\"col-lg-3\">
\t\t\t\t";
        // line 91
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_side_1", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_side_1", array());
            echo "</div>";
        }
        // line 92
        echo "
\t\t\t\t<div class=\"d-block d-lg-none text-center\">
\t\t\t\t\t<button data-toggle=\"collapse\" data-target=\"#form_search_offers\" class=\"btn btn-outline-primary\">";
        // line 94
        echo twig_escape_filter($this->env, lang("Show / hide search box"), "html", null, true);
        echo "</button><br><br>
\t\t\t\t</div>
\t\t\t\t<form class=\"form-search collapse show\" method=\"get\" id=\"form_search_offers\">
\t\t\t\t\t<input type=\"hidden\" name=\"search\">
\t\t\t\t\t";
        // line 98
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "category", array()) > 0)) {
            // line 99
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"category\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "category", array()), "html", null, true);
            echo "\">
\t\t\t\t\t";
        }
        // line 101
        echo "\t\t\t\t\t";
        if (($context["categories"] ?? null)) {
            // line 102
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t<h4>";
            // line 104
            echo twig_escape_filter($this->env, lang("Categories"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 105
            echo twig_escape_filter($this->env, path("offers"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Main Page"), "html", null, true);
            echo "\" class=\"float-right\"><i class=\"fas fa-home\"></i></a>
\t\t\t\t\t\t\t\t\t";
            // line 106
            if (($context["overCategory"] ?? null)) {
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["overCategory"] ?? null), "search_path", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["overCategory"] ?? null), "name", array()), "html", null, true);
                echo "\" class=\"float-right\"><i class=\"fas fa-arrow-up\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 112
                echo "\t\t\t\t\t\t\t\t\t<li ";
                if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "category", array()) == twig_get_attribute($this->env, $this->source, $context["cat"], "id", array()))) {
                    echo "class=\"active\"";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "search_path", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Category"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", array()), "html", null, true);
                echo "\">";
                if (twig_get_attribute($this->env, $this->source, $context["cat"], "thumb", array())) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "thumb", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", array()), "html", null, true);
                    echo "\"> ";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", array()), "html", null, true);
                if ((((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_number_offers_in_categories", array()) &&  !twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "search", array(), "any", true, true)) &&  !twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "state", array())) &&  !twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "type", array()))) {
                    echo " <span class=\"badge badge-secondary\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "number_offers", array()), "html", null, true);
                    echo "</span>";
                }
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "username", array())) {
            // line 119
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\" class=\"control-label\">";
            // line 120
            echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
            echo ": </label>
\t\t\t\t\t\t\t<select name=\"username\" id=\"username\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 122
            echo twig_escape_filter($this->env, lang("All users"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "username", array()), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "username", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 127
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_keywords", array())) {
            // line 128
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"keywords\" class=\"control-label\">";
            // line 129
            echo twig_escape_filter($this->env, lang("Keywords"), "html", null, true);
            echo ": </label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"keywords\" id=\"keywords\" placeholder=\"";
            // line 130
            echo twig_escape_filter($this->env, lang("Enter your keywords..."), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Enter your keywords..."), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "keywords", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"exact_phrase\" ";
            // line 132
            if (twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "exact_phrase", array())) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, lang("Exact phrase"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 136
        echo "\t\t\t\t\t";
        if (($context["types"] ?? null)) {
            // line 137
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"type\" class=\"control-label\">";
            // line 138
            echo twig_escape_filter($this->env, lang("Offer type"), "html", null, true);
            echo ":</label>
\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"type\" value=\"\" ";
            // line 140
            if ( !twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "type", array())) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, lang("All"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 143
                echo "\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"type\" value=\"";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "slug", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "type", array()) == twig_get_attribute($this->env, $this->source, $context["type"], "slug", array()))) {
                    echo "checked";
                }
                echo "> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", array()), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 149
        echo "\t\t\t\t\t";
        if (($context["states"] ?? null)) {
            // line 150
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"state\" class=\"control-label\">";
            // line 151
            echo twig_escape_filter($this->env, lang("State"), "html", null, true);
            echo ":</label>
\t\t\t\t\t\t\t<select class=\"form-control select_state\" name=\"state\" id=\"state\" title=\"";
            // line 152
            echo twig_escape_filter($this->env, lang("Select the appropriate state"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 153
            echo twig_escape_filter($this->env, lang("All"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t<option disabled>──────────</option>
\t\t\t\t\t\t\t\t";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 156
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "slug", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "state", array()) == twig_get_attribute($this->env, $this->source, $context["state"], "slug", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["state"]) {
                // line 161
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["state"], "states", array())) {
                    // line 162
                    echo "\t\t\t\t\t\t\t\t<div class=\"form-group substates substate_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "slug", array()), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "state", array()) != twig_get_attribute($this->env, $this->source, $context["state"], "slug", array()))) {
                        echo "style=\"display: none\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"state2\" title=\"";
                    // line 163
                    echo twig_escape_filter($this->env, lang("Select the appropriate state"), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "state", array()) != twig_get_attribute($this->env, $this->source, $context["state"], "slug", array()))) {
                        echo "disabled";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 164
                    echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    // line 165
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["state"], "states", array()));
                    foreach ($context['_seq'] as $context["key2"] => $context["state2"]) {
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state2"], "slug", array()), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "state2", array()) == twig_get_attribute($this->env, $this->source, $context["state2"], "slug", array()))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state2"], "name", array()), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key2'], $context['state2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "\t\t\t\t\t";
        }
        // line 173
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_address", array())) {
            // line 174
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"form-control btn btn-1 text-uppercase\"><i class=\"fas fa-search\"></i> ";
            // line 175
            echo twig_escape_filter($this->env, lang("Search"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"search_box_address\">";
            // line 178
            echo twig_escape_filter($this->env, lang("Address"), "html", null, true);
            echo ":</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"address\" class=\"form-control\" placeholder=\"";
            // line 179
            echo twig_escape_filter($this->env, lang("1600 Pennsylvania Avenue NW, Washington, D.C. 20500"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Enter the address"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "address", array()), "html", null, true);
            echo "\" id=\"search_box_address\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 181
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_distance", array()) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_api", array()))) {
                // line 182
                echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"form-inline text-right\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">";
                // line 186
                echo twig_escape_filter($this->env, lang("Distance"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"distance\" class=\"form-control text-right\" placeholder=\"20\" title=\"";
                // line 188
                echo twig_escape_filter($this->env, lang("Enter the distance from the searched address"), "html", null, true);
                echo "\" value=\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "distance", array()) >= 0)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "distance", array()), "html", null, true);
                } else {
                    echo "10";
                }
                echo "\" min=\"0\" step=\"1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">";
                // line 190
                echo twig_escape_filter($this->env, lang("km"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 196
            echo "\t\t\t\t\t";
        }
        // line 197
        echo "\t\t\t\t\t";
        if (($context["search_show_price"] ?? null)) {
            // line 198
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"search_price_from\" class=\"control-label\">";
            // line 199
            echo twig_escape_filter($this->env, lang("Price"), "html", null, true);
            echo ": </label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control text-right\" type=\"number\" name=\"price_from\" id=\"search_price_from\" placeholder=\"";
            // line 201
            echo twig_escape_filter($this->env, lang("Min..."), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Enter the min value"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "price_from", array()), "html", null, true);
            echo "\" min=\"0\" step=\"0.01\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"> - </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input class=\"form-control text-right\" type=\"number\" name=\"price_to\" id=\"search_price_to\" placeholder=\"";
            // line 205
            echo twig_escape_filter($this->env, lang("Max..."), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Enter the max value"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "price_to", array()), "html", null, true);
            echo "\" min=\"0\" step=\"0.01\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 209
        echo "\t\t\t\t\t";
        if (($context["options"] ?? null)) {
            // line 210
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 211
                echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"options[";
                // line 212
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", array()), "html", null, true);
                echo "]\" class=\"control-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", array()), "html", null, true);
                echo ": </label>
\t\t\t\t\t\t\t\t";
                // line 213
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "kind", array()) == "text")) {
                    // line 214
                    echo "\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"options[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", array()), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "options", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["option"], "id", array())] ?? null) : null), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 215
$context["option"], "kind", array()) == "number")) {
                    // line 216
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control text-right\" type=\"number\" name=\"options[";
                    // line 217
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", array()), "html", null, true);
                    echo "][from]\" placeholder=\"";
                    echo twig_escape_filter($this->env, lang("Min..."), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, lang("Enter the min value"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "options", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["option"], "id", array())] ?? null) : null), "from", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"> - </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control text-right\" type=\"number\" name=\"options[";
                    // line 221
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", array()), "html", null, true);
                    echo "][to]\" placeholder=\"";
                    echo twig_escape_filter($this->env, lang("Max..."), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, lang("Enter the max value"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "options", array())) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["option"], "id", array())] ?? null) : null), "to", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                } elseif ((((twig_get_attribute($this->env, $this->source,                 // line 223
$context["option"], "kind", array()) == "select") || (twig_get_attribute($this->env, $this->source, $context["option"], "kind", array()) == "checkbox")) && twig_get_attribute($this->env, $this->source, $context["option"], "choices", array()))) {
                    // line 224
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"group_checkbox\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 225
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "choices", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                        // line 226
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"options[";
                        // line 227
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", array()), "html", null, true);
                        echo "][]\" value=\"";
                        echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                        echo "\" ";
                        if (twig_in_filter($context["choice"], (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "options", array())) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["option"], "id", array())] ?? null) : null))) {
                            echo "checked";
                        }
                        echo "> ";
                        echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 230
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 232
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "\t\t\t\t\t";
        }
        // line 235
        echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"reset\" class=\"reset_form form-control btn btn-danger text-uppercase\"><i class=\"fas fa-eraser\"></i> ";
        // line 236
        echo twig_escape_filter($this->env, lang("Clear"), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"submit\" class=\"form-control btn btn-1 text-uppercase\"><i class=\"fas fa-search\"></i> ";
        // line 239
        echo twig_escape_filter($this->env, lang("Search"), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</form>

\t\t\t\t";
        // line 243
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_side_2", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_side_2", array());
            echo "</div>";
        }
        // line 244
        echo "\t\t\t</div>
\t\t\t<div class=\"col-lg-9\">
\t\t\t\t";
        // line 246
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "content", array())) {
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "content", array());
        }
        // line 247
        echo "\t\t\t\t";
        $this->loadTemplate("offers.tpl", "offers.html", 247)->display($context);
        // line 248
        echo "\t\t\t<!--<div class=\"addL\" title=\"Dodaj reklamę Lokalną.\">Dodaj reklamę lokalną.\"Już wktótce!\"</div></br>-->
\t\t\t\t";
        // line 249
        $this->loadTemplate("ads.tpl", "offers.html", 249)->display($context);
        // line 250
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div>1</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "offers.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  782 => 250,  780 => 249,  777 => 248,  774 => 247,  770 => 246,  766 => 244,  760 => 243,  753 => 239,  747 => 236,  744 => 235,  741 => 234,  734 => 232,  730 => 230,  713 => 227,  710 => 226,  706 => 225,  703 => 224,  701 => 223,  690 => 221,  677 => 217,  674 => 216,  672 => 215,  665 => 214,  663 => 213,  657 => 212,  654 => 211,  649 => 210,  646 => 209,  635 => 205,  624 => 201,  619 => 199,  616 => 198,  613 => 197,  610 => 196,  601 => 190,  590 => 188,  585 => 186,  579 => 182,  577 => 181,  568 => 179,  564 => 178,  558 => 175,  555 => 174,  552 => 173,  549 => 172,  543 => 171,  538 => 168,  523 => 166,  519 => 165,  515 => 164,  507 => 163,  498 => 162,  495 => 161,  491 => 160,  487 => 158,  472 => 156,  468 => 155,  463 => 153,  459 => 152,  455 => 151,  452 => 150,  449 => 149,  445 => 147,  430 => 144,  427 => 143,  423 => 142,  414 => 140,  409 => 138,  406 => 137,  403 => 136,  392 => 132,  383 => 130,  379 => 129,  376 => 128,  373 => 127,  364 => 123,  360 => 122,  355 => 120,  352 => 119,  349 => 118,  343 => 114,  312 => 112,  308 => 111,  304 => 109,  296 => 107,  294 => 106,  288 => 105,  284 => 104,  280 => 102,  277 => 101,  271 => 99,  269 => 98,  262 => 94,  258 => 92,  252 => 91,  249 => 90,  244 => 87,  231 => 85,  227 => 84,  219 => 83,  215 => 81,  213 => 80,  208 => 77,  201 => 76,  197 => 74,  195 => 73,  186 => 71,  181 => 68,  178 => 67,  171 => 63,  129 => 23,  115 => 22,  112 => 21,  81 => 20,  78 => 19,  61 => 18,  50 => 12,  43 => 7,  41 => 6,  36 => 5,  33 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "offers.html", "/home/platne/serwer24113/public_html/views/default/offers.html");
    }
}
