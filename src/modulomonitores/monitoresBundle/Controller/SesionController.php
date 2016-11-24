<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;
use Crivero\PruebaBundle\Form\SesionesType;
use Symfony\Component\HttpFoundation\Request;
class SesionController extends Controller {

    public function sesionesMonitoresAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $repository->findAll();
        return $this->render('modulomonitoresmonitoresBundle:Default:sesionesMonitores.html.twig', array("sesiones" => $sesiones));
    }

    public function sesionMonitoresAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        return $this->render('modulomonitoresmonitoresBundle:Default:sesionMonitores.html.twig', array("sesion" => $sesion));
    }
    public function nuevaSesionAction() {
      $sesion = new Sesiones();
      $form = $this->createCreateForm($sesion);
      
      return $this->render('modulomonitoresmonitoresBundle:Default:nuevaSesion.html.twig', array('form' => $form->createView()));
    }
    
    private function createCreateForm(Sesiones $entity){
        $form = $this->createForm(new SesionesType(), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_crearSesion'),
            'method' => 'POST'
            )); 
        return $form;
    }
    public function crearSesionAction(Request $request) {
      $sesion = new Sesiones();
      $form = $this->createCreateForm($sesion);
      $form->handleRequest($request);
      
      if($form->isValid())
      {
        $sesion->setEstado("pendiente");        
        $sesion->setEstadoCliente("no disponible");
        $sesion->setnClientes(0);
        $em=$this->getDoctrine()->getManager();
        $em->persist($sesion);
        $em->flush();
        
        return $this->redirect($this->generateUrl('modulomonitores_monitores_sesionesMonitores'));
      }
      return $this->render('modulomonitoresmonitoresBundle:Default:nuevaSesion.html.twig', array('form' => $form->createView()));
    }
}
