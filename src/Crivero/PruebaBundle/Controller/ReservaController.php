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
        $reservas = $repository->getReservas();
        
         $paginator = $this->get('knp_paginator');
         $pagination = $paginator->paginate(
                $reservas, $request->query->getInt('page', 1),
                5);
       return $this->render('CriveroPruebaBundle:Reservas:reservas.html.twig', array("pagination"=>$pagination));
    }
    
    public function cancelarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $reserva= $this->findEntity($id, $em, 'CriveroPruebaBundle:Reservas');

        $form = $this->createCancelForm($reserva);
        return $this->render('CriveroPruebaBundle:Reservas:cancelarReserva.html.twig', array('reserva' => $reserva, 'form' => $form->createView()));
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
        $reserva = $this->findEntity($id, $em, 'CriveroPruebaBundle:Reservas');
        $form = $this->createCancelForm($reserva);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $reserva->setEstadoReserva("Cancelada");
            $motivos = $form->get('motivos')->getData();
            
            if ($motivos != null) {
                $usuario = $this->findEntity($reserva->getIdCliente(), $em, 'CriveroPruebaBundle:Usuarios');
                $this->removeReservaId($usuario, $id);
                
                $em->persist($reserva);
                $em->persist($usuario);
                $em->flush();
                $request->getSession()->getFlashBag()->add('mensaje', 'La reserva se canceló correctamente');
                return $this->redirect($this->generateUrl('crivero_prueba_reservas'));
            } else {
                $form->get('motivos')->addError(new FormError('Rellene el campo gracias'));
            }
        }
        return $this->render('CriveroPruebaBundle:Reservas:cancelarReserva.html.twig', array('form' => $form->createView()));
    }
    
    private function findEntity($id, $em, $repository) {
        $entity= $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
    }
    
    private function removeReservaId($entity, $id) {
        $pos = strpos($entity->getReservas(), strval($id));
        $cifra = strlen(strval($id));
        ($pos > 0) ? $entity->setSesiones(substr($entity->getReservas(), 0, $pos - 1) . substr($entity->getReservas(), $pos + $cifra)) :
                        $entity->setSesiones(substr($entity->getReservas(), $pos + ($cifra + 1)));
    }
    
}
