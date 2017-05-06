<?php

namespace Crivero\PruebaBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Publicaciones
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\PublicacionesRepository")
 */
class Publicaciones
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
     * @ORM\Column(name="titulo", type="string", length=100)
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255)
     * @Assert\NotBlank(
     *          message="Seleccione una imagen.")
     */
    private $imagen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFinalizacion", type="date")
     * @Assert\NotBlank(
     *          message="Elija una fecha.")
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
     * Set titulo
     *
     * @param string $titulo
     * @return Publicaciones
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Publicaciones
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
     * Set fechaFinalizacion
     *
     * @param \DateTime $fechaFinalizacion
     * @return Publicaciones
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
}
