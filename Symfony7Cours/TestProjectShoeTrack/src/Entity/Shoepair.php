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
    private ?float $currentWear = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $shoeNotes = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $endDateOfUse = null;

    #[ORM\Column]
    private ?float $wearLimit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
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

    public function getCurrentWear(): ?float
    {
        return $this->currentWear;
    }

    public function setCurrentWear(float $currentWear): static
    {
        $this->currentWear = $currentWear;

        return $this;
    }

    public function getShoeNotes(): ?string
    {
        return $this->shoeNotes;
    }

    public function setShoeNotes(?string $shoeNotes): static
    {
        $this->shoeNotes = $shoeNotes;

        return $this;
    }

    public function getEndDateOfUse(): ?\DateTimeInterface
    {
        return $this->endDateOfUse;
    }

    public function setEndDateOfUse(?\DateTimeInterface $endDateOfUse): static
    {
        $this->endDateOfUse = $endDateOfUse;

        return $this;
    }

    public function getWearLimit(): ?float
    {
        return $this->wearLimit;
    }

    public function setWearLimit(float $wearLimit): static
    {
        $this->wearLimit = $wearLimit;

        return $this;
    }
}
