<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;

class DedicadaController extends Controller {

    public function sesionesDedicadasAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $repository->findAll();
        return $this->render('modulomonitoresmonitoresBundle:Default:sesionesDedicadas.html.twig', array("sesiones" => $sesiones));
    }

    public function sesionDedicadaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        return $this->render('modulomonitoresmonitoresBundle:Default:sesionDedicada.html.twig', array("sesion" => $sesion));
    }

}
