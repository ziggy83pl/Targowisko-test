<?php

/* contact_form.tpl */
class __TwigTemplate_61a7a6dc0bb215acbfb5e8ed47d0cd55c5ed4da9a52dc6c0ea08e89b097bc145 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<form method=\"post\" enctype=\"multipart/form-data\">
  <input type=\"hidden\" name=\"action\" value=\"send_message\">
  <div class=\"form-group row\">
    <label for=\"name\" class=\"col-sm-4 col-md-2 col-form-label\">";
        // line 5
        echo twig_escape_filter($this->env, lang("Name"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-8 col-md-10\">
      <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, lang("John Smith"), "html", null, true);
        echo "\" required value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["input"] ?? null), "name", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Enter your name"), "html", null, true);
        echo "\">
    </div>
  </div>
  <div class=\"form-group row ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "email", array())) {
            echo "was-validated";
        }
        echo "\">
    <label for=\"email\" class=\"col-sm-4 col-md-2 col-form-label\">";
        // line 11
        echo twig_escape_filter($this->env, lang("E-mail address"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-8 col-md-10\">
      <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, lang("example@example.com"), "html", null, true);
        echo "\" required value=\"";
        if (twig_get_attribute($this->env, $this->source, ($context["input"] ?? null), "email", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["input"] ?? null), "email", array()), "html", null, true);
        } elseif (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        }
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Enter your email address"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) {
            echo "readonly";
        }
        echo ">
      ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "email", array())) {
            echo "<div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "email", array()), "html", null, true);
            echo "</div>";
        }
        // line 15
        echo "    </div>
  </div>
  <div class=\"form-group row\">
    <label for=\"message\" class=\"col-sm-4 col-md-2 col-form-label\">";
        // line 18
        echo twig_escape_filter($this->env, lang("Message"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-8 col-md-10\">
      <textarea class=\"form-control\" rows=\"4\" name=\"message\" id=\"message\" required placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, lang("My message"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Enter your message"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["input"] ?? null), "message", array()), "html", null, true);
        echo "</textarea>
    </div>
  </div>
  ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mail_attachment", array())) {
            // line 24
            echo "    <div class=\"form-group row\">
      <label for=\"attachment\" class=\"col-sm-4 col-md-2 col-form-label\">";
            // line 25
            echo twig_escape_filter($this->env, lang("Attachment"), "html", null, true);
            echo "<i class=\"fas fa-paperclip\"></i></label>
      <div class=\"col-sm-8 col-md-10\">
        <input type=\"file\" name=\"attachment\" id=\"attachment\" title=\"";
            // line 27
            echo twig_escape_filter($this->env, lang("Here you can add an attachment to your message"), "html", null, true);
            echo "\" class=\"form-control-file\">
      </div>
    </div>
  ";
        }
        // line 31
        echo "  <div class=\"form-group row ";
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "captcha", array())) {
            echo "was-validated";
        }
        echo "\">
    <label for=\"captcha\" class=\"col-sm-4 col-md-2 col-form-label\">";
        // line 32
        echo twig_escape_filter($this->env, lang("Captcha"), "html", null, true);
        echo "</label>
    <div class=\"col-sm-4 col-md-3\">
      <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, path("captcha"), "html", null, true);
        echo "\" alt=\"captcha\">
    </div>
    <div class=\"col-sm-4 col-md-7\">
      <input type=\"text\" class=\"form-control\" placeholder=\"abc123\" title=\"";
        // line 37
        echo twig_escape_filter($this->env, lang("Enter the code Captcha"), "html", null, true);
        echo "\" name=\"captcha\" id=\"captcha\" required maxlength=\"32\">
      ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "captcha", array())) {
            echo "<div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "captcha", array()), "html", null, true);
            echo "</div>";
        }
        // line 39
        echo "    </div>
  </div>
  ";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) {
            // line 42
            echo "    <div class=\"form-group row\">
      <div class=\"col-sm-8 col-md-10 offset-sm-4 offset-md-2\">
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" name=\"rules\" required> ";
            // line 46
            echo twig_escape_filter($this->env, lang("Accepts the terms and conditions and the privacy policy"), "html", null, true);
            echo " (<a href=\"";
            echo twig_escape_filter($this->env, path("rules"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Terms of service"), "html", null, true);
            echo "\" target=\"_blank\" class=\"main-color-2\">";
            echo twig_escape_filter($this->env, lang("Terms of service"), "html", null, true);
            echo "</a> - <a href=\"";
            echo twig_escape_filter($this->env, path("privacy_policy"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Privacy policy"), "html", null, true);
            echo "\" target=\"_blank\" class=\"main-color-2\">";
            echo twig_escape_filter($this->env, lang("Privacy policy"), "html", null, true);
            echo "</a>)
          </label>
        </div>
      </div>
    </div>
  ";
        }
        // line 52
        echo "  <div class=\"form-group row\">
    <div class=\"col-sm-8 col-md-10 offset-sm-4 offset-md-2\">
      <input type=\"submit\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, lang("Send!"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
    </div>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "contact_form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 54,  175 => 52,  154 => 46,  148 => 42,  146 => 41,  142 => 39,  136 => 38,  132 => 37,  126 => 34,  121 => 32,  114 => 31,  107 => 27,  102 => 25,  99 => 24,  97 => 23,  87 => 20,  82 => 18,  77 => 15,  71 => 14,  55 => 13,  50 => 11,  44 => 10,  34 => 7,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact_form.tpl", "/home/platne/serwer24113/public_html/views/default/contact_form.tpl");
    }
}
