<?php

namespace App\Entity\Section;

use App\Repository\Section\FranceSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FranceSectionRepository::class)]
class FranceSection extends Section
{
}
