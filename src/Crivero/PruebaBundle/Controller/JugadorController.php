<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JugadorController extends Controller
{     
    public function jugadoresAction()
    {
       $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
       $jugadores=$repository->findAll();
       return $this->render('CriveroPruebaBundle:Default:jugadores.html.twig', array("jugadores"=>$jugadores));
    }
    
    public function jugadorAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
        $jugador = $repository->find($id);
        return $this->render('CriveroPruebaBundle:Default:jugador.html.twig', array("jugador"=>$jugador));
    } 
}
