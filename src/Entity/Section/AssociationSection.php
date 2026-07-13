<?php

namespace App\Entity\Section;

use App\Repository\Section\AssociationSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssociationSectionRepository::class)]
class AssociationSection extends Section
{
}
