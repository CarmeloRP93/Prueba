<?php
 
namespace Crivero\PruebaBundle\Entity;
 
use Doctrine\ORM\EntityRepository;
 
/**
 * UsuariosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsuariosRepository extends EntityRepository
{
    public function getClientes(){
        return $this->getEntityManager()
            ->createQuery('SELECT u FROM CriveroPruebaBundle:Usuarios u WHERE u.tipo=2')
            ->getResult();
    }
    
    public function getMonitores(){
        return $this->getEntityManager()
            ->createQuery('SELECT u FROM CriveroPruebaBundle:Usuarios u WHERE u.tipo=3')
            ->getResult();
    }
    
    public function recuperarPass($id){
        return $this->getEntityManager()
        ->createQuery('SELECT u.password FROM CriveroPruebaBundle:Usuarios u WHERE u.id = :id')
        ->setParameter('id', $id)
        ->getResult();
    }
}