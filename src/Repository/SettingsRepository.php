<?php

namespace App\Repository;

use App\Entity\Games;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Games>
 */
class SettingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Games::class);
    }

    /**
     * Retrieve settings with pagination and sorting.
     *
     * @param int $locationId
     * @param int $offset
     * @param int $limit
     * @param string $sortBy
     * @param string $order
     * @param string $searchBy
     * @param string $searchValue
     * @param string $searchDate
     * @return Paginator
     */
    public function findSettingsByLocationId(
        int $locationId,
        int $limit = 11,
        int $offset = 0,
        string $sortBy = 'g.name',
        string $order = 'ASC',
        ?string $searchBy = null
    ) {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();
        switch ($searchBy) {
            case 'tournament_type':
                $sortBy = 'id';
                break;
            case 'days_off':
                $sortBy = 'date';
                break;
            case 'divisions':
                $sortBy = 'id';
                break;
            case 'table_type':
                $sortBy = 'id';
                break;
            case 'parameters':
                $sortBy = 'description';
                break;
            default:
                $sortBy = 'name';
        }
        $sql = 'SELECT 
                g.*
            FROM ' . $searchBy . ' g
            WHERE g.location_id = :locationId';

        $sql .= ' ORDER BY ' . $sortBy . ' ' . $order . ' 
            LIMIT :limit OFFSET :offset';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue('locationId', $locationId, \PDO::PARAM_INT);
        $stmt->bindValue('limit', $limit, \PDO::PARAM_INT);
        $stmt->bindValue('offset', $offset, \PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function countByTournamentRegistration(
        int $locationId,
        ?string $searchBy = null
    ) {
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        $sql = 'SELECT COUNT(*)
            FROM ' . $searchBy . ' g
            WHERE g.location_id = :locationId';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue('locationId', $locationId, \PDO::PARAM_INT);

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

                if ($players == 2 && $count == 3) {
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
