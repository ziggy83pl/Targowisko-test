<?php

/* cities.html */
class __TwigTemplate_1c86e05094a4d5484aec71f725b9a10a28a409b1dfc9b5e7ee21898aba0fa289 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("main.tpl", "cities.html", 2);
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
        echo "<div id=\"media\">
<div class=\"tlo2\">
<div class=\"page_box\">
\t</div>
\t";
        // line 9
        if (($context["slider"] ?? null)) {
            // line 10
            echo "\t
\t";
        }
        // line 12
        echo "    \t
\t";
        // line 13
        $this->loadTemplate("search_main.tpl", "cities.html", 13)->display($context);
        // line 14
        echo "\t<div class=\"container\">
\t<div class=\"citiesBig\"title=\"Wszystkie miasta\">\t
\t\t<style>
\t\t\tul#poz li {
\t\t\t  display:inline;
\t\t\t}
\t\t\t</style>
\t\t<div class=\"M-1\">

\t\t\t<div class=\"D\">
\t\t\t\t<div>
\t\t   <div class=\"city\"><a href=\"https://targowisko.org/s-dolnoslaski\" title=\"Dolnośląski\" >Dolnośląski</a></div></br>
\t\t  \t   
\t\t\t   <ul id=\"poz\" >\t\t   
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/boguszow-gorce\">Boguszów-Gorce</a></li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/boleslawiec\">Bolesławiec</a></li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/dzierzoniow\">Dzierżoniów</li>\t\t\t\t\t\t   \t
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/glogow\">Głogów</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/jawor\">Jawor</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/jelcz-laskowiec\">Jelcz-Laskowiec</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/jelenia-gora\">Jelenia Góra</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/kamienna-gora\" >Kamienna Góra</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/klodzko\" >Kłodzko</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/legnica\" >Legnica</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/luban\" >Lubań</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/lubin\" >Lubin</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/nowa-ruda\" >Nowa Ruda</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/olawa\" >Oława</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/olesnica\" >Oleśnica</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/polkowice\" >Polkowice</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/strzegom\" >Strzegom</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/swidnica\" >Świdnica</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/swiebodziec\" >Świebodziec</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/walbrzych\" >Wałbrzych</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/wroclaw\" >Wrocław</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/zabkowice-slaskie\" >Ząbkowice Śląskie</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/zgorzelec\" >Zgorzelec</li>
\t\t\t\t\t<li><a href =\"https://targowisko.org/s-dolnoslaski/zlotoryja\" >Złotoryja</a></li>
\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t</div></br>\t\t\t\t\t   
\t\t\t</div></br>
\t\t\t
\t\t
\t\t<div class=\"E\">
\t\t   <div class=\"city\"><a href=\"https://targowisko.org/s-Kujawsko-pomorskie\" title=\"Kujawsko-pomorskie\">Kujawsko-pomorskie</a></div>
\t\t   </br>
\t\t   <ul id=\"poz\" >
\t\t\t\t\t<li> <a href =\"https://targowisko.org/s-kujawsko-pomorskie/brodnica\">Brodnica</li>
\t\t\t\t\t<li> <a href =\"https://targowisko.org/s-kujawsko-pomorskie/bydgoszcz\" >Bydgoszcz</li>
\t\t\t\t\t<li> <a href =\"https://targowisko.org/s-kujawsko-pomorskie/chelmno\" >Chełmno</li>
\t\t\t\t\t<li> <a href =\"https://targowisko.org/s-kujawsko-pomorskie/grudziac\" >Grudziąc</li>
\t\t\t\t\t<li> <a href =\"https://targowisko.org/s-kujawsko-pomorskie/inowroclaw\" >Inowrocław</li>
\t\t\t\t\t<li> <a href =\"https://targowisko.org/s-kujawsko-pomorskie/naklo-nad-notecia\" >Nakło nad Notecią</li>
\t\t\t\t\t<li> <a href =\"https://targowisko.org/s-kujawsko-pomorskie/rypin\" >Rypin</li>
\t\t\t\t\t<li> <a href =\"https://targowisko.org/s-kujawsko-pomorskie/solec-kujawski\" >Solec kujawski</li>
\t\t\t\t\t<li> <a href =\"https://targowisko.org/s-kujawsko-pomorskie/swiecie\" >Świecie</li>
\t\t\t\t\t<li> <a href =\"https://targowisko.org/s-kujawsko-pomorskie/torun\" >Toruń</li>
\t\t\t\t\t<li> <a href =\"https://targowisko.org/s-kujawsko-pomorskie/wloclawek\" >Włocławek</a></li>
\t\t\t</ul>
\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t<hr>
\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t</div></br>\t
\t\t</div></br>
\t\t
\t\t<div class=\"D\">
\t\t   <div class=\"city\" ><a href=\"https://targowisko.org/s-Lubelskie\" title=\"Lubelskie\">Lubelskie</a></div></br>
\t\t   <ul id=\"poz\">
\t\t\t\t<li><a href = \"https://targowisko.org/s-lubelskie/biala-podlaska\">Biała Podlaska</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/bilgoraj\" >Biłgoraj</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/chelm\" >Chełm</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/demblin\" >Dęmblin</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/hrubieszow\" >Hrubieszów</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/krasnik\" >Kraśnik</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/krasnystaw\" >Krasnystaw</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/leczna\" >Łęczna</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/lubartow\" >Lubartów</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/lublin\" >Lublin</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/lukow\" >Łuków</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/miedzyrzec-podlaski\" >Międzyrzec Podlaski</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/pliawy\" >Puławy</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/radzyn-podlaski\" >Radzyń Podlaski</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/swidnik\" >Świdnik</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/tomaszow-lubelski\" >Tomaszów Lubelski</li>
\t\t\t\t<li> <a href = \"https://targowisko.org/s-lubelskie/zamosc\" >Zamość</a></li>
\t\t\t</ul>
\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t<hr>
\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t</div></br>\t
\t\t</div></br>
\t\t
\t\t<div class=\"E\">
\t\t   <div class=\"city\"><a href=\"https://targowisko.org/s-Lubuskie\" title=\"Lubuskie\">Lubuskie</a></div></br>
\t\t   \t<ul id=\"poz\" >
\t\t\t\t<li> <a href =\"https://targowisko.org/s-lubuskie/gorzow-wielkopolski\">Gorzów Wielkopolski</li>
\t\t\t\t<li> <a href =\"https://targowisko.org/s-lubuskie/gubin\" >Gubin</li>
\t\t\t\t<li> <a href =\"https://targowisko.org/s-lubuskie/kostrzyn-nad-odra\" >Kostrzyn nad Odrą</li>
\t\t\t\t<li> <a href =\"https://targowisko.org/s-lubuskie/miedzyrzecz\" >Międzyrzecz</li>
\t\t\t\t<li> <a href =\"https://targowisko.org/s-lubuskie/nowa-sol\" >Nowa Sól</li>
\t\t\t    <li> <a href =\"https://targowisko.org/s-lubuskie/slubice\" >Słubice</li>
\t            <li> <a href =\"https://targowisko.org/s-lubuskie/sliechow\" >Sliechów</li>
\t\t\t    <li> <a href =\"https://targowisko.org/s-lubuskie/swiebodzin\" >Świebodzin</li>
\t\t\t    <li> <a href =\"https://targowisko.org/s-lubuskie/zagan\" >Żagań</li>
\t\t\t\t<li> <a href =\"https://targowisko.org/s-lubuskie/zary\" >Żary</li>
\t\t\t\t<li> <a href =\"https://targowisko.org/s-lubuskie/zielona-gora\" >Zielona Góra</a></li>
\t\t\t</ul>
\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t<hr>
\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t</div></br>\t
\t\t</div>
\t\t<div class=\"clear: both\"></div>
\t\t</div></br>
\t\t<div class=\"M-2\">
        <div class=\"F\">
