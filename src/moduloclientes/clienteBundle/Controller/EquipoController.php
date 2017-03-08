<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Equipos;
use Crivero\PruebaBundle\Form\EquiposType;
use Symfony\Component\HttpFoundation\Request;

class EquipoController extends Controller {

    public function equiposClientesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $idCliente = $this->getUser()->getId();
        $equipos = $repository->findAllMisEquipos($idCliente);
        return $this->render('moduloclientesclienteBundle:Competiciones:equiposClientes.html.twig', array("equipos" => $equipos));
    }

    public function equipoClientesAction($id) {
        $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $equipo = $repositoryEquipos->find($id);
        $repositoryJugadores = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
        $jugadores = $repositoryJugadores->findAll();
        return $this->render('moduloclientesclienteBundle:Competiciones:equipoClientes.html.twig', array("equipo" => $equipo, "jugadores"=>$jugadores));
    }
    
    public function nuevoAction($id) {
        $equipo = new Equipos();
        $form = $this->createCreateForm($equipo);
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevoEquipoCliente.html.twig', array('form' => $form->createView(),'id'=>$id));
    }
    
    private function createCreateForm(Equipos $entity) {
        $form = $this->createForm(new EquiposType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_equipo_crear'),
            'method' => 'POST'
        ));
        return $form;
    }
    
    public function crearAction(Request $request) {
        $equipo = new Equipos();
        $form = $this->createCreateForm($equipo);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $equipo->setIdCliente($this->getUser()->getId());
            $equipo->setClasificacion(0);
            $equipo->setPuntuacion(0);
            $equipo->setIdCompeticion($form->get('idCompeticion')->getData());
//            $equipo->setDeporte($form->get('deporte')->getData());
            $equipo->setVictorias(0);
            $equipo->setEmpates(0);
            $equipo->setDerrotas(0);
            $em->persist($equipo);
            $em->flush();
            return $this->redirect($this->generateUrl('moduloclientes_cliente_equiposClientes'));
        }
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevaEquipoCliente.html.twig', array('form' => $form->createView()));
    }
}
