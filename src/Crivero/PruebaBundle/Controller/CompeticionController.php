<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        $competicion->setEstadoCompeticion("Validada");
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
    
    private function findEntity($id, $em, $repository) {
        $entity = $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
    }
}