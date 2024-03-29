<?php

namespace App\Repository;

use App\Entity\Giocatori;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Giocatori>
 *
 * @method Giocatori|null find($id, $lockMode = null, $lockVersion = null)
 * @method Giocatori|null findOneBy(array $criteria, array $orderBy = null)
 * @method Giocatori[]    findAll()
 * @method Giocatori[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GiocatoriRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Giocatori::class);
    }

//    /**
//     * @return Giocatori[] Returns an array of Giocatori objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Giocatori
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
