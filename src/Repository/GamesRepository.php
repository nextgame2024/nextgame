<?php

namespace App\Repository;

use App\Entity\Games;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Games>
 */
class GamesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Games::class);
    }

    /**
     * Retrieve games with pagination and sorting.
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
    public function findGamesByLocationId(
        int $locationId,
        int $limit = 11,
        int $offset = 0,
        string $sortBy = 'g.division_id',
        string $order = 'ASC',
        ?string $searchBy = null,
        ?string $searchValue = null
    ) {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();
        $sql = 'SELECT 
                g.id AS game_id,
                t.id,
                tp.id AS tournament_type_id,
                tp.name AS tournament_type_name,
                t.start_day,
                t.end_day,
                t.number_of_tables,
                t.hour,
                t.players,
                g.tournament_id,
                ta.id AS table_id,
                ta.name AS table_name,
                g.team_id,
                team1.name AS team1_name,
                g.team2_id,
                team2.name AS team2_name,
                g.player_one_id,
                p1.name AS player_one_name,
                g.player_two_id,
                p2.name AS player_two_name,
                g.player_three_id,
                p3.name AS player_three_name,
                g.player_four_id,
                p4.name AS player_four_name,
                g.table_number_id,
                g.game_type,
                g.player_one_set_1,
                g.player_one_set_2,
                g.player_one_set_3,
                g.player_one_set_4,
                g.player_one_set_5,
                g.player_two_set_1,
                g.player_two_set_2,
                g.player_two_set_3,
                g.player_two_set_4,
                g.player_two_set_5,
                g.games_team_one,
                g.games_team_two,
                g.sets_team_one,
                g.sets_team_two,
                g.game_date,
                g.status,
                g.division_id,
                d.name AS division_name,
                g.location_id,
                l.name AS location_name,
                g.round,
                g.is_paid
            FROM games g
            JOIN tournament t ON g.tournament_id = t.id
            JOIN tournament_type tp ON t.tournament_type_id = tp.id
            JOIN `table` ta ON g.table_number_id = ta.id
            JOIN teams team1 ON g.team_id = team1.id
            JOIN teams team2 ON g.team2_id = team2.id
            JOIN user_profile p1 ON g.player_one_id = p1.id
            JOIN user_profile p2 ON g.player_two_id = p2.id
            LEFT JOIN user_profile p3 ON g.player_three_id = p3.id
            LEFT JOIN user_profile p4 ON g.player_four_id = p4.id
            JOIN divisions d ON g.division_id = d.id
            JOIN location l ON g.location_id = l.id
            WHERE g.location_id = :locationId';

        // Append search conditions based on the searchBy parameter
        if ($searchBy && $searchValue) {
            switch ($searchBy) {
                case 'tournament_type_name':
                    $sql .= ' AND tp.name LIKE :searchValue';
                    break;
                case 't.start_day':
                    $sql .= ' AND t.start_day LIKE :searchValue';
                    break;
                case 't.end_day':
                    $sql .= ' AND t.end_day LIKE :searchValue';
                    break;
                case 'g.game_date':
                    $sql .= ' AND g.game_date LIKE :searchValue';
                    break;
                case 'team1_name':
                    $sql .= ' AND team1.name LIKE :searchValue';
                    break;
                case 'team2_name':
                    $sql .= ' AND team2.name LIKE :searchValue';
                    break;
                case 'g.round':
                    $sql .= ' AND g.round LIKE :searchValue';
                    break;
                case 'division_name':
                    $sql .= ' AND d.name LIKE :searchValue';
                    break;
                case 'g.game_type':
                    $sql .= ' AND g.game_type LIKE :searchValue';
                    break;
                case 'table_name':
                    $sql .= ' AND ta.name LIKE :searchValue';
                    break;
                case 'player_one_name':
                    $sql .= ' AND p1.name LIKE :searchValue';
                    break;
                case 'player_two_name':
                    $sql .= ' AND p2.name LIKE :searchValue';
                    break;
                default:
                    throw new \InvalidArgumentException('Invalid search criteria');
            }
        }

        // Append ordering and limits
        $sql .= ' ORDER BY g.id, t.start_day,' . $sortBy . ' ' . $order . ' 
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
        int $limit = 11,
        int $offset = 0,
        string $sortBy = 'tournament_status',
        string $order = 'DESC',
        ?string $searchBy = null,
        ?string $searchValue = null
    ) {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = 'SELECT COUNT(*)
            FROM games g
            JOIN tournament t ON g.tournament_id = t.id
            JOIN tournament_type tp ON t.tournament_type_id = tp.id
            JOIN `table` ta ON g.table_number_id = ta.id
            JOIN teams team1 ON g.team_id = team1.id
            JOIN teams team2 ON g.team2_id = team2.id
            JOIN user_profile p1 ON g.player_one_id = p1.id
            JOIN user_profile p2 ON g.player_two_id = p2.id
            LEFT JOIN user_profile p3 ON g.player_three_id = p3.id
            LEFT JOIN user_profile p4 ON g.player_four_id = p4.id
            JOIN divisions d ON g.division_id = d.id
            JOIN location l ON g.location_id = l.id
            WHERE g.location_id = :locationId';

        if ($searchBy && $searchValue) {
            switch ($searchBy) {
                case 'tournament_type_name':
                    $sql .= ' AND tp.name LIKE :searchValue';
                    break;
                case 't.start_day':
                    $sql .= ' AND t.start_day LIKE :searchValue';
                    break;
                case 't.end_day':
                    $sql .= ' AND t.end_day LIKE :searchValue';
                    break;
                case 'g.game_date':
                    $sql .= ' AND g.game_date LIKE :searchValue';
                    break;
                case 'team1_name':
                    $sql .= ' AND team1.name LIKE :searchValue';
                    break;
                case 'team2_name':
                    $sql .= ' AND team2.name LIKE :searchValue';
                    break;
                case 'g.round':
                    $sql .= ' AND g.round LIKE :searchValue';
                    break;
                case 'division_name':
                    $sql .= ' AND d.name LIKE :searchValue';
                    break;
                case 'g.game_type':
                    $sql .= ' AND g.game_type LIKE :searchValue';
                    break;
                case 'table_name':
                    $sql .= ' AND ta.name LIKE :searchValue';
                    break;
                case 'player_one_name':
                    $sql .= ' AND p1.name LIKE :searchValue';
                    break;
                case 'player_two_name':
                    $sql .= ' AND p2.name LIKE :searchValue';
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


    public function createGamesByTournamentType(array $games)
    {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = 'INSERT INTO games (
                    tournament_id, team_id, table_number_id, player_one_id, 
                    game_type, game_date, status, player_two_id, 
                    player_three_id, player_four_id, division_id, location_id, 
                    team2_id, round
                ) VALUES (
                    :tournament_id, :team_id_1, :table, :player_one_id, 
                    :game_type, :game_date, :status, :player_two_id, 
                    :player_three_id, :player_four_id, :division_id, :location_id, 
                    :team_id_2, :round
                )';

        $stmt = $conn->prepare($sql);

        foreach ($games as $division) {
            foreach ($division as $index => $game) {
                $count = $index + 1;
                $players = $game['players'];
                $player_three_id = null;
                $player_four_id = null;

                if ($players == 3 && $count == 4) {
                    $stmt->bindValue('tournament_id', $game['tournament_id']);
                    $stmt->bindValue('team_id_1', $game['team_id_1']);
                    $stmt->bindValue('table', $game['table']);
                    $stmt->bindValue('player_one_id', $game['team_id_1_doubles_1']);
                    $stmt->bindValue('game_type', 'Doubles');
                    $stmt->bindValue('game_date', $game['game_date']);
                    $stmt->bindValue('status', $game['status']);
                    $stmt->bindValue('player_two_id', $game['team_id_1_doubles_2']);
                    $stmt->bindValue('player_three_id', $game['team_id_2_doubles_1']);
                    $stmt->bindValue('player_four_id', $game['team_id_2_doubles_2']);
                    $stmt->bindValue('division_id', $game['division_id']);
                    $stmt->bindValue('location_id', $game['location_id']);
                    $stmt->bindValue('team_id_2', $game['team_id_2']);
                    $stmt->bindValue('round', $game['round']);
                    $stmt->execute();
                }

                if ($players == 3 && $count == 7) {
                    $stmt->bindValue('tournament_id', $game['tournament_id']);
                    $stmt->bindValue('team_id_1', $game['team_id_1']);
                    $stmt->bindValue('table', $game['table']);
                    $stmt->bindValue('player_one_id', $game['team_id_1_doubles_3']);
                    $stmt->bindValue('game_type', 'Doubles');
                    $stmt->bindValue('game_date', $game['game_date']);
                    $stmt->bindValue('status', $game['status']);
                    $stmt->bindValue('player_two_id', $game['team_id_1_doubles_4']);
                    $stmt->bindValue('player_three_id', $game['team_id_2_doubles_3']);
                    $stmt->bindValue('player_four_id', $game['team_id_2_doubles_4']);
                    $stmt->bindValue('division_id', $game['division_id']);
                    $stmt->bindValue('location_id', $game['location_id']);
                    $stmt->bindValue('team_id_2', $game['team_id_2']);
                    $stmt->bindValue('round', $game['round']);
                    $stmt->execute();
                }

                if ($players == 2 && $count == 2) {
                    $stmt->bindValue('tournament_id', $game['tournament_id']);
                    $stmt->bindValue('team_id_1', $game['team_id_1']);
                    $stmt->bindValue('table', $game['table']);
                    $stmt->bindValue('player_one_id', $game['team_id_1_doubles_1']);
                    $stmt->bindValue('game_type', 'Doubles');
                    $stmt->bindValue('game_date', $game['game_date']);
                    $stmt->bindValue('status', $game['status']);
                    $stmt->bindValue('player_two_id', $game['team_id_1_doubles_2']);
                    $stmt->bindValue('player_three_id', $game['team_id_2_doubles_1']);
                    $stmt->bindValue('player_four_id', $game['team_id_2_doubles_2']);
                    $stmt->bindValue('division_id', $game['division_id']);
                    $stmt->bindValue('location_id', $game['location_id']);
                    $stmt->bindValue('team_id_2', $game['team_id_2']);
                    $stmt->bindValue('round', $game['round']);
                    $stmt->execute();
                }

                $stmt->bindValue('tournament_id', $game['tournament_id']);
                $stmt->bindValue('team_id_1', $game['team_id_1']);
                $stmt->bindValue('table', $game['table']);
                $stmt->bindValue('player_one_id', $game['user_profile_id_team_1']);
                $stmt->bindValue('game_type', $game['game_type']);
                $stmt->bindValue('game_date', $game['game_date']);
                $stmt->bindValue('status', $game['status']);
                $stmt->bindValue('player_two_id', $game['user_profile_id_team_2']);
                $stmt->bindValue('player_three_id', $player_three_id);
                $stmt->bindValue('player_four_id', $player_four_id);
                $stmt->bindValue('division_id', $game['division_id']);
                $stmt->bindValue('location_id', $game['location_id']);
                $stmt->bindValue('team_id_2', $game['team_id_2']);
                $stmt->bindValue('round', $game['round']);
                $stmt->execute();
            }
        }

        return true;
    }
}
