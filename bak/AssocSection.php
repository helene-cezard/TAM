<?php

namespace App\Entity;

use App\Repository\AssocSectionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssocSectionRepository::class)]
class AssocSection
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
    private ?bool $aside_left = null;

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

    public function setAside(?string $aside): static
    {
        $this->aside = $aside;

        return $this;
    }

    public function isAsideLeft(): ?bool
    {
        return $this->aside_left;
    }

    public function setAsideLeft(bool $aside_left): static
    {
        $this->aside_left = $aside_left;

        return $this;
    }
}
