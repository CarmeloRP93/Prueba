<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Reservas;
use Crivero\PruebaBundle\Form\ReservasType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class ReservaController extends Controller {

    public function reservasClientesAction() {
        $em = $this->getDoctrine()->getManager();
        $usuarioId = $this->getUser()->getId();
        $dql = 'SELECT r FROM CriveroPruebaBundle:Reservas r WHERE r.idCliente = :id';
        $reservas = $em->createQuery($dql)->setParameter('id', $usuarioId)->getResult();
        return $this->render('moduloclientesclienteBundle:Reservas:reservasClientes.html.twig', array("reservas" => $reservas));
    }

    public function reservaClientesAction($id) {
        $repositoryReserva = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas");
        $reserva = $repositoryReserva->find($id);
        $canchaId = $reserva->getIdCancha();
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $cancha = $repository->find($canchaId);
        return $this->render('moduloclientesclienteBundle:Reservas:reservaClientes.html.twig', array("reserva" => $reserva, "cancha" => $cancha));
    }

    public function nuevaReservaAction($id) {
        $reserva = new Reservas();
        $form = $this->createCreateForm($reserva, $id);
        return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView(), 'id' => $id, 'mensaje' => null));
    }

    public function elegirHoraAction($id, $fecha) {
        $reserva = new Reservas();
        $form = $this->createCreateFormHora($reserva, $id, $fecha);
        return $this->render('moduloclientesclienteBundle:Reservas:elegirHora.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    private function createCreateFormHora(Reservas $entity, $id, $fecha) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosCanchas");
        $horas = $repository->getHorario($id, $fecha);
        $horass = implode("", $horas[0]);
        $horasss = explode("&", $horass);
        $form = $this->createForm(new ReservasType($horasss), $entity, array(
            'action' => $this->get('router')->generate('moduloclientes_cliente_crearReserva', array('id' => $id, 'fechaInicio' => $fecha)),
            'method' => 'POST'
        ));
        return $form;
    }

    private function createCreateForm(Reservas $entity, $id) {
        $form = $this->createForm(new ReservasType(array()), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_mostrarHoras', array('id' => $id)),
            'method' => 'POST'
        ));
        return $form;
    }

    public function crearReservaAction($id, Request $request) {

        //Aquí cogemos la fecha de reserva que escogimos en la vista de nueva reserva, le damos el formato
        $reserva = new Reservas();
        $fechaTime = $this->getRequest()->query->get('fechaInicio') . '-' . date('Y');
        $fecha = date_create(date('Y-m-d', strtotime($fechaTime)));
        $form = $this->createCreateFormHora($reserva, $id, $this->getRequest()->query->get('fechaInicio'));
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $cliente = $this->getUser();
            $reserva->setIdCliente($cliente->getId());
            $reserva->setCliente($cliente->getUsername());

            //Cogemos el id de la cancha escogida previamente y cambiamos el estado a reservado en la tabla reservas
            $reserva->setIdCancha($id);
            $cancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->find($id);
            $reserva->setCancha($cancha->getTipo());
            $reserva->setEstadoReserva("Reservado");

            //Comprobamos si se ha seleccionado algún horario
            if (count($form->get('horario')->getData()) == 0) {
                $form->get('horario')->addError(new FormError('Seleccione una o más opciones'));
                return $this->render('moduloclientesclienteBundle:Reservas:elegirHora.html.twig', array('form' => $form->createView(), 'id' => $id));
            }

            //Concatenamos en horitas las horas seleccionadas en una string
            $horitas = "";
            for ($i = 0; $i < count($form->get('horario')->getData()); $i++) {
                $horitas .= strval($form->get('horario')->getData()[$i]) . "&";
            }

            //Escribimos en la base de datos de reserva la fecha y la horas
            $reserva->setFechaInicio($fecha);
            $reserva->setHorario($horitas);

            //Aqui cogemos todas las horas disponible, comparamos con las seleccionadas y eliminamos de la tabla cancha las horas ya reservadas
            $horarioscancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Horarioscanchas")->getHorario($id, $this->getRequest()->query->get('fechaInicio'));
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
            $instancia = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Horarioscanchas")->getInstancia($id, $this->getRequest()->query->get('fechaInicio'));
            $instancia[0]->setPeriodo(implode('&', $horariosArray));

            $em = $this->getDoctrine()->getManager();
            $em->persist($reserva);
            $em->persist($instancia[0]);
            $em->flush();

            return $this->redirect($this->generateUrl('moduloclientes_cliente_reservasClientes'));
        }

        return $this->render('moduloclientesclienteBundle:Reservas:elegirHora.html.twig', array('form' => $form->createView(), 'id' => $id));
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
                if ($horarioscancha[0]['periodo'] == null) {
                    $mensaje = 'No hay horas disponibles para la fecha seleccionada';
                    return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView(), 'id' => $id, 'mensaje' => $mensaje));
                }
            } else {
                return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView(), 'id' => $id, 'mensaje' => null));
            }
            return $this->elegirHoraAction($id, $fecha);
        }
        return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView(), 'id' => $id, 'mensaje' => null));
    }

}