\t\t\t<div class=\"city\"><a href=\"https://targowisko.org/s-mazowieckie\" title=\"Mazowieckie\">Mazowieckie</a></div></br>
\t\t\t<ul id=\"poz\"  >
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/ciechanow\" >Ciechanów</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/garwolin\" >Garwolin</li>
\t \t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/gostynin\" >Gostynin</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/goworowo\" >Goworowo</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/grodzisk-mazowiecki\" >Grodzisk Mazowiecki</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/grojec\" >Grójec</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/jozefow\" >Józefów</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/kobylka\" >Kobyłka</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/konstancin-jeziorna\" >Konstancin-Jeziorna</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/kozienice\" >Kozienice</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/legionowo\" >Legionowo</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/lomianki\" >Łomianki</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/marki\" >Marki</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/milanowek\" >Milanówek</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/minsk-mazowiecki\" >Mińsk Mazowiecki</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/mlawa\" >Mława</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/nowy-dwor-mazowiecki\" >Nowy Dwór Mazowiecki</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/ostroleka\" title=\"Zobacz Ostrołęka\"><spam style=\"color: orangered\">Ostrołęka</spam></li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/ostrow-mazowiecka\" >Ostrów Mazowiecka</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/otwock\" >Otwock</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/piaseczno\" >Piaseczno</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/piastow\" >Piastów</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/pionki\" >Pionki</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/plock\" >Płock</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/plonsk\" >Płońsk</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/pruszkow\" >Pruszków</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/przasnysz\" >Przasnysz</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/plitusk\" >Pułtusk</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/radom\" >Radom</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/siedlce\" >Siedlce</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/sierpc\" >Sierpc</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/sochaczew\" >Sochaczew</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/sokolow-podlaski\" >Sokołów Podlaski</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/sliejowek\" >Sliejówek</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/warszawa\" >Warszawa</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/wolomin\" >Wołomin</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/wyszkow\" >Wyszków</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/zabki\" >Ząbki</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/zielonka\" >Zielonka</li>
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/zyrardow\" >Żyrardów</li>\t\t   
\t\t\t\t<li> <a href=\"https://targowisko.org/s-mazowieckie/wojciechowice\" title=\"Zobacz Wociechowice\"><spam style=\"color: orangered\">Wojciechowice</spam></a></li>\t\t   
\t\t\t </ul>
\t\t\t <div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t<hr>
\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t</div></br>\t
\t\t</div></br>
            <div class=\"D\">
