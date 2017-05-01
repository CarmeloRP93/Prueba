<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SesionesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SesionesRepository extends EntityRepository {

    public function getSesionesGenerales() {
        return $this->getEntityManager()
                        ->createQuery("SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.cliente='normal'")
                        ->getResult();
    }

    public function getSesionesGeneralesMostrables() {
        return $this->getEntityManager()
                        ->createQuery("SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.cliente='normal' AND s.estadoCliente!='no disponible'")
                        ->getResult();
    }

    public function getSesionesDedicadas() {
        return $this->getEntityManager()
                        ->createQuery("SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.cliente!='normal'")
                        ->getResult();
    }

    public function getSesionesClientesDedicadas($id) {
        return $this->getEntityManager()
                        ->createQuery("SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.cliente!='normal' "
                                . "AND s.estadoCliente!='no disponible' "
                                . "AND s.idsClientes != :id ")
                        ->setParameter('id', $id)
                        ->getResult();
    }

    public function getSesionesMonitor($id) {
        return $this->getEntityManager()
                        ->createQuery("SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.idMonitor = :monitor ")
                        ->setParameter('monitor', $id)
                        ->getResult();
    }

    public function searchSesiones($searchQuery, $id) {
        return $this->getEntityManager()
                        ->createQuery("SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.idMonitor = :id AND s.cliente = 'normal' AND (s.nombre = :nombre)")
                        ->setParameter('id', $id)
                        ->setParameter('nombre', $searchQuery)
                        ->getResult();
    }

    public function searchSesionesDedicadas($searchQuery, $id) {
        return $this->getEntityManager()
                        ->createQuery("SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.idMonitor = :id AND s.cliente != 'normal' AND (s.nombre = :nombre)")
                        ->setParameter('id', $id)
                        ->setParameter('nombre', $searchQuery)
                        ->getResult();
    }

    public function searchSesionesTotales($searchQuery) {
        return $this->getEntityManager()
                        ->createQuery("SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.estado = 'validada' AND s.cliente = 'normal' AND (s.nombre = :nombre)")
                        ->setParameter('nombre', $searchQuery)
                        ->getResult();
    }

    public function searchSesionesDedicadasTotales($searchQuery) {
        return $this->getEntityManager()
                        ->createQuery("SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.estado = 'validada' AND s.cliente != 'normal' AND (s.nombre = :nombre)")
                        ->setParameter('nombre', $searchQuery)
                        ->getResult();
    }

    public function searchSesionesGeneralesByAdmin($searchQuery) {
        return $this->getEntityManager()
                        ->createQuery("SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.cliente = 'normal' AND (s.nombre = :nombre OR s.monitor = :monitor)")
                        ->setParameter('nombre', $searchQuery)
                        ->setParameter('monitor', $searchQuery)
                        ->getResult();
    }

    public function searchSesionesDedicadasByAdmin($searchQuery) {
        return $this->getEntityManager()
                        ->createQuery("SELECT s FROM CriveroPruebaBundle:Sesiones s WHERE s.cliente != 'normal' AND (s.nombre = :nombre OR s.monitor = :monitor OR s.cliente = :cliente)")
                        ->setParameter('nombre', $searchQuery)
                        ->setParameter('monitor', $searchQuery)
                        ->setParameter('cliente', $searchQuery)
                        ->getResult();
    }

}
