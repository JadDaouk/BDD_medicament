<?php

namespace App\Repository;

use App\Entity\HasLienspagectBdpm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HasLienspagectBdpm|null find($id, $lockMode = null, $lockVersion = null)
 * @method HasLienspagectBdpm|null findOneBy(array $criteria, array $orderBy = null)
 * @method HasLienspagectBdpm[]    findAll()
 * @method HasLienspagectBdpm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HasLienspagectBdpmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HasLienspagectBdpm::class);
    }

    // /**
    //  * @return HasLienspagectBdpm[] Returns an array of HasLienspagectBdpm objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HasLienspagectBdpm
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
