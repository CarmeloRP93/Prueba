<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;
use Crivero\PruebaBundle\Entity\Notificaciones;
use Crivero\PruebaBundle\Form\SesionesType;
use Crivero\PruebaBundle\Form\TarifasType;
use Crivero\PruebaBundle\Entity\Tarifas;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class SesionController extends Controller {

    public function sesionesAction(Request $request) {
        $this->changeStateNotification($request->get('id'));
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesionesGeneralesByAdmin($searchQuery) :
                        $sesiones = $repository->getSesionesGenerales();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        return $this->render('CriveroPruebaBundle:Sesiones:sesiones.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function sesionesClienteAction($id, Request $request) {
        $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $cliente = $repositoryUsuarios->find($id);

        $idsSesionesCliente = explode('&', $cliente->getSesiones());
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $this->getArrayEntidades($repositorySesiones, $idsSesionesCliente);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($sesiones, $request->query->getInt('page', 1), 6);

        return $this->render('CriveroPruebaBundle:Sesiones:sesionesCliente.html.twig', array("pagination" => $pagination,
                    'username' => $cliente->getUsername(), 'cId' => $id,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function sesionesMonitorAction($id, Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $repository->getSesionesMonitor($id);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($sesiones, $request->query->getInt('page', 1), 6);

        return $this->render('CriveroPruebaBundle:Sesiones:sesionesMonitor.html.twig', array("pagination" => $pagination,
                    'username' => $sesiones[0]->getMonitor(), 'mId' => $id,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function horariosSesionAction($id, Request $request) {
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repositorySesiones->find($id);
        $horarios = explode("&", $sesion->getHorario());

//        $paginator = $this->get('knp_paginator');
//        $pagination = $paginator->paginate($horarios, $request->query->getInt('page', 1), 8);
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $repositoryCancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        if ($sesion->getConcepto() == 'aula') {
            $recinto = $repositoryAula->find($sesion->getAula());
        } else {
            $recinto = $repositoryCancha->find($sesion->getCancha());
        }
        return $this->render('CriveroPruebaBundle:Sesiones:horariosSesion.html.twig', array("sesion" => $sesion,
                    "pagination" => $horarios, 'recinto' => $recinto, 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function dedicadasAction(Request $request) {
        $this->changeStateNotification($request->get('id'));
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesionesDedicadasByAdmin($searchQuery) :
                        $sesiones = $repository->getSesionesDedicadas();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        return $this->render('CriveroPruebaBundle:Sesiones:sesionesDedicadas.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function sesionAction($id) {
        $this->changeStateNotification($id);
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        $repositoryCancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");

        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        if ($sesion->getConcepto() == 'aula') {
            $recinto = $repositoryAula->find($sesion->getAula());
        } else {
            $recinto = $repositoryCancha->find($sesion->getCancha());
        }
        return $this->render('CriveroPruebaBundle:Sesiones:sesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(),
                    "sesion" => $sesion, "recinto" => $recinto, 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function aceptarSesionAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $sesion->setEstado("validada");
        $sesion->setEstadoCliente("disponible");

        $hoy = (int) date_format($sesion->getFechaInicio(), 'd');
        $mes = date_format($sesion->getFechaInicio(), 'm');
        $limite = date_format($sesion->getFechaInicio(), 't');
        $duracion = $sesion->getNSesiones();
        //$this->actualizarValores($hoy, $mes, $limite);

        $tarifas = $this->findTarifas(1, $em);
        $duracionSesion = ($sesion->getDuracion() > '60') ? 2 : 1;
        if ($sesion->getCliente() != 'normal') {
            $sesion->setPrecio($tarifas->getPrivada() * $duracionSesion);
        } else {
            if ($sesion->getConcepto() == 'aula') {
                $sesion->setPrecio($tarifas->getEntrenamiento() * $duracionSesion);
            } elseif ($sesion->getConcepto() == 'cancha') {                
                $sesion->setPrecio($tarifas->getDeportiva() * $duracionSesion);
            }
        }

        $vuelta = 0;
        $diasSelect = explode('&', $sesion->getDias());
        for ($i = $hoy; $i <= $limite; $i++) {
            $flagDiaSemana = false;

            foreach ($diasSelect as $dia) {
                if (date('l', strtotime($i . '-' . $mes . '-' . date('Y'))) == $dia) {
                    $flagDiaSemana = true;
                    break;
                }
            }
            if (!$flagDiaSemana) {
                if ($i >= $limite) {
                    // $this->updateMonth($i, $mes, $vuelta, $limite);
                    $i = 0;
                    if ($mes == 12) {
                        $mes = 0;
                        $vuelta = 1;
                    }
                    $mes++;
                    if ($mes < 10)
                        $mes = '0' . $mes;
                    $fecha = '01' . '-' . $mes . '-' . date('Y') + $vuelta;
                    $limite = (int) (date('t', strtotime($fecha)));
                }
                continue;
            }

            $tiempo = false;
            if ($sesion->getDuracion() > 60) {
                $tiempo = true;
            }
            if ($sesion->getConcepto() == 'cancha') {

                $repositoryHorariosCanchas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosCanchas");
                $diaReserva = $repositoryHorariosCanchas->getReservaSesion($sesion->getCancha(), $i);
            } else {

                $repositoryHorariosAulas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosAulas");
                $diaReserva = $repositoryHorariosAulas->getDiaReserva($sesion->getAula(), $i);
            }
            $horaComienzo = $sesion->getHoraComienzo();
            $fechaReserva = $this->findFechaReserva($diaReserva[0], $mes, $horaComienzo, $tiempo, $sesion->getConcepto());
            if ($fechaReserva === 0) {
                if ($i >= $limite) {
                    // $this->updateMonth($i, $mes, $vuelta, $limite);
                    $i = 0;
                    if ($mes == 12) {
                        $mes = 0;
                        $vuelta = 1;
                    }
                    $mes++;
                    if ($mes < 10)
                        $mes = '0' . $mes;
                    $fecha = '01' . '-' . $mes . '-' . date('Y') + $vuelta;
                    $limite = (int) (date('t', strtotime($fecha)));
                }
                continue;
            }
            ($sesion->getHorario() == null) ? $horarioCompleto = $fechaReserva :
                            $horarioCompleto = $sesion->getHorario() . "&" . $fechaReserva;
            $sesion->setHorario($horarioCompleto);
            $em->persist($diaReserva[0]);
            $duracion--;
            if ($duracion == 0)
                break;

            if ($i >= $limite) {
                // $this->updateMonth($i, $mes, $vuelta, $limite);
                $i = 0;
                if ($mes == 12) {
                    $mes = 0;
                    $vuelta = 1;
                }
                $mes++;
                if ($mes < 10)
                    $mes = '0' . $mes;
                $fecha = '01' . '-' . $mes . '-' . date('Y') + $vuelta;
                $limite = (int) (date('t', strtotime($fecha)));
            }
        }

        $em->persist($sesion);
        if ($sesion->getConcepto() == 'cancha') {
            $cancha = $this->findEntity($sesion->getCancha(), $em, 'CriveroPruebaBundle:Canchas');
            ($cancha->getSesiones() == null) ? $cancha->setSesiones($sesion->getId()) :
                            $cancha->setSesiones($cancha->getSesiones() . "&" . $sesion->getId());
            $em->persist($cancha);
        } else {
            $aula = $this->findEntity($sesion->getAula(), $em, 'CriveroPruebaBundle:Aulas');
            ($aula->getSesiones() == null) ? $aula->setSesiones($sesion->getId()) :
                            $aula->setSesiones($aula->getSesiones() . "&" . $sesion->getId());
            $em->persist($aula);
        }
        $em->flush();

        $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
        foreach ($usuarios as $usuario) {
            if ($usuario->getTipo() == 1) {
                continue;
            }
            $notificacion = new Notificaciones();
            $notificacion->setIdDestinatario($usuario->getId());
            $notificacion->setIdEntidad($sesion->getId());
            if ($usuario->getId() == $sesion->getIdMonitor()) {
                $notificacion->setMensaje("Tu sesion " . $sesion->getNombre() . " ha"
                        . " sido aceptada");
            } else {
                $notificacion->setMensaje("Una nueva sesion ha sido creada");
            }
            $notificacion->setIdOrigen($this->getUser()->getId());
            $notificacion->setEstado("No leido");
            ($sesion->getCliente() == "normal") ? $notificacion->setConcepto("Publica") :
                            $notificacion->setConcepto("Privada");
            $em->persist($notificacion);
            $em->flush();
        }

        $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido aceptada con éxito');
        return $this->redirect($this->generateUrl('crivero_prueba_sesion', array('id' => $sesion->getId(),
                            'notificacionesSinLeer' => $this->getNewNotification())));
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

    public function cancelarSesionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("No encontrado");
        }
        $form = $this->createCancelForm($sesion);
        return $this->render('CriveroPruebaBundle:Sesiones:cancelarSesion.html.twig', array('sesion' => $sesion,
                    'form' => $form->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function createCancelForm(Sesiones $entity) {
        $form = $this->createForm(new SesionesType(array(), null), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_cancelar', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function cancelarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');

        $form = $this->createCancelForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $observaciones = $form->get('observaciones')->getData();

            if ($observaciones != null) {
                $sesion->setEstado("cancelada");
                $sesion->setEstadoCliente("cancelada");
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

                $idsUsuarios = explode('&', $sesion->getIdsClientes() . '&' . $sesion->getIdMonitor());
                foreach ($idsUsuarios as $idUsuario) {
                    if ($idUsuario == 0)
                        continue;
                    $notificacion = new Notificaciones();
                    $notificacion->setIdDestinatario($idUsuario);
                    $notificacion->setIdEntidad($sesion->getId());
                    if ($idUsuario == $sesion->getIdMonitor()) {
                        $notificacion->setMensaje("Tu sesion " . $sesion->getNombre() . " ha sido cancelada");
                    } else {
                        $notificacion->setMensaje("La sesion " . $sesion->getNombre() . " del monitor " .
                                $sesion->getMonitor() . " ha sido cancelada");
                    }
                    $notificacion->setIdOrigen($this->getUser()->getId());
                    $notificacion->setEstado("No leido");
                    ($sesion->getCliente() == "normal") ? $notificacion->setConcepto("Publica") :
                                    $notificacion->setConcepto("Privada");
                    $em->persist($notificacion);
                    $em->flush();
                }


                $request->getSession()->getFlashBag()->add('mensaje', 'La sesión se canceló correctamente');
                return $this->redirect($this->generateUrl('crivero_prueba_sesion', array('id' => $sesion->getId())));
            } else {
                $form->get('observaciones')->addError(new FormError('Rellene el campo.'));
            }
        }

        return $this->render('CriveroPruebaBundle:Sesiones:cancelarSesion.html.twig', array('sesion' => $sesion,
                    'form' => $form->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function rechazarSesionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createRechForm($sesion);
        return $this->render('CriveroPruebaBundle:Sesiones:rechazarSesion.html.twig', array('sesion' => $sesion,
                    'form' => $form->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function createRechForm(Sesiones $entity) {
        $form = $this->createForm(new SesionesType(array(), null), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_rechazar', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function rechazarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createRechForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sesion->setEstado("rechazada");
            $sesion->setEstadoCliente("no disponible");
            $observaciones = $form->get('observaciones')->getData();
            if ($observaciones != null) {
                $em->flush();

                $notificacion = new Notificaciones();
                $notificacion->setIdDestinatario($sesion->getIdMonitor());
                $notificacion->setIdEntidad($sesion->getId());
                $notificacion->setMensaje("Tu sesion " . $sesion->getNombre() . " ha sido rechazada");
                $notificacion->setIdOrigen($this->getUser()->getId());
                $notificacion->setEstado("No leido");
                ($sesion->getCliente() == "normal") ? $notificacion->setConcepto("Publica") :
                                $notificacion->setConcepto("Privada");
                $em->persist($notificacion);
                $em->flush();

                $request->getSession()->getFlashBag()->add('mensaje', 'La sesión se rechazó correctamente.');
                return $this->redirect($this->generateUrl('crivero_prueba_sesion', array('id' => $sesion->getId())));
            } else {
                $form->get('observaciones')->addError(new FormError('Rellene el campo gracias'));
            }
        }
        return $this->render('CriveroPruebaBundle:Sesiones:rechazarSesion.html.twig', array('sesion' => $sesion,
                    'form' => $form->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
    }
    
        public function tarifasAction() {
        $em = $this->getDoctrine()->getManager();
        $tarifas = $this->findTarifas(1, $em);
        $form = $this->createEditTarifasForm($tarifas);
        return $this->render('CriveroPruebaBundle:Sesiones:tarifas.html.twig', array(
                    'form' => $form->createView(),
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function createEditTarifasForm(Tarifas $entity) {
        $form = $this->createForm(new TarifasType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_actualizarTarifas')));
        return $form;
    }

    public function actualizarTarifasAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $tarifas = $this->findTarifas(1, $em);
        $form = $this->createEditTarifasForm($tarifas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $precioEntrenamiento = $form->get('entrenamiento')->getData();
            $precioDeportiva = $form->get('deportiva')->getData();
            $precioPrivada = $form->get('privada')->getData();

            $tarifas->setEntrenamiento($precioEntrenamiento);
            $tarifas->setDeportiva($precioDeportiva);
            $tarifas->setPrivada($precioPrivada);
            $em->persist($tarifas);

            $usuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->findAll();
            foreach ($usuarios as $usuario) {
                if ($usuario->getTipo() == 2) {
                    $notificacion = new Notificaciones();
                    $notificacion->setIdDestinatario($usuario->getId());
                    $notificacion->setIdEntidad(1);
                    $notificacion->setMensaje("Tarifas de sesiones actualizadas");
                    $notificacion->setIdOrigen($this->getUser()->getId());
                    $notificacion->setEstado("No leido");
                    $notificacion->setConcepto("Tarifas");
                    $em->persist($notificacion);
                    $em->flush();
                }
            }
            return $this->redirect($this->generateUrl('crivero_prueba_sesiones'));
        }
        return $this->render('CriveroPruebaBundle:Sesiones:tarifas.html.twig', array('form' => $form->createView(),
                    'notificacionesSinLeer' => $this->getNewNotification()));
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

    private function actualizarValores($hoy, $mes, $limite) {
        if ($hoy > 28 && $limite == 30) {
            $mes++;
            $hoy = 1;
        } elseif ($hoy > 29 && $limite == 31) {
            $mes++;
            if ($mes == 13) {
                $mes = 1;
            }
            $hoy = 1;
        } elseif ($hoy > 26 && $mes == 02) {
            $mes++;
            $hoy = 1;
        }
    }

    private function findFechaReserva($diaReserva, $mes, $horaComienzo, $tiempo, $concepto) {
        if ($tiempo) {
            $periodo = explode('&', $diaReserva->getPeriodo());
            $horaReservaAux = null;
            $horaReserva = null;
            if ($horaComienzo == 1) {
                foreach ($periodo as $clave => $hora) {
                    $periodoComienzo = explode('-', $hora);
                    if ($periodoComienzo[0] < '12:00' && $horaReservaAux === null) {
                        $horaReservaAux = $hora;
                        $pos = $clave;
                    } else {
                        $horaReservaNumerico = explode(':', $horaReservaAux);
                        $periodoComienzoNumerico = explode(':', $periodoComienzo[0]);
                        if ((int) $horaReservaNumerico[0] + 1 == (int) $periodoComienzoNumerico[0]) {
                            $horaReserva = $horaReservaNumerico[0] . ":00-" . $periodoComienzo[1];
                            break;
                        }
                    }
                }
            } else {
                foreach ($periodo as $clave => $hora) {
                    $periodoComienzo = explode('-', $hora);
                    if ($periodoComienzo[0] >= '16:00' && $periodoComienzo[0] <= '20:00' && $horaReservaAux === null) {
                        $horaReservaAux = $hora;
                        $pos = $clave;
                    } else {
                        $horaReservaNumerico = explode(':', $horaReservaAux);
                        $periodoComienzoNumerico = explode(':', $periodoComienzo[0]);
                        if ((int) $horaReservaNumerico[0] + 1 == (int) $periodoComienzoNumerico[0]) {
                            $horaReserva = $horaReservaNumerico[0] . ":00-" . $periodoComienzo[1];
                            break;
                        }
                    }
                }
            }
            if ($horaReserva === null)
                return 0;
            unset($periodo[$pos]);
            $arrayPeriodo = array_values($periodo);
            unset($arrayPeriodo[$pos]);
            $arrayPeriodo1 = array_values($arrayPeriodo);
            $diaReserva->setPeriodo(implode($arrayPeriodo1, '&'));
            if ($concepto == 'cancha') {
                $fechaReserva = $diaReserva->getFechaInicioSesion() . "/" . $mes . " : " . $horaReserva;
            } else {
                $fechaReserva = $diaReserva->getFechaInicio() . "/" . $mes . " : " . $horaReserva;
            }
            return $fechaReserva;
        }
        $periodo = explode('&', $diaReserva->getPeriodo());
        $horaReserva = null;
        if ($horaComienzo == 1) {
            foreach ($periodo as $clave => $hora) {
                $periodoComienzo = explode('-', $hora);
                if ($periodoComienzo[0] < '13:00') {
                    $horaReserva = $hora;
                    $pos = $clave;
                    break;
                }
            }
        } else {
            foreach ($periodo as $clave => $hora) {
                $periodoComienzo = explode('-', $hora);
                if ($periodoComienzo[0] >= '16:00') {
                    $horaReserva = $hora;
                    $pos = $clave;
                    break;
                }
            }
        }
        if ($horaReserva === null)
            return 0;
        unset($periodo[$pos]);
        $arrayPeriodo = array_values($periodo);
        $diaReserva->setPeriodo(implode($arrayPeriodo, '&'));
        if ($concepto == 'cancha') {
            $fechaReserva = $diaReserva->getFechaInicioSesion() . "/" . $mes . " : " . $horaReserva;
        } else {
            $fechaReserva = $diaReserva->getFechaInicio() . "/" . $mes . " : " . $horaReserva;
        }
        return $fechaReserva;
    }

    private function isWeekend($dia, $mes, $cambio) {
        $fecha = $dia . '-' . $mes . '-' . strval(date('Y') + $cambio);
        $diaS = date('w', strtotime($fecha));
        return ($diaS == 0 || $diaS == 6 );
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

    private function findTarifas($id, $em) {
        $tarifas = $em->getRepository('CriveroPruebaBundle:Tarifas')->find($id);
        if (!$tarifas) {
            throw $this->createNotFoundException('Tarifas no encontradas');
        }
        return $tarifas;
    }

}
