<?php
namespace App\Service;

use App\Repository\TeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Form\FormError;

class SubmitTeamMember
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private FileUploader $fileUploader,
        private DeleteFromServer $deleteFromServer,
        private TeamRepository $teamRepository,

        #[Autowire('%team_images_directory%')]
        private string $teamImagesDirectory,
        )
    {
        $this->entityManager = $entityManager;
        $this->fileUploader = $fileUploader;
        $this->deleteFromServer = $deleteFromServer;
        $this->teamRepository = $teamRepository;
    }

    public function handleImageForm(
        FormInterface $teamForm,
        Request $request
        ): bool
    {
        $oldImagePath = $teamForm->getData()?->getImage();
        $teamForm->handleRequest($request);

        if ($teamForm->isSubmitted() && $teamForm->isValid()) {
            $removeImage = $teamForm->has('removeImage')
                ? $teamForm->get('removeImage')->getData()
                : false;
            $image = $teamForm->get('uploadedImage')->getData();

            $teamMember = $teamForm->getData();

            if (
                $teamMember->getRole()->getName() === 'president'
                && $this->teamRepository->presidentExistsExcept($teamMember->getId())
            ) {
                $teamForm->get('role')->addError(
                    new FormError('Il ne peut y avoir qu\'un seul président.')
                );

                return false;
            }

            if ($oldImagePath && $image) {
                $this->deleteFromServer->delete($oldImagePath);
            }

            if($image) {
                $newFilename = $this->fileUploader->upload(
                    $image,
                    $this->teamImagesDirectory
                );
                $teamMember->setImage('/images/team/' . $newFilename);
            }

            if ($removeImage) {
                $image = $teamMember->getImage();

                if ($image) {
                    $this->deleteFromServer->delete($oldImagePath);
                    $teamMember->setImage(null);
                }
            }

            // $teamMember->setName($teamForm->get('name')->getData());
            // $teamMember->setPresentation($teamForm->get('presentation')->getData());
            // $teamMember->setRole($teamForm->get('role')->getData());

            $this->entityManager->persist($teamMember);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }
}