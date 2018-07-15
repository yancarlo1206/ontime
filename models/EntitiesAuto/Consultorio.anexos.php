<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.anexos
 *
 * @Table(name="consultorio.anexos", indexes={@Index(name="IDX_C3DAFDCD921C44D9", columns={"proceso"}), @Index(name="IDX_C3DAFDCDCD7EAF2C", columns={"anexo"})})
 * @Entity
 */
class Consultorio.anexos
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.anexos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="observacion", type="string", length=500, nullable=true)
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
     * @var string
     *
     * @Column(name="archivo", type="string", length=50, nullable=true)
     */
    private $archivo;

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
     * @var \Consultorio.tipoanexo
     *
     * @ManyToOne(targetEntity="Consultorio.tipoanexo")
     * @JoinColumns({
     *   @JoinColumn(name="anexo", referencedColumnName="id")
     * })
     */
    private $anexo;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.anexos
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
     * @return Consultorio.anexos
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
     * @return Consultorio.anexos
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
     * @return Consultorio.anexos
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
     * @return Consultorio.anexos
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
     * @return Consultorio.anexos
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
     * Set archivo
     *
     * @param string $archivo
     * @return Consultorio.anexos
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;
    
        return $this;
    }

    /**
     * Get archivo
     *
     * @return string 
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /** 
     * Set proceso
     *
     * @param \Consultorio.proceso $proceso
     * @return Consultorio.anexos
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
     * Set anexo
     *
     * @param \Consultorio.tipoanexo $anexo
     * @return Consultorio.anexos
     */
    public function setAnexo($anexo = null)
    {
        $this->anexo = $anexo;
    
        return $this;
    }

    /**
     * Get anexo
     *
     * @return \Consultorio.tipoanexo 
     */
    public function getAnexo()
    {
        return $this->anexo;
    }
}
