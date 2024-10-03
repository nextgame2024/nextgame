<?php

namespace App\Entity;

use App\Repository\TeamsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamsRepository::class)]
class Teams
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $points = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $percentage = null;

    #[ORM\ManyToOne]
    private ?Tournament $torneo = null;

    #[ORM\ManyToOne]
    private ?Divisions $division = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPoints(): ?string
    {
        return $this->points;
    }

    public function setPoints(?string $points): static
    {
        $this->points = $points;

        return $this;
    }

    public function getPercentage(): ?string
    {
        return $this->percentage;
    }

    public function setPercentage(?string $percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }

    public function getTorneo(): ?Tournament
    {
        return $this->torneo;
    }

    public function setTorneo(?Tournament $torneo): static
    {
        $this->torneo = $torneo;

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
}
