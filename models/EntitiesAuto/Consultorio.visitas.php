<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.visitas
 *
 * @Table(name="consultorio.visitas", indexes={@Index(name="IDX_2EE6579925629271", columns={"asignacion"})})
 * @Entity
 */
class Consultorio.visitas
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.visitas_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @Column(name="informe", type="text", nullable=true)
     */
    private $informe;

    /**
     * @var string
     *
     * @Column(name="observacion", type="string", length=250, nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @Column(name="acta", type="string", length=20, nullable=true)
     */
    private $acta;

    /**
     * @var integer
     *
     * @Column(name="encuentro", type="smallint", nullable=true)
     */
    private $encuentro;

    /**
     * @var string
     *
     * @Column(name="horaini", type="string", length=10, nullable=true)
     */
    private $horaini;

    /**
     * @var string
     *
     * @Column(name="horafin", type="string", length=10, nullable=true)
     */
    private $horafin;

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
     * @var \Consultorio.asignacion
     *
     * @ManyToOne(targetEntity="Consultorio.asignacion")
     * @JoinColumns({
     *   @JoinColumn(name="asignacion", referencedColumnName="id")
     * })
     */
    private $asignacion;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.visitas
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Consultorio.visitas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /** 
     * Set informe
     *
     * @param string $informe
     * @return Consultorio.visitas
     */
    public function setInforme($informe)
    {
        $this->informe = $informe;
    
        return $this;
    }

    /**
     * Get informe
     *
     * @return string 
     */
    public function getInforme()
    {
        return $this->informe;
    }

    /** 
     * Set observacion
     *
     * @param string $observacion
     * @return Consultorio.visitas
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
     * Set acta
     *
     * @param string $acta
     * @return Consultorio.visitas
     */
    public function setActa($acta)
    {
        $this->acta = $acta;
    
        return $this;
    }

    /**
     * Get acta
     *
     * @return string 
     */
    public function getActa()
    {
        return $this->acta;
    }

    /** 
     * Set encuentro
     *
     * @param integer $encuentro
     * @return Consultorio.visitas
     */
    public function setEncuentro($encuentro)
    {
        $this->encuentro = $encuentro;
    
        return $this;
    }

    /**
     * Get encuentro
     *
     * @return integer 
     */
    public function getEncuentro()
    {
        return $this->encuentro;
    }

    /** 
     * Set horaini
     *
     * @param string $horaini
     * @return Consultorio.visitas
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
     * @return Consultorio.visitas
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
     * Set usucrea
     *
     * @param string $usucrea
     * @return Consultorio.visitas
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
     * @return Consultorio.visitas
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
     * @return Consultorio.visitas
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
     * @return Consultorio.visitas
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
     * Set asignacion
     *
     * @param \Consultorio.asignacion $asignacion
     * @return Consultorio.visitas
     */
    public function setAsignacion($asignacion = null)
    {
        $this->asignacion = $asignacion;
    
        return $this;
    }

    /**
     * Get asignacion
     *
     * @return \Consultorio.asignacion 
     */
    public function getAsignacion()
    {
        return $this->asignacion;
    }
}
