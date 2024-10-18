<?php

namespace App\Entity;

use App\Repository\GamesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GamesRepository::class)]
class Games
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?Tournament $tournament = null;

    #[ORM\ManyToOne]
    private ?Teams $team = null;

    #[ORM\ManyToOne]
    private ?Table $table_number = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $game_type = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?UserProfile $player_one = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?UserProfile $player_two = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?UserProfile $player_three = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?UserProfile $player_four = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $player_one_set_1 = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $player_one_set_2 = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $player_one_set_3 = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $player_one_set_4 = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $player_one_set_5 = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $player_two_set_1 = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $player_two_set_2 = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $player_two_set_3 = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $player_two_set_4 = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $player_two_set_5 = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $games_team_one = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $games_team_two = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $sets_team_one = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $sets_team_two = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $game_date = null;

    #[ORM\Column(length: 50)]
    private ?string $status = null;

    #[ORM\ManyToOne]
    private ?Divisions $division = null;

    #[ORM\ManyToOne]
    private ?Location $location = null;

    #[ORM\ManyToOne]
    private ?Teams $team2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $round = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $is_paid = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $current_set = null;

    #[ORM\Column(nullable: true)]
    private ?int $display = null;

    #[ORM\Column]
    private ?int $player_one_set_6 = null;

    #[ORM\Column]
    private ?int $player_one_set_7 = null;

    #[ORM\Column]
    private ?int $player_two_set_6 = null;

    #[ORM\Column]
    private ?int $player_two_set_7 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTournament(): ?Tournament
    {
        return $this->tournament;
    }

    public function setTournament(?Tournament $tournament): static
    {
        $this->tournament = $tournament;

        return $this;
    }

    public function getTeam(): ?Teams
    {
        return $this->team;
    }

    public function setTeam(?Teams $team): static
    {
        $this->team = $team;

        return $this;
    }

    public function getTableNumber(): ?Table
    {
        return $this->table_number;
    }

    public function setTableNumber(?Table $table_number): static
    {
        $this->table_number = $table_number;

        return $this;
    }

    public function getGameType(): ?string
    {
        return $this->game_type;
    }

    public function setGameType(?string $game_type): static
    {
        $this->game_type = $game_type;

        return $this;
    }

    public function getPlayerOne(): ?UserProfile
    {
        return $this->player_one;
    }

    public function setPlayerOne(?UserProfile $player_one): static
    {
        $this->player_one = $player_one;

        return $this;
    }

    public function getPlayerTwo(): ?UserProfile
    {
        return $this->player_two;
    }

    public function setPlayerTwo(?UserProfile $player_two): static
    {
        $this->player_two = $player_two;

        return $this;
    }

    public function getPlayerThree(): ?UserProfile
    {
        return $this->player_three;
    }

    public function setPlayerThree(?UserProfile $player_three): static
    {
        $this->player_three = $player_three;

        return $this;
    }

    public function getPlayerFour(): ?UserProfile
    {
        return $this->player_four;
    }

    public function setPlayerFour(?UserProfile $player_four): static
    {
        $this->player_four = $player_four;

        return $this;
    }

    public function getPlayerOneSet1(): ?string
    {
        return $this->player_one_set_1;
    }

    public function setPlayerOneSet1(?string $player_one_set_1): static
    {
        $this->player_one_set_1 = $player_one_set_1;

        return $this;
    }

    public function getPlayerOneSet2(): ?string
    {
        return $this->player_one_set_2;
    }

    public function setPlayerOneSet2(?string $player_one_set_2): static
    {
        $this->player_one_set_2 = $player_one_set_2;

        return $this;
    }

    public function getPlayerOneSet3(): ?string
    {
        return $this->player_one_set_3;
    }

    public function setPlayerOneSet3(?string $player_one_set_3): static
    {
        $this->player_one_set_3 = $player_one_set_3;

        return $this;
    }

    public function getPlayerOneSet4(): ?string
    {
        return $this->player_one_set_4;
    }

    public function setPlayerOneSet4(?string $player_one_set_4): static
    {
        $this->player_one_set_4 = $player_one_set_4;

        return $this;
    }

    public function getPlayerOneSet5(): ?string
    {
        return $this->player_one_set_5;
    }

    public function setPlayerOneSet5(?string $player_one_set_5): static
    {
        $this->player_one_set_5 = $player_one_set_5;

        return $this;
    }

    public function getPlayerTwoSet1(): ?string
    {
        return $this->player_two_set_1;
    }

    public function setPlayerTwoSet1(?string $player_two_set_1): static
    {
        $this->player_two_set_1 = $player_two_set_1;

        return $this;
    }

    public function getPlayerTwoSet2(): ?string
    {
        return $this->player_two_set_2;
    }

    public function setPlayerTwoSet2(?string $player_two_set_2): static
    {
        $this->player_two_set_2 = $player_two_set_2;

        return $this;
    }

    public function getPlayerTwoSet3(): ?string
    {
        return $this->player_two_set_3;
    }

    public function setPlayerTwoSet3(?string $player_two_set_3): static
    {
        $this->player_two_set_3 = $player_two_set_3;

        return $this;
    }

    public function getPlayerTwoSet4(): ?string
    {
        return $this->player_two_set_4;
    }

    public function setPlayerTwoSet4(?string $player_two_set_4): static
    {
        $this->player_two_set_4 = $player_two_set_4;

        return $this;
    }

    public function getPlayerTwoSet5(): ?string
    {
        return $this->player_two_set_5;
    }

    public function setPlayerTwoSet5(?string $player_two_set_5): static
    {
        $this->player_two_set_5 = $player_two_set_5;

        return $this;
    }

    public function getGamesTeamOne(): ?string
    {
        return $this->games_team_one;
    }

    public function setGamesTeamOne(?string $games_team_one): static
    {
        $this->games_team_one = $games_team_one;

        return $this;
    }

    public function getGamesTeamTwo(): ?string
    {
        return $this->games_team_two;
    }

    public function setGamesTeamTwo(?string $games_team_two): static
    {
        $this->games_team_two = $games_team_two;

        return $this;
    }

    public function getSetsTeamOne(): ?string
    {
        return $this->sets_team_one;
    }

    public function setSetsTeamOne(?string $sets_team_one): static
    {
        $this->sets_team_one = $sets_team_one;

        return $this;
    }

    public function getSetsTeamTwo(): ?string
    {
        return $this->sets_team_two;
    }

    public function setSetsTeamTwo(?string $sets_team_two): static
    {
        $this->sets_team_two = $sets_team_two;

        return $this;
    }

    public function getGameDate(): ?\DateTimeInterface
    {
        return $this->game_date;
    }

    public function setGameDate(\DateTimeInterface $game_date): static
    {
        $this->game_date = $game_date;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getDivision(): ?Divisions
    {
        return $this->division;
    }

    public function setDivision(?Divisions $division): static
    {
        $this->division = $division;

        return $this;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getTeam2(): ?Teams
    {
        return $this->team2;
    }

    public function setTeam2(?Teams $team2): static
    {
        $this->team2 = $team2;

        return $this;
    }

    public function getRound(): ?string
    {
        return $this->round;
    }

    public function setRound(?string $round): static
    {
        $this->round = $round;

        return $this;
    }

    public function getIsPaid(): ?string
    {
        return $this->is_paid;
    }

    public function setIsPaid(?string $is_paid): static
    {
        $this->is_paid = $is_paid;

        return $this;
    }

    public function getCurrentSet(): ?string
    {
        return $this->current_set;
    }

    public function setCurrentSet(?string $current_set): static
    {
        $this->current_set = $current_set;

        return $this;
    }

    public function getDisplay(): ?int
    {
        return $this->display;
    }

    public function setDisplay(?int $display): static
    {
        $this->display = $display;

        return $this;
    }

    public function getPlayerOneSet6(): ?int
    {
        return $this->player_one_set_6;
    }

    public function setPlayerOneSet6(int $player_one_set_6): static
    {
        $this->player_one_set_6 = $player_one_set_6;

        return $this;
    }

    public function getPlayerOneSet7(): ?int
    {
        return $this->player_one_set_7;
    }

    public function setPlayerOneSet7(int $player_one_set_7): static
    {
        $this->player_one_set_7 = $player_one_set_7;

        return $this;
    }

    public function getPlayerTwoSet6(): ?int
    {
        return $this->player_two_set_6;
    }

    public function setPlayerTwoSet6(int $player_two_set_6): static
    {
        $this->player_two_set_6 = $player_two_set_6;

        return $this;
    }

    public function getPlayerTwoSet7(): ?int
    {
        return $this->player_two_set_7;
    }

    public function setPlayerTwoSet7(int $player_two_set_7): static
    {
        $this->player_two_set_7 = $player_two_set_7;

        return $this;
    }
}
