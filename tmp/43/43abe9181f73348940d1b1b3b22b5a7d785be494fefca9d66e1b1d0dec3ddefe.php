<?php

/* offer.html */
class __TwigTemplate_46a9aa2d2ac33f9f3d782d25b64bc875cf4300c00a2b6d814accc97df05901de extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "offer.html", 2);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'javascript' => array($this, 'block_javascript'),
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
    public function block_css($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
\t";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "photos", array())) {
            // line 7
            echo "\t\t<link rel=\"stylesheet\" href=\"views/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
            echo "/css/lightbox.css\"/>
\t";
        }
    }

    // line 11
    public function block_javascript($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "photos", array())) {
            // line 14
            echo "\t\t<script src=\"views/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
            echo "/js/lightbox.js\"></script>
\t\t<script>
\t\t\tlightbox.option({
\t\t\t\t'albumLabel': \"%1 / %2\"
\t\t\t})
\t\t</script>
\t";
        }
        // line 21
        echo "\t";
        if (($context["showContactTab"] ?? null)) {
            // line 22
            echo "\t\t<script>
\t\t\t\$(function(){\$('.nav-tabs a[href=\"#contact_form\"]').tab('show')})
\t\t</script>
\t";
        }
        // line 26
        echo "\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps", array()) && (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_lat", array()) != 0)) && (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_long", array()) != 0))) {
            // line 27
            echo "\t\t<script>
\t\t\tfunction displayMap() {
\t\t\t\tgoogle.maps.event.addDomListener(window, \"load\", function() {
\t\t\t\t\tvar myLatlng = new google.maps.LatLng(";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_lat", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_long", array()), "html", null, true);
            echo ");
\t\t\t\t\tvar map = new google.maps.Map(document.getElementById(\"google_maps\"), {
\t\t\t\t\t\tzoom: ";
            // line 32
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_zoom_offer", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_zoom_offer", array()), 10)) : (10)), "html", null, true);
            echo ",
\t\t\t\t\t\tcenter: myLatlng,
\t\t\t\t\t\tmapTypeId: google.maps.MapTypeId.ROADMAP,
\t\t\t\t\t\tscrollwheel:  false
\t\t\t\t\t});
\t\t\t\t\tvar marker = new google.maps.Marker({
\t\t\t\t\t\tposition: myLatlng,
\t\t\t\t\t\tmap: map,
\t\t\t\t\t\ttitle: '";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
            echo "',
\t\t\t\t\t\tanimation:google.maps.Animation.BOUNCE
\t\t\t\t\t});
\t\t\t\t})
\t\t\t}
\t\t</script>
\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps_api", array()), "html", null, true);
            echo "&v=3.exp&libraries=places&callback=initGoogleMap\" async defer></script>
\t";
        }
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "
<div itemscope itemtype=\"http://schema.org/Product\">
\t<div class=\"background_grey page_box\">
\t\t<div class=\"container background_white\" id=\"offer\">
\t\t\t<form method=\"post\" class=\"float-right\">
\t\t\t\t<br>
\t\t\t\t";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "clipboard", array())) {
            // line 58
            echo "\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"clipboard_remove\">
\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, generateToken("clipboard_remove"), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, lang("Remove from clipboard"), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\">
\t\t\t\t";
        } else {
            // line 62
            echo "\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"clipboard_add\">
\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, generateToken("clipboard_add"), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, lang("Add to clipboard"), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary btn-sm\">
\t\t\t\t";
        }
        // line 66
        echo "\t\t\t</form>
\t\t\t<h1 itemprop=\"name\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
\t\t\t<p>
\t\t\t\t";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "type_name", array())) {
            echo "[<a href=\"";
            echo twig_escape_filter($this->env, path("offers"), "html", null, true);
            echo "?type=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "type_slug", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Offer type"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "type_name", array()), "html", null, true);
            echo "\" class=\"main-color-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "type_name", array()), "html", null, true);
            echo "</a>]";
        }
        // line 70
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "categories", array())) {
            // line 71
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "categories", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 72
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                echo "?category=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Category"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", array()), "html", null, true);
                echo "\" class=\"main-color-2\"><span ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo "itemprop=\"category\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
                echo "</span></a>
\t\t\t\t\t\t";
                // line 73
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo " > ";
                }
                // line 74
                echo "\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t\t";
        }
        // line 76
        echo "\t\t\t</p>
