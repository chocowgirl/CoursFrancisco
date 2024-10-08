<?php

namespace App\Form;

use App\Entity\Shoepair;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ShoepairType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nameBrandModel')
            ->add('startDateOfUse', null, [
                'widget' => 'single_text',
            ])
            ->add('wearLimitKm')
            ->add('currentWearKm')
            ->add('shoeNote')
            ->add('inActiveService')
            // ->add('userOwner', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'id',
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Shoepair::class,
        ]);
    }
}