\t\t\t\t<div class=\"city\"><a href=\"https://targowisko.org/s-lodzkie\" title=\"Łódzkie\">Łódzkie</a></div></br>
\t\t\t\t<ul id=\"poz\" >
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/aleksandrow-lodzki\" >Aleksandrów Łódzki</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/belchatow\" >Bełchatów</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/glowno\" >Głowno</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/konstantynow-lodzki\" >Konstantynów Łódzki</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/kutno\" >Kutno</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/lask\" >Łask</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/leczyca\" >Łęczyca</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/lodz\" >Łódz</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/lowicz\" >Łowicz</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/opoczno\" >Opoczno</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/ozorkow\" >Ozorków</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/pabianice\" >Pabianice</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/piotrkow-trybunalski\" >Piotrków Trybunalski</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/radomsko\" >Radomsko</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/rawa-mazowiecka\" >Rawa Mazowiecka</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/sieradz\" >Sieradz</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/skierniewice\" >Skierniewice</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/tomaszow-mazowiecki\" >Tomaszów Mazowiecki</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/wielun\" >Wieluń</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/zdunska-wola\" >Zduńska Wola</li>
\t\t\t\t\t\t\t <li> <a href=\"https://targowisko.org/s-lodzkie/zgierz\" >Zgierz</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t</div></br>\t
\t\t\t</div></br>
            <div class=\"G\">
\t\t\t\t<div class=\"city\"><a href=\"https://targowisko.org/s-malopolskie\" title=\"Małopolskie\">Małopolskie</a></div></br>
\t\t\t<ul id=\"poz\" >
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/andrychow\" >Andrychów</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/bochnia\" >Bochnia</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/brzesko\" >Brzesko</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/chrzanow\" >Chrzanów</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/gorlice\" >Gorlice</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/kety\" >Kęty</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/krakow\" >Kraków</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/libiaz\" >Libiąż</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/limanowa\" >Limanowa</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/myslenice\" >Myślenice</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/nowy-sacz\" >Nowy Sącz</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/nowy-targ\" >Nowy Targ</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/olkusz\" >Olkusz</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/oswiecim\" >Oświęcim</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/skawina\" >Skawina</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/tarnow\" >Tarnów</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/trzebina\" >Trzebina</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/wadowice\" >Wadowice</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/wieliczka\" >Wieliczka</li>
\t\t\t\t\t\t<li><a href =\" https://targowisko.org/s-malopolskie/zakopane\" >Zakopane</a></li>\t\t
\t\t\t</ul>\t
\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t<hr>
\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t</div></br>\t\t
\t\t</div></br>
\t\t
\t\t\t<div class=\"D\">
\t\t\t<div class=\"city\"><a href=\"https://targowisko.org/s-opolskie\" title=\"Opolskie\">Opolskie</a></div></br>
\t\t\t<ul id=\"poz\" >
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-opolskie/brzeg\">Brzeg</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-opolskie/kedzierzyn-kozle\" >Kędzierzyn-Koźle</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-opolskie/kluczbork\" >Kluczbork</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-opolskie/krapkowice\" >Krapkowice</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-opolskie/namyslow\" >Namysłów</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-opolskie/nysa\" >Nysa</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-opolskie/opole\" >Opole</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-opolskie/prudnik\" >Prudnik</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-opolskie/strzelce-opolskie\" >Strzelce Opolskie</a></li>\t\t
\t\t\t</ul>
\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t<hr>
\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t</div></br>\t
\t\t\t<div class=\"clear:both\"></div>
\t\t</div></br>
\t\t\t</div>


