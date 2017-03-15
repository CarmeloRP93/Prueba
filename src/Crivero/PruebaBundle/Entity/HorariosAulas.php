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
     * @ORM\Column(name="fechaInicio", type="integer")
     */
    private $fechaInicio;



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
}
