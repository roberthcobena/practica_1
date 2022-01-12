<?php

namespace App\Repository;

use App\Entity\CabeceraDetalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CabeceraDetalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method CabeceraDetalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method CabeceraDetalle[]    findAll()
 * @method CabeceraDetalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CabeceraDetalleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CabeceraDetalle::class);
    }

    // /**
    //  * @return CabeceraDetalle[] Returns an array of CabeceraDetalle objects
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
    public function findOneBySomeField($value): ?CabeceraDetalle
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
