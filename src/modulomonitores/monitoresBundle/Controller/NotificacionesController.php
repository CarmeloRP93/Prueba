<?php

namespace modulomonitores\monitoresBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class NotificacionesController extends Controller {
    
public function notificacionesMonitorAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Notificaciones");
        $notificaciones = $repository->getNotificaciones($this->getUser()->getId());
        $notificacionesSinLeer = array();
        foreach ($notificaciones as $clave => $notificacion) {
            if ($notificacion->getEstado() == "No leido") {
                $notificacionesSinLeer[$clave] = $notificacion;
            }
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $notificacionesSinLeer, $request->query->getInt('page', 1), 9);
        return $this->render('modulomonitoresmonitoresBundle:Notificaciones:notificacionesMonitor.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'pagination' => $pagination));
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