<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PublicacionesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PublicacionesRepository extends EntityRepository {

    public function getPublicaciones() {
        return $this->getEntityManager()
                        ->createQuery("SELECT p FROM CriveroPruebaBundle:Publicaciones p")
                        ->getResult();
    }

}