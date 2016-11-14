<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SesionController extends Controller
{
   
    var $sesiones = array(
            array("matricula"=>1, "nombre"=>"Sesion 01", "estado"=>"Completo"),
            array("matricula"=>2, "nombre"=>"Sesion 02", "estado"=>"Disponible"),
            array("matricula"=>3, "nombre"=>"Sesion 03", "estado"=>"Disponible"),
            array("matricula"=>4, "nombre"=>"Sesion 04", "estado"=>"Apuntado"),
            array("matricula"=>5, "nombre"=>"Sesion 05", "estado"=>"Completo"),
            array("matricula"=>6, "nombre"=>"Sesion 06", "estado"=>"Finalizada"),
            array("matricula"=>7, "nombre"=>"Sesion 07", "estado"=>"Completo"),
            array("matricula"=>8, "nombre"=>"Sesion 08", "estado"=>"Apuntado"),
            array("matricula"=>9, "nombre"=>"Sesion 09", "estado"=>"Disponible"),
            array("matricula"=>10, "nombre"=>"Sesion 10", "estado"=>"Finalizada")
        );
    public function sesionesClientesAction()
    {
       return $this->render('moduloclientesclienteBundle:Default:sesionesClientes.html.twig', array("sesiones"=>$this->sesiones));
    }
    public function sesionClientesAction($matricula)
    {
       return $this->render('moduloclientesclienteBundle:Default:sesionClientes.html.twig', array("sesion"=>$this->sesiones[$matricula-1]));
    }
}
