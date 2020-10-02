<?php

namespace App\Repository;

use App\Entity\Elevi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Elevi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Elevi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Elevi[]    findAll()
 * @method Elevi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EleviRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Elevi::class);
    }

    // /**
    //  * @return Elevi[] Returns an array of Elevi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Elevi
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
