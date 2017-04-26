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
    private $competiciones;
    private $equipos;
    private $canchas;
    public function __construct(array $competiciones, array $equipos, array $canchas) {
        $this->competiciones=$competiciones;
        $this->equipos = $equipos;
        $this->canchas = $canchas;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        $resCompeticiones = array();
        for($i=0; $i < count($this->competiciones); $i++){
            $resCompeticiones[$i]= array($this->competiciones[$i]->getId() => $this->competiciones[$i]->getNombre());
        }
        $resEquipos = array();
        for($i=0; $i < count($this->equipos); $i++){
            $resEquipos[$i]= array($this->equipos[$i]->getId() => $this->equipos[$i]->getNombre());
        }
        $resCanchas = array();
        for($i=0; $i < count($this->canchas); $i++){
            $resCanchas[$i]= array($this->canchas[$i]->getId() => $this->canchas[$i]->getTipo());
        }

        $builder
            ->add('idCompeticion','choice', array('choices' => $resCompeticiones))
            ->add('idEquipoLocal','choice', array('choices' => $resEquipos, 'label' => 'Equipo local'))
            ->add('idEquipoVisitante','choice', array('choices' => $resEquipos, 'label' => 'Equipo visitante'))
            ->add('idCancha','choice', array('choices' => $resCanchas, 'label' => 'Cancha'))
            ->add('fechaInicio','date', array('widget' => "single_text"))
            ->add('resultado','text')
            ->add('estadoPartido','choice',array('choices' => array("Pendiente"=>'Pendiente',
                                                                    "Jugandose"=>'Jugandose',
                                                                    "Cancelado"=>'Cancelado',
                                                                    "Finalizado"=>'Finalizado')))
            ->add('arbitro','text', array('label' => 'Árbitro'))
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
