<?php

namespace ProjectSitep\DfinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChequeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('reliquat')
            ->add('retenu')
            ->add('benif', ChoiceType::class, array(
                'choices' => array('agent' => 'agent',
                    'prestatire' => 'prestatire',

                ),
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectSitep\DfinBundle\Entity\Cheque'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectsitep_dfinbundle_cheque';
    }


}
