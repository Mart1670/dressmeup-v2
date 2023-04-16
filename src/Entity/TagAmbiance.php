<?php

namespace App\Entity;

use App\Repository\TagAmbianceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TagAmbianceRepository::class)]
class TagAmbiance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $categorie = null;

    #[ORM\ManyToMany(targetEntity: Vetement::class, mappedBy: 'tagAmbiances')]
    private Collection $vetement;

    public function __construct()
    {
        $this->vetement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->categorie = $categorie;

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

    // Pour affichage dans formulaire
    public function __toString(){
        return $this->name;
    }
}
