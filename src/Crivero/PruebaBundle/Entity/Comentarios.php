<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentarios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\ComentariosRepository")
 */
class Comentarios
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
     * @ORM\Column(name="tipoComentario", type="string", length=255)
     */
    private $tipoComentario;

    /**
     * @var string
     *
     * @ORM\Column(name="destinoComentario", type="string", length=255)
     */
    private $destinoComentario;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCliente", type="integer")
     */
    private $idCliente;


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
     * Set tipoComentario
     *
     * @param string $tipoComentario
     * @return Comentarios
     */
    public function setTipoComentario($tipoComentario)
    {
        $this->tipoComentario = $tipoComentario;

        return $this;
    }

    /**
     * Get tipoComentario
     *
     * @return string 
     */
    public function getTipoComentario()
    {
        return $this->tipoComentario;
    }

    /**
     * Set destinoComentario
     *
     * @param string $destinoComentario
     * @return Comentarios
     */
    public function setDestinoComentario($destinoComentario)
    {
        $this->destinoComentario = $destinoComentario;

        return $this;
    }

    /**
     * Get destinoComentario
     *
     * @return string 
     */
    public function getDestinoComentario()
    {
        return $this->destinoComentario;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Comentarios
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set idCliente
     *
     * @param integer $idCliente
     * @return Comentarios
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return integer 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }
}
