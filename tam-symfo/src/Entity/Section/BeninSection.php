<?php

namespace App\Entity\Section;

use App\Repository\Section\BeninSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BeninSectionRepository::class)]
class BeninSection extends Section
{
}
