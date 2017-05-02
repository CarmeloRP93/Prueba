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
            ->add('idConcepto', 'hidden')
            ->add('concepto', 'hidden')
            ->add('cuantia', 'hidden')
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
