<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.descripcion
 *
 * @Table(name="consultorio.descripcion", indexes={@Index(name="IDX_CFB2CF1C921C44D9", columns={"proceso"})})
 * @Entity
 */
class Consultorio.descripcion
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.descripcion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="tema", type="string", length=150, nullable=true)
     */
    private $tema;

    /**
     * @var string
     *
     * @Column(name="hechos", type="text", nullable=true)
     */
    private $hechos;

    /**
     * @var string
     *
     * @Column(name="pretension", type="text", nullable=true)
     */
    private $pretension;

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
     * Set id
     *
     * @param integer $id
     * @return Consultorio.descripcion
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
     * Set tema
     *
     * @param string $tema
     * @return Consultorio.descripcion
     */
    public function setTema($tema)
    {
        $this->tema = $tema;
    
        return $this;
    }

    /**
     * Get tema
     *
     * @return string 
     */
    public function getTema()
    {
        return $this->tema;
    }

    /** 
     * Set hechos
     *
     * @param string $hechos
     * @return Consultorio.descripcion
     */
    public function setHechos($hechos)
    {
        $this->hechos = $hechos;
    
        return $this;
    }

    /**
     * Get hechos
     *
     * @return string 
     */
    public function getHechos()
    {
        return $this->hechos;
    }

    /** 
     * Set pretension
     *
     * @param string $pretension
     * @return Consultorio.descripcion
     */
    public function setPretension($pretension)
    {
        $this->pretension = $pretension;
    
        return $this;
    }

    /**
     * Get pretension
     *
     * @return string 
     */
    public function getPretension()
    {
        return $this->pretension;
    }

    /** 
     * Set usucrea
     *
     * @param string $usucrea
     * @return Consultorio.descripcion
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
     * @return Consultorio.descripcion
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
     * @return Consultorio.descripcion
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
     * @return Consultorio.descripcion
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
     * @return Consultorio.descripcion
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
}
