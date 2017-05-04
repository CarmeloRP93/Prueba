<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Reservas;
use Crivero\PruebaBundle\Entity\Pagos;
use Crivero\PruebaBundle\Form\PagosType;
use Crivero\PruebaBundle\Form\ReservasType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;
use Crivero\PruebaBundle\Entity\Notificaciones;

class ReservaController extends Controller {

    public function reservasClientesAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas");
        $cliente = $this->getUser();
        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $reservas = $repository->searchReservasCliente($searchQuery, $cliente->getId()) :
                        $reservas = $repository->getReservasCliente($cliente->getId());

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $reservas, $request->query->getInt('page', 1), 5);

        return $this->render('moduloclientesclienteBundle:Reservas:reservasClientes.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function reservaClientesAction($id) {
        $this->changeStateNotification($id);
        $repositoryReserva = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas");
        $reserva = $repositoryReserva->find($id);
        $canchaId = $reserva->getIdCancha();
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $cancha = $repository->find($canchaId);
        $deleteForm = $this->createCustomForm($reserva->getId(), 'DELETE', 'moduloclientes_cliente_cancelarReserva');
        return $this->render('moduloclientesclienteBundle:Reservas:reservaClientes.html.twig', array("reserva" => $reserva, "cancha" => $cancha, 'delete_form' => $deleteForm->createView(),
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function nuevaReservaAction($id) {
        $reserva = new Reservas();
        $form = $this->createCreateForm($reserva, $id);
        return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView(), 'id' => $id, 'mensaje' => null,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function createCreateForm(Reservas $entity, $id) {
        $form = $this->createForm(new ReservasType(array()), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_mostrarHoras', array('id' => $id)),
            'method' => 'POST'
        ));
        return $form;
    }

    public function mostrarHorasAction($id, Request $request) {
        $reserva = new Reservas();
        $form = $this->createCreateForm($reserva, $id);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $fecha = $form->get('fechaInicio')->getData();
            if ($fecha != null) {
                $fecha = date_format($fecha, "d-m");
                $horarioscancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Horarioscanchas")->getHorario($id, $fecha);
                if ($horarioscancha == array() || $horarioscancha[0]['periodo'] == null) {
                    $mensaje = 'No hay horas disponibles para la fecha seleccionada';
                    return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView(), 'id' => $id, 'mensaje' => $mensaje,
                                'notificacionesSinLeer' => $this->getNewNotification()));
                }
            } else {
                return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView(), 'id' => $id, 'mensaje' => null,
                            'notificacionesSinLeer' => $this->getNewNotification()));
            }
            return $this->elegirHoraAction($id, $fecha);
        }
        return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView(), 'id' => $id, 'mensaje' => null,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function elegirHoraAction($id, $fecha) {
        $reserva = new Reservas();
        $form = $this->createCreateFormHora($reserva, $id, $fecha);
        $fecha2 = $fecha . '-' . date('Y');
        $fecha = date('Y-m-d', strtotime($fecha2));
        return $this->render('moduloclientesclienteBundle:Reservas:elegirHora.html.twig', array('form' => $form->createView(), 'id' => $id, 'fecha' => $fecha, 'mensaje' => null,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function createCreateFormHora(Reservas $entity, $id, $fecha) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosCanchas");
        $horas = $repository->getHorario($id, $fecha);
        $horass = implode("", $horas[0]);
        $horasss = explode("&", $horass);
        $form = $this->createForm(new ReservasType($horasss), $entity, array(
            'action' => $this->get('router')->generate('moduloclientes_cliente_comprobarReserva', array('id' => $id, 'fechaInicio' => $fecha)),
            'method' => 'POST'
        ));
        return $form;
    }

    public function comprobarReservaAction($id, Request $request) {
        //Aquí cogemos la fecha de reserva que escogimos en la vista de nueva reserva, le damos el formato
        $reserva = new Reservas();
        $fechaTime = $this->getRequest()->query->get('fechaInicio') . '-' . date('Y');
        $fecha = date('Y-m-d', strtotime($fechaTime));
        $form = $this->createCreateFormHora($reserva, $id, $this->getRequest()->query->get('fechaInicio'));
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            //Cogemos el id de la cancha escogida previamente y cambiamos el estado a reservado en la tabla reservas
            $cancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->find($id);

            //Comprobamos si se ha seleccionado algún horario
            if (count($form->get('horario')->getData()) == 0) {
                $form->get('horario')->addError(new FormError('Seleccione una o más opciones.'));
                return $this->render('moduloclientesclienteBundle:Reservas:elegirHora.html.twig', array('form' => $form->createView(), 'id' => $id, 'mensaje' => null, 'fecha' => $fecha,
                            'notificacionesSinLeer' => $this->getNewNotification()));
            }

            //Concatenamos en horitas las horas seleccionadas en una string
            $horitas = "";
            for ($i = 0; $i < count($form->get('horario')->getData()); $i++) {

                //Esto es para comprobar que no se puedan escoger horas que no sean contiguas
                if ($i != count($form->get('horario')->getData()) - 1) {
                    if ((int) substr(strval($form->get('horario')->getData()[$i]), 0, 2) + 1 != (int) substr(strval($form->get('horario')->getData()[$i + 1]), 0, 2)) {
                        $mensaje = 'Seleccione horas contiguas. Para escoger horas no contiguas realice distintas reservas';
                        return $this->render('moduloclientesclienteBundle:Reservas:elegirHora.html.twig', array('form' => $form->createView(), 'id' => $id, 'mensaje' => $mensaje, 'fecha' => $fecha,
                                    'notificacionesSinLeer' => $this->getNewNotification()));
                    }
                }

                $horitas .= strval($form->get('horario')->getData()[$i]) . "&";
            }
            return $this->pagoReservaAction($id, $fecha, $horitas);
        }

        return $this->render('moduloclientesclienteBundle:Reservas:elegirHora.html.twig', array('form' => $form->createView(), 'id' => $id, 'mensaje' => null,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function pagoReservaAction($idCancha, $fecha, $horitas) {
        $pago = new Pagos();
        $form = $this->createPagoForm($pago, $idCancha, $fecha, $horitas);
        return $this->render('moduloclientesclienteBundle:Reservas:pagoReserva.html.twig', array('form' => $form->createView(),
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function createPagoForm(Pagos $entity, $idCancha, $fecha, $horitas) {
        $form = $this->createForm(new PagosType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_crearReserva', array('id' => $idCancha, 'fecha' => $fecha, 'horitas' => $horitas)),
            'method' => 'POST'
        ));
        return $form;
    }

    public function crearReservaAction($id, Request $request) {
        $horitas = $this->getRequest()->query->get('horitas');
        $fecha = explode('-', $this->getRequest()->query->get('fecha'));
        $fechaForm = $fecha[2] . '-' . $fecha[1];
        $pago = new Pagos();
        $reserva = new Reservas();
        $form = $this->createPagoForm($pago, $id, $fecha, $horitas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cliente = $this->getUser();
            $reserva->setIdCliente($cliente->getId());
            $reserva->setCliente($cliente->getUsername());
            $pago->setIdCliente($cliente->getId());
            $pago->setIdConcepto($id);
            $pago->setConcepto('Cancha');

            //Cogemos el id de la cancha escogida previamente y cambiamos el estado a reservado en la tabla reservas
            $reserva->setIdCancha($id);
            $cancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->find($id);
            $reserva->setCancha($cancha->getTipo());
            $reserva->setEstadoReserva("Reservado");

            //Escribimos en la base de datos de reserva la fecha y la horas
            $reserva->setFechaInicio(date_create($this->getRequest()->query->get('fecha')));
            $reserva->setHorario($horitas);

            //Aqui cogemos todas las horas disponible, comparamos con las seleccionadas y eliminamos de la tabla cancha las horas ya reservadas
            $horarioscancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Horarioscanchas")->getHorario($id, $fechaForm);
            $horarioscancha2 = implode("", $horarioscancha[0]);
            $horariosArray = explode('&', $horarioscancha2);
            $horitasArray = array_filter(explode('&', $horitas));
            $aux = $horariosArray;
            for ($i = 0; $i < count($aux); $i++) {
                foreach ($horitasArray as $valor) {
                    if ($aux[$i] == $valor) {
                        unset($horariosArray[$i]);
                        break;
                    }
                }
            }
            $instancia = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Horarioscanchas")->getInstancia($id, $fechaForm);
            $instancia[0]->setPeriodo(implode('&', $horariosArray));

            $pago->setCuantia($cancha->getPrecio()*count($horitasArray));
            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $em->persist($pago);
            $em->persist($reserva);
            $em->persist($instancia[0]);
            $em->flush();

            return $this->redirect($this->generateUrl('moduloclientes_cliente_reservasClientes'));
        }

        return $this->render('moduloclientesclienteBundle:Reservas:pagoReserva.html.twig', array('form' => $form->createView(),
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function cancelarReservaAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $reserva = $this->findReserva($id, $em);

        //Pasamos la fecha inicio al formato que está en la tabla reservas
        $fechaReserva = date_format($reserva->getFechaInicio(), 'd-m');
        $idCancha = $reserva->getIdCancha();
        $horarioscancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Horarioscanchas")->getHorario($idCancha, $fechaReserva);
        if ($horarioscancha[0]['periodo'] == null) {
            $concatenado = substr($reserva->getHorario(), 0, -1);
        } else {

            //Cogemos el horario reservado y lo metemos en un vector para comparar con los no reservados
            $horarioReservado = explode('&', $reserva->getHorario());
            $horarioscancha2 = implode("", $horarioscancha[0]);
            $horariosNoReservados = explode('&', $horarioscancha2);
            $concatenado = '';
            $flag = 0;
            for ($i = 0; $i < count($horariosNoReservados); $i++) {
                if ((int) substr($horariosNoReservados[$i], 0, 2) > (int) substr($horarioReservado[0], 0, 2) && $flag == 0) {
                    $concatenado .= $reserva->getHorario();
                    $flag = 1;
                }
                ($i == count($horariosNoReservados) - 1) ? $concatenado .= $horariosNoReservados[$i] : $concatenado .= $horariosNoReservados[$i] . '&';
                if ($i == count($horariosNoReservados) - 1 && $flag == 0) {
                    $concatenado .= '&' . substr($reserva->getHorario(), 0, -1);
                }
            }
        }

        $instancia = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Horarioscanchas")->getInstancia($idCancha, $fechaReserva);
        $instancia[0]->setPeriodo($concatenado);
        $em->persist($instancia[0]);
        $em->flush();

        $form = $this->createCustomForm($reserva->getId(), 'DELETE', 'moduloclientes_cliente_cancelarReserva');
        $form->handleRequest($request);

        $res = $this->deleteReserva($em, $reserva);
        $request->getSession()->getFlashBag()->add('mensaje', $res['message']);
        return $this->redirect($this->generateUrl('moduloclientes_cliente_reservasClientes'));
    }

    private function deleteReserva($em, $reserva) {
        $em->remove($reserva);
        $em->flush();

        $message = 'La reserva ha sido eliminada con éxito.';
        $remove = 1;
        return array('removed' => $remove, 'message' => $message);
    }

    private function findReserva($id, $em) {
        $reserva = $em->getRepository('CriveroPruebaBundle:Reservas')->find($id);
        if (!$reserva) {
            throw $this->createNotFoundException('Reserva no encontrada');
        }
        return $reserva;
    }

    private function createCustomForm($id, $method, $route) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl($route, array('id' => $id)))
                        ->setMethod($method)
                        ->getForm();
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
