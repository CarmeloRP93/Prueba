<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Aulas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\AulasRepository")
 * @UniqueEntity(fields={"nombre"},
 *               message="Ya existe un aula con este nombre.")
 * @ORM\HasLifecycleCallbacks
 */
class Aulas
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
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotBlank(
     *         message="Rellene el campo.")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="horario", type="string", length=255)
     */
    private $horario;

    /**
     * @var string
     *
     * @ORM\Column(name="disponibilidad", type="string", length=255)
     */
    private $disponibilidad;
    
    /**
     * @var string
     *
     * @ORM\Column(name="sesiones", type="string", length=1000, nullable=true)
     */
    private $sesiones;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255, nullable=false)
     */
    private $imagen;
    
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
     * @return Aulas
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
     * Set horario
     *
     * @param string $horario
     * @return Aulas
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string 
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set disponibilidad
     *
     * @param string $disponibilidad
     * @return Aulas
     */
    public function setDisponibilidad($disponibilidad)
    {
        $this->disponibilidad = $disponibilidad;

        return $this;
    }

    /**
     * Get disponibilidad
     *
     * @return string 
     */
    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }
    
    /**
     * Set sesiones
     *
     * @param string $sesiones
     * @return Aulas
     */
    public function setSesiones($sesiones)
    {
        $this->sesiones = $sesiones;
 
        return $this;
    }
 
    /**
     * Get sesiones
     *
     * @return string 
     */
    public function getSesiones()
    {
        return $this->sesiones;
    }
    
    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Aulas
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
}
