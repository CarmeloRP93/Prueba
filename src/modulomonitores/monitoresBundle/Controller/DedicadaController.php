<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;
use Crivero\PruebaBundle\Form\SesionesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class DedicadaController extends Controller {

    public function sesionesDedicadasAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $repository->findAll();
        return $this->render('modulomonitoresmonitoresBundle:Default:sesionesDedicadas.html.twig', array("sesiones" => $sesiones));
    }

    public function sesionDedicadaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
         $deleteForm = $this->createDeleteFormDedicada($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Default:sesionDedicada.html.twig', array("sesion" => $sesion, 'delete_form' => $deleteForm->createView()));
    }
    public function misSesionesDedicadasAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $repository->findAll();
        return $this->render('modulomonitoresmonitoresBundle:Default:misSesionesDedicadas.html.twig', array("sesiones" => $sesiones));
    }

    public function miSesionDedicadaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        return $this->render('modulomonitoresmonitoresBundle:Default:miSesionDedicada.html.twig', array("sesion" => $sesion));
    }

    private function createDeleteFormDedicada($sesion) {
        return $this->createFormBuilder()
                ->setAction($this->generateUrl('modulomonitores_monitores_eliminarSesionDedicada', array('id' => $sesion->getId())))
                        ->setMethod('DELETE')
                        ->getForm();
    }
    public function eliminarSesionDedicadaAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $sesion=$em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        $form = $this->createDeleteFormDedicada($sesion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->remove($sesion);
            $em->flush();

                return $this->redirect($this->generateUrl('modulomonitores_monitores_sesionesDedicadas'));
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
