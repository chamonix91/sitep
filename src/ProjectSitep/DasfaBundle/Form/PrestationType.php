<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 24/04/2018
 * Time: 14:47
 */

namespace ProjectSitep\DasfaBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PrestationType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('prestataire')
            ->add('code')
            ->add('enfants', ChoiceType::class, array(
                'choices' => array('00' => '0',
                    '01' => '1',
                    '02' => '2',
                    '03' => '3',
                    '04' => '4',
                    '05' => '5',
                    '06' => '6',
                    '07' => '7',
                    '08' => '8',
                    '09' => '9',
                    '10' => '10',
                ),
            ));
    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectSitep\DasfaBundle\Entity\Prestation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectsitep_dasfabundle_prestation';
    }



}