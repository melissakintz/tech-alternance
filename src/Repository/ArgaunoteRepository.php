<?php

namespace App\Repository;

use App\Entity\Argaunote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Argaunote|null find($id, $lockMode = null, $lockVersion = null)
 * @method Argaunote|null findOneBy(array $criteria, array $orderBy = null)
 * @method Argaunote[]    findAll()
 * @method Argaunote[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArgaunoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Argaunote::class);
    }

    // /**
    //  * @return Argaunote[] Returns an array of Argaunote objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Argaunote
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