\t\t<div class=\"M-3\">
\t\t\t\t<div class=\"D\">
\t\t\t\t\t\t<div class=\"city\"><a href=\"https://targowisko.org/s-podkarpackie\" title=\"Podkarpackie\">Podkarpackie</a></div></br>
\t\t\t\t\t\t<ul id=\"poz\"  >
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/debica\" >Dębica</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/jaroslaw\" >Jarosław</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/jaslo\" >Jasło</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/krosno\" >Krosno</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/lancut\" >Łańcut</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/mielec\" >Mielec</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/nisko\" >Nisko</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/przemysl\" >Przemyśl</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/przeworsk\" >Przeworsk</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/ropczyce\" >Ropczyce</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/rzeszow\" >Rzeszów</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/sanok\" >Sanok</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/stalowa-wola\" >Stalowa Wola</li>
\t\t\t\t\t\t<li><a href =\"https://targowisko.org/s-podkarpackie/tarnobrzeg\" >Tarnobrzeg</a></li>\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t</div></br>\t
\t\t\t\t</div></br>
\t\t\t\t<div class=\"F\">
\t\t\t\t\t\t<div class=\"city\" ><a href=\"https://targowisko.org/s-podlaskie\" title=\"Podlaskie\">Podlaskie</a></div></br>
\t\t\t\t\t\t<ul id=\"poz\" >
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/augustow\" >Augustów</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/bialystok\" title=\"Zobacz Białystok\"><span style=\"color: orangered\">Białystok</span></li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/bielsk-podlaski\" >Bielsk Podlaski</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/choroszcz\" >Choroszcz</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/czarna-bialostocka\" >Czarna Białostocka</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/grajewo\" >Grajewo</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/hajnowka\" >Hajnówka</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/jednaczewo\" >Jednaczewo</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/jedwabne\" >Jedwabne</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/jeziorko\" >Jeziorko</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/kolno\" >Kolno</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/lapy\" >Łapy</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/lomza\" title=\"Zobacz Łomża\"><spam style=\"color: orangered\">Łomża</spam></li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/monki\" >Mońki</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/nowe-kupiski\" >Nowe Kupiski</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/nowogrod\" >Nowogród</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/piatnica\" >Piątnica</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/podgorze\" >Podgórze</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/siemiatycze\" >Siemiatycze</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/sokolka\" >Sokółka</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/stare-kupiski\" >Stare Kupiski</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/stawiski\" >Stawiski</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/suwalki\" >Suwałki</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/wasilkow\" >Wasilków</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-podlaskie/zambrow\" title=\"Zobacz Zambrów\"><span style=\"color: orangered\">Zambrów</span></a></li> \t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t</div></br>\t
\t\t\t\t</div></br>
\t\t\t\t<div class=\"D\">
\t\t\t\t\t\t<div class=\"city\" ><a href=\"https://targowisko.org/s-pomorskie\" title=\"Pomorskie\">Pomorskie</a></div></br>
\t\t\t\t\t\t<ul id=\"poz\" >
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/bydgoszcz\" >Bydgoszcz</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/bytow\" >Bytów</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/chojnice\" >Chojnice</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/gdansk\" >Gdańsk</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/gdynia\" >Gdynia</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/kartuzy\" >Kartuzy</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/koscierzyna\" >Kościerzyna</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/kwidzyn\" >Kwidzyn</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/lembork\" >Lembork</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/malbork\" >Malbork</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/pruszcz-gdanski\" >Pruszcz Gdański</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/reda\" >Reda</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/rumia\" >Rumia</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/slupsk\" >Słupsk</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/sopot\" >Sopot</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/starogard-gdanski\" >Starogard Gdański</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/trzew\" >Trzew</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/ustka\" >Ustka</li> 
\t\t\t\t\t\t\t<li> <a href=\"https://targowisko.org/s-pomorskie/wejherowo\" >Wejherowo</a></li> 

