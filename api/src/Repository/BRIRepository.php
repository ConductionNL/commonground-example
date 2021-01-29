<?php

namespace App\Repository;

use App\Entity\BRI;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BRI|null find($id, $lockMode = null, $lockVersion = null)
 * @method BRI|null findOneBy(array $criteria, array $orderBy = null)
 * @method BRI[]    findAll()
 * @method BRI[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BRIRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BRI::class);
    }

    // /**
    //  * @return BRI[] Returns an array of BRI objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BRI
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
