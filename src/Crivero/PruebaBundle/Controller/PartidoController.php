<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Partidos;
use Crivero\PruebaBundle\Form\PartidosType;
use Symfony\Component\HttpFoundation\Request;

class PartidoController extends Controller {

    public function partidosAction() {
        $repositoryPartidos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Partidos");
        $partidos=$repositoryPartidos->findAll();
        $repositoryCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $repositoryEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $repositoryCanchas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");

        foreach ($partidos as $partido=>$valor){
            $competiciones[$partido] = $repositoryCompeticiones->find($valor->getIdCompeticion());   
            $equiposLocales[$partido] = $repositoryEquipos->find($valor->getIdEquipoLocal());
            $equiposVisitantes[$partido] = $repositoryEquipos->find($valor->getIdEquipoVisitante());
            $canchas[$partido] = $repositoryCanchas->find($valor->getIdCancha());
        }     
        return $this->render('CriveroPruebaBundle:Competiciones:partidos.html.twig', array("partidos"=>$partidos, "competiciones"=>$competiciones,
                             "equiposLocales"=>$equiposLocales,"equiposVisitantes"=>$equiposVisitantes, "canchas"=>$canchas));
    }

    public function partidoAction($id) {
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
        return $this->render('CriveroPruebaBundle:Competiciones:partido.html.twig', array("partido"=>$partido, "competicion"=>$competicion,
            "equipoLocal"=>$equipoLocal, "equipoVisitante"=>$equipoVisitante, "cancha"=>$cancha, "jugadores"=>$jugadores));
    }
    
    public function editarPartidoAction($id) {
        $em = $this->getDoctrine()->getManager();
        $partido = $em->getRepository('CriveroPruebaBundle:Partidos')->find($id);

        if (!$partido) {
            throw $this->createNotFoundException("No encontrado");
        }
        $form = $this->createEditForm($partido);
        return $this->render('CriveroPruebaBundle:Competiciones:editarPartido.html.twig', array('partido' => $partido, 'form' => $form->createView()));
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
            return $this->redirect($this->generateUrl('crivero_prueba_partidos'));
        }
        return $this->render('CriveroPruebaBundle:Competiciones:editarPartido.html.twig', array('form' => $form->createView()));
    }
    
    private function createEditForm(Partidos $entity) {
        $form = $this->createForm(new PartidosType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_partido_editar', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }
}