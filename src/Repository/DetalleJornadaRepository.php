<?php

namespace App\Repository;

use App\Entity\DetalleJornada;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DetalleJornada|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetalleJornada|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetalleJornada[]    findAll()
 * @method DetalleJornada[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetalleJornadaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetalleJornada::class);
    }

    // /**
    //  * @return DetalleJornada[] Returns an array of DetalleJornada objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DetalleJornada
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
