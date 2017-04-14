<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Comentarios;
use Crivero\PruebaBundle\Form\ComentariosType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormError;

class CanchaController extends Controller {

    public function canchasClientesAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $canchas = $repository->findAll();
        return $this->render('moduloclientesclienteBundle:Canchas:canchasClientes.html.twig', array("canchas" => $canchas));
    }

    public function canchaClientesAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $cancha = $repository->find($id);

        $repositoryHorarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosCanchas");
        for ($i = 1; $i < 8; $i++) {
            $dia = date('d')+$i;
            $diaMes = $dia.'-'.date('m');
            $horarios[$i] = $repositoryHorarios->getInstancia($id, $diaMes)[0];
        }
        return $this->render('moduloclientesclienteBundle:Canchas:canchaClientes.html.twig', array("cancha" => $cancha, "horarios" => $horarios));
    }

    public function escribirSugerenciaAction($id) {
        $comentario = new Comentarios();
        $form = $this->createCreateForm($comentario);
        return $this->render('moduloclientesclienteBundle:Canchas:escribirSugerencia.html.twig', array('form' => $form->createView()));
    }

    public function añadirSugerenciaAction(Request $request) {
        $comentario = new Comentarios();
        $form = $this->createCreateForm($comentario);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $cliente = $this->getUser();
            $idCliente = $cliente->getId();
            $comentario->setIdCliente($idCliente);

            $em = $this->getDoctrine()->getManager();
            $em->persist($comentario);
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'Sugerencia enviada.');
            return $this->redirect($this->generateUrl('moduloclientes_cliente_canchasClientes'));
        }
        return $this->redirect($this->generateUrl('moduloclientes_cliente_canchasClientes'));
    }

    private function createCreateForm(Comentarios $entity) {
        $form = $this->createForm(new ComentariosType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_añadirSugerencia'),
            'method' => 'POST'
        ));
        return $form;
    }

}
