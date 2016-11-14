<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TorneoController extends Controller
{
    
    var $torneos = array(

            array("matricula"=>1, "nombre"=>"Torneo 1", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2","Equipo 3")),
            array("matricula"=>2, "nombre"=>"Torneo 2", "estado"=>"Solicitud Presentada","equipos"=>array("Equipo 1", "Equipo 2","Equipo 3")),
            array("matricula"=>3, "nombre"=>"Torneo 3", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>4, "nombre"=>"Torneo 4", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>5, "nombre"=>"Torneo 5", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>6, "nombre"=>"Torneo 6", "estado"=>"Solicitud Presentada","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>7, "nombre"=>"Torneo 7", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>8, "nombre"=>"Torneo 8", "estado"=>"Solicitud Presentada","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>9, "nombre"=>"Torneo 9", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>10, "nombre"=>"Torneo 10", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2"))

        );
      
    public function torneosAction()
    {
       return $this->render('CriveroPruebaBundle:Default:torneos.html.twig', array("torneos"=>$this->torneos));
    }
    
    public function torneoAction($matricula)
    {
       return $this->render('CriveroPruebaBundle:Default:torneo.html.twig',array("torneo"=>$this->torneos[$matricula-1]));
    }
    
}