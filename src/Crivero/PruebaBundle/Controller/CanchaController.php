<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CanchaController extends Controller
{
    
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
    
    public function canchasAction()
    {
       return $this->render('CriveroPruebaBundle:Default:canchas.html.twig', array("canchas"=>$this->canchas));
    }
    
    public function canchaAction($matricula)
    {
       return $this->render('CriveroPruebaBundle:Default:cancha.html.twig', array("cancha"=>$this->canchas[$matricula-1]));
    }

}
