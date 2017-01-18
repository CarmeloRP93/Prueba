<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompeticionController extends Controller {

    public function competicionesClientesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $competiciones = $repository->findAll();
        return $this->render('moduloclientesclienteBundle:Default:competicionesClientes.html.twig', array("competiciones" => $competiciones));
    }

    public function competicionClientesAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $competicion = $repository->find($id);
        return $this->render('moduloclientesclienteBundle:Default:competicionClientes.html.twig', array("competicion" => $competicion));
    }
}
