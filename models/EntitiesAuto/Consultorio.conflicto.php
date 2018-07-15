<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.conflicto
 *
 * @Table(name="consultorio.conflicto", indexes={@Index(name="IDX_DC6E1F9851E5B69B", columns={"persona"})})
 * @Entity
 */
class Consultorio.conflicto
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.conflicto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id = 'conflicto_id_seq';

    /**
     * @var string
     *
     * @Column(name="hecho", type="string", length=500, nullable=true)
     */
    private $hecho;

    /**
     * @var string
     *
     * @Column(name="observacion", type="string", length=500, nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @Column(name="ruv", type="string", nullable=true)
     */
    private $ruv;

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
     * @var \Consultorio.persona
     *
     * @ManyToOne(targetEntity="Consultorio.persona")
     * @JoinColumns({
     *   @JoinColumn(name="persona", referencedColumnName="id")
     * })
     */
    private $persona;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.conflicto
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
     * Set hecho
     *
     * @param string $hecho
     * @return Consultorio.conflicto
     */
    public function setHecho($hecho)
    {
        $this->hecho = $hecho;
    
        return $this;
    }

    /**
     * Get hecho
     *
     * @return string 
     */
    public function getHecho()
    {
        return $this->hecho;
    }

    /** 
     * Set observacion
     *
     * @param string $observacion
     * @return Consultorio.conflicto
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
     * Set ruv
     *
     * @param string $ruv
     * @return Consultorio.conflicto
     */
    public function setRuv($ruv)
    {
        $this->ruv = $ruv;
    
        return $this;
    }

    /**
     * Get ruv
     *
     * @return string 
     */
    public function getRuv()
    {
        return $this->ruv;
    }

    /** 
     * Set usucrea
     *
     * @param string $usucrea
     * @return Consultorio.conflicto
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
     * @return Consultorio.conflicto
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
     * @return Consultorio.conflicto
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
     * @return Consultorio.conflicto
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
     * Set persona
     *
     * @param \Consultorio.persona $persona
     * @return Consultorio.conflicto
     */
    public function setPersona($persona = null)
    {
        $this->persona = $persona;
    
        return $this;
    }

    /**
     * Get persona
     *
     * @return \Consultorio.persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }
}
