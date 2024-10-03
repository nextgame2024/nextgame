<?php

namespace App\Entity;

use App\Repository\TournamentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TournamentRepository::class)]
class Tournament
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TournamentType $tournament_type = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $start_day = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $end_day = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $number_of_tables = null;

    #[ORM\Column(length: 50)]
    private ?string $status = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $hour = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $location = null;

    #[ORM\Column(nullable: true)]
    private ?int $players = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTournamentType(): ?TournamentType
    {
        return $this->tournament_type;
    }

    public function setTournamentType(?TournamentType $tournament_type): static
    {
        $this->tournament_type = $tournament_type;

        return $this;
    }

    public function getStartDay(): ?\DateTimeInterface
    {
        return $this->start_day;
    }

    public function setStartDay(?\DateTimeInterface $start_day): static
    {
        $this->start_day = $start_day;

        return $this;
    }

    public function getEndDay(): ?\DateTimeInterface
    {
        return $this->end_day;
    }

    public function setEndDay(?\DateTimeInterface $end_day): static
    {
        $this->end_day = $end_day;

        return $this;
    }

    public function getNumberOfTables(): ?string
    {
        return $this->number_of_tables;
    }

    public function setNumberOfTables(?string $number_of_tables): static
    {
        $this->number_of_tables = $number_of_tables;

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

    public function getHour(): ?\DateTimeInterface
    {
        return $this->hour;
    }

    public function setHour(?\DateTimeInterface $hour): static
    {
        $this->hour = $hour;

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

    public function getPlayers(): ?int
    {
        return $this->players;
    }

    public function setPlayers(?int $players): static
    {
        $this->players = $players;

        return $this;
    }
}
