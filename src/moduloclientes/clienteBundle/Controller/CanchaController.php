<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CanchaController extends Controller
{
    var $canchas = array(
            array("matricula"=>1, "nombre"=>"Carmelo Rivero", "disponibilidad"=>"Disponible"),
            array("matricula"=>2, "nombre"=>"Joshua Almeida", "disponibilidad"=>"Disponible"),
            array("matricula"=>3, "nombre"=>"Eduardo Mendoza", "disponibilidad"=>"Reservada"),
            array("matricula"=>4, "nombre"=>"Pablo Exposito", "disponibilidad"=>"Reservada"),
            array("matricula"=>5, "nombre"=>"Pedro Ramirez", "disponibilidad"=>"Disponible"),
            array("matricula"=>6, "nombre"=>"Suleima Sanchez", "disponibilidad"=>"Disponible"),
            array("matricula"=>7, "nombre"=>"Claudia Lopez", "disponibilidad"=>"Reservada"),
            array("matricula"=>8, "nombre"=>"Andrea Quintana", "disponibilidad"=>"Disponible"),
            array("matricula"=>9, "nombre"=>"Daniel Suarez", "disponibilidad"=>"Reservada"),
            array("matricula"=>10, "nombre"=>"Victoria Gonzalez", "disponibilidad"=>"Disponible")
        );
    
    public function canchasClientesAction()
    {
       return $this->render('moduloclientesclienteBundle:Default:canchasClientes.html.twig', array("canchas"=>$this->canchas));
    }
    
    public function canchaClientesAction($matricula)
    {
       return $this->render('moduloclientesclienteBundle:Default:canchaClientes.html.twig', array("cancha"=>$this->canchas[$matricula-1]));
    }
   }
