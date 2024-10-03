<?php

namespace App\Repository;

use App\Entity\Tournament;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tournament>
 */
class TournamentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tournament::class);
    }

    public function findTournamentById(int $tournamentId)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.id = :tournamentId')
            ->setParameter('tournamentId', $tournamentId)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Retrieve tournaments with pagination and sorting.
     *
     * @param int $locationId
     * @param int $offset
     * @param int $limit
     * @param string $sortBy
     * @param string $order
     * @param string $searchBy
     * @param string $searchValue
     * @return Paginator
     */
    public function findByTournament(
        int $locationId,
        int $limit = 10,
        int $offset = 0,
        string $sortBy = 'tt.id',
        string $order = 'DESC',
        ?string $searchBy = null,
        ?string $searchValue = null
    ) {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = 'SELECT  
            t.id,
            t.start_day,
            t.end_day,
            t.number_of_tables,
            t.status,
            t.location_id, 
            t.hour,
            t.players,
            tt.name AS tournament_type,
            l.name AS location
        FROM tournament t
        JOIN tournament_type tt ON t.tournament_type_id = tt.id
        JOIN location l ON t.location_id = l.id
        WHERE t.location_id = :locationId
        AND t.status != "Deleted"';

        // Append search conditions based on the searchBy parameter
        if ($searchBy && $searchValue) {
            switch ($searchBy) {
                case 'tournament_type':
                    $sql .= ' AND tt.name LIKE :searchValue';
                    break;
                case 't.start_day':
                    $sql .= ' AND t.start_day LIKE :searchValue';
                    break;
                case 't.end_day':
                    $sql .= ' AND t.end_day LIKE :searchValue';
                    break;
                case 't.status':
                    $sql .= ' AND t.status LIKE :searchValue';
                    break;
                default:
                    throw new \InvalidArgumentException('Invalid search criteria');
            }
        }

        // Proper placement of GROUP BY clause
        $sql .= ' GROUP BY t.id, t.start_day, t.end_day, t.number_of_tables, t.status, t.location_id, t.hour, tt.name, l.name';

        // Append ordering and limits
        $sql .= ' ORDER BY ' . $sortBy . ' ' . $order . ' 
                  LIMIT :limit OFFSET :offset';

        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('locationId', $locationId, \PDO::PARAM_INT);
        $stmt->bindValue('limit', $limit, \PDO::PARAM_INT);
        $stmt->bindValue('offset', $offset, \PDO::PARAM_INT);

        if ($searchBy && $searchValue) {
            $stmt->bindValue('searchValue', '%' . $searchValue . '%', \PDO::PARAM_STR);
        }

        // Execute and return results
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function countByTournament(
        int $locationId,
        ?string $searchBy = null,
        ?string $searchValue = null
    ) {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = 'SELECT COUNT(*) 
                FROM tournament t';

        // Check if we need to join tournament_type based on the searchBy parameter
        if ($searchBy === 'tournament_type') {
            $sql .= ' JOIN tournament_type tt ON t.tournament_type_id = tt.id';
        }

        $sql .= ' WHERE t.location_id = :locationId AND t.status != "Deleted"';

        // Append search conditions based on the searchBy parameter
        if ($searchBy && $searchValue) {
            switch ($searchBy) {
                case 'tournament_type':
                    $sql .= ' AND tt.name LIKE :searchValue';
                    break;
                case 't.start_day':
                    $sql .= ' AND t.start_day LIKE :searchValue';
                    break;
                case 't.end_day':
                    $sql .= ' AND t.end_day LIKE :searchValue';
                    break;
                case 't.status':
                    $sql .= ' AND t.status LIKE :searchValue';
                    break;
                default:
                    throw new \InvalidArgumentException('Invalid search criteria');
            }
        }

        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('locationId', $locationId, \PDO::PARAM_INT);

        if ($searchBy && $searchValue) {
            $stmt->bindValue('searchValue', '%' . $searchValue . '%', \PDO::PARAM_STR);
        }

        // echo "SQL Query: " . $sql . "\n";
        $stmt->execute();

        return $stmt->fetchColumn();
    }
}
