<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.horario
 *
 * @Table(name="consultorio.horario", indexes={@Index(name="IDX_EFDFF8BD2A9BE2D1", columns={"sede"}), @Index(name="IDX_EFDFF8BD3E153BCE", columns={"dia"})})
 * @Entity
 */
class Consultorio.horario
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="smallint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.horario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var integer
     *
     * @Column(name="capacidad", type="smallint", nullable=true)
     */
    private $capacidad;

    /**
     * @var integer
     *
     * @Column(name="horas", type="smallint", nullable=true)
     */
    private $horas;

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
     * @var integer
     *
     * @Column(name="tipo", type="smallint", nullable=true)
     */
    private $tipo;

    /**
     * @var \Consultorio.sedes
     *
     * @ManyToOne(targetEntity="Consultorio.sedes")
     * @JoinColumns({
     *   @JoinColumn(name="sede", referencedColumnName="id")
     * })
     */
    private $sede;

    /**
     * @var \Consultorio.dias
     *
     * @ManyToOne(targetEntity="Consultorio.dias")
     * @JoinColumns({
     *   @JoinColumn(name="dia", referencedColumnName="id")
     * })
     */
    private $dia;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.horario
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
     * Set horaini
     *
     * @param string $horaini
     * @return Consultorio.horario
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
     * @return Consultorio.horario
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
     * Set capacidad
     *
     * @param integer $capacidad
     * @return Consultorio.horario
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    
        return $this;
    }

    /**
     * Get capacidad
     *
     * @return integer 
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /** 
     * Set horas
     *
     * @param integer $horas
     * @return Consultorio.horario
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;
    
        return $this;
    }

    /**
     * Get horas
     *
     * @return integer 
     */
    public function getHoras()
    {
        return $this->horas;
    }

    /** 
     * Set usucrea
     *
     * @param string $usucrea
     * @return Consultorio.horario
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
     * @return Consultorio.horario
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
     * @return Consultorio.horario
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
     * @return Consultorio.horario
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
     * @return Consultorio.horario
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
     * Set tipo
     *
     * @param integer $tipo
     * @return Consultorio.horario
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /** 
     * Set sede
     *
     * @param \Consultorio.sedes $sede
     * @return Consultorio.horario
     */
    public function setSede($sede = null)
    {
        $this->sede = $sede;
    
        return $this;
    }

    /**
     * Get sede
     *
     * @return \Consultorio.sedes 
     */
    public function getSede()
    {
        return $this->sede;
    }

    /** 
     * Set dia
     *
     * @param \Consultorio.dias $dia
     * @return Consultorio.horario
     */
    public function setDia($dia = null)
    {
        $this->dia = $dia;
    
        return $this;
    }

    /**
     * Get dia
     *
     * @return \Consultorio.dias 
     */
    public function getDia()
    {
        return $this->dia;
    }
}
