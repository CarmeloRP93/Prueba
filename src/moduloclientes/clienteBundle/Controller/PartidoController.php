<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Notificaciones;
use Crivero\PruebaBundle\Form\NotificacionesType;
use Symfony\Component\HttpFoundation\Request;

class PartidoController extends Controller {

    public function partidosClientesAction($id, Request $request) {
        $repositoryPartidos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Partidos");
        $partidos=$repositoryPartidos->getPartidosPorCompeticion($id);
        $repositoryCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $repositoryCanchas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $partidos, $request->query->getInt('page', 1), 4);

        foreach ($partidos as $partido=>$valor){
            $competiciones[$partido] = $repositoryCompeticiones->find($valor->getIdCompeticion());   
            $equiposLocales[$partido] = $repositoryEquipos->find($valor->getIdEquipoLocal());
            $equiposVisitantes[$partido] = $repositoryEquipos->find($valor->getIdEquipoVisitante());
            $canchas[$partido] = $repositoryCanchas->find($valor->getIdCancha());
        }     
        return $this->render('moduloclientesclienteBundle:Competiciones:partidosClientes.html.twig',
                array("notificacionesSinLeer"=>$this->getNewNotification(),
                    "partidos"=>$pagination, "competiciones"=>$competiciones,
                    "equiposLocales"=>$equiposLocales,"equiposVisitantes"=>$equiposVisitantes,
                    "canchas"=>$canchas));
    }

    public function partidoClientesAction($id) {
        $repositoryPartido = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Partidos");
        $repositoryCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $repositoryCanchas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $repositoryJugadores =$this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
        $partido=$repositoryPartido->find($id);
        $competicion=$repositoryCompeticiones->find($partido->getIdCompeticion());
        $equipoLocal=$repositoryEquipos->find($partido->getIdEquipoLocal());
        $equipoVisitante=$repositoryEquipos->find($partido->getIdEquipoVisitante());
        $cancha=$repositoryCanchas->find($partido->getIdCancha());
        $jugadores =$repositoryJugadores->findAll();
        return $this->render('moduloclientesclienteBundle:Competiciones:partidoClientes.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            "partido"=>$partido, "competicion"=>$competicion,
            "equipoLocal"=>$equipoLocal, "equipoVisitante"=>$equipoVisitante,
            "cancha"=>$cancha, "jugadores"=>$jugadores));
    }
    
    public function nuevaNotificacionAction($id){
        $notificacion = new Notificaciones();
        $form = $this->createCreateForm($notificacion,$id);
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevaNotificacionCliente.html.twig',
            array("notificacionesSinLeer"=>$this->getNewNotification(),
            'form' => $form->createView(),'id'=>$id));
    }

    private function createCreateForm(Notificaciones $entity, $id) {
        $form = $this->createForm(new NotificacionesType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_notificacion_crear', array('id'=>$id)),
            'method' => 'POST'
        ));
        return $form;
    }
    
    public function crearNotificacionAction(Request $request,$id) {
        $notificacion = new Notificaciones();
        $form = $this->createCreateForm($notificacion,$id);
        $form->handleRequest($request);
        if ($form->isValid()&& $form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $notificacion->setIdEntidad($form->get('idEntidad')->getData());
            $notificacion->setConcepto('Partido');
            $notificacion->setIdDestinatario(17);
            $notificacion->setEstado('No leido');
            $notificacion->setIdOrigen($this->getUser()->getId());
            $em->persist($notificacion);
            $em->flush();
            return $this->redirect($this->generateUrl('moduloclientes_cliente_competicionesClientes'));
        }
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevaNotificacionCliente.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            'form' => $form->createView(),'id'=>$id));
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