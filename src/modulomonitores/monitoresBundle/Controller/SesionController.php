<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;
use Crivero\PruebaBundle\Entity\Notificaciones;
use Crivero\PruebaBundle\Form\SesionesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class SesionController extends Controller {

    public function sesionesMonitoresAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $repositoryCancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.estado = 'validada' AND s.cliente = 'normal'";
        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesionesTotales($searchQuery) :
                        $sesiones = $em->createQuery($dql)->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        $recinto = null;
        foreach ($sesiones as $sesion) {
            if ($sesion->getConcepto() == 'aula') {
                $recinto[$sesion->getId()] = $repositoryAula->find($sesion->getAula());
            } else {
                $recinto[$sesion->getId()] = $repositoryCancha->find($sesion->getCancha());
            }
        }
        return $this->render('modulomonitoresmonitoresBundle:Publica:sesionesMonitores.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "pagination" => $pagination, "recinto" => $recinto));
    }

    public function sesionMonitoresAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        $this->changeStateNotification($id);
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $repositoryCancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        if ($sesion->getConcepto() == 'aula') {
            $recinto = $repositoryAula->find($sesion->getAula());
        } else {
            $recinto = $repositoryCancha->find($sesion->getCancha());
        }

        return $this->render('modulomonitoresmonitoresBundle:Publica:sesionMonitores.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "sesion" => $sesion, "recinto" => $recinto));
    }

    public function misSesionesMonitoresAction(Request $request) {
        $this->changeStateNotification($request->get('id'));
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");


        $em = $this->getDoctrine()->getManager();
        $usuarioId = $this->getUser()->getId();
        $dql = "SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.idMonitor = :id AND s.cliente = 'normal'";

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesiones($searchQuery, $usuarioId) :
                        $sesiones = $em->createQuery($dql)->setParameter('id', $usuarioId)->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);

        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $repositoryCancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $recinto = null;
        foreach ($sesiones as $sesion) {
            if ($sesion->getEstado() != 'terminada') {
                if ($sesion->getConcepto() == 'aula') {
                    $recinto[$sesion->getId()] = $repositoryAula->find($sesion->getAula());
                } else {
                    $recinto[$sesion->getId()] = $repositoryCancha->find($sesion->getCancha());
                }
            }
        }

        return $this->render('modulomonitoresmonitoresBundle:Publica:misSesionesMonitores.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "pagination" => $pagination, "recinto" => $recinto));
    }

    public function miSesionMonitoresAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");

        $sesion = $repository->find($id);
        $horario = explode('&', $sesion->getHorario());
        $ultimaSesion = $horario[count($horario) - 1];
        $flag = false;
        if ($sesion->getEstado() == 'validada') {
            if ($ultimaSesion{1} == '/') {
                $ultimaSesion = "0" . $ultimaSesion;
            }
            $dia = (int) substr($ultimaSesion, 0, 2);
            $mes = (int) substr($ultimaSesion, 3, 2);


            if ((int) date("d") >= $dia && $mes == date("n")) {
                $flag = true;
            } elseif ($mes < date("n")) {
                $flag = true;
            }
        }
        $this->changeStateNotification($id);
        $recinto = null;
        if ($sesion->getEstado() != 'terminada') {
            $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
            $repositoryCancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
            if ($sesion->getConcepto() == 'aula') {
                $recinto = $repositoryAula->find($sesion->getAula());
            } else {
                $recinto = $repositoryCancha->find($sesion->getCancha());
            }
        }
        $deleteForm = $this->createDeleteForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Publica:miSesionMonitores.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "flag" => $flag, "sesion" => $sesion, "recinto" => $recinto, 'delete_form' => $deleteForm->createView()));
    }

    private function createDeleteForm($sesion) {
        return $this->createFormBuilder()->setAction($this->generateUrl('modulomonitores_monitores_eliminarSesion', array('id' => $sesion->getId())))
                        ->setMethod('DELETE')
                        ->getForm();
    }

    public function eliminarSesionAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        $form = $this->createDeleteForm($sesion);
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
                    $notificacion->setConcepto("PublicaEliminada");
                    $em->persist($notificacion);
                    $em->flush();
                }
            }
            $em->remove($sesion);
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido eliminada con éxito.');
            return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesMonitores'));
        }
    }

    public function nuevaSesionAction() {
        $sesion = new Sesiones();
        $form = $this->createCreateForm($sesion);

        return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
    }

    public function recintoPublicoAction() {
        return $this->render('modulomonitoresmonitoresBundle:Publica:recintoPublico.html.twig', array('notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function nuevaSesionDeportivaAction() {
        $sesion = new Sesiones();
        $form = $this->createCreateDeportivaForm($sesion);

        return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
    }

    private function createCreateForm(Sesiones $entity) {
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
            'action' => $this->generateUrl('modulomonitores_monitores_crearSesion'),
            'method' => 'POST'
        ));
        return $form;
    }

    private function createCreateDeportivaForm(Sesiones $entity) {
        $repositoryC = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $canchas = $repositoryC->findAll();
        $canchasD = array();
        $contadorC = 0;
        foreach ($canchas as $cancha) {
            if ($cancha->getDisponibilidad() == "Disponible") {
                $canchasD[$contadorC] = $cancha;
                $contadorC++;
            }
        }
        $flag = false;
        $form = $this->createForm(new SesionesType($canchasD, $flag), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_crearSesionDeportiva'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function crearSesionAction(Request $request) {
        $sesion = new Sesiones();
        $form = $this->createCreateForm($sesion);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $sesion->setEstado("pendiente");
            $sesion->setConcepto("aula");
            $sesion->setEstadoCliente("no disponible");
            $sesion->setnClientes(0);
            $sesion->setCliente("normal");
            $sesion->setImagen("images/" . mt_rand(1, 5) . "m.jpg");
            $sesion->setIdMonitor($this->getUser()->getId());
            $sesion->setMonitor($this->getUser()->getUsername());
            if ($form->get('nSesiones')->getData() > 20) {
                $form->get('nSesiones')->addError(new FormError('El límite son 20 sesiones'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            if (date_format($form->get('fechaInicio')->getData(), 'Y-m-d') <= date('Y-m-d')) {
                $form->get('fechaInicio')->addError(new FormError('Seleccione una fecha válida'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            if ($form->get('duracion')->getData() > 120) {
                $form->get('duracion')->addError(new FormError('Máximo 120 minutos por sesión'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
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
                return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            $sesion->setDias($diasElegidos);
            $lClientes = $form->get('lClientes')->getData();
            if ($lClientes != null) {
                $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
                $aulaAforo = ($repositoryAula->find($form->get('aula')->getData())->getAforo());
                if ($aulaAforo < $lClientes) {
                    $form->get('lClientes')->addError(new FormError('El máximo de participantes para esta'
                            . ' aula es ' . $aulaAforo));
                    return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
                }
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
                        $notificacion->setConcepto("Publica");
                        $notificacion->setEstado("No leido");
                        $em->persist($notificacion);
                        $em->flush();
                    }
                }

                $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido creado con éxito.');
                return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesMonitores'));
            } else {
                $form->get('lClientes')->addError(new FormError('Introduzca un valor correcto'));
            }
        }
        return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
    }

    public function crearSesionDeportivaAction(Request $request) {
        $sesion = new Sesiones();
        $form = $this->createCreateDeportivaForm($sesion);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $sesion->setConcepto("cancha");
            $sesion->setEstado("pendiente");
            $sesion->setEstadoCliente("no disponible");
            $sesion->setnClientes(0);
            $sesion->setCliente("normal");
            $sesion->setImagen("images/" . mt_rand(1, 5) . "m.jpg");
            $sesion->setIdMonitor($this->getUser()->getId());
            $sesion->setMonitor($this->getUser()->getUsername());
            if ($form->get('nSesiones')->getData() > 20) {
                $form->get('nSesiones')->addError(new FormError('El límite son 20 sesiones'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            if (date_format($form->get('fechaInicio')->getData(), 'Y-m-d') <= date('Y-m-d')) {
                $form->get('fechaInicio')->addError(new FormError('Seleccione una fecha válida'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            if ($form->get('duracion')->getData() > 120) {
                $form->get('duracion')->addError(new FormError('Máximo 120 minutos por sesión'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            if ($form->get('cancha')->getData() === null) {
                $form->get('cancha')->addError(new FormError('Seleccione una cancha'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
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
                return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            $sesion->setDias($diasElegidos);
            $lClientes = $form->get('lClientes')->getData();
            if ($lClientes != null) {
                $repositoryCancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
                $canchaTipo = ($repositoryCancha->find($form->get('cancha')->getData())->getDeporte());
                if ($canchaTipo == 'Padel') {
                    if ($lClientes > 8) {
                        $form->get('lClientes')->addError(new FormError('El máximo de participantes para esta'
                                . ' cancha es 8'));
                        return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
                    }
                } else {
                    if ($lClientes > 24) {
                        $form->get('lClientes')->addError(new FormError('El máximo de participantes para esta'
                                . ' cancha es 24'));
                        return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
                    }
                }
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
                        $notificacion->setConcepto("Publica");
                        $notificacion->setEstado("No leido");
                        $em->persist($notificacion);
                        $em->flush();
                    }
                }

                $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido creado con éxito.');
                return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesMonitores'));
            } else {
                $form->get('lClientes')->addError(new FormError('Introduzca un valor correcto'));
            }
        }
        return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
    }

    public function editarSesionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        $sesion->setDias(null);
        $em->flush();
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createEdiForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'sesion' => $sesion, 'form' => $form->createView()));
    }

    public function editarSesionDeportivaAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        $sesion->setDias(null);
        $em->flush();
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createEdiDForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'sesion' => $sesion, 'form' => $form->createView()));
    }

    private function createEdiForm(Sesiones $entity) {
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
            'action' => $this->generateUrl('modulomonitores_monitores_editar', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    private function createEdiDForm(Sesiones $entity) {
        $repositoryC = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $canchas = $repositoryC->findAll();
        $canchasD = array();
        $contadorC = 0;
        foreach ($canchas as $cancha) {
            if ($cancha->getDisponibilidad() == "Disponible") {
                $canchasD[$contadorC] = $cancha;
                $contadorC++;
            }
        }
        $flag = false;
        $form = $this->createForm(new SesionesType($canchasD, $flag), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_editarDeportiva', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function editarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createEdiForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('nSesiones')->getData() > 20) {
                $form->get('nSesiones')->addError(new FormError('El límite son 20 sesiones'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            if ($form->get('duracion')->getData() > 120) {
                $form->get('duracion')->addError(new FormError('Máximo 120 minutos por sesión'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
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
                return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            $sesion->setDias($diasElegidos);
            $lClientes = $form->get('lClientes')->getData();
            if ($lClientes != null) {
                if ($lClientes > 30) {
                    $form->get('lClientes')->addError(new FormError('Máximo 30 participantes'));
                    return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
                }
                $em = $this->getDoctrine()->getManager();
                $sesion->setEstado("modificada");
                $sesion->setEstadoCliente("no disponible");
                $sesion->setObservaciones("");
                $em->persist($sesion);
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
                        $notificacion->setConcepto("Publica");
                        $notificacion->setEstado("No leido");
                        $em->persist($notificacion);
                        $em->flush();
                    }
                }

                $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido modificada con éxito.');
                return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesMonitores'));
            } else {
                $form->get('lClientes')->addError(new FormError('Introduzca un valor correcto'));
            }
        }
        return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'sesion' => $sesion, 'form' => $form->createView()));
    }

    public function editarDeportivaAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createEdiDForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('nSesiones')->getData() > 20) {
                $form->get('nSesiones')->addError(new FormError('El límite son 20 sesiones'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            if ($form->get('duracion')->getData() > 120) {
                $form->get('duracion')->addError(new FormError('Máximo 120 minutos por sesión'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
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
                return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            $sesion->setDias($diasElegidos);
            $lClientes = $form->get('lClientes')->getData();
            if ($lClientes != null) {
                if ($lClientes > 30) {
                    $form->get('lClientes')->addError(new FormError('Máximo 30 participantes'));
                    return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
                }
                $em = $this->getDoctrine()->getManager();
                $sesion->setEstado("modificada");
                $sesion->setEstadoCliente("no disponible");
                $sesion->setObservaciones("");
                $em->persist($sesion);
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
                        $notificacion->setConcepto("Publica");
                        $notificacion->setEstado("No leido");
                        $em->persist($notificacion);
                        $em->flush();
                    }
                }

                $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido modificada con éxito.');
                return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesMonitores'));
            } else {
                $form->get('lClientes')->addError(new FormError('Introduzca un valor correcto'));
            }
        }
        return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesionDeportiva.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'sesion' => $sesion, 'form' => $form->createView()));
    }

    public function suspenderAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createSuspenderSesionForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Publica:suspenderSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'sesion' => $sesion, 'form' => $form->createView()));
    }

    private function createSuspenderSesionForm(Sesiones $entity) {
        $form = $this->createForm(new SesionesType(array(), null), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_suspenderSe', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function suspenderSeAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');

        $form = $this->createSuspenderSesionForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $observaciones = $form->get('observaciones')->getData();

            if ($observaciones != null) {
                $sesion->setEstado("suspendida");
                $sesion->setEstadoCliente("suspendida");
                $em->persist($sesion);

                $horarios = explode('&', $sesion->getHorario());
                foreach ($horarios as $clave => $horario) {
                    if ($horario{1} == '/') {
                        $horario = "0" . $horario;
                    }
                    $dias[$clave] = substr($horario, 0, 2);
                    $horas[$clave] = substr($horario, 8);
                }

                for ($i = 0; $i < count($dias); $i++) {
                    if ($sesion->getConcepto() == 'cancha') {
                        $horarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosCanchas");
                        $diaReservado = $horarios->getDiaReserva($sesion->getCancha(), $dias[$i])[0];
                    } else {
                        $horarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosAulas");
                        $diaReservado = $horarios->getDiaReserva($sesion->getAula(), $dias[$i])[0];
                    }

                    if ($diaReservado->getPeriodo() == null) {
                        $res = $horas[$i];
                    } else {
                        $horasNoUsadas = explode('&', $diaReservado->getPeriodo());
                        $flag = 0;
                        $res = "";
                        for ($j = 0; $j < count($horasNoUsadas); $j++) {
                            if ((int) substr($horasNoUsadas[$j], 0, 2) > (int) substr($horas[$i], 0, 2) && $flag == 0) {
                                if ($sesion->getConcepto() == 'cancha') {
                                    if ($sesion->getDuracion() > 60) {
                                        $resAux = explode('-', $horas[$i]);
                                        $auxT = explode(':', $resAux[1])[0] - 1;
                                        ($auxT < 10) ? $auxT2 = '0' . $auxT : $auxT2 = $auxT;

                                        $res .= $resAux[0] . '-' . $auxT2 . ':00';
                                        $res .= '&' . $auxT2 . ':00-' . $resAux[1] . '&';
                                    } else {
                                        $res .= $horas[$i] . '&';
                                    }
                                } else {
                                    if ($sesion->getDuracion() > 60) {
                                        $resAux = explode('-', $horas[$i]);
                                        $auxT = explode(':', $resAux[1])[0] - 1;
                                        ($auxT < 10) ? $auxT2 = '0' . $auxT : $auxT2 = $auxT;

                                        $res .= $resAux[0] . '-' . $auxT2 . ':00';
                                        $res .= '&' . $auxT2 . ':00-' . $resAux[1] . '&';
                                    } else {
                                        $res .= $horas[$i] . '&';
                                    }
                                }
                                $flag = 1;
                            }
                            ($j == count($horasNoUsadas) - 1) ? $res .= $horasNoUsadas[$j] : $res .= $horasNoUsadas[$j] . '&';

                            if ($j == count($horasNoUsadas) - 1 && $flag == 0) {
                                if ($sesion->getConcepto() == 'cancha') {

                                    if ($sesion->getDuracion() > 60) {
                                        $resAux = explode('-', $horas[$i]);
                                        $auxT = explode(':', $resAux[1])[0] - 1;
                                        ($auxT < 10) ? $auxT2 = '0' . $auxT : $auxT2 = $auxT;

                                        $res .= '&' . $resAux[0] . '-' . $auxT2 . ':00';
                                        $res .= '&' . $auxT2 . ':00-' . $resAux[1];
                                    } else {
                                        $res .= '&' . $horas[$i];
                                    }
                                } else {

                                    if ($sesion->getDuracion() > 60) {
                                        $resAux = explode('-', $horas[$i]);
                                        $auxT = explode(':', $resAux[1])[0] - 1;
                                        ($auxT < 10) ? $auxT2 = '0' . $auxT : $auxT2 = $auxT;

                                        $res .= $resAux[0] . '-' . $auxT2 . ':00';
                                        $res .= '&' . $auxT2 . ':00-' . $resAux[1] . '&';
                                    } else {
                                        $res .= $horas[$i] . '&';
                                    }
                                }
                            }
                        }
                    }
                    $diaReservado->setPeriodo($res);
                    $em->persist($diaReservado);
                    $em->flush();
                }

                $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
                foreach ($usuarios as $usuario) {
                    if ($usuario->getTipo() == 1 || $usuario->getTipo() == 2) {
                        $notificacion = new Notificaciones();
                        $notificacion->setIdDestinatario($usuario->getId());
                        $notificacion->setIdEntidad($sesion->getId());
                        $notificacion->setMensaje("El monitor " . $this->getUser()->getUsername() . " ha"
                                . " suspendido la sesión " . $sesion->getNombre());
                        $notificacion->setIdOrigen($this->getUser()->getId());
                        $notificacion->setConcepto("Publica");
                        $notificacion->setEstado("No leido");
                        $em->persist($notificacion);
                        $em->flush();
                    }
                }
                $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido suspendida correctamente.');
                return $this->redirect($this->generateUrl('modulomonitores_monitores_miSesionMonitores', array('notificacionesSinLeer' => $this->getNewNotification(), 'id' => $sesion->getId())));
            } else {
                $form->get('observaciones')->addError(new FormError('Rellene el campo gracias'));
            }
        }
        return $this->render('modulomonitoresmonitoresBundle:Publica:suspenderSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'sesion' => $sesion, 'form' => $form->createView()));
    }

    public function abandonarSesionAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');

        $sesion->setIdMonitor(null);

        if ($sesion->getNClientes() == 0 && $sesion->getEstado() == 'cancelada') {
            if ($sesion->getConcepto() == 'aula') {
                $aula = $this->findEntity($sesion->getAula(), $em, 'CriveroPruebaBundle:Aulas');
                $this->removeSesionId($aula, $id);
                $em->persist($aula);
            } else {
                $cancha = $this->findEntity($sesion->getCancha(), $em, 'CriveroPruebaBundle:Cnacha');
                $this->removeSesionId($cancha, $id);
                $em->persist($cancha);
            }
            $em->remove($sesion);
        } else {
            $em->persist($sesion);
        }

        $em->flush();
        $request->getSession()->getFlashBag()->add('mensaje', 'Has abanonado la sesión.');
        return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesMonitores'));
    }

    public function expulsarAction($id, $idUsuario) {
        $em = $this->getDoctrine()->getManager();

        // Aquí eliminamos el cliente en la tabla sesiones
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $arrayClientes = explode('&', $sesion->getIdsClientes());
        for ($i = 0; $i <= count($arrayClientes); $i++) {
            if ($arrayClientes[$i] == $idUsuario) {
                $pos = $i;
                break;
            }
        }
        unset($arrayClientes[$pos]);
        $arrayClientes1 = array_values($arrayClientes);
        $sesion->setIdsClientes(implode($arrayClientes1, '&'));

        // Aquí eliminamos la sesión en la tabla usuario
        $usuario = $this->findEntity($idUsuario, $em, 'CriveroPruebaBundle:Usuarios');
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


        $sesion->setEstadoCliente('disponible');
        if ($sesion->getExcluidos() == NULL) {
            $sesion->setExcluidos($this->getUser()->getId());
        } else {
            $sesion->setExcluidos($sesion->getExcluidos() . '&' . $this->getUser()->getId());
        }
        $em->persist($sesion);


        $em->persist($usuario);
        $em->flush();
        $notificacion = new Notificaciones();
        $notificacion->setIdDestinatario($idUsuario);
        $notificacion->setIdEntidad($sesion->getId());
        $notificacion->setMensaje("Has sido expulsado de la sesión " . $sesion->getNombre());
        $notificacion->setIdOrigen($this->getUser()->getId());
        $notificacion->setConcepto("Publica");
        $notificacion->setEstado("No leido");
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
        if (count($arrayClientes) > 0) {
            return $this->redirect($this->generateUrl('modulomonitores_monitores_verParticipantes', array('notificacionesSinLeer' => $this->getNewNotification(), 'id' => $id)));
        } else {
            return $this->redirect($this->generateUrl('modulomonitores_monitores_miSesionMonitores', array('notificacionesSinLeer' => $this->getNewNotification(), 'id' => $id)));
        }
    }

    public function terminarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $sesion->setEstado("terminada");
        $sesion->setEstadoCliente("terminada");
        if ($sesion->getConcepto() == 'aula') {
            $aula = $this->getDoctrine()->getManager()->getRepository('CriveroPruebaBundle:Aulas')->find($sesion->getAula());
            $arraySesiones = explode('&', $aula->getSesiones());
            for ($i = 0; $i <= count($arraySesiones); $i++) {
                if ($arraySesiones[$i] == $id) {
                    $pos = $i;
                    break;
                }
            }
            unset($arraySesiones[$pos]);
            $arraySesiones1 = array_values($arraySesiones);
            $aula->setSesiones(implode($arraySesiones1, '&'));
            $em->persist($aula);
            $sesion->setAula(null);
        } else {
            $cancha = $this->getDoctrine()->getManager()->getRepository('CriveroPruebaBundle:Canchas')->find($sesion->getCancha());
            $arraySesiones = explode('&', $cancha->getSesiones());
            for ($i = 0; $i <= count($arraySesiones); $i++) {
                if ($arraySesiones[$i] == $id) {
                    $pos = $i;
                    break;
                }
            }
            unset($arraySesiones[$pos]);
            $arraySesiones1 = array_values($arraySesiones);
            $cancha->setSesiones(implode($arraySesiones1, '&'));
            $em->persist($cancha);
            $sesion->setCancha(null);
        }
        $em->persist($sesion);
        $em->flush();
        $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
        foreach ($usuarios as $usuario) {
            if ($usuario->getTipo() == 2) {
                $notificacion = new Notificaciones();
                $notificacion->setIdDestinatario($usuario->getId());
                $notificacion->setIdEntidad($sesion->getId());
                $notificacion->setMensaje("La sesión " . $sesion->getNombre()
                        . " del monitor " . $sesion->getMonitor() . " ha terminado");
                $notificacion->setIdOrigen($this->getUser()->getId());
                $notificacion->setConcepto("Publica");
                $notificacion->setEstado("No leido");
                $em->persist($notificacion);
                $em->flush();
            }
        }

        $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido terminada con éxito');
        return $this->redirect($this->generateUrl('modulomonitores_monitores_miSesionMonitores', array('notificacionesSinLeer' => $this->getNewNotification(), 'id' => $sesion->getId())));
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

    private function changeStateNotification($id) {
        $repositoryN = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Notificaciones");
        if ($repositoryN->getNotificacionEntidad($id, $this->getUser()->getId())) {
            $repositoryN->getNotificacionEntidad($id, $this->getUser()->getId())[0]->setEstado("Leido");
            $this->getDoctrine()->getManager()->flush();
        }
    }

    private function updateMonth($i, $mes, $vuelta, $limite) {
        $i = 0;
        if ($mes == 12) {
            $mes = 0;
            $vuelta = 1;
        }
        $mes++;
        $fecha = date('Y') + $vuelta . '-' . $mes . '-01';
        $limite = date('t', strtotime($fecha));
    }

    private function findEntity($id, $em, $repository) {
        $entity = $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
    }

    private function getArrayEntidades($repository, $array) {
        for ($i = 0; $i < count($array); $i++) {
            $resultado[$i] = $repository->find($array[$i]);
        }
        return $resultado;
    }

    private function removeSesionId($entity, $id) {
        $pos = strpos($entity->getSesiones(), strval($id));
        $cifra = strlen(strval($id));
        ($pos > 0) ? $entity->setSesiones(substr($entity->getSesiones(), 0, $pos - 1) . substr($entity->getSesiones(), $pos + $cifra)) :
                        $entity->setSesiones(substr($entity->getSesiones(), $pos + ($cifra + 1)));
    }

}
