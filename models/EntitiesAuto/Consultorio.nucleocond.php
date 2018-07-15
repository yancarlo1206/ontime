<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.nucleocond
 *
 * @Table(name="consultorio.nucleocond", indexes={@Index(name="IDX_3497EFDDB6BB35BA", columns={"condiciones"}), @Index(name="IDX_3497EFDD1FD729B4", columns={"nucleo"})})
 * @Entity
 */
class Consultorio.nucleocond
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.nucleocond_id_seq", allocationSize=1, initialValue=1)
     */
    private $id = 'nucleocond_id_seq';

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
     * @var \Consultorio.condiciones
     *
     * @ManyToOne(targetEntity="Consultorio.condiciones")
     * @JoinColumns({
     *   @JoinColumn(name="condiciones", referencedColumnName="id")
     * })
     */
    private $condiciones;

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
     * @return Consultorio.nucleocond
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
     * @return Consultorio.nucleocond
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
     * @return Consultorio.nucleocond
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
     * @return Consultorio.nucleocond
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
     * @return Consultorio.nucleocond
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
     * Set condiciones
     *
     * @param \Consultorio.condiciones $condiciones
     * @return Consultorio.nucleocond
     */
    public function setCondiciones($condiciones = null)
    {
        $this->condiciones = $condiciones;
    
        return $this;
    }

    /**
     * Get condiciones
     *
     * @return \Consultorio.condiciones 
     */
    public function getCondiciones()
    {
        return $this->condiciones;
    }

    /** 
     * Set nucleo
     *
     * @param \Consultorio.nucleo $nucleo
     * @return Consultorio.nucleocond
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
