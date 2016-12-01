<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\EquiposRepository")
 */
class Equipos
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
     * @ORM\Column(name="idTorneo", type="integer")
     */
    private $idTorneo;

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
     * @var integer
     *
     * @ORM\Column(name="victorias", type="integer")
     */
    private $victorias;

    /**
     * @var integer
     *
     * @ORM\Column(name="empates", type="integer")
     */
    private $empates;

    /**
     * @var integer
     *
     * @ORM\Column(name="derrotas", type="integer")
     */
    private $derrotas;

    /**
     * @var integer
     *
     * @ORM\Column(name="clasificacion", type="integer")
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="miembros", type="string", length=255, nullable=true)
     */
    private $miembros;

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
     * Set idTorneo
     *
     * @param integer $idTorneo
     * @return Equipos
     */
    public function setIdTorneo($idTorneo)
    {
        $this->idTorneo = $idTorneo;

        return $this;
    }

    /**
     * Get idTorneo
     *
     * @return integer 
     */
    public function getIdTorneo()
    {
        return $this->idTorneo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Equipos
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
     * @return Equipos
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
     * Set victorias
     *
     * @param integer $victorias
     * @return Equipos
     */
    public function setVictorias($victorias)
    {
        $this->victorias = $victorias;

        return $this;
    }

    /**
     * Get victorias
     *
     * @return integer 
     */
    public function getVictorias()
    {
        return $this->victorias;
    }

    /**
     * Set empates
     *
     * @param integer $empates
     * @return Equipos
     */
    public function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }

    /**
     * Get empates
     *
     * @return integer 
     */
    public function getEmpates()
    {
        return $this->empates;
    }

    /**
     * Set derrotas
     *
     * @param integer $derrotas
     * @return Equipos
     */
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    /**
     * Get derrotas
     *
     * @return integer 
     */
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return Equipos
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return integer 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set equipos
     *
     * @param string $equipos
     * @return Equipos
     */
    public function setEquipos($equipos)
    {
        $this->equipos = $equipos;
 
        return $this;
    }
 
    /**
     * Get equipos
     *
     * @return string 
     */
    public function getEquipos()
    {
        return $this->equipos;
    }
    /**
     * Set miembros
     *
     * @param string $miembros
     * @return Equipos
     */
    public function setMiembros($miembros)
    {
        $this->miembros = $miembros;
 
        return $this;
    }
 
    /**
     * Get miembros
     *
     * @return string 
     */
    public function getMiembros()
    {
        return $this->miembros;
    }
    /**
     * Set puntuacion
     *
     * @param integer $puntuacion
     * @return Equipos
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