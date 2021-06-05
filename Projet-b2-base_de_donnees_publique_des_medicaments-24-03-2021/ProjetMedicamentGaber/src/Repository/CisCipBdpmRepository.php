<?php

namespace App\Repository;

use App\Entity\CisCipBdpm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CisCipBdpm|null find($id, $lockMode = null, $lockVersion = null)
 * @method CisCipBdpm|null findOneBy(array $criteria, array $orderBy = null)
 * @method CisCipBdpm[]    findAll()
 * @method CisCipBdpm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CisCipBdpmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CisCipBdpm::class);
    }

    // /**
    //  * @return CisCipBdpm[] Returns an array of CisCipBdpm objects
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
    public function findOneBySomeField($value): ?CisCipBdpm
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
