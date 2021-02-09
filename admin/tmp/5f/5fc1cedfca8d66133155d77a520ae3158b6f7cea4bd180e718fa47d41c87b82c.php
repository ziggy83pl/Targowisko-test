<?php

/* settings_black_list.html */
class __TwigTemplate_5c9207577dc59e0e845ebe6b2e10ce48acd8aac08ef5230895fef591ba85cdfa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "settings_black_list.html", 2);
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
\t<h1><span class=\"glyphicon glyphicon-asterisk\"></span> ";
        // line 6
        echo twig_escape_filter($this->env, lang("Black list"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can edit the black list. Members identified by them will not be able to register or add offer"), "html", null, true);
        echo "</p>
\t<p>";
        // line 8
        echo twig_escape_filter($this->env, lang("Each address type in the new line. After saving will be arranged alphabetically"), "html", null, true);
        echo "</p>
</div>

";
        // line 11
        $this->loadTemplate("alert.tpl", "settings_black_list.html", 11)->display($context);
        // line 12
        echo "
<form method=\"post\" class=\"form-horizontal\" role=\"form\">
\t<input type=\"hidden\" name=\"action\" value=\"save_settings_black_list\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, generateToken("admin_save_settings_black_list"), "html", null, true);
        echo "\">
\t<div class=\"form-group\">
\t\t<label for=\"black_list_email\" class=\"col-sm-3 control-label\">";
        // line 17
        echo twig_escape_filter($this->env, lang("E-mail addresses"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<textarea name=\"black_list_email\" title=\"";
        // line 19
        echo twig_escape_filter($this->env, lang("E-mail addresses"), "html", null, true);
        echo "\" class=\"form-control\" style=\"min-height:150px\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "black_list_email", array()), "html", null, true);
        echo "</textarea>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"black_list_ip\" class=\"col-sm-3 control-label\">";
        // line 23
        echo twig_escape_filter($this->env, lang("IP addresses"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<textarea name=\"black_list_ip\" title=\"";
        // line 25
        echo twig_escape_filter($this->env, lang("IP addresses"), "html", null, true);
        echo "\" class=\"form-control\" style=\"min-height:150px\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "black_list_ip", array()), "html", null, true);
        echo "</textarea>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-3 text-right\">
\t\t\t<label for=\"black_list_words\" class=\"control-label\">";
        // line 30
        echo twig_escape_filter($this->env, lang("Words"), "html", null, true);
        echo ":</label>
\t\t\t<p>";
        // line 31
        echo twig_escape_filter($this->env, lang("Enter a comma-separated list of words that will be automatically removed from the title and content of offers"), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<div class=\"col-sm-9\">
\t\t\t<textarea name=\"black_list_words\" title=\"";
        // line 34
        echo twig_escape_filter($this->env, lang("Words"), "html", null, true);
        echo "\" class=\"form-control\" style=\"min-height:150px\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "black_list_words", array()), "html", null, true);
        echo "</textarea>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<input type=\"submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "settings_black_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 39,  103 => 34,  97 => 31,  93 => 30,  83 => 25,  78 => 23,  69 => 19,  64 => 17,  59 => 15,  54 => 12,  52 => 11,  46 => 8,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings_black_list.html", "/home/platne/serwer24113/public_html/admin/views/settings_black_list.html");
    }
}
