<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.citados
 *
 * @Table(name="consultorio.citados", indexes={@Index(name="IDX_EE319EF151E5B69B", columns={"persona"}), @Index(name="IDX_EE319EF1921C44D9", columns={"proceso"})})
 * @Entity
 */
class Consultorio.citados
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.citados_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @Column(name="fechacita", type="date", nullable=true)
     */
    private $fechacita;

    /**
     * @var string
     *
     * @Column(name="horaini", type="string", nullable=true)
     */
    private $horaini;

    /**
     * @var string
     *
     * @Column(name="horafin", type="string", nullable=true)
     */
    private $horafin;

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
     * @var integer
     *
     * @Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

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
     * @return Consultorio.citados
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
     * Set fechacita
     *
     * @param \DateTime $fechacita
     * @return Consultorio.citados
     */
    public function setFechacita($fechacita)
    {
        $this->fechacita = $fechacita;
    
        return $this;
    }

    /**
     * Get fechacita
     *
     * @return \DateTime 
     */
    public function getFechacita()
    {
        return $this->fechacita;
    }

    /** 
     * Set horaini
     *
     * @param string $horaini
     * @return Consultorio.citados
     */
    public function setHoraini($horaini)
    {
        $this->horaini = $horaini;
    
        return $this;
    }

    /**
     * Get horaini
     *
     * @return string 
     */
    public function getHoraini()
    {
        return $this->horaini;
    }

    /** 
     * Set horafin
     *
     * @param string $horafin
     * @return Consultorio.citados
     */
    public function setHorafin($horafin)
    {
        $this->horafin = $horafin;
    
        return $this;
    }

    /**
     * Get horafin
     *
     * @return string 
     */
    public function getHorafin()
    {
        return $this->horafin;
    }

    /** 
     * Set observacion
     *
     * @param string $observacion
     * @return Consultorio.citados
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
     * @return Consultorio.citados
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
     * @return Consultorio.citados
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
     * @return Consultorio.citados
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
     * @return Consultorio.citados
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
     * Set estado
     *
     * @param integer $estado
     * @return Consultorio.citados
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /** 
     * Set persona
     *
     * @param \Consultorio.persona $persona
     * @return Consultorio.citados
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
     * Set proceso
     *
     * @param \Consultorio.proceso $proceso
     * @return Consultorio.citados
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
