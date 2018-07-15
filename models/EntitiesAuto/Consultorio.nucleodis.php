<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.nucleodis
 *
 * @Table(name="consultorio.nucleodis", indexes={@Index(name="IDX_C64F8CF1D1523FE1", columns={"discapacidad"}), @Index(name="IDX_C64F8CF11FD729B4", columns={"nucleo"})})
 * @Entity
 */
class Consultorio.nucleodis
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.nucleodis_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @Column(name="fechasmod", type="datetime", nullable=true)
     */
    private $fechasmod;

    /**
     * @var \Consultorio.discapacidad
     *
     * @ManyToOne(targetEntity="Consultorio.discapacidad")
     * @JoinColumns({
     *   @JoinColumn(name="discapacidad", referencedColumnName="id")
     * })
     */
    private $discapacidad;

    /**
     * @var \Consultorio.nucleo
     *
     * @ManyToOne(targetEntity="Consultorio.nucleo")
     * @JoinColumns({
     *   @JoinColumn(name="nucleo", referencedColumnName="id")
     * })
     */
    private $nucleo;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.nucleodis
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
     * @return Consultorio.nucleodis
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
     * @return Consultorio.nucleodis
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
     * @return Consultorio.nucleodis
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
     * Set fechasmod
     *
     * @param \DateTime $fechasmod
     * @return Consultorio.nucleodis
     */
    public function setFechasmod($fechasmod)
    {
        $this->fechasmod = $fechasmod;
    
        return $this;
    }

    /**
     * Get fechasmod
     *
     * @return \DateTime 
     */
    public function getFechasmod()
    {
        return $this->fechasmod;
    }

    /** 
     * Set discapacidad
     *
     * @param \Consultorio.discapacidad $discapacidad
     * @return Consultorio.nucleodis
     */
    public function setDiscapacidad($discapacidad = null)
    {
        $this->discapacidad = $discapacidad;
    
        return $this;
    }

    /**
     * Get discapacidad
     *
     * @return \Consultorio.discapacidad 
     */
    public function getDiscapacidad()
    {
        return $this->discapacidad;
    }

    /** 
     * Set nucleo
     *
     * @param \Consultorio.nucleo $nucleo
     * @return Consultorio.nucleodis
     */
    public function setNucleo($nucleo = null)
    {
        $this->nucleo = $nucleo;
    
        return $this;
    }

    /**
     * Get nucleo
     *
     * @return \Consultorio.nucleo 
     */
    public function getNucleo()
    {
        return $this->nucleo;
    }
}
