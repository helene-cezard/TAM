<?php
namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class DeleteFromServer {

    public function __construct(
        private ParameterBagInterface $params
    ) {
    }

    public function delete(
        string $relativePath,
        string $relativeImagePath = '',
        ): void
    {
        $file = $this->params->get('kernel.project_dir') . '/assets' . $relativePath;
        if (is_file($file)) {
            unlink($file);
        }

        if (!empty($relativeImagePath)) {
            $thumbnail = $this->params->get('kernel.project_dir') . '/assets' . $relativeImagePath;
            if (is_file($thumbnail)) {
                unlink($thumbnail);
            }
        }
    }
}