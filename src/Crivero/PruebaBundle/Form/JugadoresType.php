<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JugadoresType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    private $clientes;
    public function __construct(array $clientes) {
        $this->clientes = $clientes;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $resClientes = array(count($this->clientes)+1);
        $resClientes[0] = 'No seleccionado';
        for($i=0; $i < count($this->clientes); $i++){
            $resClientes[$i+1]= array($this->clientes[$i]->getUserName()=> $this->clientes[$i]->getNombre());
        }
        $builder
            ->add('idEquipo','hidden')
            ->add('username','choice', array('choices' => $resClientes))
            ->add('nombre','text', array('label' => 'Nombre y Apellidos'))
            ->add('dorsal','integer')
            ->add('incidencia','text')
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
            'data_class' => 'Crivero\PruebaBundle\Entity\Jugadores'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crivero_pruebabundle_jugadores';
    }
}
