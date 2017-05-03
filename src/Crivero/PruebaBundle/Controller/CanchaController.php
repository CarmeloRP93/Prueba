<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Crivero\PruebaBundle\Entity\Canchas;
use Crivero\PruebaBundle\Entity\Notificaciones;
use Crivero\PruebaBundle\Form\CanchasType;
use Crivero\PruebaBundle\Entity\HorariosCanchas;
use Crivero\PruebaBundle\Entity\HorariosCanchasRepository;
use Symfony\Component\Form\FormError;

class CanchaController extends Controller {

    public function canchasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $canchas = $repository->searchCanchas($searchQuery) :
                        $canchas = $repository->getCanchas();
        
        $flags = array();
        foreach ($canchas as $cancha) {
            $nReservas = count($this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas")->getAllReservasCancha($cancha->getId())->getResult());
            if ($nReservas > 0) {
                $flags[$cancha->getId()] = 1;
            } else {
                $flags[$cancha->getId()] = 0;
            }
        }
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $canchas, $request->query->getInt('page', 1), 5);

        $deleteFormAjax = $this->createCustomForm(':CANCHA_ID', 'DELETE', 'crivero_prueba_cancha_eliminar');
        return $this->render('CriveroPruebaBundle:Canchas:canchas.html.twig', array("pagination" => $pagination,
                    "delete_form_ajax" => $deleteFormAjax->createView(), 'flags' => $flags,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function canchaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $cancha = $repository->find($id);
        $nReservas = count($this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas")
                           ->getAllReservasCancha($id)->getResult());

        $deleteForm = $this->createCustomForm($cancha->getId(), 'DELETE', 'crivero_prueba_cancha_eliminar');
        return $this->render('CriveroPruebaBundle:Canchas:cancha.html.twig', array("cancha" => $cancha,
                    "delete_form" => $deleteForm->createView(), 'nReservas' => $nReservas,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function canchaReservasAction($id, Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas");
        $reservas = $repository->getAllReservasCancha($id);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $reservas, $request->query->getInt('page', 1), 6);

        return $this->render('CriveroPruebaBundle:Reservas:reservasCancha.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function disponibilidadCanchaAction($id) {
        $cancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->find($id);
        $repositoryH = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosCanchas");
        
        $mes = date('m');
        $cambio = false;
        for ($i = 1; $i < 8; $i++) {
            $dia = date('d') + $i;
            if ($dia > date('t')) {
                $dia = $dia - date('t');
                if ($cambio == false) {
                    $mes++;
                    if ($mes < 10) $mes = '0' . $mes;
                    $cambio = true;
                }
            }
            if ($dia < 10) $dia = '0' . $dia;
            $diaMes = $dia . '-' . $mes;

            $horarios[$i] = $repositoryH->getInstancia($id, $diaMes)[0];
        }
        return $this->render('CriveroPruebaBundle:Canchas:disponibilidadCancha.html.twig', array("horarios" => $horarios,
                    'cancha' => $cancha, 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function nuevaCanchaAction() {
        $cancha = new Canchas();
        $form = $this->createCreateForm($cancha);

        return $this->render('CriveroPruebaBundle:Canchas:nuevaCancha.html.twig', array('form' => $form->createView(),
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function crearCanchaAction(Request $request) {
        $cancha = new Canchas();
        $form = $this->createCreateForm($cancha);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (empty($form->get('imagen')->getData())) {
                $form->get('imagen')->addError(new FormError('Seleccione una imagen.'));
            } else {
                $cancha->setHorario('09:00 - 22:00');
                $cancha->setValoracion(0);
                $file = $form->get('imagen')->getData();
                $file->move("C://xampp//htdocs//Prueba//web//images", $file->getClientOriginalName());
                $cancha->setImagen("images/" . $file->getClientOriginalName());
                $em = $this->getDoctrine()->getManager();
                $em->persist($cancha);
                $em->flush();

                $this->setHorariosCancha($cancha->getId(), $em);

                $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
                foreach ($usuarios as $usuario) {
                    if ($usuario->getTipo() == 2) {
                        $notificacion = new Notificaciones();
                        $notificacion->setIdDestinatario($usuario->getId());
                        $notificacion->setIdEntidad($cancha->getId());
                        $notificacion->setMensaje("Una nueva cancha ha sido registrada en el sistema");
                        $notificacion->setIdOrigen($this->getUser()->getId());
                        $notificacion->setEstado("No leido");
                        $notificacion->setConcepto("Cancha");
                        $em->persist($notificacion);
                        $em->flush();
                    }
                }

                $request->getSession()->getFlashBag()->add('mensaje', 'La cancha ha sido creada con éxito.');
                return $this->redirect($this->generateUrl('crivero_prueba_canchas'));
            }
        }
        return $this->render('CriveroPruebaBundle:Canchas:nuevaCancha.html.twig', array('form' => $form->createView(),
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function createCreateForm(Canchas $entity) {
        $form = $this->createForm(new CanchasType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_cancha_crear'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function editarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $cancha = $this->findEntity($id, $em, 'CriveroPruebaBundle:Canchas');

        $form = $this->createEditForm($cancha);
        return $this->render('CriveroPruebaBundle:Canchas:editarCancha.html.twig', array('cancha' => $cancha,
                    'form' => $form->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function createEditForm(Canchas $entity) {
        $form = $this->createForm(new CanchasType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_cancha_actualizar', array('id' => $entity->getId())),
            'method' => 'PUT'));
        return $form;
    }

    public function actualizarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $cancha = $this->findEntity($id, $em, 'CriveroPruebaBundle:Canchas');

        $form = $this->createEditForm($cancha);
        $originalImage = $cancha->getImagen();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('imagen')->getData() == null) {
                $cancha->setImagen($originalImage);
            } else {
                $file = $form->get('imagen')->getData();
                $file->move("C://xampp//htdocs//Prueba//web//images", $file->getClientOriginalName());
                $cancha->setImagen("images/" . $file->getClientOriginalName());
            }
            $em->flush();

            $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
            foreach ($usuarios as $usuario) {
                if ($usuario->getTipo() == 2) {
                    $notificacion = new Notificaciones();
                    $notificacion->setIdDestinatario($usuario->getId());
                    $notificacion->setIdEntidad($cancha->getId());
                    $notificacion->setMensaje("La cancha " . $cancha->getTipo() . " ha sido modificada");
                    $notificacion->setIdOrigen($this->getUser()->getId());
                    $notificacion->setEstado("No leido");
                    $notificacion->setConcepto("Cancha");
                    $em->persist($notificacion);
                    $em->flush();
                }
            }

            $request->getSession()->getFlashBag()->add('mensaje', 'La cancha ha sido modificada correctamente.');
            return $this->redirect($this->generateUrl('crivero_prueba_cancha', array('id' => $id)));
        }
        return $this->render('CriveroPruebaBundle:Canchas:editarCancha.html.twig', array('cancha' => $cancha,
                    'form' => $form->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function eliminarCanchaAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $cancha = $this->findEntity($id, $em, 'CriveroPruebaBundle:Canchas');

        $form = $this->createCustomForm($cancha->getId(), 'DELETE', 'crivero_prueba_cancha_eliminar');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($request->isXmlHttpRequest()) {
                $res = $this->deleteCancha($em, $cancha);

                return new Response(
                        json_encode(array('removed' => $res['removed'], 'message' => $res['message'])), 200, array('Content-Type' => 'application/json')
                );
            }

            $res = $this->deleteCancha($em, $cancha);
            $request->getSession()->getFlashBag()->add('mensaje', $res['message']);
            return $this->redirect($this->generateUrl('crivero_prueba_canchas'));
        }
    }

    private function deleteCancha($em, $cancha) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosCanchas");
        $repository->removeHorariosCancha($cancha->getId());
        $repositoryN = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Notificaciones");
        $repositoryN->removeNotificacionesEntidad($cancha->getId(), "Cancha");

        $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
        foreach ($usuarios as $usuario) {
            if ($usuario->getTipo() == 2) {
                $notificacion = new Notificaciones();
                $notificacion->setIdDestinatario($usuario->getId());
                $notificacion->setIdEntidad($cancha->getId());
                $notificacion->setMensaje("La cancha " . $cancha->getTipo() . " ha sido eliminada del sistema");
                $notificacion->setIdOrigen($this->getUser()->getId());
                $notificacion->setEstado("No leido");
                $notificacion->setConcepto("Celiminada");
                $em->persist($notificacion);
                $em->flush();
            }
        }
        $em->remove($cancha);
        $em->flush();

        $message = 'La cancha ha sido eliminada con éxito.';
        $remove = 1;
        return array('removed' => $remove, 'message' => $message);
    }

    private function createCustomForm($id, $method, $route) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl($route, array('id' => $id)))
                        ->setMethod($method)
                        ->getForm();
    }

    private function findEntity($id, $em, $repository) {
        $cancha = $em->getRepository($repository)->find($id);
        if (!$cancha) {
            throw $this->createNotFoundException('Cancha no encontrada');
        }
        return $cancha;
    }

    private function setHorariosCancha($canchaId, $em) {
        $cont = 1;
        $mes = date('m');
        $limite = date('t');
        for ($i = (int) date('d'); $cont <= 31; $i++) {
            if ($i == $limite + 1) {
                $i = 1;
                if ($mes == 12)
                    $mes = 0;
                ($mes <= date('n')) ? $mes = "0" . ($mes + 1) : $mes = $mes + 1;
                $limite = date('t', strtotime(date('Y') . "-" . $mes . "-01"));
            }
            $horario = new HorariosCanchas();
            $horario->setPeriodo("09:00-10:00&10:00-11:00&11:00-12:00&12:00-13:00&13:00-14:00&14:00-15:00&"
                    . "15:00-16:00&16:00-17:00&17:00-18:00&18:00-19:00&19:00-20:00&20:00-21:00&21:00-22:00");
            $horario->setCancha($canchaId);
            ($i <= 9) ? $dia = "0" . $i : $dia = $i;
            $horario->setFechaInicio($dia . "-" . $mes);
            $horario->setFechaInicioSesion($dia);
            $em->persist($horario);
            $cont++;
        }
        $em->flush();
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
