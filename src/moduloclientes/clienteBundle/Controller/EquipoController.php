<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EquipoController extends Controller {

    public function equiposClientesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $equipos = $repository->findAll();
        return $this->render('moduloclientesclienteBundle:Default:equiposClientes.html.twig', array("equipos" => $equipos));
    }

    public function equipoClientesAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Equipos");
        $equipo = $repository->find($id);
        $repositoryJugadores = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Jugadores");
        $jugadores = $repositoryJugadores->findAll();
        return $this->render('moduloclientesclienteBundle:Default:equipoClientes.html.twig', array("equipo" => $equipo, "jugadores"=>$jugadores));
    }
}
