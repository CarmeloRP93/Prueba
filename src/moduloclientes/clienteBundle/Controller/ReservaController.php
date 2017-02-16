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
        $form = $this->createCreateForm($reserva);

        return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    private function createCreateForm(Reservas $entity) {
        $form = $this->createForm(new ReservasType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_crearReserva'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function crearReservaAction(Request $request) {
        $reserva = new Reservas();
        $form = $this->createCreateForm($reserva);
        $form->handleRequest($request);

        if ($form->isValid()) {
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

            $em = $this->getDoctrine()->getManager();
            $em->persist($reserva);
            $em->flush();

            if ($cliente->getReservas() == null) {
                $cliente->setReservas($reserva->getId());
            } else {
                $reservas = $cliente->getReservas() . "&" . $reserva->getId();
                $cliente->setReservas($reservas);
            }
            $em->persist($cliente);
            $em->flush();

            return $this->redirect($this->generateUrl('moduloclientes_cliente_canchasClientes'));
        }

        return $this->render('moduloclientesclienteBundle:Reservas:nuevaReserva.html.twig', array('form' => $form->createView()));
    }

}
