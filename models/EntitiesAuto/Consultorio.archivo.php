<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.archivo
 *
 * @Table(name="consultorio.archivo", indexes={@Index(name="IDX_38AE1F9C921C44D9", columns={"proceso"}), @Index(name="IDX_38AE1F9C702D1D47", columns={"tipo"})})
 * @Entity
 */
class Consultorio.archivo
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.archivo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="observacion", type="string", length=350, nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @Column(name="usucrea", type="string", length=80, nullable=true)
     */
    private $usucrea;

    /**
     * @var \DateTime
     *
     * @Column(name="fechacrea", type="datetime", nullable=true)
     */
    private $fechacrea;

    /**
     * @var string
     *
     * @Column(name="usumod", type="string", length=80, nullable=true)
     */
    private $usumod;

    /**
     * @var \DateTime
     *
     * @Column(name="fechamod", type="datetime", nullable=true)
     */
    private $fechamod;

    /**
     * @var \Consultorio.proceso
     *
     * @ManyToOne(targetEntity="Consultorio.proceso")
     * @JoinColumns({
     *   @JoinColumn(name="proceso", referencedColumnName="id")
     * })
     */
    private $proceso;

    /**
     * @var \Consultorio.tipoarchivo
     *
     * @ManyToOne(targetEntity="Consultorio.tipoarchivo")
     * @JoinColumns({
     *   @JoinColumn(name="tipo", referencedColumnName="id")
     * })
     */
    private $tipo;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.archivo
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

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
     * Set observacion
     *
     * @param string $observacion
     * @return Consultorio.archivo
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /** 
     * Set usucrea
     *
     * @param string $usucrea
     * @return Consultorio.archivo
     */
    public function setUsucrea($usucrea)
    {
        $this->usucrea = $usucrea;
    
        return $this;
    }

    /**
     * Get usucrea
     *
     * @return string 
     */
    public function getUsucrea()
    {
        return $this->usucrea;
    }

    /** 
     * Set fechacrea
     *
     * @param \DateTime $fechacrea
     * @return Consultorio.archivo
     */
    public function setFechacrea($fechacrea)
    {
        $this->fechacrea = $fechacrea;
    
        return $this;
    }

    /**
     * Get fechacrea
     *
     * @return \DateTime 
     */
    public function getFechacrea()
    {
        return $this->fechacrea;
    }

    /** 
     * Set usumod
     *
     * @param string $usumod
     * @return Consultorio.archivo
     */
    public function setUsumod($usumod)
    {
        $this->usumod = $usumod;
    
        return $this;
    }

    /**
     * Get usumod
     *
     * @return string 
     */
    public function getUsumod()
    {
        return $this->usumod;
    }

    /** 
     * Set fechamod
     *
     * @param \DateTime $fechamod
     * @return Consultorio.archivo
     */
    public function setFechamod($fechamod)
    {
        $this->fechamod = $fechamod;
    
        return $this;
    }

    /**
     * Get fechamod
     *
     * @return \DateTime 
     */
    public function getFechamod()
    {
        return $this->fechamod;
    }

    /** 
     * Set proceso
     *
     * @param \Consultorio.proceso $proceso
     * @return Consultorio.archivo
     */
    public function setProceso($proceso = null)
    {
        $this->proceso = $proceso;
    
        return $this;
    }

    /**
     * Get proceso
     *
     * @return \Consultorio.proceso 
     */
    public function getProceso()
    {
        return $this->proceso;
    }

    /** 
     * Set tipo
     *
     * @param \Consultorio.tipoarchivo $tipo
     * @return Consultorio.archivo
     */
    public function setTipo($tipo = null)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return \Consultorio.tipoarchivo 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
