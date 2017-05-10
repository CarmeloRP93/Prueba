<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompeticionesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text')
            ->add('deporte','choice', array('choices' => array("Fútbol"=>'Fútbol', 
                                                               "Padel"=>'Padel')))
            ->add('tipocompeticion','choice', array('choices' => array("Liga"=>'Liga', "Torneo"=>'Torneo'), 'label' => 'Tipo'))
            ->add('fechainicio','date', array('widget' => "single_text", 'label' => 'Fecha de inicio'))
            ->add('fechafinalizacion','date', array('widget' => "single_text", 'label' => 'Fecha de finalización'))
            ->add('estadocompeticion','choice',array('choices' => array("Validado"=>'Validado',
                                                                "Jugandose"=>'Jugándose',
                                                                "Pendiente"=>'Pendiente',
                                                                "Rechazado"=>'Rechazado',
                                                                "Cancelado"=>'Cancelado',
                                                                "Finalizado"=>'Finalizado'), 'label' => 'Estado'))
            ->add('confirmar', 'submit', array('label' => 'Confirmar'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\Competiciones'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crivero_pruebabundle_competiciones';
    }
}
