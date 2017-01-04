<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\ReservasRepository")
 */
class Reservas {

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
     * @var string
     *
     * @ORM\Column(name="estadoReserva", type="string", length=255)
     */
    private $estadoReserva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFinalizacion", type="datetime")
     */
    private $fechaFinalizacion;

    public function __construct() {
        $this->fechaInicio = new \DateTime();
        //$this->fechaInicio->format(("Y-m-d")." HH:30");
        $this->fechaFinalizacion = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get idCliente
     *
     * @return integer 
     */
    public function getIdCliente() {
        return $this->idCliente;
    }

    /**
     * Get idCancha
     *
     * @return integer 
     */
    public function getIdCancha() {
        return $this->idCancha;
    }

    /**
     * Set idCliente
     *
     * @param integer $idCliente
     * @return Reservas
     */
    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Set idCancha
     *
     * @param integer $idCancha
     * @return Reservas
     */
    public function setIdCancha($idCancha) {
        $this->idCancha = $idCancha;

        return $this;
    }

    /**
     * Set estadoReserva
     *
     * @param string $estadoReserva
     * @return Reservas
     */
    public function setEstadoReserva($estadoReserva) {
        $this->estadoReserva = $estadoReserva;

        return $this;
    }

    /**
     * Get estadoReserva
     *
     * @return string 
     */
    public function getEstadoReserva() {
        return $this->estadoReserva;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Reservas
     */
    public function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio() {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinalizacion
     *
     * @param \DateTime $fechaFinalizacion
     * @return Reservas
     */
    public function setFechaFinalizacion($fechaFinalizacion) {
        $this->fechaFinalizacion = $fechaFinalizacion;

        return $this;
    }

    /**
     * Get fechaFinalizacion
     *
     * @return \DateTime 
     */
    public function getFechaFinalizacion() {
        return $this->fechaFinalizacion;
    }

    public function __toString() {
        return $this->idCancha;
    }

}
