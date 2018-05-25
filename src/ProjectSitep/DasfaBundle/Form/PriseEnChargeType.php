<?php

namespace ProjectSitep\DasfaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PriseEnChargeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('num_pc')
            ->add('date_pc', DateType::class)
            ->add('bs')
            ->add('facture', FactureType::class)
        ->add('appure', ChoiceType::class, array(
        'choices' => array('Oui' => 'apuré',
            'Non' => 'non apuré',

        ),

    ))
            ->add('numTrStar')
            ->add('dateTrStar', DateType::class)
            ->add('numRmStar')
            ->add('dateRmStar', DateType::class)
            ->add('montanRemb')
            ->add('recStar')
            ->add('ciApur', DateType::class)
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectSitep\DasfaBundle\Entity\PriseEnCharge'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectsitep_dasfabundle_priseencharge';
    }


}
