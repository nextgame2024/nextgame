<?php

namespace App\Repository;

use App\Entity\Table;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Table>
 */
class TableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Table::class);
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
