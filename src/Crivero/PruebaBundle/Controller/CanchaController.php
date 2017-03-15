<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Crivero\PruebaBundle\Entity\Canchas;
use Crivero\PruebaBundle\Form\CanchasType;
use Symfony\Component\Form\FormError;

class CanchaController extends Controller {
    
    public function canchasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $canchas= $repository->getCanchas();
        
         $paginator = $this->get('knp_paginator');
         $pagination = $paginator->paginate(
                $canchas, $request->query->getInt('page', 1),
                5);
       return $this->render('CriveroPruebaBundle:Canchas:canchas.html.twig', array("pagination"=>$pagination));
    }
    
    public function canchaAction($id) {
       $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
       $cancha=$repository->find($id);
       return $this->render('CriveroPruebaBundle:Canchas:cancha.html.twig', array("cancha"=>$cancha));
    }
    
    public function nuevaCanchaAction() {
        $cancha = new Canchas();
        $form = $this->createCreateForm($cancha);

        return $this->render('CriveroPruebaBundle:Canchas:nuevaCancha.html.twig', array('form' => $form->createView()));
    }
    
    public function crearCanchaAction(Request $request) {
        $cancha = new Canchas();
        $form = $this->createCreateForm($cancha);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('imagen')->getData() == null) {
                $form->get('imagen')->addError(new FormError('Seleccione una imagen, gracias'));
            } else {
                $cancha->setValoracion(0);
                $file = $form->get('imagen')->getData();
                $file->move("C://xampp//htdocs//Prueba//web//images", $file->getClientOriginalName());
                $cancha->setImagen("images/" . $file->getClientOriginalName());
                $em = $this->getDoctrine()->getManager();
                $em->persist($cancha);
                $em->flush();

                $request->getSession()->getFlashBag()->add('mensaje', 'La cancha ha sido creada con éxito.');
                return $this->redirect($this->generateUrl('crivero_prueba_canchas'));
            }
        }
        
        return $this->render('CriveroPruebaBundle:Canchas:nuevaCancha.html.twig', array('form' => $form->createView()));
    }
    
    private function createCreateForm(Canchas $entity) {
        $form = $this->createForm(new CanchasType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_cancha_crear'),
            'method' => 'POST'
        ));
        return $form;
    }
    
    public function editarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $cancha= $this->findEntity($id, $em, 'CriveroPruebaBundle:Canchas');
        
        $form = $this->createEditForm($cancha);
        return $this->render('CriveroPruebaBundle:Canchas:editarCancha.html.twig', array('cancha' => $cancha, 
                             'form' => $form->createView()));
    }
    
    public function createEditForm(Canchas $entity) {
          $form = $this->createForm(new CanchasType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_cancha_actualizar', array('id' => $entity->getId())),
            'method' => 'PUT')); 
          return $form;        
    }
    
    public function actualizarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $cancha = $this->findEntity($id, $em, 'CriveroPruebaBundle:Canchas');

        $form = $this->createEditForm($cancha);
        $originalImage = $cancha->getImagen();
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            if ($form->get('imagen')->getData() == null) {
                $cancha->setImagen($originalImage);
            } else {
                $file = $form->get('imagen')->getData();
                $file->move("C://xampp//htdocs//Prueba//web//images", $file->getClientOriginalName());
                $cancha->setImagen("images/" . $file->getClientOriginalName());
            }
            
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'La cancha ha sido modificada correctamente.');
            return $this->redirect($this->generateUrl('crivero_prueba_cancha', array('id' => $id)));
        }
        return $this->render('CriveroPruebaBundle:Canchas:editarCancha.html.twig', array('cancha' => $cancha, 'form' => $form->createView()));
    }
    
     private function findEntity($id, $em, $repository) {
        $cancha = $em->getRepository($repository)->find($id);
        if (!$cancha) {
            throw $this->createNotFoundException('Cancha no encontrada');
        }
        return $cancha;
    }
}
