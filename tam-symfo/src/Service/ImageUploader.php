<?php
namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class ImageUploader
{
    public function __construct(
        private SluggerInterface $slugger,

        #[Autowire('%uploaded_images_directory%')]
        private string $imagesDirectory,
    ) {
    }

    public function upload(UploadedFile $image): string
    {
        $originalFilename = pathinfo(
            $image->getClientOriginalName(),
            PATHINFO_FILENAME
        );

        $safeFilename = $this->slugger->slug($originalFilename);

        $newFilename = sprintf(
            '%s-%s.%s',
            $safeFilename,
            uniqid(),
            $image->guessExtension()
        );

        try {
            $image->move(
                $this->imagesDirectory,
                $newFilename
            );
        } catch (FileException $e) {
            throw $e;
        }

        return $newFilename;
    }
}