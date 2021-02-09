<?php

/* options.html */
class __TwigTemplate_e1bccbb92b9dc1f4c507007f6dbe6dca792551743a1c0e966dba453454cf7e4f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "options.html", 2);
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
\t<h1><span class=\"glyphicon glyphicon-tree-deciduous\"></span> ";
        // line 6
        echo twig_escape_filter($this->env, lang("Offers options"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can edit the offers options"), "html", null, true);
        echo "</p>
</div>

";
        // line 10
        $this->loadTemplate("alert.tpl", "options.html", 10)->display($context);
        // line 11
        echo "
<p><a href=\"?controller=option\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, lang("Add option"), "html", null, true);
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, lang("Add option"), "html", null, true);
        echo "</a></p>
<br>
";
        // line 14
        if (($context["options"] ?? null)) {
            // line 15
            echo "\t<div class=\"table-responsive\">
\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>";
            // line 19
            echo twig_escape_filter($this->env, lang("The name"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\" style=\"width:55px\">";
            // line 20
            echo twig_escape_filter($this->env, lang("Position"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 21
            echo twig_escape_filter($this->env, lang("Kind"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 22
            echo twig_escape_filter($this->env, lang("Available choices"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 23
            echo twig_escape_filter($this->env, lang("Required"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 24
            echo twig_escape_filter($this->env, lang("All categories"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 25
            echo twig_escape_filter($this->env, lang("In search"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 26
            echo twig_escape_filter($this->env, lang("Edit"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 27
            echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
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
                // line 30
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["item"], "pernament", array())) {
                    echo twig_escape_filter($this->env, lang(twig_get_attribute($this->env, $this->source, $context["item"], "name", array())), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t<a href=\"#\" title=\"";
                // line 34
                echo twig_escape_filter($this->env, lang("Position up"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-arrow-up ajax ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) < 2)) {
                    echo "inactive";
                }
                echo "\" data-action=\"position_options\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" data-position=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "position", array()), "html", null, true);
                echo "\" data-plusminus=\"+\" data-token=\"";
                echo twig_escape_filter($this->env, generateToken("admin_position_options"), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t<a href=\"#\" title=\"";
                // line 35
                echo twig_escape_filter($this->env, lang("Position down"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-arrow-down ajax ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()) || twig_get_attribute($this->env, $this->source, $context["loop"], "first", array()))) {
                    echo "inactive";
                }
                echo "\" data-action=\"position_options\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" data-position=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "position", array()), "html", null, true);
                echo "\" data-plusminus=\"-\" data-token=\"";
                echo twig_escape_filter($this->env, generateToken("admin_position_options"), "html", null, true);
                echo "\"></a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "kindName", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "select_choices", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["item"], "required", array())) {
                    echo twig_escape_filter($this->env, lang("Yes"), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["item"], "categories_all", array())) {
                    echo twig_escape_filter($this->env, lang("Yes"), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["item"], "search", array())) {
                    echo twig_escape_filter($this->env, lang("Yes"), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><a href=\"?controller=option&id=";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Edit"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-edit\"></a></td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 43
                if ( !twig_get_attribute($this->env, $this->source, $context["item"], "pernament", array())) {
                    echo "<a href=\"#\" title=\"";
                    echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-remove text-danger\" data-toggle=\"modal\" data-target=\"#remove_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\"></a>";
                }
                echo "</td>
\t\t\t\t</tr>

\t\t\t\t<div class=\"modal fade\" id=\"remove_";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, lang("Remove option"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                // line 51
                echo twig_escape_filter($this->env, lang("Remove option"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"remove_option\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                // line 56
                echo twig_escape_filter($this->env, generateToken("admin_remove_option"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<p>";
                // line 58
                echo twig_escape_filter($this->env, lang("Are you sure you want to remove option"), "html", null, true);
                echo ": \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\"?</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                // line 62
                echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
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
";
        } else {
            // line 72
            echo "\t<h4 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Nothing found"), "html", null, true);
            echo "</h4>
";
        }
    }

    public function getTemplateName()
    {
        return "options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 72,  272 => 69,  251 => 62,  247 => 61,  239 => 58,  234 => 56,  230 => 55,  223 => 51,  211 => 46,  199 => 43,  193 => 42,  187 => 41,  181 => 40,  175 => 39,  171 => 38,  167 => 37,  152 => 35,  138 => 34,  129 => 32,  125 => 31,  122 => 30,  105 => 29,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  62 => 15,  60 => 14,  53 => 12,  50 => 11,  48 => 10,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "options.html", "/home/platne/serwer24113/public_html/admin/views/options.html");
    }
}
