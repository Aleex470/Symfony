<?php

namespace App\Entity;

use App\Repository\ContenirRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContenirRepository::class)]
class Contenir
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // #[ORM\Column(nullable: true)]
    // private ?int $id_1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbmax = null;

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

    public function getNbmax(): ?int
    {
        return $this->nbmax;
    }

    public function setNbmax(?int $nbmax): self
    {
        $this->nbmax = $nbmax;

        return $this;
    }
}
