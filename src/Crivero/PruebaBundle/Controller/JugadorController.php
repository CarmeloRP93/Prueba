<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class JugadorController extends Controller {
    
    public function jugadoresAction(Request $request) {
       $RepositorioJugadores = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
       $jugadores=$RepositorioJugadores->findAll();
       $paginator = $this->get('knp_paginator');
       $pagination = $paginator->paginate(
                $jugadores, $request->query->getInt('page', 1), 8);
       $RepositorioEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
       $equipos=$RepositorioEquipos->findAll();
       return $this->render('CriveroPruebaBundle:Competiciones:jugadores.html.twig', array("pagination"=>$pagination,"equipos"=>$equipos));
    }
    
    public function jugadorAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
        $jugador = $repository->find($id);
        $RepositorioEquipos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $equipos=$RepositorioEquipos->findAll();
        $RepositorioCompeticiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Competiciones");
        $competiciones=$RepositorioCompeticiones->findAll();
        return $this->render('CriveroPruebaBundle:Competiciones:jugador.html.twig', array("jugador"=>$jugador,"equipos"=>$equipos,"competiciones"=>$competiciones));
    }
    
    
}
