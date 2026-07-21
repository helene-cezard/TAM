<?php

namespace App\Entity\Section;

use App\Repository\Section\LegalSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LegalSectionRepository::class)]
class LegalSection extends Section
{
}
