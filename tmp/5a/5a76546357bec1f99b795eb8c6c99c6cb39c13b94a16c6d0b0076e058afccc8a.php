<?php

/* add.html */
class __TwigTemplate_92a607fb4730bc6d37625cbf832ad7eed06dd45973adbaed887e44c8d9d62051 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "add.html", 2);
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
\t<script src=\"js/angular.min.js\"></script>
\t<script src=\"js/ckeditor/ckeditor.js\"></script>
\t<script src=\"js/jquery-sortable.js\"></script>
\t<script>
\t\tvar photo_max = ";
        // line 10
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "photo_max", array()), "js"), "html", null, true);
        echo ";
\t\tvar list_categories = list_options = [];
\t\tvar inputPrice = '';
\t\t";
        // line 13
        if (($context["offer"] ?? null)) {
            // line 14
            echo "\t\t\tlist_categories = ";
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "categories", array()));
            echo ";
\t\t\t";
            // line 15
            if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "options", array())) {
                echo "list_options = ";
                echo json_encode(twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "options", array()));
            }
            echo ";
\t\t\tinputPrice = '";
            // line 16
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price", array()), "js"), "html", null, true);
            echo "';
\t\t";
        }
        // line 18
        echo "\t\tvar required_category = \"";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_category", array()), "js"), "html", null, true);
        echo "\";
\t\tvar required_subcategory = \"";
        // line 19
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_subcategory", array()), "js"), "html", null, true);
        echo "\";
\t\tvar lang = {'Photo limit exceeded':\"";
        // line 20
        echo twig_escape_filter($this->env, lang("Photo limit exceeded"), "html", null, true);
        echo "\"};
\t</script>
\t<script src=\"views/";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
        echo "/js/add.js?";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "assets_version", array()), "html", null, true);
        echo "\"></script>
\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps", array())) {
            // line 24
            echo "\t\t<script>
\t\t\tvar google_maps, google_maps_marker;
\t\t\tfunction displayMap() {
\t\t\t\tautocomplete = new google.maps.places.Autocomplete((document.getElementById('add_address')), {types: ['geocode']});
\t\t\t\tgoogle.maps.event.addDomListener(window, \"load\", function() {
\t\t\t\t\t";
            // line 29
            if ((($context["offer"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_lat", array()) != 0) || (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_long", array()) != 0)))) {
                echo "var myLatlng = new google.maps.LatLng(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_lat", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_long", array()), "html", null, true);
                echo ");";
            }
            // line 30
            echo "\t\t\t\t\tgoogle_maps = new google.maps.Map(document.getElementById(\"google_maps\"), {
\t\t\t\t\t\tcenter: new google.maps.LatLng( ";
            // line 31
            if ((($context["offer"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_lat", array()) != 0) || (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_long", array()) != 0)))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_lat", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_long", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_lat", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_long", array()), "html", null, true);
            }
            echo "),
\t\t\t\t\t\tzoom: ";
            // line 32
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_zoom_add", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_zoom_add", array()), 8)) : (8)), "html", null, true);
            echo ",
