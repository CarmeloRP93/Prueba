<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Reservas;
use Crivero\PruebaBundle\Entity\Usuarios;
use Crivero\PruebaBundle\Entity\Canchas;

class ReservaController extends Controller {

//    var $reservas = array(
//            array("matricula"=>1, "nombre"=>"Carmelo Rivero"),
//            array("matricula"=>2, "nombre"=>"Joshua Almeida"),
//            array("matricula"=>3, "nombre"=>"Eduardo Mendoza"),
//            array("matricula"=>4, "nombre"=>"Pablo Exposito"),
//            array("matricula"=>5, "nombre"=>"Pedro Ramirez"),
//            array("matricula"=>6, "nombre"=>"Suleima Sanchez"),
//            array("matricula"=>7, "nombre"=>"Claudia Lopez"),
//            array("matricula"=>8, "nombre"=>"Andrea Quintana"),
//            array("matricula"=>9, "nombre"=>"Daniel Suarez"),
//            array("matricula"=>10, "nombre"=>"Victoria Gonzalez")
//        );
////    
//   public function reservasClientesAction()
//    {
//       return $this->render('moduloclientesclienteBundle:Default:reservasClientes.html.twig', array("reservas"=>$this->reservas));
//    }
//    public function reservaClientesAction($matricula)
//    {
//       return $this->render('moduloclientesclienteBundle:Default:reservaClientes.html.twig', array("reserva"=>$this->reservas[$matricula-1]));
//    }

    public function reservasClientesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas");
        $reservas = $repository->findAll();
        return $this->render('moduloclientesclienteBundle:Default:reservasClientes.html.twig', array("reservas" => $reservas));
    }

    public function reservaClientesAction($id) {
        $repositoryReserva = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas");
        $reserva = $repositoryReserva->find($id);
        $canchaId = $reserva -> getIdCancha();
        
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $cancha = $repository->find($canchaId);
        
//        $em = $this->getDoctrine()->getManager();
//        $query2 = $em->createQuery('SELECT usuarios, reservas
//            FROM CriveroPruebaBundle:Usuarios usuarios, CriveroPruebaBundle:Reservas reservas
//            WHERE usuarios.id = reservas.id');
//
//        $usuario = $query2->getResult();
//        
//        $em2 = $this->getDoctrine()->getManager();
//        $query3 = $em2->createQuery('SELECT canchas, reservas
//            FROM CriveroPruebaBundle:Canchas canchas, CriveroPruebaBundle:Reservas reservas
//            WHERE canchas.id = reservas.id');
//
//        $cancha = $query3->getResult();
        
        return $this->render('moduloclientesclienteBundle:Default:reservaClientes.html.twig', array("reserva" => $reserva, "cancha" => $cancha));
    }

}
