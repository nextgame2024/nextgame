<?php

namespace App\Entity;

use App\Repository\LocationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocationRepository::class)]
class Location
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $manager = null;

    #[ORM\Column(length: 5)]
    private ?string $active = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $club_id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $state = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $province = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $country = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $sport = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $unrated_mean = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $unrated_st_dev = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $processed_url = null;

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getManager(): ?string
    {
        return $this->manager;
    }

    public function setManager(?string $manager): static
    {
        $this->manager = $manager;

        return $this;
    }

    public function getActive(): ?string
    {
        return $this->active;
    }

    public function setActive(string $active): static
    {
        $this->active = $active;

        return $this;
    }

    public function getClubId(): ?string
    {
        return $this->club_id;
    }

    public function setClubId(?string $club_id): static
    {
        $this->club_id = $club_id;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function setProvince(string $province): static
    {
        $this->province = $province;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getSport(): ?string
    {
        return $this->sport;
    }

    public function setSport(?string $sport): static
    {
        $this->sport = $sport;

        return $this;
    }

    public function getUnratedMean(): ?string
    {
        return $this->unrated_mean;
    }

    public function setUnratedMean(?string $unrated_mean): static
    {
        $this->unrated_mean = $unrated_mean;

        return $this;
    }

    public function getUnratedStDev(): ?string
    {
        return $this->unrated_st_dev;
    }

    public function setUnratedStDev(?string $unrated_st_dev): static
    {
        $this->unrated_st_dev = $unrated_st_dev;

        return $this;
    }

    public function getProcessedUrl(): ?string
    {
        return $this->processed_url;
    }

    public function setProcessedUrl(?string $processed_url): static
    {
        $this->processed_url = $processed_url;

        return $this;
    }
}
