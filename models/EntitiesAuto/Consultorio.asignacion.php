<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.asignacion
 *
 * @Table(name="consultorio.asignacion", indexes={@Index(name="IDX_DF56FA7B8D75A50", columns={"empresa"}), @Index(name="IDX_DF56FA79DB4CADD", columns={"modalidad"})})
 * @Entity
 */
class Consultorio.asignacion
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.asignacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="estudiante", type="string", length=80, nullable=true)
     */
    private $estudiante;

    /**
     * @var integer
     *
     * @Column(name="asignatura", type="smallint", nullable=true)
     */
    private $asignatura;

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
     * @Column(name="fechainicio", type="date", nullable=true)
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @Column(name="fechafin", type="date", nullable=true)
     */
    private $fechafin;

    /**
     * @var string
     *
     * @Column(name="observacion", type="string", length=250, nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @Column(name="ideresponsable", type="string", length=80, nullable=true)
     */
    private $ideresponsable;

    /**
     * @var string
     *
     * @Column(name="nombresponsable", type="string", length=500, nullable=true)
     */
    private $nombresponsable;

    /**
     * @var string
     *
     * @Column(name="cargo", type="string", length=80, nullable=true)
     */
    private $cargo;

    /**
     * @var string
     *
     * @Column(name="celular", type="string", length=20, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=120, nullable=true)
     */
    private $email;

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
     * @Column(name="area1", type="smallint", nullable=true)
     */
    private $area1;

    /**
     * @var integer
     *
     * @Column(name="area2", type="smallint", nullable=true)
     */
    private $area2;

    /**
     * @var \Consultorio.empresa
     *
     * @ManyToOne(targetEntity="Consultorio.empresa")
     * @JoinColumns({
     *   @JoinColumn(name="empresa", referencedColumnName="id")
     * })
     */
    private $empresa;

    /**
     * @var \Consultorio.modalidad
     *
     * @ManyToOne(targetEntity="Consultorio.modalidad")
     * @JoinColumns({
     *   @JoinColumn(name="modalidad", referencedColumnName="id")
     * })
     */
    private $modalidad;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.asignacion
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
     * Set estudiante
     *
     * @param string $estudiante
     * @return Consultorio.asignacion
     */
    public function setEstudiante($estudiante)
    {
        $this->estudiante = $estudiante;
    
        return $this;
    }

    /**
     * Get estudiante
     *
     * @return string 
     */
    public function getEstudiante()
    {
        return $this->estudiante;
    }

    /** 
     * Set asignatura
     *
     * @param integer $asignatura
     * @return Consultorio.asignacion
     */
    public function setAsignatura($asignatura)
    {
        $this->asignatura = $asignatura;
    
        return $this;
    }

    /**
     * Get asignatura
     *
     * @return integer 
     */
    public function getAsignatura()
    {
        return $this->asignatura;
    }

    /** 
     * Set perano
     *
     * @param integer $perano
     * @return Consultorio.asignacion
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
     * @return Consultorio.asignacion
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
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Consultorio.asignacion
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;
    
        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /** 
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return Consultorio.asignacion
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;
    
        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /** 
     * Set observacion
     *
     * @param string $observacion
     * @return Consultorio.asignacion
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
     * Set ideresponsable
     *
     * @param string $ideresponsable
     * @return Consultorio.asignacion
     */
    public function setIderesponsable($ideresponsable)
    {
        $this->ideresponsable = $ideresponsable;
    
        return $this;
    }

    /**
     * Get ideresponsable
     *
     * @return string 
     */
    public function getIderesponsable()
    {
        return $this->ideresponsable;
    }

    /** 
     * Set nombresponsable
     *
     * @param string $nombresponsable
     * @return Consultorio.asignacion
     */
    public function setNombresponsable($nombresponsable)
    {
        $this->nombresponsable = $nombresponsable;
    
        return $this;
    }

    /**
     * Get nombresponsable
     *
     * @return string 
     */
    public function getNombresponsable()
    {
        return $this->nombresponsable;
    }

    /** 
     * Set cargo
     *
     * @param string $cargo
     * @return Consultorio.asignacion
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    
        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /** 
     * Set celular
     *
     * @param string $celular
     * @return Consultorio.asignacion
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    
        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /** 
     * Set email
     *
     * @param string $email
     * @return Consultorio.asignacion
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /** 
     * Set usucrea
     *
     * @param string $usucrea
     * @return Consultorio.asignacion
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
     * @return Consultorio.asignacion
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
     * @return Consultorio.asignacion
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
     * @return Consultorio.asignacion
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
     * @return Consultorio.asignacion
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
     * Set area1
     *
     * @param integer $area1
     * @return Consultorio.asignacion
     */
    public function setArea1($area1)
    {
        $this->area1 = $area1;
    
        return $this;
    }

    /**
     * Get area1
     *
     * @return integer 
     */
    public function getArea1()
    {
        return $this->area1;
    }

    /** 
     * Set area2
     *
     * @param integer $area2
     * @return Consultorio.asignacion
     */
    public function setArea2($area2)
    {
        $this->area2 = $area2;
    
        return $this;
    }

    /**
     * Get area2
     *
     * @return integer 
     */
    public function getArea2()
    {
        return $this->area2;
    }

    /** 
     * Set empresa
     *
     * @param \Consultorio.empresa $empresa
     * @return Consultorio.asignacion
     */
    public function setEmpresa($empresa = null)
    {
        $this->empresa = $empresa;
    
        return $this;
    }

    /**
     * Get empresa
     *
     * @return \Consultorio.empresa 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /** 
     * Set modalidad
     *
     * @param \Consultorio.modalidad $modalidad
     * @return Consultorio.asignacion
     */
    public function setModalidad($modalidad = null)
    {
        $this->modalidad = $modalidad;
    
        return $this;
    }

    /**
     * Get modalidad
     *
     * @return \Consultorio.modalidad 
     */
    public function getModalidad()
    {
        return $this->modalidad;
    }
}
