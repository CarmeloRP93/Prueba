<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Crivero\PruebaBundle\Entity\Aulas;
use Crivero\PruebaBundle\Entity\HorariosAulas;
use Crivero\PruebaBundle\Form\AulasType;
use Symfony\Component\Form\FormError;

class AulaController extends Controller {

    public function aulasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        
        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $aulas = $repository->searchAulas($searchQuery):
                                 $aulas = $repository->getAulas();
        //$repositoryHorarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosAulas");
        //$hoy = date('j');
        //$nombreHoy = date('w');
        //$estados = $repositoryHorarios->getEstadosAulas($hoy); 

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $aulas, $request->query->getInt('page', 1), 5);
        
        $deleteFormAjax = $this->createCustomForm(':AULA_ID', 'DELETE', 'crivero_prueba_aula_eliminar');
        return $this->render('CriveroPruebaBundle:Aulas:aulas.html.twig', array("pagination" => $pagination,
                                    "delete_form_ajax" => $deleteFormAjax->createView()));
    }

    public function aulaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aula = $repository->find($id);

        $idsSesionesAula = explode('&', $aula->getSesiones());
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesionesAula = $this->getArrayEntidades($repositorySesiones, $idsSesionesAula);
        
        $deleteForm = $this->createCustomForm($aula->getId(), 'DELETE', 'crivero_prueba_aula_eliminar');
        return $this->render('CriveroPruebaBundle:Aulas:aula.html.twig', array("aula" => $aula, 
                                "sesiones" => $sesionesAula, "delete_form"=>$deleteForm->createView()));
    }

    public function nuevaAulaAction() {
        $aula = new Aulas();
        $form = $this->createCreateForm($aula);

        return $this->render('CriveroPruebaBundle:Aulas:nuevaAula.html.twig', array('form' => $form->createView()));
    }

    private function createCreateForm(Aulas $entity) {
        $form = $this->createForm(new AulasType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_aula_crear'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function crearAulaAction(Request $request) {
        $aula = new Aulas();
        $form = $this->createCreateForm($aula);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('imagen')->getData() == null) {
                $form->get('imagen')->addError(new FormError('Seleccione una imagen, gracias'));
            } else {
                $file = $form->get('imagen')->getData();
                $file->move("C://xampp//htdocs//Prueba//web//images", $file->getClientOriginalName());
                $aula->setImagen($file->getClientOriginalName());

                $em = $this->getDoctrine()->getManager();
                $em->persist($aula);
                $em->flush();

                $this->setHorariosAula($aula->getId(), $em);

                $request->getSession()->getFlashBag()->add('mensaje', 'El aula ha sido creada con éxito.');
                return $this->redirect($this->generateUrl('crivero_prueba_aulas'));
            }
        }

        return $this->render('CriveroPruebaBundle:Aulas:nuevaAula.html.twig', array('form' => $form->createView()));
    }

    private function getArrayEntidades($repository, $array) {
        for ($i = 0; $i < count($array); $i++) {
            $resultado[$i] = $repository->find($array[$i]);
        }
        return $resultado;
    }

    public function editarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $aula = $this->findAula($id, $em);

        $form = $this->createEditForm($aula);
        return $this->render('CriveroPruebaBundle:Aulas:editarAula.html.twig', array('aula' => $aula,
                    'form' => $form->createView()));
    }

    public function createEditForm(Aulas $entity) {
        $form = $this->createForm(new AulasType($entity->getId()), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_aula_actualizar', array('id' => $entity->getId())),
            'method' => 'PUT'));
        return $form;
    }

    public function actualizarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $aula = $this->findAula($id, $em, 'CriveroPruebaBundle:Aulas');

        $form = $this->createEditForm($aula);
        $originalImage = $aula->getImagen();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('imagen')->getData() == null) {
                $aula->setImagen($originalImage);
            } else {
                $file = $form->get('imagen')->getData();
                $file->move("C://xampp//htdocs//Prueba//web//images", $file->getClientOriginalName());
                $aula->setImagen($file->getClientOriginalName());
            }

            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'El aula ha sido modificada correctamente.');
            return $this->redirect($this->generateUrl('crivero_prueba_aula', array('id' => $id)));
        }
        return $this->render('CriveroPruebaBundle:Aulas:editarAula.html.twig', array('aula' => $aula, 'form' => $form->createView()));
    }
    
    public function eliminarAulaAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $aula = $this->findAula($id, $em);

        $form = $this->createCustomForm($aula->getId(), 'DELETE', 'crivero_prueba_aula_eliminar');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($request->isXmlHttpRequest()) {
                $res = $this->deleteAula($em, $aula);

                return new Response(
                        json_encode(array('removed' => $res['removed'], 'message' => $res['message'])), 200, array('Content-Type' => 'application/json')
                );
            }

            $res = $this->deleteAula($em, $aula);
            $request->getSession()->getFlashBag()->add('mensaje', $res['message']);
            return $this->redirect($this->generateUrl('crivero_prueba_aulas'));
        }
    }
    
     private function deleteAula($em, $aula) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosAulas");
        $repository->removeHorariosAula($aula->getId());
        $em->remove($aula);
        $em->flush();

        $message = 'El aula ha sido eliminada con éxito.';
        $remove = 1;
        return array('removed' => $remove, 'message' => $message);
    }
    
    private function createCustomForm($id, $method, $route) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl($route, array('id' => $id)))
                        ->setMethod($method)
                        ->getForm();
    }

    private function findAula($id, $em) {
        $aula = $em->getRepository('CriveroPruebaBundle:Aulas')->find($id);
        if (!$aula) {
            throw $this->createNotFoundException('Aula no encontrada');
        }
        return $aula;
    }

    private function setHorariosAula($aulaId, $em) {
        for ($i = 1; $i <= 31; $i++) {
            $horario = new HorariosAulas();
            $horario->setPeriodo("09:00-10:00&10:00-11:00&11:00-12:00&"
                    . "12:00-13:00&16:00-17:00&17:00-18:00&18:00-19:00&19:00-20:00&20:00-21:00&");
            $horario->setAula($aulaId);
            $horario->setFechaInicio($i);
            $em->persist($horario);
        }
        $em->flush();
    }

}
