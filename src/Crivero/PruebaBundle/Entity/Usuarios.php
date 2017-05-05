<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Usuarios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\UsuariosRepository")
 * @UniqueEntity(fields={"username"},
 *               message="Ya existe un usuario con este nombre.")
 * @UniqueEntity(fields={"email"},
 *               message="Este email ya esta en uso.")
 * @ORM\HasLifecycleCallbacks()
 */
class Usuarios implements AdvancedUserInterface, \Serializable {

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
     * @ORM\Column(name="username", type="string", length=200, unique=true)
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200)
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, unique=true)
     * @Assert\NotBlank(
     *         message="Rellene el campo.")
     * @Assert\Email(
     *          message="Introduzca un email válido.")
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer")
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     * @Assert\Choice(choices = {1, 2, 3})
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=200)
     * @Assert\NotBlank(
     *         message="Rellene el campo.")
     * @Assert\Regex(
     *     pattern="/^(\d{3})[-]?(\d{2})[-]?(\d{2})[-]?(\d{2})$/",
     *     message="Introduzca un teléfono válido."
     * )
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fNacimiento", type="string", length=200)
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     * @Assert\Regex(
     *     pattern="/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/",
     *     message="Introduzca una fecha válida."
     * )
     */
    private $fNacimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro", type="datetime")
     */
    private $registro;

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
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;
    
    /**
     * Set fNacimiento
     *
     * @param string $fNacimiento
     * @return Usuarios
     */
    public function setFNacimiento($fNacimiento) {
        $this->fNacimiento = $fNacimiento;

        return $this;
    }

    /**
     * Get fNacimiento
     *
     * @return string 
     */
    public function getFNacimiento() {
        return $this->fNacimiento;
    }

    /**
     * @ORM\PrePersist
     */
    public function setRegistro() {
        $this->registro = new \DateTime();
    }

    /**
     * Get registro
     *
     * @return \DateTime 
     */
    public function getRegistro() {
        return $this->registro;
    }

    /**
     * Set sesiones
     *
     * @param string $sesiones
     * @return Usuarios
     */
    public function setSesiones($sesiones) {
        $this->sesiones = $sesiones;

        return $this;
    }

    /**
     * Get sesiones
     *
     * @return string 
     */
    public function getSesiones() {
        return $this->sesiones;
    }
    
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuarios
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
     * Set password
     *
     * @param string $password
     * @return Usuarios
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuarios
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Usuarios
     */
    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo() {
        return $this->tipo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuarios
     */
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono() {
        return $this->telefono;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Usuarios
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
     * Set activo
     *
     * @param boolean $activo
     * @return Usuarios
     */
    public function setActivo($activo) {
        $this->activo = $activo;
        return $this;
    }
    
    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo() {
        return $this->activo;
    }
    
    public function eraseCredentials() {
        
    }

    public function getRoles() {
        if ($this->getTipo() == 1) {
            return array('ROLE_ADMIN');
        } else if ($this->getTipo() == 2) {
            return array('ROLE_CLIENTE');
        } else {
            return array('ROLE_MONITOR');
        }
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Usuarios
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    public function getSalt() {
        return null;
    }

    public function getUsername() {
        return $this->username;
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isEnabled() {
        return $this->activo;
    }

    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password
        ));
    }

    /* @see \Serializable::unserialize() */

    public function unserialize($serialized) {
        list (
                $this->id,
                $this->username,
                $this->password
                ) = unserialize($serialized);
    }

}