\t\t\t";
        // line 77
        if ( !twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "active", array())) {
            // line 78
            echo "\t\t\t\t<h5 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("Offer is inactive"), "html", null, true);
            echo "</h5>
\t\t\t\t";
            // line 79
            if (twig_get_attribute($this->env, $this->source, ($context["offer_cost"] ?? null), "total", array())) {
                // line 80
                echo "\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["offer_cost"] ?? null), "list", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 82
                    echo "\t\t\t\t\t\t\t<tr><td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo ": </td><td>";
                    echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, $context["item"], "value", array())), "html", null, true);
                    echo "</td></tr>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "\t\t\t\t\t\t<tr><td><b>";
                echo twig_escape_filter($this->env, lang("Total"), "html", null, true);
                echo ": </b></td><td><b>";
                echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, ($context["offer_cost"] ?? null), "total", array())), "html", null, true);
                echo "</b></td></tr>
\t\t\t\t\t</table>
\t\t\t\t\t<div class=\"text-center offer_payments\">
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"new_payment\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"item_id\" value=\"";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"type\" value=\"add_offer\">
\t\t\t\t\t\t\t";
                // line 91
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_dotpay", array())) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
                    echo twig_escape_filter($this->env, lang("Pay by Dotpay"), "html", null, true);
                    echo "\" class=\"btn btn-primary\" formaction=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
                    echo "/php/payment_dotpay.php\">
\t\t\t\t\t\t\t";
                }
                // line 94
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_paypal", array())) {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
                    echo twig_escape_filter($this->env, lang("Pay by PayPal"), "html", null, true);
                    echo "\" class=\"btn btn-primary\" formaction=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
                    echo "/php/payment_paypal.php\">
\t\t\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_p24", array())) {
                    // line 98
                    echo "\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
                    echo twig_escape_filter($this->env, lang("Pay by Przelewy24"), "html", null, true);
                    echo "\" class=\"btn btn-primary\" formaction=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
                    echo "/php/payment_p24.php\">
\t\t\t\t\t\t\t";
                }
                // line 100
                echo "\t\t\t\t\t\t</form>
\t\t\t\t\t<br><br>
\t\t\t\t\t</div>
\t\t\t\t";
            } elseif (( !twig_get_attribute($this->env, $this->source,             // line 103
($context["offer"] ?? null), "user_id", array()) &&  !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "moderator", array()))) {
                // line 104
                echo "\t\t\t\t\t<h4 class=\"text-danger\">";
                echo twig_escape_filter($this->env, lang("You must confirm your email address"), "html", null, true);
                echo "</h4><br>
\t\t\t\t";
            } elseif (( !twig_get_attribute($this->env, $this->source,             // line 105
($context["settings"] ?? null), "automatically_activate_offers", array()) &&  !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "moderator", array()))) {
                // line 106
                echo "\t\t\t\t\t<h4 class=\"text-danger\">";
                echo twig_escape_filter($this->env, lang("It must be approved by an administrator"), "html", null, true);
                echo "</h4><br>
\t\t\t\t";
            } else {
                // line 108
                echo "\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"activate_offer\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
                // line 110
                echo twig_escape_filter($this->env, generateToken("activate_offer"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
                // line 111
                echo twig_escape_filter($this->env, lang("Activate offer"), "html", null, true);
                echo "\" class=\"btn btn-primary\">
\t\t\t\t\t</form>
\t\t\t\t\t<br>
\t\t\t\t";
            }
            // line 115
            echo "\t\t\t";
        }
        // line 116
        echo "\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "user_id", array())) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "moderator", array()))) {
            // line 117
            echo "\t\t\t\t<h6><a href=\"";
            echo twig_escape_filter($this->env, path("edit", twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", array()), twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "slug", array())), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Edit offer"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
            echo "\" class=\"text-primary\"><i class=\"fas fa-pencil-alt\" style=\"margin-right:0.5%\"></i>";
            echo twig_escape_filter($this->env, lang("Edit offer"), "html", null, true);
            echo "</a> |
\t\t\t\t<a href=\"";
            // line 118
            echo twig_escape_filter($this->env, path("add"), "html", null, true);
            echo "/?add_similar=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Add similar"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
            echo "\" class=\"text-success\"><i class=\"fas fa-plus\"style=\"margin-right:0.5%\"></i>";
            echo twig_escape_filter($this->env, lang("Add similar"), "html", null, true);
            echo "</a></h6><br>
\t\t\t";
        }
        // line 120
        echo "\t\t\t";
        $this->loadTemplate("alert.tpl", "offer.html", 120)->display($context);
        // line 121
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 123
        if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "photos", array())) {
            // line 124
            echo "\t\t\t\t\t\t<div id=\"offer_photos\">
\t\t\t\t\t\t\t";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "photos", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 126
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) == 1)) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"upload/photos/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "folder", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "url", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
                    echo "\" data-lightbox=\"offer_photos\" data-title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
                    echo "\"><img src=\"upload/photos/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "folder", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "url", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
                    echo "\" onerror=\"this.src='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
                    echo "/views/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
                    echo "/images/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "categories", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "name", array()), "html", null, true);
                    echo "no_image.png'\" itemprop=\"image\" class=\"big\"></a><br>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"upload/photos/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "folder", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "url", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
                    echo "\" data-lightbox=\"offer_photos\" data-title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
                    echo "\"><img src=\"upload/photos/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "folder", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "thumb", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "name", array()), "html", null, true);
                    echo "\" onerror=\"this.src='";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
                    echo "/views/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
                    echo "/images/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "categories", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[0] ?? null) : null), "name", array()), "html", null, true);
                    echo "no_image.png'\" itemprop=\"image\"></a>
