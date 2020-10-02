<?php

namespace App\Repository;

use App\Entity\Profesori;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Profesori|null find($id, $lockMode = null, $lockVersion = null)
 * @method Profesori|null findOneBy(array $criteria, array $orderBy = null)
 * @method Profesori[]    findAll()
 * @method Profesori[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfesoriRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Profesori::class);
    }

    // /**
    //  * @return Profesori[] Returns an array of Profesori objects
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
    public function findOneBySomeField($value): ?Profesori
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
