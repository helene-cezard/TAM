<?php

namespace App\Entity\Section;

use App\Repository\Section\ResourcesSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResourcesSectionRepository::class)]
class ResourcesSection extends Section
{
}
