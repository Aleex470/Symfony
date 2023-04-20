<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'reservation')]
    private ?Client $no = null;

    #[ORM\ManyToOne(inversedBy: 'reservation')]
    private ?Traversee $traversee = null;

    // #[ORM\Column(nullable: true)]
    // private ?int $id_reserver = null;

    // #[ORM\Column(nullable: true)]
    // private ?int $id_concerner = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    // public function getIdReserver(): ?int
    // {
    //     return $this->id_reserver;
    // }

    // public function setIdReserver(?int $id_reserver): self
    // {
    //     $this->id_reserver = $id_reserver;

    //     return $this;
    // }

    // public function getIdConcerner(): ?int
    // {
    //     return $this->id_concerner;
    // }

    // public function setIdConcerner(?int $id_concerner): self
    // {
    //     $this->id_concerner = $id_concerner;

    //     return $this;
    // }

    public function getNo(): ?Client
    {
        return $this->no;
    }

    public function setNo(?Client $no): self
    {
        $this->no = $no;

        return $this;
    }

    public function getTraversee(): ?Traversee
    {
        return $this->traversee;
    }

    public function setTraversee(?Traversee $traversee): self
    {
        $this->traversee = $traversee;

        return $this;
    }
}
