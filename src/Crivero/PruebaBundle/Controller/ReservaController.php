<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Crivero\PruebaBundle\Entity\Reservas;
use Crivero\PruebaBundle\Form\ReservasType;
use Symfony\Component\Form\FormError;

class ReservaController extends Controller {
    
    public function ReservasAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT r FROM CriveroPruebaBundle:Reservas r WHERE r.estadoReserva='Reservado'";
        $reservas = $em->createQuery($dql);
        
         $paginator = $this->get('knp_paginator');
         $pagination = $paginator->paginate(
                $reservas, $request->query->getInt('page', 1),
                5);
       return $this->render('CriveroPruebaBundle:Default:reservas.html.twig', array("pagination"=>$pagination));
    }
    
    public function cancelarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $reserva= $this->findReserva($id, $em);

        $form = $this->createCancelForm($reserva);
        return $this->render('CriveroPruebaBundle:Default:cancelarReserva.html.twig', array('reserva' => $reserva, 'form' => $form->createView()));
    }
    
    private function createCancelForm(Reservas $entity) {
        $form = $this->createForm(new ReservasType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_reserva_cancelando', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }
    
    public function cancelandoAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $reserva = $this->findReserva($id, $em);
        $form = $this->createCancelForm($reserva);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $reserva->setEstadoReserva("Cancelada");
            $motivos = $form->get('motivos')->getData();
            if ($motivos != null) {
                $em->flush();
                $request->getSession()->getFlashBag()->add('mensaje', 'La reserva se canceló correctamente');
                return $this->redirect($this->generateUrl('crivero_prueba_reservas'));
            } else {
                $form->get('motivos')->addError(new FormError('Rellene el campo gracias'));
            }
        }
        return $this->render('CriveroPruebaBundle:Default:cancelarReserva.html.twig', array('form' => $form->createView()));
    }
    
    private function findReserva($id, \Doctrine\ORM\EntityManager $em) {
        $reserva= $em->getRepository('CriveroPruebaBundle:Reservas')->find($id);
        if (!$reserva) {
            throw $this->createNotFoundException('Reserva no encontrada');
        }
        return $reserva;
    }
    
}
