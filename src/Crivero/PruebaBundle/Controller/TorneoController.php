<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TorneoController extends Controller
{     
    public function torneosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT torneos
            FROM CriveroPruebaBundle:Torneos torneos');
        $torneos=$query->getResult();
        return $this->render('CriveroPruebaBundle:Default:torneos.html.twig',array("torneos"=>$torneos));
    }
    
    public function torneoAction($id)
    {
      $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Torneos");
      $torneo=$repository->find($id);
      $em = $this->getDoctrine()->getManager();
      $query2 = $em->createQuery('SELECT equipos
            FROM CriveroPruebaBundle:Equipos equipos');
      $equipos=$query2->getResult(); 
      return $this->render('CriveroPruebaBundle:Default:torneo.html.twig', array("torneo"=>$torneo,"equipos"=>$equipos));
    }   
}