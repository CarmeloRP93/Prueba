<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Comentarios;
use Crivero\PruebaBundle\Form\ComentariosType;
use Crivero\PruebaBundle\Entity\Valoraciones;
use Crivero\PruebaBundle\Form\ValoracionesType;
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
        $mes = date('m');
        for ($i = 1; $i < 8; $i++) {
            $dia = date('d') + $i;
            if ($dia > date('t')) {
                $dia = $dia - date('t');
                $mes++;
                if ($mes < 10) {
                    $mes = '0' . $mes;
                }
            }
            if ($dia < 10) {
                $dia = '0' . $dia;
            }
            $diaMes = $dia . '-' . $mes;
            $horarios[$i] = $repositoryHorarios->getInstancia($id, $diaMes)[0];
        }
        return $this->render('moduloclientesclienteBundle:Canchas:canchaClientes.html.twig', array("cancha" => $cancha, "horarios" => $horarios));
    }

    public function escribirSugerenciaAction() {
        $comentario = new Comentarios();
        $referer = $this->getRequest()->headers->get('referer');
        $asunto = null;
        if ($referer) {
            $id = explode('/', $referer)[7];
            $asunto = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->find($id)->getTipo();
        }
        $form = $this->createCreateForm($comentario);
        $admins = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->getAdmin();
        return $this->render('moduloclientesclienteBundle:Canchas:escribirSugerencia.html.twig', array('form' => $form->createView(),
                    'asunto' => $asunto, 'admins' => $admins));
    }

    public function añadirSugerenciaAction(Request $request) {
        $comentario = new Comentarios();
        $form = $this->createCreateForm($comentario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cliente = $this->getUser();
            $idCliente = $cliente->getId();
            $comentario->setIdRemitente($idCliente);

            $admins = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->getAdmin();
            $comentario->setIdDestinatario($admins[0]->getId());
            $comentario->setTipoComentario('Sugerencia cancha');
            $em = $this->getDoctrine()->getManager();
            $em->persist($comentario);
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'Sugerencia enviada.');
            return $this->redirect($this->generateUrl('moduloclientes_cliente_canchasClientes'));
        }
        $asunto = $form->get('asunto')->getData();
        $admins = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios")->getAdmin();
        return $this->render('moduloclientesclienteBundle:Canchas:escribirSugerencia.html.twig', array('form' => $form->createView(),
                    'asunto' => $asunto, 'admins' => $admins));
    }

    private function createCreateForm(Comentarios $entity) {
        $form = $this->createForm(new ComentariosType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_añadirSugerencia'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function valorarAction() {
        $valoracion = new Valoraciones();
        $referer = $this->getRequest()->headers->get('referer');
        $idCancha = null;
        if ($referer) {
            $id = explode('/', $referer)[7];
            $idCancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Reservas")->find($id)->getIdCancha();
        }
        $form = $this->createCreateFormVal($valoracion);
        return $this->render('moduloclientesclienteBundle:Canchas:valorar.html.twig', array('form' => $form->createView(),
                    'idCancha' => $idCancha));
    }

    public function añadirValoracionAction(Request $request) {
        $valoracion = new Valoraciones();
        $form = $this->createCreateFormVal($valoracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
            $idCancha = $form->get('idCancha')->getData();
            $cancha = $repository->find($idCancha);

            $puntuacionCliente = $form->get('puntuacion')->getData();
            $votosActuales = count($this->getDoctrine()->getRepository("CriveroPruebaBundle:Valoraciones")->getIdCanchas($idCancha));
            $valoracionAntigua = $cancha->getValoracion();

            $idCliente = $this->getUser()->getId();
            if ($this->getDoctrine()->getRepository("CriveroPruebaBundle:Valoraciones")->findCliente($idCliente) != null) {
                $valoracion = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Valoraciones")->findCliente($idCliente)[0];
                $puntuacionAntigua = $valoracion->getPuntuacion();
                $puntuacionActualizada = ($votosActuales * $valoracionAntigua - $puntuacionAntigua + $puntuacionCliente) / $votosActuales;
                $valoracion->setPuntuacion($puntuacionCliente);
            } else {
                $puntuacionActualizada = ($votosActuales * $valoracionAntigua + $puntuacionCliente) / ($votosActuales + 1);
                $valoracion->setIdCliente($idCliente);
            }

            $cancha->setValoracion($puntuacionActualizada);
            $em = $this->getDoctrine()->getManager();
            $em->persist($valoracion);
            $em->persist($cancha);
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'Valoracion enviada.');
            return $this->redirect($this->generateUrl('moduloclientes_cliente_reservasClientes'));
        }
        $idCancha = $form->get('idCancha')->getData();
        return $this->render('moduloclientesclienteBundle:Canchas:escribirSugerencia.html.twig', array('form' => $form->createView(),
                    'idCancha' => $idCancha));
    }

    private function createCreateFormVal(Valoraciones $entity) {
        $form = $this->createForm(new ValoracionesType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_añadirValoracion'),
            'method' => 'POST'
        ));
        return $form;
    }

}
