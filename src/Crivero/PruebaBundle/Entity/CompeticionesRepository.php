<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CompeticionesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CompeticionesRepository extends EntityRepository {

    public function getCompeticionesMostrables() {
        return $this->getEntityManager()
                        ->createQuery("SELECT c "
                                . "FROM CriveroPruebaBundle:Competiciones c "
                                . "WHERE c.estadocompeticion='Validado'"
                                . " OR c.estadocompeticion='Jugandose'"
                                . " OR c.estadocompeticion='Finalizada'"
                                . " OR c.estadocompeticion='Cancelada'")
                        ->getResult();
    }

}
