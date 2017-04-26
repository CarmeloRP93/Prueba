<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormError;
use Crivero\PruebaBundle\Entity\Comentarios;
use Crivero\PruebaBundle\Form\ComentariosType;

class MensajeriaController extends Controller {

    public function enviarMensajeAction() {
        $comentario = new Comentarios();
        $referer = $this->getRequest()->headers->get('referer');
        $destino = null;
        if ($referer) {
            //print_r(explode('/', $referer));
            $url = explode('/', $referer);
            if ($url[6] == 'cliente' || $url[6] == 'monitor') {
                $id = $url[7];
                $destino = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->find($id)->getEmail();
            }
        }
        $form = $this->createMessageForm($comentario);
        return $this->render('CriveroPruebaBundle:Mensajes:nuevoMensaje.html.twig', array('form' => $form->createView(),
                    'destino' => $destino));
    }

    private function createMessageForm(Comentarios $entity) {
        $form = $this->createForm(new ComentariosType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_enviando'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function enviandoAction(Request $request) {
        $comentario = new Comentarios();
        $form = $this->createMessageForm($comentario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
            $dest = $repositoryUsuarios->getDestinatario($form->get('destinatario')->getData());
            if ($dest != null) {
                $comentario->setIdDestinatario($dest[0]->getId());
                $em = $this->getDoctrine()->getManager();
                $em->persist($comentario);
                $em->flush();
                return $this->redirect($this->generateUrl('crivero_prueba_mensajes_enviados'));
            } else {
                $form->get('destinatario')->addError(new FormError('Este destinatario no existe.'));
            }
        }
        $destino = $form->get('destinatario')->getData();
        return $this->render('CriveroPruebaBundle:Mensajes:nuevoMensaje.html.twig', array('form' => $form->createView(),
                    'destino' => $destino));
    }

    public function responderMensajeAction($id) {
        $comentario = new Comentarios();
        $destino = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->find($id)->getEmail();
        
        $asunto = null;
        $referer = $this->getRequest()->headers->get('referer');
        if ($referer && strpos($referer, 'mensaje')) {
            $idMensaje = explode('/', $referer)[7];
            $asunto = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Comentarios")->find($idMensaje)->getAsunto();
        }
        $form = $this->createMessageForm($comentario);
        return $this->render('CriveroPruebaBundle:Mensajes:nuevoMensaje.html.twig', array('form' => $form->createView(),
                    'destino' => $destino, 'asunto' => 'RE: '.$asunto));
    }

    public function mensajesRecibidosAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Comentarios");
        $mensajesRecibidos = $repository->getMensajesRecibidos($this->getUser()->getId());

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $mensajesRecibidos, $request->query->getInt('page', 1), 9);

        $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $remitentes = null;
        foreach ($mensajesRecibidos->getResult() as $clave => $mensaje) {
            $remitentes[$clave] = $repositoryUsuarios->find($mensaje->getIdRemitente())->getEmail();
        }

        return $this->render('CriveroPruebaBundle:Mensajes:recibidos.html.twig', array('pagination' => $pagination,
                    'remitentes' => $remitentes));
    }

    public function mensajesEnviadosAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Comentarios");
        $mensajesEnviados = $repository->getMensajesEnviados($this->getUser()->getId());

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $mensajesEnviados, $request->query->getInt('page', 1), 9);

        $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $destinatarios = null;
        foreach ($mensajesEnviados->getResult() as $clave => $mensaje) {
            $destinatarios[$clave] = $repositoryUsuarios->find($mensaje->getIdDestinatario())->getEmail();
        }

        return $this->render('CriveroPruebaBundle:Mensajes:enviados.html.twig', array('pagination' => $pagination,
                    'destinatarios' => $destinatarios));
    }

    public function mensajeAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Comentarios");
        $mensaje = $repository->find($id);
        $remitente = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->find($mensaje->getIdRemitente());

        return $this->render('CriveroPruebaBundle:Mensajes:mensaje.html.twig', array('mensaje' => $mensaje,
                    'remitente' => $remitente));
    }

}