\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t</div></br>\t
\t\t\t\t</div></br>
\t\t\t\t<div class=\"G\">
\t\t\t\t\t<div class=\"city\"><a href=\"https://targowisko.org/s-slaskie\" title=\"Śląskie\">Śląskie</a></div></br>
\t\t\t\t\t<ul id=\"poz\" >
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/bedzin\" >Będzin</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/bielsko-biala\" >Bielsko-Biała</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/bierun\" >Bieruń</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/bytom\" >Bytom</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/chorzow\" >Chorzów</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/cieszyn\" >Cieszyn</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/czechowice-dziedzice\" >Czechowice-Dziedzice</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/czeladz\" >Czeladz</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/czerwionka-leszczyny\" >Czerwionka-Leszczyny</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/czestochowa\" >Częstochowa</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/dabrowa-gornicza\" >Dąbrowa Górnicza</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/gliwice\" >Gliwice</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/jastrzebie-zdroj\" >Jastrzębie-Zdrój</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/jaworzno\" >Jaworzno</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/katowice\" >Katowice</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/knurow\" >Knurów</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/laziska-gorne\" >Łaziska Górne</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/ledziny\" >Lędziny</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/lubliniec\" >Lubliniec</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/mikolow\" >Mikołów</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/myslowice\" >Mysłowice</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/myszkow\" >Myszków</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/orzesze\" >Orzesze</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/piekary-slaskie\" >Piekary Śląskie</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/pszczyna\" >Pszczyna</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/pyskowice\" >Pyskowice</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/raciborz\" >Racibórz</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/radlin\" >Radlin</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/radzionkow\" >Radzionków</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/ruda-slaska\" >Ruda Śląska</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/rybnik\" >Rybnik</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/rydultowy\" >Rydułtowy</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/siemianowice-slaskie\" >Siemianowice Śląskie</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/sosnowiec\" >Sosnowiec</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/swietochlowice\" >Świętochłowice</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/tarnowskie-gory\" >Tarnowskie Góry</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/tychy\" >Tychy</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/ustron\" >Ustroń</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/wodzislaw-slaski\" >Wodzisław Śląski</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/zabrze\" >Zabrze</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/zawiercie\" >Zawiercie</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/zory\" >Żory</li> 
\t\t\t\t\t<li><a href=\"https://targowisko.org/s-slaskie/zywiec\" >Żywiec</a></li> \t
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t</div></br>\t\t\t
\t\t\t\t</div>   
\t\t</div></br>\t\t\t\t\t
\t\t<div class=\"M-4\">
\t\t\t\t<div class=\"D\">
\t\t\t\t\t\t<div class=\"city\"><a href=\"https://targowisko.org/s-swietokrzyskie\" title=\"Świętokrzyskie\">Świętokrzyskie</a></div></br>
\t\t\t\t\t\t<ul id=\"poz\" >
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-swietokrzyskie/busko-zdroj\" >Busko-Zdrój</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-swietokrzyskie/jedrzejow\" >Jędrzejów</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-swietokrzyskie/kielce\" >Kielce</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-swietokrzyskie/konskie\" >Końskie</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-swietokrzyskie/ostrowiec-swietokrzyski\" >Ostrowiec Świętokrzyski</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-swietokrzyskie/sandomierz\" >Sandomierz</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-swietokrzyskie/skarzysko-kamienna\" >Skarżysko-Kamienna</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-swietokrzyskie/starachowice\" >Starachowice</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-swietokrzyskie/staszow\" >Staszów</a></li> \t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t</div></br>
\t\t\t\t\t\t</div></br>
\t\t\t\t\t\t<div class=\"D\">
\t\t\t\t\t\t\t\t<div class=\"city\"><a href=\"https://targowisko.org/s-warminsko-mazurskie/\" title=\"Warmińsko Mazurskie\">Warmińsko Mazurskie</a></div></br>
\t\t\t\t\t\t\t\t<ul id=\"poz\">
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/braniewo\" >Braniewo</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/bartoszyce\" >Bartoszyce</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/dzialowo\" >Działowo</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/elblag\" >Elbląg</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/elk\" >Ełk</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/gizycko\" >Giżycko</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/ilawa\" >Iława</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/ketrzyn\" >Kętrzyn</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/lidzbark-warminski\" >Lidzbark Warminski</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/mragowo\" >Mrągowo</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/olecko\" >Olecko</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/olsztyn\" >Olsztyn</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/ostroda\" >Ostróda</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/pisz\" >Pisz</li> 
\t\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-warminsko-mazurskie/szczytno\" title=\"Zobacz Szczytno\"><span style=\"color: orangered\">Szczytno</span></a></li> \t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t</div></br>\t
\t\t\t\t\t\t</div></br>
\t\t\t\t\t\t<div class=\"D\">
\t\t\t\t\t\t\t<div class=\"city\"><a href=\"https://targowisko.org/s-wielkopolskie/\" title=\"Wielkopolskie\">Wielkopolskie</a></div></br>
\t\t\t\t\t\t\t<ul id=\"poz\" >
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/chodziez\" >Chodzież</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/gniezno\" >Gniezno</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/gostyn\" >Gostyń</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/jarocin\" >Jarocin</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/kalisz\" >Kalisz</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/kolo\" >Koło</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/konin\" >Konin</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/koscian\" >Kościan</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/krotoszyn\" >Krotoszyn</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/leszno\" >Leszno</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/lubon\" >Luboń</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/nowy-tomysl\" >Nowy Tomyśl</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/oborniki\" >Oborniki</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/ostrow--wielkopolski\" >Ostrów  Wielkopolski</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/pila\" >Piła</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/pleszew\" >Pleszew</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/poznan\" >Poznań</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/rawicz\" >Rawicz</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/srem\" >Śrem</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/sroda-wielkopolska\" >Środa Wielkopolska</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/swarzedz\" >Swarzędz</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/szamotuly\" >Szamotuły</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/trzcianka\" >Trzcianka</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/turek\" >Turek</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/wagrowiec\" >Wągrowiec</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/wrzesnia\" >Września</li> 
\t\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-wielkopolskie/zlotow\" >Złotów</a></li> \t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t</div></br>\t
\t\t\t\t\t</div></br>
\t\t\t\t\t<div class=\"D\">
\t\t\t\t\t\t<div class=\"city\" ><a href=\"https://targowisko.org/s-zachodniopomorskie/\" title=\"Zachodniopomorskie\">Zachodniopomorskie</a></div></br>
\t\t\t\t\t\t<ul id=\"poz\"  >
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/bialogard\" >Białogard</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/choszczno\" >Choszczno</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/goleniow\" >Goleniów</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/gryfice\" >Gryfice</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/gryfino\" >Gryfino</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/kamien-pomorski\" >Kamień Pomorski</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/kolobrzeg\" >Kołobrzeg</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/koszalin\" >Koszalin</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/nowogard\" >Nowogard</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/police\" >Police</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/stargard\" >Stargard</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/swidwin\" >Świdwin</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/swinoujscie\" >Świnoujście</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/szczecin\" >Szczecin</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/szczecinek\" >Szczecinek</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zachodniopomorskie/walcz\" >Wałcz</a></li> \t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t</div></br>\t
\t\t\t\t\t</div></br>
                    <div class=\"G\">
