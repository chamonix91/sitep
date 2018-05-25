<?php

namespace ProjectSitep\DasfaBundle\Form;

use Doctrine\DBAL\Types\TimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BulletinSoinType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('agent', AgentType::class)
            ->add('num_bord')
            ->add('lieuTravail', ChoiceType::class, array(
                'choices' => array('Siège' => 'Siège',
                    'El Borma' => 'El Borma',
                    'Autres' => 'Autres',

                ),
            ))
            ->add('date_bord',DateType::class)
            ->add('typeBord', ChoiceType::class, array(
                'choices' => array('Normal' => 'Normal',
                    'Spécial' => 'Spécial',
                    'Prise en charge' => 'Prise en charge',

                ),
            ))
            ->add('num_bulletin')
            ->add('observation')
            ->add('prestation', PrestationType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectSitep\DasfaBundle\Entity\BulletinSoin'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectsitep_dasfabundle_bulletinsoin';
    }


}
