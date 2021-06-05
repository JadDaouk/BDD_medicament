<?php

namespace App\Repository;

use App\Entity\CisBdpm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CisBdpm|null find($id, $lockMode = null, $lockVersion = null)
 * @method CisBdpm|null findOneBy(array $criteria, array $orderBy = null)
 * @method CisBdpm[]    findAll()
 * @method CisBdpm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CisBdpmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CisBdpm::class);
    }

    // /**
    //  * @return CisBdpm[] Returns an array of CisBdpm objects
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
    public function findOneBySomeField($value): ?CisBdpm
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function FindCommercializedDrugsNumber()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "
        SELECT COUNT(*) FROM cis_bdpm WHERE cis_bdpm.etatCommercialisation LIKE 'Commercialis%';
        ";
        $stmt = $conn->prepare($sql);

        return $stmt->executeQuery()->fetchOne();
    }

    public function FindCommercializedAndReinforcedSurveillanceDrugsNumber()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "
        SELECT COUNT(*) FROM cis_bdpm WHERE cis_bdpm.etatCommercialisation LIKE 'Commercialis%' AND cis_bdpm.SurveillanceRenforcée LIKE '1';
        ";
        $stmt = $conn->prepare($sql);

        return $stmt->executeQuery()->fetchOne();
    }

}
