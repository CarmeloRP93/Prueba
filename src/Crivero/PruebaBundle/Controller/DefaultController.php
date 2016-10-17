<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    var $alumnos = array(
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
    
    public function indexAction($name)
    {
        return $this->render('CriveroPruebaBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function alumnosAction()
    {
       return $this->render('CriveroPruebaBundle:Default:alumnos.html.twig');
    }
    public function clientesAction()
    {
       return $this->render('CriveroPruebaBundle:Default:clientes.html.twig', array("alumnos"=>$this->alumnos));
    }
    public function monitoresAction()
    {
       return $this->render('CriveroPruebaBundle:Default:monitores.html.twig', array("monitores"=>$this->monitores));
    }
    public function alumnoAction($matricula)
    {
       return $this->render('CriveroPruebaBundle:Default:alumno.html.twig', array("alumno"=>$this->alumnos[$matricula-1]));
    }
    
    public function monitorAction($matricula)
    {
       return $this->render('CriveroPruebaBundle:Default:monitor.html.twig', array("monitor"=>$this->monitores[$matricula-1]));
    }
    public function soccerAction()
    {
       return $this->render('CriveroPruebaBundle:Default:soccer.html.twig');
    }
}
