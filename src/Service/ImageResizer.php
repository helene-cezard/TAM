<?php

namespace App\Service;

use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;

class ImageResizer
{
    public function resize(string $filePath, int $maxSize = 1600): void
    {
        $this->fixOrientation($filePath);

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

    private function fixOrientation(string $filePath): void
    {
        if (!function_exists('exif_read_data')) {
            return;
        }

        $exif = @exif_read_data($filePath);

        if (!$exif || empty($exif['Orientation'])) {
            return;
        }

        $image = (new Imagine())->open($filePath);

        switch ($exif['Orientation']) {
            case 3:
                $image = $image->rotate(180);
                break;

            case 6:
                $image = $image->rotate(-90);
                break;

            case 8:
                $image = $image->rotate(90);
                break;

            default:
                return;
        }

        $image->save($filePath, [
            'jpeg_quality' => 100,
        ]);
    }
}