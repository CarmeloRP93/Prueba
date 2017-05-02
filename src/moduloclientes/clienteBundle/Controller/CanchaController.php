<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Comentarios;
use Crivero\PruebaBundle\Form\ComentariosType;
use Crivero\PruebaBundle\Entity\Valoraciones;
use Crivero\PruebaBundle\Form\ValoracionesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormError;
use Crivero\PruebaBundle\Entity\Notificaciones;

class CanchaController extends Controller {

    public function canchasClientesAction(Request $request) {
        $this->changeStateNotification($request->get('id'));
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $canchas = $repository->searchCanchas($searchQuery) :
                        $canchas = $repository->getCanchas();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $canchas, $request->query->getInt('page', 1), 5);

        return $this->render('moduloclientesclienteBundle:Canchas:canchasClientes.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function canchaClientesAction($id) {
        $this->changeStateNotification($id);
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $cancha = $repository->find($id);

        $repositoryHorarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosCanchas");
        $mes = date('m');
        $cambio = false;
        for ($i = 1; $i < 8; $i++) {
            $dia = date('d') + $i;
            if ($dia > date('t')) {
                $dia = $dia - date('t');
                if ($cambio == false) {
                    $mes++;
                    if ($mes < 10)
                        $mes = '0' . $mes;
                    $cambio = true;
                }
            }
            if ($dia < 10) {
                $dia = '0' . $dia;
            }
            $diaMes = $dia . '-' . $mes;

            $horarios[$i] = $repositoryHorarios->getInstancia($id, $diaMes)[0];
        }
        return $this->render('moduloclientesclienteBundle:Canchas:canchaClientes.html.twig', array("cancha" => $cancha, "horarios" => $horarios,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function escribirSugerenciaAction() {
        $comentario = new Comentarios();
        $referer = $this->getRequest()->headers->get('referer');
        $asunto = null;
        if ($referer) {
            $id = explode('/', $referer)[7];
            $asunto = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->find($id)->getTipo();
        }
        $form = $this->createCreateForm($comentario);
        $admins = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->getAdmin();
        return $this->render('moduloclientesclienteBundle:Canchas:escribirSugerencia.html.twig', array('form' => $form->createView(),
                    'asunto' => $asunto, 'admins' => $admins,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function añadirSugerenciaAction(Request $request) {
        $comentario = new Comentarios();
        $form = $this->createCreateForm($comentario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cliente = $this->getUser();
            $idCliente = $cliente->getId();
            $comentario->setIdRemitente($idCliente);

            $admins = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->getAdmin();
            $comentario->setIdDestinatario($admins[0]->getId());
            $comentario->setTipoComentario('Sugerencia cancha');
            $comentario->setEstado('nuevo');
            $em = $this->getDoctrine()->getManager();
            $em->persist($comentario);
            $em->flush();

            $request->getSession()->getFlashBag()->add('mensaje', 'Sugerencia enviada.');
            return $this->redirect($this->generateUrl('moduloclientes_cliente_canchasClientes'));
        }
        $asunto = $form->get('asunto')->getData();
        $admins = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->getAdmin();
        return $this->render('moduloclientesclienteBundle:Canchas:escribirSugerencia.html.twig', array('form' => $form->createView(),
                    'asunto' => $asunto, 'admins' => $admins,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function createCreateForm(Comentarios $entity) {
        $form = $this->createForm(new ComentariosType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_añadirSugerencia'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function valorarAction() {
        $valoracion = new Valoraciones();
        $referer = $this->getRequest()->headers->get('referer');
        $idCancha = null;
        if ($referer) {
            $id = explode('/', $referer)[7];
            $idCancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas")->find($id)->getIdCancha();
        }
        $form = $this->createCreateFormVal($valoracion);
        return $this->render('moduloclientesclienteBundle:Canchas:valorar.html.twig', array('form' => $form->createView(),
                    'idCancha' => $idCancha,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function añadirValoracionAction(Request $request) {
        $valoracion = new Valoraciones();
        $form = $this->createCreateFormVal($valoracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
            $idCancha = $form->get('idCancha')->getData();
            $cancha = $repository->find($idCancha);

            $puntuacionCliente = $form->get('puntuacion')->getData();
            $votosActuales = count($this->getDoctrine()->getRepository("CriveroPruebaBundle:Valoraciones")->getIdCanchas($idCancha));
            $valoracionAntigua = $cancha->getValoracion();

            $idCliente = $this->getUser()->getId();
            if ($this->getDoctrine()->getRepository("CriveroPruebaBundle:Valoraciones")->findCliente($idCliente) != null) {
                $valoracion = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Valoraciones")->findCliente($idCliente)[0];
                $puntuacionAntigua = $valoracion->getPuntuacion();
                if ($votosActuales == 0) {
                    $puntuacionActualizada = $puntuacionCliente;
                } else {
                    $puntuacionActualizada = ($votosActuales * $valoracionAntigua - $puntuacionAntigua + $puntuacionCliente) / $votosActuales;
                }
                $valoracion->setPuntuacion($puntuacionCliente);
            } else {
                $puntuacionActualizada = ($votosActuales * $valoracionAntigua + $puntuacionCliente) / ($votosActuales + 1);
                $valoracion->setIdCliente($idCliente);
            }

            $cancha->setValoracion($puntuacionActualizada);
            $em = $this->getDoctrine()->getManager();
            $em->persist($valoracion);
            $em->persist($cancha);
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'Valoracion enviada.');
            return $this->redirect($this->generateUrl('moduloclientes_cliente_reservasClientes'));
        }
        $idCancha = $form->get('idCancha')->getData();
        return $this->render('moduloclientesclienteBundle:Canchas:escribirSugerencia.html.twig', array('form' => $form->createView(),
                    'idCancha' => $idCancha,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function createCreateFormVal(Valoraciones $entity) {
        $form = $this->createForm(new ValoracionesType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_añadirValoracion'),
            'method' => 'POST'
        ));
        return $form;
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

    private function changeStateNotification($idEntidad) {
        $repositoryN = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Notificaciones");
        if ($repositoryN->getNotificacionEntidad($idEntidad, $this->getUser()->getId())) {
            $repositoryN->getNotificacionEntidad($idEntidad, $this->getUser()->getId())[0]->setEstado("Leido");
            $this->getDoctrine()->getManager()->flush();
        }
    }

}
