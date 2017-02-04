<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Crivero\PruebaBundle\Entity\Canchas;
use Crivero\PruebaBundle\Form\CanchasType;
class CanchaController extends Controller
{
    
    public function canchasAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT c FROM CriveroPruebaBundle:Canchas c";
        $canchas = $em->createQuery($dql);
        
         $paginator = $this->get('knp_paginator');
         $pagination = $paginator->paginate(
                $canchas, $request->query->getInt('page', 1),
                5);
       return $this->render('CriveroPruebaBundle:Default:canchas.html.twig', array("pagination"=>$pagination));
    }
    
    public function canchaAction($id) {
       $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
       $cancha=$repository->find($id);
       return $this->render('CriveroPruebaBundle:Default:cancha.html.twig', array("cancha"=>$cancha));
    }
    
    public function editarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $cancha= $this->findCancha($id, $em);
        
        $form = $this->createEditForm($cancha);
        return $this->render('CriveroPruebaBundle:Default:editarCancha.html.twig', array('cancha' => $cancha, 
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
        $cancha= $this->findCancha($id, $em);
        
        $form = $this->createEditForm($cancha);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            
            $request->getSession()->getFlashBag()->add('mensaje', 'La cancha ha sido modificada correctamente.');
            return $this->redirect($this->generateUrl('crivero_prueba_cancha', array('id' => $id)));
        }
        return $this->render('CriveroPruebaBundle:Default:editarCancha.html.twig', array('cancha' => $cancha, 'form' => $form->createView()));
    }
    
     private function findCancha($id, \Doctrine\ORM\EntityManager $em) {
        $cancha= $em->getRepository('CriveroPruebaBundle:Canchas')->find($id);
        if (!$cancha) {
            throw $this->createNotFoundException('Cancha no encontrada');
        }
        return $cancha;
    }

}
