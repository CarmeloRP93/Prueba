<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CanchasType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipo', 'text', array('label' => 'Nombre'))
            ->add('deporte', 'choice', array('choices' => array("Fútbol" => 'Fútbol', 
                                                                "Baloncesto" => 'Baloncesto',
                                                                "Tenis" => 'Tenis',    
                                                                "Padel" => 'Padel')))
            ->add('disponibilidad', 'choice', array('choices' => array("Disponible" => 'Disponible', 
                                                                       "No disponible" => 'No disponible')))
            ->add('direccion', 'text', array('label' => 'Dirección (recinto u otra)'))
            ->add('dimensiones', 'integer', array('label' => 'Dimensiones (m²)'))
            ->add('precio', 'text', array('label' => 'Precio (€)'))
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
            'data_class' => 'Crivero\PruebaBundle\Entity\Canchas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crivero_pruebabundle_canchas';
    }
}
