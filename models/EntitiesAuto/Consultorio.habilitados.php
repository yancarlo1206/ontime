<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.habilitados
 *
 * @Table(name="consultorio.habilitados")
 * @Entity
 */
class Consultorio.habilitados
{

function __construct() {}

    /**
     * @var string
     *
     * @Column(name="codigo", type="string", length=80, nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.habilitados_codigo_seq", allocationSize=1, initialValue=1)
     */
    private $codigo;

    /**
     * @var string
     *
     * @Column(name="documento", type="string", length=20, nullable=true)
     */
    private $documento;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", nullable=true)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha = 'now()';

    /**
     * @var integer
     *
     * @Column(name="tipodocumento", type="integer", nullable=true)
     */
    private $tipodocumento;

    /**
     * @var \DateTime
     *
     * @Column(name="fechanacimiento", type="date", nullable=true)
     */
    private $fechanacimiento;


    /** 
     * Set codigo
     *
     * @param string $codigo
     * @return Consultorio.habilitados
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /** 
     * Set documento
     *
     * @param string $documento
     * @return Consultorio.habilitados
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    
        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /** 
     * Set nombre
     *
     * @param string $nombre
     * @return Consultorio.habilitados
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Consultorio.habilitados
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /** 
     * Set tipodocumento
     *
     * @param integer $tipodocumento
     * @return Consultorio.habilitados
     */
    public function setTipodocumento($tipodocumento)
    {
        $this->tipodocumento = $tipodocumento;
    
        return $this;
    }

    /**
     * Get tipodocumento
     *
     * @return integer 
     */
    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }

    /** 
     * Set fechanacimiento
     *
     * @param \DateTime $fechanacimiento
     * @return Consultorio.habilitados
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;
    
        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime 
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }
}
