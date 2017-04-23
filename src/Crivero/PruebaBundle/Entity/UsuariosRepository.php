<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UsuariosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsuariosRepository extends EntityRepository {

    public function getClientes() {
        return $this->getEntityManager()
                        ->createQueryBuilder()->select('u')
                        ->from('CriveroPruebaBundle:Usuarios', 'u')
                        ->where('u.tipo=2')
                        ->getQuery();
    }

    public function searchClientes($searchQuery) {
        return $this->getEntityManager()
                        ->createQuery('SELECT u FROM CriveroPruebaBundle:Usuarios u WHERE u.tipo=2 AND u.username = :user OR u.nombre = :nombre')
                        ->setParameter('user', $searchQuery)
                        ->setParameter('nombre', $searchQuery)
                        ->getResult();
    }

    public function getMonitores() {
        return $this->getEntityManager()
                        ->createQueryBuilder()->select('u')
                        ->from('CriveroPruebaBundle:Usuarios', 'u')
                        ->where('u.tipo=3')
                        ->getQuery();
    }

    public function searchMonitores($searchQuery) {
        return $this->getEntityManager()
                        ->createQuery('SELECT u FROM CriveroPruebaBundle:Usuarios u WHERE u.tipo=3 AND u.username = :user OR u.nombre = :nombre')
                        ->setParameter('user', $searchQuery)
                        ->setParameter('nombre', $searchQuery)
                        ->getResult();
    }

    public function recuperarPass($id) {
        return $this->getEntityManager()
                        ->createQuery('SELECT u.password FROM CriveroPruebaBundle:Usuarios u WHERE u.id = :id')
                        ->setParameter('id', $id)
                        ->getResult();
    }

    public function getDestinatario($email) {
        return $this->getEntityManager()
                        ->createQuery("SELECT u FROM CriveroPruebaBundle:Usuarios u WHERE u.email = :email")
                        ->setParameter('email', $email)
                        ->getResult();
    }

    public function getAdmin() {
        return $this->getEntityManager()
                        ->createQuery('SELECT u FROM CriveroPruebaBundle:Usuarios u WHERE u.tipo=1')
                        ->getResult();
    }

}
