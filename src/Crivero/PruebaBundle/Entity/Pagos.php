<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Pagos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\PagosRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Pagos
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
     * @var \DateTime
     *
     * @ORM\Column(name="FechaPago", type="datetime")
     */
    private $fechaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoSuscripcion", type="string", length=255)
     */
    private $tipoSuscripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoPago", type="string", length=255)
     */
    private $tipoPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuantia", type="integer", nullable=true)
     */
    private $cuantia;


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
     * @return Pagos
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
     * @ORM\PrePersist
     */
    public function setFechaPago($fechaPago)
    {
        $this->fechaPago = new \DateTime();
    }

    /**
     * Get fechaPago
     *
     * @return \DateTime 
     */
    public function getFechaPago()
    {
        return $this->fechaPago;
    }

    /**
     * Set tipoSuscripcion
     *
     * @param string $tipoSuscripcion
     * @return Pagos
     */
    public function setTipoSuscripcion($tipoSuscripcion)
    {
        $this->tipoSuscripcion = $tipoSuscripcion;

        return $this;
    }

    /**
     * Get tipoSuscripcion
     *
     * @return string 
     */
    public function getTipoSuscripcion()
    {
        return $this->tipoSuscripcion;
    }

    /**
     * Set tipoPago
     *
     * @param string $tipoPago
     * @return Pagos
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;

        return $this;
    }

    /**
     * Get tipoPago
     *
     * @return string 
     */
    public function getTipoPago()
    {
        return $this->tipoPago;
    }

    /**
     * Set cuantia
     *
     * @param integer $cuantia
     * @return Pagos
     */
    public function setCuantia($cuantia)
    {
        $this->cuantia = $cuantia;

        return $this;
    }

    /**
     * Get cuantia
     *
     * @return integer 
     */
    public function getCuantia()
    {
        return $this->cuantia;
    }
}
