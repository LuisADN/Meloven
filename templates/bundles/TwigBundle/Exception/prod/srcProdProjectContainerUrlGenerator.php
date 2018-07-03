<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'blog_post_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\BlogPostController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/redaction/post/',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        'blog_post_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\BlogPostController::new',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/redaction/post/new',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        'blog_post_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\BlogPostController::show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/redaction/post',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        'blog_post_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\BlogPostController::edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/redaction/post',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        'blog_post_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\BlogPostController::delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/redaction/post',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        'mailchimp' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\MailchimpController::newUser',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mailchimp',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\MainController::home',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'qui_sommes_nous' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\MainController::quiSommesNous',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/qui-est-meloven',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\MainController::blog',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mentions-legales' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\MainController::mentionsLegales',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mentions-legales',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'artiste' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'App\\Controller\\MainController::artiste',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/artiste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'les-artistes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\MainController::listeDesArtiste',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/les-artistes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'site_post_show' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'App\\Controller\\MainController::show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/blog/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category' => array (  0 =>   array (    0 => 'category',  ),  1 =>   array (    '_controller' => 'App\\Controller\\MainController::listPostsByCategory',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category',    ),    1 =>     array (      0 => 'text',      1 => '/blog/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\SecurityController::login',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\SecurityController::logout',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        'user_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\SecurityController::register',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        'create_post' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UsersController::createPost',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/post/create',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        'dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UsersController::userProfil',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (    0 => 'https',  ),),
        'easyadmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
