<?php

namespace App\Repository;

use App\Entity\GalleryImage;
use App\Entity\RubricInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RubricInfo>
 */
class RubricInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RubricInfo::class);
    }

    public function isUsed(GalleryImage $image): bool
    {
        return $this->findOneBy([
            'galleryImage' => $image,
        ]) !== null;
    }

    public function imageAlreadyUsed(
        GalleryImage $image,
        ?int $currentRubricId = null
    ): bool {
        $qb = $this->createQueryBuilder('r')
            ->andWhere('r.GalleryImage = :image')
            ->setParameter('image', $image);

        if ($currentRubricId !== null) {
            $qb->andWhere('r.id != :id')
                ->setParameter('id', $currentRubricId);
        }

        return $qb->select('COUNT(r.id)')
            ->getQuery()
            ->getSingleScalarResult() > 0;
    }

    //    /**
    //     * @return RubricInfo[] Returns an array of RubricInfo objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?RubricInfo
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
