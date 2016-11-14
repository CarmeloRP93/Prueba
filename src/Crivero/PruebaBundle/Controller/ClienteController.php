<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClienteController extends Controller
{
    
    var $clientes = array(
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
    

    public function clientesAction()
    {
       return $this->render('CriveroPruebaBundle:Default:clientes.html.twig', array("clientes"=>$this->clientes));
    }
    public function clienteAction($matricula)
    {
       return $this->render('CriveroPruebaBundle:Default:cliente.html.twig', array("cliente"=>$this->clientes[$matricula-1]));
    }
    
   
}
