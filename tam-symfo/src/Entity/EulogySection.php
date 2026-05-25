<?php

namespace App\Entity;

use App\Repository\EulogySectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EulogySectionRepository::class)]
class EulogySection extends Section
{
}
