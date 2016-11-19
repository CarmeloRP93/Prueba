<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sesiones
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\SesionesRepository")
 */
class Sesiones
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
     * @ORM\Column(name="monitor", type="string", length=200)
     */
    private $monitor;
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="ejercicios", type="string", length=255)
     */
    private $ejercicios;

    /**
     * @var string
     *
     * @ORM\Column(name="repeticiones", type="string", length=255)
     */
    private $repeticiones;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracion", type="integer")
     */
    private $duracion;
  
    /**
     * @var integer
     *
     * @ORM\Column(name="descanso", type="integer")
     */
    private $descanso;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=200)
     */
    private $estado;
    
    /**
     * @var string
     *
     * @ORM\Column(name="objetivo", type="string", length=255)
     */
    private $objetivo;


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
     * @param string $repeticiones
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
     * @return string 
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
}
