<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Reservas;
use Crivero\PruebaBundle\Form\ReservasType;
use Symfony\Component\HttpFoundation\Request;

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
        return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView(), 'id' => $id));
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
        $reserva = new Reservas();
        $fechaTime = $this->getRequest()->query->get('fechaInicio') . '-' . date('Y');
        $fecha = date_create(date('Y-m-d', strtotime($fechaTime)));
        $form = $this->createCreateFormHora($reserva, $id, $this->getRequest()->query->get('fechaInicio'));
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $cliente = $this->getUser();
            $idCliente = $cliente->getId();
            $reserva->setIdCliente($idCliente);
            $username = $cliente->getUsername();
            $reserva->setCliente($username);

            $idCancha = $form->get('idCancha')->getData();
            $reserva->setIdCancha($idCancha);
            $cancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->find($idCancha);
            $reserva->setCancha($cancha->getTipo());
            $reserva->setEstadoReserva("Reservado");
            //print_r($form->get('horario')->getData());
            $horitas = "";
            for ($i = 0; $i < count($form->get('horario')->getData()); $i++) {
                $horitas .= strval($form->get('horario')->getData()[$i]) . "&";
            }
            $reserva->setFechaInicio($fecha);
            $reserva->setHorario($horitas);

            $horarioscancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Horarioscanchas")->getHorario($idCancha, $this->getRequest()->query->get('fechaInicio'));
            $horarioscancha2 = implode("", $horarioscancha[0]);
            $horariosArray = explode('&', $horarioscancha2);
            $horitasArray = array_filter(explode('&', $horitas));
            print_r($horariosArray);
            print_r($horitasArray);
            $aux = $horariosArray;
            for ($i = 0; $i < count($aux); $i++) {
                foreach ($horitasArray as $valor) {
                    if ($aux[$i] == $valor) {
                        unset($horariosArray[$i]);
                        break;
                    }
                }
            }

            $horariosActualizados = implode('&', $horariosArray);
            $instancia = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Horarioscanchas")->getInstancia($idCancha, $this->getRequest()->query->get('fechaInicio'));
            $instancia[0]->setPeriodo($horariosActualizados);

            $em = $this->getDoctrine()->getManager();
            $em->persist($reserva);
            $em->persist($instancia[0]);
            $em->flush();

            return $this->redirect($this->generateUrl('moduloclientes_cliente_reservasClientes'));
        }

        return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView()));
    }

    public function mostrarHorasAction($id, Request $request) {
        $reserva = new Reservas();
        $form = $this->createCreateForm($reserva, $id);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $fecha = $form->get('fechaInicio')->getData();
            $fecha = date_format($fecha, "d-m");
            return $this->elegirHoraAction($id, $fecha);
        }

        return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView()));
    }

}
