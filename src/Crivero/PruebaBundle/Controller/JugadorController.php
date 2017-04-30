<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class JugadorController extends Controller {
    
    public function jugadoresAction(Request $request) {
       $RepositorioJugadores = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
       $jugadores=$RepositorioJugadores->findAll();
       $paginator = $this->get('knp_paginator');
       $pagination = $paginator->paginate(
                $jugadores, $request->query->getInt('page', 1), 5);
       $RepositorioEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
       $equipos=$RepositorioEquipos->findAll();
       return $this->render('CriveroPruebaBundle:Competiciones:jugadores.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),"pagination"=>$pagination,"equipos"=>$equipos));
    }
    
    public function jugadorAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
        $jugador = $repository->find($id);
        $RepositorioEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $equipos=$RepositorioEquipos->findEquipoJugador($jugador->getIdEquipo());
        $RepositorioCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $competiciones=$RepositorioCompeticiones->findAll();
        return $this->render('CriveroPruebaBundle:Competiciones:jugador.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),"jugador"=>$jugador,"equipos"=>$equipos,"competiciones"=>$competiciones));
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
