<?php

namespace Crivero\PruebaBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Jugadores
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\JugadoresRepository")
 */
class Jugadores {

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
     * @ORM\Column(name="idEquipo", type="integer")
     */
    private $idEquipo;

    /**
     * @var string
     * 
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     * @Assert\NotBlank(
     *          message="Elija un nombre de usuario del listado o añadalo manualmente")
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var integer
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     * @ORM\Column(name="dorsal", type="integer", nullable=true)
     */
    private $dorsal;

    /**
     * @var string
     *
     * @ORM\Column(name="incidencia", type="string", length=255)
     */
    private $incidencia;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255, nullable=true)
     */
    private $imagen;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idEquipo
     *
     * @param integer $idEquipo
     * @return Jugadores
     */
    public function setIdEquipo($idEquipo) {
        $this->idEquipo = $idEquipo;

        return $this;
    }

    /**
     * Get idEquipo
     *
     * @return integer 
     */
    public function getIdEquipo() {
        return $this->idEquipo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Jugadores
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set dorsal
     *
     * @param integer $dorsal
     * @return Jugadores
     */
    public function setDorsal($dorsal) {
        $this->dorsal = $dorsal;

        return $this;
    }

    /**
     * Get dorsal
     *
     * @return integer 
     */
    public function getDorsal() {
        return $this->dorsal;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Jugadores
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }
    
    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set incidencia
     *
     * @param string $incidencia
     * @return Jugadores
     */
    public function setIncidencia($incidencia) {
        $this->incidencia = $incidencia;

        return $this;
    }

    /**
     * Get incidencia
     *
     * @return string 
     */
    public function getIncidencia() {
        return $this->incidencia;
    }
    
    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Jugadores
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

}
