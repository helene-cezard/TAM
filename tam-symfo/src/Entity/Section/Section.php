<?php

namespace App\Entity\Section;

use App\Repository\Section\SectionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass(repositoryClass: SectionRepository::class)]
abstract class Section
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $text = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $aside = null;

    #[ORM\Column]
    private ?int $position = null;

    #[ORM\Column]
    private ?bool $left_side = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getAside(): ?string
    {
        return $this->aside;
    }

    public function setAside(string $aside): static
    {
        $this->aside = $aside;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function isLeftSide(): ?bool
    {
        return $this->left_side;
    }

    public function setLeftSide(bool $appears): static
    {
        $this->left_side = $appears;

        return $this;
    }
}
