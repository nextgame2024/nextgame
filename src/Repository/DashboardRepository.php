<?php

namespace App\Repository;

use App\Entity\Games;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Games>
 */
class DashboardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Games::class);
    }

    /**
     * Retrieve games report by Player.
     *
     * @param int $tournamentId
     * @return Array
     */
    public function dashboardByPlayer(
        int $tournamentId,
        int $divisionId,
        int $locationId,
        ?string $searchBy = null,
        ?string $searchValue = null
    ) {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = "SELECT 
                cs.tournament_id,
                cs.player_id AS player,
                up.id AS player_name,
                up.name AS player_name,
                SUM(cs.matches_won + cs.matches_lost) AS played,
                SUM(cs.matches_won) AS matches_won,
                SUM(cs.matches_lost) AS matches_lost,
                ROUND(SUM(cs.matches_won) / (SUM(cs.matches_won) + SUM(cs.matches_lost)) * 100, 2) AS matches_won_percentage,
                SUM(cs.sets_won) AS sets_won,
                SUM(cs.sets_lost) AS sets_lost,
                ROUND(SUM(cs.sets_won) / (SUM(cs.sets_won) + SUM(cs.sets_lost)) * 100, 2) AS sets_won_percentage
            FROM (
                SELECT 
                    g.tournament_id,
                    g.player_one_id AS player_id,
                    g.games_team_one AS matches_won,
                    g.games_team_two AS matches_lost,
                    g.sets_team_one AS sets_won,
                    g.sets_team_two AS sets_lost
                FROM games g
                WHERE g.tournament_id = :tournamentId AND g.game_type = 'Singles' AND g.division_id = :divisionId AND g.location_id = :locationId
                UNION ALL
                SELECT 
                    g.tournament_id,
                    g.player_two_id AS player_id,
                    g.games_team_two AS matches_won,
                    g.games_team_one AS matches_lost,
                    g.sets_team_two AS sets_won,
                    g.sets_team_one AS sets_lost
                FROM games g
                WHERE g.tournament_id = :tournamentId AND g.game_type = 'Singles' AND g.division_id = :divisionId AND g.location_id = :locationId
            ) AS cs
            LEFT JOIN user_profile up ON CAST(cs.player_id AS SIGNED) = CAST(up.id AS SIGNED)
            GROUP BY cs.tournament_id, cs.player_id, up.name, up.id
            ORDER BY matches_won_percentage DESC, sets_won DESC";

        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('tournamentId', $tournamentId, \PDO::PARAM_INT);
        $stmt->bindValue('divisionId', $divisionId, \PDO::PARAM_INT);
        $stmt->bindValue('locationId', $locationId, \PDO::PARAM_INT);

        if ($searchBy && $searchValue) {
            $stmt->bindValue('searchValue', '%' . $searchValue . '%', \PDO::PARAM_STR);
        }

        // echo "SQL Query: " . $sql . "\n";
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Retrieve games report by Teams.
     *
     * @param int $tournamentId
     * @return Array
     */
    public function dashboardByTeams(
        int $tournamentId,
        int $divisionId,
        int $locationId,
        ?string $searchBy = null,
        ?string $searchValue = null
    ) {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = "SELECT 
                cs.tournament_id,
                cs.team_id AS team,
                COALESCE(t.name, 'Unknown') AS team_name,
                SUM(cs.matches_won + cs.matches_lost) AS played,
                SUM(cs.matches_won) AS matches_won,
                SUM(cs.matches_lost) AS matches_lost,
                ROUND(NULLIF(SUM(cs.matches_won), 0) / NULLIF(SUM(cs.matches_won) + SUM(cs.matches_lost), 0) * 100, 2) AS matches_won_percentage,
                SUM(cs.sets_won) AS sets_won,
                SUM(cs.sets_lost) AS sets_lost,
                ROUND(NULLIF(SUM(cs.sets_won), 0) / NULLIF(SUM(cs.sets_won) + SUM(cs.sets_lost), 0) * 100, 2) AS sets_won_percentage,
                SUM(cs.matches_won) * 3 AS points
            FROM (
                SELECT 
                    g.tournament_id,
                    g.team_id AS team_id,
                    g.games_team_one AS matches_won,
                    g.games_team_two AS matches_lost,
                    g.sets_team_one AS sets_won,
                    g.sets_team_two AS sets_lost
                FROM games g
                WHERE g.tournament_id = 1 AND g.game_type = 'Singles' AND g.division_id = :divisionId AND g.location_id = :locationId

                UNION ALL

                SELECT 
                    g.tournament_id,
                    g.team2_id AS team_id,
                    g.games_team_two AS matches_won,
                    g.games_team_one AS matches_lost,
                    g.sets_team_two AS sets_won,
                    g.sets_team_one AS sets_lost
                FROM games g
                WHERE g.tournament_id = :tournamentId AND g.game_type = 'Singles' AND g.division_id = :divisionId AND g.location_id = :locationId
            ) AS cs
            LEFT JOIN teams t ON cs.team_id = t.team_names_id
            GROUP BY cs.tournament_id, cs.team_id, t.name
            ORDER BY matches_won_percentage DESC, sets_won DESC";

        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('tournamentId', $tournamentId, \PDO::PARAM_INT);
        $stmt->bindValue('divisionId', $divisionId, \PDO::PARAM_INT);
        $stmt->bindValue('locationId', $locationId, \PDO::PARAM_INT);

        if ($searchBy && $searchValue) {
            $stmt->bindValue('searchValue', '%' . $searchValue . '%', \PDO::PARAM_STR);
        }

        // echo "SQL Query: " . $sql . "\n";
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Find the first tournament with a game created.
     *
     * @return Int
     */
    public function findTournamentWithFirstGameCreated(int $locationId)
    {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = 'SELECT * FROM tournament WHERE status = \'Games created\' AND location_id = :locationId  LIMIT 1';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue('locationId', $locationId, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchColumn();
        // return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Find the first division with a game created.
     *
     * @return Int
     */
    public function findDivisionWithFirstGameCreated(int $locationId)
    {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = 'SELECT 
                g.division_id
                FROM tournament t
                JOIN games g ON t.location_id = g.location_id
                WHERE t.status = \'Games created\'
                AND g.location_id = :locationId LIMIT 1';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue('locationId', $locationId, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchColumn();
        // return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Find active tournaments.
     *
     * @return array
     */
    public function findActiveTournaments(int $locationId,)
    {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = 'SELECT 
                DISTINCT tt.id,
                tt.name AS tournament_name,
                up.division_id,
                d.name AS division_name
                FROM user_profile up
                JOIN divisions d ON up.division_id = d.id
                JOIN tournament_registration tr ON tr.id = up.user_id
                JOIN tournament t ON t.tournament_type_id = tr.torneo_id
                JOIN tournament_type tt ON tt.id = tr.torneo_id
                WHERE up.location_id = :locationId
                AND t.status NOT IN (\'Open\', \'Deleted\')';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue('locationId', $locationId, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}