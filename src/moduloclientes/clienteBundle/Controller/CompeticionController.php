<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Competiciones;
use Crivero\PruebaBundle\Entity\Notificaciones;
use Crivero\PruebaBundle\Form\CompeticionesType;
use Symfony\Component\HttpFoundation\Request;

class CompeticionController extends Controller {

    public function competicionesClientesAction(Request $request) {
        $repositoryCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $competiciones = $repositoryCompeticiones->searchCompeticionesClientes($searchQuery) :
                        $competiciones = $repositoryCompeticiones->getCompeticionesMostrables();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $competiciones, $request->query->getInt('page', 1), 5);

        return $this->render('moduloclientesclienteBundle:Competiciones:competicionesClientes.html.twig', array("pagination" => $pagination, "notificacionesSinLeer" => $this->getNewNotification()));
    }

    public function competicionClientesAction($id) {
        $this->changeStateNotification($id);
        $repositoryCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $competicion = $repositoryCompeticiones->find($id);
        $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $equipos = $repositoryEquipos->getEquiposCompeticion($id);
        return $this->render('moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig', array("notificacionesSinLeer" => $this->getNewNotification(),
                    "competicion" => $competicion, "equipos" => $equipos));
    }

    public function nuevaAction() {
        $competicion = new Competiciones();
        $form = $this->createCreateForm($competicion);
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevaCompeticionClientes.html.twig', array("notificacionesSinLeer" => $this->getNewNotification(),
                    'form' => $form->createView()));
    }

    private function createCreateForm(Competiciones $entity) {
        $form = $this->createForm(new CompeticionesType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_competicion_crear'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function crearAction(Request $request) {
        $competicion = new Competiciones();
        $form = $this->createCreateForm($competicion);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $competicion->setEstadocompeticion("Pendiente");
            $em->persist($competicion);
            $em->flush();

            $admin = $this->getDoctrine()->getRepository('CriveroPruebaBundle:Usuarios')->getAdmin()[0];
            $notificacion = new Notificaciones();
            $notificacion->setIdEntidad($competicion->getId());
            $notificacion->setIdDestinatario($admin->getId());
            $notificacion->setEstado('No leido');
            $notificacion->setConcepto('Competicion');
            $notificacion->setIdOrigen($this->getUser()->getId());
            $notificacion->setMensaje('El usuario ' . $this->getUser()->getUsername() . ' ha creado una competición');
            $em->persist($notificacion);
            $em->flush();

            return $this->redirect($this->generateUrl('moduloclientes_cliente_competicionesClientes'));
        }
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevaCompeticionClientes.html.twig', array("notificacionesSinLeer" => $this->getNewNotification(),
                    'form' => $form->createView()));
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

    private function changeStateNotification($idEntidad) {
        $repositoryN = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Notificaciones");
        if ($repositoryN->getNotificacionEntidad($idEntidad, $this->getUser()->getId())) {
            $repositoryN->getNotificacionEntidad($idEntidad, $this->getUser()->getId())[0]->setEstado("Leido");
            $this->getDoctrine()->getManager()->flush();
        }
    }

}
