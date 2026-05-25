<?php

namespace App\Twig;

use App\Repository\ContactInfoRepository;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class AppGlobalExtension extends AbstractExtension implements GlobalsInterface
{
    public function __construct(
        private ContactInfoRepository $repository
    ) {}

    public function getGlobals(): array
    {
        return [
            'contactInfo' => $this->repository->findOneBy([]),
        ];
    }
}