<?php

/* mails.html */
class __TwigTemplate_fa2b2604e404613fa121a8745907f37925cf69b7af829feb8d0bf71e29746407 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "mails.html", 2);
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
        echo twig_escape_filter($this->env, lang("Mails"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Edit the content of messages sent from your site"), "html", null, true);
        echo "</p>
\t<p>";
        // line 8
        echo twig_escape_filter($this->env, lang("You should always insert links and image paths along with the domain address (starting with http: //) or the {base_url} tag"), "html", null, true);
        echo "</p>
</div>

";
        // line 11
        $this->loadTemplate("alert.tpl", "mails.html", 11)->display($context);
        // line 12
        echo "
<h4>";
        // line 13
        echo twig_escape_filter($this->env, lang("You can use these tags (depending on e-mail)"), "html", null, true);
        echo ":</h4>
<ul>
\t<li><b>{title}</b> - ";
        // line 15
        echo twig_escape_filter($this->env, lang("Title of website"), "html", null, true);
        echo "</li>
\t<li><b>{base_url}</b> - ";
        // line 16
        echo twig_escape_filter($this->env, lang("Base URL"), "html", null, true);
        echo "</li>
\t<li><b>{link_logo}</b> - ";
        // line 17
        echo twig_escape_filter($this->env, lang("Link to logo"), "html", null, true);
        echo "</li>
\t<li><b>{date}</b> - ";
        // line 18
        echo twig_escape_filter($this->env, lang("The current date"), "html", null, true);
        echo "</li>
\t<li><b>{username}</b> - ";
        // line 19
        echo twig_escape_filter($this->env, lang("Username"), "html", null, true);
        echo "</li>
\t<li><b>{activation_link}</b> - ";
        // line 20
        echo twig_escape_filter($this->env, lang("Activation link"), "html", null, true);
        echo "</li>
\t<li><b>{password}</b> - ";
        // line 21
        echo twig_escape_filter($this->env, lang("Hasło"), "html", null, true);
        echo "</li>
\t<li><b>{reset_password_link}</b> - ";
        // line 22
        echo twig_escape_filter($this->env, lang("Link to generate new password"), "html", null, true);
        echo "</li>
\t<li><b>{name}</b> - ";
        // line 23
        echo twig_escape_filter($this->env, lang("Name of the sender"), "html", null, true);
        echo "</li>
\t<li><b>{email}</b> - ";
        // line 24
        echo twig_escape_filter($this->env, lang("Email of the sender"), "html", null, true);
        echo "</li>
\t<li><b>{message}</b> - ";
        // line 25
        echo twig_escape_filter($this->env, lang("Message from the sender"), "html", null, true);
        echo "</li>
\t<li><b>{offer_name}</b> - ";
        // line 26
        echo twig_escape_filter($this->env, lang("Offer name"), "html", null, true);
        echo "</li>
\t<li><b>{offer_url}</b> - ";
        // line 27
        echo twig_escape_filter($this->env, lang("Offer URL"), "html", null, true);
        echo "</li>
\t<li><b>{offer_edit_link}</b> - ";
        // line 28
        echo twig_escape_filter($this->env, lang("Link to edit offer"), "html", null, true);
        echo "</li>
\t<li><b>{offer_activate_link}</b> - ";
        // line 29
        echo twig_escape_filter($this->env, lang("Link to activate offer"), "html", null, true);
        echo "</li>
\t<li><b>{offers_list}</b> - ";
        // line 30
        echo twig_escape_filter($this->env, lang("List of offers"), "html", null, true);
        echo "</li>
</ul>
<br><br>
<form role=\"form\" class=\"form-horizontal\" method=\"post\">
\t<input type=\"hidden\" name=\"action\" value=\"save_mails\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, generateToken("admin_save_mails"), "html", null, true);
        echo "\">
\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "\t\t<div class=\"form-group\">
\t\t\t<h4>";
            // line 38
            echo twig_escape_filter($this->env, lang(twig_get_attribute($this->env, $this->source, $context["item"], "full_name", array())), "html", null, true);
            echo "</h4>
\t\t\t<input type=\"text\" name=\"mails[";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "][subject]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "subject", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Enter the message title"), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, lang("Title"), "html", null, true);
            echo "\" class=\"form-control\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<textarea name=\"mails[";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "][message]\" id=\"message_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "\" class=\"form-control\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "message", array()), "html", null, true);
            echo "</textarea>
\t\t\t<script>
\t\t\t\trun_ckeditor('message_";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "');
\t\t\t</script>
\t\t</div>
\t\t<br>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t<div class=\"form-group\">
\t\t<input type=\"submit\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "mails.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 50,  177 => 49,  166 => 44,  157 => 42,  145 => 39,  141 => 38,  138 => 37,  134 => 36,  130 => 35,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  57 => 13,  54 => 12,  52 => 11,  46 => 8,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mails.html", "/home/platne/serwer24113/public_html/admin/views/mails.html");
    }
}
