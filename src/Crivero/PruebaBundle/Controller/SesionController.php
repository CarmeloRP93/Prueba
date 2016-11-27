<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;
use Crivero\PruebaBundle\Form\SesionesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class SesionController extends Controller {

    public function sesionesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $repository->findAll();
        return $this->render('CriveroPruebaBundle:Default:sesiones.html.twig', array("sesiones" => $sesiones));
    }

    public function sesionAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        return $this->render('CriveroPruebaBundle:Default:sesion.html.twig', array("sesion" => $sesion));
    }

    public function aceptarSesionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }

        $sesion->setEstado("validada");
        $sesion->setEstadoCliente("disponible");
        $em->flush();
        return $this->redirect($this->generateUrl('crivero_prueba_sesion', array('id' => $sesion->getId())));
    }

    public function cancelarSesionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createCancelForm($sesion);
        return $this->render('CriveroPruebaBundle:Default:cancelarSesion.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
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
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createCancelForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sesion->setEstado("cancelada");
            $sesion->setEstadoCliente("cancelada");
            $observaciones = $form->get('observaciones')->getData();
            if ($observaciones != null) {
                $em->flush();
                return $this->redirect($this->generateUrl('crivero_prueba_sesion', array('id' => $sesion->getId())));
            } else {
                $form->get('observaciones')->addError(new FormError('Rellene el campo gracias'));
            }
        }
        return $this->render('CriveroPruebaBundle:Default:cancelarSesion.html.twig', array('form' => $form->createView()));
    }
    public function rechazarSesionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createRechForm($sesion);
        return $this->render('CriveroPruebaBundle:Default:rechazarSesion.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
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
        return $this->render('CriveroPruebaBundle:Default:rechazarSesion.html.twig', array('form' => $form->createView()));
    }

}
