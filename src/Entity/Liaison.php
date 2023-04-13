<?php

namespace App\Entity;

use App\Repository\LiaisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LiaisonRepository::class)]
class Liaison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_regrouper = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_depart = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_arrivee = null;

    #[ORM\Column(length: 16, nullable: true)]
    private ?string $duree = null;

    #[ORM\Column(nullable: true)]
    private ?int $id_port = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRegrouper(): ?int
    {
        return $this->id_regrouper;
    }

    public function setIdRegrouper(?int $id_regrouper): self
    {
        $this->id_regrouper = $id_regrouper;

        return $this;
    }

    public function getIdDepart(): ?int
    {
        return $this->id_depart;
    }

    public function setIdDepart(?int $id_depart): self
    {
        $this->id_depart = $id_depart;

        return $this;
    }

    public function getIdArrivee(): ?int
    {
        return $this->id_arrivee;
    }

    public function setIdArrivee(?int $id_arrivee): self
    {
        $this->id_arrivee = $id_arrivee;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(?string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getIdPort(): ?int
    {
        return $this->id_port;
    }

    public function setIdPort(?int $id_port): self
    {
        $this->id_port = $id_port;

        return $this;
    }
}
