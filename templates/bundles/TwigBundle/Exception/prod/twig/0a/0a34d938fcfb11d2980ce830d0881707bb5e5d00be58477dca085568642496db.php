<?php

/* site/dashboard.html.twig */
class __TwigTemplate_1ab030d4940c863a8036bc5c1c65726837bedd6bd01c14b698017562b765dc73 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "site/dashboard.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'nav' => array($this, 'block_nav'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("heads/head_back.html.twig", "site/dashboard.html.twig", 4)->display($context);
    }

    // line 7
    public function block_nav($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("blog_post/nav.html.twig", "site/dashboard.html.twig", 8)->display($context);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <!-- Main -->
    <div class=\"container\" style=\"margin-top: 40px\">
        ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AUTHOR")) {
            // line 17
            echo "
            ";
            // line 22
            echo "
            <a class=\"btn btn-success\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post_new");
            echo "\">Créer un article</a>


        ";
        }
        // line 27
        echo "        <!-- One -->
        ";
        // line 68
        echo "    </div>
";
    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        // line 72
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/coreui.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "site/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 75,  84 => 72,  81 => 71,  76 => 68,  73 => 27,  66 => 23,  63 => 22,  60 => 17,  58 => 16,  54 => 14,  51 => 13,  46 => 8,  43 => 7,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "site/dashboard.html.twig", "/homepages/14/d740445017/htdocs/templates/site/dashboard.html.twig");
    }
}
