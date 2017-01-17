<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservas
 *
 * @ORM\Table(name="reservas")
 * @ORM\Entity
 */
class Reservas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCliente", type="integer", nullable=false)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCancha", type="integer", nullable=false)
     */
    private $idcancha;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoReserva", type="string", length=255, nullable=false)
     */
    private $estadoreserva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime", nullable=false)
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFinalizacion", type="datetime", nullable=false)
     */
    private $fechafinalizacion;



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
     * Set idcliente
     *
     * @param integer $idcliente
     * @return Reservas
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idcancha
     *
     * @param integer $idcancha
     * @return Reservas
     */
    public function setIdcancha($idcancha)
    {
        $this->idcancha = $idcancha;

        return $this;
    }

    /**
     * Get idcancha
     *
     * @return integer 
     */
    public function getIdcancha()
    {
        return $this->idcancha;
    }

    /**
     * Set estadoreserva
     *
     * @param string $estadoreserva
     * @return Reservas
     */
    public function setEstadoreserva($estadoreserva)
    {
        $this->estadoreserva = $estadoreserva;

        return $this;
    }

    /**
     * Get estadoreserva
     *
     * @return string 
     */
    public function getEstadoreserva()
    {
        return $this->estadoreserva;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Reservas
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafinalizacion
     *
     * @param \DateTime $fechafinalizacion
     * @return Reservas
     */
    public function setFechafinalizacion($fechafinalizacion)
    {
        $this->fechafinalizacion = $fechafinalizacion;

        return $this;
    }

    /**
     * Get fechafinalizacion
     *
     * @return \DateTime 
     */
    public function getFechafinalizacion()
    {
        return $this->fechafinalizacion;
    }
}
