<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
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
    
    var $canchas = array(
            array("matricula"=>1, "nombre"=>"Carmelo Rivero", "disponibilidad"=>"Si"),
            array("matricula"=>2, "nombre"=>"Joshua Almeida", "disponibilidad"=>"Si"),
            array("matricula"=>3, "nombre"=>"Eduardo Mendoza", "disponibilidad"=>"No"),
            array("matricula"=>4, "nombre"=>"Pablo Exposito", "disponibilidad"=>"No"),
            array("matricula"=>5, "nombre"=>"Pedro Ramirez", "disponibilidad"=>"Si"),
            array("matricula"=>6, "nombre"=>"Suleima Sanchez", "disponibilidad"=>"Si"),
            array("matricula"=>7, "nombre"=>"Claudia Lopez", "disponibilidad"=>"No"),
            array("matricula"=>8, "nombre"=>"Andrea Quintana", "disponibilidad"=>"Si"),
            array("matricula"=>9, "nombre"=>"Daniel Suarez", "disponibilidad"=>"No"),
            array("matricula"=>10, "nombre"=>"Victoria Gonzalez", "disponibilidad"=>"Si")
        );
    
    var $torneos = array(
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
    
    public function indexAction($name)
    {
        return $this->render('CriveroPruebaBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function homeAction()
    {
       return $this->render('CriveroPruebaBundle:Default:home.html.twig');
    }
    public function clientesAction()
    {
       return $this->render('CriveroPruebaBundle:Default:clientes.html.twig', array("clientes"=>$this->clientes));
    }
    public function monitoresAction()
    {
       return $this->render('CriveroPruebaBundle:Default:monitores.html.twig', array("monitores"=>$this->monitores));
    }
    public function clienteAction($matricula)
    {
       return $this->render('CriveroPruebaBundle:Default:cliente.html.twig', array("cliente"=>$this->clientes[$matricula-1]));
    }
    
    public function monitorAction($matricula)
    {
       return $this->render('CriveroPruebaBundle:Default:monitor.html.twig', array("monitor"=>$this->monitores[$matricula-1]));
    }
    
    public function canchasAction()
    {
       return $this->render('CriveroPruebaBundle:Default:canchas.html.twig', array("canchas"=>$this->canchas));
    }
    
    public function torneosAction()
    {
       return $this->render('CriveroPruebaBundle:Default:torneos.html.twig', array("torneos"=>$this->torneos));
    }
    
    public function soccerAction()
    {
       return $this->render('CriveroPruebaBundle:Default:soccer.html.twig');
    }
}
