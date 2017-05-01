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
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.estado = 'validada' AND s.cliente = 'normal'";
        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesionesTotales($searchQuery) :
                        $sesiones = $em->createQuery($dql)->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        $aulas = null;
        foreach ($sesiones as $clave => $sesion) {
            $aulas[$clave] = $repositoryAula->find($sesion->getAula());
        }
        return $this->render('modulomonitoresmonitoresBundle:Publica:sesionesMonitores.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "pagination" => $pagination, "aulas" => $aulas));
    }

    public function sesionMonitoresAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        $this->changeStateNotification($id);
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aula = $repositoryAula->find($sesion->getAula());

        return $this->render('modulomonitoresmonitoresBundle:Publica:sesionMonitores.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "sesion" => $sesion, "aula" => $aula));
    }

    public function misSesionesMonitoresAction(Request $request) {
        $this->changeStateNotification($request->get('id'));
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");

        $em = $this->getDoctrine()->getManager();
        $usuarioId = $this->getUser()->getId();
        $dql = "SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.idMonitor = :id AND s.cliente = 'normal'";

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesiones($searchQuery, $usuarioId) :
                        $sesiones = $em->createQuery($dql)->setParameter('id', $usuarioId)->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        $aulas = null;
        foreach ($sesiones as $clave => $sesion) {
            $aulas[$clave] = $repositoryAula->find($sesion->getAula());
        }

        return $this->render('modulomonitoresmonitoresBundle:Publica:misSesionesMonitores.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "pagination" => $pagination, "aulas" => $aulas));
    }

    public function miSesionMonitoresAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $sesion = $repository->find($id);
        $this->changeStateNotification($id);
        $aula = $repositoryAula->find($sesion->getAula());
        $deleteForm = $this->createDeleteForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Publica:miSesionMonitores.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "sesion" => $sesion, "aula" => $aula, 'delete_form' => $deleteForm->createView()));
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

    private function createCreateForm(Sesiones $entity) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->findAll();
        $form = $this->createForm(new SesionesType($aulas), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_crearSesion'),
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
            if ($form->get('duracion')->getData() > 60) {
                $form->get('duracion')->addError(new FormError('Máximo 60 minutos por sesión'));
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
            if (count($dias) < 2) {
                $form->get('dias')->addError(new FormError('Seleccione mínimo dos días'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:nuevaSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            $sesion->setDias($diasElegidos);
            $lClientes = $form->get('lClientes')->getData();
            if ($lClientes != null) {
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

    public function editarSesionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createEdiForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'sesion' => $sesion, 'form' => $form->createView()));
    }

    private function createEdiForm(Sesiones $entity) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->findAll();
        $form = $this->createForm(new SesionesType($aulas), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_editar', array('id' => $entity->getId())),
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
            if ($form->get('duracion')->getData() > 60) {
                $form->get('duracion')->addError(new FormError('Máximo 60 minutos por sesión'));
                return $this->render('modulomonitoresmonitoresBundle:Publica:editarSesion.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'form' => $form->createView()));
            }
            $lClientes = $form->get('lClientes')->getData();
            if ($lClientes != null) {
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
        $form = $this->createForm(new SesionesType(array()), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_suspenderSe', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function suspenderSeAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createSuspenderSesionForm($sesion);
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
        $notificacion->setMensaje("Has sido expulsado de la sesión" . $sesion->getNombre());
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

}
