<?php

namespace App\Service;

use App\Entity\GalleryImage;
use App\Repository\CarouselImageRepository;
use App\Repository\RubricInfoRepository;

class GalleryImageUsageChecker {

    public function __construct(
        private CarouselImageRepository $carouselRepository,
        private RubricInfoRepository $rubricRepository
    ) {
    }

    public function isUsed(GalleryImage $image): bool
    {
        return
            $this->carouselRepository->isUsed($image)
            || $this->rubricRepository->isUsed($image);
    }
}