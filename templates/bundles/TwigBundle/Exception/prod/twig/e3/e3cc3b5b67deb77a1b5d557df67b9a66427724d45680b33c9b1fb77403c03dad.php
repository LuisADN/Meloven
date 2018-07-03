<?php

/* base.html.twig */
class __TwigTemplate_dc76984e6ad184d0a2513f0fae2cd9bb5e88d0c13bb80a07437c154659ce80ed extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'nav' => array($this, 'block_nav'),
            'contentLogin' => array($this, 'block_contentLogin'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["asset_base"] = "/media/";
        // line 2
        echo "
<!DOCTYPE HTML>
<html>
    <head>
        <title>Meloven</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
        <!-- Head -->
        <!-- Icons-->
        <link rel=\"stylesheet\" href=\"https://unpkg.com/@coreui/icons/css/coreui-icons.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css\" />
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css\" />
        <!-- Main styles for this application-->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/coreui/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/coreui/pace.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 18
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "        ";
        // line 20
        echo "    </head>
    <body class=\"app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show   pace-done pace-done\">
        ";
        // line 23
        echo "
        <!-- Nav -->
        ";
        // line 25
        $this->displayBlock('nav', $context, $blocks);
        // line 26
        echo "


        <div class=\"app-body\">

            ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "login")) {
            // line 32
            echo "                <!-- Contenu -->
                    <div class=\"container\">
                        ";
            // line 34
            $this->displayBlock('contentLogin', $context, $blocks);
            // line 35
            echo "                    </div>



            ";
        } else {
            // line 40
            echo "                ";
            $this->loadTemplate("blog_post/sidebar.html.twig", "base.html.twig", 40)->display($context);
            // line 41
            echo "                <div class=\"main\">
                    <div class=\"container-fluid\">
                        <div id=\"ui-view\">
                            <div>
                                <!-- Contenu -->
                                ";
            // line 46
            $this->displayBlock('content', $context, $blocks);
            // line 47
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 52
        echo "

        </div>







        <!-- Footer -->
        ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "        <!-- Scripts -->
        ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
    }

    // line 18
    public function block_head($context, array $blocks = array())
    {
    }

    // line 25
    public function block_nav($context, array $blocks = array())
    {
    }

    // line 34
    public function block_contentLogin($context, array $blocks = array())
    {
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 65,  156 => 63,  151 => 46,  146 => 34,  141 => 25,  136 => 18,  130 => 66,  128 => 65,  125 => 64,  123 => 63,  110 => 52,  103 => 47,  101 => 46,  94 => 41,  91 => 40,  84 => 35,  82 => 34,  78 => 32,  76 => 31,  69 => 26,  67 => 25,  63 => 23,  59 => 20,  57 => 19,  55 => 18,  51 => 17,  47 => 16,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/homepages/14/d740445017/htdocs/templates/base.html.twig");
    }
}
