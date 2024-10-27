<?php

namespace App\Repository;

use App\Entity\TableType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Table>
 */
class TableTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TableType::class);
    }

    public function findTablesByLocationId(int $locationId)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.location = :locationId')
            ->setParameter('locationId', $locationId)
            ->getQuery()
            ->getResult();
    }
}
