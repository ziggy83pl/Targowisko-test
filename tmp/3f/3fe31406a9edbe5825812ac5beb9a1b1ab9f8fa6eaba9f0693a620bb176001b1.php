<?php

/* addad.html */
class __TwigTemplate_ade4cf244bdfb0d3e8544f149463d1b6f1788cc2e0b84b45c8cca921a681fb56 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "addad.html", 2);
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
\t\tlet photo_max = ";
        // line 10
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "photo_max", array()), "js"), "html", null, true);
        echo ";
\t\tlet list_categories = list_options = [];
\t\tlet inputPrice = '';
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
        echo "\t\tlet required_category = \"";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_category", array()), "js"), "html", null, true);
        echo "\";
\t\tlet required_subcategory = \"";
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
";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"tlo\">
\t<div class=\"page_box\">
\t<div class=\"shadow\">\t
\t<div class=\"container\" id=\"box_add_offer\">
\t\t<div class=\"text-center\">
\t\t\t<h1>";
        // line 31
        echo twig_escape_filter($this->env, lang("Add offer"), "html", null, true);
        echo "</h1>
\t\t\t<h3>";
        // line 32
        echo twig_escape_filter($this->env, lang("Here you can add a new ad to the system"), "html", null, true);
        echo "</h3>
\t\t</div>
\t\t";
        // line 34
        $this->loadTemplate("alert.tpl", "addad.html", 34)->display($context);
        // line 35
        echo "\t\t<br>
\t\t";
        // line 36
        if ( !($context["alert_success"] ?? null)) {
            // line 37
            echo "\t\t<form method=\"post\" id=\"form_add_ad\" ng-app=\"addOffer\" ng-controller=\"addOffer\" action=\"\">
\t\t\t<input type=\"hidden\" name=\"action\" value=\"";
            // line 38
            if ((($context["offer"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "add_similar", array()))) {
                echo "edit";
            } else {
                echo "addad";
            }
            echo "\">
\t\t\t<input type=\"hidden\" name=\"session_code\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["session_code"] ?? null), "html", null, true);
            echo "\">
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label for=\"name\" class=\"col-sm-3 col-form-label\">";
            // line 41
            echo twig_escape_filter($this->env, lang("Title"), "html", null, true);
            echo ":<span class=\"text-danger\">&nbsp;*</span></label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"";
            // line 43
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
            // line 44
            echo twig_escape_filter($this->env, lang("Chars"), "html", null, true);
            echo ": ";
            echo "{{inputName ? inputName.length : 0}}";
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "number_char_title", array()), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group row\" ng-repeat=\"item in list_options track by \$index\" ng-cloak>
\t\t\t\t<label for=\"options[";
            // line 49
            echo "{{item.id}}";
            echo "]\" class=\"col-sm-3  col-form-label \">";
            echo "{{item.name}}";
            echo ":<span class=\"text-danger\" ng-show=\"";
            echo "{{item.required}}";
            echo "\">&nbsp;*</span></label>
\t\t\t\t<div class=\"col-sm-9\" ng-switch on=\"item.kind\">
\t\t\t\t\t<input ng-switch-when=\"text\" class=\"form-control\" type=\"text\" name=\"options[";
            // line 51
            echo "{{item.id}}";
            echo "]\" ng-required=\"";
            echo "{{item.required}}";
            echo "\" ng-model=\"item.value\">
\t\t\t\t\t<input ng-switch-when=\"number\" class=\"form-control\" type=\"number\" name=\"options[";
            // line 52
            echo "{{item.id}}";
            echo "]\" ng-required=\"";
            echo "{{item.required}}";
            echo "\" ng-model=\"item.value\">
\t\t\t\t\t<select ng-switch-when=\"select\" class=\"form-control\" name=\"options[";
            // line 53
            echo "{{item.id}}";
            echo "]\" ng-required=\"";
            echo "{{item.required}}";
            echo "\" ng-model=\"item.value\">
\t\t\t\t\t\t<option value=\"\">";
            // line 54
            echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t<option value=\"";
            // line 55
            echo "{{item2}}";
            echo "\" ng-repeat=\"item2 in item.choices\">";
            echo "{{item2}}";
            echo "</option>
\t\t\t\t\t</select>
\t\t\t\t\t<div ng-switch-when=\"checkbox\" class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4\" ng-repeat=\"item2 in item.choices\"><label class=\"checkbox-inline\"><input type=\"checkbox\" name=\"options[";
            // line 58
            echo "{{item.id}}";
            echo "][]\" value=\"";
            echo "{{item2}}";
            echo "\" ng-checked=\"item.value.indexOf(item2) > -1\"> ";
            echo " {{item2}}";
            echo "</label></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group row\">
\t\t\t\t<label for=\"type_id\" class=\"col-sm-3 col-form-label\">Typ Promowania: </label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t<select class=\"form-control\" name=\"type_id\" id=\"type_id\" title=\"";
            // line 68
            echo twig_escape_filter($this->env, lang("Select the appropriate offer type"), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_type", array())) {
                echo "required";
            }
            echo ">
                                  <option value=\"1\">Lokalne, 30 dni - ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Ad_price_1", array()), "html", null, true);
            echo " zl</option>
                                  <option value=\"1.50\">Lokalne, 60 dni - ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Ad_price_1_5", array()), "html", null, true);
            echo " zl</option>
                                  <option value=\"2\">Regionalne, 30 dni - ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Ad_price_2", array()), "html", null, true);
            echo " zl</option>
                                  <option value=\"2.50\">Regionalne, 60 dni - ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Ad_price_2_5", array()), "html", null, true);
            echo " zl</option>
                                  <option value=\"3\">Ogolnopolskie, 30 dni - ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Ad_price_3", array()), "html", null, true);
            echo " zl</option>
                                  <option value=\"3.50\">Ogolnopolskie, 60 dni - ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Ad_price_3_5", array()), "html", null, true);
            echo " zl</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"text-right\"><i class=\"fas fa-info-circle\"style=\"color: #85be51;\"></i> Wybierz rodzaj reklamy.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t<div class=\"form-group row\" style=\"display: none;\">
