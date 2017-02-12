<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * HorariosAulasRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HorariosAulasRepository extends EntityRepository {
    
    public function getDiaReserva($aula, $dia) {
        return $this->getEntityManager()
                    ->createQuery('SELECT h FROM CriveroPruebaBundle:HorariosAulas h WHERE h.aula = :aulaId AND h.fechaInicio = :dia')
                    ->setParameter('aulaId', $aula)
                    ->setParameter('dia', $dia)
                    ->getResult();
    }
}