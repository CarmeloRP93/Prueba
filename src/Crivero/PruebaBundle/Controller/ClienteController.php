<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormError;
use Crivero\PruebaBundle\Entity\Usuarios;
use Crivero\PruebaBundle\Form\UsuariosType;

class ClienteController extends Controller
{
    
    public function clientesAction()
    {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $usuarios=$repository->findAll();
       return $this->render('CriveroPruebaBundle:Default:clientes.html.twig', array("usuarios"=>$usuarios));
    }
    
    public function clienteAction($id)
    {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $cliente=$repository->find($id);
        
        $deleteForm = $this->createDeleteForm($cliente);
        return $this->render('CriveroPruebaBundle:Default:cliente.html.twig', array("cliente"=>$cliente, 'delete_form'=>
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
      
      if($form->isValid())
      {
        $em=$this->getDoctrine()->getManager();
        $em->persist($usuario);
        $em->flush();
        
        return $this->redirect($this->generateUrl('crivero_prueba_clientes'));
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
    
    private function createDeleteForm($usuario) {
        return $this->createFormBuilder()->setAction($this->generateUrl('crivero_prueba_eliminar', array('id' => $usuario->getId())))
            ->setMethod('DELETE')
             ->getForm();
    }
    
    public function eliminarAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $usuario= $em->getRepository('CriveroPruebaBundle:Usuarios')->find($id);
        
        $form = $this->createDeleteForm($usuario);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $em->remove($usuario);
            $em->flush();
            
            return $this->redirect($this->generateUrl('crivero_prueba_clientes'));
        }
    }
   
    
}