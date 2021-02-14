<?php

namespace App\Repository;

use App\Entity\Evenent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Evenent|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evenent|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evenent[]    findAll()
 * @method Evenent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenent::class);
    }

    // /**
    //  * @return Evenent[] Returns an array of Evenent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Evenent
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
