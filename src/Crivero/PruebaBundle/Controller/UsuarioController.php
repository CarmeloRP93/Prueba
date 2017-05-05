<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormError;
use Crivero\PruebaBundle\Entity\Usuarios;
use Crivero\PruebaBundle\Form\UsuariosType;
use Crivero\PruebaBundle\Entity\Notificaciones;

class UsuarioController extends Controller {

    public function clientesAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $usuarios = $repository->searchClientes($searchQuery) :
                        $usuarios = $repository->getClientes();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $usuarios, $request->query->getInt('page', 1), 5);


        $deleteFormAjax = $this->createCustomForm(':USER_ID', 'DELETE', 'crivero_prueba_eliminar');
        return $this->render('CriveroPruebaBundle:Usuarios:clientes.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "pagination" => $pagination,
                    "delete_form_ajax" => $deleteFormAjax->createView()));
    }

    public function clienteAction($id) {
        $repositoryReservas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas");
        $reservasCliente = $repositoryReservas->getReservasCliente($id)->getResult();

        $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $cliente = $repositoryUsuarios->find($id);
        $idsSesionesCliente = array_filter(explode('&', $cliente->getSesiones()));
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesionesCliente = $this->getArrayEntidades($repositorySesiones, $idsSesionesCliente);
        
        $recintos = array();
        foreach ($sesionesCliente as $sesion) {
            ($sesion->getConcepto() == 'cancha') ? $recintos[$sesion->getId()] = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->find($sesion->getCancha())->getTipo():
                                    $recintos[$sesion->getId()] = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas")->find($sesion->getAula())->getNombre();
        }

        $deleteForm = $this->createCustomForm($cliente->getId(), 'DELETE', 'crivero_prueba_eliminar');
        return $this->render('CriveroPruebaBundle:Usuarios:cliente.html.twig', array("cliente" => $cliente,
                    "reservas" => $reservasCliente, "sesiones" => $sesionesCliente,
                    'delete_form' => $deleteForm->createView(), 'recintos' => $recintos,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function monitoresAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $usuarios = $repository->searchMonitores($searchQuery) :
                        $usuarios = $repository->getMonitores();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $usuarios, $request->query->getInt('page', 1), 5);

        $deleteFormAjax = $this->createCustomForm(':USER_ID', 'DELETE', 'crivero_prueba_eliminar');
        return $this->render('CriveroPruebaBundle:Usuarios:monitores.html.twig', array("pagination" => $pagination,
                    "delete_form_ajax" => $deleteFormAjax->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function monitorAction($id) {
        $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $monitor = $repositoryUsuarios->find($id);
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesionesMonitor = $repositorySesiones->getSesionesMonitor($id);
        
        $recintos = array();
        foreach ($sesionesMonitor as $sesion) {
            ($sesion->getConcepto() == 'cancha') ? $recintos[$sesion->getId()] = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->find($sesion->getCancha())->getTipo():
                                    $recintos[$sesion->getId()] = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas")->find($sesion->getAula())->getNombre();
        }

        $deleteForm = $this->createCustomForm($monitor->getId(), 'DELETE', 'crivero_prueba_eliminar');
        return $this->render('CriveroPruebaBundle:Usuarios:monitor.html.twig', array(
                    "monitor" => $monitor, "sesiones" => $sesionesMonitor, 'recintos' => $recintos,
                    'delete_form' => $deleteForm->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function nuevoAction() {
        $usuario = new Usuarios();
        $form = $this->createCreateForm($usuario);

        return $this->render('CriveroPruebaBundle:Usuarios:nuevo.html.twig', array('form' => $form->createView(),
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function crearAction(Request $request) {
        $usuario = new Usuarios();
        $form = $this->createCreateForm($usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('password')->getData();
            if (!empty($password)) {
                $encoded = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                $usuario->setPassword($encoded);
                $usuario->setImagen("default-picture.png");
                $usuario->setActivo(true);
                $em = $this->getDoctrine()->getManager();
                $em->persist($usuario);
                $em->flush();
                $request->getSession()->getFlashBag()->add('mensaje', 'El usuario ha sido creado con éxito.');
                $tipo = $form->get('tipo')->getData();
                return ($tipo == 3) ? $this->redirect($this->generateUrl('crivero_prueba_monitores')) : $this->redirect($this->generateUrl('crivero_prueba_clientes'));
            } else {
                $form->get('password')->addError(new FormError('Rellene el campo.'));
            }
        }
        return $this->render('CriveroPruebaBundle:Usuarios:nuevo.html.twig', array('form' => $form->createView(),
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function createCreateForm(Usuarios $entity) {
        $form = $this->createForm(new UsuariosType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_crear'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function eliminarAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->findUser($id, $em);

        $form = $this->createCustomForm($usuario->getId(), 'DELETE', 'crivero_prueba_eliminar');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tipo = $usuario->getTipo();
            if ($request->isXmlHttpRequest()) {
                $res = $this->deleteUser($em, $usuario);

                return new Response(
                        json_encode(array('removed' => $res['removed'], 'message' => $res['message'])), 200, array('Content-Type' => 'application/json')
                );
            }

            $res = $this->deleteUser($em, $usuario);
            $request->getSession()->getFlashBag()->add('mensaje', $res['message']);
            return ($tipo == 3) ? $this->redirect($this->generateUrl('crivero_prueba_monitores')) : $this->redirect($this->generateUrl('crivero_prueba_clientes'));
        }
    }

    private function deleteUser($em, $usuario) {
        $em->remove($usuario);
        $em->flush();

        $message = 'El usuario ha sido eliminado con éxito.';
        $remove = 1;
        return array('removed' => $remove, 'message' => $message);
    }

    public function editarUsuarioAction($id) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->findUser($id, $em);

        $form = $this->createEditForm($usuario);
        return $this->render('CriveroPruebaBundle:Usuarios:editar.html.twig', array('usuario' => $usuario,
                    'form' => $form->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function actualizarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->findUser($id, $em);

        $form = $this->createEditForm($usuario);
        $originalImage = $usuario->getImagen();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('password')->getData();
            if (!empty($password)) {
                $encoded = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                $usuario->setPassword($encoded);
            } else {
                $recoverPass = $this->recoverPass($id);
                $usuario->setPassword($recoverPass[0]['password']);
            }

            if ($form->get('imagen')->getData() != null) {
                $file = $form->get('imagen')->getData();
                $file->move("C://xampp//htdocs//Prueba//web//images", $file->getClientOriginalName());
                $usuario->setImagen($file->getClientOriginalName());
            } else {
                $usuario->setImagen($originalImage);
            }
            $em->flush();

            if ($this->getUser()->getId() != $usuario->getId()) {
                $notificacion = new Notificaciones();
                $notificacion->setIdDestinatario($usuario->getId());
                $notificacion->setIdEntidad($usuario->getId());
                $notificacion->setMensaje("El administrador ha hecho cambios en tu perfil");
                $notificacion->setIdOrigen($this->getUser()->getId());
                $notificacion->setEstado("No leido");
                $notificacion->setConcepto("Usuario");
                $em->persist($notificacion);
                $em->flush();
            }

            $request->getSession()->getFlashBag()->add('mensaje', 'El usuario ha sido modificado correctamente.');
            if ($this->getUser()->getId() == $usuario->getId())
                return $this->redirect($this->generateUrl('crivero_prueba_perfil'));
            $tipo = $form->get('tipo')->getData();
            return ($tipo == 3) ? $this->redirect($this->generateUrl('crivero_prueba_monitor', array('id' => $id))) :
                    $this->redirect($this->generateUrl('crivero_prueba_cliente', array('id' => $id)));
        }
        return $this->render('CriveroPruebaBundle:Usuarios:editar.html.twig', array('usuario' => $usuario,
                    'form' => $form->createView(), 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function createEditForm(Usuarios $entity) {
        $form = $this->createForm(new UsuariosType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_actualizar', array('id' => $entity->getId())),
            'method' => 'PUT'));
        return $form;
    }

    private function recoverPass($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $currentPass = $repository->recuperarPass($id);
        return $currentPass;
    }

    public function pagosAction($id, Request $request) {
        $pagos = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Pagos")->getPagos($id);
        $usuario = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->find($id);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $pagos, $request->query->getInt('page', 1), 8);
        
        $entidades = array();
        foreach ($pagos->getResult() as $pago) {
            if ($pago -> getConcepto() == 'Cancha') {
                $nombre = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->find($pago->getIdConcepto())->getTipo();
            } else {
                $nombre = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones")->find($pago->getIdConcepto())->getNombre();
            }
            $entidades[$pago->getId()] = $nombre;
        }
        
        return $this->render('CriveroPruebaBundle:Usuarios:pagos.html.twig', array('pagination' => $pagination,
                    'usuario' => $usuario, 'entidades' => $entidades, 
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function findUser($id, $em) {
        $usuario = $em->getRepository('CriveroPruebaBundle:Usuarios')->find($id);
        if (!$usuario) {
            throw $this->createNotFoundException('Usuario no encontrado');
        }
        return $usuario;
    }

    private function createCustomForm($id, $method, $route) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl($route, array('id' => $id)))
                        ->setMethod($method)
                        ->getForm();
    }

    private function getArrayEntidades($repository, $array) {
        $resultado = array();
        for ($i = 0; $i < count($array); $i++) {
            $resultado[$i] = $repository->find($array[$i]);
        }
        return $resultado;
    }

    public function homeAction() {
        return $this->render('CriveroPruebaBundle:Usuarios:home.html.twig');
    }

    public function perfilAction() {
        $repository = $this->getDoctrine()->getRepository('CriveroPruebaBundle:Usuarios');
        $currentUser = $repository->find($this->getUser()->getId());
        $rolName = $this->getRolName($currentUser->getTipo());
        return $this->render('CriveroPruebaBundle:Usuarios:perfil.html.twig', array('usuario' => $currentUser,
                    'rol' => $rolName, 'notificacionesSinLeer' => $this->getNewNotification()));
    }

    private function getRolName($rol) {
        switch ($rol) {
            case 1:
                $res = 'administrador';
                break;
            case 2:
                $res = 'cliente';
                break;
            case 3:
                $res = 'monitor';
                break;
            case 4:
                $res = 'director';
                break;
        }
        return $res;
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

}
