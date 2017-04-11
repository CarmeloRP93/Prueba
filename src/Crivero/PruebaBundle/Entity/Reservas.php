<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank()
     * @ORM\Column(name="idCliente", type="integer")
     */
    private $idCliente;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=255)
     */
    private $cliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCancha", type="integer")
     */
    private $idCancha;

      /**
     * @var string
     *
     * @ORM\Column(name="cancha", type="string", length=255)
     */
    private $cancha;
    
    /**
     * @var string
     *
     * @ORM\Column(name="estadoReserva", type="string", length=255)
     */
    private $estadoReserva;

    /**
     * @var Date
     *
     * @ORM\Column(name="fechaInicio", type="date")
     * @Assert\NotBlank()
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFinalizacion", type="datetime")
     */
    private $fechaFinalizacion;
    
    /**
     *
     * @var string
     * @ORM\Column(name="horario", type="string", length=255, nullable=true)
     *
     */
    private $horario;
    
    /**
     * @var string
     *
     * @ORM\Column(name="motivos", type="string", length=255, nullable=true)
     */
    private $motivos;

    public function __construct() {
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
     * Set cliente
     *
     * @param string $cliente
     * @return Reservas
     */
    public function setCliente($cliente) {
        $this->cliente = $cliente;
        return $this;
    }

    /**
     * Get horario
     *
     * @return string 
     */
    public function getHorario() {
        return $this->horario;
    }
    
    /**
     * Set horario
     *
     * @param string $horario
     * @return Reservas
     */
    public function setHorario($horario) {
        $this->horario = $horario;
        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente() {
        return $this->cliente;
    }
    
    /**
     * Set cancha
     *
     * @param string $cancha
     * @return Reservas
     */
    public function setCancha($cancha) {
        $this->cancha = $cancha;
        return $this;
    }

    /**
     * Get cancha
     *
     * @return string 
     */
    public function getCancha() {
        return $this->cancha;
    }
    
    /**
     * Set fechaInicio
     *
     * @param Date $fechaInicio
     * @return Reservas
     */
    public function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return Date 
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
    
    /**
     * Get motivos
     *
     * @return string 
     */
    public function getMotivos()
    {
        return $this->motivos;
    }
    
    /**
     * Set motivos
     *
     * @param string $motivos
     * @return Reservas
     */
    public function setMotivos($motivos)
    {
        $this->motivos = $motivos;

        return $this;
    }

    public function __toString() {
        return $this->idCancha;
    }

}
