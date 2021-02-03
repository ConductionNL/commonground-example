<?php

namespace App\Repository;

use App\Entity\BriResource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BriResource|null find($id, $lockMode = null, $lockVersion = null)
 * @method BriResource|null findOneBy(array $criteria, array $orderBy = null)
 * @method BriResource[]    findAll()
 * @method BriResource[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
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
