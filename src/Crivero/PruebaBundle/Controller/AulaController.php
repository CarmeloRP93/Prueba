<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AulaController extends Controller {
    
    public function aulasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->getAulas();
        
         $paginator = $this->get('knp_paginator');
         $pagination = $paginator->paginate(
                $aulas, $request->query->getInt('page', 1),
                5);
       return $this->render('CriveroPruebaBundle:Aulas:aulas.html.twig', array("pagination"=>$pagination));
    }
    
    public function aulaAction($id) {
       $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
       $aula=$repository->find($id);
       
       $idsSesionesAula = explode('&', $aula->getSesiones());
       $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
       $sesionesAula = $this->getArrayEntidades($repositorySesiones, $idsSesionesAula);
        
       return $this->render('CriveroPruebaBundle:Aulas:aula.html.twig', array("aula"=>$aula, "sesiones"=>$sesionesAula));
    }
    
    private function getArrayEntidades($repository, $array){
        for ($i=0; $i<count($array); $i++) {
            $resultado[$i] = $repository->find($array[$i]);
        }
        return $resultado;
    }
}