<?php

namespace App\Entity;

use App\Repository\TournamentRegistrationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TournamentRegistrationRepository::class)]
class TournamentRegistration
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tournament $torneo = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?UserProfile $user_profile = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $location = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\ManyToOne]
    private ?Teams $team = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUserProfile(): ?UserProfile
    {
        return $this->user_profile;
    }

    public function setUserProfile(?UserProfile $user_profile): static
    {
        $this->user_profile = $user_profile;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

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
}
