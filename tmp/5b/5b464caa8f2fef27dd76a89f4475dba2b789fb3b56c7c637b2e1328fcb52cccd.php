<?php

/* article.html */
class __TwigTemplate_b77f24dbe4becd62465c01e98fe47d9c0dd3c716a765a32bfb22970461d9798c extends Twig_Template
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
        echo "
<div class=\"page_box\">
\t<div class=\"container\">
\t\t<div class=\"text-center\">
\t\t\t<h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "name", array()), "html", null, true);
        echo "</h2>
\t\t\t<p class=\"text-muted small\">";
        // line 10
        echo twig_escape_filter($this->env, lang("Published"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "date", array()), "d-m-Y"), "html", null, true);
        echo "</p>
\t\t\t<p><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, path("articles"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, lang("Return to the list of articles"), "html", null, true);
        echo "\" class=\"main-color-1\">";
        echo twig_escape_filter($this->env, lang("Return to the list of articles"), "html", null, true);
        echo "</a></p>
\t\t</div>
\t\t<br>
\t\t<div class=\"content\">
\t\t\t";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", array());
        echo "
\t\t</div>
\t\t";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "allow_comments_fb_article", array())) {
            // line 18
            echo "\t\t\t<br>
\t\t\t<div class=\"fb-comments\" data-href=\"";
            // line 19
            echo twig_escape_filter($this->env, path("article", twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()), twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", array())), "html", null, true);
            echo "\" data-numposts=\"15\"></div>
\t\t";
        }
        // line 21
        echo "\t\t<br>
\t\t";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_facebook", array())) {
            // line 23
            echo "\t\t\t<div class=\"social_inline_block\" style=\"padding-top: 2px;\">
\t\t\t\t<div class=\"fb-like\" data-href=\"";
            // line 24
            echo twig_escape_filter($this->env, path("article", twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()), twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", array())), "html", null, true);
            echo "\" data-layout=\"button\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>\t\t
\t\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_twitter", array())) {
            // line 28
            echo "\t\t\t<div class=\"social_inline_block\">
\t\t\t\t<a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"";
            // line 29
            echo twig_escape_filter($this->env, path("article", twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()), twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", array())), "html", null, true);
            echo "\" data-lang=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lang", array()), "html", null, true);
            echo "\">Tweet</a>
\t\t\t\t<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
\t\t\t</div>
\t\t";
        }
        // line 33
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_wykop", array())) {
            // line 34
            echo "\t\t\t<div class=\"social_inline_block\">
\t\t\t\t<script>
\t\t\t\t\tvar widget_url='https://www.wykop.pl/dataprovider/diggerwidget/?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title)+'&desc='+encodeURIComponent('";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "description", array()), "html", null, true);
            echo "')+'&bg='+('FFFFFF')+'&type='+('compact2')+'&bold='+(true);
\t\t\t\t\tdocument.write('<div><iframe src=\"'+widget_url+'\" style=\"border:none;width:100px;height:20px;overflow:hidden;margin:0;padding:0;\" frameborder=\"0\" border=\"0\"></iframe></div>');
\t\t\t\t</script>
\t\t\t</div>
\t\t";
        }
        // line 41
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_google_plus", array())) {
            // line 42
            echo "\t\t\t<div class=\"social_inline_block\">
\t\t\t\t<script src=\"https://apis.google.com/js/platform.js\" async defer>lang: '";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lang", array()), "html", null, true);
            echo "'</script>
\t\t\t\t<div class=\"g-plusone\" data-size=\"medium\"></div>
\t\t\t</div>
\t\t";
        }
        // line 47
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "social_pinterest", array())) {
            // line 48
            echo "\t\t\t<div class=\"social_inline_block\" style=\"padding-top: 2px;\">
\t\t\t\t<a href=\"//www.pinterest.com/pin/create/button/?url=";
            // line 49
            echo twig_escape_filter($this->env, path("article", twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()), twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", array())), "html", null, true);
            echo "\" data-pin-do=\"buttonPin\" data-pin-config=\"beside\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png\" /></a>
\t\t\t\t<script async src=\"//assets.pinterest.com/js/pinit.js\"></script>
\t\t\t</div>
\t\t";
        }
        // line 53
        echo "\t</div>
</div>

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
        return array (  147 => 53,  140 => 49,  137 => 48,  134 => 47,  127 => 43,  124 => 42,  121 => 41,  113 => 36,  109 => 34,  106 => 33,  97 => 29,  94 => 28,  91 => 27,  85 => 24,  82 => 23,  80 => 22,  77 => 21,  72 => 19,  69 => 18,  67 => 17,  62 => 15,  51 => 11,  45 => 10,  41 => 9,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "article.html", "/home/platne/serwer24113/public_html/views/default/article.html");
    }
}
