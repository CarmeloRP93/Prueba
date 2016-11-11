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

            array("matricula"=>1, "nombre"=>"Torneo 1", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2","Equipo 3")),
            array("matricula"=>2, "nombre"=>"Torneo 2", "estado"=>"Solicitud Presentada","equipos"=>array("Equipo 1", "Equipo 2","Equipo 3")),
            array("matricula"=>3, "nombre"=>"Torneo 3", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>4, "nombre"=>"Torneo 4", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>5, "nombre"=>"Torneo 5", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>6, "nombre"=>"Torneo 6", "estado"=>"Solicitud Presentada","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>7, "nombre"=>"Torneo 7", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>8, "nombre"=>"Torneo 8", "estado"=>"Solicitud Presentada","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>9, "nombre"=>"Torneo 9", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2")),
            array("matricula"=>10, "nombre"=>"Torneo 10", "estado"=>"Validado","equipos"=>array("Equipo 1", "Equipo 2"))

        );
    
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
       return $this->render('CriveroPruebaBundle:Default:torneo.html.twig',array("torneo"=>$this->torneos[$matricula-1]));
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
