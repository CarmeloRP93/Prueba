<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Torneos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\TorneosRepository")
 */
class Torneos
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="deporte", type="string", length=255)
     */
    private $deporte;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoTorneo", type="string", length=255)
     */
    private $estadoTorneo;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Torneos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set deporte
     *
     * @param string $deporte
     * @return Torneos
     */
    public function setDeporte($deporte)
    {
        $this->deporte = $deporte;

        return $this;
    }

    /**
     * Get deporte
     *
     * @return string 
     */
    public function getDeporte()
    {
        return $this->deporte;
    }

    /**
     * Set estadoTorneo
     *
     * @param string $estadoTorneo
     * @return Torneos
     */
    public function setEstadoTorneo($estadoTorneo)
    {
        $this->estadoTorneo = $estadoTorneo;

        return $this;
    }

    /**
     * Get estadoTorneo
     *
     * @return string 
     */
    public function getEstadoTorneo()
    {
        return $this->estadoTorneo;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Torneos
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinalizacion
     *
     * @param \DateTime $fechaFinalizacion
     * @return Torneos
     */
    public function setFechaFinalizacion($fechaFinalizacion)
    {
        $this->fechaFinalizacion = $fechaFinalizacion;

        return $this;
    }

    /**
     * Get fechaFinalizacion
     *
     * @return \DateTime 
     */
    public function getFechaFinalizacion()
    {
        return $this->fechaFinalizacion;
    }

    /**
     * Set torneos
     *
     * @param string $torneos
     * @return Torneos
     */
    public function setTorneos($torneos)
    {
        $this->torneos = $torneos;
 
        return $this;
    }
 
    /**
     * Get torneos
     *
     * @return string 
     */
    public function getTorneos()
    {
        return $this->torneos;
    }

}
