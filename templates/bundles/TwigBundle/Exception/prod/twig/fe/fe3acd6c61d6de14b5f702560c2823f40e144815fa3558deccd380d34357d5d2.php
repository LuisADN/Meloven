<?php

/* blog_post/nav.html.twig */
class __TwigTemplate_0909f6461bfaa995cf5d11b194cd021c91e5ac1e3951f9d11b5d2d43fbe9965a extends Twig_Template
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
        echo "<header class=\"app-header navbar\">
    <button class=\"navbar-toggler sidebar-toggler d-lg-none mr-auto\" type=\"button\" data-toggle=\"sidebar-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
        <img class=\"navbar-brand-full\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/svg/logo-desktop.svg"), "html", null, true);
        echo "\" width=\"89\" height=\"25\" alt=\"CoreUI Logo\">
        <img class=\"navbar-brand-minimized\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/svg/logo-desktop.svg"), "html", null, true);
        echo "\" width=\"30\" height=\"30\" alt=\"CoreUI Logo\">
    </a>
    ";
        // line 12
        echo "    <ul class=\"nav navbar-nav d-md-down-none\">
        <li class=\"nav-item px-3\">
            <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" target=\"_blank\">Accueil <span class=\"sr-only\">(current)</span></a>
        </li>
        ";
        // line 16
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 17
            echo "        <li class=\"nav-item px-3\">
            <a class=\"nav-link\" href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Dashboard</a>
        </li>
        ";
        } else {
            // line 21
            echo "            ";
            // line 22
            echo "        ";
        }
        // line 23
        echo "        <li class=\"nav-item px-3\">
            <a class=\"nav-link\" href=\"#\"><a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post_index");
        echo "\">Liste des article</a></a>
        </li>
        <li class=\"nav-item px-3\">
            <a class=\"nav-link\" href=\"#\"><a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post_new");
        echo "\">Créer un article</a></a>
        </li>

        ";
        // line 33
        echo "
    </ul>
    <ul class=\"nav navbar-nav ml-auto\">
        ";
        // line 52
        echo "        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                ";
        // line 54
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 55
            echo "                    <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "lastName", array()), "html", null, true);
            echo "</strong> - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "email", array()), "html", null, true);
            echo "
                ";
        }
        // line 57
        echo "                ";
        // line 58
        echo "                <span class=\"navbar-toggler-icon\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\">
                ";
        // line 80
        echo "                <div class=\"dropdown-header text-center\">
                    <strong>Settings</strong>
                </div>
                <a class=\"dropdown-item\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                    <i class=\"fa fa-user\"></i> Profile</a>
                ";
        // line 98
        echo "                ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 99
            echo "                <a class=\"dropdown-item\" href=\"/logout\">
                    <i class=\"fa fa-lock\"></i> Logout</a>
                ";
        } else {
            // line 102
            echo "                <li class=\"nav-item px-3\">
                <a class=\"dropdown-item\" href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
                    <i class=\"fa fa-lock\"></i> Connexion</a>
                ";
        }
        // line 106
        echo "
            </div>
        </li>
    </ul>
    ";
        // line 116
        echo "</header>";
    }

    public function getTemplateName()
    {
        return "blog_post/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 116,  137 => 106,  131 => 103,  128 => 102,  123 => 99,  120 => 98,  115 => 83,  110 => 80,  105 => 58,  103 => 57,  93 => 55,  91 => 54,  87 => 52,  82 => 33,  76 => 27,  70 => 24,  67 => 23,  64 => 22,  62 => 21,  56 => 18,  53 => 17,  51 => 16,  46 => 14,  42 => 12,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog_post/nav.html.twig", "/homepages/14/d740445017/htdocs/templates/blog_post/nav.html.twig");
    }
}
