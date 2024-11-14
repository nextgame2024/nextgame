<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Location;
use App\Entity\Divisions;
use App\Entity\UserProfile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserExtraInfoFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('phone')
            ->add('dateOfBirth', null, [
                'widget' => 'single_text',
            ])
            ->add('division', EntityType::class, [
                'class' => Divisions::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a division',
                'required' => false,
            ])
            ->add('rating')
            ->add('location', EntityType::class, [
                'class' => Location::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a location',
                'required' => false,
            ])
            ->add('ratingCentralId')
            ->add('registered', ChoiceType::class, [
                'label' => 'Registered (Ratings Central)',
                'choices' => [
                    'Yes' => 'Y',
                    'No' => 'N'
                ],
                'placeholder' => 'Choose a state',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserProfile::class,
        ]);
    }
}
