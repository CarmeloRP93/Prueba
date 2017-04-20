<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ValoracionesType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('idCliente', 'hidden')
                ->add('idCancha', 'hidden')
                ->add('puntuacion', 'choice', array('choices' => array(1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5')))
                ->add('enviar', 'submit', array('label' => 'Enviar valoracion'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\Valoraciones'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'crivero_pruebabundle_valoraciones';
    }

}