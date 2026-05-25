<?php

namespace App\Entity;

use App\Repository\HomeSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HomeSectionRepository::class)]
class HomeSection extends Section
{
}
