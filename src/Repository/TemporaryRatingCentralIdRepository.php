<?php

namespace App\Repository;

use App\Entity\TemporaryRatingCentralId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TemporaryRatingCentralId>
 */
class TemporaryRatingCentralIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TemporaryRatingCentralId::class);
    }

    public function findMaxTemporaryIdByLocation(int $locationId)
    {
        return $this->createQueryBuilder('t')
            ->select('COALESCE(MAX(t.temporary_id), 1) AS maxTemporaryId')
            ->where('t.location = :locationId')
            ->setParameter('locationId', $locationId)
            ->getQuery()
            ->getSingleScalarResult();
    }
}
