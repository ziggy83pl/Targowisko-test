<?php

/* settings_days.html */
class __TwigTemplate_65470d386759cc3f8d9365e4b45477f62f495e3e04f7ec09f13f9fa5a7f8e511 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "settings_days.html", 2);
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
        echo "\t
<div class=\"modal fade\" id=\"add\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        // line 5
        echo twig_escape_filter($this->env, lang("Add display time"), "html", null, true);
        echo "\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 10
        echo twig_escape_filter($this->env, lang("Add display time"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form method=\"post\" class=\"form\">
\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"add_day\">
\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, generateToken("admin_add_day"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"form-group form-inline\">
\t\t\t\t\t\t<label for=\"length\">";
        // line 17
        echo twig_escape_filter($this->env, lang("Length"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"number\" name=\"length\" required min=\"1\" title=\"";
        // line 18
        echo twig_escape_filter($this->env, lang("Number of days"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t\t<label>";
        // line 19
        echo twig_escape_filter($this->env, lang("days"), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group form-inline\">
\t\t\t\t\t\t<label for=\"cost\">";
        // line 22
        echo twig_escape_filter($this->env, lang("Charge"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"cost\" min=\"0\" step=\"0.01\" class=\"form-control\">
\t\t\t\t\t\t\t<div class=\"input-group-addon\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

<div class=\"page-header\">
\t<h1><span class=\"glyphicon glyphicon-asterisk\"></span> ";
        // line 39
        echo twig_escape_filter($this->env, lang("Settings: length of offers"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 40
        echo twig_escape_filter($this->env, lang("Here you can edit the settings of the service"), "html", null, true);
        echo "</p>
</div>

";
        // line 43
        $this->loadTemplate("alert.tpl", "settings_days.html", 43)->display($context);
        // line 44
        echo "
<button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#add\">";
        // line 45
        echo twig_escape_filter($this->env, lang("Add display time"), "html", null, true);
        echo "</button>
<br><br>
";
        // line 47
        if (($context["offers_days"] ?? null)) {
            // line 48
            echo "\t<table class=\"table-striped table-bordered table-condensed\">
\t\t<tr>
\t\t\t<th class=\"text-center\">";
            // line 50
            echo twig_escape_filter($this->env, lang("Length"), "html", null, true);
            echo "</th>
\t\t\t<th class=\"text-center\">";
            // line 51
            echo twig_escape_filter($this->env, lang("Charge"), "html", null, true);
            echo "</th>
\t\t\t<th class=\"text-center\">";
            // line 52
            echo twig_escape_filter($this->env, lang("Edit"), "html", null, true);
            echo "</th>
\t\t\t<th class=\"text-center\">";
            // line 53
            echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
            echo "</th>
\t\t</tr>
\t\t\t
\t\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offers_days"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 57
                echo "\t\t\t<tr>
\t\t\t\t<td class=\"text-center\">";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "length", array()), "html", null, true);
                echo "</td>
\t\t\t\t<td class=\"text-center\">";
                // line 59
                echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, $context["item"], "cost", array())), "html", null, true);
                echo "</td>
\t\t\t\t<td class=\"text-center\"><a href=\"#\" title=\"";
                // line 60
                echo twig_escape_filter($this->env, lang("Edit"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-edit\" data-toggle=\"modal\" data-target=\"#edit_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\"></a></td>
\t\t\t\t<td class=\"text-center\"><a href=\"#\" title=\"";
                // line 61
                echo twig_escape_filter($this->env, lang("Remove display time"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-remove\" data-toggle=\"modal\" data-target=\"#remove_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\"></a></td>
\t\t\t</tr>

\t\t\t<div class=\"modal fade\" id=\"edit_";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, lang("Edit display time"), "html", null, true);
                echo "\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                // line 69
                echo twig_escape_filter($this->env, lang("Edit display time"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form method=\"post\" class=\"form\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"edit_day\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                // line 74
                echo twig_escape_filter($this->env, generateToken("admin_edit_day"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t<div class=\"form-group form-inline\">
\t\t\t\t\t\t\t\t\t<label for=\"length\">";
                // line 77
                echo twig_escape_filter($this->env, lang("Length"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"length\" required min=\"1\" title=\"";
                // line 78
                echo twig_escape_filter($this->env, lang("Number of days"), "html", null, true);
                echo "\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "length", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<label>";
                // line 79
                echo twig_escape_filter($this->env, lang("days"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group form-inline\">
\t\t\t\t\t\t\t\t\t<label for=\"cost\">";
                // line 82
                echo twig_escape_filter($this->env, lang("Charge"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"cost\" min=\"0\" step=\"0.01\" class=\"form-control\" value=\"";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cost", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\">";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                // line 90
                echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                // line 91
                echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"modal fade\" id=\"remove_";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, lang("Remove display time"), "html", null, true);
                echo "\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                // line 103
                echo twig_escape_filter($this->env, lang("Remove display time"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"remove_day\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                // line 108
                echo twig_escape_filter($this->env, generateToken("admin_remove_day"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t<p>";
                // line 110
                echo twig_escape_filter($this->env, lang("Are you sure you want to remove display time"), "html", null, true);
                echo ": \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "length", array()), "html", null, true);
                echo "\"?</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                // line 113
                echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                // line 114
                echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "\t\t
\t</table>
";
        }
        // line 123
        echo "<br><br>
<form method=\"post\" class=\"form\" role=\"form\">
\t<input type=\"hidden\" name=\"action\" value=\"save_settings_days\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, generateToken("admin_save_settings_days"), "html", null, true);
        echo "\">
\t<div class=\"form-group\">
\t\t<label><input type=\"checkbox\" name=\"allow_refresh_offer\" title=\"";
        // line 128
        echo twig_escape_filter($this->env, lang("Allow refresh offers"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "allow_refresh_offer", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Allow refresh offers"), "html", null, true);
        echo "</label><br>
\t</div>
\t<div class=\"form-group form-inline\">
\t\t<label>";
        // line 131
        echo twig_escape_filter($this->env, lang("Refresh extends offer"), "html", null, true);
        echo ":</label>
\t\t<input type=\"number\" step=\"1\" min=\"1\" name=\"days_refresh\" title=\"";
        // line 132
        echo twig_escape_filter($this->env, lang("Number of days"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "days_refresh", array()), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t<label>";
        // line 133
        echo twig_escape_filter($this->env, lang("days"), "html", null, true);
        echo "</label>
\t</div>
\t<div class=\"form-group form-inline\">
\t\t<label>";
        // line 136
        echo twig_escape_filter($this->env, lang("Refresh is available"), "html", null, true);
        echo ":</label>
\t\t<input type=\"number\" step=\"1\" min=\"0\" name=\"days_before_refresh\" title=\"";
        // line 137
        echo twig_escape_filter($this->env, lang("Number of days"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "days_before_refresh", array()), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t<label>";
        // line 138
        echo twig_escape_filter($this->env, lang("days before the end of offer"), "html", null, true);
        echo "</label>
\t</div>
\t<div class=\"form-group form-inline\">
\t\t<p>(";
        // line 141
        echo twig_escape_filter($this->env, lang("The following setting is only active if not determined the times ads"), "html", null, true);
        echo ")</p>
\t\t<label>";
        // line 142
        echo twig_escape_filter($this->env, lang("Default time"), "html", null, true);
        echo ":</label>
\t\t<input type=\"number\" step=\"1\" min=\"1\" name=\"days_default\" title=\"";
        // line 143
        echo twig_escape_filter($this->env, lang("Number of days"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "days_default", array()), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t<label>";
        // line 144
        echo twig_escape_filter($this->env, lang("days"), "html", null, true);
        echo "</label>
\t</div>
\t<div class=\"form-group form-inline\">
\t\t<label>";
        // line 147
        echo twig_escape_filter($this->env, lang("Automatically remove inactive offer after"), "html", null, true);
        echo ":</label>
\t\t<input type=\"number\" step=\"1\" min=\"1\" name=\"days_to_remove\" title=\"";
        // line 148
        echo twig_escape_filter($this->env, lang("Number of days"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "days_to_remove", array()), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t<label>";
        // line 149
        echo twig_escape_filter($this->env, lang("days"), "html", null, true);
        echo "</label>
\t</div>
\t<div class=\"form-group\">
\t\t<input type=\"submit\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "settings_days.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 152,  388 => 149,  382 => 148,  378 => 147,  372 => 144,  366 => 143,  362 => 142,  358 => 141,  352 => 138,  346 => 137,  342 => 136,  336 => 133,  330 => 132,  326 => 131,  314 => 128,  309 => 126,  304 => 123,  299 => 120,  286 => 114,  282 => 113,  274 => 110,  269 => 108,  265 => 107,  258 => 103,  248 => 98,  238 => 91,  234 => 90,  226 => 85,  222 => 84,  217 => 82,  211 => 79,  205 => 78,  201 => 77,  195 => 74,  191 => 73,  184 => 69,  174 => 64,  166 => 61,  160 => 60,  156 => 59,  152 => 58,  149 => 57,  145 => 56,  139 => 53,  135 => 52,  131 => 51,  127 => 50,  123 => 48,  121 => 47,  116 => 45,  113 => 44,  111 => 43,  105 => 40,  101 => 39,  90 => 31,  86 => 30,  78 => 25,  72 => 22,  66 => 19,  62 => 18,  58 => 17,  52 => 14,  45 => 10,  37 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings_days.html", "/home/platne/serwer24113/public_html/admin/views/settings_days.html");
    }
}
