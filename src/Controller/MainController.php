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
     * @Route("/", name="home", methods="GET")
     */
    public function home(BlogPostRepository $blogPostRepository): Response
    {

        return $this->render('site/home.html.twig', [
            /*'blog_posts' => $blogPostRepository->findAll(),*/
            'blog_posts' => $blogPostRepository->findAllOrderedByDesc(),
            'last_post' => $blogPostRepository->findBy(array(), array('id' => 'DESC'))
        ]);
    }

    /**
     * @Route("/article/{id}", name="blog_post_show", methods="GET")
     */
    public function show(BlogPost $blogPost): Response
    {
        return $this->render('site/show.html.twig', ['blog_post' => $blogPost]);
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
