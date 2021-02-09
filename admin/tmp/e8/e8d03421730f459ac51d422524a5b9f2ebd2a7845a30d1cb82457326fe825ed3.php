<?php

/* mailing.html */
class __TwigTemplate_f9c39c8896240439b6c377e18fee2a1da761e54e692b5b25edcdc262d8e34f1d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "mailing.html", 2);
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
        echo twig_escape_filter($this->env, lang("Mailing"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can send mailing to users"), "html", null, true);
        echo "</p>
\t<p>";
        // line 8
        echo twig_escape_filter($this->env, lang("You should always insert links and image paths along with the domain address (starting with http: //) or the {base_url} tag"), "html", null, true);
        echo "</p>
</div>

";
        // line 11
        $this->loadTemplate("alert.tpl", "mailing.html", 11)->display($context);
        // line 12
        echo "
";
        // line 13
        if (($context["mails_queue"] ?? null)) {
            // line 14
            echo "
\t<div class=\"modal fade\" id=\"modal_cancel_mailing\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
            // line 15
            echo twig_escape_filter($this->env, lang("Cancel mailing"), "html", null, true);
            echo "\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t<h4 class=\"modal-title\">";
            // line 20
            echo twig_escape_filter($this->env, lang("Cancel mailing"), "html", null, true);
            echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form method=\"post\">
\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"cancel_mailing\">
\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, generateToken("admin-cancel_mailing"), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<p>";
            // line 26
            echo twig_escape_filter($this->env, lang("Are you sure you want to empty the mail queue?"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modal_cancel_mailing\">";
            // line 37
            echo twig_escape_filter($this->env, lang("Cancel mailing"), "html", null, true);
            echo "</button>

\t<br><br>
";
        }
        // line 41
        echo "
<form method=\"post\" class=\"form\" role=\"form\">
\t<input type=\"hidden\" name=\"action\" value=\"send_mailing\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, generateToken("admin_send_mailing"), "html", null, true);
        echo "\">
\t<div class=\"form-group\">
\t\t<input type=\"text\" name=\"subject\" title=\"";
        // line 46
        echo twig_escape_filter($this->env, lang("Enter the message title"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Title"), "html", null, true);
        echo "\" required class=\"form-control\">
\t</div>
\t<div class=\"form-group\">
\t\t<textarea name=\"message\"></textarea>
\t\t<script>
\t\t\trun_ckeditor('message');
\t\t</script>
\t</div>
\t<div class=\"form-group\">
\t\t<input type=\"submit\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, lang("Start sending emails"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "mailing.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 55,  119 => 46,  114 => 44,  109 => 41,  102 => 37,  92 => 30,  88 => 29,  82 => 26,  77 => 24,  70 => 20,  62 => 15,  59 => 14,  57 => 13,  54 => 12,  52 => 11,  46 => 8,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mailing.html", "/home/platne/serwer24113/public_html/admin/views/mailing.html");
    }
}