\t\t\t\t\t\t\t\t";
                }
                // line 131
                echo "\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 134
            echo "\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
            echo "/views/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "template", array()), "html", null, true);
            echo "/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "categories", array())) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[0] ?? null) : null), "name", array()), "html", null, true);
            echo "no_image.png\" alt=\"No photo\" class=\"img-thumbnail\"><br><br>
\t\t\t\t\t";
        }
        // line 136
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div id=\"offer_panel\">
\t\t\t\t\t\t<p class=\"text-muted small\" style=\"margin-bottom:0\"><i class=\"fas fa-clock\"></i>";
        // line 139
        echo twig_escape_filter($this->env, lang("Published"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "date", array()), "d-m-Y"), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, lang("Expire"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "date_finish", array()), "d-m-Y"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t";
        // line 140
        if ( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_views", array())) {
            echo "<p class=\"text-muted small\"><i class=\"far fa-eye\"></i>";
            echo twig_escape_filter($this->env, lang("View count"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "view_all", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, lang("unique"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "view_unique", array()), "html", null, true);
            echo ")</p>";
        }
        // line 141
        echo "\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price_free", array())) {
            // line 142
            echo "\t\t\t\t\t\t\t<h3 class=\"main-color-1\"><b>";
            echo twig_escape_filter($this->env, lang("For free"), "html", null, true);
            echo "</b></h3>
\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 143
($context["offer"] ?? null), "price", array()) > 0)) {
            // line 144
            echo "\t\t\t\t\t\t\t<h3 class=\"main-color-1\"><b>";
            echo twig_escape_filter($this->env, lang("Price"), "html", null, true);
            echo ":</b> <span>";
            echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price", array())), "html", null, true);
            echo "</span> ";
            if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "price_negotiate", array())) {
                echo "<span class=\"small\">(";
                echo twig_escape_filter($this->env, lang("to negotiate"), "html", null, true);
                echo ")</span>";
            }
            echo "</h3>
\t\t\t\t\t\t";
        }
        // line 146
        echo "\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-sm table-hover\">
\t\t\t\t\t\t\t\t";
        // line 148
        if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "username", array())) {
            echo "<tr><td><i class=\"far fa-user-circle\"></i>";
            echo twig_escape_filter($this->env, lang("Added by"), "html", null, true);
            echo ": </td><td><a href=\"";
            echo twig_escape_filter($this->env, path("profile", 0, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "username", array())), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Profile of"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "username", array()), "html", null, true);
            echo "\" class=\"main-color-2\">";
            if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "user_avatar", array())) {
                echo "<img src=\"upload/avatars/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "user_avatar", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, lang("Avatar"), "html", null, true);
                echo "\" class=\"img-fluid\"> ";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "username", array()), "html", null, true);
            echo "</a></td></tr>";
        }
        // line 149
        echo "

