<?php

namespace App\Form;

use App\Entity\Games;
use App\Entity\Table;
use App\Entity\Teams;
use App\Entity\Location;
use App\Entity\Divisions;
use App\Entity\TableType;
use App\Entity\Tournament;
use App\Entity\UserProfile;
use App\Entity\TournamentType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GameFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $userLocation = $options['user_location'];

        $builder
            ->add('tournament', EntityType::class, [
                'class' => Tournament::class,
                'choice_label' => function (Tournament $tournament) {
                    return $tournament->getTournamentType()->getName();
                },
                'placeholder' => 'Choose a tournament',
                'required' => true,
                'query_builder' => function (EntityRepository $er) use ($userLocation) {
                    return $er->createQueryBuilder('t')
                        ->join('t.tournament_type', 'tt')  // Make sure this is the correct field name
                        ->where('t.location = :userLocation')
                        ->setParameter('userLocation', $userLocation);
                },
            ])
            ->add('game_type', ChoiceType::class, [
                'label' => 'Game Type',
                'choices' => [
                    'Singles' => 'Singles',
                    'Doubles' => 'Doubles'
                ],
                'placeholder' => 'Choose a game type',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Pending' => 'Pending',
                ],
                'placeholder' => 'Choose a status',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('game_date', null, [
                'widget' => 'single_text',
            ])
            ->add('round')
            ->add('team', EntityType::class, [
                'class' => Teams::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a team',
                'required' => true,
                'query_builder' => function (EntityRepository $er) use ($userLocation) {
                    return $er->createQueryBuilder('d')
                        ->join('d.torneo', 'l')
                        ->where('l.location = :userLocation')
                        ->setParameter('userLocation', $userLocation);
                },
            ])
            ->add('team2', EntityType::class, [
                'class' => Teams::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a team',
                'required' => true,
                'query_builder' => function (EntityRepository $er) use ($userLocation) {
                    return $er->createQueryBuilder('d')
                        ->join('d.torneo', 'l')
                        ->where('l.id = :userLocation')
                        ->setParameter('userLocation', $userLocation);
                },
            ])
            ->add('table_number', EntityType::class, [
                'class' => TableType::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a table',
                'required' => true,
                'query_builder' => function (EntityRepository $er) use ($userLocation) {
                    return $er->createQueryBuilder('d')
                        ->join('d.location', 'l')
                        ->where('l.id = :userLocation')
                        ->setParameter('userLocation', $userLocation);
                },
            ])
            ->add('player_one', EntityType::class, [
                'class' => UserProfile::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a player',
                'required' => true,
                'query_builder' => function (EntityRepository $er) use ($userLocation) {
                    return $er->createQueryBuilder('up')
                        ->where('up.location = :userLocation')
                        ->setParameter('userLocation', $userLocation);
                },
            ])
            ->add('player_two', EntityType::class, [
                'class' => UserProfile::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a player',
                'required' => true,
                'query_builder' => function (EntityRepository $er) use ($userLocation) {
                    return $er->createQueryBuilder('up')
                        ->where('up.location = :userLocation')
                        ->setParameter('userLocation', $userLocation);
                },
            ])
            ->add('player_three', EntityType::class, [
                'class' => UserProfile::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a player',
                'required' => false,
                'query_builder' => function (EntityRepository $er) use ($userLocation) {
                    return $er->createQueryBuilder('up')
                        ->where('up.location = :userLocation')
                        ->setParameter('userLocation', $userLocation);
                },
            ])
            ->add('player_four', EntityType::class, [
                'class' => UserProfile::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a player',
                'required' => false,
                'query_builder' => function (EntityRepository $er) use ($userLocation) {
                    return $er->createQueryBuilder('up')
                        ->where('up.location = :userLocation')
                        ->setParameter('userLocation', $userLocation);
                },
            ])
            ->add('division', EntityType::class, [
                'class' => Divisions::class,
                'choice_label' => 'name',
                'placeholder' => 'Choose a division',
                'required' => true,
                'query_builder' => function (EntityRepository $er) use ($userLocation) {
                    return $er->createQueryBuilder('d')
                        ->join('d.location', 'l')
                        ->where('l.id = :userLocation')
                        ->setParameter('userLocation', $userLocation);
                },
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
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Games::class,
            'user_location' => null,
        ]);
    }
}
