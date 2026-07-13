<?php

namespace App\Entity\Section;

use App\Repository\Section\ActionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActionRepository::class)]
class Action extends Section
{
}
