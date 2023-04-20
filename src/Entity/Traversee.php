<?php

namespace App\Entity;

use App\Repository\TraverseeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TraverseeRepository::class)]
class Traversee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // #[ORM\Column(nullable: true)]
    // private ?int $id_realiser = null;

    // #[ORM\Column(nullable: true)]
    // private ?int $id_effectuer = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $date = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $heure = null;

    #[ORM\OneToMany(mappedBy: 'traversee', targetEntity: Reservation::class)]
    private Collection $reservation;

    #[ORM\ManyToOne(inversedBy: 'traversee')]
    private ?Liaison $liaison = null;

    public function __construct()
    {
        $this->reservation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    // public function getIdRealiser(): ?int
    // {
    //     return $this->id_realiser;
    // }

    // public function setIdRealiser(?int $id_realiser): self
    // {
    //     $this->id_realiser = $id_realiser;

    //     return $this;
    // }

    // public function getIdEffectuer(): ?int
    // {
    //     return $this->id_effectuer;
    // }

    // public function setIdEffectuer(?int $id_effectuer): self
    // {
    //     $this->id_effectuer = $id_effectuer;

    //     return $this;
    // }

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

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservation->contains($reservation)) {
            $this->reservation->add($reservation);
            $reservation->setTraversee($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservation->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getTraversee() === $this) {
                $reservation->setTraversee(null);
            }
        }

        return $this;
    }

    public function getLiaison(): ?Liaison
    {
        return $this->liaison;
    }

    public function setLiaison(?Liaison $liaison): self
    {
        $this->liaison = $liaison;

        return $this;
    }
}
