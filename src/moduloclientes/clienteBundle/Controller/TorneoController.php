<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TorneoController extends Controller {

    public function torneosClientesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Torneos");
        $torneos = $repository->findAll();
        return $this->render('moduloclientesclienteBundle:Default:torneosClientes.html.twig', array("torneos" => $torneos));
    }

    public function torneoClientesAction($id) {
        return $this->render('moduloclientesclienteBundle:Default:torneoClientes.html.twig', array("torneo" => $id));
    }

}
