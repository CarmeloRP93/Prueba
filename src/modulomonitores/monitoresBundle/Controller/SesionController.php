<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Sesiones;
use Crivero\PruebaBundle\Entity\Usuarios;
use Crivero\PruebaBundle\Form\UsuariosType;
use Crivero\PruebaBundle\Form\SesionesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;

class SesionController extends Controller {

    public function sesionesMonitoresAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.estado = 'validada' AND s.cliente = 'normal'";
        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesionesTotales($searchQuery) :
                        $sesiones = $em->createQuery($dql)->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        $aulas = null;
        foreach ($sesiones as $clave => $sesion) {
            $aulas[$clave] = $repositoryAula->find($sesion->getAula());
        }
        return $this->render('modulomonitoresmonitoresBundle:Default:sesionesMonitores.html.twig', array("pagination" => $pagination, "aulas" => $aulas));
    }

    public function sesionMonitoresAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $sesion = $repository->find($id);
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aula = $repositoryAula->find($sesion->getAula());

        return $this->render('modulomonitoresmonitoresBundle:Default:sesionMonitores.html.twig', array("sesion" => $sesion, "aula" => $aula));
    }

    public function misSesionesMonitoresAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");

        $em = $this->getDoctrine()->getManager();
        $usuarioId = $this->getUser()->getId();
        $dql = "SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.idMonitor = :id AND s.cliente = 'normal'";

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $sesiones = $repository->searchSesiones($searchQuery, $usuarioId) :
                        $sesiones = $em->createQuery($dql)->setParameter('id', $usuarioId)->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $sesiones, $request->query->getInt('page', 1), 5);
        $aulas = null;
        foreach ($sesiones as $clave => $sesion) {
            $aulas[$clave] = $repositoryAula->find($sesion->getAula());
        }

        return $this->render('modulomonitoresmonitoresBundle:Default:misSesionesMonitores.html.twig', array("pagination" => $pagination, "aulas" => $aulas));
    }

    public function miSesionMonitoresAction($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
        $repositoryAula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $sesion = $repository->find($id);
        $aula = $repositoryAula->find($sesion->getAula());
        $deleteForm = $this->createDeleteForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Default:miSesionMonitores.html.twig', array("sesion" => $sesion, "aula" => $aula, 'delete_form' => $deleteForm->createView()));
    }

    private function createDeleteForm($sesion) {
        return $this->createFormBuilder()->setAction($this->generateUrl('modulomonitores_monitores_eliminarSesion', array('id' => $sesion->getId())))
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

    public function nuevaSesionAction() {
        $sesion = new Sesiones();
        $form = $this->createCreateForm($sesion);

        return $this->render('modulomonitoresmonitoresBundle:Default:nuevaSesion.html.twig', array('form' => $form->createView()));
    }

    private function createCreateForm(Sesiones $entity) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->findAll();
        $form = $this->createForm(new SesionesType($aulas), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_crearSesion'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function crearSesionAction(Request $request) {
        $sesion = new Sesiones();
        $form = $this->createCreateForm($sesion);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $sesion->setEstado("pendiente");
            $sesion->setEstadoCliente("no disponible");
            $sesion->setnClientes(0);
            $sesion->setCliente("normal");
            $sesion->setImagen("images/" . mt_rand(1, 5) . "m.jpg");
            $sesion->setIdMonitor($this->getUser()->getId());
            $sesion->setMonitor($this->getUser()->getUsername());
            if ($form->get('nSesiones')->getData() > 20) {
                $form->get('nSesiones')->addError(new FormError('El límite son 20 sesiones'));
                return $this->render('modulomonitoresmonitoresBundle:Default:nuevaSesion.html.twig', array('form' => $form->createView()));
            }
            $lClientes = $form->get('lClientes')->getData();
            if ($lClientes != null) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($sesion);
                $em->flush();
                $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido creado con éxito.');
                return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesMonitores'));
            } else {
                $form->get('lClientes')->addError(new FormError('Introduzca un valor correcto'));
            }
        }
        return $this->render('modulomonitoresmonitoresBundle:Default:nuevaSesion.html.twig', array('form' => $form->createView()));
    }

    public function editarSesionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createEdiForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Default:editarSesion.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
    }

    private function createEdiForm(Sesiones $entity) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->findAll();
        $form = $this->createForm(new SesionesType($aulas), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_editar', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function editarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createEdiForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('nSesiones')->getData() > 20) {
                $form->get('nSesiones')->addError(new FormError('El límite son 20 sesiones'));
                return $this->render('modulomonitoresmonitoresBundle:Default:editarSesion.html.twig', array('form' => $form->createView()));
            }
            $lClientes = $form->get('lClientes')->getData();
            if ($lClientes != null) {
                $em = $this->getDoctrine()->getManager();
                $sesion->setEstado("modificada");
                $sesion->setEstadoCliente("no disponible");
                $sesion->setObservaciones("");
                $em->persist($sesion);
                $em->flush();
                $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido modificada con éxito.');
                return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesMonitores'));
            } else {
                $form->get('lClientes')->addError(new FormError('Introduzca un valor correcto'));
            }
        }
        return $this->render('modulomonitoresmonitoresBundle:Default:editarSesion.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
    }

    public function nuevaSesionDedicadaAction() {
        $sesion = new Sesiones();
        $form = $this->createCreateFormDedicado($sesion);

        return $this->render('modulomonitoresmonitoresBundle:Default:nuevaSesionDedicada.html.twig', array('form' => $form->createView()));
    }

    private function createCreateFormDedicado(Sesiones $entity) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->findAll();
        $form = $this->createForm(new SesionesType($aulas), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_crearSesionDedicada'),
            'method' => 'POST'
        ));
        return $form;
    }

    public function crearSesionDedicadaAction(Request $request) {
        $sesion = new Sesiones();
        $form = $this->createCreateFormDedicado($sesion);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $sesion->setEstado("pendiente");
            $sesion->setEstadoCliente("no disponible");
            $sesion->setnClientes(0);
            $sesion->setCliente("sin participante");
            $sesion->setlClientes(1);
            $sesion->setImagen("images/" . mt_rand(1, 5) . "m.jpg");
            $sesion->setIdMonitor($this->getUser()->getId());
            $sesion->setMonitor($this->getUser()->getUsername());
            if ($form->get('nSesiones')->getData() > 20) {
                $form->get('nSesiones')->addError(new FormError('El límite son 20 sesiones'));
                return $this->render('modulomonitoresmonitoresBundle:Default:nuevaSesion.html.twig', array('form' => $form->createView()));
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($sesion);
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido creada con éxito.');
            return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesDedicadas'));
        }
        return $this->render('modulomonitoresmonitoresBundle:Default:nuevaSesionDedicada.html.twig', array('form' => $form->createView()));
    }

    public function editarSesionDedicadaAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createEdiDediForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Default:editarSesionDedicada.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
    }

    private function createEdiDediForm(Sesiones $entity) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->findAll();
        $form = $this->createForm(new SesionesType($aulas), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_editarDedicada', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function editarDedicadaAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createEdiDediForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sesion->setEstado("modificada");
            $sesion->setEstadoCliente("no disponible");
            if ($form->get('nSesiones')->getData() > 20) {
                $form->get('nSesiones')->addError(new FormError('El límite son 20 sesiones'));
                return $this->render('modulomonitoresmonitoresBundle:Default:editarSesionDedicada.html.twig', array('form' => $form->createView()));
            }
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido modificada con éxito.');
            return $this->redirect($this->generateUrl('modulomonitores_monitores_miSesionDedicada', array('id' => $sesion->getId())));
        }
        return $this->render('modulomonitoresmonitoresBundle:Default:editarSesionDedicada.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
    }

    public function suspenderAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);

        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createSuspenderSesionForm($sesion);
        return $this->render('modulomonitoresmonitoresBundle:Default:suspenderSesion.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
    }

    private function createSuspenderSesionForm(Sesiones $entity) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aulas = $repository->findAll();
        $form = $this->createForm(new SesionesType($aulas), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_suspenderSe', array('id' => $entity->getId())),
            'method' => 'PUT'
        ));
        return $form;
    }

    public function suspenderSeAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $em->getRepository('CriveroPruebaBundle:Sesiones')->find($id);
        if (!$sesion) {
            throw $this->createNotFoundException("no encontrado");
        }
        $form = $this->createSuspenderSesionForm($sesion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sesion->setEstado("suspendida");
            $sesion->setEstadoCliente("suspendida");
            $observaciones = $form->get('observaciones')->getData();
            if ($observaciones != null) {
                $em->flush();
                $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido suspendida correctamente.');
                return $this->redirect($this->generateUrl('modulomonitores_monitores_miSesionMonitores', array('id' => $sesion->getId())));
            } else {
                $form->get('observaciones')->addError(new FormError('Rellene el campo gracias'));
            }
        }
        return $this->render('modulomonitoresmonitoresBundle:Default:suspenderSesion.html.twig', array('sesion' => $sesion, 'form' => $form->createView()));
    }

    public function miperfilmAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $monitor = $repository->find($this->getUser()->getId());
        return $this->render('modulomonitoresmonitoresBundle:Default:miperfilm.html.twig', array("monitor" => $monitor));
    }

    public function editarmiperfilmAction() {
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->findUser($this->getUser()->getId(), $em);

        $form = $this->createEditpmForm($usuario);
        return $this->render('modulomonitoresmonitoresBundle:Default:editarmiperfilm.html.twig', array('usuario' => $usuario,
                    'form' => $form->createView()));
    }

    public function actualizarmiperfilmAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->findUser($this->getUser()->getId(), $em);

        $form = $this->createEditpmForm($usuario);
        $originalImage = $usuario->getImagen();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('password')->getData();
            if (!empty($password)) {
                $encoded = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                $usuario->setPassword($encoded);
            } else {
                $recoverPass = $this->recoverPass($this->getUser()->getId());
                $usuario->setPassword($recoverPass[0]['password']);
            }
            if ($form->get('imagen')->getData() != null) {
                $file = $form->get('imagen')->getData();
                $file->move("C://xampp//htdocs//Prueba//web//images", $file->getClientOriginalName());
                $usuario->setImagen($file->getClientOriginalName());
            } else {
                $usuario->setImagen($originalImage);
            }
            $em->flush();
            $request->getSession()->getFlashBag()->add('mensaje', 'El usuario ha sido modificado correctamente.');
            return $this->redirect($this->generateUrl('modulomonitores_monitores_miperfilm'));
        }
        return $this->render('modulomonitoresmonitoresBundle:Default:editarmiperfilm.html.twig', array('usuario' => $usuario,
                    'form' => $form->createView()));
    }

    private function findUser($id, $em) {
        $usuario = $em->getRepository('CriveroPruebaBundle:Usuarios')->find($id);
        if (!$usuario) {
            throw $this->createNotFoundException('Usuario no encontrado');
        }
        return $usuario;
    }

    public function createEditpmForm(Usuarios $entity) {
        $form = $this->createForm(new UsuariosType(), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_actualizarmiperfilm', array('id' => $entity->getId())),
            'method' => 'PUT'));
        return $form;
    }

    private function recoverPass($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $currentPass = $repository->recuperarPass($id);
        return $currentPass;
    }

    public function verParticipantesAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $arrayClientes = explode('&', $sesion->getIdsClientes());
        $repositoryu = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        for ($i = 0; $i < count($arrayClientes); $i++) {
            $clientes[$i] = $repositoryu->find($arrayClientes[$i]);
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $clientes, $request->query->getInt('page', 1), 5);
        return $this->render('modulomonitoresmonitoresBundle:Default:participantes.html.twig', array("idSesion" => $id, "pagination" => $pagination));
    }

    public function participanteAction($id, $idUsuario) {
        $repositoryUsuarios = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $cliente = $repositoryUsuarios->find($idUsuario);

        return $this->render('modulomonitoresmonitoresBundle:Default:participante.html.twig', array("cliente" => $cliente, "id" => $id, "idUsuario" => $idUsuario));
    }

    public function participantePrivadoAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $idUsuario = $sesion->getIdsClientes();
        $repositoryu = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $cliente = $repositoryu->find($idUsuario);
        return $this->render('modulomonitoresmonitoresBundle:Default:participantePrivado.html.twig', array("idSesion" => $id, "cliente" => $cliente));
    }

    public function verHorarioAction($id) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $horario = explode('&', $sesion->getHorario());

        return $this->render('modulomonitoresmonitoresBundle:Default:horario.html.twig', array("horario" => $horario, "id" => $id));
    }

    public function abandonarSesionAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');

        $sesion->setIdMonitor(null);

        if ($sesion->getNClientes() == 0 && $sesion->getEstado() == 'cancelada') {
            $em->remove($sesion);
        } else {
            $em->persist($sesion);
        }

        $em->flush();
        $request->getSession()->getFlashBag()->add('mensaje', 'Has abanonado la sesión.');
        return $this->redirect($this->generateUrl('modulomonitores_monitores_misSesionesMonitores'));
    }

    public function expulsarAction($id, $idUsuario) {
        $em = $this->getDoctrine()->getManager();

        // Aquí eliminamos el cliente en la tabla sesiones
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $arrayClientes = explode('&', $sesion->getIdsClientes());
        for ($i = 0; $i <= count($arrayClientes); $i++) {
            if ($arrayClientes[$i] == $idUsuario) {
                $pos = $i;
                break;
            }
        }
        unset($arrayClientes[$pos]);
        $arrayClientes1 = array_values($arrayClientes);
        $sesion->setIdsClientes(implode($arrayClientes1, '&'));

        // Aquí eliminamos la sesión en la tabla usuario
        $usuario = $this->findEntity($idUsuario, $em, 'CriveroPruebaBundle:Usuarios');
        $arraySesiones = explode('&', $usuario->getSesiones());
        for ($i = 0; $i <= count($arraySesiones); $i++) {
            if ($arraySesiones[$i] == $id) {
                $posS = $i;
                break;
            }
        }
        unset($arraySesiones[$posS]);
        $arraySesiones1 = array_values($arraySesiones);
        $usuario->setSesiones(implode($arraySesiones1, '&'));

        // Aquí restamos la cantidad de clientes apuntados a la sesion y la eliminamos si el estado es cancelado
        $restaCliente = $sesion->getNClientes();
        $restaCliente--;
        $sesion->setNClientes($restaCliente);


        $sesion->setEstadoCliente('disponible');
        $em->persist($sesion);


        $em->persist($usuario);
        $em->flush();
        if (count($arrayClientes) > 0) {
            return $this->redirect($this->generateUrl('modulomonitores_monitores_verParticipantes', array('id' => $id)));
        } else {
            return $this->redirect($this->generateUrl('modulomonitores_monitores_miSesionMonitores', array('id' => $id)));
        }
    }

    public function terminarAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $sesion = $this->findEntity($id, $em, 'CriveroPruebaBundle:Sesiones');
        $sesion->setEstado("terminada");
        $sesion->setEstadoCliente("terminada");


        $tipo = $sesion->getCliente();
        $em->persist($sesion);
        $em->flush();
        $request->getSession()->getFlashBag()->add('mensaje', 'La sesión ha sido terminada con éxito');
        if ($tipo == "normal") {
            return $this->redirect($this->generateUrl('modulomonitores_monitores_miSesionMonitores', array('id' => $sesion->getId())));
        } else {
            return $this->redirect($this->generateUrl('modulomonitores_monitores_miSesionDedicada', array('id' => $sesion->getId())));
        }
    }

    private function updateMonth($i, $mes, $vuelta, $limite) {
        $i = 0;
        if ($mes == 12) {
            $mes = 0;
            $vuelta = 1;
        }
        $mes++;
        $fecha = date('Y') + $vuelta . '-' . $mes . '-01';
        $limite = date('t', strtotime($fecha));
    }

    private function findEntity($id, $em, $repository) {
        $entity = $em->getRepository($repository)->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Entidad no encontrada');
        }
        return $entity;
    }

    private function getArrayEntidades($repository, $array) {
        for ($i = 0; $i < count($array); $i++) {
            $resultado[$i] = $repository->find($array[$i]);
        }
        return $resultado;
    }

}
