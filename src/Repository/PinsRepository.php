<?php

namespace App\Repository;

use App\Entity\Pins;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pins|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pins|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pins[]    findAll()
 * @method Pins[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PinsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pins::class);
    }

    // /**
    //  * @return Pins[] Returns an array of Pins objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pins
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
