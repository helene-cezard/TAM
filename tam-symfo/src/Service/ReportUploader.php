<?php
namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Process\Process;
use Symfony\Component\String\Slugger\SluggerInterface;

class ReportUploader
{
    public function __construct(
        private SluggerInterface $slugger,

        #[Autowire('%uploaded_reports_directory%')]
        private string $reportsDirectory,
    ) {
    }

    public function upload(UploadedFile $report): array
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

        $thumbnailFilename = str_replace(
            '.pdf',
            '-thumbnail',
            $newFilename
        );

        $pdfPath = $this->reportsDirectory.'/'.$newFilename;
        $thumbnailBasePath = $this->reportsDirectory.'/'.$thumbnailFilename;

        // Génération du JPG à partir de la première page
        $process = new Process([
            'pdftoppm',
            '-jpeg',
            '-f', '1',
            '-singlefile',
            $pdfPath,
            $thumbnailBasePath,
        ]);

    $process->mustRun();

        return [
            'pdf' => $newFilename,
            'thumbnail' => $thumbnailFilename.'.jpg',
        ];
    }
}