<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    var $sesiones = array(
            array("matricula"=>1, "nombre"=>"Carmelo Rivero", "estado"=>"completo", "rutinas"=>array("rutina 1", "rutina 2","rutina 3")),
            array("matricula"=>2, "nombre"=>"Joshua Almeida", "estado"=>"Disponible"),
            array("matricula"=>3, "nombre"=>"Eduardo Mendoza", "estado"=>"Disponible"),
            array("matricula"=>4, "nombre"=>"Pablo Exposito", "estado"=>"Apuntado"),
            array("matricula"=>5, "nombre"=>"Pedro Ramirez", "estado"=>"completo"),
            array("matricula"=>6, "nombre"=>"Suleima Sanchez", "estado"=>"Apuntado"),
            array("matricula"=>7, "nombre"=>"Claudia Lopez", "estado"=>"completo"),
            array("matricula"=>8, "nombre"=>"Andrea Quintana", "estado"=>"Apuntado"),
            array("matricula"=>9, "nombre"=>"Daniel Suarez", "estado"=>"Disponible"),
            array("matricula"=>10, "nombre"=>"Victoria Gonzalez", "estado"=>"Apuntado")
        );
    public function homeMonitoresAction()
    {
       return $this->render('modulomonitoresmonitoresBundle:Default:homeMonitores.html.twig');
    }
    public function sesionesMonitoresAction()
    {
       return $this->render('modulomonitoresmonitoresBundle:Default:sesionesMonitores.html.twig', array("sesiones"=>$this->sesiones));
    }
    public function sesionMonitoresAction($matricula)
    {
       return $this->render('modulomonitoresmonitoresBundle:Default:sesionMonitores.html.twig', array("sesion"=>$this->sesiones[$matricula-1]));
    }
}
