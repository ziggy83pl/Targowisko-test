<?php

/* settings_payments.html */
class __TwigTemplate_dcf214cc14efc4e511c1324b4c3057c9a26fd61f33d5a087175c377021f2ef86 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "settings_payments.html", 2);
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
        echo twig_escape_filter($this->env, lang("Payment settings"), "html", null, true);
        echo "</h1>
\t<p>";
        // line 7
        echo twig_escape_filter($this->env, lang("Here you can edit the settings of the service"), "html", null, true);
        echo "</p>
</div>

";
        // line 10
        $this->loadTemplate("alert.tpl", "settings_payments.html", 10)->display($context);
        // line 11
        echo "
<form method=\"post\" class=\"form-horizontal\" role=\"form\">
\t<input type=\"hidden\" name=\"action\" value=\"save_settings_payments\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, generateToken("admin_save_settings_payments"), "html", null, true);
        echo "\">
\t<div class=\"form-group\">
\t\t<label for=\"currency\" class=\"col-sm-3 control-label\">";
        // line 16
        echo twig_escape_filter($this->env, lang("Shortcut currency"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<input type=\"text\" name=\"currency\" placeholder=\"zł\" title=\"";
        // line 18
        echo twig_escape_filter($this->env, lang("Shortcut currency"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"add_cost\" class=\"col-sm-3 control-label\">";
        // line 22
        echo twig_escape_filter($this->env, lang("The cost of issuing offer"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"add_cost\" title=\"";
        // line 25
        echo twig_escape_filter($this->env, lang("The cost of issuing offer"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "add_cost", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"promote_days\" class=\"col-sm-3 control-label\">";
        // line 31
        echo twig_escape_filter($this->env, lang("Promoting - the number of days"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-4\"><!--promowanie dni 30-->
\t\t\t<input type=\"number\" min=\"1\" step=\"1\" name=\"promote_days\" title=\"";
        // line 33
        echo twig_escape_filter($this->env, lang("Promoting - the number of days"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days", array()), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t</div>
\t\t<div class=\"col-sm-4\"><!--promowanie dni 60-->
\t\t\t<input type=\"number\" min=\"1\" step=\"1\" name=\"promote_days02\" title=\"";
        // line 36
        echo twig_escape_filter($this->env, lang("Promoting - the number of days"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days02", array()), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"promote_cost\" class=\"col-sm-3 control-label\"title=\"Koszt promowanie Lokalnie\">";
        // line 40
        echo twig_escape_filter($this->env, lang("The cost of a promote"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-4\"><!--OGŁOSZENIE LOKALNIE-->
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"promote_cost\" title=\"";
        // line 43
        echo twig_escape_filter($this->env, lang("The cost of a promote"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\"style=\"max-width: 150px;color: #004085;
\t\t\t\tbackground-color: #b8daff;\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "<span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
\t\t\t\t\tLokalnie
\t\t\t\t  </span></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-sm-4\"><!--60 DNI-->
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"promote_cost_0\" title=\"";
        // line 53
        echo twig_escape_filter($this->env, lang("The cost of a promote"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost_0", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\"style=\"max-width: 150px;color: #004085;
\t\t\t\tbackground-color: #b8daff;\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "<span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
\t\t\t\t\tza ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days02", array()), "html", null, true);
        echo " dni.
\t\t\t\t  </span></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"promote_cost\" class=\"col-sm-3 control-label\"title=\"Koszt promowanie regionalnie\">";
        // line 62
        echo twig_escape_filter($this->env, lang("The cost of a promote"), "html", null, true);
        echo " R:</label>
\t\t<div class=\"col-sm-4\"><!--OGŁOSZENIE REGIONALNIE-->
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"promote_cost1\" title=\"";
        // line 65
        echo twig_escape_filter($this->env, lang("The cost of a promote"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost1", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\"style=\"max-width: 150px;color: #155724;
\t\t\t\tbackground-color: #c3e6cb;\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "<span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
\t\t\t\t\tRegionalnie
\t\t\t\t  </span></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-sm-4\"><!--60 DNI-->
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"promote_cost1_5\" title=\"";
        // line 75
        echo twig_escape_filter($this->env, lang("The cost of a promote"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost1_5", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\"style=\"max-width: 150px;color: #155724;
\t\t\t\tbackground-color: #c3e6cb;\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "<span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
\t\t\t\t\tza ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days02", array()), "html", null, true);
        echo " dni
\t\t\t\t  </span></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"promote_cost\" class=\"col-sm-3 control-label\"title=\"Koszt promowania ogólnopolskie\">";
        // line 84
        echo twig_escape_filter($this->env, lang("The cost of a promote"), "html", null, true);
        echo " O:</label>
\t\t<div class=\"col-sm-4\"><!--OGŁOSZENIE OGÓLNOPOLSKIE-->
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"promote_cost2\" title=\"";
        // line 87
        echo twig_escape_filter($this->env, lang("The cost of a promote"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost2", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\"style=\"max-width: 150px;color: #0c5460;
\t\t\t\tbackground-color:#bee5eb;\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "<span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
\t\t\t\t\tOgólnopolskie
\t\t\t\t  </span></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-sm-4\"><!--60 DNI-->
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"promote_cost2_5\" title=\"";
        // line 97
        echo twig_escape_filter($this->env, lang("The cost of a promote"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost2_5", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\"style=\"max-width: 150px;color: #0c5460;
\t\t\t\tbackground-color:#bee5eb\">";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "<span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
\t\t\t\t\tza ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days02", array()), "html", null, true);
        echo " dni
\t\t\t\t  </span></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"promote_only_by_author\" title=\"";
        // line 108
        echo twig_escape_filter($this->env, lang("Only logged user who added offer can promote it"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_only_by_author", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Only logged user who added offer can promote it"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<hr>   <!--***********Koszt dodania reklamy************----------->
\t<div class=\"form-group\">
\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t<label>Koszt dodania reklamy</label>
\t</div>
\t\t<label for=\"settings.Ad_price_1\" class=\"col-sm-3 control-label\"title=\"Koszt reklamy Lokalnie\">";
        // line 116
        echo twig_escape_filter($this->env, lang("The cost of a ad"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-4\"><!--REKLAMA LOKALNIE-->
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"Ad_price_1\" title=\"";
        // line 119
        echo twig_escape_filter($this->env, lang("The cost of a ad"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Ad_price_1", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\"style=\"max-width: 150px;color: #004085;
\t\t\t\tbackground-color: #b8daff;\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "<span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
\t\t\t\t\tLokalnie
\t\t\t\t  </span></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-sm-4\"><!--60-->
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"Ad_price_1_5\" title=\"";
        // line 129
        echo twig_escape_filter($this->env, lang("The cost of a ad"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Ad_price_1_5", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\"style=\"max-width: 150px;color: #004085;
\t\t\t\tbackground-color: #b8daff;\">";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "<span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
\t\t\t\t\tza 60 dni
\t\t\t\t  </span></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"promote_cost\" class=\"col-sm-3 control-label\"title=\"Koszt reklamy regionalnie\">";
        // line 138
        echo twig_escape_filter($this->env, lang("The cost of a ad"), "html", null, true);
        echo " R:</label>
\t\t<div class=\"col-sm-4\"><!--REKLAMA REGIONALNIE-->
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"Ad_price_2\" title=\"";
        // line 141
        echo twig_escape_filter($this->env, lang("The cost of a ad"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Ad_price_2", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\"style=\"max-width: 150px;color: #155724;
\t\t\t\tbackground-color: #c3e6cb;\">";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "<span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
\t\t\t\t\tRegionalnie
\t\t\t\t  </span></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-sm-4\"><!--60-->
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"Ad_price_2_5\" title=\"";
        // line 151
        echo twig_escape_filter($this->env, lang("The cost of a ad"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Ad_price_2_5", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\"style=\"max-width: 150px;color: #155724;
\t\t\t\tbackground-color: #c3e6cb;\">";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "<span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
\t\t\t\t\tza 60 dni
\t\t\t\t  </span></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"promote_cost\" class=\"col-sm-3 control-label\"title=\"Koszt reklamy ogólnopolskie\">";
        // line 160
        echo twig_escape_filter($this->env, lang("The cost of a ad"), "html", null, true);
        echo " O:</label>
\t\t<div class=\"col-sm-4\"><!--REKLAMA OGÓLNOPOLSKIE-->
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"Ad_price_3\" title=\"";
        // line 163
        echo twig_escape_filter($this->env, lang("The cost of a ad"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Ad_price_3", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\"style=\"max-width: 150px;color: #0c5460;
\t\t\t\tbackground-color:#bee5eb;\">";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "<span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
\t\t\t\t\tOgólnopolskie
\t\t\t\t  </span></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-sm-4\"><!--60-->
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"number\" min=\"0\" step=\"0.01\" name=\"Ad_price_3_5\" title=\"";
        // line 173
        echo twig_escape_filter($this->env, lang("The cost of a ad"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Ad_price_3_5", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t<div class=\"input-group-addon\"style=\"max-width: 150px;color: #0c5460;
\t\t\t\tbackground-color:#bee5eb\">";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "<span class=\"d-inline-block text-truncate\" style=\"max-width: 150px;\">
\t\t\t\t\tza 60 dni
\t\t\t\t  </span></div>
\t\t\t</div>
\t\t</div><!--***********Koszt dodania reklamy************----------->
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"pay_by_dotpay\" title=\"";
        // line 184
        echo twig_escape_filter($this->env, lang("Pay by Dotpay"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_dotpay", array())) {
            echo "checked";
        }
        echo " class=\"set_required\" data-target=\"target_pay_by_dotpay\"> ";
        echo twig_escape_filter($this->env, lang("Pay by Dotpay"), "html", null, true);
        echo "</label><img src=\"images/dotpay_logo.png\" class=\"rounded float-left\" alt=\"Dotpay\"style=\"margin-left:5px;\"><p><a href=\"https://ssl.dotpay.pl/s2/login/cloudfs1/magellan_media/common_file/dotpay_instrukcja_techniczna_implementacji_platnosci.pdf\" title=\"Dotpay\" target=\"_blank\">";
        echo twig_escape_filter($this->env, lang("Manual"), "html", null, true);
        echo "</a></p>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"dotpay_id\" class=\"col-sm-3 control-label\">";
        // line 188
        echo twig_escape_filter($this->env, lang("Dotpay ID"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-4\">
\t\t\t<input type=\"text\" name=\"dotpay_id\" title=\"";
        // line 190
        echo twig_escape_filter($this->env, lang("Dotpay ID"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dotpay_id", array()), "html", null, true);
        echo "\" class=\"target_pay_by_dotpay form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"dotpay_pin\" class=\"col-sm-3 control-label\">";
        // line 194
        echo twig_escape_filter($this->env, lang("Dotpay PIN"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-4\">
\t\t\t<input type=\"text\" name=\"dotpay_pin\" title=\"";
        // line 196
        echo twig_escape_filter($this->env, lang("Dotpay PIN"), "html", null, true);
        echo "\" value=\"";
        if (($context["_ADMIN_TEST_MODE_"] ?? null)) {
            echo "test";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dotpay_pin", array()), "html", null, true);
        }
        echo "\" class=\"target_pay_by_dotpay form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"dotpay_currency\" class=\"col-sm-3 control-label\">";
        // line 200
        echo twig_escape_filter($this->env, lang("Dotpay currency"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-4\">
\t\t\t<input type=\"text\" name=\"dotpay_currency\" title=\"";
        // line 202
        echo twig_escape_filter($this->env, lang("Dotpay currency"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dotpay_currency", array()), "html", null, true);
        echo "\" class=\"target_pay_by_dotpay form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"dotpay_test_mode\" title=\"";
        // line 207
        echo twig_escape_filter($this->env, lang("Dotpay Test Mode"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dotpay_test_mode", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Dotpay Test Mode"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"pay_by_paypal\" title=\"";
        // line 213
        echo twig_escape_filter($this->env, lang("Pay by PayPal"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_paypal", array())) {
            echo "checked";
        }
        echo " class=\"set_required\" data-target=\"target_pay_by_paypal\"> ";
        echo twig_escape_filter($this->env, lang("Pay by PayPal"), "html", null, true);
        echo "</label><img src=\"images/paypal_logo.png\" class=\"rounded float-left\" alt=\"PayPal\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"paypal_email\" class=\"col-sm-3 control-label\">";
        // line 217
        echo twig_escape_filter($this->env, lang("PayPal email"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-4\">
\t\t\t<input type=\"email\" name=\"paypal_email\" title=\"";
        // line 219
        echo twig_escape_filter($this->env, lang("PayPal email"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "paypal_email", array()), "html", null, true);
        echo "\" class=\"target_pay_by_paypal form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"paypal_lc\" class=\"col-sm-3 control-label\">";
        // line 223
        echo twig_escape_filter($this->env, lang("PayPal location"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-4\">
\t\t\t<input type=\"text\" name=\"paypal_lc\" title=\"";
        // line 225
        echo twig_escape_filter($this->env, lang("PayPal location"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "paypal_lc", array()), "html", null, true);
        echo "\" class=\"target_pay_by_paypal form-control\">
\t\t\t<p><a href=\"https://developer.paypal.com/docs/classic/api/country_codes/\" title=\"Country Codes\" target=\"_blank\">https://developer.paypal.com/docs/classic/api/country_codes/</a></p>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"paypal_currency\" class=\"col-sm-3 control-label\">";
        // line 230
        echo twig_escape_filter($this->env, lang("PayPal currency"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-4\">
\t\t\t<input type=\"text\" name=\"paypal_currency\" title=\"";
        // line 232
        echo twig_escape_filter($this->env, lang("PayPal currency"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "paypal_currency", array()), "html", null, true);
        echo "\" class=\"target_pay_by_paypal form-control\">
\t\t\t<p><a href=\"https://developer.paypal.com/docs/classic/api/currency_codes/\" title=\"Currency\" target=\"_blank\">https://developer.paypal.com/docs/classic/api/currency_codes/</a></p>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"paypal_test_mode\" title=\"";
        // line 238
        echo twig_escape_filter($this->env, lang("PayPal Test Mode"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "paypal_test_mode", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("PayPal Test Mode"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<hr>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"pay_by_p24\" title=\"";
        // line 244
        echo twig_escape_filter($this->env, lang("Pay by Przelewy24"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_p24", array())) {
            echo "checked";
        }
        echo " class=\"set_required\" data-target=\"target_pay_p24\"> ";
        echo twig_escape_filter($this->env, lang("Pay by Przelewy24"), "html", null, true);
        echo "</label>
\t\t\t<p><a href=\"https://www.przelewy24.pl/storage/app/media/pobierz/Instalacja/przelewy24_dokumentacja_3.2.pdf\" title=\"Przelewy24\" target=\"_blank\">";
        // line 245
        echo twig_escape_filter($this->env, lang("Manual"), "html", null, true);
        echo "</a></p>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"p24_merchant_id\" class=\"col-sm-3 control-label\">";
        // line 249
        echo twig_escape_filter($this->env, lang("Przelewy24 - Merchant ID"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-4\">
\t\t\t<input type=\"text\" name=\"p24_merchant_id\" title=\"";
        // line 251
        echo twig_escape_filter($this->env, lang("Przelewy24 - Merchant ID"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "p24_merchant_id", array()), "html", null, true);
        echo "\" class=\"target_pay_p24 form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"p24_pos_id\" class=\"col-sm-3 control-label\">";
        // line 255
        echo twig_escape_filter($this->env, lang("Przelewy24 - Pos ID"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-4\">
\t\t\t<input type=\"text\" name=\"p24_pos_id\" title=\"";
        // line 257
        echo twig_escape_filter($this->env, lang("Przelewy24 - Pos ID"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "p24_pos_id", array()), "html", null, true);
        echo "\" class=\"target_pay_p24 form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"p24_crc\" class=\"col-sm-3 control-label\">";
        // line 261
        echo twig_escape_filter($this->env, lang("Przelewy24 - CRC"), "html", null, true);
        echo ":</label>
\t\t<div class=\"col-sm-4\">
\t\t\t<input type=\"text\" name=\"p24_crc\" title=\"";
        // line 263
        echo twig_escape_filter($this->env, lang("Przelewy24 - CRC"), "html", null, true);
        echo "\" value=\"";
        if (($context["_ADMIN_TEST_MODE_"] ?? null)) {
            echo "test";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "p24_crc", array()), "html", null, true);
        }
        echo "\" class=\"target_pay_p24 form-control\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<label><input type=\"checkbox\" name=\"p24_sandbox\" title=\"";
        // line 268
        echo twig_escape_filter($this->env, lang("Przelewy24 - sandbox"), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "p24_sandbox", array())) {
            echo "checked";
        }
        echo "> ";
        echo twig_escape_filter($this->env, lang("Przelewy24 - sandbox"), "html", null, true);
        echo "</label>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-sm-9 col-sm-offset-3\">
\t\t\t<input type=\"submit\" value=\"";
        // line 273
        echo twig_escape_filter($this->env, lang("Save"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "settings_payments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 273,  606 => 268,  592 => 263,  587 => 261,  578 => 257,  573 => 255,  564 => 251,  559 => 249,  552 => 245,  542 => 244,  527 => 238,  516 => 232,  511 => 230,  501 => 225,  496 => 223,  487 => 219,  482 => 217,  469 => 213,  454 => 207,  444 => 202,  439 => 200,  426 => 196,  421 => 194,  412 => 190,  407 => 188,  392 => 184,  380 => 175,  373 => 173,  362 => 165,  355 => 163,  349 => 160,  339 => 153,  332 => 151,  321 => 143,  314 => 141,  308 => 138,  298 => 131,  291 => 129,  280 => 121,  273 => 119,  267 => 116,  250 => 108,  239 => 100,  235 => 99,  228 => 97,  217 => 89,  210 => 87,  204 => 84,  195 => 78,  191 => 77,  184 => 75,  173 => 67,  166 => 65,  160 => 62,  151 => 56,  147 => 55,  140 => 53,  129 => 45,  122 => 43,  116 => 40,  107 => 36,  99 => 33,  94 => 31,  86 => 26,  80 => 25,  74 => 22,  65 => 18,  60 => 16,  55 => 14,  50 => 11,  48 => 10,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings_payments.html", "/home/platne/serwer24113/public_html/admin/views/settings_payments.html");
    }
}
