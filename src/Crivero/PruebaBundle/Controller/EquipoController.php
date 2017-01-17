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
      $em = $this->getDoctrine()->getManager();
      $query2 = $em->createQuery('SELECT jugadores
            FROM CriveroPruebaBundle:Jugadores jugadores');
      $jugadores=$query2->getResult(); 
      return $this->render('CriveroPruebaBundle:Default:equipo.html.twig', array("equipo"=>$equipo,"jugadores"=>$jugadores));
    } 
}