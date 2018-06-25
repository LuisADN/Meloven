<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\BlogPost;
use App\Entity\Event;
use App\Entity\Exhibit;
use App\Entity\Party;
use App\Entity\User;
use App\Entity\Weekend;
use App\Entity\Photo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class DataFixtures extends Fixture
{
    public function user(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');
        $user->setFirstName('Luis');
        $user->setLastName('Ramos');
        $user->setPassword('$2a$08$jHZj/wJfcVKlIwr5AvR78euJxYK7Ku5kURNhNx.7.CSIJ3Pq6LEPC');
        $user->setEmail('test@gmail.com');
        $user->setAvatar('default_avatar.jpg');
        $user->setIsAdmin(true);
        $user->setIsActive('1');

        $manager->persist($user);

        $manager->flush();


    }

    public function load(ObjectManager $manager)
    {

        $user = new User();
        $user->setUsername('admin');
        $user->setFirstName('Luis');
        $user->setLastName('Ramos');
        $user->setPassword('$2a$08$jHZj/wJfcVKlIwr5AvR78euJxYK7Ku5kURNhNx.7.CSIJ3Pq6LEPC');
        $user->setEmail('admin@gmail.com');
        $user->setAvatar('5abe3534257a4988048525.jpg');
        $user->setIsAdmin(true);
        $user->setIsActive('1');
        $user->setUserGroup('Admin');
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        $userTwo = new User();
        $userTwo->setUsername('user');
        $userTwo->setFirstName('Jessica');
        $userTwo->setLastName('Jones');
        $userTwo->setPassword('$2a$08$jHZj/wJfcVKlIwr5AvR78euJxYK7Ku5kURNhNx.7.CSIJ3Pq6LEPC');
        $userTwo->setEmail('user@gmail.com');
        $userTwo->setAvatar('5abe353d9ae8c724858723.jpg');
        $userTwo->setIsAdmin(false);
        $userTwo->setIsActive('0');
        $userTwo->setUserGroup('Musician');
        $userTwo->setUserdescription('blabla');
        $userTwo->setFacebook('https://www.facebook.com/');
        $userTwo->setYoutube('https://www.youtube.com/');
        $userTwo->setTwitter('https://twitter.com/');
        $manager->persist($userTwo);


        $userFour = new User();
        $userFour->setUsername('Electric Ghost Obsession');
        $userFour->setFirstName('Electric');
        $userFour->setLastName('Ghost Obsession');
        $userFour->setPassword('$2a$08$jHZj/wJfcVKlIwr5AvR78euJxYK7Ku5kURNhNx.7.CSIJ3Pq6LEPC');
        $userFour->setEmail('ego@gmail.com');
        $userFour->setAvatar('electric_ghost_obsession_4.jpg');
        $userFour->setIsAdmin(false);
        $userFour->setIsActive('1');
        $userFour->setUserGroup('Musician');
        $userFour->setUserdescription('Duo pop-électro français, Electric Ghost Obsession dit EGO [ˈigoʊ] se vend tel qu\'il se voit, moderne et intimiste, dans le paysage coloré de la musique d\'aujourd\'hui.
Des étiquettes?… Non… Des majorettes?… Non plus… mais des compos subtiles et alléchantes chantées avec le cœur et la raison, telles qu\'elles devraient l\'être sans que la production ne prenne le dessus sur le fond. Des chansons qu\'on peut siffler sous la douche les jours où tout va bien, les jours où tout va mal.
Débarqués de nulle part, ces jeunes gens vont faire le break. Leur pop-rock sur " laptop " est suffisamment intemporelle et dirigée que tout le monde peut comprendre au point de leur offrir un accueil à la mesure de la proposition : simple et sincère, maîtrisée de bout en bout par des musiciens dont on sent qu\'ils n\'en sont pas à leur première réalisation.
Après Daft Punk, Phoenix, Air et les autres, E.G.O est la suite du Touch of French qu\'on attend depuis un petit moment déjà. Tu as peur de quoi?… C\'est à écouter, c\'est à sentir, bref... C\'est à vivre.
');
        $userFour->setFacebook('https://www.facebook.com/egoofficiel/');
        $userFour->setTwitter('https://twitter.com/EgoOfficiel');
        $userFour->setInstagram('https://www.instagram.com/egoofficiel/');
        $manager->persist($userFour);


        $event = new Event();
        $event->setTitle('JE CHANTE DANS LA RUE');
        $event->setOrganizer('MMMprod');
        $event->setAdress('126 Rue de la croix nivert 15075 Paris');
        $event->setHour('De 17h à 21h');
        $event->setDescription('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l’imprimerie depuis les années 1500.');
        $event->setUser($userTwo);
        $event->setDate(new \DateTime('2018-02-21 11:00:00'));
        $manager->persist($event);


        $userThree = new User();
        $userThree->setUsername('justine');
        $userThree->setFirstName('Justine');
        $userThree->setLastName('Claverie');
        $userThree->setPassword('$2y$13$ySSrGKtUpBl3okPAiPC4W.YyrkPf2KqCDgdKxgyQxSNjs8A5WAL6O');
        $userThree->setEmail('justine.claverie@meloven.fr');
        $userThree->setAvatar('justine-profil.png');
        $userThree->setIsAdmin(false);
        $userThree->setIsActive('1');
        $userThree->setUserGroup('Author');
        $userThree->setRoles(['ROLE_AUTHOR']);
        $manager->persist($userThree);

        $postOne = new BlogPost($user);
        $postOne->setTitle('Seth, l’artiste poétique.');
        $postOne->setDescription('Seth, c’est Julien Malland, un parisien de 45 ans ...');
        $postOne->setBody('<p>Seth, c&rsquo;est Julien Malland, un parisien de 45 ans qui n&rsquo;a cess&eacute; d&rsquo;exprimer son art dans les rues de sa ville. Son style, c&rsquo;est un m&eacute;lange entre l&rsquo;univers de l&rsquo;enfance, de la bande dessin&eacute; et du hip-hop de sa jeunesse, le tout, dessin&eacute; avec quelques bombes de peinture.</p>');
        $postOne->setUser($userThree);
        $postOne->setSlug('seth-lartiste-poetique');
        $postOne->setCover('5b2046860123a813623505.jpg');
        $postOne->setCategory('Focus');
        $postOne->setReadingTime('2');
        $manager->persist($postOne);



        $manager->flush();
    }
}