<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AulasType extends AbstractType {
    
    private $opciones = false;
    public function __construct() {
    }
     
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text')
            ->add('horario', 'text')
            ->add('disponibilidad', 'choice', array('choices' => array("Disponible" => 'Disponible', 
                                                                       "No disponible" => 'No disponible')))
            ->add('imagen', 'file', array('data_class' => null))
            ->add('confirmar', 'submit', array('label' => 'Confirmar'));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\Aulas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crivero_pruebabundle_aulas';
    }
}
