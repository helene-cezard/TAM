<?php

namespace App\Entity\Section;

use App\Repository\Section\TeamSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamSectionRepository::class)]
class TeamSection extends Section
{
}
