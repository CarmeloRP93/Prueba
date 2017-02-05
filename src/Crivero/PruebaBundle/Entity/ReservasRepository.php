<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ReservasRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReservasRepository extends EntityRepository {
    
    public function getReservas() {
        return $this->getEntityManager()
            ->createQuery("SELECT r FROM CriveroPruebaBundle:Reservas r WHERE r.estadoReserva='Reservado'")
            ->getResult();
    }
}
