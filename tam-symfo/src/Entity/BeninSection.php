<?php

namespace App\Entity;

use App\Repository\BeninSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BeninSectionRepository::class)]
class BeninSection extends Section
{
}
