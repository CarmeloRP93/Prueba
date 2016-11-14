<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MonitorController extends Controller
{

 var $monitores = array(
            array("matricula"=>1, "nombre"=>"Carmelo Rivero"),
            array("matricula"=>2, "nombre"=>"Joshua Almeida"),
            array("matricula"=>3, "nombre"=>"Eduardo Mendoza"),
            array("matricula"=>4, "nombre"=>"Pablo Exposito"),
            array("matricula"=>5, "nombre"=>"Pedro Ramirez"),
            array("matricula"=>6, "nombre"=>"Suleima Sanchez"),
            array("matricula"=>7, "nombre"=>"Claudia Lopez"),
            array("matricula"=>8, "nombre"=>"Andrea Quintana"),
            array("matricula"=>9, "nombre"=>"Daniel Suarez"),
            array("matricula"=>10, "nombre"=>"Victoria Gonzalez")
        );
    
    public function monitoresAction()
    {
       return $this->render('CriveroPruebaBundle:Default:monitores.html.twig', array("monitores"=>$this->monitores));
    }
    
    public function monitorAction($matricula)
    {
       return $this->render('CriveroPruebaBundle:Default:monitor.html.twig', array("monitor"=>$this->monitores[$matricula-1]));
    }
}