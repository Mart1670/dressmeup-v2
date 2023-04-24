<?php

namespace App\Repository;

use App\Entity\Vetement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Vetement>
 *
 * @method Vetement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vetement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vetement[]    findAll()
 * @method Vetement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VetementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vetement::class);
    }

    public function save(Vetement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Vetement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findDressingContent($userId, $type): array
{
        return $this->createQueryBuilder('r')
            ->andWhere('r.user = :id AND r.type = :type')
            //->andWhere('r.min<= :val AND r.max >= :val')
            ->setParameter('id', $userId)
            ->setParameter('type', $type)
            ->getQuery()
            ->getResult()
        ;
   }

   public function filterDressingContent($userId, $type, $style): array
{
        return $this->createQueryBuilder('r')
            ->andWhere('r.user = :id AND r.type = :type AND r.style = :style')
            //->andWhere('r.min<= :val AND r.max >= :val')
            ->setParameter('id', $userId)
            ->setParameter('type', $type)
            ->setParameter('style', $style)
            ->getQuery()
            ->getResult()
        ;
   }


//**
//     * @return Vetement[] Returns an array of Vetement objects
//     */
//    public function findByType($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.type = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    /**
//     * @return Vetement[] Returns an array of Vetement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Vetement
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
