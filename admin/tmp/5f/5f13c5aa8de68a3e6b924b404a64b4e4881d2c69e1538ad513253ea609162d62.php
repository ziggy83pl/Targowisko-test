<?php

/* articles.html */
class __TwigTemplate_18b3179adf89f5f21649ce3df94e75843a3a23efcd0711782c6efe8290d18cea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "articles.html", 2);
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
\t<h1><span class=\"glyphicon glyphicon-edit\"></span> ";
        // line 6
        echo twig_escape_filter($this->env, lang("Articles"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can edit articles"), "html", null, true);
        echo "</p>
\t";
        // line 8
        if ( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "enable_articles", array())) {
            echo "<p class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Warning! Displaying articles is turned off in the settings."), "html", null, true);
            echo "</p>";
        }
        // line 9
        echo "</div>

";
        // line 11
        $this->loadTemplate("alert.tpl", "articles.html", 11)->display($context);
        // line 12
        echo "
<a href=\"?controller=article\" title=\"";
        // line 13
        echo twig_escape_filter($this->env, lang("Add article"), "html", null, true);
        echo "\" class=\"btn btn-success\">";
        echo twig_escape_filter($this->env, lang("Add article"), "html", null, true);
        echo "</a>
<br><br>
";
        // line 15
        if (($context["articles"] ?? null)) {
            // line 16
            echo "\t<table class=\"table parent_select_checkbox table-striped table-bordered table-condensed\">
\t\t<tr>
\t\t\t<th></th> 
\t\t\t<th>";
            // line 19
            echo twig_escape_filter($this->env, lang("Title"), "html", null, true);
            echo "</th>
\t\t\t<th class=\"text-center\">";
            // line 20
            echo twig_escape_filter($this->env, lang("Date"), "html", null, true);
            echo "</th>
\t\t\t<th class=\"text-center\">";
            // line 21
            echo twig_escape_filter($this->env, lang("Edit"), "html", null, true);
            echo "</th>
\t\t\t<th class=\"text-center\">";
            // line 22
            echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
            echo "</th>
\t\t</tr>

\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
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
                // line 26
                echo "\t\t\t<tr>
\t\t\t\t<td class=\"text-center\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "</td>
\t\t\t\t<td><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, path("article", twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), twig_get_attribute($this->env, $this->source, $context["item"], "slug", array())), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t<td class=\"text-center\">";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", array()), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t<td class=\"text-center\"><a href=\"?controller=article&id=";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Edit article"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-edit\"></a></td>
\t\t\t\t<td class=\"text-center\"><a href=\"#\" title=\"";
                // line 31
                echo twig_escape_filter($this->env, lang("Delete article"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-remove text-danger\" data-toggle=\"modal\" data-target=\"#remove_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\"></a></td>
\t\t\t</tr>

\t\t\t<div class=\"modal fade\" id=\"remove_";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, lang("Delete article"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                // line 39
                echo twig_escape_filter($this->env, lang("Delete article"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"remove_article\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, generateToken("admin_remove_article"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t<p>";
                // line 46
                echo twig_escape_filter($this->env, lang("Are you sure you want to delete article"), "html", null, true);
                echo ": \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\"?</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
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
            // line 57
            echo "\t</table>

\t";
            // line 59
            $this->loadTemplate("pagination.tpl", "articles.html", 59)->display($context);
            // line 60
            echo "
";
        } else {
            // line 62
            echo "\t<h4 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Nothing found"), "html", null, true);
            echo "</h4>
";
        }
    }

    public function getTemplateName()
    {
        return "articles.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 62,  210 => 60,  208 => 59,  204 => 57,  183 => 50,  179 => 49,  171 => 46,  166 => 44,  162 => 43,  155 => 39,  143 => 34,  135 => 31,  129 => 30,  125 => 29,  117 => 28,  113 => 27,  110 => 26,  93 => 25,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  70 => 16,  68 => 15,  61 => 13,  58 => 12,  56 => 11,  52 => 9,  46 => 8,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "articles.html", "/home/platne/serwer24113/public_html/admin/views/articles.html");
    }
}
