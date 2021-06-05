<?php

namespace App\Repository;

use App\Entity\CisInfoimportantesAaaammjjhhmissBdpm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CisInfoimportantesAaaammjjhhmissBdpm|null find($id, $lockMode = null, $lockVersion = null)
 * @method CisInfoimportantesAaaammjjhhmissBdpm|null findOneBy(array $criteria, array $orderBy = null)
 * @method CisInfoimportantesAaaammjjhhmissBdpm[]    findAll()
 * @method CisInfoimportantesAaaammjjhhmissBdpm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CisInfoimportantesAaaammjjhhmissBdpmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CisInfoimportantesAaaammjjhhmissBdpm::class);
    }

    // /**
    //  * @return CisInfoimportantesAaaammjjhhmissBdpm[] Returns an array of CisInfoimportantesAaaammjjhhmissBdpm objects
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
    public function findOneBySomeField($value): ?CisInfoimportantesAaaammjjhhmissBdpm
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
