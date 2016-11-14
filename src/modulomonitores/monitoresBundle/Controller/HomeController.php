<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    public function homeMonitoresAction()
    {
       return $this->render('modulomonitoresmonitoresBundle:Default:homeMonitores.html.twig');
    }
   
}