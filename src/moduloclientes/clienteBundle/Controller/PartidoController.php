<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PartidoController extends Controller {

    public function partidosClientesAction($id, Request $request) {
        $repositoryPartidos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Partidos");
        $partidos=$repositoryPartidos->findAll();
        $repositoryCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $repositoryCanchas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $idCompeticion= $id;
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $partidos, $request->query->getInt('page', 1), 10);

        foreach ($partidos as $partido=>$valor){
            $competiciones[$partido] = $repositoryCompeticiones->find($valor->getIdCompeticion());   
            $equiposLocales[$partido] = $repositoryEquipos->find($valor->getIdEquipoLocal());
            $equiposVisitantes[$partido] = $repositoryEquipos->find($valor->getIdEquipoVisitante());
            $canchas[$partido] = $repositoryCanchas->find($valor->getIdCancha());
        }     
        return $this->render('moduloclientesclienteBundle:Competiciones:partidosClientes.html.twig',
                array("notificacionesSinLeer"=>$this->getNewNotification(),
                    "partidos"=>$pagination, "competiciones"=>$competiciones,
                    "equiposLocales"=>$equiposLocales,"equiposVisitantes"=>$equiposVisitantes,
                    "canchas"=>$canchas, "idCompeticion"=>$idCompeticion));
    }

    public function partidoClientesAction($id) {
        $repositoryPartido = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Partidos");
        $repositoryCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $repositoryCanchas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $repositoryJugadores =$this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
        $partido=$repositoryPartido->find($id);
        $competicion=$repositoryCompeticiones->find($partido->getIdCompeticion());
        $equipoLocal=$repositoryEquipos->find($partido->getIdEquipoLocal());
        $equipoVisitante=$repositoryEquipos->find($partido->getIdEquipoVisitante());
        $cancha=$repositoryCanchas->find($partido->getIdCancha());
        $jugadores =$repositoryJugadores->findAll();
        return $this->render('moduloclientesclienteBundle:Competiciones:partidoClientes.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            "partido"=>$partido, "competicion"=>$competicion,
            "equipoLocal"=>$equipoLocal, "equipoVisitante"=>$equipoVisitante,
            "cancha"=>$cancha, "jugadores"=>$jugadores));
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