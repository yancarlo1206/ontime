<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.sustitucion
 *
 * @Table(name="consultorio.sustitucion", indexes={@Index(name="IDX_BDEF18F921C44D9", columns={"proceso"})})
 * @Entity
 */
class Consultorio.sustitucion
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.sustitucion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="responsable", type="string", length=80, nullable=true)
     */
    private $responsable;

    /**
     * @var integer
     *
     * @Column(name="perano", type="smallint", nullable=true)
     */
    private $perano;

    /**
     * @var integer
     *
     * @Column(name="persem", type="smallint", nullable=true)
     */
    private $persem;

    /**
     * @var \DateTime
     *
     * @Column(name="fradicado", type="date", nullable=true)
     */
    private $fradicado;

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
     * @return Consultorio.sustitucion
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
     * Set responsable
     *
     * @param string $responsable
     * @return Consultorio.sustitucion
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    
        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /** 
     * Set perano
     *
     * @param integer $perano
     * @return Consultorio.sustitucion
     */
    public function setPerano($perano)
    {
        $this->perano = $perano;
    
        return $this;
    }

    /**
     * Get perano
     *
     * @return integer 
     */
    public function getPerano()
    {
        return $this->perano;
    }

    /** 
     * Set persem
     *
     * @param integer $persem
     * @return Consultorio.sustitucion
     */
    public function setPersem($persem)
    {
        $this->persem = $persem;
    
        return $this;
    }

    /**
     * Get persem
     *
     * @return integer 
     */
    public function getPersem()
    {
        return $this->persem;
    }

    /** 
     * Set fradicado
     *
     * @param \DateTime $fradicado
     * @return Consultorio.sustitucion
     */
    public function setFradicado($fradicado)
    {
        $this->fradicado = $fradicado;
    
        return $this;
    }

    /**
     * Get fradicado
     *
     * @return \DateTime 
     */
    public function getFradicado()
    {
        return $this->fradicado;
    }

    /** 
     * Set usucrea
     *
     * @param string $usucrea
     * @return Consultorio.sustitucion
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
     * @return Consultorio.sustitucion
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
     * Set proceso
     *
     * @param \Consultorio.proceso $proceso
     * @return Consultorio.sustitucion
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
