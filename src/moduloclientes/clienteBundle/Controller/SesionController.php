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
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $repositorySesiones->findAll();
        $resultado = NULL;
        foreach ($sesiones as $i => $sesion) {
            if (strpos($sesion->getIdsClientes(), strval($this->getUser()->getId())) === false) {
                $resultado[$i] = $sesion;
            }
        }
        if ($resultado != NULL) {
            return $this->render('moduloclientesclienteBundle:Sesiones:sesionesClientes.html.twig', array("sesiones" => $resultado));
        }
        return $this->render('moduloclientesclienteBundle:Sesiones:sesionesClientes.html.twig', array("sesiones" => NULL));
    }


    public function misSesionesAction() {
        $idsSesionesCliente = explode('&', $this->getUser()->getSesiones());
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesiones = $this->getArrayEntidades($repositorySesiones, $idsSesionesCliente);
        return $this->render('moduloclientesclienteBundle:Sesiones:misSesiones.html.twig', array("sesiones" => $sesiones));
    }

    public function pagoSesionAction() {
        $pago = new Pagos();
        $form = $this->createCreateForm($pago);
        return $this->render('moduloclientesclienteBundle:Sesiones:pagoSesion.html.twig', array('form' => $form->createView()));
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
        return $this->render('moduloclientesclienteBundle:Sesiones:pagoSesion.html.twig', array('form' => $form->createView()));
    }

    public function sesionClientesAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        return $this->render('moduloclientesclienteBundle:Sesiones:sesionClientes.html.twig', array("sesion" => $sesion));
    }

    public function miSesionClientesAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        return $this->render('moduloclientesclienteBundle:Sesiones:miSesionClientes.html.twig', array("sesion" => $sesion));
    }

    public function apuntarseAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $sumaCliente = $sesion->getNClientes();
        $sumaCliente++;
        $sesion->setNClientes($sumaCliente);
        if ($sumaCliente == $sesion->getLClientes()) {
            $sesion->setEstadoCliente("Completo");
        }

        if ($sesion->getIdsClientes() == null) {
            $sesion->setIdsClientes($this->getUser()->getId());
        } else {
            $sesion->setIdsClientes($sesion->getIdsClientes() . '&' . $this->getUser()->getId());
        }

        $usuario = $this->findEntity($this->getUser()->getId(), $em, 'CriveroPruebaBundle:Usuarios');
        if ($usuario->getSesiones() == null) {
            $usuario->setSesiones($sesion->getId());
        } else {
            $usuario->setSesiones($usuario->getSesiones() . '&' . $sesion->getId());
        }

        $em->persist($usuario);
        $em->persist($sesion);
        $em->flush();
        return $this->redirect($this->generateUrl('moduloclientes_cliente_misSesionesClientes'));
    }

    public function abandonarAction($id) {
        $em = $this->getDoctrine()->getManager();

        // Aquí eliminamos el cliente en la tabla sesiones
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $arrayClientes = explode('&', $sesion->getIdsClientes());
        for ($i = 0; $i <= count($arrayClientes); $i++) {
            if ($arrayClientes[$i] == $this->getUser()->getId()) {
                $pos = $i;
                break;
            }
        }
        unset($arrayClientes[$pos]);
        $arrayClientes1 = array_values($arrayClientes);
        $sesion->setIdsClientes(implode($arrayClientes1, '&'));

        // Aquí eliminamos la sesión en la tabla usuario
        $usuario = $this->findEntity($this->getUser()->getId(), $em, 'CriveroPruebaBundle:Usuarios');
        $arraySesiones = explode('&', $usuario->getSesiones());
        for ($i = 0; $i <= count($arraySesiones); $i++) {
            if ($arraySesiones[$i] == $id) {
                $posS = $i;
                break;
            }
        }
        unset($arraySesiones[$posS]);
        $arraySesiones1 = array_values($arraySesiones);
        $usuario->setSesiones(implode($arraySesiones1, '&'));

        // Aquí restamos la cantidad de clientes apuntados a la sesion y la eliminamos si el estado es cancelado
        $restaCliente = $sesion->getNClientes();
        $restaCliente--;
        $sesion->setNClientes($restaCliente);

        if ($restaCliente == 0 && $sesion->getEstado() == 'cancelada' && $sesion->getIdMonitor() == null) {
            $em->remove($sesion);
        } else {
            // Si no está cancelada, el estadoCliente volverá a disponible (esté completa o no)
            $sesion->setEstadoCliente('disponible');
            $em->persist($sesion);
        }
        
        $em->persist($usuario);
        $em->flush();
        return $this->redirect($this->generateUrl('moduloclientes_cliente_misSesionesClientes'));
    }

    private function findEntity($id, $em, $repository) {
        $entity = $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
    }

    private function getArrayEntidades($repository, $array) {
        for ($i = 0; $i < count($array); $i++) {
            $resultado[$i] = $repository->find($array[$i]);
        }
        return $resultado;
    }
}
