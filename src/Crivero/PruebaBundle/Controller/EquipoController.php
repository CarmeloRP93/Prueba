<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EquipoController extends Controller {
    
    public function equiposAction(Request $request) {
       $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
       $equipos=$repository->findAll();
       $paginator = $this->get('knp_paginator');
       $pagination = $paginator->paginate(
                $equipos, $request->query->getInt('page', 1), 5);
       $repositoryCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
       $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
       foreach ($equipos as $equipo=>$valor){
            $competiciones[$equipo] = $repositoryCompeticiones->find($valor->getIdCompeticion())->getNombre();   
            $representantes[$equipo] = $repositoryUsuarios->find($valor->getIdCliente())->getNombre();
        }
       return $this->render('CriveroPruebaBundle:Competiciones:equipos.html.twig', array("equipos"=>$pagination,
           "competiciones"=>$competiciones,"representantes"=>$representantes));
    }
    
    public function equipoAction($id) {
      $repositoryEquipo = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
      $equipo=$repositoryEquipo->find($id);
      $repositoryJugadores = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
      $jugadores=$repositoryJugadores->findAll();
      return $this->render('CriveroPruebaBundle:Competiciones:equipo.html.twig', array("equipo"=>$equipo,"jugadores"=>$jugadores));
    } 
}