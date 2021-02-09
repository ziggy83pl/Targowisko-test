<?php

/* article.html */
class __TwigTemplate_916f4cd2270e6fa5f04ab2ea2801e05950f0eda8541015709b08b56edc9ee7a2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "article.html", 2);
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
        if (($context["article"] ?? null)) {
            echo twig_escape_filter($this->env, lang("Edit article"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "name", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, lang("Add article"), "html", null, true);
        }
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can edit articles"), "html", null, true);
        echo "</p>
</div>

";
        // line 10
        $this->loadTemplate("alert.tpl", "article.html", 10)->display($context);
        // line 11
        echo "
<form role=\"form\" class=\"form-horizontal\" method=\"post\">
\t";
        // line 13
        if (($context["article"] ?? null)) {
            // line 14
            echo "\t\t<input type=\"hidden\" name=\"action\" value=\"edit_article\">
\t\t<input type=\"hidden\" name=\"id\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()), "html", null, true);
            echo "\">
\t\t<input type=\"hidden\" name=\"token\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, generateToken("admin_edit_article"), "html", null, true);
            echo "\">
\t";
        } else {
            // line 18
            echo "\t\t<input type=\"hidden\" name=\"action\" value=\"add_article\">
\t\t<input type=\"hidden\" name=\"token\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, generateToken("admin_add_article"), "html", null, true);
            echo "\">
\t";
        }
        // line 21
        echo "\t<div class=\"form-group\">
\t\t<label for=\"name\">";
        // line 22
        echo twig_escape_filter($this->env, lang("Title"), "html", null, true);
        echo "</label>
\t\t<input type=\"text\" name=\"name\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, lang("Title"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Here enter title"), "html", null, true);
        echo "\" maxlength=\"64\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "name", array()), "html", null, true);
        echo "\" required autofocus class=\"form-control\">
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"thumb\">";
        // line 26
        echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
        echo "</label><br>\t
\t\t<a href=\"#\" class=\"open_roxy\" data-target=\"#roxySelectFile\">
\t\t\t<img data-roxy_name=\"thumb\" src=\"";
        // line 28
        if (($context["article"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "thumb", array()), "html", null, true);
        } else {
            echo "images/no_image.png";
        }
        echo "\" onerror=\"this.src='images/no_image.png'\" alt=\"";
        echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
        echo "\" style=\"max-height: 100px\">
\t\t</a><br><br>
\t\t<input type=\"text\" name=\"thumb\" value=\"";
        // line 30
        if (($context["article"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "thumb", array()), "html", null, true);
        }
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Paste the URL of a thumbnail in the article"), "html", null, true);
        echo "\" class=\"form-control\">
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"content_short\">";
        // line 33
        echo twig_escape_filter($this->env, lang("Short content"), "html", null, true);
        echo "</label>
\t\t<textarea name=\"content_short\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, lang("Short content"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Short content"), "html", null, true);
        echo "\" maxlength=\"512\" class=\"form-control\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content_short", array()), "html", null, true);
        echo "</textarea>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"content\">";
        // line 37
        echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
        echo "</label>
\t\t<textarea name=\"content\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
        echo "\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", array());
        echo "</textarea>
\t\t<script>
\t\t\trun_ckeditor('content',300);
\t\t</script>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"keywords\">";
        // line 44
        echo twig_escape_filter($this->env, lang("Keywords SEO"), "html", null, true);
        echo "</label>
\t\t<textarea name=\"keywords\" title=\"";
        // line 45
        echo twig_escape_filter($this->env, lang("Keywords SEO"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Keywords SEO"), "html", null, true);
        echo "\" maxlength=\"512\" class=\"form-control\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "keywords", array()), "html", null, true);
        echo "</textarea>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"title\">";
        // line 48
        echo twig_escape_filter($this->env, lang("Description SEO"), "html", null, true);
        echo "</label>
\t\t<textarea name=\"description\" title=\"";
        // line 49
        echo twig_escape_filter($this->env, lang("Description SEO"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Description SEO"), "html", null, true);
        echo "\" maxlength=\"512\" class=\"form-control\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>
\t</div>
\t<div class=\"form-group\">
\t\t<input type=\"submit\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\" class=\"btn btn-primary text-uppercase\">
\t</div>
\t<br>
\t<div class=\"form-group\">
\t\t<p><a href=\"?controller=articles\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, lang("Back to the list of articles"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("Back to the list of articles"), "html", null, true);
        echo "</a></p>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "article.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 56,  186 => 52,  176 => 49,  172 => 48,  162 => 45,  158 => 44,  145 => 38,  141 => 37,  131 => 34,  127 => 33,  115 => 30,  104 => 28,  99 => 26,  89 => 23,  85 => 22,  82 => 21,  77 => 19,  74 => 18,  69 => 16,  65 => 15,  62 => 14,  60 => 13,  56 => 11,  54 => 10,  48 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article.html", "/home/platne/serwer24113/public_html/admin/views/article.html");
    }
}
