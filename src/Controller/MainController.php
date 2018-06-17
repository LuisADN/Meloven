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
        /*$form = $this->createFormBuilder()
            ->add('email', EmailType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        $form->handleRequest($request);*/

        /*if ($form->isSubmitted() && $form->isValid()) {

            $task = $form->getData();
            $email = $task['email'];

            // MailChimp API credentials
            $apiKey = '183861b43ecee8bd7a2b32c963d6e517-us18';
            $listID = '76c0a7833d';

            // MailChimp API URL
            $memberID = md5(strtolower($email));
            $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
            $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;

            // member information
            $json = json_encode([
                'email_address' => $email,
                'status'        => 'subscribed'
            ]);

            // send a HTTP POST request with curl
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            $result = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            return $this->redirectToRoute('home', ['_fragment' => 'newsletter']);
        }*/

        return $this->render('site/blog.html.twig', [
            /*'blog_posts' => $blogPostRepository->findAll(),*/
            'blog_posts' => $blogPostRepository->findAllOrderedByDesc(),
            'last_post' => $blogPostRepository->findBy(array(), array('id' => 'DESC')),
            /*'form' => $form->createView(),*/
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
