<?php

namespace App\Entity;

use App\Repository\UserProfileRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserProfileRepository::class)]
class UserProfile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateOfBirth = null;

    #[ORM\OneToOne(inversedBy: 'userProfile', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $rating = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $location = null;

    #[ORM\ManyToOne]
    private ?Divisions $division = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $rating_central_id = null;

    #[ORM\Column(length: 6, nullable: true)]
    private ?string $deviation = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $primary_club = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $state = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $province = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $postal_code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $country = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $deceased = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $gender = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $sport = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $usatt_id = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $tta_id = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $ittf = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $ittf_id = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $player_new_info = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $address_1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $address_2 = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $mobile = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $registered = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(?\DateTimeInterface $dateOfBirth): static
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

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

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(?string $rating): static
    {
        $this->rating = $rating;

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

    public function getDivision(): ?Divisions
    {
        return $this->division;
    }

    public function setDivision(?Divisions $division): static
    {
        $this->division = $division;

        return $this;
    }

    public function getRatingCentralId(): ?string
    {
        return $this->rating_central_id;
    }

    public function setRatingCentralId(?string $rating_central_id): static
    {
        $this->rating_central_id = $rating_central_id;

        return $this;
    }

    public function getDeviation(): ?string
    {
        return $this->deviation;
    }

    public function setDeviation(?string $deviation): static
    {
        $this->deviation = $deviation;

        return $this;
    }

    public function getPrimaryClub(): ?string
    {
        return $this->primary_club;
    }

    public function setPrimaryClub(?string $primary_club): static
    {
        $this->primary_club = $primary_club;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): static
    {
        $this->city = $city;

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

    public function setProvince(?string $province): static
    {
        $this->province = $province;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(?string $postal_code): static
    {
        $this->postal_code = $postal_code;

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

    public function getDeceased(): ?string
    {
        return $this->deceased;
    }

    public function setDeceased(?string $deceased): static
    {
        $this->deceased = $deceased;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): static
    {
        $this->gender = $gender;

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

    public function getUsattId(): ?string
    {
        return $this->usatt_id;
    }

    public function setUsattId(?string $usatt_id): static
    {
        $this->usatt_id = $usatt_id;

        return $this;
    }

    public function getTtaId(): ?string
    {
        return $this->tta_id;
    }

    public function setTtaId(?string $tta_id): static
    {
        $this->tta_id = $tta_id;

        return $this;
    }

    public function getIttf(): ?string
    {
        return $this->ittf;
    }

    public function setIttf(?string $ittf): static
    {
        $this->ittf = $ittf;

        return $this;
    }

    public function getIttfId(): ?string
    {
        return $this->ittf_id;
    }

    public function setIttfId(?string $ittf_id): static
    {
        $this->ittf_id = $ittf_id;

        return $this;
    }

    public function getPlayerNewInfo(): ?string
    {
        return $this->player_new_info;
    }

    public function setPlayerNewInfo(?string $player_new_info): static
    {
        $this->player_new_info = $player_new_info;

        return $this;
    }

    public function getAddress1(): ?string
    {
        return $this->address_1;
    }

    public function setAddress1(?string $address_1): static
    {
        $this->address_1 = $address_1;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address_2;
    }

    public function setAddress2(?string $address_2): static
    {
        $this->address_2 = $address_2;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): static
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getRegistered(): ?string
    {
        return $this->registered;
    }

    public function setRegistered(?string $registered): static
    {
        $this->registered = $registered;

        return $this;
    }
}
