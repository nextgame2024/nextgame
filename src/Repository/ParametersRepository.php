<?php

namespace App\Repository;

use App\Entity\Parameters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Parameters>
 */
class ParametersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Parameters::class);
    }

    public function findParameterByNumberAndLocationId(int $locationId, int $parameterId)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.location = :locationId')
            ->andWhere('d.parameter_id = :parameterId')
            ->setParameter('locationId', $locationId)
            ->setParameter('parameterId', $parameterId)
            ->getQuery()
            ->getResult();
    }
}
