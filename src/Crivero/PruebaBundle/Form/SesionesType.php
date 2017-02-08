<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SesionesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cliente', 'text')
            ->add('nombre', 'text')
            ->add('imagen', 'text')
            ->add('ejercicios', 'text')
            ->add('repeticiones', 'integer')
            ->add('duracion', 'integer')
            ->add('descanso', 'integer')
            ->add('lClientes', 'integer')
            ->add('objetivo', 'textarea')
            ->add('observaciones', 'textarea')
            ->add('motivos', 'textarea')
            ->add('aula', 'choice', array('choices' => array(1 => 'Aula 01', 2 => 'Aula 02', 3 => 'Aula 03')))    
            ->add('confirmar', 'submit', array('label' => 'Confirmar'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\Sesiones'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sesion';
    }
}
