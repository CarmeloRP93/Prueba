<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReservasType extends AbstractType {
    
    private $horas;
    public function __construct(array $horas) {
        $this->horas = $horas;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        for ($i=0; $i < count($this->horas); $i++) {
            $res[$i] = array($this->horas[$i] => $this->horas[$i]);
        }
        $builder
        ->add('idCancha', 'hidden')              
        ->add('fechaInicio', 'date', array('widget' => "single_text"))
        ->add('horario', 'choice', array('choices' => $res, 'multiple' => true, 'expanded' => true))
        ->add('confirmar', 'submit', array('label' => 'Confirmar'));
//        ->add('fechaFinalizacion',  'datetime', array('date_widget' => "single_text", 'time_widget' => "choice", "minutes"=> array(0,30)))
        //->add('fechaInicio',        'datetime', array('date_widget' => "single_text", 'input' => 'datetime', 'minutes' => array(0,30)))                
                
       
             
            
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
