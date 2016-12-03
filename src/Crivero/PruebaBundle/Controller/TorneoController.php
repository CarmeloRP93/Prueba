<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TorneoController extends Controller
{     
    public function torneosAction()
    {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Torneos");
        $torneos=$repository->findAll();
        return $this->render('CriveroPruebaBundle:Default:torneos.html.twig',array("torneos"=>$torneos));
    }
    
    public function torneoAction($id)
    {
      $repositoryTorneo = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Torneos");
      $torneo=$repositoryTorneo->find($id);
      $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
      $equipos=$repositoryEquipos->findAll();
      return $this->render('CriveroPruebaBundle:Default:torneo.html.twig', array("torneo"=>$torneo,"equipos"=>$equipos));
    }   
}