\t\t\t\t\t\t<div class=\"city\" ><a href=\"https://targowisko.org/s-zagranica/\" title=\"Zagranica\">Zagranica</a></div></br>
\t\t\t\t\t\t<ul id=\"poz\">
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zagranica/new-york\" >New York</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zagranica/islandia\" >Islandia</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zagranica/niemcy\" >Niemcy</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zagranica/anglia\" >Anglia</li> 
\t\t\t\t\t\t\t<li><a href=\"https://targowisko.org/s-zagranica/irlandia\" >Irlandia</a></li> \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"ads-title\" alt=\"Dodaj reklamę\" title=\"Dodaj reklamę.\"> 
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">\t
\t\t\t\t\t\t\t\t\t\t<h2>Dodaj reklamę.</h2>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"ads\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://targowisko.org/dodaj_reklame\">
\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"upload/photos/2019/09//reklama_1.png\">\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"ads-fb\" href=\"http://www.facebook.com/Targowisko-darmowe-og%C5%82oszenia-1853942881321358/\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t</div></br>
\t\t\t\t\t</div>

\t\t   <div class=\"clear: both\"></div>
\t\t</div>
\t\t<div class=\"clear: both\"></div>
\t</div>
\t</div>
\t<div class=\"text-center\"><a class=\"btn btn-1\" href=\"https://targowisko.org/\" title=\"Pwrót do strony głównej\">Pwrót do strony głównej</a></div>
\t

