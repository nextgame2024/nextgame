<?php

namespace App\Repository;

use App\Entity\Teams;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Teams>
 */
class TeamsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Teams::class);
    }

    public function findTeamByUserTorneoId(int $tournamentId, int $divId): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT t.id, t.name
        FROM teams t
        WHERE t.torneo_id = :tournamentId AND t.division_id = :divId';

        $stmt = $conn->executeQuery($sql, [
            'tournamentId' => $tournamentId,
            'divId' => $divId,
        ]);

        return $stmt->fetchAllAssociative();
    }
}
