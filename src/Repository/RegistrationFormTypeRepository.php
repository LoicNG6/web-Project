<?php

namespace App\Repository;

use App\Entity\RegistrationFormType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RegistrationFormType|null find($id, $lockMode = null, $lockVersion = null)
 * @method RegistrationFormType|null findOneBy(array $criteria, array $orderBy = null)
 * @method RegistrationFormType[]    findAll()
 * @method RegistrationFormType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegistrationFormTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RegistrationFormType::class);
    }

    // /**
    //  * @return RegistrationFormType[] Returns an array of RegistrationFormType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RegistrationFormType
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