\t





\t<!--";
        // line 725
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "index_box_subcategories", array()) && ($context["categories"] ?? null))) {
            // line 726
            echo "\t\t<div id=\"index_categories\">
\t\t\t<nav class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t";
            // line 730
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
                // line 731
                echo "\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 col-12 index_categories\"><a href=\"";
                echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                echo "?category=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Category"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\" class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "list_subcategories", array())) {
                    echo "index_show_subcategories";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" data-index=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "\">";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", array())) {
                    // line 732
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "thumb", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                    echo "\"> ";
                }
                echo "<span class=\"name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "</span>

\t\t\t\t\t\t\t

\t\t\t\t\t\t</a></div>
\t\t\t\t\t";
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
            // line 737
            echo "-->
\t\t\t\t</div>
\t\t\t\t<!--";
            // line 739
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 740
                echo "\t\t\t\t\t<div class=\"index_subcategories col-12\" id=\"index_subcategory_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t<p>";
                // line 741
                echo twig_escape_filter($this->env, lang("See all offers in"), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                echo "?category=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, lang("Category"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\"><span class=\"name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_number_offers_in_categories", array())) {
                    echo " (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "number_offers", array()), "html", null, true);
                    echo ")</span>";
                }
                echo "</a></p>
\t\t\t\t\t\t";
                // line 742
                if (twig_get_attribute($this->env, $this->source, $context["item"], "list_subcategories", array())) {
                    // line 743
                    echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<div class=\"row\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 745
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "list_subcategories", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                        // line 746
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 index_subcategories_list\"><a href=\"";
                        echo twig_escape_filter($this->env, path("offers"), "html", null, true);
                        echo "?category=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item2"], "id", array()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, lang("Category"), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item2"], "name", array()), "html", null, true);
                        echo "\">> <span class=\"name\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item2"], "name", array()), "html", null, true);
                        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_number_offers_in_categories", array())) {
                            echo " (";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item2"], "number_offers", array()), "html", null, true);
                            echo ")";
                        }
                        echo "</span></a></div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 748
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 750
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 751
            echo "-->
\t\t\t</nav>
\t\t<!--</div>-->
\t";
        } else {
            // line 755
            echo "\t\t<br><br>
\t";
        }
        // line 756
        echo "-->
\t
\t";
        // line 758
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_1", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_1", array());
            echo "</div>";
        }
        echo "\t\t
\t";
        // line 759
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_2", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_2", array());
            echo "</div>";
        }
        // line 760
        echo "\t
\t";
        // line 761
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "index_page", array())) {
            // line 762
            echo "\t\t<div id=\"index_text\">
\t\t\t<div class=\"container content\">
\t\t\t\t";
            // line 764
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "index_page", array());
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 768
        echo "\t
\t";
        // line 769
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_3", array())) {
            echo "<div class=\"ads\">";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ads_3", array());
            echo "</div>";
        }
        // line 770
        echo "\t
\t";
        // line 771
        if (($context["articles"] ?? null)) {
            // line 772
            echo "\t\t<div class=\"container\">
\t\t\t<br><br><h3 class=\"text-center\">";
            // line 773
            echo twig_escape_filter($this->env, lang("Recent articles"), "html", null, true);
            echo "</h3>
\t\t\t<br><br>
\t\t\t";
            // line 775
            $this->loadTemplate("articles.tpl", "cities.html", 775)->display($context);
            // line 776
            echo "\t\t</div>
\t</div>
\t";
        }
        // line 779
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "cities.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  984 => 779,  979 => 776,  977 => 775,  972 => 773,  969 => 772,  967 => 771,  964 => 770,  958 => 769,  955 => 768,  948 => 764,  944 => 762,  942 => 761,  939 => 760,  933 => 759,  925 => 758,  921 => 756,  917 => 755,  911 => 751,  904 => 750,  900 => 748,  878 => 746,  874 => 745,  870 => 743,  868 => 742,  849 => 741,  844 => 740,  840 => 739,  836 => 737,  809 => 732,  790 => 731,  773 => 730,  767 => 726,  765 => 725,  52 => 14,  50 => 13,  47 => 12,  43 => 10,  41 => 9,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cities.html", "/home/platne/serwer24113/public_html/views/default/cities.html");
    }
}
