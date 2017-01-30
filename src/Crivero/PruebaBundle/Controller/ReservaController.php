<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class ReservaController extends Controller
{
    
    public function ReservasAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT r FROM CriveroPruebaBundle:Reservas r";
        $reservas = $em->createQuery($dql);
        
         $paginator = $this->get('knp_paginator');
         $pagination = $paginator->paginate(
                $reservas, $request->query->getInt('page', 1),
                5);
       return $this->render('CriveroPruebaBundle:Default:reservas.html.twig', array("pagination"=>$pagination));
    }
    
}
