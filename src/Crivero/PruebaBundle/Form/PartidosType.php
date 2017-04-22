<?php

namespace Crivero\PruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PartidosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idCompeticion')
            ->add('idEquipoLocal')
            ->add('idEquipoVisitante')
            ->add('idCancha')
            ->add('fechaInicio','date', array('widget' => "single_text"))
            ->add('resultado','text')
            ->add('estadoPartido','choice',array('choices' => array("Pendiente"=>'Pendiente',
                                                                    "Jugandose"=>'Jugandose',
                                                                    "Cancelado"=>'Cancelado',
                                                                    "Finalizado"=>'Finalizado')))
            ->add('arbitro','text')
            ->add('confirmar', 'submit', array('label' => 'Confirmar'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crivero\PruebaBundle\Entity\Partidos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crivero_pruebabundle_partidos';
    }
}
