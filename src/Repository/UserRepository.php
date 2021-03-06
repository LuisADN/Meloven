<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements UserLoaderInterface
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function loadUserByUsername($username)
    {
        try {
            return $this->createQueryBuilder('u')
                ->where('u.username = :username OR u.email = :email')
                ->setParameter('username', $username)
                ->setParameter('email', $username)
                ->getQuery()
                ->getOneOrNullResult();
        } catch (NonUniqueResultException $e) {
            return $e;
        }
    }

    public function findAllMusicians($slug) {
        return $this->createQueryBuilder('b')
            ->where('b.userGroup = :user_group AND b.slug = :slug')
            ->setParameter('user_group', 'Musician')
            ->setParameter('slug', $slug)
            ->getQuery()
            ->getResult();
    }

    public function findMusiciansHome() {
        return $this->createQueryBuilder('b')
            ->where('b.userGroup = :user_group')
            ->setParameter('user_group', 'Musician')
            ->getQuery()
            ->getResult();
    }
}
