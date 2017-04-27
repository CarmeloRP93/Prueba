<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Comentarios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\ComentariosRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Comentarios {

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
     * @ORM\Column(name="tipoComentario", type="string", length=255)
     */
    private $tipoComentario;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatario", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $destinatario;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=255, nullable=true)
     */
    private $asunto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=10000)
     * @Assert\NotBlank()
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRemitente", type="integer")
     */
    private $idRemitente;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDestinatario", type="integer")
     */
    private $idDestinatario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;
    
    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=100)
     */
    private $estado;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set tipoComentario
     *
     * @param string $tipoComentario
     * @return Comentarios
     */
    public function setTipoComentario($tipoComentario) {
        $this->tipoComentario = $tipoComentario;

        return $this;
    }

    /**
     * Get tipoComentario
     *
     * @return string 
     */
    public function getTipoComentario() {
        return $this->tipoComentario;
    }

    /**
     * Set destinatario
     *
     * @param string $destinatario
     * @return Comentarios
     */
    public function setDestinatario($destinatario) {
        $this->destinatario = $destinatario;
        return $this;
    }

    /**
     * Get destinatario
     *
     * @return string 
     */
    public function getDestinatario() {
        return $this->destinatario;
    }

    /**
     * Set asunto
     *
     * @param string $asunto
     * @return Comentarios
     */
    public function setAsunto($asunto) {
        $this->asunto = $asunto;
        return $this;
    }

    /**
     * Get asunto
     *
     * @return string 
     */
    public function getAsunto() {
        return $this->asunto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Comentarios
     */
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * Set idRemitente
     *
     * @param integer $idRemitente
     * @return Comentarios
     */
    public function setIdRemitente($idRemitente) {
        $this->idRemitente = $idRemitente;
        return $this;
    }

    /**
     * Get idRemitente
     *
     * @return integer 
     */
    public function getIdRemitente() {
        return $this->idRemitente;
    }

    /**
     * Set idDestinatario
     *
     * @param integer $idDestinatario
     * @return Comentarios
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
    
    /**
     * Set estado
     *
     * @param string $estado
     * @return Comentarios
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

}
