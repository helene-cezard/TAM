<?php

namespace App\Service;

use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;

class ImageResizer
{
    public function resize(string $filePath, int $maxSize = 1600): void
    {
        $imagine = new Imagine();

        $image = $imagine->open($filePath);
        $size = $image->getSize();

        // Ne pas agrandir les petites images
        if (
            $size->getWidth() <= $maxSize &&
            $size->getHeight() <= $maxSize
        ) {
            return;
        }

        $image
            ->thumbnail(
                new Box($maxSize, $maxSize),
                ImageInterface::THUMBNAIL_INSET
            )
            ->save(
                $filePath,
                [
                    'jpeg_quality' => 85,
                ]
            );
    }
}