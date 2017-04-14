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
        $res = array();
        for ($i = 0; $i < count($this->horas); $i++) {
            $res[$i] = array($this->horas[$i] => $this->horas[$i]);
        }
        if ($this->horas != array('Cancelar')) {
            $builder
                    ->add('idCancha', 'hidden')
                    ->add('fechaInicio', 'date', array('widget' => "single_text"))
                    ->add('horario', 'choice', array('choices' => $res, 'multiple' => true, 'expanded' => true))
                    ->add('confirmar', 'submit', array('label' => 'Confirmar'));
        }else{
            $builder
                    ->add('motivos', 'textarea')
                    ->add('confirmar', 'submit', array('label' => 'Confirmar'));
        }
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\Reservas'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'crivero_pruebabundle_reservas';
    }

}