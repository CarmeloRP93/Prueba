<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;

class SesionController extends Controller
{
    public function sesionesClientesAction()
    {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones=$repository->findAll();
       return $this->render('moduloclientesclienteBundle:Default:sesionesClientes.html.twig', array("sesiones"=>$sesiones));
    }
    public function sesionClientesAction($id)
    {
       $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
       $sesion=$repository->find($id);
       return $this->render('moduloclientesclienteBundle:Default:sesionClientes.html.twig', array("sesion"=>$sesion));
    }
}
