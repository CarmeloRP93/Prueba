<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SecurityController extends Controller {

    public function loginAction() {
        //$authenticationUtils = $this->get('security.authentication.manager');

//        $error = $authenticationUtils->getLastAuthenticationError();

//        $lastEmail = $authenticationUtils->getLastEmail();

        return $this->render('CriveroPruebaBundle:Default:login.html.twig');
    }
    
     public function loginCheckAction()
    {
        return $this->render('CriveroPruebaBundle:Default:clientes.html.twig');
    }

}
