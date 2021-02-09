<?php

/* categories.html */
class __TwigTemplate_4e3648e22d4beebbf671d76043e5e5e6d4b05682dcc1ad24822d24247260777d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "categories.html", 2);
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
        echo "\t
<div class=\"modal fade\" id=\"add\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        // line 5
        echo twig_escape_filter($this->env, lang("Add category"), "html", null, true);
        echo "\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 10
        echo twig_escape_filter($this->env, lang("Add category"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form method=\"post\" class=\"form\">
\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"add_category\">
\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, generateToken("admin_add_category"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"name\">";
        // line 17
        echo twig_escape_filter($this->env, lang("The name"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"name\" required maxlength=\"64\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, lang("The name"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("The name"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"cost\">";
        // line 21
        echo twig_escape_filter($this->env, lang("Charge"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"cost\" min=\"0\" step=\"0.01\" class=\"form-control\">
\t\t\t\t\t\t\t<div class=\"input-group-addon\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"thumb\">";
        // line 28
        echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
        echo "</label><br>\t
\t\t\t\t\t\t<a href=\"#\" class=\"open_roxy\" data-target=\"#roxySelectFile\">
\t\t\t\t\t\t\t<img data-roxy_name=\"thumb\" src=\"images/no_image.png\" alt=\"";
        // line 30
        echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
        echo "\" style=\"max-height: 100px\">
\t\t\t\t\t\t</a><br><br>
\t\t\t\t\t\t<input type=\"text\" name=\"thumb\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"content\">";
        // line 35
        echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<textarea id=\"content\" name=\"content\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
        echo "\" class=\"form-control\"></textarea>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\trun_ckeditor('content',100);
\t\t\t\t\t\t</script>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"h1\">";
        // line 42
        echo twig_escape_filter($this->env, lang("Header h1"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"h1\" title=\"";
        // line 43
        echo twig_escape_filter($this->env, lang("Header h1"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Header h1"), "html", null, true);
        echo "\" maxlength=\"512\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"title\">";
        // line 46
        echo twig_escape_filter($this->env, lang("Title SEO"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"title\" title=\"";
        // line 47
        echo twig_escape_filter($this->env, lang("Title SEO"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Title SEO"), "html", null, true);
        echo "\" maxlength=\"512\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"keywords\">";
        // line 50
        echo twig_escape_filter($this->env, lang("Keywords SEO"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"keywords\" title=\"";
        // line 51
        echo twig_escape_filter($this->env, lang("Keywords SEO"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Keywords SEO"), "html", null, true);
        echo "\" maxlength=\"512\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"description\">";
        // line 54
        echo twig_escape_filter($this->env, lang("Description SEO"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<textarea name=\"description\" title=\"";
        // line 55
        echo twig_escape_filter($this->env, lang("Description SEO"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, lang("Description SEO"), "html", null, true);
        echo "\" maxlength=\"512\" class=\"form-control\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

<div class=\"page-header\">
\t<h1><span class=\"glyphicon glyphicon-tree-deciduous\"></span> ";
        // line 68
        if (($context["category"] ?? null)) {
            echo twig_escape_filter($this->env, lang("Subcategories in"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, lang("Categories"), "html", null, true);
        }
        echo "</h1>
\t<p>";
        // line 69
        echo twig_escape_filter($this->env, lang("Here you can edit the categories"), "html", null, true);
        echo "</p>
\t";
        // line 70
        if (($context["category"] ?? null)) {
            // line 71
            echo "\t\t<h4>
\t\t\t<a href=\"?controller=categories\" title=\"";
            // line 72
            echo twig_escape_filter($this->env, lang("Main Page"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, lang("Main Page"), "html", null, true);
            echo "</a> > 
\t\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "breadcrumbs", array()));
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
                // line 74
                echo "\t\t\t\t<a href=\"?controller=categories&category_id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "&category_name=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Category"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "</a>
\t\t\t\t";
                // line 75
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo " > ";
                }
                // line 76
                echo "\t\t\t";
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
            // line 77
            echo "\t\t</h4>
\t";
        }
        // line 79
        echo "</div>

";
        // line 81
        $this->loadTemplate("alert.tpl", "categories.html", 81)->display($context);
        // line 82
        echo "
<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#add\">";
        // line 83
        echo twig_escape_filter($this->env, lang("Add category"), "html", null, true);
        echo "</button>
<br><br>
";
        // line 85
        if (($context["categories"] ?? null)) {
            // line 86
            echo "\t<div class=\"table-responsive\">
\t\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>";
            // line 90
            echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 91
            echo twig_escape_filter($this->env, lang("The name"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\" style=\"width:55px\">";
            // line 92
            echo twig_escape_filter($this->env, lang("Position"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 93
            echo twig_escape_filter($this->env, lang("Charge"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 94
            echo twig_escape_filter($this->env, lang("Number of offers"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 95
            echo twig_escape_filter($this->env, lang("Edit"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 96
            echo twig_escape_filter($this->env, lang("Edit subcategories"), "html", null, true);
            echo "</th>
\t\t\t\t<th class=\"text-center\">";
            // line 97
            echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
            echo "</th>
\t\t\t</tr>
\t\t\t\t
\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
                // line 101
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 103
                if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", array())) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "thumb", array()), "html", null, true);
                    echo "\" onerror=\"this.src='images/no_image.png'\" alt=\"";
                    echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
                    echo "\" style=\"max-height: 40px\">";
                }
                echo "</td>
\t\t\t\t\t<td><a href=\"";
                // line 104
                echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                echo "?category=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t<a href=\"#\" title=\"";
                // line 106
                echo twig_escape_filter($this->env, lang("Position up"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-arrow-up ajax ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                    echo "inactive";
                }
                echo "\" data-action=\"position_categories\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" data-position=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "position", array()), "html", null, true);
                echo "\" data-plusminus=\"+\" data-category=\"";
                if (($context["category"] ?? null)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", array()), "html", null, true);
                } else {
                    echo "0";
                }
                echo "\" data-token=\"";
                echo twig_escape_filter($this->env, generateToken("admin_position_categories"), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t<a href=\"#\" title=\"";
                // line 107
                echo twig_escape_filter($this->env, lang("Position down"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-arrow-down ajax ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo "inactive";
                }
                echo "\" data-action=\"position_categories\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" data-position=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "position", array()), "html", null, true);
                echo "\" data-plusminus=\"-\" data-category=\"";
                if (($context["category"] ?? null)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", array()), "html", null, true);
                } else {
                    echo "0";
                }
                echo "\" data-token=\"";
                echo twig_escape_filter($this->env, generateToken("admin_position_categories"), "html", null, true);
                echo "\"></a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 109
                echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, $context["item"], "cost", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\">";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "number_offers", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"text-center\"><a href=\"#\" title=\"";
                // line 111
                echo twig_escape_filter($this->env, lang("Edit"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-edit\" data-toggle=\"modal\" data-target=\"#edit_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\"></a></td>
\t\t\t\t\t<td class=\"text-center\"><a href=\"?controller=categories&category_id=";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "&category_name=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Edit subcategories"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-edit\" ></a></td>
\t\t\t\t\t<td class=\"text-center\"><a href=\"#\" title=\"";
                // line 113
                echo twig_escape_filter($this->env, lang("Remove"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-remove text-danger\" data-toggle=\"modal\" data-target=\"#remove_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\"></a></td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<div class=\"modal fade\" id=\"edit_";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, lang("Edit"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                // line 121
                echo twig_escape_filter($this->env, lang("Edit"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form method=\"post\" class=\"form\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"edit_category\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                // line 125
                echo twig_escape_filter($this->env, generateToken("admin_edit_category"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name\">";
                // line 129
                echo twig_escape_filter($this->env, lang("The name"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" required maxlength=\"64\" placeholder=\"";
                // line 130
                echo twig_escape_filter($this->env, lang("The name"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("The name"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"cost\">";
                // line 133
                echo twig_escape_filter($this->env, lang("Charge"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"cost\" min=\"0\" step=\"0.01\"  value=\"";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cost", array()), "html", null, true);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon\">";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "currency", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"thumb\">";
                // line 140
                echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
                echo "</label><br>\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"open_roxy\" data-target=\"#roxySelectFile\">
\t\t\t\t\t\t\t\t\t\t\t<img data-roxy_name=\"thumb\" src=\"";
                // line 142
                if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", array())) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "thumb", array()), "html", null, true);
                } else {
                    echo "images/no_image.png";
                }
                echo "\" onerror=\"this.src='images/no_image.png'\" alt=\"";
                echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
                echo "\" style=\"max-height: 100px\">
\t\t\t\t\t\t\t\t\t\t</a><br><br>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"thumb\" placeholder=\"";
                // line 144
                echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Thumb"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "thumb", array()), "html", null, true);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"content\">";
                // line 147
                echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea id=\"content_";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" name=\"content\" placeholder=\"";
                echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Content"), "html", null, true);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "content", array());
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\trun_ckeditor('content_";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "',100);
\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"h1\">";
                // line 154
                echo twig_escape_filter($this->env, lang("Header h1"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"h1\" title=\"";
                // line 155
                echo twig_escape_filter($this->env, lang("Header h1"), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, lang("Header h1"), "html", null, true);
                echo "\" maxlength=\"512\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "h1", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"title\">";
                // line 158
                echo twig_escape_filter($this->env, lang("Title SEO"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title\" title=\"";
                // line 159
                echo twig_escape_filter($this->env, lang("Title SEO"), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, lang("Title SEO"), "html", null, true);
                echo "\" maxlength=\"512\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"keywords\">";
                // line 162
                echo twig_escape_filter($this->env, lang("Keywords SEO"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"keywords\" title=\"";
                // line 163
                echo twig_escape_filter($this->env, lang("Keywords SEO"), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, lang("Keywords SEO"), "html", null, true);
                echo "\" maxlength=\"512\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "keywords", array()), "html", null, true);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"description\">";
                // line 166
                echo twig_escape_filter($this->env, lang("Description SEO"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"description\" title=\"";
                // line 167
                echo twig_escape_filter($this->env, lang("Description SEO"), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, lang("Description SEO"), "html", null, true);
                echo "\" maxlength=\"512\" class=\"form-control\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", array()), "html", null, true);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                // line 171
                echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                // line 172
                echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"modal fade\" id=\"remove_";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, lang("Remove category"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t\t<h4 class=\"modal-title\">";
                // line 184
                echo twig_escape_filter($this->env, lang("Remove category"), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"remove_category\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 188
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                // line 189
                echo twig_escape_filter($this->env, generateToken("admin_remove_category"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<p>";
                // line 191
                echo twig_escape_filter($this->env, lang("Are you sure you want to remove category"), "html", null, true);
                echo ": \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\"?</p>
\t\t\t\t\t\t\t\t\t<p>";
                // line 192
                echo twig_escape_filter($this->env, lang("All subcategories will be deleted"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
                // line 195
                echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
                // line 196
                echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
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
            // line 202
            echo "\t\t
\t\t</table>
\t</div>
\t<p><a href=\"#\" title=\"";
            // line 205
            echo twig_escape_filter($this->env, lang("Arrange alphabetically"), "html", null, true);
            echo "\" class=\"ajax_confirm\" data-action=\"arrange_categories_alphabetically\" data-category=\"";
            if (($context["category"] ?? null)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, lang("Are you sure you want to arrange categories alphabetically on this page?"), "html", null, true);
            echo "\" data-token=\"";
            echo twig_escape_filter($this->env, generateToken("admin_arrange_categories_alphabetically"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, lang("Arrange alphabetically"), "html", null, true);
            echo "</a></p>
\t<p><a href=\"#\" data-toggle=\"modal\" data-target=\"#reload\" title=\"Reload all subcategories\">";
            // line 206
            echo twig_escape_filter($this->env, lang("Reload all subcategories"), "html", null, true);
            echo "</a><p>
";
        } else {
            // line 208
            echo "\t<h4 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Nothing found"), "html", null, true);
            echo "</h4>
";
        }
        // line 210
        echo "
";
        // line 211
        if (($context["category"] ?? null)) {
            echo "<br><p><a href=\"?controller=categories&category_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "category_id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Return to the previous category"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, lang("Return to the previous category"), "html", null, true);
            echo "</a></p>";
        }
        // line 212
        echo "
<div class=\"modal fade\" id=\"reload\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        // line 213
        echo twig_escape_filter($this->env, lang("Reload all subcategories"), "html", null, true);
        echo "\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 218
        echo twig_escape_filter($this->env, lang("Reload all subcategories"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form method=\"post\" class=\"form\">
\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"reload_category\">
\t\t\t\t<input type=\"hidden\" name=\"category\" value=\"";
        // line 222
        if (($context["category"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", array()), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 223
        echo twig_escape_filter($this->env, generateToken("admin_reload_category"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<p class=\"text-danger\">";
        // line 225
        echo twig_escape_filter($this->env, lang("This operation may take several minutes to very use database. Use this function only when the links to subcategory are incorrect."), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"";
        // line 228
        echo twig_escape_filter($this->env, lang("Cancel"), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
        // line 229
        echo twig_escape_filter($this->env, lang("Execute"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "categories.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  760 => 229,  756 => 228,  750 => 225,  745 => 223,  737 => 222,  730 => 218,  722 => 213,  719 => 212,  709 => 211,  706 => 210,  700 => 208,  695 => 206,  679 => 205,  674 => 202,  653 => 196,  649 => 195,  643 => 192,  637 => 191,  632 => 189,  628 => 188,  621 => 184,  609 => 179,  599 => 172,  595 => 171,  584 => 167,  580 => 166,  570 => 163,  566 => 162,  556 => 159,  552 => 158,  542 => 155,  538 => 154,  531 => 150,  520 => 148,  516 => 147,  506 => 144,  495 => 142,  490 => 140,  483 => 136,  479 => 135,  474 => 133,  464 => 130,  460 => 129,  454 => 126,  450 => 125,  441 => 121,  429 => 116,  421 => 113,  413 => 112,  407 => 111,  403 => 110,  399 => 109,  378 => 107,  358 => 106,  347 => 104,  337 => 103,  333 => 102,  330 => 101,  313 => 100,  307 => 97,  303 => 96,  299 => 95,  295 => 94,  291 => 93,  287 => 92,  283 => 91,  279 => 90,  273 => 86,  271 => 85,  266 => 83,  263 => 82,  261 => 81,  257 => 79,  253 => 77,  239 => 76,  235 => 75,  222 => 74,  205 => 73,  199 => 72,  196 => 71,  194 => 70,  190 => 69,  180 => 68,  169 => 60,  165 => 59,  156 => 55,  152 => 54,  144 => 51,  140 => 50,  132 => 47,  128 => 46,  120 => 43,  116 => 42,  105 => 36,  101 => 35,  93 => 32,  88 => 30,  83 => 28,  76 => 24,  70 => 21,  62 => 18,  58 => 17,  52 => 14,  45 => 10,  37 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "categories.html", "/home/platne/serwer24113/public_html/admin/views/categories.html");
    }
}
