<?php

namespace App\Entity;

use App\Repository\TenueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TenueRepository::class)]
class Tenue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $haut = null;

    #[ORM\Column(length: 255)]
    private ?string $bas = null;

    #[ORM\ManyToMany(targetEntity: Vetement::class, inversedBy: 'tenues')]
    private Collection $vetement;

    #[ORM\ManyToOne]
    private ?User $user = null;

    public function __construct()
    {
        $this->vetement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHaut(): ?string
    {
        return $this->haut;
    }

    public function setHaut(string $haut): self
    {
        $this->haut = $haut;

        return $this;
    }

    public function getBas(): ?string
    {
        return $this->bas;
    }

    public function setBas(string $bas): self
    {
        $this->bas = $bas;

        return $this;
    }

    /**
     * @return Collection<int, Vetement>
     */
    public function getVetement(): Collection
    {
        return $this->vetement;
    }

    public function addVetement(Vetement $vetement): self
    {
        if (!$this->vetement->contains($vetement)) {
            $this->vetement->add($vetement);
        }

        return $this;
    }

    public function removeVetement(Vetement $vetement): self
    {
        $this->vetement->removeElement($vetement);

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
