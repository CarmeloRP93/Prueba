<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Crivero\PruebaBundle\Entity\Reservas;
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
        return $this->render('CriveroPruebaBundle:Reservas:reservas.html.twig', array("pagination" => $pagination));
    }
    
    public function reservasClienteAction($id, Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas");
        $reservas = $repository->getReservasCliente($id);
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $reservas, $request->query->getInt('page', 1), 5);

        return $this->render('CriveroPruebaBundle:Reservas:reservasCliente.html.twig', array("pagination" => $pagination,
                    ));
    }

    public function cancelarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $reserva = $this->findEntity($id, $em, 'CriveroPruebaBundle:Reservas');

        $form = $this->createCancelForm($reserva);
        $referer = $this->getRequest()->headers->get('referer');
        return $this->render('CriveroPruebaBundle:Reservas:cancelarReserva.html.twig', array('reserva' => $reserva, 
                                                            'ref' => $referer, 'form' => $form->createView()));
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

        if ($form->isSubmitted() && $form->isValid()) {
            $motivos = $form->get('motivos')->getData();

            if ($motivos != null) {
                $reserva->setEstadoReserva("Cancelada");
                $reserva->setCliente($orig);

                $em->persist($reserva);
                $em->flush();
                $request->getSession()->getFlashBag()->add('mensaje', 'La reserva se canceló correctamente');
                $referer = $form->get('cliente')->getData();
                return (strpos($referer, 'cliente') === false) ? $this->redirect($this->generateUrl('crivero_prueba_reservas')):
                                                    $this->redirect($this->generateUrl('crivero_prueba_reservas_cliente',
                                                                                array('id' => $reserva->getIdCliente())));
            } else {
                $form->get('motivos')->addError(new FormError('Rellene el campo gracias'));
            }
        }
        return $this->render('CriveroPruebaBundle:Reservas:cancelarReserva.html.twig', array('form' => $form->createView()));
    }

    private function findEntity($id, $em, $repository) {
        $entity = $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
    }

}
