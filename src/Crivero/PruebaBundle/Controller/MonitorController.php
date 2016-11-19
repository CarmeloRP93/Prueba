<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Usuarios;

class MonitorController extends Controller
{

    public function monitoresAction()
    {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $usuarios=$repository->findAll();
       return $this->render('CriveroPruebaBundle:Default:monitores.html.twig', array("usuarios"=>$usuarios));
    }
    
    public function monitorAction($id)
    {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $monitor=$repository->find($id);
       return $this->render('CriveroPruebaBundle:Default:monitor.html.twig', array("monitor"=>$monitor));
    }
}