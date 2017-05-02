<?php


namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Crivero\PruebaBundle\Entity\Usuarios;
use Crivero\PruebaBundle\Form\UsuariosType;


class PerfilController extends Controller {

    public function miperfilmAction() {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $monitor = $repository->find($this->getUser()->getId());
        return $this->render('modulomonitoresmonitoresBundle:Perfil:miperfilm.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), "monitor" => $monitor));
    }

    public function editarmiperfilmAction() {
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->findUser($this->getUser()->getId(), $em);

        $form = $this->createEditpmForm($usuario);
        return $this->render('modulomonitoresmonitoresBundle:Perfil:editarmiperfilm.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(),'usuario' => $usuario,
                    'form' => $form->createView()));
    }
    
    public function createEditpmForm(Usuarios $entity) {
        $form = $this->createForm(new UsuariosType(), $entity, array(
            'action' => $this->generateUrl('modulomonitores_monitores_actualizarmiperfilm'),
            'method' => 'PUT'));
        return $form;
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
        return $this->render('modulomonitoresmonitoresBundle:Perfil:editarmiperfilm.html.twig', array('notificacionesSinLeer' => $this->getNewNotification(), 'usuario' => $usuario,
                    'form' => $form->createView()));
    }
    private function findUser($id, $em) {
        $usuario = $em->getRepository('CriveroPruebaBundle:Usuarios')->find($id);
        if (!$usuario) {
            throw $this->createNotFoundException('Usuario no encontrado');
        }
        return $usuario;
    }
    private function recoverPass($id) {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $currentPass = $repository->recuperarPass($id);
        return $currentPass;
    }
    private function getNewNotification() {
        $repositoryN = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Notificaciones");
        $notificaciones = $repositoryN->getNotificaciones($this->getUser()->getId());
        $notificacionesSinLeer = array();
        foreach ($notificaciones as $clave => $notificacion) {
            if ($notificacion->getEstado() == "No leido") {
                $notificacionesSinLeer[$clave] = $notificacion;
            }
        }
        return $notificacionesSinLeer;
    }
}