\t\t\t\t\t\tscrollwheel:  false
\t\t\t\t\t});
\t\t\t\t\tgoogle_maps_marker = new google.maps.Marker({
\t\t\t\t\t\tdraggable: true,
\t\t\t\t\t\t";
            // line 37
            if ((($context["offer"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_lat", array()) != 0) || (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_long", array()) != 0)))) {
                echo "position: myLatlng,";
            }
            // line 38
            echo "\t\t\t\t\t\tmap: google_maps
\t\t\t\t\t});
\t\t\t\t\tgoogle.maps.event.addListener(google_maps_marker, 'dragend', function (event) {
\t\t\t\t\t\t\$('input[name=address_lat]').val(this.getPosition().lat());
\t\t\t\t\t\t\$('input[name=address_long]').val(this.getPosition().lng());
\t\t\t\t\t});
\t\t\t\t\tgoogle.maps.event.addListener(google_maps, 'click', function (mapEvent) {
\t\t\t\t\t\tgoogle_maps.panTo(mapEvent.latLng);
\t\t\t\t\t\tgoogle_maps_marker.setPosition(google_maps.getCenter());
\t\t\t\t\t\t\$('input[name=address_lat]').val(google_maps_marker.getPosition().lat());
\t\t\t\t\t\t\$('input[name=address_long]').val(google_maps_marker.getPosition().lng());
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t</script>
\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_api", array()), "html", null, true);
            echo "&v=3.exp&libraries=places&callback=initGoogleMap\" async defer></script>
\t";
        }
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        // line 58
        echo "<div class=\"page_box\">
\t<div class=\"container\" id=\"box_add_offer\">
\t\t<div class=\"text-center\">
\t\t\t";
        // line 61
        if ((($context["offer"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "add_similar", array()))) {
            // line 62
            echo "\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, lang("Edit offer"), "html", null, true);
            echo "</h1>
\t\t\t\t<h3>";
            // line 63
            echo twig_escape_filter($this->env, lang("Here you can edit offer"), "html", null, true);
            echo "</h3>
\t\t\t\t<h4><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", array()), twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "slug", array())), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "user_id", array())) {
                echo "?code=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "code", array()), "html", null, true);
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
            echo "\" class=\"text-primary\" target=\"_blank\">";
            echo twig_escape_filter($this->env, lang("See offer"), "html", null, true);
            echo "</a></h4>
\t\t\t\t<p><a href=\"#\" title=\"";
            // line 65
            echo twig_escape_filter($this->env, lang("Delete offer"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
            echo "\" class=\"text-danger\" data-toggle=\"modal\" data-target=\"#remove_offer\">";
            echo twig_escape_filter($this->env, lang("Delete offer"), "html", null, true);
            echo "</a></p>
\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, lang("Add offer"), "html", null, true);
            echo "</h1>
\t\t\t\t<h3>";
            // line 68
            echo twig_escape_filter($this->env, lang("Here you can add a new offer to the system"), "html", null, true);
            echo "</h3>
\t\t\t";
        }
        // line 70
        echo "\t\t</div>
\t\t";
        // line 71
        $this->loadTemplate("alert.tpl", "add.html", 71)->display($context);
        // line 72
        echo "\t\t<br>
\t\t<form method=\"post\" id=\"form_add_offer\" ng-app=\"addOffer\" ng-controller=\"addOffer\" action=\"\">
\t\t\t<input type=\"hidden\" name=\"action\" value=\"";
        // line 74
        if ((($context["offer"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "add_similar", array()))) {
            echo "edit";
        } else {
            echo "add";
        }
        echo "\">
\t\t\t<input type=\"hidden\" name=\"session_code\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["session_code"] ?? null), "html", null, true);
        echo "\">
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">";
        // line 77
        echo twig_escape_filter($this->env, lang("Title"), "html", null, true);
        echo ":<span class=\"text-danger\">&nbsp;*</span></label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"";
        // line 79
        echo twig_escape_filter($this->env, lang("My title..."), "html", null, true);
        echo "\" id=\"name\" maxlength=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "number_char_title", array()), "html", null, true);
        echo "\" required ";
        if (($context["offer"] ?? null)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
            echo "\" ng-init=\"inputName='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
            echo "'\"";
        }
        echo " title=\"";
        echo twig_escape_filter($this->env, lang("Enter the title"), "html", null, true);
        echo "\" ng-model=\"inputName\" ng-trim=\"false\">
\t\t\t\t\t<p class=\"text-muted small\" style=\"margin:2px 2px 0\">";
        // line 80
        echo twig_escape_filter($this->env, lang("Chars"), "html", null, true);
        echo ": ";
        echo "{{inputName ? inputName.length : 0}}";
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "number_char_title", array()), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 83
        if (($context["types"] ?? null)) {
            // line 84
            echo "\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"type_id\" class=\"col-sm-3 col-form-label\">";
            // line 85
            echo twig_escape_filter($this->env, lang("Offer type"), "html", null, true);
            echo ":";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_type", array())) {
                echo "<span class=\"text-danger\">&nbsp;*</span>";
            }
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"type_id\" id=\"type_id\" title=\"";
            // line 89
            echo twig_escape_filter($this->env, lang("Select the appropriate offer type"), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_type", array())) {
                echo "required";
            }
            echo ">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 90
            echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", array()), "html", null, true);
                echo "\" ";
                if ((($context["offer"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "type_id", array()) == twig_get_attribute($this->env, $this->source, $context["type"], "id", array())))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 100
        echo "\t\t\t<div class=\"form-group row\" ng-hide=\"list_categories == null || list_categories.length == 0\" ng-cloak>
\t\t\t\t<label for=\"category_id\" class=\"col-sm-3 col-form-label \">";
        // line 101
        echo twig_escape_filter($this->env, lang("Category"), "html", null, true);
        echo ":";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_category", array()) || twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_subcategory", array()))) {
            echo "<span class=\"text-danger\">&nbsp;*</span>";
        }
        echo "</label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t<div class=\"row\"><!--filter test-->
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\" ng-repeat=\"cat in list_categories\" style=\"margin-bottom:10px\"  id=\"select_category_";
        // line 104
        echo "{{cat.category_id}}";
        echo "'\"  data-category_id=\"";
        echo "{{cat.category_id}}";
        echo "'\">
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"category_id\" title=\"";
        // line 105
        echo twig_escape_filter($this->env, lang("Select the appropriate category"), "html", null, true);
        echo "\" ng-required=\"";
        echo "{{cat.required}}";
        echo "\" id=\"Select1\" ng-model=\"cat.selectCategory\" ng-change=\"loadCategories(";
        echo "{{cat.category_id}}";
        echo ",cat.selectCategory)\" >
\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 106
        echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"";
        // line 107
        echo "{{item.id}}";
        echo "\" ng-repeat=\"item in cat.categories track by \$index\">";
        echo "{{item.name}}";
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\" id=\"icon_load_categories\" ng-show=\"waiting_for_response\"><span class=\"fas fa-spinner fa-spinner-animate\"></span></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group row\" ng-repeat=\"item in list_options track by \$index\" ng-cloak>
\t\t\t\t<label for=\"options[";
        // line 116
        echo "{{item.id}}";
        echo "]\" class=\"col-sm-3  col-form-label \">";
        echo "{{item.name}}";
        echo ":<span class=\"text-danger\" ng-show=\"";
        echo "{{item.required}}";
        echo "\">&nbsp;*</span></label>
\t\t\t\t<div class=\"col-sm-9\" ng-switch on=\"item.kind\">
\t\t\t\t\t<input ng-switch-when=\"text\" class=\"form-control\" type=\"text\" name=\"options[";
        // line 118
        echo "{{item.id}}";
        echo "]\" ng-required=\"";
        echo "{{item.required}}";
        echo "\" ng-model=\"item.value\">
\t\t\t\t\t<input ng-switch-when=\"number\" class=\"form-control\" type=\"number\" name=\"options[";
        // line 119
        echo "{{item.id}}";
        echo "]\" ng-required=\"";
        echo "{{item.required}}";
        echo "\" ng-model=\"item.value\">
\t\t\t\t\t<select ng-switch-when=\"select\" class=\"form-control\" name=\"options[";
        // line 120
        echo "{{item.id}}";
        echo "]\" ng-required=\"";
        echo "{{item.required}}";
        echo "\" ng-model=\"item.value\">
\t\t\t\t\t\t<option value=\"\">";
        // line 121
        echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"";
        // line 122
        echo "{{item2}}";
        echo "\" ng-repeat=\"item2 in item.choices\">";
        echo "{{item2}}";
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t\t<div ng-switch-when=\"checkbox\" class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4\" ng-repeat=\"item2 in item.choices\"><label class=\"checkbox-inline\"><input type=\"checkbox\" name=\"options[";
        // line 125
        echo "{{item.id}}";
        echo "][]\" value=\"";
        echo "{{item2}}";
        echo "\" ng-checked=\"item.value.indexOf(item2) > -1\"> ";
        echo " {{item2}}";
        echo "</label></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group row\" ng-show=\"showPrice\">
\t\t\t\t<label for=\"price\" class=\"col-sm-3 col-form-label\">";
        // line 131
        echo twig_escape_filter($this->env, lang("Price"), "html", null, true);
        echo ":<span class=\"text-danger\" ng-show=\"requiredPrice\">&nbsp;*</span></label>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-9\" ng-model=\"inputPriceFree\">
\t\t\t\t\t<div ng-hide=\"inputPriceFree\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"price\" min=\"0\" max=\"100000000\" class=\"form-control\" step=\"0.01\" ";
        // line 135
        if (($context["offer"] ?? null)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price", array()), "html", null, true);
            echo "\"";
        }
        echo " ng-disabled=\"inputPriceFree || !showPrice\" ng-required=\"requiredPrice\" ng-model=\"inputPrice\"><div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div ng-show=\"inputPrice\">
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"price_negotiate\" ";
        // line 140
        if ((($context["offer"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price_negotiate", array()))) {
            echo "checked";
        }
        echo " ng-disabled=\"inputPriceFree || !showPrice || !inputPrice\"> ";
        echo twig_escape_filter($this->env, lang("To negotiate"), "html", null, true);
        echo "</label><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<label style=\"margin-top:5px\"><input type=\"checkbox\" name=\"price_free\" ";
        // line 143
        if ((($context["offer"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price_free", array()))) {
            echo "checked ng-init=\"inputPriceFree=true\"";
        }
        echo " ng-model=\"inputPriceFree\" ng-disabled=\"!showPrice\"> ";
        echo twig_escape_filter($this->env, lang("For free"), "html", null, true);
        echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 146
        if (( !($context["offer"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "add_similar", array()))) {
            // line 147
            echo "\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"type\" class=\"col-sm-3 col-form-label\">";
            // line 148
            echo twig_escape_filter($this->env, lang("The length of the display"), "html", null, true);
            echo ": </label>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-9\">
\t\t\t\t\t\t<select name=\"days\" class=\"form-control\" required onclick=\"document.getElementById('time').style.display='none'\">
\t\t\t\t\t\t\t";
            // line 151
            if (($context["offersDays"] ?? null)) {
                // line 152
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["offersDays"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                    // line 153
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "length", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, lang("days"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, $context["day"], "cost", array())), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 156
                echo "\t\t\t\t\t\t\t\t<option value=\"0\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "days_default", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, lang("days"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 158
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"days\" id=\"time\" title=\"Wybierz długość wyświetlania Twojego ogłoszenia przez dłuższy czas!\"><i class=\"fas fa-arrow-circle-left\"></i> Wybierz czas wyświetlania!</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 163
        echo "\t\t\t<hr>
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label for=\"description\" class=\"col-sm-3 col-form-label\">";
        // line 165
        echo twig_escape_filter($this->env, lang("Offer description"), "html", null, true);
        echo ":<div class=\"info1\" title=\"Zalety na Targowisko\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><div class=\"far fa-clock\"></div>
\t\t\t\t\t\t\tDodawanie ogłoszeń jest darmowe.</li>
\t\t\t\t\t\t<li><div class=\"far fa-check-circle\"></div>
\t\t\t\t\t\t\tBezpłatne odświeżanie ogłoszeń po 30 dniach.</li>
\t\t\t\t\t\t<li><div class=\"fab fa-product-hunt\"></div>
\t\t\t\t\t\t\tMożesz promować swoje ogłoszenie.</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t<li><div class=\"fas fa-chart-line\"></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\tDodaj reklamę swojej firmy!</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t</label>\t
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t<textarea id=\"description\" name=\"description\" class=\"form-control\" style=\"height: 150px\">";
        // line 181
        if (($context["offer"] ?? null)) {
            echo twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "description", array());
        }
        echo "</textarea>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "photo_add", array())) {
            // line 186
            echo "\t\t\t\t<hr>
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<div class=\"col-sm-3 col-form-label\">
\t\t\t\t\t\t<label>";
            // line 189
            echo twig_escape_filter($this->env, lang("Photos"), "html", null, true);
            echo ":</label>
\t\t\t\t\t\t";
            // line 190
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "photo_max", array())) {
                echo "<p class=\"small\">";
                echo twig_escape_filter($this->env, lang("Limit photos"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "photo_max", array()), "html", null, true);
                echo "</p>";
            }
            // line 191
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"progress\" id=\"photos_progress\">
\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%\">
\t\t\t\t\t\t\t\t0%
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\" id=\"photos_info\"></div>
\t\t\t\t\t\t<div id=\"preview_photos\">
\t\t\t\t\t\t\t";
            // line 200
            if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "photos", array())) {
                // line 201
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "photos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                    // line 202
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<img src=\"upload/photos/";
                    // line 203
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "folder", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "thumb", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "url", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<br><a href=\"#\" title=\"";
                    // line 204
                    echo twig_escape_filter($this->env, lang("Remove photo"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "url", array()), "html", null, true);
                    echo "\" class=\"remove_photo text-danger\">";
                    echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"photos[]\" value=\"";
                    // line 205
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "\t\t\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t\t\t<div id=\"preview_load\"><span class=\"fas fa-spinner fa-spinner-animate\"></span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div><!--add-->
\t\t\t\t\t\t<label for=\"input_select_photo\" class=\"custom-input_select_photo \"title=\"Tutaj możesz dodać zdjęcia\"></label>
\t\t\t\t\t\t<input class=\".custom-input_select_photo\" id=\"input_select_photo\" type=\"file\" name=\"zdjecie\" title=\"";
            // line 214
            echo twig_escape_filter($this->env, lang("Here you can add photos to the offer"), "html", null, true);
            echo "\" multiple accept=\"image/jpeg, image/png\" alt=\"Dodaj zdjęcie\" onclick=\"document.getElementById('info').style.display='none'\"></div>
\t\t\t\t\t\t<div id=\"info\" alt=\"dodaj zdjęcia\" title=\"Będzie lepiej, gdy dodasz zdjęcia.\"></div>
\t\t\t\t\t\t<div style=\"clear:both;\"></div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t    
\t\t\t\t</div>
\t\t\t";
        }
        // line 221
        echo "\t\t\t<hr>
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label for=\"email\" class=\"col-md-2 col-sm-4 col-form-label\"><i class=\"fas fa-at\"></i> ";
        // line 223
        echo twig_escape_filter($this->env, lang("E-mail address"), "html", null, true);
        echo ":<span class=\"text-danger\">&nbsp;*</span></label>
\t\t\t\t<div class=\"col-md-4 col-sm-8\">
\t\t\t\t\t<input type=\"email\"
\t\t\t\t\t class=\"form-control\" 
\t\t\t\t\t name=\"email\" 
\t\t\t\t\t placeholder=\"";
        // line 228
        echo twig_escape_filter($this->env, lang("example@example.com"), "html", null, true);
        echo "\" 
\t\t\t\t\t id=\"email\" 
\t\t\t\t\t maxlength=\"64\" 
\t\t\t\t\t required value=\"";
        // line 231
        if (($context["offer"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "email", array()), "html", null, true);
        } elseif (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        }
        echo "\" 
\t\t\t\t\t title=\"";
        // line 232
        echo twig_escape_filter($this->env, lang("Enter your email address"), "html", null, true);
        echo "\" ";
        if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()) &&  !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "moderator", array())) || (($context["offer"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "moderator", array())))) {
            echo "readonly";
        }
        echo ">
\t\t\t\t</div> <!--doawanie numeru telefonu-->
\t\t\t\t<label for=\"phone\" class=\"col-md-2 col-sm-4 col-form-label\"><i class=\"fas fa-phone\"></i> ";
        // line 234
        echo twig_escape_filter($this->env, lang("Phone"), "html", null, true);
        echo ":";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_phone", array())) {
            echo "<span class=\"text-danger\">&nbsp;*</span>";
        }
        echo "</label>
