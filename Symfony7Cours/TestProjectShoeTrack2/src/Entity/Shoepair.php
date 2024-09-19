<?php

namespace App\Entity;

use App\Repository\ShoepairRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ShoepairRepository::class)]
class Shoepair
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nameBrandModel = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $startDateOfUse = null;

    #[ORM\Column]
    private ?float $wearLimitKm = null;

    #[ORM\Column]
    private ?float $currentWearKm = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $shoeNote = null;

    #[ORM\Column]
    private ?bool $inActiveService = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameBrandModel(): ?string
    {
        return $this->nameBrandModel;
    }

    public function setNameBrandModel(string $nameBrandModel): static
    {
        $this->nameBrandModel = $nameBrandModel;

        return $this;
    }

    public function getStartDateOfUse(): ?\DateTimeInterface
    {
        return $this->startDateOfUse;
    }

    public function setStartDateOfUse(\DateTimeInterface $startDateOfUse): static
    {
        $this->startDateOfUse = $startDateOfUse;

        return $this;
    }

    public function getWearLimitKm(): ?float
    {
        return $this->wearLimitKm;
    }

    public function setWearLimitKm(float $wearLimitKm): static
    {
        $this->wearLimitKm = $wearLimitKm;

        return $this;
    }

    public function getCurrentWearKm(): ?float
    {
        return $this->currentWearKm;
    }

    public function setCurrentWearKm(float $currentWearKm): static
    {
        $this->currentWearKm = $currentWearKm;

        return $this;
    }

    public function getShoeNote(): ?string
    {
        return $this->shoeNote;
    }

    public function setShoeNote(?string $shoeNote): static
    {
        $this->shoeNote = $shoeNote;

        return $this;
    }

    public function isInActiveService(): ?bool
    {
        return $this->inActiveService;
    }

    public function setInActiveService(bool $inActiveService): static
    {
        $this->inActiveService = $inActiveService;

        return $this;
    }
}
