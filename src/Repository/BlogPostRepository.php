<?php

namespace App\Repository;

use App\Entity\BlogPost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BlogPost|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlogPost|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlogPost[]    findAll()
 * @method BlogPost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogPostRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BlogPost::class);
    }

    public function findAllOrderedByDesc() {
        return $this->createQueryBuilder('b')
            ->addOrderBy('b.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findLastThree() {
        return $this->createQueryBuilder('b')
            ->addOrderBy('b.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }


    /*public function findByCategory() {
        return $this->createQueryBuilder('b')
            ->where('b.category = :category')
            ->addOrderBy('b.id', 'DESC')
            ->setParameter('category', $category)
            ->getQuery()
            ->getResult();
    }*/

//    /**
//     * @return BlogPost[] Returns an array of BlogPost objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BlogPost
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
