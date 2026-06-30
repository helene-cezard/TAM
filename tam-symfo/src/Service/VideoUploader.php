<?php
namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Process\Process;
use Symfony\Component\String\Slugger\SluggerInterface;

class VideoUploader
{
    public function __construct(
        private SluggerInterface $slugger,

        #[Autowire('%uploaded_videos_directory%')]
        private string $reportsDirectory,
    ) {
    }

    public function upload(UploadedFile $report): string
    {
        $originalFilename = pathinfo(
            $report->getClientOriginalName(),
            PATHINFO_FILENAME
        );

        $safeFilename = $this->slugger->slug($originalFilename);

        $newFilename = sprintf(
            '%s-%s.%s',
            $safeFilename,
            uniqid(),
            $report->guessExtension()
        );

        try {
            $report->move(
                $this->reportsDirectory,
                $newFilename
            );
        } catch (FileException $e) {
            throw $e;
        }

        $videoPath = $newFilename;


        return $videoPath;
    }
}