\t\t\t\t\t\t\t\t";
        // line 151
        if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state_name", array())) {
            echo "<tr><td><i class=\"fas fa-map\"></i>";
            echo twig_escape_filter($this->env, lang("State"), "html", null, true);
            echo ": </td><td><a href=\"";
            echo twig_escape_filter($this->env, path("offers"), "html", null, true);
            echo "?state=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state_slug", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("State"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state_name", array()), "html", null, true);
            echo "\" class=\"main-color-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state_name", array()), "html", null, true);
            echo "</a> ";
            if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state2_name", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                echo "?state=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state_slug", array()), "html", null, true);
                echo "&state2=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state2_slug", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("State"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state2", array()), "name", array()), "html", null, true);
                echo "\" class=\"main-color-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state2_name", array()), "html", null, true);
                echo "</a></td></tr>";
            }
            echo "</td></tr>";
        }
        // line 152
        echo "\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_data_not_logged", array()) &&  !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()))) {
            // line 153
            echo "\t\t\t\t\t\t\t\t\t<tr><td colspan=\"2\"><a href=\"";
            echo twig_escape_filter($this->env, path("login"), "html", null, true);
            echo "?redirect=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "slug", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, lang("Log in on the website"), "html", null, true);
            echo "\" class=\"main-color-1\">";
            echo twig_escape_filter($this->env, lang("You must be logged in to view contact details"), "html", null, true);
            echo "</a></td></tr>
\t\t\t\t\t\t\t\t";
        } else {
            // line 155
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address", array())) {
                echo "<tr><td><i class=\"fas fa-map-marker-alt\"></i>";
                echo twig_escape_filter($this->env, lang("Address"), "html", null, true);
                echo ": </td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address", array()), "html", null, true);
                echo "</td></tr>";
            }
            // line 156
            echo "
                                    <!--Dodawanie telefonu w ogłoszeniu-->
\t\t\t\t\t\t\t\t\t";
            // line 158
            if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "phone", array())) {
                // line 159
                echo "\t\t\t\t\t\t\t\t\t\t<tr><td><i class=\"fas fa-phone\"></i>";
                echo twig_escape_filter($this->env, lang("Phone"), "html", null, true);
                echo ": </td><td><a href=\"";
                if ( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_phone", array())) {
                    echo "tel:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "phone", array()), "html", null, true);
                }
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 160
                echo twig_escape_filter($this->env, lang("Call us"), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\tclass=\"main-color-2\">";
                // line 161
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_phone", array())) {
                    echo "<span 
\t\t\t\t\t\t\t\t\t\t\tclass=\"show_hidden_data\" 
\t\t\t\t\t\t\t\t\t\t\tdata-type=\"phone\" 
\t\t\t\t\t\t\t\t\t\t\tdata-data=\"";
                    // line 164
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "phone", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, lang("show phone..."), "html", null, true);
                    echo "</span>";
                } else {
                    echo "<span 
\t\t\t\t\t\t\t\t\t\t\titemprop=\"telephone\">";
                    // line 165
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "phone", array()), "html", null, true);
                    echo "</span>";
                }
                echo "</a></td></tr>
\t\t\t\t\t\t\t\t\t";
            }
            // line 167
            echo "
                                     <!--Dodawanie e-maila w ogłoszeniu-->
\t\t\t\t\t\t\t\t\t";
            // line 169
            if ( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_email", array())) {
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t<tr><td><i class=\"fas fa-at\"></i>";
                echo twig_escape_filter($this->env, lang("E-mail"), "html", null, true);
                echo ": </td><td><a href=\"\" 
\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 171
                echo twig_escape_filter($this->env, lang("Contact us"), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\tclass=\"main-color-2\"><span 
\t\t\t\t\t\t\t\t\t\t\tclass=\"show_hidden_data\" 
\t\t\t\t\t\t\t\t\t\t\tdata-type=\"email\" 
\t\t\t\t\t\t\t\t\t\t\tdata-data_0=\"";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "email_part_0", array()), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\tdata-data_1=\"";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "email_part_1", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, lang("show e-mail..."), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a></td></tr>
\t\t\t\t\t\t\t\t\t";
            }
            // line 179
            echo "
