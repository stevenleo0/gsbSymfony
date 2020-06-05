<?php

namespace App\Repository;

use App\Entity\CoefConfiance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CoefConfiance|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoefConfiance|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoefConfiance[]    findAll()
 * @method CoefConfiance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoefConfianceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CoefConfiance::class);
    }

    // /**
    //  * @return CoefConfiance[] Returns an array of CoefConfiance objects
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
    public function findOneBySomeField($value): ?CoefConfiance
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
