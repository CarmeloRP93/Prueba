<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partidos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\PartidosRepository")
 */
class Partidos
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
     * @ORM\Column(name="idEquipoLocal", type="integer")
     */
    private $idEquipoLocal;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEquipoVisitante", type="integer")
     */
    private $idEquipoVisitante;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCancha", type="integer")
     */
    private $idCancha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado", type="string", length=255)
     */
    private $resultado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCompeticion", type="integer")
     */
    private $idCompeticion;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoPartido", type="string", length=255)
     */
    private $estadoPartido;


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
     * Set idEquipoLocal
     *
     * @param integer $idEquipoLocal
     * @return Partidos
     */
    public function setIdEquipoLocal($idEquipoLocal)
    {
        $this->idEquipoLocal = $idEquipoLocal;

        return $this;
    }

    /**
     * Get idEquipoLocal
     *
     * @return integer 
     */
    public function getIdEquipoLocal()
    {
        return $this->idEquipoLocal;
    }

    /**
     * Set idEquipoVisitante
     *
     * @param integer $idEquipoVisitante
     * @return Partidos
     */
    public function setIdEquipoVisitante($idEquipoVisitante)
    {
        $this->idEquipoVisitante = $idEquipoVisitante;

        return $this;
    }

    /**
     * Get idEquipoVisitante
     *
     * @return integer 
     */
    public function getIdEquipoVisitante()
    {
        return $this->idEquipoVisitante;
    }

    /**
     * Set idCancha
     *
     * @param integer $idCancha
     * @return Partidos
     */
    public function setIdCancha($idCancha)
    {
        $this->idCancha = $idCancha;

        return $this;
    }

    /**
     * Get idCancha
     *
     * @return integer 
     */
    public function getIdCancha()
    {
        return $this->idCancha;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Partidos
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
     * Set resultado
     *
     * @param string $resultado
     * @return Partidos
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return string 
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set idCompeticion
     *
     * @param integer $idCompeticion
     * @return Partidos
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
     * Set estadoPartido
     *
     * @param string $estadoPartido
     * @return Partidos
     */
    public function setEstadoPartido($estadoPartido)
    {
        $this->estadoPartido = $estadoPartido;

        return $this;
    }

    /**
     * Get estadoPartido
     *
     * @return string 
     */
    public function getEstadoPartido()
    {
        return $this->estadoPartido;
    }
}
