<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CanchasController extends Controller {
    
    public function sesionesCanchaAction($id, Request $request) {
        $repositoryCanchas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $cancha = $repositoryCanchas->find($id);

        $idsSesionesCancha = explode('&', $cancha->getSesiones());
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
       $contador = 0;
       $sesiones = array();
        for ($i = 0; $i < count($idsSesionesCancha); $i++) {
            if ($repositorySesiones->find($idsSesionesCancha[$i])->getIdMonitor() == $this->getUser()->getId()) {
                $searchQuery = $request->get('query');
                if (!empty($searchQuery)) {
                    if (strpos($repositorySesiones->find($idsSesionesCancha[$i])->getNombre(), $searchQuery) !== false) {
                        $sesiones[$contador] = $repositorySesiones->find($idsSesionesCancha[$i]);
                        $contador++;
                    } else {
                        continue;
                    }
                } else {
                    $sesiones[$contador] = $repositorySesiones->find($idsSesionesCancha[$i]);
                    $contador++;
                }
            }
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($sesiones, $request->query->getInt('page', 1), 6);

        return $this->render('modulomonitoresmonitoresBundle:Canchas:sesionesCancha.html.twig', array("pagination" => $pagination,
                    'nombre' => $cancha->getTipo(), 'cId' => $id,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function canchasAction(Request $request) {
        $this->changeStateNotification($request->get('id'));
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $canchas = $repository->searchCanchas($searchQuery) :
                        $canchas = $repository->getCanchas();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $canchas, $request->query->getInt('page', 1), 5);

        return $this->render('modulomonitoresmonitoresBundle:Canchas:canchas.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }
    
    

    public function canchaAction($id) {
        $this->changeStateNotification($id);
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas");
        $cancha = $repository->find($id);
        return $this->render('modulomonitoresmonitoresBundle:Canchas:cancha.html.twig', array("cancha" => $cancha,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }
    
    public function disponibilidadCanchaAction($id, Request $request) {
        $cancha = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Canchas")->find($id);
        $repositoryH = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosCanchas");

        $mes = date('m');
        $cambio = false;
        $vuelta = 0;
        $cont = 1;
        for ($i = 1; $cont < 19; $i++) {
            $dia = date('d') + $i;
            if ($dia > date('t')) {
                $dia = $dia - date('t');
                if ($cambio == false) {
                    $mes++;
                    if ($mes == 13) {
                        $mes = 1;
                        $vuelta = 1;
                    }
                    if ($mes < 10)
                        $mes = '0' . $mes;
                    $cambio = true;
                }
            }
            if ($dia < 10) $dia = '0' . $dia;
            
            if ($this->isWeekend($dia, $mes, $vuelta)) continue;
            
            $diaMes = $dia . '-' . $mes;

            $horarios[$cont-1] = $repositoryH->getInstancia($id, $diaMes)[0];
            $cont++;
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $horarios, $request->query->getInt('page', 1), 6);
        return $this->render('modulomonitoresmonitoresBundle:Canchas:disponibilidadCancha.html.twig', array(
            "horarios" => $pagination, 'cancha' => $cancha, 'notificacionesSinLeer' => $this->getNewNotification()));
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

    private function changeStateNotification($idEntidad) {
        $repositoryN = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Notificaciones");
        if ($repositoryN->getNotificacionEntidad($idEntidad, $this->getUser()->getId())) {
            $repositoryN->getNotificacionEntidad($idEntidad, $this->getUser()->getId())[0]->setEstado("Leido");
            $this->getDoctrine()->getManager()->flush();
        }
    }
    private function isWeekend($dia, $mes, $vuelta) {
        $fecha = $dia . '-' . $mes . '-' . strval(date('Y') + $vuelta);
        $diaS = date('w', strtotime($fecha));
        return ($diaS == 0 || $diaS == 6 );
    }
}
