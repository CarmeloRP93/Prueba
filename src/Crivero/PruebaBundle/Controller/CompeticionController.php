<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Competiciones;
use Crivero\PruebaBundle\Entity\Notificaciones;
use Crivero\PruebaBundle\Form\CompeticionesType;
use Symfony\Component\HttpFoundation\Request;

class CompeticionController extends Controller {

    public function competicionesAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $competiciones = $repository->searchCompeticiones($searchQuery) :
                        $competiciones = $repository->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $competiciones, $request->query->getInt('page', 1), 5);
        return $this->render('CriveroPruebaBundle:Competiciones:competiciones.html.twig', array("notificacionesSinLeer" => $this->getNewNotification(), "competiciones" => $pagination));
    }

    public function competicionAction($id) {
        $this->changeStateNotification($id);
        $repositoryCompeticion = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $competicion = $repositoryCompeticion->find($id);
        $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $equipos = $repositoryEquipos->findAll();
        return $this->render('CriveroPruebaBundle:Competiciones:competicion.html.twig', array("notificacionesSinLeer" => $this->getNewNotification(), "competicion" => $competicion, "equipos" => $equipos));
    }

    public function validarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $competicion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Competiciones');
        $competicion->setEstadoCompeticion("Validado");
        $em->persist($competicion);

        $notificacion = new Notificaciones();
        $notificacion->setIdEntidad($competicion->getId());
        $notificacion->setIdDestinatario(21);
        $notificacion->setEstado('No leido');
        $notificacion->setConcepto('Competicion');
        $notificacion->setIdOrigen($this->getUser()->getId());
        $notificacion->setMensaje('Tu competicion ' . $competicion->getNombre() . ' ha sido validada');
        $em->persist($notificacion);
        $em->flush();
        return $this->redirect($this->generateUrl('crivero_prueba_competicion', array('id' => $competicion->getId())));
    }

    public function rechazarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $competicion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Competiciones');
        $competicion->setEstadoCompeticion("Rechazado");
        $em->persist($competicion);
        
        $notificacion = new Notificaciones();
        $notificacion->setIdEntidad($competicion->getId());
        $notificacion->setIdDestinatario(21);
        $notificacion->setEstado('No leido');
        $notificacion->setConcepto('Competicion');
        $notificacion->setIdOrigen($this->getUser()->getId());
        $notificacion->setMensaje('Tu competicion ' . $competicion->getNombre() . ' ha sido rechazada');
        $em->persist($notificacion);
        $em->flush();
        return $this->redirect($this->generateUrl('crivero_prueba_competicion', array('id' => $competicion->getId())));
    }

    public function cancelarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $competicion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Competiciones');
        $competicion->setEstadoCompeticion("Cancelado");
        $em->persist($competicion);
        $em->flush();
        return $this->redirect($this->generateUrl('crivero_prueba_competiciones', array('id' => $competicion->getId())));
    }

    public function nuevaAction() {
        $competicion = new Competiciones();
        $form = $this->createCreateForm($competicion);
        return $this->render('CriveroPruebaBundle:Competiciones:nuevaCompeticion.html.twig', array("notificacionesSinLeer" => $this->getNewNotification(), 'form' => $form->createView()));
    }

    private function createCreateForm(Competiciones $entity) {
        $form = $this->createForm(new CompeticionesType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_competicion_crear'),
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
            $competicion->setEstadocompeticion("Validado");
            $em->persist($competicion);
            $em->flush();
            return $this->redirect($this->generateUrl('crivero_prueba_competiciones'));
        }
        return $this->render('CriveroPruebaBundle:Competiciones:nuevaCompeticion.html.twig', array('form' => $form->createView()));
    }

    public function editarCompeticionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $competicion = $em->getRepository('CriveroPruebaBundle:Competiciones')->find($id);

        if (!$competicion) {
            throw $this->createNotFoundException("No encontrado");
        }
        $form = $this->createEditForm($competicion);
        return $this->render('CriveroPruebaBundle:Competiciones:editarCompeticion.html.twig', array("notificacionesSinLeer" => $this->getNewNotification(), 'competicion' => $competicion, 'form' => $form->createView()));
    }

    public function editarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $competicion = $em->getRepository('CriveroPruebaBundle:Competiciones')->find($id);
        if (!$competicion) {
            throw $this->createNotFoundException("No encontrado");
        }
        $form = $this->createEditForm($competicion);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($competicion);
            $em->flush();
            return $this->redirect($this->generateUrl('crivero_prueba_competiciones'));
        }
        return $this->render('CriveroPruebaBundle:Competiciones:editarCompeticion.html.twig', array("notificacionesSinLeer" => $this->getNewNotification(), 'form' => $form->createView()));
    }

    private function findEntity($id, $em, $repository) {
        $entity = $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
    }

    private function createEditForm(Competiciones $entity) {
        $form = $this->createForm(new CompeticionesType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_competicion_editar', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
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
