<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Canchas
 *
 * @ORM\Table(name="canchas")
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\CanchasRepository")
 * @UniqueEntity(fields={"tipo"}, 
 *               message="Ya existe una cancha con este nombre.")
 * @ORM\HasLifecycleCallbacks
 */
class Canchas {

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
     * @ORM\Column(name="tipo", type="string", length=200, nullable=false)
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     */
    private $tipo;

    /**
     * @var string
     * @ORM\Column(name="horario", type="string", length=200, nullable=false)
     */
    private $horario;

    /**
     * @var float
     *
     * @ORM\Column(name="valoracion", type="float", precision=10, scale=0, nullable=false)
     */
    private $valoracion;

    /**
     * @var string
     *
     * @ORM\Column(name="disponibilidad", type="string", length=200, nullable=false)
     */
    private $disponibilidad;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255, nullable=false)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="deporte", type="string", length=200, nullable=false)
     */
    private $deporte;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=200, nullable=false)
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="dimensiones", type="string", length=200, nullable=false)
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     */
    private $dimensiones;
    
    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", nullable=false)
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     * @Assert\Regex(
     *     pattern="/^[0-9]+((\.[0-9]{1,2})?)$/",
     *     message="Introduzca un precio válido.")
     * 
     */
    private $precio;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Canchas
     */
    public function setTipo($tipo) {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo() {
        return $this->tipo;
    }

    /**
     * Set horario
     *
     * @param string $horario
     * @return Canchas
     */
    public function setHorario($horario) {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string 
     */
    public function getHorario() {
        return $this->horario;
    }

    /**
     * Set valoracion
     *
     * @param float $valoracion
     * @return Canchas
     */
    public function setValoracion($valoracion) {
        $this->valoracion = $valoracion;

        return $this;
    }

    /**
     * Get valoracion
     *
     * @return float 
     */
    public function getValoracion() {
        return $this->valoracion;
    }

    /**
     * Set disponibilidad
     *
     * @param string $disponibilidad
     * @return Canchas
     */
    public function setDisponibilidad($disponibilidad) {
        $this->disponibilidad = $disponibilidad;

        return $this;
    }

    /**
     * Get disponibilidad
     *
     * @return string 
     */
    public function getDisponibilidad() {
        return $this->disponibilidad;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Canchas
     */
    public function setImagen($imagen) {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen() {
        return $this->imagen;
    }

    /**
     * Set deporte
     *
     * @param string $deporte
     * @return Canchas
     */
    public function setDeporte($deporte) {
        $this->deporte = $deporte;

        return $this;
    }

    /**
     * Get deporte
     *
     * @return string 
     */
    public function getDeporte() {
        return $this->deporte;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Canchas
     */
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion() {
        return $this->direccion;
    }

    /**
     * Set dimensiones
     *
     * @param string $dimensiones
     * @return Canchas
     */
    public function setDimensiones($dimensiones) {
        $this->dimensiones = $dimensiones;
        return $this;
    }

    /**
     * Get dimensiones
     *
     * @return string 
     */
    public function getDimensiones() {
        return $this->dimensiones;
    }
    
    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio() {
        return $this->precio;
    }
    
    /**
     * Set precio
     *
     * @param float $precio
     * @return Canchas
     */
    public function setPrecio($precio) {
        $this->precio = $precio;
        return $this;
    }

}
