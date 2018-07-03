<?php

/* base-site.html.twig */
class __TwigTemplate_f45b878f1b037e03778df7ffeef57f77d168917b7ff2b5243a61e23214e1c9a2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'littlejavascript' => array($this, 'block_littlejavascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"fr\" xmins:og=\"http://ogp.me/ns#\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Meloven - Découvrez et soutenez les artistes de rue !</title>
    <meta name=\"description\" content=\"Meloven, met en avant les artistes de rues en organisant des concerts à ciel ouvert.\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/favicon.png"), "html", null, true);
        echo "\" />
    ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "    ";
        $this->loadTemplate("heads/head_front_site.html.twig", "base-site.html.twig", 14)->display($context);
        // line 15
        echo "    ";
        $this->loadTemplate("analytics/analyticsHead.html.twig", "base-site.html.twig", 15)->display($context);
        // line 16
        echo "</head>
<body>
    ";
        // line 18
        $this->loadTemplate("analytics/analyticsBody.html.twig", "base-site.html.twig", 18)->display($context);
        // line 19
        echo "    ";
        // line 20
        echo "    <div class=\"mobile-nav\">
        <div class=\"mobile-nav-logo\">
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/svg/logo-desktop.svg"), "html", null, true);
        echo "\" alt=\"Meloven\"></a>
        </div>
    </div>

    <div class=\"burger-menu\">
        <label>
            <input type='checkbox'>
            <span class='menu'>
               <span class='hamburger'></span>
            </span>
            <ul>
                <li><a href=\"/\"><h1 class=\"logo-burger\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/svg/logo-desktop.svg"), "html", null, true);
        echo "\" alt=\"Meloven\"></h1></a></li>
                <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qui_sommes_nous");
        echo "\">Qui est Moloven</a></li>
                <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#artistes\">Nos artistes</a></li>
                <li><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\" target=\"_blank\">Blog</a></li>
                <li><a href=\"#contact\">Contact</a></li>
                ";
        // line 39
        echo "                ";
        // line 49
        echo "            </ul>
        </label>
    </div>


<!-- Contenu -->
";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 56
        $this->loadTemplate("site/footer.html.twig", "base-site.html.twig", 56)->display($context);
        // line 57
        $this->displayBlock('littlejavascript', $context, $blocks);
        // line 58
        echo "</body>
</html>";
    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
    }

    // line 57
    public function block_littlejavascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base-site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 57,  123 => 55,  118 => 12,  115 => 11,  110 => 58,  108 => 57,  106 => 56,  104 => 55,  96 => 49,  94 => 39,  89 => 36,  85 => 35,  81 => 34,  77 => 33,  61 => 22,  57 => 20,  55 => 19,  53 => 18,  49 => 16,  46 => 15,  43 => 14,  41 => 11,  37 => 10,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base-site.html.twig", "/homepages/14/d740445017/htdocs/templates/base-site.html.twig");
    }
}
