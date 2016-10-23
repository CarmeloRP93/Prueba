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
            array("matricula"=>1, "nombre"=>"Carmelo Rivero", "disponibilidad"=>"Disponible"),
            array("matricula"=>2, "nombre"=>"Joshua Almeida", "disponibilidad"=>"Reservada"),
            array("matricula"=>3, "nombre"=>"Eduardo Mendoza", "disponibilidad"=>"Disponible"),
            array("matricula"=>4, "nombre"=>"Pablo Exposito", "disponibilidad"=>"Disponible"),
            array("matricula"=>5, "nombre"=>"Pedro Ramirez", "disponibilidad"=>"Reservada"),
            array("matricula"=>6, "nombre"=>"Suleima Sanchez", "disponibilidad"=>"Disponible"),
            array("matricula"=>7, "nombre"=>"Claudia Lopez", "disponibilidad"=>"Reservada"),
            array("matricula"=>8, "nombre"=>"Andrea Quintana", "disponibilidad"=>"Reservada"),
            array("matricula"=>9, "nombre"=>"Daniel Suarez", "disponibilidad"=>"Disponible"),
            array("matricula"=>10, "nombre"=>"Victoria Gonzalez", "disponibilidad"=>"Disponible")
        );
    
    var $torneos = array(
            array("matricula"=>1, "nombre"=>"Carmelo Rivero", "estado"=>"Validado"),
            array("matricula"=>2, "nombre"=>"Joshua Almeida", "estado"=>"Solicitud Presentada"),
            array("matricula"=>3, "nombre"=>"Eduardo Mendoza", "estado"=>"Validado"),
            array("matricula"=>4, "nombre"=>"Pablo Exposito", "estado"=>"Validado"),
            array("matricula"=>5, "nombre"=>"Pedro Ramirez", "estado"=>"Validado"),
            array("matricula"=>6, "nombre"=>"Suleima Sanchez", "estado"=>"Solicitud Presentada"),
            array("matricula"=>7, "nombre"=>"Claudia Lopez", "estado"=>"Validado"),
            array("matricula"=>8, "nombre"=>"Andrea Quintana", "estado"=>"Solicitud Presentada"),
            array("matricula"=>9, "nombre"=>"Daniel Suarez", "estado"=>"Validado"),
            array("matricula"=>10, "nombre"=>"Victoria Gonzalez", "estado"=>"Validado")
        );
    
        var $sesiones = array(
            array("matricula"=>1, "nombre"=>"Carmelo Rivero", "estado"=>"Validada"),
            array("matricula"=>2, "nombre"=>"Joshua Almeida", "estado"=>"Solicitud Presentada"),
            array("matricula"=>3, "nombre"=>"Eduardo Mendoza", "estado"=>"Validada"),
            array("matricula"=>4, "nombre"=>"Pablo Exposito", "estado"=>"Validada"),
            array("matricula"=>5, "nombre"=>"Pedro Ramirez", "estado"=>"Validada"),
            array("matricula"=>6, "nombre"=>"Suleima Sanchez", "estado"=>"Solicitud Presentada"),
            array("matricula"=>7, "nombre"=>"Claudia Lopez", "estado"=>"Validada"),
            array("matricula"=>8, "nombre"=>"Andrea Quintana", "estado"=>"Solicitud Presentada"),
            array("matricula"=>9, "nombre"=>"Daniel Suarez", "estado"=>"Validada"),
            array("matricula"=>10, "nombre"=>"Victoria Gonzalez", "estado"=>"Validada")
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
    
    public function canchaAction($matricula)
    {
       return $this->render('CriveroPruebaBundle:Default:cancha.html.twig', array("cancha"=>$this->canchas[$matricula-1]));
    }
    
    public function torneosAction()
    {
       return $this->render('CriveroPruebaBundle:Default:torneos.html.twig', array("torneos"=>$this->torneos));
    }
    
    public function torneoAction($matricula)
    {
       return $this->render('CriveroPruebaBundle:Default:torneo.html.twig', array("torneo"=>$this->torneos[$matricula-1]));
    }
    
    public function sesionesAction()
    {
       return $this->render('CriveroPruebaBundle:Default:sesiones.html.twig', array("sesiones"=>$this->sesiones));
    }
    
    public function sesionAction($matricula)
    {
       return $this->render('CriveroPruebaBundle:Default:sesion.html.twig', array("sesion"=>$this->sesiones[$matricula-1]));
    }
       
    public function soccerAction()
    {
       return $this->render('CriveroPruebaBundle:Default:soccer.html.twig');
    }
}
