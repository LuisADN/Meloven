<?php

namespace App\Controller;

use App\Entity\Author;
use App\Entity\BlogPost;
use App\Form\UserFormType;
use App\Repository\UserRepository;
use App\Services\Concatenate;
use DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{

    /**
     * @Route("/post/create", name="create_post")
     */
    public function createPost(Request $request)
    {
        return $this->render('site/createPost.html.twig', [
        ]);
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function userProfil(Request $request)
    {
        // Check is a user is logged in
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        // Set the user
        $user = $this->getUser();

        // user form update
        $form = $this->createForm(UserFormType::class, $user);

        // $author = $user->getAuthor();
        // $posts = $author->getBlogPost();

        // handles data from POST requests
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $theUser = $form->getData();

                $em = $this->getDoctrine()->getManager();

                // Petit hack pour mettre à jour la photo de profil sans modifier un autre champs
                // dégueux mais j'ai pas mieux
                $user->setUpdatedAt(new \DateTime());

                $em->persist($theUser);
                $em->flush();

            } else {
                return array(
                    'data' => 'prout'
                );
            }
        }



        return $this->render('site/profil.html.twig', [
            'controller_name' => 'UsersController',
            'userForm' => $form->createView(),
            'today' => new DateTime(),
        ]);
    }
}
