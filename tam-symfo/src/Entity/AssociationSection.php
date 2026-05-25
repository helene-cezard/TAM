<?php

namespace App\Entity;

use App\Repository\AssociationSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssociationSectionRepository::class)]
class AssociationSection extends Section
{
}
