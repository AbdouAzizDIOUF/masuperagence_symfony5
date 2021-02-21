<?php

namespace App\Repository;

use App\Entity\TesteEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TesteEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method TesteEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method TesteEntity[]    findAll()
 * @method TesteEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TesteEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TesteEntity::class);
    }

    // /**
    //  * @return TesteEntity[] Returns an array of TesteEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TesteEntity
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
