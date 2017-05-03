<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EquipoController extends Controller {
    
    public function equiposAction(Request $request) {
       $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
       $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $equipos = $repository->searchEquipos($searchQuery) :
                                 $equipos = $repository->findAll();
       $paginator = $this->get('knp_paginator');
       $pagination = $paginator->paginate(
                $equipos, $request->query->getInt('page', 1), 5);
       $repositoryCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
       $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
       $competiciones = array();
       $representantes = array();
       foreach ($equipos as $equipo=>$valor){
            $competiciones[$valor->getIdCompeticion()] = $repositoryCompeticiones->find($valor->getIdCompeticion());
            $representantes[$valor->getIdCliente()] = $repositoryUsuarios->find($valor->getIdCliente());
       }
       return $this->render('CriveroPruebaBundle:Competiciones:equipos.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),"equipos"=>$pagination,
           "competiciones"=>$competiciones,"representantes"=>$representantes));
    }
    
    public function equipoAction($id) {
      $repositoryEquipo = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
      $equipo=$repositoryEquipo->find($id);
      $repositoryJugadores = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
      $jugadores=$repositoryJugadores->findAll();
      return $this->render('CriveroPruebaBundle:Competiciones:equipo.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),"equipo"=>$equipo,"jugadores"=>$jugadores));
    }
    
    private function getNewNotification() {
        $repositoryN = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Notificaciones");
        $notificaciones = $repositoryN->getNotificaciones($this->getUser()->getId());
        $notificacionesSinLeer = array();
        foreach ($notificaciones as $clave => $notificacion) {
            if ($notificacion->getEstado() == "No leido") {
                $notificacionesSinLeer[$clave] = $notificacion;
            }
        }
        return $notificacionesSinLeer;
    }
}