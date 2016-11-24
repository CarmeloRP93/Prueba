<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

}
