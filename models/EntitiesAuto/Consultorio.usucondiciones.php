<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.usucondiciones
 *
 * @Table(name="consultorio.usucondiciones", indexes={@Index(name="IDX_6C0A74F651E5B69B", columns={"persona"}), @Index(name="IDX_6C0A74F67018E765", columns={"condicion"})})
 * @Entity
 */
class Consultorio.usucondiciones
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.usucondiciones_id_seq", allocationSize=1, initialValue=1)
     */
    private $id = 'usucondiciones_id_seq';

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
     * @var \Consultorio.condiciones
     *
     * @ManyToOne(targetEntity="Consultorio.condiciones")
     * @JoinColumns({
     *   @JoinColumn(name="condicion", referencedColumnName="id")
     * })
     */
    private $condicion;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.usucondiciones
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
     * Set usucrea
     *
     * @param string $usucrea
     * @return Consultorio.usucondiciones
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
     * @return Consultorio.usucondiciones
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
     * @return Consultorio.usucondiciones
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
     * @return Consultorio.usucondiciones
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
     * @return Consultorio.usucondiciones
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

    /** 
     * Set condicion
     *
     * @param \Consultorio.condiciones $condicion
     * @return Consultorio.usucondiciones
     */
    public function setCondicion($condicion = null)
    {
        $this->condicion = $condicion;
    
        return $this;
    }

    /**
     * Get condicion
     *
     * @return \Consultorio.condiciones 
     */
    public function getCondicion()
    {
        return $this->condicion;
    }
}
