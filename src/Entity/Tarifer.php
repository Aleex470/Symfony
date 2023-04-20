<?php

namespace App\Entity;

use App\Repository\TariferRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TariferRepository::class)]
class Tarifer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // #[ORM\Column(nullable: true)]
    // private ?int $id_1 = null;

    // #[ORM\Column(nullable: true)]
    // private ?int $id_2 = null;

    #[ORM\Column(nullable: true)]
    private ?float $tarif = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    // public function getId1(): ?int
    // {
    //     return $this->id_1;
    // }

    // public function setId1(?int $id_1): self
    // {
    //     $this->id_1 = $id_1;

    //     return $this;
    // }

    // public function getId2(): ?int
    // {
    //     return $this->id_2;
    // }

    // public function setId2(?int $id_2): self
    // {
    //     $this->id_2 = $id_2;

    //     return $this;
    // }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(?float $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }
}