\t\t\t\t\t\t\t\t\t<!--Dodawanie strowny web-->
\t\t\t\t\t\t\t\t\t<!--";
            // line 181
            if ( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_url", array())) {
                // line 182
                echo "\t\t\t\t\t\t\t\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, lang("Url"), "html", null, true);
                echo ": </td><td><a href=\"\" 
\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 183
                echo twig_escape_filter($this->env, lang("Visit us on"), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\tclass=\"main-color-2\"><span 
\t\t\t\t\t\t\t\t\t\t\tclass=\"show_hidden_data\" 
\t\t\t\t\t\t\t\t\t\t\tdata-type=\"url\" 
\t\t\t\t\t\t\t\t\t\t\tdata-data=\"";
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, lang("show url..."), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a></td></tr>
\t\t\t\t\t\t\t\t\t";
            }
            // line 189
            echo "-->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "options", array())) {
            // line 193
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "options", array()));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 194
                echo "\t\t\t\t\t\t\t\t\t\t<tr itemprop=\"additionalProperty\" itemscope itemtype=\"http://schema.org/PropertyValue\"><td><small itemprop=\"name\"><i class=\"fas fa-info\"></i>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ": </small></td><td><small itemprop=\"value\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["option"]);
                foreach ($context['_seq'] as $context["key2"] => $context["item"]) {
                    if ($context["key2"]) {
                        echo ", ";
                    }
                    echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</small></td></tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 197
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"offer_box_description\">
\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"#description\" class=\"nav-link active main-color-2\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"description\" aria-selected=\"true\"title=\"Opis ogłoszenia\">";
        // line 204
        echo twig_escape_filter($this->env, lang("Description"), "html", null, true);
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t</a></li>
\t\t\t\t\t";
        // line 207
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_contact_form_offer", array())) {
            // line 208
            echo "\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#contact_form\" class=\"nav-link main-color-2\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"contact_form\" aria-selected=\"false\"title=\"Kontakt do ogłoszenia\">";
            echo twig_escape_filter($this->env, lang("Contact form"), "html", null, true);
            echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t</a></li>
\t\t\t\t\t";
        }
        // line 212
        echo "\t\t\t\t\t";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_only_by_author", array()) || ((twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "user_id", array()) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()))) && ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_dotpay", array()) || twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_paypal", array())) || twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_p24", array())))) {
            echo "<!--promowanie ogłoszenia-->
\t\t\t\t\t\t<li class=\"promuj\"><a href=\"#promote\" class=\"nav-link main-color-2\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"promote\" aria-selected=\"false\"title=\"Promuj ogłoszenie\">";
            // line 213
            echo twig_escape_filter($this->env, lang("Promote"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t";
        }
        // line 216
        echo "\t\t\t\t </ul>
\t\t\t\t <div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane container active overflow_auto\" id=\"description\" role=\"tabpanel\" aria-labelledby=\"description-tab\"><br>";
        // line 218
        echo twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "description", array());
        echo "</div>
\t\t\t\t\t";
        // line 219
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_contact_form_offer", array())) {
            // line 220
            echo "\t\t\t\t\t\t<div class=\"tab-pane container fade\" id=\"contact_form\" role=\"tabpanel\" aria-labelledby=\"contact_form-tab\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            // line 222
            $this->loadTemplate("contact_form.tpl", "offer.html", 222)->display($context);
            // line 223
            echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 226
        echo "\t\t\t\t\t";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_only_by_author", array()) || ((twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "user_id", array()) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array())) && twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()))) && ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_dotpay", array()) || twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_paypal", array())) || twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_p24", array())))) {
            // line 227
            echo "\t\t\t\t\t\t<div class=\"tab-pane container fade\" id=\"promote\" role=\"tabpanel\" aria-labelledby=\"promote-tab\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            // line 229
            if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "active", array())) {
                // line 230
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "promoted", array())) {
                    // line 231
                    echo "\t\t\t\t\t\t\t\t\t<h5 class=\"text-success\">";
                    echo twig_escape_filter($this->env, lang("Offer is promoted to"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "promoted_date_end", array()), "d-m-Y"), "html", null, true);
                    echo "<i class=\"fa fa-cog fa-spin fa-3x fa-fw\" style=\"font-size:.8em;\"></i></h5>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 233
                    echo "\t\t\t\t\t\t\t\t\t<h5 class=\"text-danger\">";
                    echo twig_escape_filter($this->env, lang("Offer is no promoted"), "html", null, true);
                    echo " <i class=\"far fa-frown\"style=\"color:tomato\"></i></h5>
