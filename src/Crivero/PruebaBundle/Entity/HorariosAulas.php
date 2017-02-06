<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HorariosAulas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\HorariosAulasRepository")
 */
class HorariosAulas
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
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=255)
     */
    private $periodo;

    /**
     * @var integer
     *
     * @ORM\Column(name="aula", type="integer")
     */
    private $aula;

    /**
     * @var integer
     *
     * @ORM\Column(name="monitor", type="integer", nullable=true)
     */
    private $monitor;

    /**
     * @var integer
     *
     * @ORM\Column(name="fechaInicio", type="integer")
     */
    private $fechaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaFinal", type="string", nullable=true)
     */
    private $fechaFinal;


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
     * Set estado
     *
     * @param string $estado
     * @return HorariosAulas
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
     * Set periodo
     *
     * @param string $periodo
     * @return HorariosAulas
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return string 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set aula
     *
     * @param integer $aula
     * @return HorariosAulas
     */
    public function setAula($aula)
    {
        $this->aula = $aula;

        return $this;
    }

    /**
     * Get aula
     *
     * @return integer 
     */
    public function getAula()
    {
        return $this->aula;
    }

    /**
     * Set monitor
     *
     * @param integer $monitor
     * @return HorariosAulas
     */
    public function setMonitor($monitor)
    {
        $this->monitor = $monitor;

        return $this;
    }

    /**
     * Get monitor
     *
     * @return integer 
     */
    public function getMonitor()
    {
        return $this->monitor;
    }

    /**
     * Set fechaInicio
     *
     * @param integer $fechaInicio
     * @return HorariosAulas
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return integer 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinal
     *
     * @param string $fechaFinal
     * @return HorariosAulas
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return string 
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }
}
