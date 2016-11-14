<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SesionController extends Controller
{
  var $sesiones = array(
            array("matricula"=>1, "nombre"=>"Sesion 01", "estado"=>"Validada"),
            array("matricula"=>2, "nombre"=>"Sesion 02", "estado"=>"Solicitud Presentada"),
            array("matricula"=>3, "nombre"=>"Sesion 03", "estado"=>"Validada"),
            array("matricula"=>4, "nombre"=>"Sesion 04", "estado"=>"Validada"),
            array("matricula"=>5, "nombre"=>"Sesion 05", "estado"=>"Validada"),
            array("matricula"=>6, "nombre"=>"Sesion 06", "estado"=>"Solicitud Presentada"),
            array("matricula"=>7, "nombre"=>"Sesion 07", "estado"=>"Validada"),
            array("matricula"=>8, "nombre"=>"Sesion 08", "estado"=>"Solicitud Presentada"),
            array("matricula"=>9, "nombre"=>"Sesion 09", "estado"=>"Validada"),
            array("matricula"=>10, "nombre"=>"Sesion 10", "estado"=>"Validada")
        );
  
    public function sesionesMonitoresAction()
    {
       return $this->render('modulomonitoresmonitoresBundle:Default:sesionesMonitores.html.twig', array("sesiones"=>$this->sesiones));
    }
    
    public function sesionMonitoresAction($matricula)
    {
       return $this->render('modulomonitoresmonitoresBundle:Default:sesionMonitores.html.twig', array("sesion"=>$this->sesiones[$matricula-1]));
    }
}