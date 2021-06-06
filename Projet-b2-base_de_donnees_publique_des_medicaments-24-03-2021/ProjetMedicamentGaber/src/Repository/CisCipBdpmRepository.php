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

    public function FindAvgPriceByRefundPercent() : array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "
        SELECT tauxRemboursement TAUX_REMBOURSEMENT, AVG(prixMedicament2) PRIX_MOYEN_MEDICAMENT FROM CIS_CIP_BDPM GROUP BY CIS_CIP_bdpm.tauxRemboursement HAVING AVG(prixMedicament2) IS NOT NULL ORDER BY CIS_CIP_bdpm.tauxRemboursement DESC;
        ";
        $stmt = $conn->prepare($sql);

        return $stmt->executeQuery()->fetchAllAssociative();
    }

    public function FindNumberByRefundPercent() : array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "        
        SELECT tauxRemboursement, COUNT(*) number FROM CIS_CIP_bdpm GROUP BY tauxRemboursement ORDER BY tauxRemboursement DESC ;
        ";
        $stmt = $conn->prepare($sql);

        return $stmt->executeQuery()->fetchAllAssociative();
    }

}