\t\t\t\t\t\t\t\t";
                }
                // line 235
                echo "\t\t\t\t\t\t\t\t<h4><span id=\"Summary\">";
                echo twig_escape_filter($this->env, lang("Promote offer"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost", array())), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, lang("days"), "html", null, true);
                echo "</span></h4>
\t\t\t\t\t\t\t\t<form action=\"#\" method=\"post\"id=\"chose-promo\"><!-- id=\"chose-promo\"do poprawy i sprawdzeni czy działa-->
\t\t\t\t\t\t\t\t<div class=\"row\"><!--Promowanie lokalne-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12\"><div class=\"row\"><div class=\"col-sm-6\"><label class=\"checkbox-inline\"><input type=\"checkbox\" class=\"promo-checkbox\" name=\"check\"id=\"chose-promo\" checked onclick=\"onlyOne(this)\"value=\"1\" onchange=\"PopulateValues()\"> <b>Promowanie lokalne</b> <spam style=\"color:gold;\"><i class=\"fas fa-star\"></i></spam><h6>";
                // line 238
                echo twig_escape_filter($this->env, lang("Promote offer"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost", array())), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, lang("days"), "html", null, true);
                echo "</h6></label></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\"style=\"font-size:25px;\"><input type=\"checkbox\"id=\"chose-promo\" class=\"promo-checkbox\" name=\"check\"onclick=\"onlyOne(this,0)\" onchange=\"PopulateValues()\" value=\"2\"> ";
                // line 240
                echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost_0", array())), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days02", array()), "html", null, true);
                echo " dni</label><!--60 dni-->
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-primary\">- Promowane na listach miast i miejscowości <b>";
                // line 244
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state_name", array()), "html", null, true);
                echo " ";
                if (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state2_name", array())) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "state2_name", array()), "html", null, true);
                }
                echo "</b>
\t\t\t\t\t\t\t\t\t\t\t</li> 
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-primary\">- Wyróżnione kolorem na listach ogłoszeń i wyszukiwania</li> 
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-primary\">- Promowane na górze listy ogłoszeń i wyszukiwania</li>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</ul></div>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<!--Promowanie regionalne-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12\"><div class=\"row\"><div class=\"col-sm-6\"><label class=\"checkbox-inline\"><input type=\"checkbox\"onchange=\"PopulateValues()\" class=\"promo-checkbox\" name=\"check\"id=\"chose-promo\"onclick=\"onlyOne(this)\"value=\"3\"> <b>Promowanie regionalne</b> <spam style=\"color:gold;\"><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i></spam><h6>";
                // line 251
                echo twig_escape_filter($this->env, lang("Promote offer"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost1", array())), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, lang("days"), "html", null, true);
                echo "</h6></label></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\"style=\"font-size:25px;\"><input type=\"checkbox\" name=\"check\"id=\"chose-promo\"onclick=\"onlyOne(this)\"onchange=\"PopulateValues()\"value=\"4\" class=\"promo-checkbox\"> ";
                // line 253
                echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost1_5", array())), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days02", array()), "html", null, true);
                echo " dni</label><!--60 dni-->\t
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-success\">
\t\t\t\t\t\t\t\t\t\t\t\t- Promowane na listach miast, miejscowości i powiatów w odległości <b>100km od wybranej miejscowości</b></li><li class=\"list-group-item list-group-item-success\">- Wyróżnione kolorem na listach ogłoszeń i wyszukiwania</li><li class=\"list-group-item list-group-item-success\">- Promowane na górze listy ogłoszeń i wyszukiwania</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</ul></div>
\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<!--Promowanie ogólnopolskie-->
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-12\"><div class=\"row\"><div class=\"col-sm-6\"><label class=\"checkbox-inline\"><input type=\"checkbox\"id=\"chose-promo\"name=\"check\"onclick=\"onlyOne(this)\"onchange=\"PopulateValues()\"value=\"5\" class=\"promo-checkbox\"> <b>Promowanie ogólnopolskie</b> <spam style=\"color:gold;\"><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i></spam><h6>";
                // line 262
                echo twig_escape_filter($this->env, lang("Promote offer"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost2", array())), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, lang("days"), "html", null, true);
                echo "</h6></label></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\"style=\"font-size:25px;\"><input type=\"checkbox\"id=\"chose-promo\" name=\"check\"onclick=\"onlyOne(this)\"onchange=\"PopulateValues()\"value=\"6\" class=\"promo-checkbox\"> ";
                // line 264
                echo twig_escape_filter($this->env, showCurrency(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_cost2_5", array())), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "promote_days02", array()), "html", null, true);
                echo " dni</label><!--60 dni-->\t
\t\t\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-info\">- <b>Promowane na listach wszystkich miast, powiatów i województw</b> </li><li class=\"list-group-item list-group-item-info\">- Wyróżnione kolorem na listach ogłoszeń i wyszukiwania</li><li class=\"list-group-item list-group-item-info\">- Promowane na górze listy ogłoszeń i wyszukiwania</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t<div class=\"offer_payments\">
\t\t\t\t\t\t\t\t\t<!-- <form method=\"post\"> -->
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"new_payment\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"item_id\" value=\"";
                // line 276
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"type\" value=\"promote\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"total\" value=\"0\" id=\"total\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"days\" value=\"0\" id=\"days\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"offerType\" value=\"0\" id=\"offerType\">
\t\t\t\t\t\t\t\t\t\t";
                // line 281
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_dotpay", array())) {
                    // line 282
                    echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
                    echo twig_escape_filter($this->env, lang("Pay by Dotpay"), "html", null, true);
                    echo "\" class=\"btn btn-info\" formaction=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
                    echo "/php/payment_dotpay.php\">
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 284
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_paypal", array())) {
                    // line 285
                    echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
                    echo twig_escape_filter($this->env, lang("Pay by PayPal"), "html", null, true);
                    echo "\" class=\"btn btn-success\" formaction=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
                    echo "/php/payment_paypal.php\">
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 287
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pay_by_p24", array())) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
                    echo twig_escape_filter($this->env, lang("Pay by Przelewy24"), "html", null, true);
                    echo "\" class=\"btn btn-primary\" formaction=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "base_url", array()), "html", null, true);
                    echo "/php/payment_p24.php\">
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 289
                echo "\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"payment\">
\t\t\t\t\t\t\t\t\t\t<img src=\"https://targowisko.org/views/default/images/pay/dotpay_logo.png\" class=\"rounded float-left\" alt=\"Dotpay\" title=\"Zapłać za pomocą dotpay\">
\t\t\t\t\t\t\t\t\t\t<img src=\"https://targowisko.org/views/default/images/pay/paypal_logo.png\" class=\"rounded float-left\" alt=\"PayPal\" title=\"Zapłać za pomocą PayPal\">
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 298
                echo "\t\t\t\t\t\t\t\t<h5 class=\"text-danger\">";
                echo twig_escape_filter($this->env, lang("To promote offer it must be active!"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t";
            }
            // line 300
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 302
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 303
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_facebook", array())) {
            // line 304
            echo "\t\t\t\t<!--<div class=\"social\"><a href=\"\" type=\"button\" role=\"button\"class=\"btn-floating btn-lg share-btn \"title=\"Powiedz przyjaciołom o nas.\"><i class=\"fas fa-share-alt\"></i></a></div>-->
\t\t\t\t\t<div class=\"social_inline_block\" style=\"padding-top:2px\">
\t\t\t\t\t\t<div class=\"fb-like\" data-href=\"";
            // line 306
            echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", array()), twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "slug", array())), "html", null, true);
            echo "\" data-layout=\"button\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 309
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_twitter", array())) {
            // line 310
            echo "\t\t\t\t\t<div class=\"social_inline_block\">
\t\t\t\t\t\t<a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"";
            // line 311
            echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", array()), twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "slug", array())), "html", null, true);
            echo "\" data-lang=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lang", array()), "html", null, true);
            echo "\">Tweet</a>
\t\t\t\t\t\t<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 315
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_wykop", array())) {
            // line 316
            echo "\t\t\t\t\t<div class=\"social_inline_block\">
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\tvar widget_url='https://www.wykop.pl/dataprovider/diggerwidget/?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title)+'&desc='+encodeURIComponent('";
            // line 318
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "description", array()), "html", null, true);
            echo "')+'&bg='+('FFFFFF')+'&type='+('compact2')+'&bold='+(true);
\t\t\t\t\t\t\tdocument.write('<div><iframe src=\"'+widget_url+'\" style=\"border:none;width:100px;height:20px;overflow:hidden;margin:0;padding:0;\" frameborder=\"0\" border=\"0\"></iframe></div>');
\t\t\t\t\t\t</script>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 323
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_google_plus", array())) {
            // line 324
            echo "\t\t\t\t\t<div class=\"social_inline_block\">
\t\t\t\t\t\t<script src=\"https://apis.google.com/js/platform.js\" async defer></script>
\t\t\t\t\t\t<div class=\"g-plusone\" data-size=\"medium\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 329
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_pinterest", array())) {
            // line 330
            echo "\t\t\t\t\t<div class=\"social_inline_block\" style=\"padding-top: 2px;\">
\t\t\t\t\t\t<a href=\"//www.pinterest.com/pin/create/button/?url=";
            // line 331
            echo twig_escape_filter($this->env, path("offer", twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "id", array()), twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "slug", array())), "html", null, true);
            echo "\" data-pin-do=\"buttonPin\" data-pin-config=\"beside\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png\" alt=\"Pinterest\"/></a>
\t\t\t\t\t\t<script async src=\"//assets.pinterest.com/js/pinit.js\"></script>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 335
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 338
        if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google_maps", array()) && (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_lat", array()) != 0)) && (twig_get_attribute($this->env, $this->source, ($context["offer"] ?? null), "address_long", array()) != 0))) {
            // line 339
            echo "\t\t<div id=\"google_maps\"></div>
\t";
        }
        // line 341
        echo "\t";
        if (($context["offers"] ?? null)) {
            // line 342
            echo "\t\t<div class=\"container\">
\t\t\t<br>
\t\t\t<div class=\"similar\">
\t\t\t<h2 class=\"text-center\">";
            // line 345
            echo twig_escape_filter($this->env, lang("Similar offers"), "html", null, true);
            echo "</h2></div><br>
\t\t\t";
            // line 346
            $this->loadTemplate("offers_index.tpl", "offer.html", 346)->display($context);
            // line 347
            echo "\t\t</div>
\t\t<br><br>
\t";
        }
        // line 350
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "offer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1102 => 350,  1097 => 347,  1095 => 346,  1091 => 345,  1086 => 342,  1083 => 341,  1079 => 339,  1077 => 338,  1072 => 335,  1065 => 331,  1062 => 330,  1059 => 329,  1052 => 324,  1049 => 323,  1041 => 318,  1037 => 316,  1034 => 315,  1025 => 311,  1022 => 310,  1019 => 309,  1013 => 306,  1009 => 304,  1007 => 303,  1004 => 302,  1000 => 300,  994 => 298,  983 => 289,  973 => 287,  965 => 285,  962 => 284,  954 => 282,  952 => 281,  944 => 276,  927 => 264,  916 => 262,  902 => 253,  891 => 251,  877 => 244,  868 => 240,  857 => 238,  844 => 235,  838 => 233,  830 => 231,  827 => 230,  825 => 229,  821 => 227,  818 => 226,  813 => 223,  811 => 222,  807 => 220,  805 => 219,  801 => 218,  797 => 216,  791 => 213,  786 => 212,  778 => 208,  776 => 207,  770 => 204,  761 => 197,  758 => 196,  737 => 194,  732 => 193,  729 => 192,  724 => 189,  716 => 187,  709 => 183,  704 => 182,  702 => 181,  698 => 179,  690 => 176,  686 => 175,  679 => 171,  674 => 170,  672 => 169,  668 => 167,  661 => 165,  653 => 164,  647 => 161,  643 => 160,  633 => 159,  631 => 158,  627 => 156,  618 => 155,  604 => 153,  601 => 152,  569 => 151,  565 => 149,  544 => 148,  540 => 146,  526 => 144,  524 => 143,  519 => 142,  516 => 141,  504 => 140,  494 => 139,  489 => 136,  479 => 134,  475 => 132,  461 => 131,  439 => 129,  417 => 127,  414 => 126,  397 => 125,  394 => 124,  392 => 123,  388 => 121,  385 => 120,  372 => 118,  361 => 117,  358 => 116,  355 => 115,  348 => 111,  344 => 110,  340 => 108,  334 => 106,  332 => 105,  327 => 104,  325 => 103,  320 => 100,  312 => 98,  309 => 97,  301 => 95,  298 => 94,  290 => 92,  288 => 91,  283 => 89,  272 => 84,  261 => 82,  257 => 81,  254 => 80,  252 => 79,  247 => 78,  245 => 77,  242 => 76,  239 => 75,  225 => 74,  221 => 73,  204 => 72,  186 => 71,  183 => 70,  169 => 69,  164 => 67,  161 => 66,  156 => 64,  152 => 63,  149 => 62,  144 => 60,  140 => 59,  137 => 58,  135 => 57,  127 => 51,  124 => 50,  117 => 46,  108 => 40,  97 => 32,  90 => 30,  85 => 27,  82 => 26,  76 => 22,  73 => 21,  62 => 14,  60 => 13,  55 => 12,  52 => 11,  44 => 7,  42 => 6,  37 => 5,  34 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "offer.html", "/home/platne/serwer24113/public_html/views/default/offer.html");
    }
}
