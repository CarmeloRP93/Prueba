<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Competiciones;
use Crivero\PruebaBundle\Form\CompeticionesType;
use Symfony\Component\HttpFoundation\Request;

class CompeticionController extends Controller { 
    
    public function competicionesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $competiciones=$repository->findAll();
        return $this->render('CriveroPruebaBundle:Competiciones:competiciones.html.twig',array("competiciones"=>$competiciones));
    }
    
    public function competicionAction($id) {
      $repositoryCompeticion = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
      $competicion=$repositoryCompeticion->find($id);
      $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
      $equipos=$repositoryEquipos->findAll();
      return $this->render('CriveroPruebaBundle:Competiciones:competicion.html.twig', array("competicion"=>$competicion,"equipos"=>$equipos));
    }
    
    public function validarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $competicion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Competiciones');
        $competicion->setEstadoCompeticion("Validado");
        $em->persist($competicion);
        $em->flush();
        return $this->redirect($this->generateUrl('crivero_prueba_competicion', array('id' => $competicion->getId())));
    }
    
    public function rechazarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $competicion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Competiciones');
        $competicion->setEstadoCompeticion("Rechazado");
        $em->persist($competicion);
        $em->flush();
        return $this->redirect($this->generateUrl('crivero_prueba_competicion', array('id' => $competicion->getId())));
    }
    
    public function cancelarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $competicion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Competiciones');
        $competicion->setEstadoCompeticion("Cancelado");
        $em->persist($competicion);
        $em->flush();
        return $this->redirect($this->generateUrl('crivero_prueba_competiciones', array('id' => $competicion->getId())));
    }
    
    public function nuevaAction() {
        $competicion = new Competiciones();
        $form = $this->createCreateForm($competicion);
        return $this->render('CriveroPruebaBundle:Competiciones:nuevaCompeticion.html.twig', array('form' => $form->createView()));
    }
    
    private function createCreateForm(Competiciones $entity) {
        $form = $this->createForm(new CompeticionesType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_competicion_crear'),
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
            $competicion->setEstadocompeticion("Validado");
            $em->persist($competicion);
            $em->flush();
            return $this->redirect($this->generateUrl('crivero_prueba_competiciones'));
        }
        return $this->render('CriveroPruebaBundle:Competiciones:nuevaCompeticion.html.twig', array('form' => $form->createView()));
    }
    
    private function findEntity($id, $em, $repository) {
        $entity = $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
    }
}