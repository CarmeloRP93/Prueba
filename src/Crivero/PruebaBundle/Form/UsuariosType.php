<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuariosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text', array('label' => 'Nombre de usuario'))
            ->add('nombre', 'text', array('label' => 'Nombre y Apellidos'))
            ->add('email', 'email')
            ->add('password', 'password')
            ->add('telefono', 'text', array('label' => 'Teléfono'))
            ->add('tipo', 'choice', array('choices' => array(2 => 'Cliente', 3 => 'Monitor', 1 => 'Administrador'), 
                                          'label' => 'Rol'))
            ->add('fNacimiento', 'text', array('label' => 'Fecha nacimiento'))
            ->add('imagen', 'file',  array('data_class' => null))
            ->add('confirmar', 'submit', array('label' => 'Confirmar'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\Usuarios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'usuario';
    }
}
