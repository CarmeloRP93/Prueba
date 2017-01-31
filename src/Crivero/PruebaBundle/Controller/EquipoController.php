<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EquipoController extends Controller
{     
    public function equiposAction()
    {
       $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
       $equipos=$repository->findAll();
       return $this->render('CriveroPruebaBundle:Default:equipos.html.twig', array("equipos"=>$equipos));
    }
    
    public function equipoAction($id)
    {
      $repositoryEquipo = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
      $equipo=$repositoryEquipo->find($id);
      $repositoryJugadores = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
      $jugadores=$repositoryJugadores->findAll();
      return $this->render('CriveroPruebaBundle:Default:equipo.html.twig', array("equipo"=>$equipo,"jugadores"=>$jugadores));
    } 
}