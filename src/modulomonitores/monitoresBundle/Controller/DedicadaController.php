<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;
use Crivero\PruebaBundle\Form\SesionesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class DedicadaController extends Controller {

    public function sesionesDedicadasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.estado = 'validada' AND s.cliente != 'normal'";
        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesionesDedicadasTotales($searchQuery) :
                        $sesiones = $em->createQuery($dql)->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        $aulas = null;
        foreach ($sesiones as $clave => $sesion) {
            $aulas[$clave] = $repositoryAula->find($sesion->getAula());
        }
        return $this->render('modulomonitoresmonitoresBundle:Default:sesionesDedicadas.html.twig', array("pagination" => $pagination, "aulas" => $aulas));
    }

    public function sesionDedicadaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aula = $repositoryAula->find($sesion->getAula());

        return $this->render('modulomonitoresmonitoresBundle:Default:sesionDedicada.html.twig', array("sesion" => $sesion, "aula" => $aula));
    }

    public function misSesionesDedicadasAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $em = $this->getDoctrine()->getManager();
        $usuarioId = $this->getUser()->getId();
        $dql = "SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.idMonitor = :id AND s.cliente != 'normal'";
        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesionesDedicadas($searchQuery, $usuarioId) :
                        $sesiones = $em->createQuery($dql)->setParameter('id', $usuarioId)->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        $aulas = null;
        foreach ($sesiones as $clave => $sesion) {
            $aulas[$clave] = $repositoryAula->find($sesion->getAula());
        }
        return $this->render('modulomonitoresmonitoresBundle:Default:misSesionesDedicadas.html.twig', array("pagination" => $pagination, "aulas" => $aulas));
    }

    public function miSesionDedicadaAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $sesion = $repository->find($id);
        $aula = $repositoryAula->find($sesion->getAula());
        $deleteForm = $this->createDeleteFormDedicada($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Default:miSesionDedicada.html.twig', array("sesion" => $sesion, "aula" => $aula, 'delete_form' => $deleteForm->createView()));
    }

    public function miSesionMonitoresAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $sesion = $repository->find($id);
        $aula = $repositoryAula->find($sesion->getAula());
        $deleteForm = $this->createDeleteForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Default:miSesionMonitores.html.twig', array("sesion" => $sesion, "aula" => $aula, 'delete_form' => $deleteForm->createView()));
    }

    private function createDeleteFormDedicada($sesion) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('modulomonitores_monitores_eliminarSesionDedicada', array('id' => $sesion->getId())))
                        ->setMethod('DELETE')
                        ->getForm();
    }

    public function eliminarSesionAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        $form = $this->createDeleteForm($sesion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->remove($sesion);
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido eliminada con éxito.');
            return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesMonitores'));
        }
    }

    public function eliminarSesionDedicadaAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        $form = $this->createDeleteFormDedicada($sesion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->remove($sesion);
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido eliminada con éxito.');
            return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesDedicadas'));
        }
    }

    public function suspenderSesionDedicadaAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createSuspenderSesionDeForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Default:suspenderSesionDe.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
    }

    private function createSuspenderSesionDeForm(Sesiones $entity) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->findAll();
        $form = $this->createForm(new SesionesType($aulas), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_suspenderSeDe', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function suspenderSeDeAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createSuspenderSesionDeForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sesion->setEstado("suspendida");
            $sesion->setEstadoCliente("suspendida");
            $observaciones = $form->get('observaciones')->getData();
            if ($observaciones != null) {
                $em->flush();
                return $this->redirect($this->generateUrl('modulomonitores_monitores_miSesionDedicada', array('id' => $sesion->getId())));
            } else {
                $form->get('observaciones')->addError(new FormError('Rellene el campo gracias'));
            }
        }
        return $this->render('modulomonitoresmonitoresBundle:Default:suspenderSesionDe.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
    }

}
