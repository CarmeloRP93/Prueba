<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Crivero\PruebaBundle\Entity\Publicaciones;
use Crivero\PruebaBundle\Entity\Notificaciones;
use Crivero\PruebaBundle\Form\PublicacionesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;

class PublicacionesController extends Controller {

    public function publicacionesAction() {
        $publicaciones = $this->getDoctrine()->getRepository('CriveroPruebaBundle:Publicaciones')->getPublicaciones();
        $publicacionesF = array();
        foreach ($publicaciones as $clave => $publicacion) {
            if (date_diff(date_create(date('Y-m-d')), $publicacion->getFechaFinalizacion())->format('%R') === '+') {
                $publicacionesF[$clave] = $publicacion;
            }
        }
        return $this->render('CriveroPruebaBundle:Publicaciones:publicaciones.html.twig', array(
                    'publicaciones' => $publicacionesF, 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function nuevaPublicacionAction() {
        $publicacion = new Publicaciones();
        $form = $this->createPublicacionForm($publicacion);

        return $this->render('CriveroPruebaBundle:Publicaciones:nuevaPublicacion.html.twig', array(
                    'form' => $form->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function createPublicacionForm(Publicaciones $entity) {
        $form = $this->createForm(new PublicacionesType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_publicar'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function publicarAction(Request $request) {
        $publicacion = new Publicaciones();
        $form = $this->createPublicacionForm($publicacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fechaF = $form->get('fechaFinalizacion')->getData();
            if (date_diff($fechaF, date_create(date('Y-m-d')))->format('%R') === '+') {
                $form->get('fechaFinalizacion')->addError(new FormError('Seleccione una fecha valida.'));
                return $this->render('CriveroPruebaBundle:Publicaciones:nuevaPublicacion.html.twig', array(
                            'form' => $form->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
            }

            $file = $form->get('imagen')->getData();
            $file->move("C://xampp//htdocs//Prueba//web//images", $file->getClientOriginalName());
            $publicacion->setImagen($file->getClientOriginalName());
            $em = $this->getDoctrine()->getManager();
            $em->persist($publicacion);
            $em->flush();

            $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
            foreach ($usuarios as $usuario) {
                if ($usuario->getTipo() == 1) {
                    continue;
                }
                $notificacion = new Notificaciones();
                $notificacion->setIdDestinatario($usuario->getId());
                $notificacion->setIdEntidad($publicacion->getId());
                $notificacion->setMensaje("Hay una nueva publicación" );
                $notificacion->setIdOrigen($this->getUser()->getId());
                $notificacion->setEstado("No leido");
                $notificacion->setConcepto("Publicacion");
                $em->persist($notificacion);
                $em->flush();
            }
            
            return $this->redirect($this->generateUrl('crivero_prueba_publicaciones'));
        }
        return $this->render('CriveroPruebaBundle:Publicaciones:nuevaPublicacion.html.twig', array(
                    'form' => $form->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function getNewNotification() {
        $repositoryN = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Notificaciones");
        $notificaciones = $repositoryN->getNotificaciones($this->getUser()->getId());
        $notificacionesSinLeer = array();
        foreach ($notificaciones as $clave => $notificacion) {
            if ($notificacion->getEstado() == "No leido") {
                $notificacionesSinLeer[$clave] = $notificacion;
            }
        }
        return $notificacionesSinLeer;
    }

}
