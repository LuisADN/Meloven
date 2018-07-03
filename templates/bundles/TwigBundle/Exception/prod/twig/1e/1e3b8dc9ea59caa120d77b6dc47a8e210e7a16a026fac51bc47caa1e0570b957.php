<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_592a41b795da0f621c6b6e59e2be1052f715d8368d871c977e0f490272f9e8ca extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "        <!-- Main -->
        <div id=\"main\" class=\"alt\">
            <!-- One -->
            <section id=\"one\">
                <div class=\"inner\">
                    <header class=\"major\">
                        <h1>404</h1>
                    </header>
                    <p>";
        // line 12
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</p>
                    <p><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Retour à l'accueil</a></p>
                </div>
            </section>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  45 => 12,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error404.html.twig", "/homepages/14/d740445017/htdocs/templates/bundles/TwigBundle/Exception/error404.html.twig");
    }
}
