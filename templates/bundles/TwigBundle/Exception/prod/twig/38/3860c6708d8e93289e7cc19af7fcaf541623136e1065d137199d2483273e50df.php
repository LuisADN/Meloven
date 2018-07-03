<?php

/* heads/head_front_site.html.twig */
class __TwigTemplate_53d52c810dae57ed5292d94e919e4e02c56843b658ca629b4818cc39ec6e0cda extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/reset.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/main-site.css"), "html", null, true);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "heads/head_front_site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "heads/head_front_site.html.twig", "/homepages/14/d740445017/htdocs/templates/heads/head_front_site.html.twig");
    }
}
