<?php

/* site/home.html.twig */
class __TwigTemplate_f9eb1606d5dca3f423ae906ce864640ed0458133aa96c8953c876bebeb34a442 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base-site.html.twig", "site/home.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base-site.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <header class=\"header-home\">
        <div class=\"header-container\">
            ";
        // line 8
        $this->loadTemplate("site/nav.html.twig", "site/home.html.twig", 8)->display($context);
        // line 9
        echo "            <div class=\"main-title\">
                <h1>Meloven</h1>
                <h2>Pour les artistes de rue</h2>
            </div>
        </div>
        <span class=\"scroll-btn\">
            <a href=\"#explain\">
                <span class=\"mouse\">
                    <span>
                    </span>
                </span>
            </a>
        </span>
        <span class=\"linedown\"></span>

    </header>

        <section id=\"explain\" class=\"explain\">
            <div class=\"container\">
                ";
        // line 31
        echo "                <video autoplay loop>
                    <source src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/video/cascadeV2.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
                    Your browser does not support the video tag.
                </video>
                <div>
                    <h1>Vous rêvez d’un monde tout en musique ?</h1>
                    <h2>Venez découvrir de</br> nouveaux talents !</h2>
                    <p>Explorateurs dans l’âme, chaque jour, nous avons pour mission de dénicher de nouveaux talents. Un seul objectif, créer un monde tout en musique et haut en couleur !</p>
                </div>
            </div>
        </section>

        <section class=\"artistes\">
            <div class=\"artistes-header\">
                <h1 id=\"artistes\" class=\"title\"><a class=\"underline--magical\">Nos artistes de rue</a></h1>
                <span>ont du talent</span>
            </div>



            <div class=\"container-artistes\">

                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["musicians"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["musician"]) {
            // line 54
            echo "                <article class=\"artistes-content\">
                    <div class=\"article-content-text\">
                        <h1>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "username", array()), "html", null, true);
            echo "</h1>
                        ";
            // line 58
            echo "                        <h2><a class=\"underline--magical--two\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "location", array()), "html", null, true);
            echo "</a></h2>
                        ";
            // line 62
            echo "
                        <p>";
            // line 63
            echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->truncateText($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "userDescription", array()), 230, false, "");
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artiste", array("slug" => twig_get_attribute($this->env, $this->source, $context["musician"], "slug", array()))), "html", null, true);
            echo "\">[...]</a></p>
                        <div class=\"div-btn\">
                            <span class=\"button--bubble__container\">
                              <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artiste", array("slug" => twig_get_attribute($this->env, $this->source, $context["musician"], "slug", array()))), "html", null, true);
            echo "\" class=\"button button--bubble\">
                                Découvrir
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
            // line 81
            echo "                    </div>
                    <figure>
                        <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("artiste", array("slug" => twig_get_attribute($this->env, $this->source, $context["musician"], "slug", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["musician"], "avatar", array()), "html", null, true);
            echo "\" alt=\"\"></a>
                    </figure>
                </article>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['musician'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "

                ";
        // line 103
        echo "            </div>
            <div class=\"artistes-footer\"></div>
        </section>

        <section class=\"objectif\">
            <h1 class=\"title\"><a class=\"underline--magical\">Pourquoi rejoindre l’aventure ?</a></h1>
            <p>Meloven rêve de partager avec toi son amour pour la musique et de te faire découvrir de nouveaux talents. Nous souhaitons également t'offrir la possibilité d’aider les artistes à vivre de leur passion en réalisant leur rêves en mettant en place un système de dons grâce au paiement sans contact. Notre mission ultime: se retrouver tous ensemble lors d'un grand concert que nous organiserons afin de vivre un moment de partage magique.</p>
            ";
        // line 113
        echo "        </section>

        <section class=\"blog\">
            <div class=\"container-blog\">
                <h1 class=\"title\"><a class=\"underline--magical\">Notre blog</a></h1>
                <div class=\"article-blog-bloc\">
                    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blog_posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 120
            echo "                        <article>
                            <figure>
                                <img src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "cover", array()), "html", null, true);
            echo "\" alt=\"\">
                                <span>
                                    <img src=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", array()), "avatar", array()), "html", null, true);
            echo "\" alt=\"\">
                                </span>
                            </figure>
                            <span>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", array()), "firstName", array()), "html", null, true);
            echo " de Meloven</span>
                            <h1>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</h1>
                            <p>";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->truncateText($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", array()), 75, false, ""), "html", null, true);
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_post_show", array("slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", array()))), "html", null, true);
            echo "\">[...]</a></p>
                            <div class=\"div-btn\">
                                <span class=\"button--bubble__container\">
                                  <a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_post_show", array("slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", array()))), "html", null, true);
            echo "\" class=\"button button--bubble\">
                                    Découvrir
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
            // line 147
            echo "                        </article>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                </div>
            </div>
            <div class=\"btn-parcourir-blog\">
                ";
        // line 153
        echo "                <div class=\"div-btn\">
                    <span class=\"button--bubble__container\">
                      <a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\" class=\"button button--bubble\">
                        Parcourir le blog
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
            </div>


        </section>
";
    }

    public function getTemplateName()
    {
        return "site/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 155,  244 => 153,  239 => 149,  232 => 147,  215 => 132,  207 => 129,  203 => 128,  199 => 127,  192 => 124,  186 => 122,  182 => 120,  178 => 119,  170 => 113,  161 => 103,  157 => 87,  144 => 83,  140 => 81,  123 => 66,  115 => 63,  112 => 62,  107 => 58,  103 => 56,  99 => 54,  95 => 53,  71 => 32,  68 => 31,  47 => 9,  45 => 8,  41 => 6,  38 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "site/home.html.twig", "/homepages/14/d740445017/htdocs/templates/site/home.html.twig");
    }
}
