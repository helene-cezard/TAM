<?php

namespace App\Entity\Section;

use App\Repository\Section\EulogySectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EulogySectionRepository::class)]
class EulogySection extends Section
{
}
