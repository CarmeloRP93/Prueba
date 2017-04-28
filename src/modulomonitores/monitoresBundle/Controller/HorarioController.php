<?php

namespace modulomonitores\monitoresBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HorarioController extends Controller {
    public function verHorarioAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $horario = explode('&', $sesion->getHorario());

        return $this->render('modulomonitoresmonitoresBundle:Horario:horario.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(),"horario" => $horario, "id" => $id));
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
    private function findEntity($id, $em, $repository) {
        $entity = $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
    }
}