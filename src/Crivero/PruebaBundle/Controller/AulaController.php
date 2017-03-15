<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Crivero\PruebaBundle\Entity\Aulas;
use Crivero\PruebaBundle\Form\AulasType;
use Symfony\Component\Form\FormError;

class AulaController extends Controller {

    public function aulasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->getAulas();
        $repositoryHorarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosAulas");
        $hoy = date('j');
        $nombreHoy = date('w');
        $estados = $repositoryHorarios->getEstadosAulas($hoy); 

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $aulas, $request->query->getInt('page', 1), 5);
        return $this->render('CriveroPruebaBundle:Aulas:aulas.html.twig', array("pagination" => $pagination, 
                             "estados" => $estados, "hoy" => $nombreHoy));
    }

    public function aulaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aula = $repository->find($id);

        $idsSesionesAula = explode('&', $aula->getSesiones());
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesionesAula = $this->getArrayEntidades($repositorySesiones, $idsSesionesAula);

        return $this->render('CriveroPruebaBundle:Aulas:aula.html.twig', array("aula" => $aula, "sesiones" => $sesionesAula));
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

    private function findAula($id, $em) {
        $aula = $em->getRepository('CriveroPruebaBundle:Aulas')->find($id);
        if (!$aula) {
            throw $this->createNotFoundException('Aula no encontrada');
        }
        return $aula;
    }

}
