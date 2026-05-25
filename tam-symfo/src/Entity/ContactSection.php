<?php

namespace App\Entity;

use App\Repository\ContactSectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactSectionRepository::class)]
class ContactSection extends Section
{
}
