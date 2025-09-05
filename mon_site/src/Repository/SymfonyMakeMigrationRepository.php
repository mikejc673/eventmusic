<?php

namespace App\Repository;

use App\Entity\SymfonyMakeMigration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SymfonyMakeMigration>
 *
 * @method SymfonyMakeMigration|null find($id, $lockMode = null, $lockVersion = null)
 * @method SymfonyMakeMigration|null findOneBy(array $criteria, array $orderBy = null)
 * @method SymfonyMakeMigration[]    findAll()
 * @method SymfonyMakeMigration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SymfonyMakeMigrationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SymfonyMakeMigration::class);
    }

//    /**
//     * @return SymfonyMakeMigration[] Returns an array of SymfonyMakeMigration objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SymfonyMakeMigration
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
