<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Jugadores;
use Crivero\PruebaBundle\Form\JugadoresType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class JugadorController extends Controller {
    
      public function nuevoAction($id) {
        $jugador = new Jugadores();
        $form = $this->createCreateForm($jugador);
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevoJugadorCliente.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            'form' => $form->createView(),'id' => $id));
    }
    
    private function createCreateForm(Jugadores $entity) {
        $clientes = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->getClientesJugadores();
        $form = $this->createForm(new JugadoresType($clientes), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_jugador_crear'),
            'method' => 'POST'
        ));
        return $form;
    }
    
    public function crearAction(Request $request) {
        $jugador = new Jugadores();
        $form = $this->createCreateForm($jugador);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $jugador->setIdEquipo($form->get('idEquipo')->getData());
            $jugador->setIncidencia('Ninguna');
            if(($form->get('username')->getData() != 'No selecionado')){
                $cliente =$this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->getNombreCliente($form->get('username')->getData());
                $jugador->setNombre($cliente[0]['nombre']);
                $em->persist($jugador);
                $em->flush();
            }else{
                $jugador->setUsername(null);
                $em->persist($jugador);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('moduloclientes_cliente_equipoClientes', array('id'=>$form->get('idEquipo')->getData())));
        }
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevoJugadorCliente.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            'form' => $form->createView()));
    }
    private function createCustomForm($id, $method, $route) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl($route, array('id' => $id)))
                        ->setMethod($method)
                        ->getForm();
    }
    
    public function eliminarAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $jugador = $em->getRepository('CriveroPruebaBundle:Jugadores')->find($id);
        if(!$jugador){
            $mensaje= 'Jugador no encontrado';
            throw $this->createNotFoundException($mensaje);
        }
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
    
//    Los siguientes métodos jugadoresAction y jugadorAction estan cogidos de Crivero
//    por ahora no son necesarios aquí
//    
//    public function jugadoresAction() {
//       $RepositorioJugadores = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
//       $jugadores=$RepositorioJugadores->findAll();
//       $RepositorioEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
//       $equipos=$RepositorioEquipos->findAll();
//       return $this->render('CriveroPruebaBundle:Competiciones:jugadores.html.twig', array("jugadores"=>$jugadores,"equipos"=>$equipos));
//    }
//    
//    public function jugadorAction($id) {
//        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
//        $jugador = $repository->find($id);
//        $RepositorioEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
//        $equipos=$RepositorioEquipos->findAll();
//        $RepositorioCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
//        $competiciones=$RepositorioCompeticiones->findAll();
//        return $this->render('CriveroPruebaBundle:Competiciones:jugador.html.twig', array("jugador"=>$jugador,"equipos"=>$equipos,"competiciones"=>$competiciones));
//    } 
}