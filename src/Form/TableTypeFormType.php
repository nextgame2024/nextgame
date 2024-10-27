<?php

namespace App\Form;

use App\Entity\Location;
use App\Entity\TableType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TableTypeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $userLocation = $options['user_location'];
        $builder
            ->add('name')
            ->add('active', ChoiceType::class, [
                'label' => 'Active',
                'choices' => [
                    'Yes' => 'Y',
                    'No' => 'N'
                ],
                'placeholder' => 'Choose a state',
                'required' => true,
                'attr' => ['class' => 'form-control']
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
            'data_class' => TableType::class,
            'user_location' => null,
        ]);
    }
}
