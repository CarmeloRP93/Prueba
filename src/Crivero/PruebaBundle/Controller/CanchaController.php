<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Crivero\PruebaBundle\Entity\Canchas;
class CanchaController extends Controller
{
    
     
    public function canchasAction()
    {
         $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $canchas=$repository->findAll();
       return $this->render('CriveroPruebaBundle:Default:canchas.html.twig', array("canchas"=>$canchas));
    }
    
    public function canchaAction($id)
    {
       $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
       $cancha=$repository->find($id);
       return $this->render('CriveroPruebaBundle:Default:cancha.html.twig', array("cancha"=>$cancha));
    }

}
