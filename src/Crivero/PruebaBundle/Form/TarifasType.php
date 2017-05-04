<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class tarifasType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('entrenamiento', 'text', array('label' => 'Entrenamiento'))
                ->add('deportiva', 'text', array('label' => 'Deportiva'))
                ->add('privada', 'text', array('label' => 'Privada'))
                ->add('confirmar', 'submit', array('label' => 'Confirmar'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\tarifas'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'crivero_pruebabundle_tarifas';
    }

}
