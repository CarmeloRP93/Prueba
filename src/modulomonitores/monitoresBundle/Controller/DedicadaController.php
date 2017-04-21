<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;
use Crivero\PruebaBundle\Form\SesionesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class DedicadaController extends Controller {

    public function sesionesDedicadasAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.estado = 'validada' AND s.cliente != 'normal'" ;
        $sesiones = $em->createQuery($dql)->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        return $this->render('modulomonitoresmonitoresBundle:Default:sesionesDedicadas.html.twig', array("pagination" => $pagination));
    }

    public function sesionDedicadaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        return $this->render('modulomonitoresmonitoresBundle:Default:sesionDedicada.html.twig', array("sesion" => $sesion));
    }

    public function misSesionesDedicadasAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $usuarioId = $this->getUser()->getId();
        $dql = "SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.idMonitor = :id AND s.cliente != 'normal'" ;
        $sesiones = $em->createQuery($dql)->setParameter('id', $usuarioId)->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        return $this->render('modulomonitoresmonitoresBundle:Default:misSesionesDedicadas.html.twig', array("pagination" => $pagination));
    }

    public function miSesionDedicadaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        $deleteForm = $this->createDeleteFormDedicada($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Default:miSesionDedicada.html.twig', array("sesion" => $sesion, 'delete_form' => $deleteForm->createView()));
    }

    private function createDeleteFormDedicada($sesion) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('modulomonitores_monitores_eliminarSesionDedicada', array('id' => $sesion->getId())))
                        ->setMethod('DELETE')
                        ->getForm();
    }

    public function eliminarSesionAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        $form = $this->createDeleteForm($sesion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->remove($sesion);
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido eliminada con éxito.');
            return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesMonitores'));
        }
    }

    public function eliminarSesionDedicadaAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        $form = $this->createDeleteFormDedicada($sesion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->remove($sesion);
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido eliminada con éxito.');
            return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesDedicadas'));
        }
    }

    public function solEliminarSesionDedicadaAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createSolEliminarSesionDeForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Default:solEliminarSesionDe.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
    }

    private function createSolEliminarSesionDeForm(Sesiones $entity) {
        $form = $this->createForm(new SesionesType(), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_solElimSe', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function solElimSeDEAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createSolEliminarSesionDeForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sesion->setEstado("solEliminar");
            $sesion->setEstadoCliente("solEliminar");
            $motivos = $form->get('motivos')->getData();
            if ($motivos != null) {
                $em->flush();
                return $this->redirect($this->generateUrl('modulomonitores_monitores_sesionesDedicadas', array('id' => $sesion->getId())));
            } else {
                $form->get('motivos')->addError(new FormError('Rellene el campo gracias'));
            }
        }
        return $this->render('modulomonitoresmonitoresBundle:Default:solEliminarSesionDe.html.twig', array('form' => $form->createView()));
    }

}
