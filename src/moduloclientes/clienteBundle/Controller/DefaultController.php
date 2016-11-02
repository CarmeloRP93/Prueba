<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
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
    var $torneos = array(
            array("matricula"=>1, "nombre"=>"Torneo 1", "estado"=>"Disponible","equipos"=>array("Equipo 1", "Equipo 2","Equipo 3")),
            array("matricula"=>2, "nombre"=>"Torneo 2", "estado"=>"Disponible","equipos"=>array("Equipo 1","Equipo 3")),
            array("matricula"=>3, "nombre"=>"Torneo 3", "estado"=>"Finalizado","equipos"=>array("Equipo 1","Equipo 3")),
            array("matricula"=>4, "nombre"=>"Torneo 4", "estado"=>"Finalizado","equipos"=>array("Equipo 2","Equipo 3")),
            array("matricula"=>5, "nombre"=>"Torneo 5", "estado"=>"Disponible","equipos"=>array("Equipo 1", "Equipo 2","Equipo 3"))
        );
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
    public function homeClientesAction()
    {
       return $this->render('moduloclientesclienteBundle:Default:homeClientes.html.twig');
    }
    public function canchasClientesAction()
    {
       return $this->render('moduloclientesclienteBundle:Default:canchasClientes.html.twig', array("canchas"=>$this->canchas));
    }
    public function canchaClientesAction($matricula)
    {
       return $this->render('moduloclientesclienteBundle:Default:canchaClientes.html.twig', array("cancha"=>$this->canchas[$matricula-1]));
    }
    public function reservasClientesAction()
    {
       return $this->render('moduloclientesclienteBundle:Default:reservasClientes.html.twig', array("reservas"=>$this->reservas));
    }
    public function reservaClientesAction($matricula)
    {
       return $this->render('moduloclientesclienteBundle:Default:reservaClientes.html.twig', array("reserva"=>$this->reservas[$matricula-1]));
    }
    public function torneosClientesAction()
    {
       return $this->render('moduloclientesclienteBundle:Default:torneosClientes.html.twig', array("torneos"=>$this->torneos));
    }
    public function torneoClientesAction($matricula)
    {
       return $this->render('moduloclientesclienteBundle:Default:torneoClientes.html.twig', array("torneo"=>$this->torneos[$matricula-1]));
    }
    public function sesionesClientesAction()
    {
       return $this->render('moduloclientesclienteBundle:Default:sesionesClientes.html.twig', array("sesiones"=>$this->sesiones));
    }
    public function sesionClientesAction($matricula)
    {
       return $this->render('moduloclientesclienteBundle:Default:sesionClientes.html.twig', array("sesion"=>$this->sesiones[$matricula-1]));
    }
}