\t\t\t\t<label for=\"type\" class=\"col-sm-3 col-form-label\">";
            // line 83
            echo twig_escape_filter($this->env, lang("The length of the display"), "html", null, true);
            echo ": </label>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-9\">
\t\t\t\t\t<select name=\"days\" class=\"form-control\" required>
\t\t\t\t\t\t";
            // line 86
            if (($context["offersDays"] ?? null)) {
                // line 87
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["offersDays"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                    // line 88
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "length", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, lang("days"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, $context["day"], "cost", array())), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "\t\t\t\t\t\t";
            } else {
                // line 91
                echo "\t\t\t\t\t\t\t<option value=\"0\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "days_default", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, lang("days"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t\t</select>
\t\t\t\t</div>\t\t\t
\t\t\t</div>


\t\t\t<div class=\"form-group row\">
\t\t\t\t";
            // line 99
            if (($context["states"] ?? null)) {
                // line 100
                echo "\t\t\t\t\t<label for=\"state_id\" class=\"col-sm-3 col-form-label\">";
                echo twig_escape_filter($this->env, lang("State"), "html", null, true);
                echo ":";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_state", array())) {
                    echo "<span class=\"text-danger\">&nbsp;*</span>";
                }
                echo "</label>
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-9\">
\t\t\t\t\t\t<select class=\"form-control select_state\" name=\"state_id\" id=\"state_id\" title=\"";
                // line 102
                echo twig_escape_filter($this->env, lang("Select the appropriate state"), "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_state", array())) {
                    echo "required";
                }
                echo ">
\t\t\t\t\t\t\t<option value=\"\">";
                // line 103
                echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["state"]) {
                    // line 105
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
                // line 107
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["state"]) {
                    // line 110
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["state"], "states", array())) {
                        // line 111
                        echo "\t\t\t\t\t\t\t<div class=\"col-sm-4 substates substate_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", array()), "html", null, true);
                        echo "\" ";
                        if ( !((($context["offer"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state_id", array()) == $context["key"])) || (( !($context["offer"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state_id", array()) == $context["key"])))) {
                            echo "style=\"display: none\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"state2_id\" title=\"";
                        // line 112
                        echo twig_escape_filter($this->env, lang("Select the appropriate state"), "html", null, true);
                        echo "\" ";
                        if ( !((($context["offer"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state_id", array()) == $context["key"])) || (( !($context["offer"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state_id", array()) == $context["key"])))) {
                            echo "disabled";
                        }
                        echo " required>
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 113
                        echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                        // line 114
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["state"], "states", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["state2"]) {
                            // line 115
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
                        // line 117
                        echo "\t\t\t\t\t\t\t\t</select>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 120
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "\t\t\t\t";
            }
            // line 122
            echo "\t\t\t</div>

