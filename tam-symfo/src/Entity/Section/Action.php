<?php

namespace App\Entity\Section;

use App\Repository\Section\ActionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActionRepository::class)]
class Action extends Section
{
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $html_id = null;

    public function getHtmlId(): ?string
    {
        return $this->html_id;
    }

    public function setHtmlId(?string $html_id): static
    {
        $this->html_id = $html_id;

        return $this;
    }
}
