<?php

/* info.html */
class __TwigTemplate_9534e200c14aa9321c426611b511e20f30a600c7b866a5ef14bb779c6fcfa4df extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "info.html", 2);
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
        echo "\t\t
<div class=\"page-header\">
\t<h1><span class=\"glyphicon glyphicon-edit\"></span> ";
        // line 6
        echo twig_escape_filter($this->env, lang("Info"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can edit content of page"), "html", null, true);
        echo "</p>
</div>

";
        // line 10
        $this->loadTemplate("alert.tpl", "info.html", 10)->display($context);
        // line 11
        echo "
<a href=\"?controller=info_page\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, lang("Add info page"), "html", null, true);
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, lang("Add info page"), "html", null, true);
        echo "</a>
<br><br>
";
        // line 14
        if (($context["info"] ?? null)) {
            // line 15
            echo "\t<table class=\"table parent_select_checkbox table-striped table-bordered table-condensed\">
\t\t<tr>
\t\t\t<th>";
            // line 17
            echo twig_escape_filter($this->env, lang("Title"), "html", null, true);
            echo "</th>
\t\t\t<th class=\"text-center\" style=\"width:55px\">";
            // line 18
            echo twig_escape_filter($this->env, lang("Position"), "html", null, true);
            echo "</th>
\t\t\t<th class=\"text-center\">";
            // line 19
            echo twig_escape_filter($this->env, lang("Edit"), "html", null, true);
            echo "</th>
\t\t\t<th class=\"text-center\">";
            // line 20
            echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
            echo "</th>
\t\t</tr>
\t\t\t
\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["info"] ?? null));
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
                // line 24
                echo "\t\t\t<tr>
\t\t\t\t<td><a href=\"";
                // line 25
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "page", array()) == "contact")) {
                    echo twig_escape_filter($this->env, path("contact"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, path("info", twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), twig_get_attribute($this->env, $this->source, $context["item"], "slug", array())), "html", null, true);
                }
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t<a href=\"#\" title=\"";
                // line 27
                echo twig_escape_filter($this->env, lang("Position up"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-arrow-up ajax ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                    echo "inactive";
                }
                echo "\" data-action=\"position_info\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" data-position=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "position", array()), "html", null, true);
                echo "\" data-plusminus=\"+\" data-token=\"";
                echo twig_escape_filter($this->env, generateToken("admin_position_info"), "html", null, true);
                echo "\"></a>
\t\t\t\t\t<a href=\"#\" title=\"";
                // line 28
                echo twig_escape_filter($this->env, lang("Position down"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-arrow-down ajax ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo "inactive";
                }
                echo "\" data-action=\"position_info\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" data-position=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "position", array()), "html", null, true);
                echo "\" data-plusminus=\"-\" data-token=\"";
                echo twig_escape_filter($this->env, generateToken("admin_position_info"), "html", null, true);
                echo "\"></a>
\t\t\t\t</td>
\t\t\t\t<td class=\"text-center\"><a href=\"?controller=info_page&id=";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Edit info page"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-edit\"></a></td>
\t\t\t\t<td class=\"text-center\">";
                // line 31
                if ( !twig_get_attribute($this->env, $this->source, $context["item"], "page", array())) {
                    echo "<a href=\"#\" title=\"";
                    echo twig_escape_filter($this->env, lang("Delete info page"), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-remove text-danger\" data-toggle=\"modal\" data-target=\"#remove_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\"></a>";
                }
                echo "</td>\t\t
\t\t\t</tr>

\t\t\t<div class=\"modal fade\" id=\"remove_";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, lang("Delete info page"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                // line 39
                echo twig_escape_filter($this->env, lang("Delete info page"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"remove_info\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, generateToken("admin_remove_info"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<p>";
                // line 46
                echo twig_escape_filter($this->env, lang("Are you sure you want to delete info page"), "html", null, true);
                echo ": \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\"?</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t";
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
            // line 56
            echo "\t\t
\t</table>
\t<p><a href=\"#\" title=\"";
            // line 58
            echo twig_escape_filter($this->env, lang("Arrange alphabetically"), "html", null, true);
            echo "\" class=\"ajax_confirm\" data-action=\"arrange_info_alphabetically\" data-title=\"";
            echo twig_escape_filter($this->env, lang("Are you sure you want to arrange alphabetically info subpages?"), "html", null, true);
            echo "\" data-token=\"";
            echo twig_escape_filter($this->env, generateToken("admin_arrange_info_alphabetically"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, lang("Arrange alphabetically"), "html", null, true);
            echo "</a></p>
";
        } else {
            // line 60
            echo "\t<h4 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Nothing found"), "html", null, true);
            echo "</h4>
";
        }
    }

    public function getTemplateName()
    {
        return "info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 60,  229 => 58,  225 => 56,  204 => 50,  200 => 49,  192 => 46,  187 => 44,  183 => 43,  176 => 39,  164 => 34,  152 => 31,  146 => 30,  131 => 28,  117 => 27,  104 => 25,  101 => 24,  84 => 23,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 15,  60 => 14,  53 => 12,  50 => 11,  48 => 10,  42 => 7,  38 => 6,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "info.html", "/home/platne/serwer24113/public_html/admin/views/info.html");
    }
}
