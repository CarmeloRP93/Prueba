<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompeticionController extends Controller { 
    
    public function competicionesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $competiciones=$repository->findAll();
        return $this->render('CriveroPruebaBundle:Default:competiciones.html.twig',array("competiciones"=>$competiciones));
    }
    
    public function competicionAction($id) {
      $repositoryCompeticion = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
      $competicion=$repositoryCompeticion->find($id);
      $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
      $equipos=$repositoryEquipos->findAll();
      return $this->render('CriveroPruebaBundle:Default:competicion.html.twig', array("competicion"=>$competicion,"equipos"=>$equipos));
    }  
}