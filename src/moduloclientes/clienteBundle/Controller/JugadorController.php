<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Jugadores;
use Crivero\PruebaBundle\Form\JugadoresType;
use Symfony\Component\HttpFoundation\Request;

class JugadorController extends Controller {
    
      public function nuevoAction($id) {
        $jugador = new Jugadores();
        $form = $this->createCreateForm($jugador);
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevoJugadorCliente.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            'form' => $form->createView(),'id' => $id));
    }
    
    private function createCreateForm(Jugadores $entity) {
        $form = $this->createForm(new JugadoresType(), $entity, array(
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
            $em->persist($jugador);
            $em->flush();
            return $this->redirect($this->generateUrl('moduloclientes_cliente_equiposClientes'));
        }
        return $this->render('moduloclientesclienteBundle:Competiciones:nuevoJugadorCliente.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            'form' => $form->createView()));
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