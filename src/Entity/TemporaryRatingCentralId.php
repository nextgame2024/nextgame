<?php

namespace App\Entity;

use App\Repository\TemporaryRatingCentralIdRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TemporaryRatingCentralIdRepository::class)]
class TemporaryRatingCentralId
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $temporary_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $location = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTemporaryId(): ?int
    {
        return $this->temporary_id;
    }

    public function setTemporaryId(int $temporary_id): static
    {
        $this->temporary_id = $temporary_id;

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
}
