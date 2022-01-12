<?php

namespace App\Repository;

use App\Entity\Conceptos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Conceptos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Conceptos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Conceptos[]    findAll()
 * @method Conceptos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConceptosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Conceptos::class);
    }

    // /**
    //  * @return Conceptos[] Returns an array of Conceptos objects
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
    public function findOneBySomeField($value): ?Conceptos
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
