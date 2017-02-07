<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Crivero\PruebaBundle\Entity\Aulas;
use Crivero\PruebaBundle\Form\AulasType;

class AulaController extends Controller {

    public function aulasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->getAulas();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $aulas, $request->query->getInt('page', 1), 5);
        return $this->render('CriveroPruebaBundle:Aulas:aulas.html.twig', array("pagination" => $pagination));
    }

    public function aulaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aula = $repository->find($id);

        $idsSesionesAula = explode('&', $aula->getSesiones());
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesionesAula = $this->getArrayEntidades($repositorySesiones, $idsSesionesAula);

        return $this->render('CriveroPruebaBundle:Aulas:aula.html.twig', array("aula" => $aula, "sesiones" => $sesionesAula));
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
        $form = $this->createForm(new AulasType(), $entity, array(
            'action' => $this->generateUrl('crivero_prueba_aula_actualizar', array('id' => $entity->getId())),
            'method' => 'PUT'));
        return $form;
    }

    public function actualizarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $aula = $this->findAula($id, $em, 'CriveroPruebaBundle:Aulas');

        $form = $this->createEditForm($aula);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $request->getSession()->getFlashBag()->add('mensaje', 'La aula ha sido modificada correctamente.');
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
