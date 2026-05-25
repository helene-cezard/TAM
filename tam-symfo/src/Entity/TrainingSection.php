<?php

namespace App\Entity;

use App\Repository\TrainingSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrainingSectionRepository::class)]
class TrainingSection extends Section
{
}
