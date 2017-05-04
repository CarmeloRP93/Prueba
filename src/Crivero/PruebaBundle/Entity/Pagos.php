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
     * @ORM\Column(name="fechaPago", type="datetime")
     */
    private $fechaPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="idConcepto", type="integer")
     */
    private $idConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=255)
     */
    private $concepto;

     /**
     * @var float
     *
     * @ORM\Column(name="cuantia", type="float", nullable=false)
     * 
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
     * Set idConcepto
     *
     * @param integer $idConcepto
     * @return Pagos
     */
    public function setIdConcepto($idConcepto)
    {
        $this->idConcepto = $idConcepto;

        return $this;
    }

    /**
     * Get idConcepto
     *
     * @return integer 
     */
    public function getIdConcepto()
    {
        return $this->idConcepto;
    }
    
    /**
     * Set concepto
     *
     * @param string $concepto
     * @return Pagos
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string 
     */
    public function getConcepto()
    {
        return $this->concepto;
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
