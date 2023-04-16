<?php

namespace App\Entity;

use App\Repository\VetementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VetementRepository::class)]
class Vetement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    private ?string $style = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    /* #[ORM\ManyToMany(targetEntity: Tenue::class, mappedBy: 'vetement')]
    private Collection $tenues; */

    #[ORM\ManyToMany(targetEntity: TagHumeur::class, inversedBy: 'vetements')]
    private Collection $tagHumeur;

    #[ORM\ManyToMany(targetEntity: Color::class, inversedBy: 'vetements')]
    private Collection $color;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $alt = null;

    #[ORM\ManyToMany(targetEntity: TagAmbiance::class, mappedBy: 'vetement')]
    private Collection $tagAmbiances;

    #[ORM\ManyToOne(inversedBy: 'vetements')]
    private ?User $user = null;

    public function __construct()
    {
        $this->tenues = new ArrayCollection();
        $this->tagHumeur = new ArrayCollection();
        $this->color = new ArrayCollection();
        $this->tagAmbiances = new ArrayCollection();
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setStyle(string $style): self
    {
        $this->style = $style;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

   /*  *
     * @return Collection<int, Tenue>
     */
/*     public function getTenues(): Collection
    {
        return $this->tenues;
    }

    public function addTenue(Tenue $tenue): self
    {
        if (!$this->tenues->contains($tenue)) {
            $this->tenues->add($tenue);
            $tenue->addVetement($this);
        }

        return $this;
    }

    public function removeTenue(Tenue $tenue): self
    {
        if ($this->tenues->removeElement($tenue)) {
            $tenue->removeVetement($this);
        }

        return $this;
    } */

    /**
     * @return Collection<int, Tag>
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

    /**
     * @return Collection<int, Color>
     */
    public function getColor(): Collection
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
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(?string $alt): self
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * @return Collection<int, TagAmbiance>
     */
    public function getTagAmbiances(): Collection
    {
        return $this->tagAmbiances;
    }

    public function addTagAmbiance(TagAmbiance $tagAmbiance): self
    {
        if (!$this->tagAmbiances->contains($tagAmbiance)) {
            $this->tagAmbiances->add($tagAmbiance);
            $tagAmbiance->addVetement($this);
        }

        return $this;
    }

    public function removeTagAmbiance(TagAmbiance $tagAmbiance): self
    {
        if ($this->tagAmbiances->removeElement($tagAmbiance)) {
            $tagAmbiance->removeVetement($this);
        }

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
