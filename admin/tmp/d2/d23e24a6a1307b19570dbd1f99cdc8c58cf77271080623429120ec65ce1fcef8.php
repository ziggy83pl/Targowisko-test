<?php

/* login.html */
class __TwigTemplate_3f701b684038cc75afcbb9f32612f375a2893bf64a2294fb577b4fe2fb38dc58 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "login.html", 2);
        $this->blocks = array(
            'wrapper' => array($this, 'block_wrapper'),
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
    public function block_wrapper($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t<div class=\"login-form panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\"><span class=\"glyphicon glyphicon-user\"></span> ";
        // line 10
        echo twig_escape_filter($this->env, lang("Login panel"), "html", null, true);
        echo "</h3>
\t\t\t\t</div>
\t\t\t\t<form method=\"post\" class=\"panel-body\">
\t\t\t\t\t<a href=\"http://wyremski.pl\" title=\"Kamil Wyremski - Web Design\" target=\"_blank\"><img src=\"images/admin.png\" alt=\"Admin Logo\" class=\"img-responsive\"></a>
\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"login\">
\t\t\t\t\t<input type=\"hidden\" name=\"session_code\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["session_code"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 16
        $this->loadTemplate("alert.tpl", "login.html", 16)->display($context);
        // line 17
        echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"administrator\" id=\"username\" required title=\"";
        // line 19
        echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, lang("Password"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"****\" id=\"password\" required title=\"";
        // line 23
        echo twig_escape_filter($this->env, lang("Password"), "html", null, true);
        echo "<\">
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-success btn-block\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, lang("Log in"), "html", null, true);
        echo "\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<footer class=\"container-fluid navbar navbar-fixed-bottom\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<p class=\"text-center small\">Admin Panel v4.3 - copyright and project © 2017 - 2018 by <a href=\"http://wyremski.pl\" target=\"_blank\" title=\"Web Design\">Kamil Wyremski</a></p>
\t\t</div>
\t</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  73 => 23,  69 => 22,  63 => 19,  59 => 18,  56 => 17,  54 => 16,  50 => 15,  42 => 10,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html", "/home/platne/serwer24113/public_html/admin/views/login.html");
    }
}
