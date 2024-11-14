<?php

namespace App\Repository;

use App\Entity\Directors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Directors>
 */
class DirectorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Directors::class);
    }

    public function findDirectorByIdAndLocationId(int $locationId, string $directorId)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.location = :locationId')
            ->andWhere('d.director_id = :directorId')
            ->setParameter('locationId', $locationId)
            ->setParameter('directorId', $directorId)
            ->getQuery()
            ->getResult();
    }
}
