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
                $sesiones, $request->query->getInt('page', 1), 3);
        return $this->render('CriveroPruebaBundle:Sesiones:sesiones.html.twig', array("pagination" => $pagination));
    }

    public function dedicadasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $repository->getSesionesDedicadas();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 3);
        return $this->render('CriveroPruebaBundle:Sesiones:sesionesDedicadas.html.twig', array("pagination" => $pagination));
    }

    public function sesionAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $sesion = $repository->find($id);
        $aula = $repositoryAula->find($sesion->getAula());
        return $this->render('CriveroPruebaBundle:Sesiones:sesion.html.twig', array("sesion" => $sesion, "aula" => $aula));
    }

    public function aceptarSesionAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $sesion->setEstado("validada");
        $sesion->setEstadoCliente("disponible");
        
        $monitor = $this->findEntity($sesion->getIdMonitor(), $em, 'CriveroPruebaBundle:Usuarios');
        ($monitor->getSesiones() == null) ? $monitor->setSesiones($sesion->getId()):
                                            $monitor->setSesiones($monitor->getSesiones() . "&" . $sesion->getId()); 
        
        $aula = $this->findEntity($sesion->getAula(), $em, 'CriveroPruebaBundle:Aulas');
        ($aula->getSesiones() == null) ? $aula->setSesiones($sesion->getId()):
                                            $aula->setSesiones($aula->getSesiones() . "&" . $sesion->getId()); 

        $hoy = date('j');
        $mes = date('m');
        $limite = date('t');
        $this->actualizarValores($hoy, $mes, $limite);
        $repositoryHorarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosAulas");
        
        $vuelta=0;
        for ($i = $hoy + 2; $i <= $limite; $i++) {
            //if ($i < $limite && $this->isWeekend($i, $mes)) continue;
            if (!$this->isWeekend($i, $mes, $vuelta)) {
                $diaReserva = $repositoryHorarios->getDiaReserva($sesion->getAula(), $i);
                if ($diaReserva[0]->getPeriodo() != null) break;
                $diaReserva[0]->setEstado("Completo");
            } 
            if ($i == $limite) {
                $i = 0;
                if ($mes == 12) $mes = 0;
                $mes++;
                $vuelta=1;
            }
        }
        $fechaReserva = $this->findFechaReserva($diaReserva[0], $mes);
        $sesion->setHorario($fechaReserva);

        $em->persist($sesion);
        $em->persist($aula);
        $em->persist($diaReserva[0]);
        $em->flush();
        $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido aceptada con éxito');
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

        $form = $this->createCancelForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sesion->setEstado("cancelada");
            $sesion->setEstadoCliente("cancelada");
            $observaciones = $form->get('observaciones')->getData();
            
            if ($observaciones != null) {
                $em->persist($sesion);

                $this->removeSesionId($aula, $id);
                $em->persist($aula);

                $idsClientesSesion = explode('&', $sesion->getIdsClientes());
                $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
                $clientes = $this->getArrayEntidades($repositoryUsuarios, $idsClientesSesion);
                foreach ($clientes as $cliente) {
                    $this->removeSesionId($cliente, $id);
                    $em->persist($cliente);
                }
                
                $em->flush();
                $request->getSession()->getFlashBag()->add('mensaje', 'La sesión se canceló correctamente');
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
        $entity = $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
    }

    private function getArrayEntidades($repository, $array) {
        for ($i = 0; $i < count($array); $i++) {
            $resultado[$i] = $repository->find($array[$i]);
        }
        return $resultado;
    }

    private function removeSesionId($entity, $id) {
        $pos = strpos($entity->getSesiones(), strval($id));
        $cifra = strlen(strval($id));
        ($pos > 0) ? $entity->setSesiones(substr($entity->getSesiones(), 0, $pos - 1) . substr($entity->getSesiones(), $pos + $cifra)) :
                        $entity->setSesiones(substr($entity->getSesiones(), $pos + ($cifra + 1)));
    }

    private function actualizarValores($hoy, $mes, $limite) {
        if ($hoy > 28 && $limite == 30) {
            $mes++;
            $hoy = 1;
        } elseif ($hoy > 29 && $limite == 31) {
            $mes++;
            if ($mes == 13) {
                $mes = 1;
            }
            $hoy = 1;
        } elseif ($hoy > 26 && $mes == 02) {
            $mes++;
            $hoy = 1;
        }
    }
    
    private function findFechaReserva($diaReserva, $mes) {
        $pos = strpos($diaReserva->getPeriodo(), "&");
        $horaReserva = substr($diaReserva->getPeriodo(), 0, $pos);
        $diaReserva->setPeriodo(substr($diaReserva->getPeriodo(), $pos + 1));
        $fechaReserva = $diaReserva->getFechaInicio() . "/" . $mes . " : " . $horaReserva;
        return $fechaReserva;
    }
    
    private function isWeekend($dia, $mes, $cambio) {
        $fecha = date('Y')+$cambio . '-' . $mes . '-' . $dia;
        $diaS = date('w', strtotime($fecha));
        return ($diaS == 0 || $diaS == 6 );
    }
            
}
