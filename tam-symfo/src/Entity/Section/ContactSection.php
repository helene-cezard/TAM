<?php

namespace App\Entity\Section;

use App\Repository\Section\ContactSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactSectionRepository::class)]
class ContactSection extends Section
{
}
