<?php

/* site/nav.html.twig */
class __TwigTemplate_d5cf5399feddfe45d2cf9343b2d8de321d6553d4221e2e465668d6bde749c83d extends Twig_Template
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
        echo "<nav>
    <figure>
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/svg/logo-desktop.svg"), "html", null, true);
        echo "\" alt=\"Meloven\"></a>
    </figure>
    <ul>
        <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qui_sommes_nous");
        echo "\"><li>Qui est Meloven</li></a>
        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#artistes\" class=\"btn-nos-artistes-nav\"><li>Nos artistes</li></a>
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\"><li>Blog</li></a>
        ";
        // line 10
        echo "        <div class=\"div-btn\">
            <span class=\"button--bubble__container\">
              <a href=\"#contact\" class=\"button button--bubble btn-contact-nav\">
                Vous êtes un(e) artiste ?
              </a>
              <span class=\"button--bubble__effect-container\">
                <span class=\"circle top-left\"></span>
                <span class=\"circle top-left\"></span>
                <span class=\"circle top-left\"></span>
                <span class=\"button effect-button\"></span>
                <span class=\"circle bottom-right\"></span>
                <span class=\"circle bottom-right\"></span>
                <span class=\"circle bottom-right\"></span>
              </span>
            </span>
        </div>
        ";
        // line 27
        echo "    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "site/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  47 => 10,  43 => 8,  39 => 7,  35 => 6,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "site/nav.html.twig", "/homepages/14/d740445017/htdocs/templates/site/nav.html.twig");
    }
}
