<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SesionesType extends AbstractType
{
    private $aulas;
    public function __construct(array $aulas) {
        $this->aulas = $aulas;
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        for($i=0; $i < count($this->aulas); $i++){
            $res[$i]= array($this->aulas[$i]->getId() => $this->aulas[$i]->getNombre());
        }
        if($this->aulas != array()){
            
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
                    ->add('aula', 'choice', array('choices' => $res, 'expanded' => true))
                    ->add('dias', 'choice', array('choices' => array('Monday' => 'Lunes', 'Tuesday' => 'Martes', 'Wednesday' => 'Miercoles'
                            , 'Thursday' => 'Jueves', 'Friday' => 'Viernes'), 'expanded' => true, 'multiple' => true))
                    ->add('confirmar', 'submit', array('label' => 'Confirmar'))
            ;
        }else{
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
