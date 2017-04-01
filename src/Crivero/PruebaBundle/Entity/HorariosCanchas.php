<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HorariosCanchas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\HorariosCanchasRepository")
 */
class HorariosCanchas
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
     * @ORM\Column(name="cancha", type="integer")
     */
    private $cancha;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaInicio", type="string", length=255)
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
     * @return HorariosCanchas
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
     * Set cancha
     *
     * @param integer $cancha
     * @return HorariosCanchas
     */
    public function setCancha($cancha)
    {
        $this->cancha = $cancha;

        return $this;
    }

    /**
     * Get cancha
     *
     * @return integer 
     */
    public function getCancha()
    {
        return $this->cancha;
    }

    /**
     * Set fechaInicio
     *
     * @param string $fechaInicio
     * @return HorariosCanchas
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return string 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }
}
