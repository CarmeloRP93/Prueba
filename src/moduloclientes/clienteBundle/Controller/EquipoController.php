<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Equipos;
use Crivero\PruebaBundle\Form\EquiposType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EquipoController extends Controller {

    public function equiposClientesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $idCliente = $this->getUser()->getId();
        $equipos = $repository->findAllMisEquipos($idCliente);
        return $this->render('moduloclientesclienteBundle:Competiciones:equiposClientes.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),"equipos" => $equipos));
    }

    public function equipoClientesAction($id) {
        $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $equipo = $repositoryEquipos->find($id);
        $repositoryJugadores = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
        $jugadores = $repositoryJugadores->findAll();
        $deleteForm = $this->createCustomForm($equipo->getId(),'DELETE','moduloclientes_cliente_equipo_eliminar');
        $deleteFormAjax = $this->createCustomForm(':JUGADOR_ID','DELETE','moduloclientes_cliente_jugador_eliminar');
        return $this->render('moduloclientesclienteBundle:Competiciones:equipoClientes.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            "equipo" => $equipo, "jugadores"=>$jugadores,"delete_form_ajax"=>$deleteFormAjax->createView() ,"delete_form"=>$deleteForm->createView()));
    }
     
    public function eliminarJugadorAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $jugador = $em->getRepository('CriveroPruebaBundle:Jugadores')->find($id);
        if(!$jugador){
            $mensaje= 'Jugador no encontrado';
            throw $this->createNotFoundException($mensaje);
        }
//        $form = $this->createDeleteForm($jugador);
        $form = $this->createCustomForm($jugador->getId(),'DELETE','moduloclientes_cliente_jugador_eliminar');
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            if ($request->isXmlHttpRequest()) {
                $res = $this->deleteJugador($em, $jugador);
                return new Response(
                        json_encode(array('removed' => $res['removed'], 'message' => $res['message'])), 200, array('Content-Type' => 'application/json')
                );
            }
            $res=$this->deleteJugador($em, $jugador);
            return $this->redirect($this->generateUrl('moduloclientes_cliente_equiposClientes'));
        }
    }
    
    private function deleteJugador($em, $jugador) {
        $em->remove($jugador);
        $em->flush();
        $message = 'El jugador ha sido eliminado con éxito.';
        $remove = 1;
        return array('removed' => $remove, 'message' => $message);
    }
    
    public function eliminarEquipoAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $equipo = $em->getRepository('CriveroPruebaBundle:Equipos')->find($id);
        if(!$equipo){
            $mensaje= 'Equipo no encontrado';
            throw $this->createNotFoundException($mensaje);
        }
        $form =$this->createCustomForm($equipo->getId(),'DELETE','moduloclientes_cliente_equipo_eliminar');
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $em->remove($equipo);
            $em->flush();
            return $this->redirect($this->generateUrl('moduloclientes_cliente_equiposClientes'));
        }
    }
   
    public function nuevoAction($id) {
        $equipo = new Equipos();
        $form = $this->createCreateForm($equipo);
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevoEquipoCliente.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            'form' => $form->createView(),'id'=>$id));
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
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevoEquipoCliente.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            'form' => $form->createView()));
    }
    
    public function editarEquipoAction($id) {
        $em = $this->getDoctrine()->getManager();
        $equipo = $em->getRepository('CriveroPruebaBundle:Equipos')->find($id);

        if (!$equipo) {
            throw $this->createNotFoundException("No encontrado");
        }
        $form = $this->createEditForm($equipo);
        return $this->render('moduloclientesclienteBundle:Competiciones:editarEquipoCliente.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            'equipo' => $equipo, 'form' => $form->createView()));
    }

    public function editarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $equipo = $em->getRepository('CriveroPruebaBundle:Equipos')->find($id);
        if (!$equipo) {
            throw $this->createNotFoundException("No encontrado");
        }
        $form = $this->createEditForm($equipo);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($equipo);
            $em->flush();
            return $this->redirect($this->generateUrl('moduloclientes_cliente_equiposClientes'));
        }
        return $this->render('moduloclientesclienteBundle:Competiciones:editarEquipoCliente.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            'form' => $form->createView()));
    }
    
    private function createEditForm(Equipos $entity) {
        $form = $this->createForm(new EquiposType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_equipo_editar', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
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
    
    private function createCustomForm($id, $method, $route) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl($route, array('id' => $id)))
                        ->setMethod($method)
                        ->getForm();
    }
}
