<?php

namespace App\Entity;

use App\Repository\ReferenceColorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReferenceColorRepository::class)]
class ReferenceColor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $color_code = null;

    #[ORM\Column(nullable: true)]
    private ?int $r = null;

    #[ORM\Column(nullable: true)]
    private ?int $g = null;

    #[ORM\Column(nullable: true)]
    private ?int $b = null;

    #[ORM\Column(nullable: true)]
    private ?bool $active = null;

    #[ORM\Column]
    private ?int $hMin = null;

    #[ORM\Column]
    private ?int $hMax = null;

    #[ORM\Column]
    private ?int $sMin = null;

    #[ORM\Column]
    private ?int $sMax = null;

    #[ORM\Column]
    private ?int $lMin = null;

    #[ORM\Column]
    private ?int $lMax = null;

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

    public function getColorCode(): ?string
    {
        return $this->color_code;
    }

    public function setColorCode(?string $color_code): self
    {
        $this->color_code = $color_code;

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

    public function getHMin(): ?int
    {
        return $this->hMin;
    }

    public function setHMin(int $hMin): self
    {
        $this->hMin = $hMin;

        return $this;
    }

    public function getHMax(): ?int
    {
        return $this->hMax;
    }

    public function setHMax(int $hMax): self
    {
        $this->hMax = $hMax;

        return $this;
    }

    public function getSMin(): ?int
    {
        return $this->sMin;
    }

    public function setSMin(int $sMin): self
    {
        $this->sMin = $sMin;

        return $this;
    }

    public function getSMax(): ?int
    {
        return $this->sMax;
    }

    public function setSMax(int $sMax): self
    {
        $this->sMax = $sMax;

        return $this;
    }

    public function getLMin(): ?int
    {
        return $this->lMin;
    }

    public function setLMin(int $lMin): self
    {
        $this->lMin = $lMin;

        return $this;
    }

    public function getLMax(): ?int
    {
        return $this->lMax;
    }

    public function setLMax(int $lMax): self
    {
        $this->lMax = $lMax;

        return $this;
    }
}
