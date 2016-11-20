<?php

namespace Crivero\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Crivero\PruebaBundle\Entity\Usuarios;

class MonitorController extends Controller
{

    public function monitoresAction()
    {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $usuarios=$repository->findAll();
       return $this->render('CriveroPruebaBundle:Default:monitores.html.twig', array("usuarios"=>$usuarios));
    }
    
    public function monitorAction($id)
    {
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Usuarios");
        $monitor=$repository->find($id);
        
        $deleteForm = $this->createDeleteForm($monitor);
       return $this->render('CriveroPruebaBundle:Default:monitor.html.twig', array("monitor"=>$monitor,  'delete_form'=>
            $deleteForm->createView()));
    }
    
     private function createDeleteForm($usuario) {
        return $this->createFormBuilder()->setAction($this->generateUrl('crivero_prueba_eliminarMonitor', array('id' => $usuario->getId())))
            ->setMethod('DELETE')
             ->getForm();
    }
    
    public function eliminarMonitorAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $usuario= $em->getRepository('CriveroPruebaBundle:Usuarios')->find($id);
        
        $form = $this->createDeleteForm($usuario);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $em->remove($usuario);
            $em->flush();
            
            return $this->redirect($this->generateUrl('crivero_prueba_monitores'));
        }
    }
}