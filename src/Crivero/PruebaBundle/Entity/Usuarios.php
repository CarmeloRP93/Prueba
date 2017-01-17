<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios
{
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
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=200, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fNacimiento", type="string", length=200, nullable=false)
     */
    private $fnacimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro", type="datetime", nullable=false)
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
        $this->password = $password;

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

    /**
     * Set fnacimiento
     *
     * @param string $fnacimiento
     * @return Usuarios
     */
    public function setFnacimiento($fnacimiento)
    {
        $this->fnacimiento = $fnacimiento;

        return $this;
    }

    /**
     * Get fnacimiento
     *
     * @return string 
     */
    public function getFnacimiento()
    {
        return $this->fnacimiento;
    }

    /**
     * Set registro
     *
     * @param \DateTime $registro
     * @return Usuarios
     */
    public function setRegistro($registro)
    {
        $this->registro = $registro;

        return $this;
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
}
