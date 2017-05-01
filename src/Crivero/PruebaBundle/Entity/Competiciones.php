<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Competiciones
 *
 * @ORM\Table(name="competiciones")
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\CompeticionesRepository")
 */
class Competiciones
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="deporte", type="string", length=255, nullable=false)
     */
    private $deporte;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoCompeticion", type="string", length=255, nullable=false)
     */
    private $estadocompeticion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoCompeticion", type="string", length=255, nullable=false)
     */
    private $tipocompeticion;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaInicio", type="date", nullable=true)
     */
    private $fechainicio;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaFinalizacion", type="date", nullable=true)
     */
    private $fechafinalizacion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="motivos", type="string", length=255, nullable=true)
     */
    private $motivos;

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
     * @return Competiciones
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
     * @return Competiciones
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
     * Set estadocompeticion
     *
     * @param string $estadocompeticion
     * @return Competiciones
     */
    public function setEstadocompeticion($estadocompeticion)
    {
        $this->estadocompeticion = $estadocompeticion;

        return $this;
    }

    /**
     * Get estadocompeticion
     *
     * @return string 
     */
    public function getEstadocompeticion()
    {
        return $this->estadocompeticion;
    }

    /**
     * Set tipocompeticion
     *
     * @param string $tipocompeticion
     * @return Competiciones
     */
    public function setTipocompeticion($tipocompeticion)
    {
        $this->tipocompeticion = $tipocompeticion;

        return $this;
    }

    /**
     * Get tipocompeticion
     *
     * @return string 
     */
    public function getTipocompeticion()
    {
        return $this->tipocompeticion;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Competiciones
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
     * @return Competiciones
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
    
    /**
     * Get motivos
     *
     * @return string 
     */
    public function getMotivos() {
        return $this->motivos;
    }
    
    /**
     * Set motivos
     *
     * @param string $motivos
     * @return Competiciones
     */
    public function setMotivos($motivos) {
        $this->motivos = $motivos;
        return $this;
    }
}
