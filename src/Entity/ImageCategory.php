<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\ImageCategoryRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

#[UniqueEntity(
    fields: ['title'],
    message: 'Une catégorie portant ce nom existe déjà.'
)]
#[ORM\Entity(repositoryClass: ImageCategoryRepository::class)]
class ImageCategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\OneToMany(
        mappedBy: 'category',
        targetEntity: GalleryImage::class
    )]
    private Collection $galleryImages;

    #[ORM\Column]
    private ?int $position = null;

    public function __construct()
    {
        $this->galleryImages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getGalleryImages(): Collection
    {
        return $this->galleryImages;
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
}
