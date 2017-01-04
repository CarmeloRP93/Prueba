<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Crivero\PruebaBundle\Entity\Canchas;

class ReservasType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
        ->add('idCancha', 'hidden')              
        ->add('fechaInicio',        'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
        ->add('fechaFinalizacion',  'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
        ->add('confirmar', 'submit', array('label' => 'Confirmar'))
        //->add('fechaInicio',        'datetime', array('date_widget' => "single_text", 'input' => 'datetime', 'minutes' => array(0,30)))                
                ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\Reservas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crivero_pruebabundle_reservas';
    }
}
