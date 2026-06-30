<?php

namespace App\Entity;

use App\Repository\CarouselImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarouselImageRepository::class)]
class CarouselImage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $position = null;

    #[ORM\OneToOne(cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?GalleryImage $GalleryImage = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getGalleryImage(): ?GalleryImage
    {
        return $this->GalleryImage;
    }

    public function setGalleryImage(?GalleryImage $GalleryImage): static
    {
        $this->GalleryImage = $GalleryImage;

        return $this;
    }
}
