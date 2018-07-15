<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.usudiscapacidad
 *
 * @Table(name="consultorio.usudiscapacidad", indexes={@Index(name="IDX_AEE2831B51E5B69B", columns={"persona"}), @Index(name="IDX_AEE2831BD1523FE1", columns={"discapacidad"})})
 * @Entity
 */
class Consultorio.usudiscapacidad
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.usudiscapacidad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id = 'usudiscapacidad_id_seq';

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
     * @var \Consultorio.discapacidad
     *
     * @ManyToOne(targetEntity="Consultorio.discapacidad")
     * @JoinColumns({
     *   @JoinColumn(name="discapacidad", referencedColumnName="id")
     * })
     */
    private $discapacidad;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.usudiscapacidad
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
     * @return Consultorio.usudiscapacidad
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
     * @return Consultorio.usudiscapacidad
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
     * @return Consultorio.usudiscapacidad
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
     * @return Consultorio.usudiscapacidad
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
     * @return Consultorio.usudiscapacidad
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
     * Set discapacidad
     *
     * @param \Consultorio.discapacidad $discapacidad
     * @return Consultorio.usudiscapacidad
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
}
