<?php

namespace App\Entity;

use App\Repository\ColorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ColorRepository::class)]
class Color
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $color_code = null;

    #[ORM\ManyToMany(targetEntity: Vetement::class, mappedBy: 'color')]
    private Collection $vetements;

    #[ORM\ManyToMany(targetEntity: Palette::class, mappedBy: 'color')]
    private Collection $palettes;

    #[ORM\Column(nullable: true)]
    private ?int $r = null;

    #[ORM\Column(nullable: true)]
    private ?int $g = null;

    #[ORM\Column(nullable: true)]
    private ?int $b = null;

    #[ORM\Column(nullable: true)]
    private ?bool $active = null;

    public function __construct()
    {
        $this->vetements = new ArrayCollection();
        $this->palettes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getColorCode(): ?string
    {
        return $this->color_code;
    }

    public function setColorCode(string $color_code): self
    {
        $this->color_code = $color_code;

        return $this;
    }

    /**
     * @return Collection<int, Vetement>
     */
    public function getVetements(): Collection
    {
        return $this->vetements;
    }

    public function addVetement(Vetement $vetement): self
    {
        if (!$this->vetements->contains($vetement)) {
            $this->vetements->add($vetement);
            $vetement->addColor($this);
        }

        return $this;
    }

    public function removeVetement(Vetement $vetement): self
    {
        if ($this->vetements->removeElement($vetement)) {
            $vetement->removeColor($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Palette>
     */
    public function getPalettes(): Collection
    {
        return $this->palettes;
    }

    public function addPalette(Palette $palette): self
    {
        if (!$this->palettes->contains($palette)) {
            $this->palettes->add($palette);
            $palette->addColor($this);
        }

        return $this;
    }

    public function removePalette(Palette $palette): self
    {
        if ($this->palettes->removeElement($palette)) {
            $palette->removeColor($this);
        }

        return $this;
    }

    public function getR(): ?int
    {
        return $this->r;
    }

    public function setR(?int $r): self
    {
        $this->r = $r;

        return $this;
    }

    public function getG(): ?int
    {
        return $this->g;
    }

    public function setG(?int $g): self
    {
        $this->g = $g;

        return $this;
    }

    public function getB(): ?int
    {
        return $this->b;
    }

    public function setB(?int $b): self
    {
        $this->b = $b;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    // Pour affichage dans formulaire
    public function __toString(){
        return $this->color_code;
    }
  
}