\t\t\t<div class=\"form-group row\">
\t\t\t\t<label for=\"email\" class=\"col-sm-3 col-form-label\">";
            // line 125
            echo twig_escape_filter($this->env, lang("E-mail address"), "html", null, true);
            echo ":<span class=\"text-danger\">&nbsp;*</span></label>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-9\">
\t\t\t\t\t<input type=\"email\"
\t\t\t\t\t class=\"form-control\" 
\t\t\t\t\t name=\"email\" 
\t\t\t\t\t placeholder=\"";
            // line 130
            echo twig_escape_filter($this->env, lang("example@example.com"), "html", null, true);
            echo "\" 
\t\t\t\t\t id=\"email\" 
\t\t\t\t\t maxlength=\"64\" 
\t\t\t\t\t required value=\"";
            // line 133
            if (($context["offer"] ?? null)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "email", array()), "html", null, true);
            } elseif (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
            }
            echo "\" 
\t\t\t\t\t title=\"";
            // line 134
            echo twig_escape_filter($this->env, lang("Enter your email address"), "html", null, true);
            echo "\" ";
            if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()) &&  !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "moderator", array())) || (($context["offer"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "moderator", array())))) {
                echo "readonly";
            }
            echo ">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-group row\">
\t\t\t<label for=\"website\" class=\"col-sm-3 col-form-label\"> ";
            // line 139
            echo twig_escape_filter($this->env, lang("Website"), "html", null, true);
            echo ": </label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"website\" placeholder=\"www.example.com\" id=\"website\" required maxlength=\"300\" title=\"";
            // line 141
            echo twig_escape_filter($this->env, lang("Enter your website"), "html", null, true);
            echo "\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group row\">
\t\t\t<label for=\"facebook\" class=\"col-sm-3 col-form-label\"> ";
            // line 145
            echo twig_escape_filter($this->env, lang("Facebook URL"), "html", null, true);
            echo ": </label>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"facebook\" placeholder=\"www.example.com\" id=\"website\" maxlength=\"300\" title=\"";
            // line 147
            echo twig_escape_filter($this->env, lang("Enter your facebook"), "html", null, true);
            echo "\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t
\t\t\t<hr style=\"margin-bottom: 10px;\">
\t\t\t<div class=\"form-group row\" style=\"display:none\">
\t\t\t\t<label for=\"description\" class=\"col-sm-3 col-form-label\">";
            // line 152
            echo twig_escape_filter($this->env, lang("Offer description"), "html", null, true);
            echo ":<span class=\"info1\"title=\"Promuj naszą stronę!\"alt=\"Darmowe ogłoszenia!\"></span></label>\t
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t<textarea id=\"description\" name=\"description\" class=\"form-control\" style=\"height: 150px\">";
            // line 154
            if (($context["offer"] ?? null)) {
                echo twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "description", array());
            }
            echo "</textarea>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

\t\t\t<div class=\"text-justify text-center\"><i class=\"fas fa-info-circle\"style=\"color: #85be51;\"></i>
\t\t\t\tWybierz wszystkie elementy dodawania reklamy, jeśli nawet to jest reklama ogólnokrajowa, jeżeli nie posiadasz własnej strony web, to dodaj adres z przeglądarki Twojego ogłoszenia z naszej stront Targowisko.
\t\t\t  </div>
\t\t\t<hr style=\"margin-top: 10px;\">
\t\t\t<div class=\"form-group row\">
\t\t\t\t<div class=\"col-sm-3 col-form-label\">
\t\t\t\t\t<label>";
            // line 165
            echo twig_escape_filter($this->env, lang("Photos"), "html", null, true);
            echo ":</label>
\t\t\t\t\t";
            // line 166
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "photo_max", array())) {
                echo "<p class=\"small\">";
                echo twig_escape_filter($this->env, lang("Limit photos"), "html", null, true);
                echo ": 1</p>";
            }
            // line 167
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t<div class=\"progress\" id=\"photos_progress\">
\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%\">
\t\t\t\t\t\t\t0%
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\" id=\"photos_info\"></div>
\t\t\t\t\t<div id=\"preview_photos\">
\t\t\t\t\t\t";
            // line 176
            if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "photos", array())) {
                // line 177
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "photos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t<div class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"upload/photos/";
                    // line 179
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "folder", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "thumb", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "url", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<br><a href=\"#\" title=\"";
                    // line 180
                    echo twig_escape_filter($this->env, lang("Remove photo"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "url", array()), "html", null, true);
                    echo "\" class=\"remove_photo text-danger\">";
                    echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"photos[]\" value=\"";
                    // line 181
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "\t\t\t\t\t\t";
            }
            // line 185
            echo "\t\t\t\t\t\t<div id=\"preview_load\"><span class=\"fas fa-spinner fa-spinner-animate\"></span></div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div>
