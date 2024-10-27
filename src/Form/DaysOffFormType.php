<?php

namespace App\Form;

use App\Entity\DaysOff;
use App\Entity\Location;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DaysOffFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $userLocation = $options['user_location'];
        $builder
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('description')
            ->add('location', EntityType::class, [
                'class' => Location::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a location',
                'required' => true,
                'query_builder' => function (EntityRepository $er) use ($userLocation) {
                    return $er->createQueryBuilder('l')
                        ->where('l.id = :userLocation')
                        ->setParameter('userLocation', $userLocation);
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DaysOff::class,
            'user_location' => null,
        ]);
    }
}
