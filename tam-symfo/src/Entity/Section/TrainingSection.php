<?php

namespace App\Entity\Section;

use App\Repository\Section\TrainingSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrainingSectionRepository::class)]
class TrainingSection extends Section
{
}
