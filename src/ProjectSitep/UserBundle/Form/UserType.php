<?php

namespace ProjectSitep\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add('prenom')
            ->add('tel')
            ->add('code')
            ->add('roles', ChoiceType::class, array('label' => 'Type ', 'choices' => array(' DASFA' => 'ROLE_DASFA', 'DFIN' => 'ROLE_DFIN', 'DRH' => 'ROLE_DRH', 'Admin' => 'ROLE_ADMIN'), 'required' => true, 'multiple' => true,))
        ;
    }


/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectSitep\UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectsitep_userbundle_user';
    }


}
