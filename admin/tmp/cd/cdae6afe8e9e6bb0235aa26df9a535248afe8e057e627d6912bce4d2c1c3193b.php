<?php

/* settings_appearance.html */
class __TwigTemplate_ca3997232c74ffa64bdf352a50d7c522f4c3b51497db89c93a025e456734dfd7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "settings_appearance.html", 2);
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
        echo twig_escape_filter($this->env, lang("Appearance settings"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can edit the settings of the service"), "html", null, true);
        echo "</p>
</div>

";
        // line 10
        $this->loadTemplate("alert.tpl", "settings_appearance.html", 10)->display($context);
        // line 11
        echo "
<form method=\"post\" class=\"form-horizontal\" role=\"form\">
\t<input type=\"hidden\" name=\"action\" value=\"save_settings_appearance\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, generateToken("admin_save_settings_appearance"), "html", null, true);
        echo "\">
\t<div class=\"form-group\">
\t\t<label for=\"template\" class=\"col-sm-2 control-label\">";
        // line 16
        echo twig_escape_filter($this->env, lang("Template"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-10\">
\t\t\t<select name=\"template\" title=\"";
        // line 18
        echo twig_escape_filter($this->env, lang("Template"), "html", null, true);
        echo "\" required class=\"form-control\">
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" ";
            if (($context["item"] == twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t</select>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-10 col-sm-offset-2\">
\t\t\t<label><input type=\"checkbox\" name=\"search_box_category\" title=\"";
        // line 28
        echo twig_escape_filter($this->env, lang("Show in search box: Categories"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_category", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show in search box: Categories"), "html", null, true);
        echo "</label>
\t\t\t<br>
\t\t\t<label><input type=\"checkbox\" name=\"search_box_address\" title=\"";
        // line 30
        echo twig_escape_filter($this->env, lang("Show in search box: Address"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_address", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show in search box: Address"), "html", null, true);
        echo "</label>
\t\t\t<br>
\t\t\t<label><input type=\"checkbox\" name=\"search_box_distance\" title=\"";
        // line 32
        echo twig_escape_filter($this->env, lang("Show in search box: Distance"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_distance", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show in search box: Distance"), "html", null, true);
        echo "</label>
\t\t\t<br>
\t\t\t<label><input type=\"checkbox\" name=\"search_box_keywords\" title=\"";
        // line 34
        echo twig_escape_filter($this->env, lang("Show in search box: Keywords"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_keywords", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show in search box: Keywords"), "html", null, true);
        echo "</label>
\t\t\t<br>
\t\t\t<label><input type=\"checkbox\" name=\"search_box_price\" title=\"";
        // line 36
        echo twig_escape_filter($this->env, lang("Show in search box: Price"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_price", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show in search box: Price"), "html", null, true);
        echo "</label>
\t\t\t<br>
\t\t\t<label><input type=\"checkbox\" name=\"search_box_state\" title=\"";
        // line 38
        echo twig_escape_filter($this->env, lang("Show in search box: State"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_state", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show in search box: State"), "html", null, true);
        echo "</label>
\t\t\t<br>
\t\t\t<label><input type=\"checkbox\" name=\"search_box_type\" title=\"";
        // line 40
        echo twig_escape_filter($this->env, lang("Show in search box: Type"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_type", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show in search box: Type"), "html", null, true);
        echo "</label>
\t\t\t<br>
\t\t\t<label><input type=\"checkbox\" name=\"search_box_options\" title=\"";
        // line 42
        echo twig_escape_filter($this->env, lang("Show in search box: Options"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "search_box_options", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show in search box: Options"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-10 col-sm-offset-2\">
\t\t\t<label><input type=\"checkbox\" name=\"show_contact_form_offer\" title=\"";
        // line 48
        echo twig_escape_filter($this->env, lang("Show the contact form on offer page"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_contact_form_offer", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show the contact form on offer page"), "html", null, true);
        echo "</label>
\t\t\t<br>
\t\t\t<label><input type=\"checkbox\" name=\"show_contact_form_profile\" title=\"";
        // line 50
        echo twig_escape_filter($this->env, lang("Show the contact form on profile page"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_contact_form_profile", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show the contact form on profile page"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-10 col-sm-offset-2\">
\t\t\t<label><input type=\"checkbox\" name=\"show_breadcrumbs\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, lang("Show breadcrumbs"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_breadcrumbs", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show breadcrumbs"), "html", null, true);
        echo "</label>
\t\t</div>
\t\t<div class=\"col-sm-10 col-sm-offset-2\">
\t\t\t<label><input type=\"checkbox\" name=\"index_box_subcategories\" title=\"";
        // line 59
        echo twig_escape_filter($this->env, lang("Show the category box on the index page"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "index_box_subcategories", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show the category box on the index page"), "html", null, true);
        echo "</label>
\t\t</div>
\t\t<div class=\"col-sm-10 col-sm-offset-2\">
\t\t\t<label><input type=\"checkbox\" name=\"show_number_offers_in_categories\" title=\"";
        // line 62
        echo twig_escape_filter($this->env, lang("Show the number of offers in categories"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_number_offers_in_categories", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show the number of offers in categories"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<label for=\"logo\" class=\"col-sm-2 control-label\">";
        // line 67
        echo twig_escape_filter($this->env, lang("Logo"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-10\">
\t\t\t<a href=\"#\" class=\"open_roxy\" data-target=\"#roxySelectFile\">
\t\t\t\t<img data-roxy_name=\"logo\" src=\"";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", array()), "html", null, true);
        } else {
            echo "images/no_image.png";
        }
        echo "\" onerror=\"this.src='images/no_image.png'\" alt=\"";
        echo twig_escape_filter($this->env, lang("Logo"), "html", null, true);
        echo "\" style=\"max-height: 100px\">
\t\t\t</a><br><br>
\t\t\t<input type=\"text\" name=\"logo\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Logo"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Logo"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"logo_facebook\" class=\"col-sm-2 control-label\">";
        // line 76
        echo twig_escape_filter($this->env, lang("Logo - Facebook"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-10\">
\t\t\t<a href=\"#\" class=\"open_roxy\" data-target=\"#roxySelectFile\">
\t\t\t\t<img data-roxy_name=\"logo_facebook\" src=\"";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo_facebook", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo_facebook", array()), "html", null, true);
        } else {
            echo "images/no_image.png";
        }
        echo "\" onerror=\"this.src='images/no_image.png'\" alt=\"";
        echo twig_escape_filter($this->env, lang("Logo - Facebook"), "html", null, true);
        echo "\" style=\"max-height: 100px\">
\t\t\t</a><br><br>
\t\t\t<input type=\"text\" name=\"logo_facebook\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo_facebook", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Logo - Facebook"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Logo - Facebook"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"watermark\" class=\"col-sm-2 control-label\">";
        // line 85
        echo twig_escape_filter($this->env, lang("Watermark"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-10\">
\t\t\t<a href=\"#\" class=\"open_roxy\" data-target=\"#roxySelectFile\">
\t\t\t\t<img data-roxy_name=\"watermark\" src=\"";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "watermark", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "watermark", array()), "html", null, true);
        } else {
            echo "images/no_image.png";
        }
        echo "\" onerror=\"this.src='images/no_image.png'\" alt=\"";
        echo twig_escape_filter($this->env, lang("Watermark"), "html", null, true);
        echo "\" style=\"max-height: 100px\">
\t\t\t</a><br><br>
\t\t\t<input type=\"text\" name=\"watermark\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "watermark", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Watermark"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Watermark"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"favicon\" class=\"col-sm-2 control-label\">";
        // line 94
        echo twig_escape_filter($this->env, lang("Favicon"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-10\">
\t\t\t<a href=\"#\" class=\"open_roxy\" data-target=\"#roxySelectFile\">
\t\t\t\t<img data-roxy_name=\"favicon\" src=\"";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", array()), "html", null, true);
        } else {
            echo "images/no_image.png";
        }
        echo "\" onerror=\"this.src='images/no_image.png'\" alt=\"";
        echo twig_escape_filter($this->env, lang("Favicon"), "html", null, true);
        echo "\" style=\"max-height: 100px\">
\t\t\t</a><br><br>
\t\t\t<input type=\"text\" name=\"favicon\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Favicon"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Favicon"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<label><input type=\"checkbox\" name=\"rodo_alert\" title=\"";
        // line 104
        echo twig_escape_filter($this->env, lang("Show message about personal data processing (RODO)"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "rodo_alert", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Show message about personal data processing (RODO)"), "html", null, true);
        echo "</label><br>
\t\t<label for=\"rodo_alert_text\">";
        // line 105
        echo twig_escape_filter($this->env, lang("Content of alert about processing personal data"), "html", null, true);
        echo ":</label>
\t\t<textarea name=\"rodo_alert_text\" title=\"";
        // line 106
        echo twig_escape_filter($this->env, lang("Content of alert about processing personal data"), "html", null, true);
        echo "\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "rodo_alert_text", array());
        echo "</textarea>
\t\t<script>
\t\t\trun_ckeditor('rodo_alert_text',100);
\t\t</script>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<label for=\"footer_top\">";
        // line 113
        echo twig_escape_filter($this->env, lang("Footer - top"), "html", null, true);
        echo ":</label>
\t\t<textarea name=\"footer_top\" title=\"";
        // line 114
        echo twig_escape_filter($this->env, lang("Footer - top"), "html", null, true);
        echo "\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_top", array());
        echo "</textarea>
\t\t<script>
\t\t\trun_ckeditor('footer_top',100);
\t\t</script>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"footer_bottom\">";
        // line 120
        echo twig_escape_filter($this->env, lang("Footer - bottom"), "html", null, true);
        echo ":</label>
\t\t<textarea id=\"footer_bottom_textarea\" name=\"footer_bottom\" title=\"";
        // line 121
        echo twig_escape_filter($this->env, lang("Footer - bottom"), "html", null, true);
        echo "\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_bottom", array());
        echo "</textarea>
\t\t<script>
\t\t\trun_ckeditor('footer_bottom_textarea',100);
\t\t</script>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<label for=\"code_style\">";
        // line 128
        echo twig_escape_filter($this->env, lang("Additional CSS"), "html", null, true);
        echo "</label>
\t\t<textarea name=\"code_style\" title=\"";
        // line 129
        echo twig_escape_filter($this->env, lang("Additional CSS"), "html", null, true);
        echo "\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "code_style", array());
        echo "</textarea>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"code_head\">";
        // line 132
        echo twig_escape_filter($this->env, lang("Additional code in the HEAD"), "html", null, true);
        echo "</label>
\t\t<textarea name=\"code_head\" title=\"";
        // line 133
        echo twig_escape_filter($this->env, lang("Additional code in the HEAD"), "html", null, true);
        echo "\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "code_head", array());
        echo "</textarea>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"code_body\">";
        // line 136
        echo twig_escape_filter($this->env, lang("Additional code in the BODY"), "html", null, true);
        echo "</label>
\t\t<textarea name=\"code_body\" title=\"";
        // line 137
        echo twig_escape_filter($this->env, lang("Additional code in the BODY"), "html", null, true);
        echo "\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "code_body", array());
        echo "</textarea>
\t</div>
\t<div class=\"form-group\">
\t\t<input type=\"submit\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "settings_appearance.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 140,  450 => 137,  446 => 136,  438 => 133,  434 => 132,  426 => 129,  422 => 128,  410 => 121,  406 => 120,  395 => 114,  391 => 113,  379 => 106,  375 => 105,  365 => 104,  353 => 99,  342 => 97,  336 => 94,  325 => 90,  314 => 88,  308 => 85,  297 => 81,  286 => 79,  280 => 76,  269 => 72,  258 => 70,  252 => 67,  238 => 62,  226 => 59,  214 => 56,  199 => 50,  188 => 48,  173 => 42,  162 => 40,  151 => 38,  140 => 36,  129 => 34,  118 => 32,  107 => 30,  96 => 28,  88 => 22,  73 => 20,  69 => 19,  65 => 18,  60 => 16,  55 => 14,  50 => 11,  48 => 10,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings_appearance.html", "/home/platne/serwer24113/public_html/admin/views/settings_appearance.html");
    }
}
