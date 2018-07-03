<?php

/* blog_post/index.html.twig */
class __TwigTemplate_a885b7b22f92e5c465dea2d6b73b3c16ee008eaca54c568714139cfb7cb56963 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog_post/index.html.twig", 1);
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
        $this->loadTemplate("heads/head_back.html.twig", "blog_post/index.html.twig", 4)->display($context);
    }

    // line 7
    public function block_nav($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("blog_post/nav.html.twig", "blog_post/index.html.twig", 8)->display($context);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <i class=\"fa fa-align-justify\"></i> Liste des articles
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-responsive-sm table-bordered table-striped table-sm\">
                        <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date de création</th>
                            <th>Date de publication</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blog_posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog_post"]) {
            // line 31
            echo "                        <tr>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog_post"], "title", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog_post"], "createdAt", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                            <td>None</td>
                            <td>
                                <a class=\"btn btn-block btn-dark\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post_show", array("id" => twig_get_attribute($this->env, $this->source, $context["blog_post"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                                <a class=\"btn btn-block btn-primary\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["blog_post"], "id", array()))), "html", null, true);
            echo "\">Éditer</a>

                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "                            <tr>
                                <td colspan=\"9\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        ";
        // line 51
        echo "                        </tbody>
                    </table>
                    <a class=\"btn btn-block btn-success\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post_new");
        echo "\">Créer un article</a>
                </div>

            </div>
        </div>

    </div>

";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "blog_post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 67,  137 => 64,  134 => 63,  121 => 53,  117 => 51,  115 => 46,  106 => 42,  96 => 37,  92 => 36,  86 => 33,  82 => 32,  79 => 31,  74 => 30,  54 => 12,  51 => 11,  46 => 8,  43 => 7,  38 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog_post/index.html.twig", "/homepages/14/d740445017/htdocs/templates/blog_post/index.html.twig");
    }
}
