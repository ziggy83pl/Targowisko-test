<?php

/* logs_offers.html */
class __TwigTemplate_e3a64e513c72ac9ced0724d78ca29b0df60b51c29a06b2b20d8590667d50de4b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "logs_offers.html", 2);
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
\t\t\t\t\t<p>";
        // line 16
        echo twig_escape_filter($this->env, lang("Are you sure you want to delete the offers display logs?"), "html", null, true);
        echo "</p>
\t\t\t\t\t<select name=\"type\" required class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">";
        // line 18
        echo twig_escape_filter($this->env, lang("-- select --"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"only_removed\">";
        // line 19
        echo twig_escape_filter($this->env, lang("Only deleted offers"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t<option value=\"all\">";
        // line 20
        echo twig_escape_filter($this->env, lang("All logs"), "html", null, true);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

<div class=\"page-header\">
\t<h1><span class=\"glyphicon glyphicon-hdd\"></span> ";
        // line 33
        echo twig_escape_filter($this->env, lang("Logs offers"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 34
        echo twig_escape_filter($this->env, lang("Here you can see logs offers"), "html", null, true);
        echo "</p>
</div>

";
        // line 37
        $this->loadTemplate("alert.tpl", "logs_offers.html", 37)->display($context);
        // line 38
        echo "
";
        // line 39
        if (($context["logs_offers"] ?? null)) {
            // line 40
            echo "\t<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#remove\">";
            echo twig_escape_filter($this->env, lang("Remove logs"), "html", null, true);
            echo "</button>
\t<br><br>
\t<div class=\"table-responsive\">
\t\t<table class=\"table parent_select_checkbox table-striped table-bordered table-condensed\">
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>";
            // line 46
            echo twig_escape_filter($this->env, lang("Offer"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 47
            echo twig_escape_filter($this->env, lang("User"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 48
            echo twig_escape_filter($this->env, lang("IP"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=ip\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=ip&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\" style=\"width:95px\">";
            // line 52
            echo twig_escape_filter($this->env, lang("Date"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t</tr>

\t\t\t";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs_offers"] ?? null));
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
                // line 59
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\">";
                // line 60
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) + twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "limit_start", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["item"], "name", array())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, $context["item"], "offer_id", array()), twig_get_attribute($this->env, $this->source, $context["item"], "slug", array())), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "</a>";
                } else {
                    echo "ID: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "offer_id", array()), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td>";
                // line 62
                if (twig_get_attribute($this->env, $this->source, $context["item"], "username", array())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, path("profile", twig_get_attribute($this->env, $this->source, $context["item"], "user_id", array()), twig_get_attribute($this->env, $this->source, $context["item"], "username", array())), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, lang("Profile of"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "username", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "username", array()), "html", null, true);
                    echo "</a> - ";
                    if (($context["_ADMIN_TEST_MODE_"] ?? null)) {
                        echo "TEST";
                    } else {
                        echo "<a href=\"mailto:";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, lang("Write to:"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", array()), "html", null, true);
                        echo "</a>";
                    }
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ip", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><b>";
                // line 64
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
            // line 67
            echo "\t\t</table>
\t</div>

\t";
            // line 70
            $this->loadTemplate("pagination.tpl", "logs_offers.html", 70)->display($context);
            // line 71
            echo "
";
        } else {
            // line 73
            echo "\t<h4 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Nothing found"), "html", null, true);
            echo "</h4>
";
        }
    }

    public function getTemplateName()
    {
        return "logs_offers.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 73,  258 => 71,  256 => 70,  251 => 67,  232 => 64,  228 => 63,  201 => 62,  186 => 61,  182 => 60,  179 => 59,  162 => 58,  153 => 54,  147 => 53,  143 => 52,  136 => 50,  130 => 49,  126 => 48,  122 => 47,  118 => 46,  108 => 40,  106 => 39,  103 => 38,  101 => 37,  95 => 34,  91 => 33,  80 => 25,  76 => 24,  69 => 20,  65 => 19,  61 => 18,  56 => 16,  51 => 14,  44 => 10,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "logs_offers.html", "/home/platne/serwer24113/public_html/admin/views/logs_offers.html");
    }
}
