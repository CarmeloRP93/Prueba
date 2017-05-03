<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SesionesType extends AbstractType {

    private $reciento;
    private $flag;

    public function __construct(array $reciento, $flag) {
        $this->reciento = $reciento;
        $this->flag = $flag;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        for ($i = 0; $i < count($this->reciento); $i++) {
            if ($this->flag) {
                $resRecinto[$i] = array($this->reciento[$i]->getId() => $this->reciento[$i]->getNombre());
            } else {
                $resRecinto[$i] = array($this->reciento[$i]->getId() => $this->reciento[$i]->getTipo());
            }
        }
        if ($this->flag) {

            $builder
                    ->add('cliente', 'text')
                    ->add('nombre', 'text')
                    ->add('imagen', 'text')
                    ->add('ejercicios', 'textarea')
                    ->add('repeticiones', 'integer')
                    ->add('duracion', 'integer')
                    ->add('descanso', 'integer')
                    ->add('lClientes', 'integer')
                    ->add('nSesiones', 'integer')
                    ->add('fechaInicio', 'date', array('widget' => "single_text"))
                    ->add('objetivo', 'textarea')
                    ->add('observaciones', 'textarea', array('label' => 'Motivos',
                        'attr' => array('cols' => '5', 'rows' => '5')))
                    ->add('aula', 'choice', array('choices' => $resRecinto, 'expanded' => true))
                    ->add('dias', 'choice', array('choices' => array('Monday' => 'Lunes', 'Tuesday' => 'Martes', 'Wednesday' => 'Miercoles'
                            , 'Thursday' => 'Jueves', 'Friday' => 'Viernes'), 'expanded' => true, 'multiple' => true))
                    ->add('horaComienzo', 'choice', array('choices' => array(1 => '9:00', 2 => '10:00', 3 => '11:00', 4 => '12:00',
                            5 => '16:00', 6 => '17:00', 7 => '18:00', 8 => '19:00', 9 => '20:00', 10 => '21:00')))
                    ->add('confirmar', 'submit', array('label' => 'Confirmar'))
            ;
        } elseif (!$this->flag) {

            $builder
                    ->add('cliente', 'text')
                    ->add('nombre', 'text')
                    ->add('imagen', 'text')
                    ->add('ejercicios', 'textarea')
                    ->add('repeticiones', 'integer')
                    ->add('duracion', 'integer')
                    ->add('descanso', 'integer')
                    ->add('lClientes', 'integer')
                    ->add('nSesiones', 'integer')
                    ->add('fechaInicio', 'date', array('widget' => "single_text"))
                    ->add('objetivo', 'textarea')
                    ->add('observaciones', 'textarea', array('label' => 'Motivos',
                        'attr' => array('cols' => '5', 'rows' => '5')))
                    ->add('cancha', 'choice', array('choices' => $resRecinto, 'expanded' => true))
                    ->add('dias', 'choice', array('choices' => array('Monday' => 'Lunes', 'Tuesday' => 'Martes', 'Wednesday' => 'Miercoles'
                            , 'Thursday' => 'Jueves', 'Friday' => 'Viernes'), 'expanded' => true, 'multiple' => true))
                    ->add('horaComienzo', 'choice', array('choices' => array(1 => '9:00', 2 => '10:00', 3 => '11:00', 4 => '12:00',
                        5 => '13:00', 6 => '14:00', 7 => '15:00', 8 => '16:00', 9 => '17:00', 10 => '18:00'
                        , 11 => '19:00', 12 => '20:00', 13 => '21:00')))
                    ->add('confirmar', 'submit', array('label' => 'Confirmar'))
            ;
        } else {
            $builder
                    ->add('observaciones', 'textarea', array('label' => 'Motivos',
                        'attr' => array('cols' => '5', 'rows' => '5')))
                    ->add('confirmar', 'submit', array('label' => 'Confirmar'))
            ;
        }
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\Sesiones'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'sesion';
    }

}
