<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Competiciones;
use Crivero\PruebaBundle\Form\CompeticionesType;
use Symfony\Component\HttpFoundation\Request;

class CompeticionController extends Controller {

    public function competicionesClientesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $competiciones = $repository->findAll();
        return $this->render('moduloclientesclienteBundle:Competiciones:competicionesClientes.html.twig', array("competiciones" => $competiciones));
    }

    public function competicionClientesAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $competicion = $repository->find($id);
        return $this->render('moduloclientesclienteBundle:Competiciones:competicionClientes.html.twig', array("competicion" => $competicion));
    }
    
    public function nuevaAction() {
        $competicion = new Competiciones();
        $form = $this->createCreateForm($competicion);
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevaCompeticionClientes.html.twig', array('form' => $form->createView()));
    }
    
    private function createCreateForm(Competiciones $entity) {
        $form = $this->createForm(new CompeticionesType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_competicion_crear'),
            'method' => 'POST'
        ));
        return $form;
    }
    
    public function crearAction(Request $request) {
        $competicion = new Competiciones();
        $form = $this->createCreateForm($competicion);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $competicion->setEstadocompeticion("Pendiente");
            $em->persist($competicion);
            $em->flush();
            return $this->redirect($this->generateUrl('moduloclientes_cliente_competicionesClientes'));
        }
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevaCompeticionClientes.html.twig', array('form' => $form->createView()));
    }
}
