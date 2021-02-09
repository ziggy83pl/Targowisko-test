<?php

/* logs_payments.html */
class __TwigTemplate_74165480adb3693d4a314ccff7ae2e6d5488b72f67f2c5eda4c2b81ac654ec14 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "logs_payments.html", 2);
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
        echo "<div class=\"modal fade\" id=\"remove\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        echo twig_escape_filter($this->env, lang("Remove logs"), "html", null, true);
        echo "\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 10
        echo twig_escape_filter($this->env, lang("Remove logs"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form method=\"post\">
\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"remove_logs\">
\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, generateToken("admin_remove_logs"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 16
        if ((($context["payments_type"] ?? null) == "dotpay")) {
            // line 17
            echo "\t\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, lang("Are you sure you want to delete the logs payments in"), "html", null, true);
            echo " Dotpay?</p>
\t\t\t\t\t";
        } elseif ((        // line 18
($context["payments_type"] ?? null) == "przelewy24")) {
            // line 19
            echo "\t\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, lang("Are you sure you want to delete the logs payments in"), "html", null, true);
            echo " Przelewy24?</p>
\t\t\t\t\t";
        } elseif ((        // line 20
($context["payments_type"] ?? null) == "paypal")) {
            // line 21
            echo "\t\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, lang("Are you sure you want to delete the logs payments in"), "html", null, true);
            echo " Paypal?</p>
\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t<select name=\"type\" required class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">";
        // line 24
        echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"only_removed\">";
        // line 25
        echo twig_escape_filter($this->env, lang("Only deleted offers"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"all\">";
        // line 26
        echo twig_escape_filter($this->env, lang("All logs"), "html", null, true);
        echo "</option>
\t\t\t\t\t</select>
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
\t<h1><span class=\"glyphicon glyphicon-eur\"></span> ";
        // line 39
        echo twig_escape_filter($this->env, lang("Logs payments"), "html", null, true);
        if ((($context["payments_type"] ?? null) == "dotpay")) {
            echo " - Dotpay";
        } elseif ((($context["payments_type"] ?? null) == "przelewy24")) {
            echo " - Przelewy24";
        } elseif ((($context["payments_type"] ?? null) == "paypal")) {
            echo " - Paypal";
        }
        echo "</h1>
\t<p>";
        // line 40
        echo twig_escape_filter($this->env, lang("Here you can see the logs of payments"), "html", null, true);
        echo "</p>
</div>

";
        // line 43
        $this->loadTemplate("alert.tpl", "logs_payments.html", 43)->display($context);
        // line 44
        echo "
";
        // line 45
        if (($context["payments"] ?? null)) {
            // line 46
            echo "\t<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#remove\">";
            echo twig_escape_filter($this->env, lang("Remove logs"), "html", null, true);
            echo "</button>
\t<br><br>
";
        }
        // line 49
        echo "
";
        // line 50
        if ((($context["payments"] ?? null) && (($context["payments_type"] ?? null) == "dotpay"))) {
            // line 51
            echo "\t<div class=\"table-responsive\">
\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>";
            // line 55
            echo twig_escape_filter($this->env, lang("Offer"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 56
            echo twig_escape_filter($this->env, lang("Dotpay ID"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=dotpay_id\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=dotpay_id&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">Operation Status
\t\t\t\t\t<a href=\"?";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=operation_status\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=operation_status&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">Operation Number
\t\t\t\t\t<a href=\"?";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=operation_number\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=operation_number&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">Operation Amount
\t\t\t\t\t<a href=\"?";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=operation_amount\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=operation_amount&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">Description
\t\t\t\t\t<a href=\"?";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=description\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=description&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">Email
\t\t\t\t\t<a href=\"?";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=email\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=email&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\" style=\"width:95px\">";
            // line 80
            echo twig_escape_filter($this->env, lang("Date"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t</tr>

\t\t\t";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payments"] ?? null));
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
                // line 87
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\">";
                // line 88
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) + twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "limit_start", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 89
                if (twig_get_attribute($this->env, $this->source, $context["item"], "name", array())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, $context["item"], "item_id", array()), twig_get_attribute($this->env, $this->source, $context["item"], "slug", array())), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "</a>";
                } else {
                    echo "ID: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "item_id", array()), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "dotpay_id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "operation_status", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "operation_number", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "operation_amount", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 95
                if (($context["_ADMIN_TEST_MODE_"] ?? null)) {
                    echo "TEST";
                } else {
                    echo "<a href=\"mailto:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                    echo "</a>";
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><b>";
                // line 96
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "Y-m-d"), "html", null, true);
                echo "</b><br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "H:i"), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
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
            // line 99
            echo "\t\t</table>
\t</div>

\t";
            // line 102
            $this->loadTemplate("pagination.tpl", "logs_payments.html", 102)->display($context);
            // line 103
            echo "
";
        } elseif ((        // line 104
($context["payments"] ?? null) && (($context["payments_type"] ?? null) == "przelewy24"))) {
            // line 105
            echo "\t<div class=\"table-responsive\">
\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>";
            // line 109
            echo twig_escape_filter($this->env, lang("Offer"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">p24 order id
\t\t\t\t\t<a href=\"?";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=p24_order_id\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=p24_order_id&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">Status
\t\t\t\t\t<a href=\"?";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=status\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=status&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 118
            echo twig_escape_filter($this->env, lang("Amount"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=amount\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=amount&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">Sandbox
\t\t\t\t\t<a href=\"?";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=sandbox\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=sandbox&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">Errors
\t\t\t\t\t<a href=\"?";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=errors\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=errors&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\" style=\"width:95px\">";
            // line 130
            echo twig_escape_filter($this->env, lang("Date"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t</tr>

\t\t\t";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payments"] ?? null));
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
                // line 137
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\">";
                // line 138
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) + twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "limit_start", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 139
                if (twig_get_attribute($this->env, $this->source, $context["item"], "name", array())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, $context["item"], "item_id", array()), twig_get_attribute($this->env, $this->source, $context["item"], "slug", array())), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "</a>";
                } else {
                    echo "ID: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "item_id", array()), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "p24_order_id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 142
                echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, $context["item"], "amount", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 143
                if (twig_get_attribute($this->env, $this->source, $context["item"], "sandbox", array())) {
                    echo twig_escape_filter($this->env, lang("Yes"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, lang("No"), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "errors", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><b>";
                // line 145
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "Y-m-d"), "html", null, true);
                echo "</b><br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "H:i"), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
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
            // line 148
            echo "\t\t</table>
\t</div>

\t";
            // line 151
            $this->loadTemplate("pagination.tpl", "logs_payments.html", 151)->display($context);
            // line 152
            echo "
";
        } elseif ((        // line 153
($context["payments"] ?? null) && (($context["payments_type"] ?? null) == "paypal"))) {
            // line 154
            echo "\t<div class=\"table-responsive\">
\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>";
            // line 158
            echo twig_escape_filter($this->env, lang("Offer"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 159
            echo twig_escape_filter($this->env, lang("Transaction ID"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=txnid\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=txnid&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 163
            echo twig_escape_filter($this->env, lang("Amount"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=amount\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=amount&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">Status
\t\t\t\t\t<a href=\"?";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=status\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=status&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\">";
            // line 171
            echo twig_escape_filter($this->env, lang("Email"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=email\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=email&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\" style=\"width:95px\">";
            // line 175
            echo twig_escape_filter($this->env, lang("Date"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t</tr>

\t\t\t";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payments"] ?? null));
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
                // line 182
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\">";
                // line 183
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) + twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "limit_start", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 184
                if (twig_get_attribute($this->env, $this->source, $context["item"], "name", array())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, $context["item"], "item_id", array()), twig_get_attribute($this->env, $this->source, $context["item"], "slug", array())), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "</a>";
                } else {
                    echo "ID: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "item_id", array()), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "txnid", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 188
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
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><b>";
                // line 189
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "Y-m-d"), "html", null, true);
                echo "</b><br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "H:i"), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
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
            // line 192
            echo "\t\t</table>
\t</div>

\t";
            // line 195
            $this->loadTemplate("pagination.tpl", "logs_payments.html", 195)->display($context);
            // line 196
            echo "
";
        } else {
            // line 198
            echo "\t<h4 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Nothing found"), "html", null, true);
            echo "</h4>
";
        }
    }

    public function getTemplateName()
    {
        return "logs_payments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  750 => 198,  746 => 196,  744 => 195,  739 => 192,  720 => 189,  706 => 188,  702 => 187,  698 => 186,  694 => 185,  679 => 184,  675 => 183,  672 => 182,  655 => 181,  646 => 177,  640 => 176,  636 => 175,  629 => 173,  623 => 172,  619 => 171,  612 => 169,  606 => 168,  598 => 165,  592 => 164,  588 => 163,  581 => 161,  575 => 160,  571 => 159,  567 => 158,  561 => 154,  559 => 153,  556 => 152,  554 => 151,  549 => 148,  530 => 145,  526 => 144,  518 => 143,  514 => 142,  510 => 141,  506 => 140,  491 => 139,  487 => 138,  484 => 137,  467 => 136,  458 => 132,  452 => 131,  448 => 130,  441 => 128,  435 => 127,  427 => 124,  421 => 123,  413 => 120,  407 => 119,  403 => 118,  396 => 116,  390 => 115,  382 => 112,  376 => 111,  371 => 109,  365 => 105,  363 => 104,  360 => 103,  358 => 102,  353 => 99,  334 => 96,  322 => 95,  318 => 94,  314 => 93,  310 => 92,  306 => 91,  302 => 90,  287 => 89,  283 => 88,  280 => 87,  263 => 86,  254 => 82,  248 => 81,  244 => 80,  237 => 78,  231 => 77,  223 => 74,  217 => 73,  209 => 70,  203 => 69,  195 => 66,  189 => 65,  181 => 62,  175 => 61,  167 => 58,  161 => 57,  157 => 56,  153 => 55,  147 => 51,  145 => 50,  142 => 49,  135 => 46,  133 => 45,  130 => 44,  128 => 43,  122 => 40,  111 => 39,  100 => 31,  96 => 30,  89 => 26,  85 => 25,  81 => 24,  78 => 23,  72 => 21,  70 => 20,  65 => 19,  63 => 18,  58 => 17,  56 => 16,  51 => 14,  44 => 10,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "logs_payments.html", "/home/platne/serwer24113/public_html/admin/views/logs_payments.html");
    }
}
