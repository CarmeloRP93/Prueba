<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Valoraciones
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\ValoracionesRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Valoraciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCliente", type="integer")
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCancha", type="integer")
     */
    private $idCancha;

    /**
     * @var integer
     *
     * @ORM\Column(name="puntuacion", type="integer")
     */
    private $puntuacion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCliente
     *
     * @param integer $idCliente
     * @return Valoraciones
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return integer 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idCancha
     *
     * @param integer $idCancha
     * @return Valoraciones
     */
    public function setIdCancha($idCancha)
    {
        $this->idCancha = $idCancha;

        return $this;
    }

    /**
     * Get idCancha
     *
     * @return integer 
     */
    public function getIdCancha()
    {
        return $this->idCancha;
    }

    /**
     * Set puntuacion
     *
     * @param integer $puntuacion
     * @return Valoraciones
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;

        return $this;
    }

    /**
     * Get puntuacion
     *
     * @return integer 
     */
    public function getPuntuacion()
    {
        return $this->puntuacion;
    }
}
