<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Notificaciones
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\NotificacionesRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Notificaciones {

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
     * @ORM\Column(name="idEntidad", type="integer")
     */
    private $idEntidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDestinatario", type="integer")
     */
    private $idDestinatario;
    
    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=100)
     */
    private $estado;
    
    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=10)
     */
    private $concepto;

    /**
     * @var integer
     *
     * @ORM\Column(name="idOrigen", type="integer")
     */
    private $idOrigen;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="string", length=255)
     */
    private $mensaje;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idEntidad
     *
     * @param integer $idEntidad
     * @return Notificaciones
     */
    public function setIdEntidad($idEntidad) {
        $this->idEntidad = $idEntidad;

        return $this;
    }

    /**
     * Get idEntidad
     *
     * @return integer 
     */
    public function getIdEntidad() {
        return $this->idEntidad;
    }


    /**
     * Set mensaje
     *
     * @param string $mensaje
     * @return Notificaciones
     */
    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string 
     */
    public function getMensaje() {
        return $this->mensaje;
    }
    /**
     * Set estado
     *
     * @param string $estado
     * @return Notificaciones
     */
    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado() {
        return $this->estado;
    }
    /**
     * Set concepto
     *
     * @param string $concepto
     * @return Notificaciones
     */
    public function setConcepto($concepto) {
        $this->concepto = $concepto;
        return $this;
    }

    /**
     * Get conceto
     *
     * @return string 
     */
    public function getConcepto() {
        return $this->concepto;
    }

    /**
     * Set idOrigen
     *
     * @param integer $idOrigen
     * @return Notificaciones
     */
    public function setIdOrigen($idOrigen) {
        $this->idOrigen = $idOrigen;
        return $this;
    }

    /**
     * Get idOrigen
     *
     * @return integer 
     */
    public function getIdOrigen() {
        return $this->idOrigen;
    }

    /**
     * Set idDestinatario
     *
     * @param integer $idDestinatario
     * @return Notificaciones
     */
    public function setIdDestinatario($idDestinatario) {
        $this->idDestinatario = $idDestinatario;
        return $this;
    }

    /**
     * Get idDestinatario
     *
     * @return integer 
     */
    public function getIdDestinatario() {
        return $this->idDestinatario;
    }

    /**
     * @ORM\PrePersist
     */
    public function setFecha() {
        $this->fecha = new \DateTime();
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha() {
        return $this->fecha;
    }

}
