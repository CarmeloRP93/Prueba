<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tarifas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\TarifasRepository")
 */
class Tarifas
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
     * @var float
     *
     * @ORM\Column(name="entrenamiento", type="float", nullable=false)
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     * @Assert\Regex(
     *     pattern="/^[0-9]+((\.[0-9]{1,2})?)$/",
     *     message="Introduzca un precio válido.")
     * 
     */
    private $entrenamiento;
    
    /**
     * @var float
     *
     * @ORM\Column(name="deportiva", type="float", nullable=false)
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     * @Assert\Regex(
     *     pattern="/^[0-9]+((\.[0-9]{1,2})?)$/",
     *     message="Introduzca un precio válido.")
     * 
     */
    private $deportiva;
    
    /**
     * @var float
     *
     * @ORM\Column(name="privada", type="float", nullable=false)
     * @Assert\NotBlank(
     *          message="Rellene el campo.")
     * @Assert\Regex(
     *     pattern="/^[0-9]+((\.[0-9]{1,2})?)$/",
     *     message="Introduzca un precio válido.")
     * 
     */
    private $privada;
    

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
     * Set entrenamiento
     *
     * @param float $entrenamiento
     * @return Tarifas
     */
    public function setEntrenamiento($entrenamiento)
    {
        $this->entrenamiento = $entrenamiento;

        return $this;
    }

    /**
     * Get entrenamiento
     *
     * @return float 
     */
    public function getEntrenamiento()
    {
        return $this->entrenamiento;
    }
    
    /**
     * Set deportiva
     *
     * @param float $deportiva
     * @return Tarifas
     */
    public function setDeportiva($deportiva)
    {
        $this->deportiva = $deportiva;

        return $this;
    }

    /**
     * Get deportiva
     *
     * @return float 
     */
    public function getDeportiva()
    {
        return $this->deportiva;
    }
    
    /**
     * Set privada
     *
     * @param float $privada
     * @return Tarifas
     */
    public function setPrivada($privada)
    {
        $this->privada = $privada;

        return $this;
    }

    /**
     * Get privada
     *
     * @return float 
     */
    public function getPrivada()
    {
        return $this->privada;
    }
}
