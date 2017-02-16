<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CanchaController extends Controller {

    public function canchasClientesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $canchas = $repository->findAll();
        return $this->render('moduloclientesclienteBundle:Canchas:canchasClientes.html.twig', array("canchas" => $canchas));
    }

    public function canchaClientesAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $cancha = $repository->find($id);
        return $this->render('moduloclientesclienteBundle:Canchas:canchaClientes.html.twig', array("cancha" => $cancha));
    }

}
