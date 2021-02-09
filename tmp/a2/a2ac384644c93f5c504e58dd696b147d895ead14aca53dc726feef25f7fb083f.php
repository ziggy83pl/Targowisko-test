<?php

/* alert.tpl */
class __TwigTemplate_13e9126daeecec517057ce778e8ec524ba5c781149dadc53268490826404ac1a extends Twig_Template
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
";
        // line 2
        if (($context["alert_success"] ?? null)) {
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["alert_success"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 4
                echo "    <div class=\"alert alert-success\" role=\"alert\"><i class=\"fas fa-exclamation\"></i> ";
                echo twig_escape_filter($this->env, $context["alert"], "html", null, true);
                echo "</div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 7
        if ((($context["alert_success"] ?? null) || ($context["alert_danger"] ?? null))) {
            // line 8
            echo "  <div id=\"js_scroll_page\"></div>
";
        }
        // line 10
        if (($context["alert_danger"] ?? null)) {
            // line 11
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["alert_danger"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 12
                echo "\t <div class=\"alert alert-danger\" role=\"alert\"><i class=\"fas fa-exclamation\"></i> ";
                echo twig_escape_filter($this->env, $context["alert"], "html", null, true);
                echo "</div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "alert.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  51 => 11,  49 => 10,  45 => 8,  43 => 7,  33 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "alert.tpl", "/home/platne/serwer24113/public_html/views/default/alert.tpl");
    }
}