\t\t\t\t<div class=\"col-md-4 col-sm-8\">
\t\t\t\t\t<input type=\"tel\" class=\"form-control\" name=\"phone\" placeholder=\"";
        // line 236
        echo twig_escape_filter($this->env, lang("+12 345 678 901"), "html", null, true);
        echo "\" id=\"phone\" maxlength=\"32\" value=\"";
        if (($context["offer"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "phone", array()), "html", null, true);
        } elseif (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", array()), "html", null, true);
        }
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Enter the phone number"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_phone", array())) {
            echo "required";
        }
        echo ">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label for=\"add_address\" class=\"col-sm-2 col-form-label\"><i class=\"fas fa-map-marker-alt\"></i> ";
        // line 240
        echo twig_escape_filter($this->env, lang("Address"), "html", null, true);
        echo ":";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_address", array())) {
            echo "<span class=\"text-danger\">&nbsp;*</span>";
        }
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" class=\"form-control getCoordinates\" name=\"address\" placeholder=\"";
        // line 242
        echo twig_escape_filter($this->env, lang("1600 Pennsylvania Avenue NW, Washington, D.C. 20500"), "html", null, true);
        echo "\" id=\"add_address\" maxlength=\"512\" value=\"";
        if (($context["offer"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address", array()), "html", null, true);
        } elseif (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", array()), "html", null, true);
        }
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Enter the address"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_address", array())) {
            echo "required";
        }
        echo ">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t\t";
        // line 246
        if (($context["states"] ?? null)) {
            // line 247
            echo "\t\t\t\t\t<label for=\"state_id\" class=\"col-sm-2 col-form-label\"><i class=\"fas fa-map\"></i>";
            echo twig_escape_filter($this->env, lang("State"), "html", null, true);
            echo ":";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_state", array())) {
                echo "<span class=\"text-danger\">&nbsp;*</span>";
            }
            echo "</label>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<select class=\"form-control select_state\" name=\"state_id\" id=\"state_id\" title=\"";
            // line 249
            echo twig_escape_filter($this->env, lang("Select the appropriate state"), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_state", array())) {
                echo "required";
            }
            echo ">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 250
            echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["state"]) {
                // line 252
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (((($context["offer"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state_id", array()) == $context["key"])) || (( !($context["offer"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state_id", array()) == $context["key"])))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["state"]) {
                // line 257
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["state"], "states", array())) {
                    // line 258
                    echo "\t\t\t\t\t\t\t<div class=\"col-sm-4 substates substate_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", array()), "html", null, true);
                    echo "\" ";
                    if ( !((($context["offer"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state_id", array()) == $context["key"])) || (( !($context["offer"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state_id", array()) == $context["key"])))) {
                        echo "style=\"display: none\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"state2_id\" title=\"";
                    // line 259
                    echo twig_escape_filter($this->env, lang("Select the appropriate state"), "html", null, true);
                    echo "\" ";
                    if ( !((($context["offer"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state_id", array()) == $context["key"])) || (( !($context["offer"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state_id", array()) == $context["key"])))) {
                        echo "disabled";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 260
                    echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                    // line 261
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["state"], "states", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["state2"]) {
                        // line 262
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state2"], "id", array()), "html", null, true);
                        echo "\" ";
                        if (((($context["offer"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state2_id", array()) == twig_get_attribute($this->env, $this->source, $context["state2"], "id", array()))) || ( !($context["offer"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state2_id", array()) == twig_get_attribute($this->env, $this->source, $context["state2"], "id", array()))))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state2"], "name", array()), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 264
                    echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 267
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            echo "\t\t\t\t";
        }
        // line 269
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps", array()) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_api", array()))) {
            // line 270
            echo "\t\t\t\t\t<div class=\"col-sm-2 pull-right\">
\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-secondary btn-sm pull-right\" value=\"";
            // line 271
            echo twig_escape_filter($this->env, lang("Show on map"), "html", null, true);
            echo "\" id=\"button_get_coordinates\" style=\"margin-top:4px\">
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 274
        echo "\t\t\t</div>
\t\t\t";
        // line 275
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps", array())) {
            // line 276
            echo "\t\t\t\t<div id=\"google_maps\" style=\"height: 300px\"></div>
\t\t\t";
        }
        // line 278
        echo "\t\t\t<input type=\"hidden\" name=\"address_lat\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_lat", array()), "html", null, true);
        echo "\">
