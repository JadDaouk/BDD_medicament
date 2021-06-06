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
        SELECT YEAR(dateAvisCimmissionTransparence) year, COUNT(*) number 
        FROM CIS_HAS
        GROUP BY YEAR(dateAvisCimmissionTransparence) ORDER BY YEAR(dateAvisCimmissionTransparence) DESC;
        ";
        $stmt = $conn->prepare($sql);

        return $stmt->executeQuery()->fetchAllAssociative();
    }
}
