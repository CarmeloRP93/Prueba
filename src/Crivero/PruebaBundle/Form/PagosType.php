<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PagosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idCliente', 'hidden')
            ->add('fechaPago', 'hidden')
            ->add('concepto', 'choice', array('choices' => array('Cancha' => 'Reservar cancha', 'Sesion' => 'Pagar sesion')))
            ->add('tipoPago', 'choice', array('choices' => array('Tarjeta' => 'Tarjeta', 'Paypal' => 'Paypal', 'Efectivo' => 'Efectivo')))
            ->add('cuantia', 'number')
            ->add('confirmar', 'submit', array('label' => 'Confirmar'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\Pagos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crivero_pruebabundle_pagos';
    }
}
