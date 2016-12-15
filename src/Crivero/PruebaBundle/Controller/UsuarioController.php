<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormError;
use Crivero\PruebaBundle\Entity\Usuarios;
use Crivero\PruebaBundle\Form\UsuariosType;

class UsuarioController extends Controller {
    
    public function clientesAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT u FROM CriveroPruebaBundle:Usuarios u WHERE u.tipo=2";
        $usuarios = $em->createQuery($dql);
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $usuarios, $request->query->getInt('page', 1),
                5);
        
       $deleteFormAjax = $this->createCustomForm(':USER_ID', 'DELETE', 'crivero_prueba_eliminar');
        
       return $this->render('CriveroPruebaBundle:Default:clientes.html.twig', array("pagination"=>$pagination, 
           "delete_form_ajax"=>$deleteFormAjax->createView()));
    }
    
    public function clienteAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $cliente=$repository->find($id);
        
        $deleteForm = $this->createCustomForm($cliente->getId(), 'DELETE', 'crivero_prueba_eliminar');
        return $this->render('CriveroPruebaBundle:Default:cliente.html.twig', array("cliente"=>$cliente, 'delete_form'=>
            $deleteForm->createView()));
    }
    
     public function monitoresAction(Request $request) {
         $em = $this->getDoctrine()->getManager();
         $dql = "SELECT u FROM CriveroPruebaBundle:Usuarios u WHERE u.tipo=3";
         $usuarios = $em->createQuery($dql);
        
         $paginator = $this->get('knp_paginator');
         $pagination = $paginator->paginate(
                $usuarios, $request->query->getInt('page', 1),
                5);
         
         $deleteFormAjax = $this->createCustomForm(':USER_ID', 'DELETE', 'crivero_prueba_eliminar');
         return $this->render('CriveroPruebaBundle:Default:monitores.html.twig', array("pagination"=>$pagination,
              "delete_form_ajax"=>$deleteFormAjax->createView()));
    }
    
    public function monitorAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $monitor=$repository->find($id);
        
        $deleteForm = $this->createCustomForm($monitor->getId(), 'DELETE', 'crivero_prueba_eliminar');
       return $this->render('CriveroPruebaBundle:Default:monitor.html.twig', array("monitor"=>$monitor,  'delete_form'=>
            $deleteForm->createView()));
    }
    
    public function nuevoAction() {
      $usuario = new Usuarios();
      $form = $this->createCreateForm($usuario);
      
      return $this->render('CriveroPruebaBundle:Default:nuevo.html.twig', array('form' => $form->createView()));
    }
    
    public function crearAction(Request $request) {
      $usuario = new Usuarios();
      $form = $this->createCreateForm($usuario);
      $form->handleRequest($request);
      
      if($form->isValid()) {
        $password = $form->get('password')->getData();
        if (!empty($password)) {
            $encoded= password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
            $usuario->setPassword($encoded);
        
            $em=$this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
            
            $request->getSession()->getFlashBag()->add('mensaje', 'El usuario ha sido creado con éxito.');
            $tipo = $form->get('tipo')->getData();
            return ($tipo == 3) ? $this->redirect($this->generateUrl('crivero_prueba_monitores')):$this->redirect($this->generateUrl('crivero_prueba_clientes'));
        } else {
            $form->get('password')->addError(new FormError('Rellene el campo, gracias'));
        }
      }
      return $this->render('CriveroPruebaBundle:Default:nuevo.html.twig', array('form' => $form->createView()));
    }

    private function createCreateForm(Usuarios $entity){
        $form = $this->createForm(new UsuariosType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_crear'),
            'method' => 'POST'
            )); 
        return $form;
    }
    
    public function eliminarAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $usuario= $this->findUser($id, $em);
        
        $form = $this->createCustomForm($usuario->getId(), 'DELETE', 'crivero_prueba_eliminar');
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $tipo = $usuario->getTipo();
            if ($request->isXmlHttpRequest()) {
                $res = $this->deleteUser($em, $usuario);
                
                return new Response(
                    json_encode(array('removed' => $res['removed'], 'message' => $res['message'])),
                    200,
                    array('Content-Type' => 'application/json')
                );
            }
            
            $res = $this->deleteUser($em, $usuario);
            $request->getSession()->getFlashBag()->add('mensaje', $res['message']);
            return ($tipo == 3) ? $this->redirect($this->generateUrl('crivero_prueba_monitores')):$this->redirect($this->generateUrl('crivero_prueba_clientes'));
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
        $usuario= $this->findUser($id, $em);
        
        $form = $this->createEditForm($usuario);
        return $this->render('CriveroPruebaBundle:Default:editar.html.twig', array('usuario' => $usuario, 
                             'form' => $form->createView()));
    }
    
     public function actualizarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $usuario= $this->findUser($id, $em);
        
        $form = $this->createEditForm($usuario);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('password')->getData();
            if (!empty($password)) {
                $encoded= password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                $usuario->setPassword($encoded);
            } else {
                $recoverPass = $this->recoverPass($id);
                $usuario->setPassword($recoverPass[0]['password']);
            }
            $em->flush();
            
            $request->getSession()->getFlashBag()->add('mensaje', 'El usuario ha sido modificado correctamente.');
            $tipo = $form->get('tipo')->getData();
            return ($tipo == 3) ? $this->redirect($this->generateUrl('crivero_prueba_monitores')):$this->redirect($this->generateUrl('crivero_prueba_clientes'));
        }
        return $this->render('CriveroPruebaBundle:Default:editar.html.twig', array('usuario' => $usuario, 'form' => $form->createView()));
    }
    
    public function createEditForm(Usuarios $entity) {
          $form = $this->createForm(new UsuariosType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_actualizar', array('id' => $entity->getId())),
            'method' => 'PUT')); 
          return $form;        
    }
    
     private function recoverPass($id)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT u.password
            FROM CriveroPruebaBundle:Usuarios u
            WHERE u.id = :id'    
        )->setParameter('id', $id);
        
        $currentPass = $query->getResult();
        return $currentPass;
    }
    
    public function homeAction() {
        return $this->render('CriveroPruebaBundle:Default:home.html.twig');
    }
    
    private function findUser($id, \Doctrine\ORM\EntityManager $em) {
        $usuario= $em->getRepository('CriveroPruebaBundle:Usuarios')->find($id);
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
    
}