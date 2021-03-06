<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;
use Crivero\PruebaBundle\Entity\Pagos;
use Crivero\PruebaBundle\Form\PagosType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormError;
use Crivero\PruebaBundle\Entity\Notificaciones;

class SesionController extends Controller {

    public function sesionesClientesAction(Request $request) {
        $this->changeStateNotification($request->get('id'));
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesionesGeneralesByCliente($searchQuery) :
                        $sesiones = $repository->getSesionesGeneralesMostrables();

        $resultado = array();
        foreach ($sesiones as $i => $sesion) {
            if (strpos($sesion->getIdsClientes(), strval($this->getUser()->getId())) === false &&
                    strpos($sesion->getExcluidos(), strval($this->getUser()->getId())) === false) {
                $resultado[$i] = $sesion;
            }
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($resultado, $request->query->getInt('page', 1), 5);
        return $this->render('moduloclientesclienteBundle:Sesiones:sesionesClientes.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function sesionesPrivadasClientesAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesionesDedicadasByCliente($searchQuery) :
                        $sesiones = $repository->getSesionesClientesDedicadas($this->getUser()->getId());

        $resultado = array();
        foreach ($sesiones as $i => $sesion) {
            $resultado[$i] = $sesion;
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($resultado, $request->query->getInt('page', 1), 5);
        return $this->render('moduloclientesclienteBundle:Sesiones:sesionesPrivadasClientes.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function misSesionesAction(Request $request) {
        $idsSesionesCliente = explode('&', $this->getUser()->getSesiones());
        $searchQuery = $request->get('query');
        $sesiones = array();
        $resultado = array();
        if ($idsSesionesCliente[0] != null) {
            $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
            if (!empty($searchQuery)) {
                $sesiones = $this->getArrayEntidadesBusqueda($repositorySesiones, $idsSesionesCliente, $searchQuery);
            } else {
                $sesiones = $this->getArrayEntidades($repositorySesiones, $idsSesionesCliente);
            }
            foreach ($sesiones as $i => $sesion) {
                $resultado[$i] = $sesion;
            }
        }

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($resultado, $request->query->getInt('page', 1), 5);
        return $this->render('moduloclientesclienteBundle:Sesiones:misSesiones.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function verMonitorAction($id) {
        $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $monitor = $repositoryUsuarios->find($id);
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesionesMonitor = $repositorySesiones->getSesionesMonitor($id);

        return $this->render('moduloclientesclienteBundle:Sesiones:verMonitor.html.twig', array("monitor" => $monitor, "sesiones" => $sesionesMonitor,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function sesionClientesAction($id) {
        $this->changeStateNotification($id);
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        if ($sesion->getEstado() != 'terminada') {
            $repositoryCancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
            $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");

            if ($sesion->getConcepto() == 'aula') {
                $recinto = $repositoryAula->find($sesion->getAula());
                $recintoId = $sesion->getAula();
            } else {
                $recinto = $repositoryCancha->find($sesion->getCancha());
                $recintoId = $sesion->getCancha();
            }
        }
        return $this->render('moduloclientesclienteBundle:Sesiones:sesionClientes.html.twig', array("sesion" => $sesion, "recinto" => $recinto,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function miSesionClientesAction($id) {
        $this->changeStateNotification($id);
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        if ($sesion->getEstado() != 'terminada') {
            $repositoryCancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
            $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");

            if ($sesion->getConcepto() == 'aula') {
                $recinto = $repositoryAula->find($sesion->getAula());
                $recintoId = $sesion->getAula();
            } else {
                $recinto = $repositoryCancha->find($sesion->getCancha());
                $recintoId = $sesion->getCancha();
            }
        }
        return $this->render('moduloclientesclienteBundle:Sesiones:miSesionClientes.html.twig', array("sesion" => $sesion, "recinto" => $recinto,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function horarioSesionClienteAction($id) {
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repositorySesiones->find($id);
        $horarios = explode("&", $sesion->getHorario());

        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $repositoryCancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        if ($sesion->getConcepto() == 'aula') {
            $recinto = $repositoryAula->find($sesion->getAula());
        } else {
            $recinto = $repositoryCancha->find($sesion->getCancha());
        }
        return $this->render('moduloclientesclienteBundle:Sesiones:horarioSesionCliente.html.twig', array("sesion" => $sesion,
                    "pagination" => $horarios, 'recinto' => $recinto, 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function pagoSesionAction($id) {
        $pago = new Pagos();
        $form = $this->createPagoForm($pago, $id);
        return $this->render('moduloclientesclienteBundle:Sesiones:pagoSesion.html.twig', array('form' => $form->createView(),
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function createPagoForm(Pagos $entity, $id) {
        $form = $this->createForm(new PagosType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_sesionesClientes_apuntarse', array('id' => $id)),
            'method' => 'POST'
        ));
        return $form;
    }

    public function apuntarseAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $pago = new Pagos();
        $cliente = $this->getUser();
        $form = $this->createPagoForm($pago, $id);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sumaCliente = $sesion->getNClientes();
            $sumaCliente++;
            $sesion->setNClientes($sumaCliente);
            $pago->setIdCliente($cliente->getId());
            $pago->setIdConcepto($id);
            $pago->setConcepto('Sesion');
            $pago->setCuantia($sesion->getPrecio());

            if ($sumaCliente == $sesion->getLClientes()) {
                $sesion->setEstadoCliente("Completo");
            }

            if ($sesion->getIdsClientes() == null) {
                $sesion->setIdsClientes($this->getUser()->getId());
            } else {
                $sesion->setIdsClientes($sesion->getIdsClientes() . '&' . $this->getUser()->getId());
            }

            $usuario = $this->findEntity($this->getUser()->getId(), $em, 'CriveroPruebaBundle:Usuarios');
            if ($sesion->getCliente() != 'normal') {
                $sesion->setCliente($usuario->getUsername());
            }
            if ($usuario->getSesiones() == null) {
                $usuario->setSesiones($sesion->getId());
            } else {
                $usuario->setSesiones($usuario->getSesiones() . '&' . $sesion->getId());
            }

            $em->persist($usuario);
            $em->persist($sesion);
            $em->persist($pago);
            $em->flush();

            $notificacion = new Notificaciones();
            $notificacion->setIdDestinatario($sesion->getIdMonitor());
            $notificacion->setIdEntidad($sesion->getId());
            $notificacion->setMensaje("El usuario " . $usuario->getUsername() . " se ha unido a la sesión " . $sesion->getNombre());
            $notificacion->setIdOrigen($this->getUser()->getId());
            $notificacion->setEstado("No leido");
            if ($sesion->getCliente() == 'normal') {
                $notificacion->setConcepto("NuevoParticipantePublica");
            } else {
                $notificacion->setConcepto("NuevoParticipantePrivada");
            }
            $em->persist($notificacion);
            $em->flush();
            return $this->redirect($this->generateUrl('moduloclientes_cliente_misSesionesClientes'));
        }

        return $this->render('moduloclientesclienteBundle:Reservas:pagoReserva.html.twig', array('form' => $form->createView(),
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function abandonarAction($id) {
        $em = $this->getDoctrine()->getManager();

        // Aquí eliminamos el cliente en la tabla sesiones
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $arrayClientes = explode('&', $sesion->getIdsClientes());
        for ($i = 0; $i <= count($arrayClientes); $i++) {
            if ($arrayClientes[$i] == $this->getUser()->getId()) {
                $pos = $i;
                break;
            }
        }
        unset($arrayClientes[$pos]);
        $arrayClientes1 = array_values($arrayClientes);
        $sesion->setIdsClientes(implode($arrayClientes1, '&'));

        // Aquí eliminamos la sesión en la tabla usuario
        $usuario = $this->findEntity($this->getUser()->getId(), $em, 'CriveroPruebaBundle:Usuarios');
        $arraySesiones = explode('&', $usuario->getSesiones());
        for ($i = 0; $i <= count($arraySesiones); $i++) {
            if ($arraySesiones[$i] == $id) {
                $posS = $i;
                break;
            }
        }
        unset($arraySesiones[$posS]);
        $arraySesiones1 = array_values($arraySesiones);
        $usuario->setSesiones(implode($arraySesiones1, '&'));

        // Aquí restamos la cantidad de clientes apuntados a la sesion y la eliminamos si el estado es cancelado
        $restaCliente = $sesion->getNClientes();
        $restaCliente--;
        $sesion->setNClientes($restaCliente);

        if ($restaCliente == 0 && $sesion->getEstado() == 'cancelada' && $sesion->getIdMonitor() == null) {
            if ($sesion->getConcepto() == 'aula') {
                $aula = $this->findEntity($sesion->getAula(), $em, 'CriveroPruebaBundle:Aulas');
                $this->removeSesionId($aula, $id);
                $em->persist($aula);
            } else {
                $cancha = $this->findEntity($sesion->getCancha(), $em, 'CriveroPruebaBundle:Canchas');
                $this->removeSesionId($cancha, $id);
                $em->persist($cancha);
            }
        } elseif ($restaCliente == 0 && $sesion->getEstado() == 'suspendida') {
            if ($sesion->getConcepto() == 'aula') {
                $aula = $this->findEntity($sesion->getAula(), $em, 'CriveroPruebaBundle:Aulas');
                $this->removeSesionId($aula, $id);
                $em->persist($aula);
            } else {
                $cancha = $this->findEntity($sesion->getCancha(), $em, 'CriveroPruebaBundle:Canchas');
                $this->removeSesionId($cancha, $id);
                $em->persist($cancha);
            }
        } else {
            // Si no está cancelada, el estadoCliente volverá a disponible (esté completa o no)
            $sesion->setEstadoCliente('disponible');
            if ($sesion->getExcluidos() == NULL) {
                $sesion->setExcluidos($this->getUser()->getId());
            } else {
                $sesion->setExcluidos($sesion->getExcluidos() . '&' . $this->getUser()->getId());
            }
            $em->persist($sesion);
        }

        $em->persist($usuario);
        $em->flush();

        $notificacion = new Notificaciones();
        $notificacion->setIdDestinatario($sesion->getIdMonitor());
        $notificacion->setIdEntidad($sesion->getId());
        $notificacion->setMensaje("El usuario " . $usuario->getUsername() . " ha abandonado tu sesión " . $sesion->getNombre());
        $notificacion->setIdOrigen($this->getUser()->getId());
        $notificacion->setEstado("No leido");
        $notificacion->setConcepto("AbandonoPublica");
        $em->persist($notificacion);
        $em->flush();

        if ($sesion->getNClientes() + 1 == $sesion->getLClientes()) {
            $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
            foreach ($usuarios as $usuario) {
                if ($usuario->getTipo() == 2) {
                    if (strpos($sesion->getIdsClientes(), strval($usuario->getId())) !== false || strpos($sesion->getExcluidos(), strval($usuario->getId())) !== false) {
                        continue;
                    }
                    $notificacion = new Notificaciones();
                    $notificacion->setIdDestinatario($usuario->getId());
                    $notificacion->setIdEntidad($sesion->getId());
                    $notificacion->setMensaje("Hay dispononibilidad en la sesión " . $sesion->getNombre());
                    $notificacion->setIdOrigen($this->getUser()->getId());
                    $notificacion->setEstado("No leido");
                    $notificacion->setConcepto("AbandonoPublica");
                    $em->persist($notificacion);
                    $em->flush();
                }
            }
        }
        $em->remove($sesion);
        $em->flush();
        return $this->redirect($this->generateUrl('moduloclientes_cliente_misSesionesClientes'));
    }

    private function findEntity($id, $em, $repository) {
        $entity = $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
    }

    private function getArrayEntidades($repository, $array) {
        $resultado = array();
        for ($i = 0; $i < count($array); $i++) {
            $resultado[$i] = $repository->find($array[$i]);
        }
        return $resultado;
    }

    private function getArrayEntidadesBusqueda($repository, $array, $searchQuery) {
        $resultado = array();
        $n = 0;
        for ($i = 0; $i < count($array); $i++) {
            if ($repository->searchMisSesiones($searchQuery, $array[$i]) == array()) {
                continue;
            }
            $resultado[$n] = $repository->searchMisSesiones($searchQuery, $array[$i])[0];
            $n++;
        }
        return $resultado;
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

    private function removeSesionId($entity, $id) {
        $pos = strpos($entity->getSesiones(), strval($id));
        $cifra = strlen(strval($id));
        ($pos > 0) ? $entity->setSesiones(substr($entity->getSesiones(), 0, $pos - 1) . substr($entity->getSesiones(), $pos + $cifra)) :
                        $entity->setSesiones(substr($entity->getSesiones(), $pos + ($cifra + 1)));
    }

}
