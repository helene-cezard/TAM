<?php

namespace App\Entity;

use App\Repository\TeamSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamSectionRepository::class)]
class TeamSection extends Section
{
}
