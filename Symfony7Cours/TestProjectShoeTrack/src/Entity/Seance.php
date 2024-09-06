<?php

namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeanceRepository::class)]
class Seance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?float $distance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $seanceNote = null;

    #[ORM\Column(nullable: true)]
    private ?float $chrono = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(float $distance): static
    {
        $this->distance = $distance;

        return $this;
    }

    public function getSeanceNote(): ?string
    {
        return $this->seanceNote;
    }

    public function setSeanceNote(?string $seanceNote): static
    {
        $this->seanceNote = $seanceNote;

        return $this;
    }

    public function getChrono(): ?float
    {
        return $this->chrono;
    }

    public function setChrono(?float $chrono): static
    {
        $this->chrono = $chrono;

        return $this;
    }
}
