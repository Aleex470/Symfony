<?php

namespace App\Entity;

use App\Repository\TraverseeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TraverseeRepository::class)]
class Traversee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_realiser = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_effectuer = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $date = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $heure = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRealiser(): ?int
    {
        return $this->id_realiser;
    }

    public function setIdRealiser(?int $id_realiser): self
    {
        $this->id_realiser = $id_realiser;

        return $this;
    }

    public function getIdEffectuer(): ?int
    {
        return $this->id_effectuer;
    }

    public function setIdEffectuer(?int $id_effectuer): self
    {
        $this->id_effectuer = $id_effectuer;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHeure(): ?string
    {
        return $this->heure;
    }

    public function setHeure(?string $heure): self
    {
        $this->heure = $heure;

        return $this;
    }
}
