<?php

namespace modulomonitores\monitoresBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AulasController extends Controller {
    
    
    public function listadoAulasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $aulas = $repository->searchAulas($searchQuery) :
                        $aulas = $repository->getAulas();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $aulas, $request->query->getInt('page', 1), 5);

        return $this->render('modulomonitoresmonitoresBundle:Aulas:aulas.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }
    
    public function verAulaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aula = $repository->find($id);
        return $this->render('modulomonitoresmonitoresBundle:Aulas:verAula.html.twig', array("aula" => $aula,
                    'notificacionesSinLeer' => $this->getNewNotification()));
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
