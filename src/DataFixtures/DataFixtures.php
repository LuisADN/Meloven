<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\BlogPost;
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
        $userTwo->setUserGroup('Mucicien');
        $manager->persist($userTwo);

        /*$firstAuthor = new Author();
        $firstAuthor->setShortBio('Just sometext');
        $firstAuthor->setCompany('some Company');
        $firstAuthor->setFacebook('facebook link');
        $firstAuthor->setGithub('github link');
        $firstAuthor->setTwitter('twitter link');
        $firstAuthor->setPhone('09876543333477');
        $manager->persist($firstAuthor);*/



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

       /* $postOne = new BlogPost($user);
        $postOne->setTitle('Post numero 1 !');
        $postOne->setDescription('Description du post 1');
        $postOne->setBody('Body du post 1');
        $postOne->setUser($userThree);
        $postOne->setSlug('post-one');
        $postOne->setCover('test.png');
        $postOne->setCategory('Insolite');
        $postOne->setReadingTime('2');
        $manager->persist($postOne);*/



        $manager->flush();
    }
}