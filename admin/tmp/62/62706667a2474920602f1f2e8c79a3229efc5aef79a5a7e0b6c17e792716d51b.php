<?php

/* offers.html */
class __TwigTemplate_0217fb3f04b74177c8d17bb176547d3034cdce66b2b5329636267ab4a2b7762e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "offers.html", 2);
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
\t<h1><span class=\"glyphicon glyphicon-list-alt\"></span> ";
        // line 6
        echo twig_escape_filter($this->env, lang("Offers"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can see the offer from website. To edit it, you must be an moderator"), "html", null, true);
        echo "</p>
</div>

";
        // line 10
        $this->loadTemplate("alert.tpl", "offers.html", 10)->display($context);
        // line 11
        echo "
<form method=\"get\" class=\"form-horizontal\" role=\"form\">
\t<input type=\"hidden\" name=\"controller\" value=\"offers\">
\t<input type=\"hidden\" name=\"search\">
\t<div class=\"form-group form-group-sm\">
\t\t<div class=\"col-md-2\">
\t\t\t<label for=\"id\">";
        // line 17
        echo twig_escape_filter($this->env, lang("ID"), "html", null, true);
        echo ":</label>
\t\t\t<input type=\"number\" name=\"id\" title=\"";
        // line 18
        echo twig_escape_filter($this->env, lang("Enter the ID of the offer"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("ID"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<label for=\"name\">";
        // line 21
        echo twig_escape_filter($this->env, lang("Offer name"), "html", null, true);
        echo ":</label>
\t\t\t<input type=\"text\" name=\"name\" title=\"";
        // line 22
        echo twig_escape_filter($this->env, lang("Enter the name of the offer"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Offer name"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "name", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label for=\"active\">";
        // line 25
        echo twig_escape_filter($this->env, lang("Active"), "html", null, true);
        echo ":</label>
\t\t\t<select name=\"active\" title=\"";
        // line 26
        echo twig_escape_filter($this->env, lang("Search by active offers"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<option value=\"\">";
        // line 27
        echo twig_escape_filter($this->env, lang("All"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"yes\" ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "active", array()) == "yes")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("Yes"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"no\" ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "active", array()) == "no")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("No"), "html", null, true);
        echo "</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label for=\"promoted\">";
        // line 33
        echo twig_escape_filter($this->env, lang("Promoted"), "html", null, true);
        echo ":</label>
\t\t\t<select name=\"promoted\" title=\"";
        // line 34
        echo twig_escape_filter($this->env, lang("Search by promoted offers"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<option value=\"\">";
        // line 35
        echo twig_escape_filter($this->env, lang("All"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"yes\" ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "promoted", array()) == "yes")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("Yes"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"no\" ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "promoted", array()) == "no")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, lang("No"), "html", null, true);
        echo "</option>
\t\t\t\techo=\"test\"
\t\t\t</select>
\t\t</div>
\t\t";
        // line 41
        if (($context["users"] ?? null)) {
            // line 42
            echo "\t\t\t<div class=\"col-md-3\">
\t\t\t\t<label for=\"user_id\">";
            // line 43
            echo twig_escape_filter($this->env, lang("Select user"), "html", null, true);
            echo ":</label>
\t\t\t\t<select name=\"user_id\" title=\"";
            // line 44
            echo twig_escape_filter($this->env, lang("Select user"), "html", null, true);
            echo "\" class=\"form-control\">
\t\t\t\t\t<option value=\"\">";
            // line 45
            echo twig_escape_filter($this->env, lang("All users"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 47
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "user_id", array()) && (twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "user_id", array()) == twig_get_attribute($this->env, $this->source, $context["user"], "id", array())))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
                echo " - ";
                if (($context["_ADMIN_TEST_MODE_"] ?? null)) {
                    echo "TEST";
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
                }
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t";
        }
        // line 52
        echo "\t</div>
\t<div class=\"form-group form-group-sm\">
\t\t<div class=\"col-md-4\">
\t\t\t<label for=\"date\">";
        // line 55
        echo twig_escape_filter($this->env, lang("Date added"), "html", null, true);
        echo ": </label>
\t\t\t<div class=\"form-inline\">
\t\t\t\t<input name=\"date_from\" title=\"";
        // line 57
        echo twig_escape_filter($this->env, lang("Select the starting date"), "html", null, true);
        echo "\" type=\"text\" max=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "date_from", array()), "html", null, true);
        echo "\" class=\"form-control datepicker\">
\t\t\t\t -
\t\t\t\t<input name=\"date_to\" title=\"";
        // line 59
        echo twig_escape_filter($this->env, lang("Select the end date"), "html", null, true);
        echo "\" type=\"text\" max=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "date_to", array()), "html", null, true);
        echo "\" class=\"form-control datepicker\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<label for=\"date\">";
        // line 63
        echo twig_escape_filter($this->env, lang("Date finish"), "html", null, true);
        echo ": </label>
\t\t\t<div class=\"form-inline\">
\t\t\t\t<input name=\"date_finish_from\" title=\"";
        // line 65
        echo twig_escape_filter($this->env, lang("Select the starting date"), "html", null, true);
        echo "\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "date_finish_from", array()), "html", null, true);
        echo "\" class=\"form-control datepicker\">
\t\t\t\t -
\t\t\t\t<input name=\"date_finish_to\" title=\"";
        // line 67
        echo twig_escape_filter($this->env, lang("Select the end date"), "html", null, true);
        echo "\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "date_finish_to", array()), "html", null, true);
        echo "\" class=\"form-control datepicker\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<label for=\"ip\">";
        // line 71
        echo twig_escape_filter($this->env, lang("IP address"), "html", null, true);
        echo ":</label>
\t\t\t<input type=\"text\" name=\"ip\" title=\"";
        // line 72
        echo twig_escape_filter($this->env, lang("IP address"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("IP address"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["get"] ?? null), "ip", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t\t<div class=\"col-md-2 text-right\">
\t\t\t<label>&nbsp;</label><br>
\t\t\t<input type=\"submit\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, lang("Search"), "html", null, true);
        echo "\" class=\"btn btn-primary text-uppercase\">
\t\t</div>
\t</div>
</form>
<br>
";
        // line 81
        if (($context["offers"] ?? null)) {
            // line 82
            echo "\t<div class=\"table-responsive\">
\t\t<table class=\"table parent_select_checkbox table-striped table-bordered table-condensed\">
\t\t\t<tr>
\t\t\t\t<th class=\"text-center\"><input type=\"checkbox\" class=\"select_checkbox\" title=\"";
            // line 85
            echo twig_escape_filter($this->env, lang("Select all"), "html", null, true);
            echo "\"></th>
\t\t\t\t<th class=\"text-center\">";
            // line 86
            echo twig_escape_filter($this->env, lang("ID"), "html", null, true);
            echo "<br>
\t\t\t\t\t<a href=\"?";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=id\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=id&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 90
            echo twig_escape_filter($this->env, lang("Active"), "html", null, true);
            echo "<br>
\t\t\t\t\t<a href=\"?";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=active\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=active&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 94
            echo twig_escape_filter($this->env, lang("Promoted"), "html", null, true);
            echo "<br>
\t\t\t\t\t<a href=\"?";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=promoted\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=promoted&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th>";
            // line 98
            echo twig_escape_filter($this->env, lang("The name"), "html", null, true);
            echo "<br>
\t\t\t\t\t<a href=\"?";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=name\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=name&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th>";
            // line 102
            echo twig_escape_filter($this->env, lang("User"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 103
            echo twig_escape_filter($this->env, lang("View count"), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, lang("all"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=view_all\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=view_all&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t\t / ";
            // line 106
            echo twig_escape_filter($this->env, lang("unique"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=view_unique\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=view_unique&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 110
            echo twig_escape_filter($this->env, lang("Date added"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t\t<br>";
            // line 113
            echo twig_escape_filter($this->env, lang("Date finish"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date_finish\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date_finish&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th>";
            // line 117
            echo twig_escape_filter($this->env, lang("IP address"), "html", null, true);
            echo "<br>
\t\t\t\t\t<a href=\"?";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=ip\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=ip&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 121
            echo twig_escape_filter($this->env, lang("Edit"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 122
            echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
            echo "</th>
\t\t\t</tr>

\t\t\t";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 126
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"offers[]\" value=\"";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" form=\"form_selected_offers\"></td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 129
                if (twig_get_attribute($this->env, $this->source, $context["item"], "active", array())) {
                    echo "<a href=\"#\" title=\"";
                    echo twig_escape_filter($this->env, lang("Deactivate offer"), "html", null, true);
                    echo "\" data-toggle=\"modal\" data-target=\"#deactivate_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, lang("YES"), "html", null, true);
                    echo "</a>";
                } else {
                    echo "<a href=\"#\" title=\"";
                    echo twig_escape_filter($this->env, lang("Activate offer"), "html", null, true);
                    echo "\" style=\"color:grey\" data-toggle=\"modal\" data-target=\"#activate_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, lang("NO"), "html", null, true);
                    echo "</a>";
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 130
                if (twig_get_attribute($this->env, $this->source, $context["item"], "promoted", array())) {
                    echo "<a href=\"#\" title=\"";
                    echo twig_escape_filter($this->env, lang("No promote offer"), "html", null, true);
                    echo "\" data-toggle=\"modal\" data-target=\"#disable_promote_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, lang("YES"), "html", null, true);
                    echo "</a><br>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "promoted_date_end", array()), "Y-m-d"), "html", null, true);
                } else {
                    echo "<a href=\"#\" title=\"";
                    echo twig_escape_filter($this->env, lang("Promote offer"), "html", null, true);
                    echo "\" style=\"color:grey\" data-toggle=\"modal\" data-target=\"#enable_promote_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, lang("NO"), "html", null, true);
                    echo "</a>";
                }
                echo "</td>
\t\t\t\t\t<td><a href=\"";
                // line 131
                echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), twig_get_attribute($this->env, $this->source, $context["item"], "slug", array())), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 133
                if (twig_get_attribute($this->env, $this->source, $context["item"], "username", array())) {
                    echo "<a href=\"?controller=users&search&username=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "username", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "username", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "username", array()), "html", null, true);
                    echo "</a><br>";
                }
                if (($context["_ADMIN_TEST_MODE_"] ?? null)) {
                    echo "TEST";
                } else {
                    echo "<a href=\"mailto:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                    echo "</a>";
                }
                // line 134
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "view_all", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "view_unique", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 136
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "Y-m-d"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date_finish", array()), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ip", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><a href=\"";
                // line 138
                echo twig_escape_filter($this->env, path("edit", twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), twig_get_attribute($this->env, $this->source, $context["item"], "slug", array())), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Edit offer"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-edit\" target=\"_blank\"></a></td>
\t\t\t\t\t<td class=\"text-center\"><a href=\"#\" title=\"";
                // line 139
                echo twig_escape_filter($this->env, lang("Delete offer"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-remove text-danger\" data-toggle=\"modal\" data-target=\"#remove_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\"></a></td>
\t\t\t\t</tr>

\t\t\t\t<div class=\"modal fade\" id=\"remove_";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, lang("Delete offer"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                // line 147
                echo twig_escape_filter($this->env, lang("Delete offer"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"remove_offer\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"email\" value=\"";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ip\" value=\"";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ip", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                // line 154
                echo twig_escape_filter($this->env, generateToken("admin_remove_offer"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<p>";
                // line 156
                echo twig_escape_filter($this->env, lang("Are you sure you want to delete offer"), "html", null, true);
                echo ": \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\"?</p>
\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"add_email_black_list\"> ";
                // line 157
                echo twig_escape_filter($this->env, lang("Add email to black list"), "html", null, true);
                echo "</label><br>
\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"add_ip_black_list\"> ";
                // line 158
                echo twig_escape_filter($this->env, lang("Add IP to black list"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                // line 161
                echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                // line 162
                echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
                // line 169
                if (twig_get_attribute($this->env, $this->source, $context["item"], "active", array())) {
                    // line 170
                    echo "\t\t\t\t\t<div class=\"modal fade\" id=\"deactivate_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                    echo twig_escape_filter($this->env, lang("Deactivate offer"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                    // line 175
                    echo twig_escape_filter($this->env, lang("Deactivate offer"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"deactivate_offer\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                    // line 179
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                    // line 180
                    echo twig_escape_filter($this->env, generateToken("admin_deactivate_offer"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 182
                    echo twig_escape_filter($this->env, lang("Are you sure you want to deactivate offer"), "html", null, true);
                    echo ": \"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\"?</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                    // line 185
                    echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                    // line 186
                    echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                } else {
                    // line 193
                    echo "\t\t\t\t\t<div class=\"modal fade\" id=\"activate_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                    echo twig_escape_filter($this->env, lang("Activate offer"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                    // line 198
                    echo twig_escape_filter($this->env, lang("Activate offer"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"activate_offer\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                    // line 202
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                    // line 203
                    echo twig_escape_filter($this->env, generateToken("admin_activate_offer"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 205
                    echo twig_escape_filter($this->env, lang("Are you sure you want to activate offer"), "html", null, true);
                    echo ": \"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\"?</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
                    // line 207
                    echo twig_escape_filter($this->env, lang("Date finish"), "html", null, true);
                    echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"date_finish\" min=\"";
                    // line 208
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date_finish", array()), "Y-m-d"), "html", null, true);
                    echo "\" class=\"form-control datepicker\" required></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                    // line 212
                    echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                    // line 213
                    echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 220
                echo "
\t\t\t\t";
                // line 221
                if (twig_get_attribute($this->env, $this->source, $context["item"], "promoted", array())) {
                    // line 222
                    echo "\t\t\t\t\t<div class=\"modal fade\" id=\"disable_promote_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                    echo twig_escape_filter($this->env, lang("No promote offer"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                    // line 227
                    echo twig_escape_filter($this->env, lang("No promote offer"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"disable_promote_offer\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                    // line 231
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                    // line 232
                    echo twig_escape_filter($this->env, generateToken("admin_disable_promote_offer"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 234
                    echo twig_escape_filter($this->env, lang("Are you sure you want disable promote offer"), "html", null, true);
                    echo ": \"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\"?</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                    // line 237
                    echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                    // line 238
                    echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                } else {
                    // line 245
                    echo "\t\t\t\t\t<div class=\"modal fade\" id=\"enable_promote_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                    echo twig_escape_filter($this->env, lang("Promote offer"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                    // line 250
                    echo twig_escape_filter($this->env, lang("Promote offer"), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"enable_promote_offer\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                    // line 254
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                    // line 255
                    echo twig_escape_filter($this->env, generateToken("admin_enable_promote_offer"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 257
                    echo twig_escape_filter($this->env, lang("Are you sure you want enable promote offer"), "html", null, true);
                    echo ": \"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\"?</p>
\t\t\t\t\t\t\t\t\t\t<label>";
                    // line 258
                    echo twig_escape_filter($this->env, lang("Choose final date"), "html", null, true);
                    echo ": </label><input type=\"text\" name=\"date\" title=\"";
                    echo twig_escape_filter($this->env, lang("Choose final date"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+30 day"), "Y-m-d"), "html", null, true);
                    echo "\" min=\"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
                    echo "\" class=\"form-control datepicker\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                    // line 261
                    echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                    // line 262
                    echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 269
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo "\t\t</table>
\t</div>
\t<br>
\t<form method=\"post\" id=\"form_selected_offers\" class=\"form-inline\">
\t\t<input type=\"hidden\" name=\"token\" value=\"";
            // line 275
            echo twig_escape_filter($this->env, generateToken("admin_action_offers"), "html", null, true);
            echo "\">
\t\t<label for=\"action\">";
            // line 276
            echo twig_escape_filter($this->env, lang("Selected"), "html", null, true);
            echo ": </label>
\t\t<select name=\"action\" required title=\"";
            // line 277
            echo twig_escape_filter($this->env, lang("Select the appropriate action"), "html", null, true);
            echo "\" class=\"form-control\">
\t\t\t<option value=\"\">-- ";
            // line 278
            echo twig_escape_filter($this->env, lang("select"), "html", null, true);
            echo " --</option>
\t\t\t<option value=\"remove_offers\">";
            // line 279
            echo twig_escape_filter($this->env, lang("Remove offers"), "html", null, true);
            echo "</option>
\t\t\t<option value=\"active_offers\">";
            // line 280
            echo twig_escape_filter($this->env, lang("Active offers"), "html", null, true);
            echo "</option>
\t\t\t<option value=\"deactive_offers\">";
            // line 281
            echo twig_escape_filter($this->env, lang("Deactivate offers"), "html", null, true);
            echo "</option>
\t\t</select>
\t\t<input type=\"submit\" value=\"";
            // line 283
            echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
            echo "!\" class=\"btn btn-sm btn-danger\">
\t</form>

\t";
            // line 286
            $this->loadTemplate("pagination.tpl", "offers.html", 286)->display($context);
            // line 287
            echo "
";
        } else {
            // line 289
            echo "\t<h4 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Nothing found"), "html", null, true);
            echo "</h4>
";
        }
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
        return array (  919 => 289,  915 => 287,  913 => 286,  907 => 283,  902 => 281,  898 => 280,  894 => 279,  890 => 278,  886 => 277,  882 => 276,  878 => 275,  872 => 271,  865 => 269,  855 => 262,  851 => 261,  839 => 258,  833 => 257,  828 => 255,  824 => 254,  817 => 250,  804 => 245,  794 => 238,  790 => 237,  782 => 234,  777 => 232,  773 => 231,  766 => 227,  753 => 222,  751 => 221,  748 => 220,  738 => 213,  734 => 212,  725 => 208,  721 => 207,  714 => 205,  709 => 203,  705 => 202,  698 => 198,  685 => 193,  675 => 186,  671 => 185,  663 => 182,  658 => 180,  654 => 179,  647 => 175,  634 => 170,  632 => 169,  622 => 162,  618 => 161,  612 => 158,  608 => 157,  602 => 156,  597 => 154,  593 => 153,  589 => 152,  585 => 151,  578 => 147,  566 => 142,  558 => 139,  552 => 138,  548 => 137,  542 => 136,  536 => 135,  533 => 134,  512 => 133,  503 => 131,  482 => 130,  462 => 129,  458 => 128,  454 => 127,  451 => 126,  447 => 125,  441 => 122,  437 => 121,  430 => 119,  424 => 118,  420 => 117,  413 => 115,  407 => 114,  403 => 113,  397 => 112,  391 => 111,  387 => 110,  380 => 108,  374 => 107,  370 => 106,  364 => 105,  358 => 104,  352 => 103,  348 => 102,  341 => 100,  335 => 99,  331 => 98,  324 => 96,  318 => 95,  314 => 94,  307 => 92,  301 => 91,  297 => 90,  290 => 88,  284 => 87,  280 => 86,  276 => 85,  271 => 82,  269 => 81,  261 => 76,  250 => 72,  246 => 71,  237 => 67,  230 => 65,  225 => 63,  214 => 59,  205 => 57,  200 => 55,  195 => 52,  190 => 49,  169 => 47,  165 => 46,  161 => 45,  157 => 44,  153 => 43,  150 => 42,  148 => 41,  137 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  106 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  76 => 22,  72 => 21,  62 => 18,  58 => 17,  50 => 11,  48 => 10,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "offers.html", "/home/platne/serwer24113/public_html/admin/views/offers.html");
    }
}
