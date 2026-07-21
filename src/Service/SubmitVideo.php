<?php
namespace App\Service;

use App\Entity\Video;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class SubmitVideo
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private FileUploader $fileUploader,

        #[Autowire('%uploaded_videos_directory%')]
        private string $videosDirectory,
        )
    {
        $this->entityManager = $entityManager;
        $this->fileUploader = $fileUploader;
        $this->videosDirectory = $videosDirectory;
    }

    public function handleVideoForm(
        FormInterface $videoForm,
        Request $request
        ): bool
    {
        $videoForm->handleRequest($request);

        if (!$videoForm->isSubmitted() || !$videoForm->isValid()) {
            return false;
        }

        /** @var Video $video */
        $video = $videoForm->getData();

        $uploadedVideo = $videoForm->get('uploadedVideo')->getData();

        if ($uploadedVideo) {
            $newFilename = $this->fileUploader->upload(
                $uploadedVideo,
                $this->videosDirectory
            );

            $video->setPath('videos/' . $newFilename);
            $video->setType('local');
        } else {
            $embedUrl = $this->convertYoutubeUrl($video->getPath());

            if ($embedUrl === null) {
                $videoForm->get('path')->addError(
                    new FormError('Veuillez saisir une URL YouTube valide.')
                );

                return false;
            }

            $video->setPath($embedUrl);
            $video->setType('youtube');
        }

        $this->entityManager->persist($video);
        $this->entityManager->flush();

        return true;
    }

    private function convertYoutubeUrl(string $url): ?string
    {
        $parts = parse_url($url);

        if (!isset($parts['host'])) {
            return null;
        }

        // youtube.com/watch?v=...
        if (str_contains($parts['host'], 'youtube.com')) {
            parse_str($parts['query'] ?? '', $query);

            if (!empty($query['v'])) {
                return 'https://www.youtube-nocookie.com/embed/' . $query['v'];
            }
        }

        // youtu.be/...
        if (str_contains($parts['host'], 'youtu.be')) {
            return 'https://www.youtube-nocookie.com/embed/' . ltrim($parts['path'], '/');
        }

        // youtube.com/embed/...
        if (
            str_contains($parts['host'], 'youtube.com')
            && str_starts_with($parts['path'] ?? '', '/embed/')
        ) {
            return 'https://www.youtube-nocookie.com' . $parts['path'];
        }

        return null;
    }
}