<?php

namespace App\Entity\Section;

use App\Repository\Section\ReportsSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReportsSectionRepository::class)]
class ReportsSection extends Section
{
}
