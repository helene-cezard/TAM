<?php

namespace App\Entity\Section;

use App\Repository\Section\HomeSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HomeSectionRepository::class)]
class HomeSection extends Section
{
}
