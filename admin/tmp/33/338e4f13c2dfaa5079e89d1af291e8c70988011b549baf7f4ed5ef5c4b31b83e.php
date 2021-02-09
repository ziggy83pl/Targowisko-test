<?php

/* index_page.html */
class __TwigTemplate_c00a7230bf74aecc433f58778b71f8d344112f60f0ff5af18bd956dcea3ca505 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "index_page.html", 2);
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
        echo twig_escape_filter($this->env, lang("Index page"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can edit content of page"), "html", null, true);
        echo "</p>
</div>

";
        // line 10
        $this->loadTemplate("alert.tpl", "index_page.html", 10)->display($context);
        // line 11
        echo "
<form method=\"post\" class=\"form-horizontal\" role=\"form\">
\t<input type=\"hidden\" name=\"action\" value=\"save_index_page\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, generateToken("admin_save_index_page"), "html", null, true);
        echo "\">
\t<label class=\"control-label\">";
        // line 15
        echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
        echo ":</label>
\t<textarea name=\"index_page\" placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
        echo "\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "index_page", array());
        echo "</textarea>
\t<script>
\t\trun_ckeditor('index_page');
\t</script>
\t<br>
\t<input type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\" class=\"btn btn-primary text-uppercase\">
</form>
<br><br>
<h3>";
        // line 24
        echo twig_escape_filter($this->env, lang("Slider"), "html", null, true);
        echo "</h3>
<p>";
        // line 25
        echo twig_escape_filter($this->env, lang("Subtitles add in tag"), "html", null, true);
        echo ": &lt;div class=&quot;carousel-caption&quot;&gt;&lt;/div&gt;</p>
<form method=\"post\" action=\"\">
\t<input type=\"hidden\" name=\"action\" value=\"add_slide\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, generateToken("admin_add_slide"), "html", null, true);
        echo "\">
\t<input type=\"submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, lang("Add slide"), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success\">
</form>
<br>
";
        // line 32
        if (($context["slider"] ?? null)) {
            // line 33
            echo "\t<form method=\"post\">
\t\t<input type=\"hidden\" name=\"action\" value=\"save_slides\">
\t\t<input type=\"hidden\" name=\"token\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, generateToken("admin_save_slides"), "html", null, true);
            echo "\">
\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 37
                echo "\t\t\t<div id=\"box_slide_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
\t\t\t\t<h4>";
                // line 38
                echo twig_escape_filter($this->env, lang("Slide"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "</h4>
\t\t\t\t<textarea id=\"slide_";
                // line 39
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" name=\"content[]\">";
                echo $context["item"];
                echo "</textarea>
\t\t\t\t<script>
\t\t\t\t\trun_ckeditor('slide_";
                // line 41
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "');
\t\t\t\t</script>
\t\t\t\t<br>
\t\t\t\t<p><a href=\"#\" title=\"";
                // line 44
                echo twig_escape_filter($this->env, lang("Remove slide"), "html", null, true);
                echo "\" data-id=\"box_slide_";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"link_remove_slide text-danger\">";
                echo twig_escape_filter($this->env, lang("Remove slide"), "html", null, true);
                echo "</a></p>
\t\t\t\t<br>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t<input type=\"submit\" value=\"";
            echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary text-uppercase\">
\t</form>
";
        } else {
            // line 51
            echo "\t<h4 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Nothing found"), "html", null, true);
            echo "</h4>
";
        }
    }

    public function getTemplateName()
    {
        return "index_page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 51,  174 => 48,  152 => 44,  146 => 41,  139 => 39,  133 => 38,  128 => 37,  111 => 36,  107 => 35,  103 => 33,  101 => 32,  95 => 29,  91 => 28,  85 => 25,  81 => 24,  75 => 21,  63 => 16,  59 => 15,  55 => 14,  50 => 11,  48 => 10,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index_page.html", "/home/platne/serwer24113/public_html/admin/views/index_page.html");
    }
}
