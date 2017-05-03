<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Crivero\PruebaBundle\Entity\Reservas;
use Crivero\PruebaBundle\Entity\Notificaciones;
use Crivero\PruebaBundle\Form\ReservasType;
use Symfony\Component\Form\FormError;

class ReservaController extends Controller {

    public function ReservasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas");

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $reservas = $repository->searchReservas($searchQuery) :
                        $reservas = $repository->getReservas();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $reservas, $request->query->getInt('page', 1), 5);
        return $this->render('CriveroPruebaBundle:Reservas:reservas.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function reservasClienteAction($id, Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas");
        $reservas = $repository->getReservasCliente($id);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $reservas, $request->query->getInt('page', 1), 6);

        return $this->render('CriveroPruebaBundle:Reservas:reservasCliente.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function cancelarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $reserva = $this->findEntity($id, $em, 'CriveroPruebaBundle:Reservas');

        $form = $this->createCancelForm($reserva);
        $referer = $this->getRequest()->headers->get('referer');
        return $this->render('CriveroPruebaBundle:Reservas:cancelarReserva.html.twig', array('reserva' => $reserva,
                    'ref' => $referer, 'form' => $form->createView(),
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function createCancelForm(Reservas $entity) {
        $form = $this->createForm(new ReservasType(array('Cancelar')), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_reserva_cancelando', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function cancelandoAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $reserva = $this->findEntity($id, $em, 'CriveroPruebaBundle:Reservas');
        $orig = $reserva->getCliente();
        $form = $this->createCancelForm($reserva);
        $form->handleRequest($request);

        $referer = $form->get('cliente')->getData();
        if ($form->isSubmitted() && $form->isValid()) {
            $motivos = $form->get('motivos')->getData();
            if ($motivos != null) {
                $reserva->setEstadoReserva("Cancelada");
                $reserva->setCliente($orig);

                $em->persist($reserva);
                $em->flush();

                $notificacion = new Notificaciones();
                $notificacion->setIdDestinatario($reserva->getIdCliente());
                $notificacion->setIdEntidad($reserva->getId());
                $notificacion->setMensaje("Tu reserva con código " . $reserva->getId() . " ha sido cancelada");
                $notificacion->setIdOrigen($this->getUser()->getId());
                $notificacion->setEstado("No leido");
                $notificacion->setConcepto("Reserva");
                $em->persist($notificacion);
                $em->flush();

                $request->getSession()->getFlashBag()->add('mensaje', 'La reserva se canceló correctamente');
                return (strpos($referer, 'cliente') === false) ? $this->redirect($this->generateUrl('crivero_prueba_reservas')) :
                        $this->redirect($this->generateUrl('crivero_prueba_reservas_cliente', array('id' => $reserva->getIdCliente())));
            } else {
                $form->get('motivos')->addError(new FormError('Rellene el campo.'));
            }
        }
        return $this->render('CriveroPruebaBundle:Reservas:cancelarReserva.html.twig', array('form' => $form->createView(),
                    'ref' => $referer,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function findEntity($id, $em, $repository) {
        $entity = $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
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
