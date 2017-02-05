<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller {
    
    public function loginAction() {
        $usuario=$this->getUser();
        if ($usuario) {
            return $this->redirect($this->generateUrl('crivero_prueba_home'));
        } else {
            if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
                $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
            } else {
                $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
            }
            $last_username = $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME);
            return $this->render('CriveroPruebaBundle:Usuarios:login.html.twig', array('error' => $error, 'last_username' => $last_username));       
        }
    }
    
    public function loginCheckAction() {
    }
}