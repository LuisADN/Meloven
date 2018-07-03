<?php

/* analytics/analyticsHead.html.twig */
class __TwigTemplate_646559859c1e697df02fa92da6c5972c6c7e496309980f814dd38d85f00f08a1 extends Twig_Template
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
        echo "<meta name=\"twitter:card\" content=\"summary\">
<meta name=\"twitter:site\" content=\"@MelovenFR\">
<meta name=\"twitter:url\" content=\"https://meloven.fr\">
<meta name=\"twitter:image:src\" content=\"https://pbs.twimg.com/profile_images/1005017267653042177/GyWXY_w3_400x400.jpg\">
<meta name=\"twitter:image:alt\" content=\"Meloven - Découvrez et soutenez les artistes de rue !\">
<meta name=\"twitter:title\" content=\"Meloven - Découvrez et soutenez les artistes de rue !\">
<meta name=\"twitter:description\" content=\"Meloven, met en avant les artistes de rues en organisant des concerts à ciel ouvert.\">

<meta property=\"og:url\" content=\"https://meloven.fr\" />
<meta property=\"og:type\" content=\"page\" />
<meta property=\"og:title\" content=\"Meloven - Découvrez et soutenez les artistes de rue !\" />
<meta property=\"og:description\" content=\"Meloven, met en avant les artistes de rues en organisant des concerts à ciel ouvert.\" />
<meta property=\"og:image\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/miniature_fb_tw.png"), "html", null, true);
        echo "\" />
<meta property=\"og:image:alt\" content=\"Meloven - Découvrez et soutenez les artistes de rue !\" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KF8VL6Z');</script>
<!-- End Google Tag Manager -->

";
    }

    public function getTemplateName()
    {
        return "analytics/analyticsHead.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "analytics/analyticsHead.html.twig", "/homepages/14/d740445017/htdocs/templates/analytics/analyticsHead.html.twig");
    }
}
