<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Divisions;
use App\Entity\Location;
use App\Entity\UserProfile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserExtraInfoFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // dd($this->getUser());
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserProfile::class,
        ]);
    }
}