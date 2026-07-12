<?php

namespace App\Form;

use App\Entity\Video;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('path', TextType::class, [
                'label' => 'Entrer l\'adresse d\'une vidéo',
                'required' => false,
            ])
            ->add('uploadedVideo', FileType::class, [
                'label' => 'Envoyer une vidéo',
                'mapped' => false, // Ne lie pas ce champ à l'entité
                'required' => false,
                'constraints' => [
                    new Assert\Callback([$this, 'validateVideo']),
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer',
            ])
        ;
    }

    public function validateVideo($_, ExecutionContextInterface $context): void
    {
        $form = $context->getRoot();

        $url = $form->get('path')->getData();
        $file = $form->get('uploadedVideo')->getData();

        if (!$url && !$file) {
            $context->buildViolation('Vous devez fournir une URL ou envoyer une vidéo.')
                ->addViolation();
        }

        if ($url && $file) {
            $context->buildViolation('Choisissez soit une URL, soit un fichier vidéo.')
                ->addViolation();
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}
