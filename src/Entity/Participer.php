<?php

namespace App\Entity;

use App\Repository\ParticiperRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticiperRepository::class)]
class Participer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // #[ORM\Column(nullable: true)]
    // private ?int $id_1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $nombre = null;

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

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(?int $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }
}
