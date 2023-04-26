<?php

namespace App\Repository;

use App\Entity\Palette;
use App\Entity\TagHumeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Palette>
 *
 * @method Palette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Palette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Palette[]    findAll()
 * @method Palette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaletteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Palette::class);
    }

    public function save(Palette $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Palette $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findPaletteByHumeur($humeur): array
    {
            return $this->createQueryBuilder('p')
                ->where('h.id = :humeurId')
                ->join('p.tagHumeur', 'h')
                ->setParameter('humeurId', $humeur)
                ->getQuery()
                ->getResult()
            ;
       }
 
}
