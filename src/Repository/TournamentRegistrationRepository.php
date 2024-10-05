<?php

namespace App\Repository;

use PDO;
use Doctrine\ORM\QueryBuilder;
use App\Entity\TournamentRegistration;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<TournamentRegistration>
 */
class TournamentRegistrationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TournamentRegistration::class);
    }


    /**
     * Retrieve tournament registrations with pagination and sorting.
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
    public function findByTournamentRegistration(
        int $locationId,
        int $limit = 10,
        int $offset = 0,
        string $sortBy = 'team_name',
        string $order = 'ASC',
        ?string $searchBy = null,
        ?string $searchValue = null
    ) {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = 'SELECT tr.id AS tournament_registration_id, 
            t.id AS tournament_id, t.start_day, t.end_day, 
            t.number_of_tables, t.status, t.location_id, 
            t.hour, tt.name AS tournament_type, tr.status AS tournament_status, 
            u.user_id, u.name, u.phone, u.rating, d.id AS div_id,
            d.name AS division, l.name AS location, te.id AS team_id,
            te.name AS team_name
            FROM tournament_registration tr
            JOIN tournament t ON tr.torneo_id = t.id
            JOIN tournament_type tt ON t.tournament_type_id = tt.id
            JOIN user_profile u ON tr.user_profile_id = u.id
            JOIN divisions d ON u.division_id = d.id
            JOIN location l ON tr.location_id = l.id
            JOIN teams te ON tr.team_id = te.id
            WHERE tr.location_id = :locationId AND t.status = \'Open\'';

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
                case 'tt.name':
                    $sql .= ' AND tt.name LIKE :searchValue';
                    break;
                case 'u.rating':
                    $sql .= ' AND u.rating LIKE :searchValue';
                    break;
                case 'u.name':
                    $sql .= ' AND u.name LIKE :searchValue';
                    break;
                case 'd.name':
                    $sql .= ' AND d.name LIKE :searchValue';
                    break;
                case 'tr.status':
                    $sql .= ' AND tr.status LIKE :searchValue';
                    break;
                default:
                    throw new \InvalidArgumentException('Invalid search criteria');
            }
        }

        // Append ordering and limits
        $sql .= ' ORDER BY d.name ASC, ' . $sortBy . ' ' . $order . ' 
            LIMIT :limit OFFSET :offset';

        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('locationId', $locationId, \PDO::PARAM_INT);
        $stmt->bindValue('limit', $limit, \PDO::PARAM_INT);
        $stmt->bindValue('offset', $offset, \PDO::PARAM_INT);

        if ($searchBy && $searchValue) {
            $stmt->bindValue('searchValue', '%' . $searchValue . '%', \PDO::PARAM_STR);
        }

        // echo "SQL Query: " . $sql . "\n";
        // Execute and return results
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function countByTournamentRegistration(
        int $locationId,
        int $limit = 10,
        int $offset = 0,
        string $sortBy = 'tournament_status',
        string $order = 'DESC',
        ?string $searchBy = null,
        ?string $searchValue = null
    ) {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        // Start building the SQL query
        $sql = 'SELECT COUNT(*)
            FROM tournament_registration tr
            JOIN tournament t ON tr.torneo_id = t.id
            JOIN tournament_type tt ON t.tournament_type_id = tt.id
            JOIN user_profile u ON tr.user_profile_id = u.id
            JOIN divisions d ON u.division_id = d.id
            JOIN location l ON tr.location_id = l.id
            WHERE tr.location_id = :locationId AND t.status = \'Open\'';

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
                case 'tt.name':
                    $sql .= ' AND tt.name LIKE :searchValue';
                    break;
                case 'u.rating':
                    $sql .= ' AND u.rating LIKE :searchValue';
                    break;
                case 'u.name':
                    $sql .= ' AND u.name LIKE :searchValue';
                    break;
                case 'd.name':
                    $sql .= ' AND d.name LIKE :searchValue';
                    break;
                case 'tr.status':
                    $sql .= ' AND tr.status LIKE :searchValue';
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

    public function findByUserProfileId(int $userProfileId, int $tournamentId)
    {
        $currentStatus = 'Registered';
        $qb = $this->createQueryBuilder('tr')
            ->where('tr.user_profile = :userProfileId')
            ->andWhere('tr.torneo = :tournamentId')
            ->andWhere('tr.status = :currentStatus')
            ->setParameter('userProfileId', $userProfileId)
            ->setParameter('tournamentId', $tournamentId)
            ->setParameter('currentStatus', $currentStatus);

        return $qb->getQuery()->getResult();
    }

    public function findTeamByTorneoIdAndDivisionId(
        int $tournamentId,
        int $divisionId,
        int $numberOfPlayers = 0
    ) {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();
        $currentStatus = 'Registered';

        $sql = 'SELECT 
                CASE 
                    -- Case 1: If there are no records for the given torneo_id and division_id in the teams table,
                    -- select a new team name from teams_names.
                    WHEN NOT EXISTS (
                        SELECT 1 
                        FROM teams 
                        WHERE torneo_id = :tournamentId AND division_id = :divisionId
                    ) THEN (
                        SELECT tn.id 
                        FROM teams_names tn
                        WHERE tn.id NOT IN (SELECT t.team_names_id FROM teams t)
                        LIMIT 1
                    )

                    -- Case 2: If there are teams with the given torneo_id and division_id, check 
                    -- tournament_registration to see if the count of players per team is less 
                    -- than number_of_players (2). If so, return that team_id.
                    WHEN (
                        SELECT COUNT(*) 
                        FROM tournament_registration tr
                        WHERE tr.torneo_id = :tournamentId
                        AND tr.status = :currentStatus
                        AND tr.team_id IN (
                            SELECT t.id 
                            FROM teams t
                            WHERE t.torneo_id = :tournamentId
                            AND t.division_id = :divisionId
                        )
                        GROUP BY tr.team_id
                        HAVING COUNT(tr.team_id) < :numberOfPlayers
                    ) THEN (
                        SELECT t.id 
                        FROM teams t
                        WHERE t.torneo_id = :tournamentId 
                        AND t.division_id = :divisionId
                        AND t.id IN (
                            SELECT tr.team_id
                            FROM tournament_registration tr
                            WHERE tr.torneo_id = :tournamentId 
                            GROUP BY tr.team_id
                            HAVING COUNT(tr.team_id) < :numberOfPlayers
                        )
                        LIMIT 1
                    )

                    -- Case 3: If all teams have enough players, select a new team name from teams_names.
                    ELSE (
                        SELECT tn.id 
                        FROM teams_names tn
                        WHERE tn.id NOT IN (SELECT t.team_names_id FROM teams t)
                        LIMIT 1
                    )
                END AS team_id;
            ';


        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('tournamentId', $tournamentId, \PDO::PARAM_INT);
        $stmt->bindValue('divisionId', $divisionId, \PDO::PARAM_INT);
        $stmt->bindValue('numberOfPlayers', $numberOfPlayers, \PDO::PARAM_INT);
        $stmt->bindValue('currentStatus', $currentStatus, \PDO::PARAM_INT);

        // echo "SQL Query: " . $sql . "\n";
        $stmt->execute();

        return $stmt->fetchColumn();
    }

    public function validateTeamConformation(int $tournamentId, int $tournamentType)
    {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = <<<SQL
                WITH registration_count AS (
                    SELECT COUNT(*) AS reg_count
                    FROM tournament_registration
                    WHERE torneo_id = :tournamentId
                ),
                tournament_data AS (
                    SELECT number_of_tables, players
                    FROM tournament
                    WHERE tournament_type_id = :tournamentType
                ),
                team_validation AS (
                    SELECT COUNT(DISTINCT team_id) AS unique_teams
                    FROM tournament_registration
                    WHERE torneo_id = :tournamentId
                ),
                team_count_validation AS (
                    SELECT team_id, COUNT(*) AS team_count
                    FROM tournament_registration
                    WHERE torneo_id = :tournamentId
                    GROUP BY team_id
                ),
                team_by_division AS (
                    SELECT up.division_id, COUNT(DISTINCT tr.team_id) AS team_count_by_division
                    FROM tournament_registration tr
                    JOIN user_profile up ON tr.user_profile_id = up.id
                    WHERE tr.torneo_id = :tournamentId
                    GROUP BY up.division_id
                )
                SELECT 
                    CASE
                        WHEN (SELECT reg_count FROM registration_count) % (SELECT players FROM tournament_data) != 0 THEN 'false'
                        WHEN (SELECT unique_teams FROM team_validation) < 2 THEN 'false'
                        WHEN EXISTS (
                            SELECT 1
                            FROM team_count_validation tcv, tournament_data td
                            WHERE tcv.team_count != td.players
                        ) THEN 'false'
                        WHEN EXISTS (
                            SELECT 1
                            FROM team_by_division
                            WHERE team_count_by_division % 2 != 0
                        ) THEN 'false'
                        ELSE 'true'
                    END AS result;
                SQL;

        $stmt = $conn->prepare($sql);
        $stmt->bindValue('tournamentId', $tournamentId, \PDO::PARAM_INT);
        $stmt->bindValue('tournamentType', $tournamentType, \PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchColumn();
    }

    public function getGamesByTournamentTypeAndDivision(int $tournamentId)
    {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = <<<SQL
                WITH team_data AS (
                    SELECT 
                        tr.torneo_id AS tournament_id,
                        tr.team_id,
                        tr.user_profile_id,
                        up.division_id,
                        tr.location_id
                    FROM 
                        tournament_registration tr
                    JOIN 
                        user_profile up ON tr.user_profile_id = up.id
                    WHERE 
                        tr.torneo_id = :tournamentId
                    ORDER BY 
                        tr.torneo_id, 
                        up.division_id, 
                        tr.team_id
                )
                SELECT 
                    td1.tournament_id,
                    td1.team_id AS team_id_1,
                    td2.team_id AS team_id_2,
                    td1.user_profile_id AS user_profile_id_team_1,
                    td2.user_profile_id AS user_profile_id_team_2,
                    'Singles' AS game_type,
                    'Pending' AS status,
                    td1.division_id,
                    td1.location_id
                FROM 
                    team_data td1
                JOIN 
                    team_data td2 ON td1.division_id = td2.division_id
                    AND td1.team_id < td2.team_id
                ORDER BY 
                    td1.division_id, td1.team_id, td2.team_id, td1.user_profile_id, td2.user_profile_id;
                SQL;

        $stmt = $conn->prepare($sql);
        $stmt->bindValue('tournamentId', $tournamentId, \PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getNumberOfTeamsAndDivision(int $tournamentId, int $locationId)
    {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = 'SELECT 
                COUNT(DISTINCT tr.team_id) AS numberOfTeams,
                up.division_id AS divisionId
            FROM 
                tournament_registration tr
            JOIN 
                user_profile up ON tr.user_profile_id = up.id
            WHERE 
                tr.location_id = :locationId AND tr.torneo_id = :tournamentId
            GROUP BY 
                up.division_id;';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue('tournamentId', $tournamentId, \PDO::PARAM_INT);
        $stmt->bindValue('locationId', $locationId, \PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getTeamIds(int $tournamentId, int $locationId)
    {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = 'SELECT 
                    ROW_NUMBER() OVER (PARTITION BY divisionId ORDER BY teamId) AS currentTeamId,
                    teamId,
                    divisionId
                FROM 
                    (SELECT DISTINCT tr.team_id AS teamId, up.division_id AS divisionId
                    FROM tournament_registration tr
                    JOIN user_profile up ON tr.user_profile_id = up.id
                    WHERE tr.location_id = :locationId AND tr.torneo_id = :tournamentId) AS distinct_teams
                ORDER BY 
                    divisionId, teamId;';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue('tournamentId', $tournamentId, \PDO::PARAM_INT);
        $stmt->bindValue('locationId', $locationId, \PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
