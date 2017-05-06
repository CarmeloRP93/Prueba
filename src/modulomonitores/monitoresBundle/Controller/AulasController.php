<?php

namespace modulomonitores\monitoresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AulasController extends Controller {
    
    
    public function sesionesAulaAction($id, Request $request) {
        $repositoryAulas = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aula = $repositoryAulas->find($id);

        $idsSesionesAula = explode('&', $aula->getSesiones());
        $repositorySesiones = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Sesiones");
       $contador = 0;
       $sesiones = array();
        for ($i = 0; $i < count($idsSesionesAula); $i++) {
            if ($repositorySesiones->find($idsSesionesAula[$i])->getIdMonitor() == $this->getUser()->getId()) {
                $searchQuery = $request->get('query');
                if (!empty($searchQuery)) {
                    if (strpos($repositorySesiones->find($idsSesionesAula[$i])->getNombre(), $searchQuery) !== false) {
                        $sesiones[$contador] = $repositorySesiones->find($idsSesionesAula[$i]);
                        $contador++;
                    } else {
                        continue;
                    }
                } else {
                    $sesiones[$contador] = $repositorySesiones->find($idsSesionesAula[$i]);
                    $contador++;
                }
            }
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($sesiones, $request->query->getInt('page', 1), 6);

        return $this->render('modulomonitoresmonitoresBundle:Aulas:sesionesAula.html.twig', array("pagination" => $pagination,
                    'nombre' => $aula->getNombre(), 'cId' => $id,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function listadoAulasAction(Request $request) {
        $this->changeStateNotification($request->get('id'));
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");

        $searchQuery = $request->get('query');
        (!empty($searchQuery)) ? $aulas = $repository->searchAulas($searchQuery) :
                        $aulas = $repository->getAulas();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $aulas, $request->query->getInt('page', 1), 5);

        return $this->render('modulomonitoresmonitoresBundle:Aulas:aulas.html.twig', array("pagination" => $pagination,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function verAulaAction($id) {
        $this->changeStateNotification($id);
        $repository = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas");
        $aula = $repository->find($id);
        return $this->render('modulomonitoresmonitoresBundle:Aulas:verAula.html.twig', array("aula" => $aula,
                    'notificacionesSinLeer' => $this->getNewNotification()));
    }

    public function disponibilidadMAction($id, Request $request) {
        $aula = $this->getDoctrine()->getRepository("CriveroPruebaBundle:Aulas")->find($id);
        $repositoryH = $this->getDoctrine()->getRepository("CriveroPruebaBundle:HorariosAulas");

        $mes = date('m');
        $cambio = false;
        $vuelta = 0;
        $cont = 1;
        for ($i = 1; $cont < 22; $i++) {
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
            if ($dia < 10)
                $dia = '0' . $dia;

            if ($this->isWeekend($dia, $mes, $vuelta))
                continue;

            $horarios[$cont - 1] = $repositoryH->getDiaReserva($id, $dia)[0];
            $cont++;
        }

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $horarios, $request->query->getInt('page', 1), 7);

        return $this->render('modulomonitoresmonitoresBundle:Aulas:disponibilidadM.html.twig', array("horarios" => $pagination,
                    'aula' => $aula, 'notificacionesSinLeer' => $this->getNewNotification()));
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
