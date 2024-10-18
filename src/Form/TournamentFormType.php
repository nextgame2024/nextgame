<?php

namespace App\Form;

use App\Entity\Location;
use App\Entity\Tournament;
use App\Entity\TournamentType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class TournamentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $userLocation = $options['user_location'];

        $builder
            ->add('tournament_type', EntityType::class, [
                'class' => TournamentType::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a tournament type',
                'required' => true,
                'query_builder' => function (EntityRepository $er) use ($userLocation) {
                    return $er->createQueryBuilder('t')
                        ->where('t.location = :userLocation')
                        ->setParameter('userLocation', $userLocation);
                },
            ])
            ->add('start_day', null, [
                'widget' => 'single_text',
                'required' => true,
            ])
            ->add('end_day', null, [
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('number_of_tables', IntegerType::class, [
                'required' => false,
            ])
            ->add('status', TextType::class, [
                'required' => true,
                'data' => 'Open',
                'attr' => [
                    'readonly' => true,
                ],
            ])
            ->add('hour', TimeType::class, [
                'widget' => 'single_text',
                'required' => true,
            ])
            ->add('players', IntegerType::class, [
                'required' => true,
            ])
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
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tournament::class,
            'user_location' => null,
        ]);
    }
}
