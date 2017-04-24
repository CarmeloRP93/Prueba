<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Crivero\PruebaBundle\Entity\Usuarios;
use Crivero\PruebaBundle\Form\UsuariosType;

class UsuarioController extends Controller {

    public function miPerfilAction() {
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->getUser();
        $form = $this->createEditForm($usuario);
        return $this->render('moduloclientesclienteBundle:Usuarios:miPerfil.html.twig', array('usuario' => $usuario,
                    'form' => $form->createView()));
    }

//    public function createEditForm(Usuarios $entity) {
//        $form = $this->createForm(new UsuariosType(), $entity, array(
//            'action' => $this->generateUrl('moduloclientes_cliente_miPerfil', array('id' => $entity->getId())),
//            'method' => 'PUT'));
//        return $form;
//    }

    private function findUser($id, $em) {
        $usuario = $em->getRepository('CriveroPruebaBundle:Usuarios')->find($id);
        if (!$usuario) {
            throw $this->createNotFoundException('Usuario no encontrado');
        }
        return $usuario;
    }

    public function editarPerfilAction() {
        $usuario = $this->getUser();
        $form = $this->createEditForm($usuario);
        return $this->render('moduloclientesclienteBundle:Usuarios:editarPerfil.html.twig', array('usuario' => $usuario,
                    'form' => $form->createView()));
    }

    public function actualizarPerfilAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->getUser();

        $form = $this->createEditForm($usuario);
        $originalImage = $usuario->getImagen();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('password')->getData();
            if (!empty($password)) {
                $encoded = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                $usuario->setPassword($encoded);
            } else {
                $recoverPass = $this->recoverPass($usuario->getId());
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
            $request->getSession()->getFlashBag()->add('mensaje', 'Tu perfil ha sido modificado correctamente.');

            return $this->redirect($this->generateUrl('moduloclientes_cliente_miPerfil'));
        }
        return $this->render('moduloclientesclienteBundle:Usuarios:editarPerfil.html.twig', array('usuario' => $usuario, 'form' => $form->createView()));
    }

    public function createEditForm(Usuarios $entity) {
        $form = $this->createForm(new UsuariosType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_actualizarPerfil', array('id' => $entity->getId())),
            'method' => 'PUT'));
        return $form;
    }

    private function recoverPass($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $currentPass = $repository->recuperarPass($id);
        return $currentPass;
    }

}
