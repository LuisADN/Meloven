<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/redaction/post')) {
            // blog_post_index
            if ('/redaction/post' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\BlogPostController::index',  '_route' => 'blog_post_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_blog_post_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'blog_post_index'));
                }

                $requiredSchemes = array (  'https' => 0,);
                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                if (!in_array($canonicalMethod, array('GET'))) {
                    if ($hasRequiredScheme) {
                        $allow = array_merge($allow, array('GET'));
                    }
                    goto not_blog_post_index;
                }
                if (!$hasRequiredScheme) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_blog_post_index;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'blog_post_index', key($requiredSchemes)));
                }

                return $ret;
            }
            not_blog_post_index:

            // blog_post_new
            if ('/redaction/post/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\BlogPostController::new',  '_route' => 'blog_post_new',);
                $requiredSchemes = array (  'https' => 0,);
                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    if ($hasRequiredScheme) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                    }
                    goto not_blog_post_new;
                }
                if (!$hasRequiredScheme) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_blog_post_new;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'blog_post_new', key($requiredSchemes)));
                }

                return $ret;
            }
            not_blog_post_new:

            // blog_post_show
            if (preg_match('#^/redaction/post/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post_show')), array (  '_controller' => 'App\\Controller\\BlogPostController::show',));
                $requiredSchemes = array (  'https' => 0,);
                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                if (!in_array($canonicalMethod, array('GET'))) {
                    if ($hasRequiredScheme) {
                        $allow = array_merge($allow, array('GET'));
                    }
                    goto not_blog_post_show;
                }
                if (!$hasRequiredScheme) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_blog_post_show;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'blog_post_show', key($requiredSchemes)));
                }

                return $ret;
            }
            not_blog_post_show:

            // blog_post_edit
            if (preg_match('#^/redaction/post/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post_edit')), array (  '_controller' => 'App\\Controller\\BlogPostController::edit',));
                $requiredSchemes = array (  'https' => 0,);
                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    if ($hasRequiredScheme) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                    }
                    goto not_blog_post_edit;
                }
                if (!$hasRequiredScheme) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_blog_post_edit;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'blog_post_edit', key($requiredSchemes)));
                }

                return $ret;
            }
            not_blog_post_edit:

            // blog_post_delete
            if (preg_match('#^/redaction/post/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post_delete')), array (  '_controller' => 'App\\Controller\\BlogPostController::delete',));
                $requiredSchemes = array (  'https' => 0,);
                $hasRequiredScheme = isset($requiredSchemes[$context->getScheme()]);
                if (!in_array($requestMethod, array('DELETE'))) {
                    if ($hasRequiredScheme) {
                        $allow = array_merge($allow, array('DELETE'));
                    }
                    goto not_blog_post_delete;
                }
                if (!$hasRequiredScheme) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_blog_post_delete;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'blog_post_delete', key($requiredSchemes)));
                }

                return $ret;
            }
            not_blog_post_delete:

        }

        // user_registration
        if ('/register' === $pathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\SecurityController::register',  '_route' => 'user_registration',);
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$context->getScheme()])) {
                if ('GET' !== $canonicalMethod) {
                    goto not_user_registration;
                }

                return array_replace($ret, $this->redirect($rawPathinfo, 'user_registration', key($requiredSchemes)));
            }

            return $ret;
        }
        not_user_registration:

        // mailchimp
        if ('/mailchimp' === $pathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\MailchimpController::newUser',  '_route' => 'mailchimp',);
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$context->getScheme()])) {
                if ('GET' !== $canonicalMethod) {
                    goto not_mailchimp;
                }

                return array_replace($ret, $this->redirect($rawPathinfo, 'mailchimp', key($requiredSchemes)));
            }

            return $ret;
        }
        not_mailchimp:

        // mentions-legales
        if ('/mentions-legales' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\MainController::mentionsLegales',  '_route' => 'mentions-legales',);
        }

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\MainController::home',  '_route' => 'home',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_home;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }
        not_home:

        // qui_sommes_nous
        if ('/qui-est-meloven' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\MainController::quiSommesNous',  '_route' => 'qui_sommes_nous',);
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // blog
            if ('/blog' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\MainController::blog',  '_route' => 'blog',);
            }

            // site_post_show
            if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'site_post_show')), array (  '_controller' => 'App\\Controller\\MainController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_site_post_show;
                }

                return $ret;
            }
            not_site_post_show:

            // category
            if (0 === strpos($pathinfo, '/blog/categorie') && preg_match('#^/blog/categorie/(?P<category>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'category')), array (  '_controller' => 'App\\Controller\\MainController::listPostsByCategory',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_category;
                }

                return $ret;
            }
            not_category:

        }

        // artiste
        if (0 === strpos($pathinfo, '/artiste') && preg_match('#^/artiste/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'artiste')), array (  '_controller' => 'App\\Controller\\MainController::artiste',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_easyadmin;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'easyadmin'));
                }

                return $ret;
            }
            not_easyadmin:

            // admin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_admin;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin'));
                }

                return $ret;
            }
            not_admin:

        }

        elseif (0 === strpos($pathinfo, '/l')) {
            // les-artistes
            if ('/les-artistes' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\MainController::listeDesArtiste',  '_route' => 'les-artistes',);
            }

            // login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'login',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_login;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'login', key($requiredSchemes)));
                }

                return $ret;
            }
            not_login:

            // logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\SecurityController::logout',  '_route' => 'logout',);
                $requiredSchemes = array (  'https' => 0,);
                if (!isset($requiredSchemes[$context->getScheme()])) {
                    if ('GET' !== $canonicalMethod) {
                        goto not_logout;
                    }

                    return array_replace($ret, $this->redirect($rawPathinfo, 'logout', key($requiredSchemes)));
                }

                return $ret;
            }
            not_logout:

        }

        // create_post
        if ('/post/create' === $pathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\UsersController::createPost',  '_route' => 'create_post',);
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$context->getScheme()])) {
                if ('GET' !== $canonicalMethod) {
                    goto not_create_post;
                }

                return array_replace($ret, $this->redirect($rawPathinfo, 'create_post', key($requiredSchemes)));
            }

            return $ret;
        }
        not_create_post:

        // dashboard
        if ('/dashboard' === $pathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\UsersController::userProfil',  '_route' => 'dashboard',);
            $requiredSchemes = array (  'https' => 0,);
            if (!isset($requiredSchemes[$context->getScheme()])) {
                if ('GET' !== $canonicalMethod) {
                    goto not_dashboard;
                }

                return array_replace($ret, $this->redirect($rawPathinfo, 'dashboard', key($requiredSchemes)));
            }

            return $ret;
        }
        not_dashboard:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