\t\t\t\t\t<label for=\"input_select_photo_ad\" class=\"custom-input_select_photo\"title=\"Tutaj możesz dodać zdjęcia\"></label>
\t\t\t\t\t<input class=\".custom-input_select_photo \" id=\"input_select_photo_ad\" type=\"file\" name=\"zdjecie\" title=\"";
            // line 190
            echo twig_escape_filter($this->env, lang("Here you can add photos to the offer"), "html", null, true);
            echo "\" multiple accept=\"image/jpeg, image/png\" alt=\"Dodaj zdjęcie\" onclick=\"document.getElementById('addad').style.display='none'\"></div>
\t\t\t\t\t<div class=\"text-justify text-center addB\" id=\"addad\"title=\"Dodaj reklamę ogólne krajową, regionalną lub lokalną.\"><i class=\"fas fa-info-circle\"style=\"color:#85be51;font-size:2em;\"></i> Dodaj zdjęcie o wymiarze 750px na 100px</div>
\t\t\t\t\t<div style=\"clear:both;\"></div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t
\t\t\t</div>

\t\t\t
\t\t\t<div class=\"form-group text-center\">
\t\t\t\t<input type=\"submit\" class=\"btn btn-primary text-uppercase\" value=\"";
            // line 199
            echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
            echo " i zapłać\" ng-disabled=\"waiting_for_response\">
\t\t\t</div>
\t\t\t<br>
\t\t\t<p class=\"text-left\"><span class=\"text-danger\">*</span> - ";
            // line 202
            echo twig_escape_filter($this->env, lang("required field"), "html", null, true);
            echo "</p>\t\t\t<div class=\"payment\">
\t\t\t\t<img src=\"https://targowisko.org/views/default/images/pay/dotpay_logo.png\" class=\"rounded float-left\" alt=\"Dotpay\" title=\"Zapłać za pomocą dotpay\">
\t\t\t\t<img src=\"https://targowisko.org/views/default/images/pay/paypal_logo.png\" class=\"rounded float-left\" alt=\"PayPal\" title=\"Zapłać za pomocą PayPal\">\t
\t\t</div>
\t\t<br>
\t\t\t<br>

\t\t</form>

\t\t
\t\t";
        }
        // line 213
        echo "\t\t
\t</div>
\t</div>
\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "addad.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 213,  586 => 202,  580 => 199,  568 => 190,  561 => 185,  558 => 184,  549 => 181,  541 => 180,  534 => 179,  531 => 178,  526 => 177,  524 => 176,  513 => 167,  507 => 166,  503 => 165,  487 => 154,  482 => 152,  474 => 147,  469 => 145,  462 => 141,  457 => 139,  445 => 134,  437 => 133,  431 => 130,  423 => 125,  418 => 122,  415 => 121,  409 => 120,  404 => 117,  389 => 115,  385 => 114,  381 => 113,  373 => 112,  364 => 111,  361 => 110,  357 => 109,  353 => 107,  338 => 105,  334 => 104,  330 => 103,  322 => 102,  312 => 100,  310 => 99,  302 => 93,  294 => 91,  291 => 90,  276 => 88,  271 => 87,  269 => 86,  263 => 83,  251 => 74,  247 => 73,  243 => 72,  239 => 71,  235 => 70,  231 => 69,  223 => 68,  206 => 58,  198 => 55,  194 => 54,  188 => 53,  182 => 52,  176 => 51,  167 => 49,  155 => 44,  139 => 43,  134 => 41,  129 => 39,  121 => 38,  118 => 37,  116 => 36,  113 => 35,  111 => 34,  106 => 32,  102 => 31,  95 => 26,  92 => 25,  84 => 22,  79 => 20,  75 => 19,  70 => 18,  65 => 16,  58 => 15,  53 => 14,  51 => 13,  45 => 10,  36 => 5,  33 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "addad.html", "/home/platne/serwer24113/public_html/views/default/addad.html");
    }
}
