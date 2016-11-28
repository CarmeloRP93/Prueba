<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TorneoController extends Controller
{
    var $torneos = array(
            array("matricula"=>1, "nombre"=>"Torneo 1", "estado"=>"Disponible","equipos"=>array("Equipo 1", "Equipo 2","Equipo 3")),
            array("matricula"=>2, "nombre"=>"Torneo 2", "estado"=>"Disponible","equipos"=>array("Equipo 1","Equipo 3")),
            array("matricula"=>3, "nombre"=>"Torneo 3", "estado"=>"Finalizado","equipos"=>array("Equipo 1","Equipo 3")),
            array("matricula"=>4, "nombre"=>"Torneo 4", "estado"=>"Finalizado","equipos"=>array("Equipo 2","Equipo 3")),
            array("matricula"=>5, "nombre"=>"Torneo 5", "estado"=>"Inscripcion","equipos"=>array("Equipo 1", "Equipo 2","Equipo 3")),
            array("matricula"=>6, "nombre"=>"Torneo 6", "estado"=>"Disponible","equipos"=>array("Equipo 1","Equipo 3"))
        );
    
    public function torneosClientesAction()
    {
       return $this->render('moduloclientesclienteBundle:Default:torneosClientes.html.twig', array("torneos"=>$this->torneos));
    }
    public function torneoClientesAction($matricula)
    {
       return $this->render('moduloclientesclienteBundle:Default:torneoClientes.html.twig', array("torneo"=>$this->torneos[$matricula-1]));
    }
  
}
