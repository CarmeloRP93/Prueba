<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipos
 *
 * @ORM\Table(name="equipos")
 * @ORM\Entity
 */
class Equipos
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
     * @ORM\Column(name="idCompeticion", type="integer", nullable=false)
     */
    private $idCompeticion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="deporte", type="string", length=255, nullable=false)
     */
    private $deporte;

    /**
     * @var integer
     *
     * @ORM\Column(name="victorias", type="integer", nullable=false)
     */
    private $victorias;

    /**
     * @var integer
     *
     * @ORM\Column(name="empates", type="integer", nullable=false)
     */
    private $empates;

    /**
     * @var integer
     *
     * @ORM\Column(name="derrotas", type="integer", nullable=false)
     */
    private $derrotas;

    /**
     * @var integer
     *
     * @ORM\Column(name="clasificacion", type="integer", nullable=false)
     */
    private $clasificacion;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="puntuacion", type="integer", nullable=false)
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
     * Set idCompeticion
     *
     * @param integer $idCompeticion
     * @return Equipos
     */
    public function setIdCompeticion($idCompeticion)
    {
        $this->idCompeticion = $idCompeticion;

        return $this;
    }

    /**
     * Get idCompeticion
     *
     * @return integer 
     */
    public function getIdCompeticion()
    {
        return $this->idCompeticion;
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
