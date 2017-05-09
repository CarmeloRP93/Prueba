<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;

class InicioController extends Controller {

    public function paginaInicioAction() {
        $publicaciones = $this->getDoctrine()->getRepository('CriveroPruebaBundle:Publicaciones')->getPublicaciones();
        $publicacionesF = array();
        foreach ($publicaciones as $clave => $publicacion) {
            if (date_diff(date_create(date('Y-m-d')), $publicacion->getFechaFinalizacion())->format('%R') === '+') {
                $publicacionesF[$clave] = $publicacion;
            }
        }
        return $this->render('CriveroPruebaBundle:Default:inicio.html.twig', array(
                    'publicaciones' => $publicacionesF));
    }


}