\t\t\t<input type=\"hidden\" name=\"address_long\" value=\"";
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_long", array()), "html", null, true);
        echo "\">
\t\t\t<br><br>
\t\t\t";
        // line 281
        if (( !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()) &&  !($context["offer"] ?? null))) {
            // line 282
            echo "\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"rules\" required> ";
            // line 286
            echo twig_escape_filter($this->env, lang("Accepts the terms and conditions and the privacy policy"), "html", null, true);
            echo " (<a href=\"";
            echo twig_escape_filter($this->env, path("rules"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Terms of service"), "html", null, true);
            echo "\" target=\"_blank\" class=\"main-color-2\">";
            echo twig_escape_filter($this->env, lang("Terms of service"), "html", null, true);
            echo "</a> - <a href=\"";
            echo twig_escape_filter($this->env, path("privacy_policy"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Privacy policy"), "html", null, true);
            echo "\" target=\"_blank\" class=\"main-color-2\">";
            echo twig_escape_filter($this->env, lang("Privacy policy"), "html", null, true);
            echo "</a>)<span class=\"text-danger\">&nbsp;*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 292
        echo "\t\t\t<div class=\"form-group text-center\">
\t\t\t\t<input type=\"submit\" class=\"btn btn-primary text-uppercase\" value=\"";
        // line 293
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\" ng-disabled=\"waiting_for_response\" onclick=\"pozyczki()\">
\t\t\t</div>
\t\t\t<br><br>
\t\t\t<p class=\"text-left\"><span class=\"text-danger\">*</span> - ";
        // line 296
        echo twig_escape_filter($this->env, lang("required field"), "html", null, true);
        echo "</p>
\t\t\t<br>
\t\t\t<div class=\"payment\">
\t\t\t\t<img src=\"";
        // line 299
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "/views/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
        echo "/images/pay/dotpay_logo.png\" class=\"rounded float-left\" alt=\"Dotpay\" title=\"Zapłać za pomocą dotpay\">
\t\t\t\t<img src=\"";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "/views/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
        echo "/images/pay/paypal_logo.png\" class=\"rounded float-left\" alt=\"PayPal\" title=\"Zapłać za pomocą PayPal\">
\t\t\t<br/>
\t\t\t</div>
\t\t</form>
\t</div>
</div>

";
        // line 307
        if ((($context["offer"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "add_similar", array()))) {
            // line 308
            echo "\t<div class=\"modal fade\" id=\"remove_offer\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">";
            // line 312
            echo twig_escape_filter($this->env, lang("Delete offer"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
            echo "</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t</div>
\t\t\t\t<form method=\"post\" class=\"form\">
\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"remove_offer\">
\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"code\" value=\"";
            // line 318
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "code", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
            // line 319
            echo twig_escape_filter($this->env, generateToken("remove_offer"), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<p>";
            // line 321
            echo twig_escape_filter($this->env, lang("Are you sure you want to delete offer"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
            echo "?</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" value=\"";
            // line 324
            echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
            // line 325
            echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 332
        echo "
";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  967 => 332,  957 => 325,  953 => 324,  945 => 321,  940 => 319,  936 => 318,  932 => 317,  922 => 312,  916 => 308,  914 => 307,  902 => 300,  896 => 299,  890 => 296,  884 => 293,  881 => 292,  860 => 286,  854 => 282,  852 => 281,  847 => 279,  842 => 278,  838 => 276,  836 => 275,  833 => 274,  827 => 271,  824 => 270,  821 => 269,  818 => 268,  812 => 267,  807 => 264,  792 => 262,  788 => 261,  784 => 260,  776 => 259,  767 => 258,  764 => 257,  760 => 256,  756 => 254,  741 => 252,  737 => 251,  733 => 250,  725 => 249,  715 => 247,  713 => 246,  694 => 242,  685 => 240,  666 => 236,  657 => 234,  648 => 232,  640 => 231,  634 => 228,  626 => 223,  622 => 221,  612 => 214,  605 => 209,  602 => 208,  593 => 205,  585 => 204,  578 => 203,  575 => 202,  570 => 201,  568 => 200,  557 => 191,  549 => 190,  545 => 189,  540 => 186,  538 => 185,  529 => 181,  510 => 165,  506 => 163,  499 => 158,  491 => 156,  488 => 155,  473 => 153,  468 => 152,  466 => 151,  460 => 148,  457 => 147,  455 => 146,  445 => 143,  435 => 140,  428 => 136,  420 => 135,  413 => 131,  400 => 125,  392 => 122,  388 => 121,  382 => 120,  376 => 119,  370 => 118,  361 => 116,  347 => 107,  343 => 106,  335 => 105,  329 => 104,  319 => 101,  316 => 100,  308 => 94,  293 => 92,  289 => 91,  285 => 90,  277 => 89,  266 => 85,  263 => 84,  261 => 83,  251 => 80,  235 => 79,  230 => 77,  225 => 75,  217 => 74,  213 => 72,  211 => 71,  208 => 70,  203 => 68,  198 => 67,  189 => 65,  177 => 64,  173 => 63,  168 => 62,  166 => 61,  161 => 58,  158 => 57,  151 => 53,  134 => 38,  130 => 37,  122 => 32,  110 => 31,  107 => 30,  99 => 29,  92 => 24,  90 => 23,  84 => 22,  79 => 20,  75 => 19,  70 => 18,  65 => 16,  58 => 15,  53 => 14,  51 => 13,  45 => 10,  36 => 5,  33 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "add.html", "/home/platne/serwer24113/public_html/views/default/add.html");
    }
}
