<?php
namespace App\Service;

use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class SubmitPartner
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private FileUploader $fileUploader,
        private ImageResizer $imageResizer,

        #[Autowire('%uploaded_logos_directory%')]
        private string $logosDirectory,
        )
    {
        $this->entityManager = $entityManager;
        $this->fileUploader = $fileUploader;
        $this->logosDirectory = $logosDirectory;
        $this->imageResizer = $imageResizer;
    }

    public function handle(
        FormInterface $partnerForm,
        Request $request,
        $repository
        ): bool
    {
        $partnerForm->handleRequest($request);

        if ($partnerForm->isSubmitted() && $partnerForm->isValid()) {
            $partner = $partnerForm->getData();
            $logo = $partnerForm->get('uploadLogo')->getData();

            $newFilename = $this->fileUploader->upload(
                $logo,
                $this->logosDirectory
            );

            $this->imageResizer->resize(
                $this->logosDirectory.'/'.$newFilename,
                400
            );


            $partner->setImage('/images/partnerLogos/' . $newFilename);
            $partner->setPosition(count(($repository->findAll())) + 1);

            $this->entityManager->persist($partner);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }
}