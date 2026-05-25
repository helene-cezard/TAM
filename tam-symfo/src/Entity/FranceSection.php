<?php

namespace App\Entity;

use App\Repository\FranceSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FranceSectionRepository::class)]
class FranceSection extends Section
{
}
