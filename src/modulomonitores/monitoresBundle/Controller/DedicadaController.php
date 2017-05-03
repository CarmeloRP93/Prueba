<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;
use Crivero\PruebaBundle\Entity\Notificaciones;
use Crivero\PruebaBundle\Form\SesionesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class DedicadaController extends Controller {

    public function sesionesDedicadasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.estado = 'validada' AND s.cliente != 'normal'";
        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesionesDedicadasTotales($searchQuery) :
                        $sesiones = $em->createQuery($dql)->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        $aulas = null;
        foreach ($sesiones as $sesion) {
            $aulas[$sesion->getId()] = $repositoryAula->find($sesion->getAula());
        }
        return $this->render('modulomonitoresmonitoresBundle:Privada:sesionesDedicadas.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "pagination" => $pagination, "aulas" => $aulas));
    }

    public function sesionDedicadaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        $this->changeStateNotification($id);
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aula = $repositoryAula->find($sesion->getAula());

        return $this->render('modulomonitoresmonitoresBundle:Privada:sesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "sesion" => $sesion, "aula" => $aula));
    }

    public function misSesionesDedicadasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $em = $this->getDoctrine()->getManager();
        $usuarioId = $this->getUser()->getId();
        $dql = "SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.idMonitor = :id AND s.cliente != 'normal'";
        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesionesDedicadas($searchQuery, $usuarioId) :
                        $sesiones = $em->createQuery($dql)->setParameter('id', $usuarioId)->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        $aulas = null;
        foreach ($sesiones as  $sesion) {
            $aulas[$sesion->getId()] = $repositoryAula->find($sesion->getAula());
        }
        return $this->render('modulomonitoresmonitoresBundle:Privada:misSesionesDedicadas.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "pagination" => $pagination, "aulas" => $aulas));
    }

    public function miSesionDedicadaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $sesion = $repository->find($id);
        $horario = explode('&', $sesion->getHorario());
        $ultimaSesion = $horario[count($horario) - 1];
        if ($ultimaSesion{1} == '/') {
            $ultimaSesion = "0" . $ultimaSesion;
        }
        $dia = (int) substr($ultimaSesion, 0, 2);
        $mes = (int) substr($ultimaSesion, 3, 2);

        $flag = false;
        if ((int) date("d") >= $dia && $mes == date("n")) {
            $flag = true;
        } elseif ($mes < date("n")) {
            $flag = true;
        }
        $this->changeStateNotification($id);
        $aula = $repositoryAula->find($sesion->getAula());
        $deleteForm = $this->createDeleteFormDedicada($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Privada:miSesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "sesion" => $sesion, "flag" => $flag, "aula" => $aula, 'delete_form' => $deleteForm->createView()));
    }

    private function createDeleteFormDedicada($sesion) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('modulomonitores_monitores_eliminarSesionDedicada', array('id' => $sesion->getId())))
                        ->setMethod('DELETE')
                        ->getForm();
    }

    public function eliminarSesionDedicadaAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        $form = $this->createDeleteFormDedicada($sesion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
            foreach ($usuarios as $usuario) {
                if ($usuario->getTipo() == 1) {
                    $notificacion = new Notificaciones();
                    $notificacion->setIdDestinatario($usuario->getId());
                    $notificacion->setIdEntidad($sesion->getId());
                    $notificacion->setMensaje("La sesión " . $sesion->getNombre() . " ha sido eliminada del sistema por " . $sesion->getMonitor());
                    $notificacion->setIdOrigen($this->getUser()->getId());
                    $notificacion->setEstado("No leido");
                    $notificacion->setConcepto("PrivadaEliminada");
                    $em->persist($notificacion);
                    $em->flush();
                }
            }
            $em->remove($sesion);
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido eliminada con éxito.');
            return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesDedicadas'));
        }
    }

    public function suspenderSesionDedicadaAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createSuspenderSesionDeForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Privada:suspenderSesionDe.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'sesion' => $sesion, 'form' => $form->createView()));
    }

    private function createSuspenderSesionDeForm(Sesiones $entity) {
        $form = $this->createForm(new SesionesType(array()), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_suspenderSeDe', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function suspenderSeDeAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createSuspenderSesionDeForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sesion->setEstado("suspendida");
            $sesion->setEstadoCliente("suspendida");
            $observaciones = $form->get('observaciones')->getData();
            if ($observaciones != null) {
                $em->flush();
                $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
                foreach ($usuarios as $usuario) {
                    if ($usuario->getTipo() == 1 || $usuario->getTipo() == 2) {
                        $notificacion = new Notificaciones();
                        $notificacion->setIdDestinatario($usuario->getId());
                        $notificacion->setIdEntidad($sesion->getId());
                        $notificacion->setMensaje("El monitor " . $this->getUser()->getUsername() . " ha"
                                . " suspendido la sesión " . $sesion->getNombre());
                        $notificacion->setIdOrigen($this->getUser()->getId());
                        $notificacion->setConcepto("Privada");
                        $notificacion->setEstado("No leido");
                        $em->persist($notificacion);
                        $em->flush();
                    }
                }
                $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido suspendida correctamente.');
                return $this->redirect($this->generateUrl('modulomonitores_monitores_miSesionDedicada', array('notificacionesSinLeer' => $this->getNewNotification(), 'id' => $sesion->getId())));
            } else {
                $form->get('observaciones')->addError(new FormError('Rellene el campo gracias'));
            }
        }
        return $this->render('modulomonitoresmonitoresBundle:Privada:suspenderSesionDe.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'sesion' => $sesion, 'form' => $form->createView()));
    }

    public function nuevaSesionDedicadaAction() {
        $sesion = new Sesiones();
        $form = $this->createCreateFormDedicado($sesion);

        return $this->render('modulomonitoresmonitoresBundle:Privada:nuevaSesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
    }

    private function createCreateFormDedicado(Sesiones $entity) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->findAll();
        $aulasD = array();
        $contadorA = 0;
        foreach ($aulas as $aula) {
            if ($aula->getDisponibilidad() == "Disponible") {
                $aulasD[$contadorA] = $aula;
                $contadorA++;
            }
        }
        $flag = true;
        $form = $this->createForm(new SesionesType($aulasD, $flag), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_editarDedicada', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function crearSesionDedicadaAction(Request $request) {
        $sesion = new Sesiones();
        $form = $this->createCreateFormDedicado($sesion);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $sesion->setEstado("pendiente");
            $sesion->setEstadoCliente("no disponible");
            $sesion->setnClientes(0);
            $sesion->setIdsClientes("");
            $sesion->setCliente("sin participante");
            $sesion->setlClientes(1);
            $sesion->setImagen("images/" . mt_rand(1, 5) . "m.jpg");
            $sesion->setIdMonitor($this->getUser()->getId());
            $sesion->setMonitor($this->getUser()->getUsername());
            if ($form->get('nSesiones')->getData() > 20) {
                $form->get('nSesiones')->addError(new FormError('El límite son 20 sesiones'));
                return $this->render('modulomonitoresmonitoresBundle:Privada:nuevaSesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            if (date_format($form->get('fechaInicio')->getData(), 'Y-m-d') <= date('Y-m-d')) {
                $form->get('fechaInicio')->addError(new FormError('Seleccione una fecha válida'));
                return $this->render('modulomonitoresmonitoresBundle:Privada:nuevaSesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            if ($form->get('duracion')->getData() > 120) {
                $form->get('duracion')->addError(new FormError('Máximo 120 minutos por sesión'));
                return $this->render('modulomonitoresmonitoresBundle:Privada:nuevaSesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            if ($form->get('aula')->getData() === null) {
                $form->get('aula')->addError(new FormError('Seleccione un aula'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            $dias = $form->get('dias')->getData();
            $diasElegidos = "";
            foreach ($dias as $dia) {
                if ($diasElegidos == "") {

                    $diasElegidos = $dia;
                } else {
                    $diasElegidos = $diasElegidos . "&" . $dia;
                }
            }
            if (count($dias) < 1) {
                $form->get('dias')->addError(new FormError('Seleccione mínimo un día'));
                return $this->render('modulomonitoresmonitoresBundle:Privada:nuevaSesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            $sesion->setDias($diasElegidos);
            $em = $this->getDoctrine()->getManager();
            $em->persist($sesion);
            $em->flush();


            $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
            foreach ($usuarios as $usuario) {
                if ($usuario->getTipo() == 1) {
                    $notificacion = new Notificaciones();
                    $notificacion->setIdDestinatario($usuario->getId());
                    $notificacion->setIdEntidad($sesion->getId());
                    $notificacion->setMensaje("El monitor " . $this->getUser()->getUsername() . " ha"
                            . " creado la sesión " . $sesion->getNombre());
                    $notificacion->setIdOrigen($this->getUser()->getId());
                    $notificacion->setConcepto("Privada");
                    $notificacion->setEstado("No leido");
                    $em->persist($notificacion);
                    $em->flush();
                }
            }

            $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido creada con éxito.');
            return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesDedicadas'));
        }
        return $this->render('modulomonitoresmonitoresBundle:Privada:nuevaSesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
    }

    public function editarSesionDedicadaAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        $sesion->setDias(null);
        $em->flush();

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createEdiDediForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Privada:editarSesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'sesion' => $sesion, 'form' => $form->createView()));
    }

    private function createEdiDediForm(Sesiones $entity) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->findAll();
        $aulasD = array();
        $contadorA = 0;
        foreach ($aulas as $aula) {
            if ($aula->getDisponibilidad() == "Disponible") {
                $aulasD[$contadorA] = $aula;
                $contadorA++;
            }
        }
        $flag = true;
        $form = $this->createForm(new SesionesType($aulasD, $flag), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_editarDedicada', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function editarDedicadaAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createEdiDediForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sesion->setEstado("modificada");
            $sesion->setEstadoCliente("no disponible");
            if ($form->get('nSesiones')->getData() > 20) {
                $form->get('nSesiones')->addError(new FormError('El límite son 20 sesiones'));
                return $this->render('modulomonitoresmonitoresBundle:Privada:editarSesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            if ($form->get('duracion')->getData() > 120) {
                $form->get('duracion')->addError(new FormError('Máximo 120 minutos por sesión'));
                return $this->render('modulomonitoresmonitoresBundle:Privada:editarSesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            $dias = $form->get('dias')->getData();
            $diasElegidos = "";
            foreach ($dias as $dia) {
                if ($diasElegidos == "") {

                    $diasElegidos = $dia;
                } else {
                    $diasElegidos = $diasElegidos . "&" . $dia;
                }
            }
            if (count($dias) < 1) {
                $form->get('dias')->addError(new FormError('Seleccione mínimo un día'));
                return $this->render('modulomonitoresmonitoresBundle:Privada:editarSesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            $sesion->setDias($diasElegidos);
            $em->flush();

            $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
            foreach ($usuarios as $usuario) {
                if ($usuario->getTipo() == 1) {
                    $notificacion = new Notificaciones();
                    $notificacion->setIdDestinatario($usuario->getId());
                    $notificacion->setIdEntidad($sesion->getId());
                    $notificacion->setMensaje("El monitor " . $this->getUser()->getUsername() . " ha"
                            . " editado la sesión " . $sesion->getNombre());
                    $notificacion->setIdOrigen($this->getUser()->getId());
                    $notificacion->setConcepto("Privada");
                    $notificacion->setEstado("No leido");
                    $em->persist($notificacion);
                    $em->flush();
                }
            }
            $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido modificada con éxito.');
            return $this->redirect($this->generateUrl('modulomonitores_monitores_miSesionDedicada', array('id' => $sesion->getId())));
        }
        return $this->render('modulomonitoresmonitoresBundle:Privada:editarSesionDedicada.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'sesion' => $sesion, 'form' => $form->createView()));
    }

    public function terminarDeAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $sesion->setEstado("terminada");
        $sesion->setEstadoCliente("terminada");
        $em->persist($sesion);
        $em->flush();
        $notificacion = new Notificaciones();
        $notificacion->setIdDestinatario($sesion->getIdsClientes());
        $notificacion->setIdEntidad($sesion->getId());
        $notificacion->setMensaje("La sesión " . $sesion->getNombre()
                . " del monitor " . $sesion->getMonitor() . " ha terminado");
        $notificacion->setIdOrigen($this->getUser()->getId());
        $notificacion->setConcepto("Privada");
        $notificacion->setEstado("No leido");
        $em->persist($notificacion);
        $em->flush();
        $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido terminada con éxito');
        return $this->redirect($this->generateUrl('modulomonitores_monitores_miSesionDedicada', array('notificacionesSinLeer' => $this->getNewNotification(), 'id' => $sesion->getId())));
    }

    private function changeStateNotification($id) {
        $repositoryN = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Notificaciones");
        if ($repositoryN->getNotificacionEntidad($id, $this->getUser()->getId())) {
            $repositoryN->getNotificacionEntidad($id, $this->getUser()->getId())[0]->setEstado("Leido");
            $this->getDoctrine()->getManager()->flush();
        }
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
