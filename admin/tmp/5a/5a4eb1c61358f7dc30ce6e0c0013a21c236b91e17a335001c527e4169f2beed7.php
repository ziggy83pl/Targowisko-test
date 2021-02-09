<?php

/* settings.html */
class __TwigTemplate_1e1c81d15d48f936a18f4b32c9dc8cbcc68e7778f3f184dda9a63896abfff0d6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "settings.html", 2);
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
        echo "<div class=\"page-header\">
\t<h1><span class=\"glyphicon glyphicon-asterisk\"></span> ";
        // line 6
        echo twig_escape_filter($this->env, lang("General settings"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can edit the settings of the service"), "html", null, true);
        echo "</p>
\t<p class=\"text-danger\">";
        // line 8
        echo twig_escape_filter($this->env, lang("Warning! Certain changes can cause problems with your site!"), "html", null, true);
        echo "</p>
</div>

";
        // line 11
        $this->loadTemplate("alert.tpl", "settings.html", 11)->display($context);
        // line 12
        echo "
<form method=\"post\" class=\"form-horizontal\" role=\"form\">
\t<input type=\"hidden\" name=\"action\" value=\"save_settings\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, generateToken("admin_save_settings"), "html", null, true);
        echo "\">
\t<div class=\"form-group\">
\t\t<label for=\"base_url\" class=\"col-sm-3 control-label\">";
        // line 17
        echo twig_escape_filter($this->env, lang("Base URL"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"base_url\" placeholder=\"http://example.com\" title=\"";
        // line 19
        echo twig_escape_filter($this->env, lang("Enter the url of the site"), "html", null, true);
        echo "\" required value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"email\" class=\"col-sm-3 control-label\">";
        // line 23
        echo twig_escape_filter($this->env, lang("E-mail Administrator"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"email\" name=\"email\" placeholder=\"example@example.com\" title=\"";
        // line 25
        echo twig_escape_filter($this->env, lang("Enter e-mail the site administrator"), "html", null, true);
        echo "\" required value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "email", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"lang\" class=\"col-sm-3 control-label\">";
        // line 29
        echo twig_escape_filter($this->env, lang("Website language"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<select name=\"lang\" title=\"";
        // line 31
        echo twig_escape_filter($this->env, lang("Website language"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lang_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" ";
            if (($context["item"] == twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lang", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t</select>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"title\" class=\"col-sm-3 control-label\">";
        // line 39
        echo twig_escape_filter($this->env, lang("Page title"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"title\" placeholder=\"...\" title=\"";
        // line 41
        echo twig_escape_filter($this->env, lang("Page title"), "html", null, true);
        echo "\" required value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"keywords\" class=\"col-sm-3 control-label\">";
        // line 45
        echo twig_escape_filter($this->env, lang("Keywords SEO"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"keywords\" title=\"";
        // line 47
        echo twig_escape_filter($this->env, lang("Keywords SEO"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "keywords", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"description\" class=\"col-sm-3 control-label\">";
        // line 51
        echo twig_escape_filter($this->env, lang("Description SEO"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<textarea name=\"description\" title=\"";
        // line 53
        echo twig_escape_filter($this->env, lang("Description SEO"), "html", null, true);
        echo "\" class=\"form-control\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"analytics\" class=\"col-sm-3 control-label\">";
        // line 57
        echo twig_escape_filter($this->env, lang("Google Analytics code"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<textarea name=\"analytics\" title=\"";
        // line 59
        echo twig_escape_filter($this->env, lang("Google Analytics code"), "html", null, true);
        echo "\" class=\"form-control\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "analytics", array()), "html", null, true);
        echo "</textarea>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"number_char_title\" class=\"col-sm-3 control-label\">";
        // line 63
        echo twig_escape_filter($this->env, lang("Maximum number of characters in the title of the offer"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"number\" name=\"number_char_title\" title=\"";
        // line 65
        echo twig_escape_filter($this->env, lang("Maximum number of characters in the title of the offer"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "number_char_title", array()), "html", null, true);
        echo "\" class=\"form-control\" min=\"1\" max=\"512\" required>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"add_offers_not_logged\" title=\"";
        // line 71
        echo twig_escape_filter($this->env, lang("Allow adding offers by not logged"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "add_offers_not_logged", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Allow adding offers by not logged"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"automatically_activate_offers\" title=\"";
        // line 72
        echo twig_escape_filter($this->env, lang("Automatically activate added offers (applies to logged users)"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "automatically_activate_offers", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Automatically activate added offers (applies to logged users)"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"enable_articles\" title=\"";
        // line 73
        echo twig_escape_filter($this->env, lang("Enable the display of articles"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "enable_articles", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Enable the display of articles"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"rss\" title=\"";
        // line 74
        echo twig_escape_filter($this->env, lang("Enable RSS channel"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "rss", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Enable RSS channel"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"generate_sitemap\" title=\"";
        // line 75
        echo twig_escape_filter($this->env, lang("Automatically generate a site map (sitemap.xml)"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "generate_sitemap", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Automatically generate a site map (sitemap.xml)"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"check_ip_user\" title=\"";
        // line 76
        echo twig_escape_filter($this->env, lang("Check IP user when logging or adding offers"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "check_ip_user", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Check IP user when logging or adding offers"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-3 control-label\">";
        // line 81
        echo twig_escape_filter($this->env, lang("When you add offer"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<label><input type=\"checkbox\" name=\"required_type\" title=\"";
        // line 83
        echo twig_escape_filter($this->env, lang("Type required"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_type", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Type required"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"required_category\" title=\"";
        // line 84
        echo twig_escape_filter($this->env, lang("Category required"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_category", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Category required"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"required_subcategory\" title=\"";
        // line 85
        echo twig_escape_filter($this->env, lang("Subcategory required"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_subcategory", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Subcategory required"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"required_phone\" title=\"";
        // line 86
        echo twig_escape_filter($this->env, lang("Phone required"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_phone", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Phone required"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"required_url\" title=\"";
        // line 87
        echo twig_escape_filter($this->env, lang("Url required"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_url", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Url required"), "html", null, true);
        echo "</label><br> <!--Test dodawania url-->
\t\t\t<label><input type=\"checkbox\" name=\"required_address\" title=\"";
        // line 88
        echo twig_escape_filter($this->env, lang("Address required"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_address", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Address required"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"required_state\" title=\"";
        // line 89
        echo twig_escape_filter($this->env, lang("State required"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "required_state", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("State required"), "html", null, true);
        echo "</label><br>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"google_maps\" title=\"";
        // line 95
        echo twig_escape_filter($this->env, lang("Show Google Maps"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps", array())) {
            echo "checked";
        }
        echo " class=\"set_required\" data-target=\"target_google_maps\"> ";
        echo twig_escape_filter($this->env, lang("Show Google Maps"), "html", null, true);
        echo "</label>
\t\t\t<p><a href=\"https://developers.google.com/maps/documentation/javascript/get-api-key\" title=\"Google Maps API KEY\" target=\"_blank\">https://developers.google.com/maps/documentation/javascript/get-api-key</a></p>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"google_maps_api\" class=\"col-sm-3 control-label\">";
        // line 100
        echo twig_escape_filter($this->env, lang("Google Maps API"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"google_maps_api\" title=\"";
        // line 102
        echo twig_escape_filter($this->env, lang("Google Maps API"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_api", array()), "html", null, true);
        echo "\" class=\"target_google_maps form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"google_maps_lat\" class=\"col-sm-3 control-label\">";
        // line 106
        echo twig_escape_filter($this->env, lang("Latitude"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"number\" step=\"0.000001\" min=\"-90\" max=\"90\" name=\"google_maps_lat\" title=\"";
        // line 108
        echo twig_escape_filter($this->env, lang("Latitude"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_lat", array()), "html", null, true);
        echo "\" class=\"target_google_maps form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"google_maps_long\" class=\"col-sm-3 control-label\">";
        // line 112
        echo twig_escape_filter($this->env, lang("Longitude"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"number\" step=\"0.000001\" min=\"-180\" max=\"180\" name=\"google_maps_long\" title=\"";
        // line 114
        echo twig_escape_filter($this->env, lang("Longitude"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_long", array()), "html", null, true);
        echo "\" class=\"target_google_maps form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"google_maps_zoom_add\" class=\"col-sm-3 control-label\">";
        // line 118
        echo twig_escape_filter($this->env, lang("Zoom level (add and edit offer)"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"number\" step=\"1\" min=\"0\" max=\"19\" name=\"google_maps_zoom_add\" title=\"";
        // line 120
        echo twig_escape_filter($this->env, lang("Zoom level (add and edit offer)"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_zoom_add", array()), "html", null, true);
        echo "\" class=\"target_google_maps form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"google_maps_zoom_offer\" class=\"col-sm-3 control-label\">";
        // line 124
        echo twig_escape_filter($this->env, lang("Zoom level (show offer)"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"number\" step=\"1\" min=\"0\" max=\"19\" name=\"google_maps_zoom_offer\" title=\"";
        // line 126
        echo twig_escape_filter($this->env, lang("Zoom level (show offer)"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_zoom_offer", array()), "html", null, true);
        echo "\" class=\"target_google_maps form-control\">
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<label for=\"limit_page\" class=\"col-sm-3 control-label\">";
        // line 131
        echo twig_escape_filter($this->env, lang("Limit offers per page"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"number\" step=\"1\" min=\"1\" name=\"limit_page\"  title=\"";
        // line 133
        echo twig_escape_filter($this->env, lang("Limit offers per page"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "limit_page", array()), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"limit_page_index\" class=\"col-sm-3 control-label\">";
        // line 137
        echo twig_escape_filter($this->env, lang("Limit offers on the home page"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"number\" step=\"1\" min=\"1\" name=\"limit_page_index\" title=\"";
        // line 139
        echo twig_escape_filter($this->env, lang("Limit offers on the home page"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "limit_page_index", array()), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"show_similar_offer\" title=\"";
        // line 144
        echo twig_escape_filter($this->env, lang("Show similar offers"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_similar_offer", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show similar offers"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"limit_similar_offer\" class=\"col-sm-3 control-label\">";
        // line 148
        echo twig_escape_filter($this->env, lang("Limit similar offers"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"number\" step=\"1\" min=\"1\" name=\"limit_similar_offer\" title=\"";
        // line 150
        echo twig_escape_filter($this->env, lang("Limit similar offers"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "limit_similar_offer", array()), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"photo_add\" title=\"";
        // line 156
        echo twig_escape_filter($this->env, lang("Allow uploading photos"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "photo_add", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Allow uploading photos"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"photo_max\" class=\"col-sm-3 control-label\">";
        // line 160
        echo twig_escape_filter($this->env, lang("The maximum number of images (0 - unlimited)"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"number\" step=\"1\" min=\"0\" name=\"photo_max\" title=\"";
        // line 162
        echo twig_escape_filter($this->env, lang("The maximum number of images (0 - unlimited)"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "photo_max", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"photo_max_size\" class=\"col-sm-3 control-label\">";
        // line 166
        echo twig_escape_filter($this->env, lang("The maximum size of photo (0 - unlimited)"), "html", null, true);
        echo ":<br><small>";
        echo twig_escape_filter($this->env, lang("Photos exceeding the size will be rejected"), "html", null, true);
        echo "</small></label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" step=\"1\" min=\"0\" name=\"photo_max_size\" title=\"";
        // line 169
        echo twig_escape_filter($this->env, lang("The maximum size of photo (0 - unlimited)"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "photo_max_size", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\">kB</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"photo_max_height\" class=\"col-sm-3 control-label\">";
        // line 175
        echo twig_escape_filter($this->env, lang("Maximum height of pictures (0 - unlimited)"), "html", null, true);
        echo ":<br><small>";
        echo twig_escape_filter($this->env, lang("Photos exceeding the size will be reduced"), "html", null, true);
        echo "</small></label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" step=\"1\" min=\"0\" name=\"photo_max_height\" title=\"";
        // line 178
        echo twig_escape_filter($this->env, lang("Maximum height of pictures (0 - unlimited)"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "photo_max_height", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\">px</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"photo_max_width\" class=\"col-sm-3 control-label\">";
        // line 184
        echo twig_escape_filter($this->env, lang("Maximum width of pictures (0 - unlimited)"), "html", null, true);
        echo ":<br><small>";
        echo twig_escape_filter($this->env, lang("Photos exceeding the size will be reduced"), "html", null, true);
        echo "</small></label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" step=\"1\" min=\"0\" name=\"photo_max_width\" title=\"";
        // line 187
        echo twig_escape_filter($this->env, lang("Maximum width of pictures (0 - unlimited)"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "photo_max_width", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\">px</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"photo_quality\" class=\"col-sm-3 control-label\">";
        // line 193
        echo twig_escape_filter($this->env, lang("Picture JPG quality (scale 0 - 100)"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"number\" step=\"1\" min=\"0\" max=\"100\" name=\"photo_quality\" title=\"";
        // line 195
        echo twig_escape_filter($this->env, lang("Picture JPG quality (scale 0 - 100)"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "photo_quality", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"watermark_add\" title=\"";
        // line 200
        echo twig_escape_filter($this->env, lang("Add a watermark to photos"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "watermark_add", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Add a watermark to photos"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"hide_data_not_logged\" title=\"";
        // line 206
        echo twig_escape_filter($this->env, lang("Hide contact information for not logged"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_data_not_logged", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Hide contact information for not logged"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"hide_phone\" title=\"";
        // line 207
        echo twig_escape_filter($this->env, lang("Hide phone number"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_phone", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Hide phone number"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"hide_email\" title=\"";
        // line 208
        echo twig_escape_filter($this->env, lang("Do not show email address"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_email", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Do not show email address"), "html", null, true);
        echo "</label><br>
\t\t\t<label><input type=\"checkbox\" name=\"hide_views\" title=\"";
        // line 209
        echo twig_escape_filter($this->env, lang("Do not show the number of views"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_views", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Do not show the number of views"), "html", null, true);
        echo "</label><br>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"mail_attachment\" title=\"";
        // line 215
        echo twig_escape_filter($this->env, lang("Allow to post attachments to e-mails"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mail_attachment", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Allow to post attachments to e-mails"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"smtp\" title=\"";
        // line 220
        echo twig_escape_filter($this->env, lang("Send emails via SMTP"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "smtp", array())) {
            echo "checked";
        }
        echo " class=\"set_required\" data-target=\"target_smtp\"> ";
        echo twig_escape_filter($this->env, lang("Send emails via SMTP"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"smtp_host\" class=\"col-sm-3 control-label\">";
        // line 224
        echo twig_escape_filter($this->env, lang("SMTP host"), "html", null, true);
        echo ": </label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"smtp_host\" title=\"";
        // line 226
        echo twig_escape_filter($this->env, lang("SMTP host"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "smtp_host", array()), "html", null, true);
        echo "\" class=\"target_smtp form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"smtp_mail\" class=\"col-sm-3 control-label\">";
        // line 230
        echo twig_escape_filter($this->env, lang("SMTP e-mail"), "html", null, true);
        echo ": </label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"email\" name=\"smtp_mail\" title=\"";
        // line 232
        echo twig_escape_filter($this->env, lang("SMTP e-mail"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "smtp_mail", array()), "html", null, true);
        echo "\" class=\"target_smtp form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"smtp_user\" class=\"col-sm-3 control-label\">";
        // line 236
        echo twig_escape_filter($this->env, lang("SMTP user"), "html", null, true);
        echo ": </label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"smtp_user\" title=\"";
        // line 238
        echo twig_escape_filter($this->env, lang("SMTP user"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "smtp_user", array()), "html", null, true);
        echo "\" class=\"target_smtp form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"smtp_password\" class=\"col-sm-3 control-label\">";
        // line 242
        echo twig_escape_filter($this->env, lang("SMTP password"), "html", null, true);
        echo ": </label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"smtp_password\" title=\"";
        // line 244
        echo twig_escape_filter($this->env, lang("SMTP password"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "smtp_password", array()), "html", null, true);
        echo "\" class=\"target_smtp form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"smtp_port\" class=\"col-sm-3 control-label\">";
        // line 248
        echo twig_escape_filter($this->env, lang("SMTP port"), "html", null, true);
        echo ": </label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"number\" min=\"0\" name=\"smtp_port\" title=\"";
        // line 250
        echo twig_escape_filter($this->env, lang("SMTP port"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "smtp_port", array()), "html", null, true);
        echo "\" class=\"target_smtp form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"smtp_secure\" class=\"col-sm-3 control-label\">";
        // line 254
        echo twig_escape_filter($this->env, lang("SMTP secure"), "html", null, true);
        echo ": </label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"smtp_secure\" title=\"";
        // line 256
        echo twig_escape_filter($this->env, lang("SMTP secure"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "smtp_secure", array()), "html", null, true);
        echo "\" class=\"target_smtp form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#test_message\">";
        // line 261
        echo twig_escape_filter($this->env, lang("Send a test message"), "html", null, true);
        echo "</button>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<input type=\"submit\" value=\"";
        // line 267
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t\t</div>
\t</div>
</form>

<div class=\"modal fade\" id=\"test_message\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        // line 272
        echo twig_escape_filter($this->env, lang("Send a test message"), "html", null, true);
        echo "\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 277
        echo twig_escape_filter($this->env, lang("Send a test message"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form method=\"post\" class=\"form\">
\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"send_test_message\">
\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 281
        echo twig_escape_filter($this->env, generateToken("admin_send_test_message"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<p>";
        // line 283
        echo twig_escape_filter($this->env, lang("If you make changes to the SMTP settings, first save the settings!"), "html", null, true);
        echo "</p>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>";
        // line 285
        echo twig_escape_filter($this->env, lang("Email"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"email\" name=\"email\" required value=\"";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "email", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>";
        // line 289
        echo twig_escape_filter($this->env, lang("Subject"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"subject\" required value=\"";
        // line 290
        echo twig_escape_filter($this->env, lang("Test message"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>";
        // line 293
        echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<textarea name=\"message\" required class=\"form-control\">";
        // line 294
        echo twig_escape_filter($this->env, lang("Test message"), "html", null, true);
        echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
        // line 298
        echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
        // line 299
        echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  833 => 299,  829 => 298,  822 => 294,  818 => 293,  812 => 290,  808 => 289,  802 => 286,  798 => 285,  793 => 283,  788 => 281,  781 => 277,  773 => 272,  765 => 267,  756 => 261,  746 => 256,  741 => 254,  732 => 250,  727 => 248,  718 => 244,  713 => 242,  704 => 238,  699 => 236,  690 => 232,  685 => 230,  676 => 226,  671 => 224,  658 => 220,  644 => 215,  629 => 209,  619 => 208,  609 => 207,  599 => 206,  584 => 200,  574 => 195,  569 => 193,  558 => 187,  550 => 184,  539 => 178,  531 => 175,  520 => 169,  512 => 166,  503 => 162,  498 => 160,  485 => 156,  474 => 150,  469 => 148,  456 => 144,  446 => 139,  441 => 137,  432 => 133,  427 => 131,  417 => 126,  412 => 124,  403 => 120,  398 => 118,  389 => 114,  384 => 112,  375 => 108,  370 => 106,  361 => 102,  356 => 100,  342 => 95,  327 => 89,  317 => 88,  307 => 87,  297 => 86,  287 => 85,  277 => 84,  267 => 83,  262 => 81,  248 => 76,  238 => 75,  228 => 74,  218 => 73,  208 => 72,  198 => 71,  187 => 65,  182 => 63,  173 => 59,  168 => 57,  159 => 53,  154 => 51,  145 => 47,  140 => 45,  131 => 41,  126 => 39,  120 => 35,  105 => 33,  101 => 32,  97 => 31,  92 => 29,  83 => 25,  78 => 23,  69 => 19,  64 => 17,  59 => 15,  54 => 12,  52 => 11,  46 => 8,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings.html", "/home/platne/serwer24113/public_html/admin/views/settings.html");
    }
}
