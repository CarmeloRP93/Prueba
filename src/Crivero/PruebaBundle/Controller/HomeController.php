<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
   
    public function indexAction($name)
    {
        return $this->render('CriveroPruebaBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function homeAction()
    {
       return $this->render('CriveroPruebaBundle:Default:home.html.twig');
    }
   
}
