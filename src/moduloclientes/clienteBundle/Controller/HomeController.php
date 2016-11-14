<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
  
    public function homeClientesAction()
    {
       return $this->render('moduloclientesclienteBundle:Default:homeClientes.html.twig');
    }
    
}
