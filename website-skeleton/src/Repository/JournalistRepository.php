<?php

namespace App\Repository;

use App\Entity\Journalist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Journalist|null find($id, $lockMode = null, $lockVersion = null)
 * @method Journalist|null findOneBy(array $criteria, array $orderBy = null)
 * @method Journalist[]    findAll()
 * @method Journalist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JournalistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Journalist::class);
    }

    // /**
    //  * @return Journalist[] Returns an array of Journalist objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Journalist
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
