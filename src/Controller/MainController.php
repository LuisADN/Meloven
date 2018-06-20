<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\BlogPost;
use App\Entity\User;
use App\Repository\BlogPostRepository;
use App\Form\PassChangeFormType;
use App\Form\PostType;
use App\Repository\FetchRepository;
use App\Services\Calculator;
use Swift_Mailer;
use Swift_Message;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class MainController extends Controller
{

    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('site/home.html.twig', [
        ]);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog(BlogPostRepository $blogPostRepository): Response
    {
        return $this->render('site/blog.html.twig', [
            /*'blog_posts' => $blogPostRepository->findAll(),*/
            'blog_posts' => $blogPostRepository->findAllOrderedByDesc(),
            'last_post' => $blogPostRepository->findBy(array(), array('id' => 'DESC')),
        ]);
    }


    /**
     * @Route("/mentions-legales", name="mentions-legales")
     */
    public function mentionsLegales(BlogPostRepository $blogPostRepository): Response
    {

        return $this->render('site/mentionslegales.html.twig');
    }


    /**
     * @Route("/blog/article/{slug}", name="site_post_show", methods="GET")
     */
    public function show(BlogPost $blogPost): Response
    {
        return $this->render('site/show.html.twig', ['blog_post' => $blogPost]);
    }

    /**
     * @Route("/blog/categorie/{category}", name="category", methods="GET")
     */
    public function listPostsByCategory(BlogPostRepository $blogPostRepository, $category): Response
    {
        return $this->render('site/category.html.twig', [
            'blog_posts' => $blogPostRepository->findBy(array(
                'category' => $category
            ))
        ]);
    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion()
    {
        return $this->render('site/connexion.html.twig', [
        ]);
    }

}
