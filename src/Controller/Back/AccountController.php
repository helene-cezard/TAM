<?php

namespace App\Controller\Back;

use App\Entity\User;
use App\Form\AccountType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class AccountController extends AbstractController
{
    #[Route('/admin/user/update/{id}', name: 'admin_user_update')]
    public function index(
        User $user,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        Request $request
        ): Response
    {
        $returnRoute = $request->query->get('returnRoute');
        // dump(array_last(explode('/', $returnRoute)));
        $returnRouteEnd = array_last(explode('/', $returnRoute));
        // dd($returnRouteEnd);
        $form = $this->createForm(AccountType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $form->get('plainPassword')->getData();

            if (!empty($plainPassword)) {
                $user->setPassword(
                    $userPasswordHasher->hashPassword($user, $plainPassword)
                );
            }

            $entityManager->flush();

            $this->addFlash('success', 'Le profil administrateur a bien été modifié.');

            return $this->redirect($returnRoute ?: $this->generateUrl('admin_home'));
        }

        return $this->render('back/account/update.html.twig', [
            'form' => $form,
        ]);
    }
}
