<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Reservas;
use Crivero\PruebaBundle\Entity\Usuarios;
use Crivero\PruebaBundle\Entity\Canchas;
use Crivero\PruebaBundle\Form\ReservasType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ReservaController extends Controller {

    public function reservasClientesAction() {
        $em = $this->getDoctrine()->getManager();
        $usuarioId = $this->getUser()->getId();
        $dql = 'SELECT r FROM CriveroPruebaBundle:Reservas r WHERE r.idCliente = :id';
        $reservas = $em->createQuery($dql)->setParameter('id', $usuarioId)->getResult();
        return $this->render('moduloclientesclienteBundle:Default:reservasClientes.html.twig', array("reservas" => $reservas));
    }

    public function reservaClientesAction($id) {
        $repositoryReserva = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas");
        $reserva = $repositoryReserva->find($id);
        $canchaId = $reserva -> getIdCancha();
        
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $cancha = $repository->find($canchaId);
        
        return $this->render('moduloclientesclienteBundle:Default:reservaClientes.html.twig', array("reserva" => $reserva, "cancha" => $cancha));
    }
    
     public function nuevaReservaAction($id) {
        $reserva = new Reservas();
        $form = $this->createCreateForm($reserva);

        return $this->render('moduloclientesclienteBundle:Default:nuevaReserva.html.twig', array('form' => $form->createView(), 'id' => $id));
    }
    
     private function createCreateForm(Reservas $entity){
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
            $idCliente = $this->getUser()->getId();
            $reserva->setIdCliente($idCliente);
            $cliente = $this->getUser()->getUsername();
            $reserva->setCliente($cliente);
            
            $idCancha = $form->get('idCancha')->getData();
            $reserva->setIdCancha($idCancha);
            $cancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->find($idCancha);
            $reserva->setCancha($cancha->getTipo());
            $reserva->setEstadoReserva("Reservado");
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($reserva);
            $em->flush();
            
            return $this->redirect($this->generateUrl('moduloclientes_cliente_canchasClientes'));
        }
        
        return $this->render('moduloclientesclienteBundle:Default:nuevaReserva.html.twig', array('form' => $form->createView()));
    }

}