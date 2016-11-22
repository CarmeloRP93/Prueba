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
 * @UniqueEntity("nombre")
 * @UniqueEntity("email")
 * @ORM\HasLifecycleCallbacks()
 */

class Usuarios implements AdvancedUserInterface, \Serializable
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
     * @ORM\Column(name="sexo", type="string", length=200)
     */
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200)
     * @Assert\NotBlank()
     */
    private $nombre;
 
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $password;
    
     /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", columnDefinition="ENUM('ROLE_ADMIN', 'ROLE_USER')", length=50)
     * @Assert\NotBlank()
     * @Assert\Choice(choices = {"ROLE_ADMIN", "ROLE_USER"})
     */
    private $role;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer")
     * @Assert\NotBlank()
     * @Assert\Choice(choices = {1, 2, 3})
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=200)
     * @Assert\NotBlank()
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fNacimiento", type="string", length=200)
     * @Assert\NotBlank()
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
     * @ORM\Column(name="reservas", type="string", length=255, nullable=true)
     */
    private $reservas;
 
    /**
     * @var string
     *
     * @ORM\Column(name="sesiones", type="string", length=255, nullable=true)
     */
    private $sesiones;
 
    /**
     * Set fNacimiento
     *
     * @param string $fNacimiento
     * @return Usuarios
     */
    public function setFNacimiento($fNacimiento)
    {
        $this->fNacimiento = $fNacimiento;
 
        return $this;
    }
 
    /**
     * Get fNacimiento
     *
     * @return string 
     */
    public function getFNacimiento()
    {
        return $this->fNacimiento;
    }
 
    /**
     * @ORM\PrePersist
     */
    public function setRegistro()
    {
        $this->registro = new \DateTime();
    }
 
    /**
     * Get registro
     *
     * @return \DateTime 
     */
    public function getRegistro()
    {
        return $this->registro;
    }
 
    /**
     * Set reservas
     *
     * @param string $reservas
     * @return Usuarios
     */
    public function setReservas($reservas)
    {
        $this->reservas = $reservas;
 
        return $this;
    }
 
    /**
     * Get reservas
     *
     * @return string 
     */
    public function getReservas()
    {
        return $this->reservas;
    }
 
    /**
     * Set sesiones
     *
     * @param string $sesiones
     * @return Usuarios
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
   
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuarios
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
     * Set password
     *
     * @param string $password
     * @return Usuarios
     */
    public function setPassword($password)
    {
        $this->password= $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Usuarios
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
     * Set email
     *
     * @param string $email
     * @return Usuarios
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Usuarios
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuarios
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    public function eraseCredentials() {
        
    }

    public function getRoles() {
        return array($this->role);
    }

    public function getSalt() {
        return null;
    }

    public function getUsername() {
        
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        
    }

    public function serialize() {
         return serialize(array(
            $this->id,
            $this->email,
            $this->password,
        ));
    }
    
    /**
     * Set role
     *
     * @param string $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }
    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }    

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized) {
         list (
            $this->id,
            $this->email,
            $this->password,
        ) = unserialize($serialized);
    }
    
    public function isAccountNonLocked()
    {
        return true;
    }
    
}
