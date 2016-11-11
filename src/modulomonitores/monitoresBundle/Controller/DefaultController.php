<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  var $sesiones = array(
            array("matricula"=>1, "nombre"=>"Carmelo Rivero", "estado"=>"completo", "rutinas"=>array("rutina 1", "rutina 2","rutina 3")),
            array("matricula"=>2, "nombre"=>"Joshua Almeida", "estado"=>"Disponible", "rutinas"=>array("rutina 1", "rutina 2","rutina 3")),
            array("matricula"=>3, "nombre"=>"Eduardo Mendoza", "estado"=>"Disponible", "rutinas"=>array("rutina 1", "rutina 2","rutina 3")),
            array("matricula"=>4, "nombre"=>"Pablo Exposito", "estado"=>"Apuntado", "rutinas"=>array("rutina 1", "rutina 2","rutina 3")),
            array("matricula"=>5, "nombre"=>"Pedro Ramirez", "estado"=>"completo", "rutinas"=>array("rutina 1", "rutina 2","rutina 3")),
            array("matricula"=>6, "nombre"=>"Suleima Sanchez", "estado"=>"Apuntado", "rutinas"=>array("rutina 1", "rutina 2","rutina 3")),
            array("matricula"=>7, "nombre"=>"Claudia Lopez", "estado"=>"completo", "rutinas"=>array("rutina 1", "rutina 2","rutina 3")),
            array("matricula"=>8, "nombre"=>"Andrea Quintana", "estado"=>"Apuntado", "rutinas"=>array("rutina 1", "rutina 2","rutina 3")),
            array("matricula"=>9, "nombre"=>"Daniel Suarez", "estado"=>"Disponible", "rutinas"=>array("rutina 1", "rutina 2","rutina 3")),
            array("matricula"=>10, "nombre"=>"Victoria Gonzalez", "estado"=>"Apuntado", "rutinas"=>array("rutina 1", "rutina 2","rutina 3"))
        );
  
    var $sesionesDedicadas = array(
            array("matricula"=>1, "nombre"=>"Carmelo Rivero", "estado"=>"completo", "rutinas"=>array("rutina 1", "rutina 2")),
            array("matricula"=>2, "nombre"=>"Joshua Almeida", "estado"=>"Disponible",  "rutinas"=>array("rutina 1", "rutina 2")),
            array("matricula"=>3, "nombre"=>"Eduardo Mendoza", "estado"=>"Disponible", "rutinas"=>array("rutina 1", "rutina 2")),
            array("matricula"=>4, "nombre"=>"Pablo Exposito", "estado"=>"Apuntado", "rutinas"=>array("rutina 1", "rutina 2")),
            array("matricula"=>5, "nombre"=>"Pedro Ramirez", "estado"=>"completo","rutinas"=>array("rutina 1", "rutina 2")),
            array("matricula"=>6, "nombre"=>"Suleima Sanchez", "estado"=>"Apuntado", "rutinas"=>array("rutina 1", "rutina 2")),
            array("matricula"=>7, "nombre"=>"Claudia Lopez", "estado"=>"completo", "rutinas"=>array("rutina 1", "rutina 2")),
            array("matricula"=>8, "nombre"=>"Andrea Quintana", "estado"=>"Apuntado", "rutinas"=>array("rutina 1", "rutina 2")),
            array("matricula"=>9, "nombre"=>"Daniel Suarez", "estado"=>"Disponible", "rutinas"=>array("rutina 1", "rutina 2")),
            array("matricula"=>10, "nombre"=>"Victoria Gonzalez", "estado"=>"Apuntado", "rutinas"=>array("rutina 1", "rutina 2"))
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
    public function sesionesDedicadasAction()
    {
       return $this->render('modulomonitoresmonitoresBundle:Default:sesionesDedicadas.html.twig', array("sesiones"=>$this->sesionesDedicadas));
    }
    public function sesionDedicadaAction($matricula)
    {
       return $this->render('modulomonitoresmonitoresBundle:Default:sesionDedicada.html.twig', array("sesion"=>$this->sesionesDedicadas[$matricula-1]));
    }
}