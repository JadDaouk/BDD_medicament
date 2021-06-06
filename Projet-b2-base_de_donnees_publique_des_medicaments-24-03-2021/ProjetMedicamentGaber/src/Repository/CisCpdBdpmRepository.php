<?php

namespace App\Repository;

use App\Entity\CisCpdBdpm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CisCpdBdpm|null find($id, $lockMode = null, $lockVersion = null)
 * @method CisCpdBdpm|null findOneBy(array $criteria, array $orderBy = null)
 * @method CisCpdBdpm[]    findAll()
 * @method CisCpdBdpm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CisCpdBdpmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CisCpdBdpm::class);
    }

    // /**
    //  * @return CisCpdBdpm[] Returns an array of CisCpdBdpm objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CisCpdBdpm
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
