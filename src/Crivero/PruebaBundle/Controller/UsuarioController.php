<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormError;
use Crivero\PruebaBundle\Entity\Usuarios;
use Crivero\PruebaBundle\Form\UsuariosType;
use Crivero\PruebaBundle\Entity\Comentarios;
use Crivero\PruebaBundle\Form\ComentariosType;

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
        return $this->render('CriveroPruebaBundle:Usuarios:clientes.html.twig', array("pagination" => $pagination,
                    "delete_form_ajax" => $deleteFormAjax->createView()));
    }

    public function clienteAction($id) {
        $repositoryReservas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas");
        $reservasCliente = $repositoryReservas->getReservasCliente($id);

        $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $cliente = $repositoryUsuarios->find($id);
        $idsSesionesCliente = explode('&', $cliente->getSesiones());
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesionesCliente = $this->getArrayEntidades($repositorySesiones, $idsSesionesCliente);

        $deleteForm = $this->createCustomForm($cliente->getId(), 'DELETE', 'crivero_prueba_eliminar');
        return $this->render('CriveroPruebaBundle:Usuarios:cliente.html.twig', array("cliente" => $cliente,
                    "reservas" => $reservasCliente, "sesiones" => $sesionesCliente,
                    'delete_form' => $deleteForm->createView()));
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
                    "delete_form_ajax" => $deleteFormAjax->createView()));
    }

    public function monitorAction($id) {
        $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $monitor = $repositoryUsuarios->find($id);
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesionesMonitor = $repositorySesiones->getSesionesMonitor($id);

        $deleteForm = $this->createCustomForm($monitor->getId(), 'DELETE', 'crivero_prueba_eliminar');
        return $this->render('CriveroPruebaBundle:Usuarios:monitor.html.twig', array("monitor" => $monitor, "sesiones" => $sesionesMonitor,
                    'delete_form' => $deleteForm->createView()));
    }

    public function nuevoAction() {
        $usuario = new Usuarios();
        $form = $this->createCreateForm($usuario);

        return $this->render('CriveroPruebaBundle:Usuarios:nuevo.html.twig', array('form' => $form->createView()));
    }

    public function crearAction(Request $request) {
        $usuario = new Usuarios();
        $form = $this->createCreateForm($usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
//        $fecha = $form->get('fNacimiento')->getData();
            $password = $form->get('password')->getData();
            if (!empty($password)) {
                $encoded = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                $usuario->setPassword($encoded);
                $usuario->setImagen("no-image-found.png");
                $em = $this->getDoctrine()->getManager();
                $em->persist($usuario);
                $em->flush();

                $request->getSession()->getFlashBag()->add('mensaje', 'El usuario ha sido creado con éxito.');
                $tipo = $form->get('tipo')->getData();
                return ($tipo == 3) ? $this->redirect($this->generateUrl('crivero_prueba_monitores')) : $this->redirect($this->generateUrl('crivero_prueba_clientes'));
            } else {
                $form->get('password')->addError(new FormError('Rellene el campo, gracias'));
            }
        }
        return $this->render('CriveroPruebaBundle:Usuarios:nuevo.html.twig', array('form' => $form->createView()));
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
                    'form' => $form->createView()));
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
            $request->getSession()->getFlashBag()->add('mensaje', 'El usuario ha sido modificado correctamente.');
            if ($this->getUser()->getId() == $usuario->getId()) return $this->redirect($this->generateUrl('crivero_prueba_perfil'));  
            $tipo = $form->get('tipo')->getData();
            return ($tipo == 3) ? $this->redirect($this->generateUrl('crivero_prueba_monitor', array('id' => $id))):
                                  $this->redirect($this->generateUrl('crivero_prueba_cliente', array('id' => $id)));
        }
        return $this->render('CriveroPruebaBundle:Usuarios:editar.html.twig', array('usuario' => $usuario, 'form' => $form->createView()));
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
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Pagos");
        $pagos = $repository->getPagos($id);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $pagos, $request->query->getInt('page', 1), 7);
        return $this->render('CriveroPruebaBundle:Usuarios:pagos.html.twig', array('pagination' => $pagination));
    }

    public function enviarMensajeAction() {
        $comentario = new Comentarios();
        $referer = $this->getRequest()->headers->get('referer');
        $destino = null;
        if ($referer) {
            //print_r(explode('/', $referer));
            $url = explode('/', $referer);
            if ($url[6] == 'cliente' || $url[6] == 'monitor') {
                $id = $url[7]; 
                $destino = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->find($id)->getEmail();
            }
        }
        $form = $this->createMessageForm($comentario);
        return $this->render('CriveroPruebaBundle:Usuarios:nuevoMensaje.html.twig', array('form' => $form->createView(),
                                                                                          'destino' => $destino));
    }

    private function createMessageForm(Comentarios $entity) {
        $form = $this->createForm(new ComentariosType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_enviando'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function enviandoAction(Request $request) {
        $comentario = new Comentarios();
        $form = $this->createMessageForm($comentario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repositoryUsuarios = $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
            $dest = $repositoryUsuarios->getDestinatario($form->get('destinatario')->getData());
            if ($dest != null) {
                $comentario->setIdDestinatario($dest[0]->getId());
                $em = $this->getDoctrine()->getManager();
                $em->persist($comentario);
                $em->flush();
                return $this->redirect($this->generateUrl('crivero_prueba_clientes'));
            } else {
                $form->get('destinatario')->addError(new FormError('Este destinatario no existe.'));
            }
        }
        $destino = $form->get('destinatario')->getData();
        return $this->render('CriveroPruebaBundle:Usuarios:nuevoMensaje.html.twig', array('form' => $form->createView(), 
                                                                                           'destino' => $destino));
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
                                                                                    'rol' => $rolName));
    }
    
    private function getRolName($rol) {
        switch ($rol){
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
}
