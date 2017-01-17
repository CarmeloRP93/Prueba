<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sesiones
 *
 * @ORM\Table(name="sesiones")
 * @ORM\Entity
 */
class Sesiones
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
     * @var string
     *
     * @ORM\Column(name="monitor", type="string", length=200, nullable=false)
     */
    private $monitor;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=200, nullable=false)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255, nullable=false)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="ejercicios", type="string", length=255, nullable=false)
     */
    private $ejercicios;

    /**
     * @var integer
     *
     * @ORM\Column(name="repeticiones", type="integer", nullable=false)
     */
    private $repeticiones;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracion", type="integer", nullable=false)
     */
    private $duracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="descanso", type="integer", nullable=false)
     */
    private $descanso;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=200, nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoCliente", type="string", length=200, nullable=false)
     */
    private $estadocliente;

    /**
     * @var string
     *
     * @ORM\Column(name="objetivo", type="string", length=255, nullable=false)
     */
    private $objetivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nClientes", type="integer", nullable=false)
     */
    private $nclientes;

    /**
     * @var integer
     *
     * @ORM\Column(name="lClientes", type="integer", nullable=false)
     */
    private $lclientes;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;



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
     * Set monitor
     *
     * @param string $monitor
     * @return Sesiones
     */
    public function setMonitor($monitor)
    {
        $this->monitor = $monitor;

        return $this;
    }

    /**
     * Get monitor
     *
     * @return string 
     */
    public function getMonitor()
    {
        return $this->monitor;
    }

    /**
     * Set cliente
     *
     * @param string $cliente
     * @return Sesiones
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Sesiones
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
     * Set imagen
     *
     * @param string $imagen
     * @return Sesiones
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set ejercicios
     *
     * @param string $ejercicios
     * @return Sesiones
     */
    public function setEjercicios($ejercicios)
    {
        $this->ejercicios = $ejercicios;

        return $this;
    }

    /**
     * Get ejercicios
     *
     * @return string 
     */
    public function getEjercicios()
    {
        return $this->ejercicios;
    }

    /**
     * Set repeticiones
     *
     * @param integer $repeticiones
     * @return Sesiones
     */
    public function setRepeticiones($repeticiones)
    {
        $this->repeticiones = $repeticiones;

        return $this;
    }

    /**
     * Get repeticiones
     *
     * @return integer 
     */
    public function getRepeticiones()
    {
        return $this->repeticiones;
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     * @return Sesiones
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return integer 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set descanso
     *
     * @param integer $descanso
     * @return Sesiones
     */
    public function setDescanso($descanso)
    {
        $this->descanso = $descanso;

        return $this;
    }

    /**
     * Get descanso
     *
     * @return integer 
     */
    public function getDescanso()
    {
        return $this->descanso;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Sesiones
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set estadocliente
     *
     * @param string $estadocliente
     * @return Sesiones
     */
    public function setEstadocliente($estadocliente)
    {
        $this->estadocliente = $estadocliente;

        return $this;
    }

    /**
     * Get estadocliente
     *
     * @return string 
     */
    public function getEstadocliente()
    {
        return $this->estadocliente;
    }

    /**
     * Set objetivo
     *
     * @param string $objetivo
     * @return Sesiones
     */
    public function setObjetivo($objetivo)
    {
        $this->objetivo = $objetivo;

        return $this;
    }

    /**
     * Get objetivo
     *
     * @return string 
     */
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * Set nclientes
     *
     * @param integer $nclientes
     * @return Sesiones
     */
    public function setNclientes($nclientes)
    {
        $this->nclientes = $nclientes;

        return $this;
    }

    /**
     * Get nclientes
     *
     * @return integer 
     */
    public function getNclientes()
    {
        return $this->nclientes;
    }

    /**
     * Set lclientes
     *
     * @param integer $lclientes
     * @return Sesiones
     */
    public function setLclientes($lclientes)
    {
        $this->lclientes = $lclientes;

        return $this;
    }

    /**
     * Get lclientes
     *
     * @return integer 
     */
    public function getLclientes()
    {
        return $this->lclientes;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Sesiones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}
