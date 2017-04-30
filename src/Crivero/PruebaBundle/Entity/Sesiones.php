<?php

namespace Crivero\PruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sesiones
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crivero\PruebaBundle\Entity\SesionesRepository")
 */
class Sesiones {
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
     * @ORM\Column(name="idMonitor", type="integer")
     */
    private $idMonitor;
    
    /**
     * @var string
     *
     * @ORM\Column(name="idsClientes", type="string", length=1000, nullable=true)
     */
    private $idsClientes;
    
    /**
     * @var string
     *
     * @ORM\Column(name="monitor", type="string", length=200)
     */
    private $monitor;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=200)
     */
    private $cliente;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200)
     * @Assert\NotBlank(message="Rellene el campo.")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="ejercicios", type="string", length=255)
     * @Assert\NotBlank(message="Rellene el campo.")
     */
    private $ejercicios;

    /**
     * @var integer
     *
     * @ORM\Column(name="repeticiones", type="integer")
     * @Assert\NotBlank(message="Rellene el campo.")
     */
    private $repeticiones;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="aula", type="integer")
     * @Assert\NotBlank(message="Rellene el campo.")
     */
    private $aula;
    
    /**
     * @var string
     *
     * @ORM\Column(name="dias", type="string", length=200, nullable=true)
     */
    private $dias;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracion", type="integer")
     * @Assert\NotBlank(message="Rellene el campo.")
     */
    private $duracion;
  
    /**
     * @var integer
     *
     * @ORM\Column(name="descanso", type="integer")
     * @Assert\NotBlank(message="Rellene el campo.")
     */
    private $descanso;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=200)
     */
    private $estado;
    
    /**
     * @var string
     *
     * @ORM\Column(name="horario", type="string", length=2000, nullable=true)
     */
    private $horario;
    
    /**
     * @var string
     *
     * @ORM\Column(name="estadoCliente", type="string", length=200)
     */
    private $estadoCliente;
    
    /**
     * @var string
     *
     * @ORM\Column(name="objetivo", type="string", length=255)
     * @Assert\NotBlank(message="Rellene el campo.")
     */
    private $objetivo;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nClientes", type="integer")
     */
    private $nClientes;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="lClientes", type="integer")
     */
    private $lClientes;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nSesiones", type="integer")
     * @Assert\NotBlank(message="Rellene el campo.")
     */
    private $nSesiones;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;
    
    /**
     * @var string
     *
     * @ORM\Column(name="excluidos", type="string", length=255, nullable=true)
     */
    private $excluidos;
    
    /**
     * @var Date
     *
     * @ORM\Column(name="fechaInicio", type="date")
     * @Assert\NotBlank()
     */
    private $fechaInicio;
    
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
     * Set monitor
     *
     * @param string $monitor
     * @return Sesiones
     */
    public function setMonitor($monitor)
    {
        $this->monitor = $monitor;

        return $this;
    }

    /**
     * Get monitor
     *
     * @return string 
     */
    public function getMonitor()
    {
        return $this->monitor;
    }
    
    
    /**
     * Set horario
     *
     * @param string $horario
     * @return Sesiones
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
     * Set cliente
     *
     * @param string $cliente
     * @return Sesiones
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }
    
    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Sesiones
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
     * Set imagen
     *
     * @param string $imagen
     * @return Sesiones
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
     * Set ejercicios
     *
     * @param string $ejercicios
     * @return Sesiones
     */
    public function setEjercicios($ejercicios)
    {
        $this->ejercicios = $ejercicios;

        return $this;
    }

    /**
     * Get ejercicios
     *
     * @return string 
     */
    public function getEjercicios()
    {
        return $this->ejercicios;
    }

    /**
     * Set repeticiones
     *
     * @param integer $repeticiones
     * @return Sesiones
     */
    public function setRepeticiones($repeticiones)
    {
        $this->repeticiones = $repeticiones;

        return $this;
    }

    /**
     * Get repeticiones
     *
     * @return integer 
     */
    public function getRepeticiones() {
        return $this->repeticiones;
    }
    
    /**
     * Set duracion
     *
     * @param integer $duracion
     * @return Sesiones
     */
    public function setDuracion($duracion) {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return integer 
     */
    public function getDuracion() {
        return $this->duracion;
    }
    /**
     * Set descanso
     *
     * @param integer $descanso
     * @return Sesiones
     */
    public function setDescanso($descanso) {
        $this->descanso = $descanso;

        return $this;
    }

    /**
     * Get descanso
     *
     * @return integer 
     */
    public function getDescanso() {
        return $this->descanso;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Sesiones
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
     * Set estadoCliente
     *
     * @param string $estadoCliente
     * @return Sesiones
     */
    public function setEstadoCliente($estadoCliente) {
        $this->estadoCliente = $estadoCliente;

        return $this;
    }

    /**
     * Get estadoCliente
     *
     * @return string 
     */
    public function getEstadoCliente() {
        return $this->estadoCliente;
    }
    
    /**
     * Set objetivo
     *
     * @param string $objetivo
     * @return Sesiones
     */
    public function setObjetivo($objetivo) {
        $this->objetivo = $objetivo;

        return $this;
    }

    /**
     * Get objetivo
     *
     * @return string 
     */
    public function getObjetivo() {
        return $this->objetivo;
    }
    
    /**
     * Set nClientes
     *
     * @param integer $nClientes
     * @return Sesiones
     */
    public function setNClientes($nClientes) {
        $this->nClientes = $nClientes;

        return $this;
    }

    /**
     * Get nClientes
     *
     * @return integer 
     */
    public function getNClientes() {
        return $this->nClientes;
    }
    
    /**
     * Set lClientes
     *
     * @param integer $lClientes
     * @return Sesiones
     */
    public function setLClientes($lClientes) {
        $this->lClientes = $lClientes;

        return $this;
    }

    /**
     * Get lClientes
     *
     * @return integer 
     */
    public function getLClientes() {
        return $this->lClientes;
    }
    
    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Sesiones
     */
    public function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones() {
        return $this->observaciones;
    }
    
    /**
     * Get excluidos
     *
     * @return string 
     */
    public function getExcluidos() {
        return $this->excluidos;
    }
    
    /**
     * Set excluidos
     *
     * @param string $excluidos
     * @return Sesiones
     */
    public function setExcluidos($excluidos) {
        $this->excluidos = $excluidos;

        return $this;
    }

    /**
     * Get idMonitor
     *
     * @return integer 
     */
    public function getIdMonitor() {
        return $this->idMonitor;
    }
    
     /**
     * Set idMonitor
     *
     * @param integer $idMonitor
     * @return Sesiones
     */
    public function setIdMonitor($idMonitor) {
        $this->idMonitor = $idMonitor;

        return $this;
    }
    
    /**
     * Get Aula
     *
     * @return integer 
     */
    public function getAula() {
        return $this->aula;
    }
    
     /**
     * Set Aula
     *
     * @param integer $aula
     * @return Sesiones
     */
    public function setAula($aula) {
        $this->aula = $aula;

        return $this;
    }
    
    /**
     * Get dias
     *
     * @return string 
     */
    public function getDias() {
        return $this->dias;
    }
    
     /**
     * Set dias
     *
     * @param string $dias
     * @return Sesiones
     */
    public function setDias($dias) {
        $this->dias = $dias;

        return $this;
    }
    
    /**
     * Get idsClientes
     *
     * @return string 
     */
    public function getIdsClientes() {
        return $this->idsClientes;
    }
    
    /**
     * Set idsClientes
     *
     * @param string $idsClientes
     * @return Sesiones
     */
    public function setIdsClientes($idsClientes) {
        $this->idsClientes = $idsClientes;

        return $this;
    }
    
    /**
     * Set nSesiones
     *
     * @param integer $nSesiones
     * @return Sesiones
     */
    public function setNSesiones($nSesiones) {
        $this->nSesiones = $nSesiones;

        return $this;
    }

    /**
     * Get nSesiones
     *
     * @return integer 
     */
    public function getNSesiones() {
        return $this->nSesiones;
    }
    
    /**
     * Set fechaInicio
     *
     * @param Date $fechaInicio
     * @return Sesiones
     */
    public function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return Date 
     */
    public function getFechaInicio() {
        return $this->fechaInicio;
    }
}
