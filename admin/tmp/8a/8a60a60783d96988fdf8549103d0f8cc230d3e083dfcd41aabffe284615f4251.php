<?php

/* logs_mails.html */
class __TwigTemplate_9eb0817b0defd0b4900627e9c47e5663c0f36065c4ca6c301759df60b93296e6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "logs_mails.html", 2);
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
        echo twig_escape_filter($this->env, lang("Are you sure you want to delete the logs mails send from serwer?"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

<div class=\"page-header\">
\t<h1><span class=\"glyphicon glyphicon-hdd\"></span> ";
        // line 28
        echo twig_escape_filter($this->env, lang("Logs mails"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 29
        echo twig_escape_filter($this->env, lang("Here you can see logs mails send from serwer"), "html", null, true);
        echo "</p>
</div>

";
        // line 32
        $this->loadTemplate("alert.tpl", "logs_mails.html", 32)->display($context);
        // line 33
        echo "
";
        // line 34
        if (($context["logs_mails"] ?? null)) {
            // line 35
            echo "\t<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#remove\">";
            echo twig_escape_filter($this->env, lang("Remove logs"), "html", null, true);
            echo "</button>
\t<br><br>
\t<div class=\"table-responsive\">
\t\t<table class=\"table parent_select_checkbox table-striped table-bordered table-condensed\">
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>";
            // line 41
            echo twig_escape_filter($this->env, lang("Receiver"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=receiver\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=receiver&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th>";
            // line 45
            echo twig_escape_filter($this->env, lang("Action"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=action\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=action&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th>";
            // line 49
            echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 50
            echo twig_escape_filter($this->env, lang("IP"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=ip\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=ip&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t\t<th class=\"text-center\" style=\"width:95px\">";
            // line 54
            echo twig_escape_filter($this->env, lang("Date"), "html", null, true);
            echo "
\t\t\t\t\t<a href=\"?";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes\"></a>
\t\t\t\t\t<a href=\"?";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page_url", array()), "sort_admin", array()), "html", null, true);
            echo "&sort=date&sort_desc\" title=\"";
            echo twig_escape_filter($this->env, lang("Sort descending"), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-sort-by-attributes-alt\"></a>
\t\t\t\t</th>
\t\t\t</tr>
\t\t\t";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs_mails"] ?? null));
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
                // line 60
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\">";
                // line 61
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) + twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "limit_start", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 62
                if (($context["_ADMIN_TEST_MODE_"] ?? null)) {
                    echo "TEST";
                } else {
                    echo "<a href=\"mailto:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "receiver", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, lang("Write to:"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "receiver", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "receiver", array()), "html", null, true);
                    echo "</a>";
                }
                echo "</td>
\t\t\t\t\t<td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "action", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["item"], "content", array());
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ip", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><b>";
                // line 66
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
            // line 69
            echo "\t\t</table>
\t</div>

\t";
            // line 72
            $this->loadTemplate("pagination.tpl", "logs_mails.html", 72)->display($context);
            // line 73
            echo "
";
        } else {
            // line 75
            echo "\t<h4 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Nothing found"), "html", null, true);
            echo "</h4>
";
        }
    }

    public function getTemplateName()
    {
        return "logs_mails.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 75,  255 => 73,  253 => 72,  248 => 69,  229 => 66,  225 => 65,  221 => 64,  217 => 63,  201 => 62,  197 => 61,  194 => 60,  177 => 59,  169 => 56,  163 => 55,  159 => 54,  152 => 52,  146 => 51,  142 => 50,  138 => 49,  131 => 47,  125 => 46,  121 => 45,  114 => 43,  108 => 42,  104 => 41,  94 => 35,  92 => 34,  89 => 33,  87 => 32,  81 => 29,  77 => 28,  66 => 20,  62 => 19,  56 => 16,  51 => 14,  44 => 10,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "logs_mails.html", "/home/platne/serwer24113/public_html/admin/views/logs_mails.html");
    }
}
