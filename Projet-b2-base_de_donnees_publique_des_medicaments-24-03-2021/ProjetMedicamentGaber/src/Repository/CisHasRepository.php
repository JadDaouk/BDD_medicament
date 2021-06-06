<?php

namespace App\Repository;

use App\Entity\CisHas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CisHas|null find($id, $lockMode = null, $lockVersion = null)
 * @method CisHas|null findOneBy(array $criteria, array $orderBy = null)
 * @method CisHas[]    findAll()
 * @method CisHas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CisHasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CisHas::class);
    }

    // /**
    //  * @return CisHas[] Returns an array of CisHas objects
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
    public function findOneBySomeField($value): ?CisHas
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function FindASMRSuggestNumberByYear() : array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "
        SELECT YEAR(dateAvisCommissionTransparence) year, COUNT(*) number 
        FROM CIS_HAS
        GROUP BY YEAR(dateAvisCommissionTransparence)
        ORDER BY YEAR(dateAvisCommissionTransparence) DESC;
        ";
        $stmt = $conn->prepare($sql);

        return $stmt->executeQuery()->fetchAllAssociative();
    }

    public function FindSMRSuggestNumber()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "
        SELECT COUNT(*) FROM cis_has where valeur not like 'insuffisant' AND ASMR_SMR = 'SMR';";
        $stmt = $conn->prepare($sql);

        return $stmt->executeQuery()->fetchOne();
    }

    public function FindASMRSuggestNumberLevelV()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "
        SELECT COUNT(*) FROM cis_has where valeur = 'V' AND ASMR_SMR = 'ASMR';";
        $stmt = $conn->prepare($sql);

        return $stmt->executeQuery()->fetchOne();
    }


}
