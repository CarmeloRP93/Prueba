<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AulasType extends AbstractType {
    
    private $opciones = false;
    public function __construct($id) {
         switch ($id) {
             case 1:
                 $this->opciones = array('aula1-1.jpg'=>'Aula 1-1', 'aula1-2.jpg'=>'Aula 1-2');
             break;
         
             case 2:
                 $this->opciones = array('aula2-1.jpg'=>'Aula 2-1', 'aula2-2.jpg'=>'Aula 2-2');
             break;
         
             case 3:
                 $this->opciones = array('aula3-1.jpg'=>'Aula 3-1', 'aula3-2.jpg'=>'Aula 3-2');
             break;
         }
     }
     
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('imagen', 'choice', array('choices' => $this->opciones))
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
