<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReservaController extends Controller
{
    var $reservas = array(
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
    
   public function reservasClientesAction()
    {
       return $this->render('moduloclientesclienteBundle:Default:reservasClientes.html.twig', array("reservas"=>$this->reservas));
    }
    public function reservaClientesAction($matricula)
    {
       return $this->render('moduloclientesclienteBundle:Default:reservaClientes.html.twig', array("reserva"=>$this->reservas[$matricula-1]));
    }
}
