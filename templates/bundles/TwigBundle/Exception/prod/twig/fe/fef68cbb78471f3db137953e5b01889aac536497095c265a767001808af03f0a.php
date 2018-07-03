<?php

/* blog_post/sidebar.html.twig */
class __TwigTemplate_ec379f700bf2194e4912c82a9c039c5a3855d2fc7f509ff95e223055850af2cf extends Twig_Template
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
        echo "<div class=\"sidebar\">
    <nav class=\"sidebar-nav\">
        <ul class=\"nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                    <i class=\"nav-icon icon-speedometer\"></i> Dashboard
                </a>
            </li>
            ";
        // line 10
        echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post_index");
        echo "\">
                    <i class=\"nav-icon icon-drop\"></i> Liste des articles</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post_new");
        echo "\">
                    <i class=\"nav-icon icon-pencil\"></i> Créer un article</a>
            </li>
            ";
        // line 22
        echo "
        </ul>
    </nav>
    <button class=\"sidebar-minimizer brand-minimizer\" type=\"button\"></button>
</div>";
    }

    public function getTemplateName()
    {
        return "blog_post/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 22,  46 => 15,  39 => 11,  36 => 10,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog_post/sidebar.html.twig", "/homepages/14/d740445017/htdocs/templates/blog_post/sidebar.html.twig");
    }
}
