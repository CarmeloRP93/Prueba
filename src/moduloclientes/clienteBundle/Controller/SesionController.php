<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;
use Crivero\PruebaBundle\Entity\Pagos;
use Crivero\PruebaBundle\Form\PagosType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormError;

class SesionController extends Controller {

    public function sesionesClientesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $repository->findAll();
        return $this->render('moduloclientesclienteBundle:Default:sesionesClientes.html.twig', array("sesiones" => $sesiones));
    }

    public function pagoSesionAction() {
        $pago = new Pagos();
        $form = $this->createCreateForm($pago);
        return $this->render('moduloclientesclienteBundle:Default:pagoSesion.html.twig', array('form' => $form->createView()));
    }

    private function createCreateForm(Pagos $entity) {
        $form = $this->createForm(new PagosType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_pagar'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function pagarAction(Request $request) {
        $pago = new Pagos();
        $form = $this->createCreateForm($pago);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $cliente = $this->getUser();
            $idCliente = $cliente->getId();
            $pago->setIdCliente($idCliente);

            $em = $this->getDoctrine()->getManager();
            $em->persist($pago);
            $em->flush();        
            $request->getSession()->getFlashBag()->add('mensaje', 'Pago realizado con éxito.');
            return $this->render('CriveroPruebaBundle:Usuarios:home.html.twig');
        }
        return $this->render('moduloclientesclienteBundle:Default:pagoSesion.html.twig', array('form' => $form->createView()));
    }

    public function sesionClientesAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        return $this->render('moduloclientesclienteBundle:Default:sesionClientes.html.twig', array("sesion" => $sesion));
    }

}
