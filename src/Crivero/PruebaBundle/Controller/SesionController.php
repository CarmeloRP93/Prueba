<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;
use Crivero\PruebaBundle\Form\SesionesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class SesionController extends Controller {

    public function sesionesAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $repository->getSesionesGenerales();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1),
                3);
        return $this->render('CriveroPruebaBundle:Sesiones:sesiones.html.twig', array("pagination" => $pagination));
    }
    
    public function dedicadasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $repository->getSesionesDedicadas();
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1),
                3);
        return $this->render('CriveroPruebaBundle:Sesiones:sesionesDedicadas.html.twig', array("pagination" => $pagination));
    }

    public function sesionAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        return $this->render('CriveroPruebaBundle:Sesiones:sesion.html.twig', array("sesion" => $sesion));
    }

    public function aceptarSesionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
         if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }

        $sesion->setEstado("validada");
        $sesion->setEstadoCliente("disponible");
        $em->persist($sesion);
        $em->flush();
        
        $hoy = date('j');
        $mes = date('m');
        
        for ($i=$hoy+2; $i<=31; $i++) {
            $diaReserva = $this->getDoctrine()->getManager()
                        ->createQuery('SELECT h FROM CriveroPruebaBundle:HorariosAulas h WHERE h.aula = :aulaId AND h.fechaInicio = :dia')
                        ->setParameter('aulaId', 1)
                        ->setParameter('dia', $i)
                        ->getResult();    
                      if ($diaReserva[0]->getPeriodo() != null) break;
        }
        
        $pos = strpos($diaReserva[0]->getPeriodo(), "&");
        $horaReserva = substr($diaReserva[0]->getPeriodo(), 0, $pos);
        $diaReserva[0]->setPeriodo(substr($diaReserva[0]->getPeriodo(), $pos+1));
        $fechaReserva =  $diaReserva[0]->getFechaInicio() . "/" . $mes . " : " . $horaReserva;
        $diaReserva[0]->setFechaFinal($fechaReserva);
        
        $em->persist($diaReserva[0]);
        $em->flush();
        
        return $this->redirect($this->generateUrl('crivero_prueba_sesion', array('id' => $sesion->getId())));
    }

    public function cancelarSesionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("No encontrado");
        }
        $form = $this->createCancelForm($sesion);
        return $this->render('CriveroPruebaBundle:Sesiones:cancelarSesion.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
    }

    private function createCancelForm(Sesiones $entity) {
        $form = $this->createForm(new SesionesType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_cancelar', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function cancelarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $aula = $this->findEntity($sesion->getAula(), $em, 'CriveroPruebaBundle:Aulas');
        
        $idsClientesSesion = explode('&', $sesion->getIdsClientes());
        $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $clientes = $this->getArrayEntidades($repositoryUsuarios, $idsClientesSesion);
        $form = $this->createCancelForm($sesion);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $sesion->setEstado("cancelada");
            $sesion->setEstadoCliente("cancelada");
            $observaciones = $form->get('observaciones')->getData();
            if ($observaciones != null) {
                $em->persist($sesion);
                $em->flush();
                
                $this->removeSesionId($aula, $id);
                $em->persist($aula);
                $em->flush();
                
                foreach ($clientes as $cliente) {
                    $this->removeSesionId($cliente, $id);
                    $em->persist($cliente);
                    $em->flush();
                }
                
                return $this->redirect($this->generateUrl('crivero_prueba_sesion', array('id' => $sesion->getId())));
            } else {
                $form->get('observaciones')->addError(new FormError('Rellene el campo gracias'));
            }
        }
        return $this->render('CriveroPruebaBundle:Sesiones:cancelarSesion.html.twig', array('form' => $form->createView()));
    }
    
    public function rechazarSesionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createRechForm($sesion);
        return $this->render('CriveroPruebaBundle:Sesiones:rechazarSesion.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
    }

    private function createRechForm(Sesiones $entity) {
        $form = $this->createForm(new SesionesType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_rechazar', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function rechazarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createRechForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sesion->setEstado("rechazada");
            $sesion->setEstadoCliente("no disponible");
            $observaciones = $form->get('observaciones')->getData();
            if ($observaciones != null) {
                $em->flush();
                return $this->redirect($this->generateUrl('crivero_prueba_sesion', array('id' => $sesion->getId())));
            } else {
                $form->get('observaciones')->addError(new FormError('Rellene el campo gracias'));
            }
        }
        return $this->render('CriveroPruebaBundle:Sesiones:rechazarSesion.html.twig', array('form' => $form->createView()));
    }
    
     private function findEntity($id, $em, $repository) {
        $entity= $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
    }
    
    private function getArrayEntidades($repository, $array){
        for ($i=0; $i<count($array); $i++) {
            $resultado[$i] = $repository->find($array[$i]);
        }
        return $resultado;
    }
    
    private function removeSesionId($entity, $id) {
        $pos = strpos($entity->getSesiones(), strval($id));
        $cifra = strlen(strval($id));
        ($pos > 0) ? $entity->setSesiones(substr($entity->getSesiones(), 0, $pos-1) . substr($entity->getSesiones(), $pos+$cifra)):
                     $entity->setSesiones(substr($entity->getSesiones(), $pos+($cifra+1)));
    }

}