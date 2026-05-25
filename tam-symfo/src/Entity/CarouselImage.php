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

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?GalleryImage $gallery_id = null;

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

    public function getGalleryId(): ?GalleryImage
    {
        return $this->gallery_id;
    }

    public function setGalleryId(GalleryImage $gallery_id): static
    {
        $this->gallery_id = $gallery_id;

        return $this;
    }
}
