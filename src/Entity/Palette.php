<?php

namespace App\Entity;

use App\Repository\PaletteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaletteRepository::class)]
class Palette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    /* #[ORM\ManyToMany(targetEntity: Color::class, inversedBy: 'palettes')]
    private Collection $color; */

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Color1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Color2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Color3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Color4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Color5 = null;

    #[ORM\ManyToMany(targetEntity: TagHumeur::class)]
    private Collection $tagHumeur;

    public function __construct()
    {
        $this->color = new ArrayCollection();
        $this->tagHumeur = new ArrayCollection();
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

    /**
     * @return Collection<int, Color>
     */
/*     public function getColor(): Collection
    {
        return $this->color;
    }

    public function addColor(Color $color): self
    {
        if (!$this->color->contains($color)) {
            $this->color->add($color);
        }

        return $this;
    }

    public function removeColor(Color $color): self
    {
        $this->color->removeElement($color);

        return $this;
    } */

    public function getColor1(): ?string
    {
        return $this->Color1;
    }

    public function setColor1(?string $Color1): self
    {
        $this->Color1 = $Color1;

        return $this;
    }

    public function getColor2(): ?string
    {
        return $this->Color2;
    }

    public function setColor2(?string $Color2): self
    {
        $this->Color2 = $Color2;

        return $this;
    }

    public function getColor3(): ?string
    {
        return $this->Color3;
    }

    public function setColor3(?string $Color3): self
    {
        $this->Color3 = $Color3;

        return $this;
    }

    public function getColor4(): ?string
    {
        return $this->Color4;
    }

    public function setColor4(?string $Color4): self
    {
        $this->Color4 = $Color4;

        return $this;
    }

    public function getColor5(): ?string
    {
        return $this->Color5;
    }

    public function setColor5(?string $Color5): self
    {
        $this->Color5 = $Color5;

        return $this;
    }

    /**
     * @return Collection<int, TagHumeur>
     */
    public function getTagHumeur(): Collection
    {
        return $this->tagHumeur;
    }

    public function addTagHumeur(TagHumeur $tagHumeur): self
    {
        if (!$this->tagHumeur->contains($tagHumeur)) {
            $this->tagHumeur->add($tagHumeur);
        }

        return $this;
    }

    public function removeTagHumeur(TagHumeur $tagHumeur): self
    {
        $this->tagHumeur->removeElement($tagHumeur);

        return $this;
    }
}
