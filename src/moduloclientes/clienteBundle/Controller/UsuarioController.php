<?php

namespace moduloclientes\clienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crivero\PruebaBundle\Entity\Usuarios;
use Crivero\PruebaBundle\Form\UsuariosType;

class UsuarioController extends Controller {

    public function miPerfilAction($id) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->findUser($id, $em);

        $form = $this->createEditForm($usuario);
        return $this->render('moduloclientesclienteBundle:Usuarios:miPerfil.html.twig', array('usuario' => $usuario,
                    'form' => $form->createView()));
    }
    
    public function createEditForm(Usuarios $entity) {
        $form = $this->createForm(new UsuariosType(), $entity, array(
            'action' => $this->generateUrl('moduloclientes_cliente_miPerfil', array('id' => $entity->getId())),
            'method' => 'PUT'));
        return $form;
    }
    
    private function findUser($id, $em) {
        $usuario = $em->getRepository('CriveroPruebaBundle:Usuarios')->find($id);
        if (!$usuario) {
            throw $this->createNotFoundException('Usuario no encontrado');
        }
        return $usuario;
    }

}
