<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Partidos;
use Crivero\PruebaBundle\Form\PartidosType;
use Symfony\Component\HttpFoundation\Request;

class PartidoController extends Controller {

    public function partidosAction(Request $request) {
        $repositoryPartidos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Partidos");
        $partidos=$repositoryPartidos->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $partidos, $request->query->getInt('page', 1), 5);
        $repositoryCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $repositoryCanchas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $competiciones=array();
        $equiposLocales=array();
        $equiposVisitantes=array();
        $canchas=array();
        foreach ($partidos as $clave=>$valor){
            $competiciones[$valor->getIdCompeticion()] = $repositoryCompeticiones->find($valor->getIdCompeticion());   
            $equiposLocales[$valor->getIdEquipoLocal()] = $repositoryEquipos->find($valor->getIdEquipoLocal());
            $equiposVisitantes[$valor->getIdEquipoVisitante()] = $repositoryEquipos->find($valor->getIdEquipoVisitante());
            $canchas[$valor->getIdCancha()] = $repositoryCanchas->find($valor->getIdCancha());
        }
        return $this->render('CriveroPruebaBundle:Competiciones:partidos.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),"partidos"=>$pagination, "competiciones"=>$competiciones,
                             "equiposLocales"=>$equiposLocales,"equiposVisitantes"=>$equiposVisitantes, "canchas"=>$canchas));
    }

    public function partidoAction($id) {
        $this->changeStateNotification($id);
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
        return $this->render('CriveroPruebaBundle:Competiciones:partido.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),"partido"=>$partido, "competicion"=>$competicion,
            "equipoLocal"=>$equipoLocal, "equipoVisitante"=>$equipoVisitante, "cancha"=>$cancha, "jugadores"=>$jugadores));
    }
    
    public function nuevoAction($id) {
        $partido = new Partidos();
        $form = $this->createCreateForm($partido,$id);
        return $this->render('CriveroPruebaBundle:Competiciones:nuevoPartido.html.twig',
            array("notificacionesSinLeer"=>$this->getNewNotification(),
            'form' => $form->createView(),'id'=>$id));
    }
    
    private function createCreateForm(Partidos $entity, $id) {
        $competiciones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones")->findAll();
        $competicionFiltro = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones")->find($id);
        $canchas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->findAll();
        $equipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos")->findAll();
        $form = $this->createForm(new PartidosType($competiciones,$equipos,$canchas,$competicionFiltro), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_partido_crear',array('id'=>$id)),
            'method' => 'POST'
        ));
        return $form;
    }
    
    public function crearAction(Request $request,$id) {
        $partido = new Partidos();
        $form = $this->createCreateForm($partido,$id);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $partido->setResultado("Pendiente");
            $em->persist($partido);
            $em->flush();
            return $this->redirect($this->generateUrl('crivero_prueba_partidos'));
        }
        return $this->render('CriveroPruebaBundle:Competiciones:nuevoPartido.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            'form' => $form->createView(), 'id'=>$id));
    }
    
    public function editarPartidoAction($id) {
        $em = $this->getDoctrine()->getManager();
        $partido = $em->getRepository('CriveroPruebaBundle:Partidos')->find($id);

        if (!$partido) {
            throw $this->createNotFoundException("No encontrado");
        }
        $form = $this->createEditForm($partido);
        return $this->render('CriveroPruebaBundle:Competiciones:editarPartido.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            'partido' => $partido, 'form' => $form->createView()));
    }

    public function editarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $partido = $em->getRepository('CriveroPruebaBundle:Partidos')->find($id);
        if (!$partido) {
            throw $this->createNotFoundException("No encontrado");
        }
        $form = $this->createEditForm($partido);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($partido);
            $em->flush();
            return $this->redirect($this->generateUrl('crivero_prueba_partido',array('id'=>$partido->getId())));
        }
        return $this->render('CriveroPruebaBundle:Competiciones:editarPartido.html.twig', array("notificacionesSinLeer"=>$this->getNewNotification(),
            'form' => $form->createView()));
    }
    
    private function createEditForm(Partidos $entity) {
        $competiciones=$this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones")->findAll();
        $competicionFiltro = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones")->find($entity->getIdCompeticion());
        $canchas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->findAll();
        $equipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos")->findAll();
        $form = $this->createForm(new PartidosType($competiciones,$equipos,$canchas,$competicionFiltro), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_partido_editar', array('id' => $entity->getId())),
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
    
    private function changeStateNotification($idEntidad) {
        $repositoryN = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Notificaciones");
        if ($repositoryN->getNotificacionEntidad($idEntidad, $this->getUser()->getId())) {
            $repositoryN->getNotificacionEntidad($idEntidad, $this->getUser()->getId())[0]->setEstado("Leido");
            $this->getDoctrine()->getManager()->flush();
        }
    }
}