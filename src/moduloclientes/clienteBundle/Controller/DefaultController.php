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
            array("matricula"=>1, "nombre"=>"Carmelo Rivero", "tiempo"=>"Si"),
            array("matricula"=>2, "nombre"=>"Joshua Almeida", "tiempo"=>"Si"),
            array("matricula"=>3, "nombre"=>"Eduardo Mendoza", "tiempo"=>"No"),
            array("matricula"=>4, "nombre"=>"Pablo Exposito", "tiempo"=>"No"),
            array("matricula"=>5, "nombre"=>"Pedro Ramirez", "tiempo"=>"Si"),
            array("matricula"=>6, "nombre"=>"Suleima Sanchez", "tiempo"=>"Si"),
            array("matricula"=>7, "nombre"=>"Claudia Lopez", "tiempo"=>"No"),
            array("matricula"=>8, "nombre"=>"Andrea Quintana", "tiempo"=>"Si"),
            array("matricula"=>9, "nombre"=>"Daniel Suarez", "tiempo"=>"No"),
            array("matricula"=>10, "nombre"=>"Victoria Gonzalez", "tiempo"=>"Si")
        );
    var $torneos = array(
            array("matricula"=>1, "nombre"=>"Carmelo Rivero", "tiempo"=>"Si"),
            array("matricula"=>2, "nombre"=>"Joshua Almeida", "tiempo"=>"Si"),
            array("matricula"=>3, "nombre"=>"Eduardo Mendoza", "tiempo"=>"No"),
            array("matricula"=>4, "nombre"=>"Pablo Exposito", "tiempo"=>"No"),
            array("matricula"=>5, "nombre"=>"Pedro Ramirez", "tiempo"=>"Si"),
            array("matricula"=>6, "nombre"=>"Suleima Sanchez", "tiempo"=>"Si"),
            array("matricula"=>7, "nombre"=>"Claudia Lopez", "tiempo"=>"No"),
            array("matricula"=>8, "nombre"=>"Andrea Quintana", "tiempo"=>"Si"),
            array("matricula"=>9, "nombre"=>"Daniel Suarez", "tiempo"=>"No"),
            array("matricula"=>10, "nombre"=>"Victoria Gonzalez", "tiempo"=>"Si")
        );
    var $sesiones = array(
            array("matricula"=>1, "nombre"=>"Carmelo Rivero", "estado"=>"completo"),
            array("matricula"=>2, "nombre"=>"Joshua Almeida", "estado"=>"Disponible"),
            array("matricula"=>3, "nombre"=>"Eduardo Mendoza", "estado"=>"Disponible"),
            array("matricula"=>4, "nombre"=>"Pablo Exposito", "estado"=>"Apuntado"),
            array("matricula"=>5, "nombre"=>"Pedro Ramirez", "estado"=>"completo"),
            array("matricula"=>6, "nombre"=>"Suleima Sanchez", "estado"=>"Apuntado"),
            array("matricula"=>7, "nombre"=>"Claudia Lopez", "estado"=>"completo"),
            array("matricula"=>8, "nombre"=>"Andrea Quintana", "estado"=>"Apuntado"),
            array("matricula"=>9, "nombre"=>"Daniel Suarez", "estado"=>"Disponible"),
            array("matricula"=>10, "nombre"=>"Victoria Gonzalez", "estado"=>"Apuntado")
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
