<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class CanchaController extends Controller
{
    
     
    public function canchasAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT c FROM CriveroPruebaBundle:Canchas c";
        $canchas = $em->createQuery($dql);
        
         $paginator = $this->get('knp_paginator');
         $pagination = $paginator->paginate(
                $canchas, $request->query->getInt('page', 1),
                5);
       return $this->render('CriveroPruebaBundle:Default:canchas.html.twig', array("pagination"=>$pagination));
    }
    
    public function canchaAction($id)
    {
       $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
       $cancha=$repository->find($id);
       return $this->render('CriveroPruebaBundle:Default:cancha.html.twig', array("cancha"=>$cancha));
    }

}
