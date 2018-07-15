<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.empresa
 *
 * @Table(name="consultorio.empresa", indexes={@Index(name="IDX_B550F14E28D5DAC4", columns={"caracter"}), @Index(name="IDX_B550F14EE128CFD7", columns={"orden"}), @Index(name="IDX_B550F14E2DDF51CD", columns={"subsector"}), @Index(name="IDX_B550F14E265DE1E3", columns={"estado"})})
 * @Entity
 */
class Consultorio.empresa
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.empresa_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="nit", type="string", length=30, nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @Column(name="reprelegal", type="string", length=150, nullable=true)
     */
    private $reprelegal;

    /**
     * @var string
     *
     * @Column(name="cargorepre", type="string", length=200, nullable=true)
     */
    private $cargorepre;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=250, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @Column(name="direccion", type="string", length=120, nullable=true)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @Column(name="ciudad", type="smallint", nullable=true)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @Column(name="web", type="string", length=80, nullable=true)
     */
    private $web;

    /**
     * @var string
     *
     * @Column(name="telefono", type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var \DateTime
     *
     * @Column(name="finicio", type="date", nullable=true)
     */
    private $finicio;

    /**
     * @var \DateTime
     *
     * @Column(name="ffin", type="date", nullable=true)
     */
    private $ffin;

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
     * @var \Consultorio.caracter
     *
     * @ManyToOne(targetEntity="Consultorio.caracter")
     * @JoinColumns({
     *   @JoinColumn(name="caracter", referencedColumnName="id")
     * })
     */
    private $caracter;

    /**
     * @var \Consultorio.orden
     *
     * @ManyToOne(targetEntity="Consultorio.orden")
     * @JoinColumns({
     *   @JoinColumn(name="orden", referencedColumnName="id")
     * })
     */
    private $orden;

    /**
     * @var \Consultorio.subsector
     *
     * @ManyToOne(targetEntity="Consultorio.subsector")
     * @JoinColumns({
     *   @JoinColumn(name="subsector", referencedColumnName="id")
     * })
     */
    private $subsector;

    /**
     * @var \Consultorio.estado
     *
     * @ManyToOne(targetEntity="Consultorio.estado")
     * @JoinColumns({
     *   @JoinColumn(name="estado", referencedColumnName="id")
     * })
     */
    private $estado;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.empresa
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
     * Set nit
     *
     * @param string $nit
     * @return Consultorio.empresa
     */
    public function setNit($nit)
    {
        $this->nit = $nit;
    
        return $this;
    }

    /**
     * Get nit
     *
     * @return string 
     */
    public function getNit()
    {
        return $this->nit;
    }

    /** 
     * Set reprelegal
     *
     * @param string $reprelegal
     * @return Consultorio.empresa
     */
    public function setReprelegal($reprelegal)
    {
        $this->reprelegal = $reprelegal;
    
        return $this;
    }

    /**
     * Get reprelegal
     *
     * @return string 
     */
    public function getReprelegal()
    {
        return $this->reprelegal;
    }

    /** 
     * Set cargorepre
     *
     * @param string $cargorepre
     * @return Consultorio.empresa
     */
    public function setCargorepre($cargorepre)
    {
        $this->cargorepre = $cargorepre;
    
        return $this;
    }

    /**
     * Get cargorepre
     *
     * @return string 
     */
    public function getCargorepre()
    {
        return $this->cargorepre;
    }

    /** 
     * Set nombre
     *
     * @param string $nombre
     * @return Consultorio.empresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /** 
     * Set direccion
     *
     * @param string $direccion
     * @return Consultorio.empresa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /** 
     * Set ciudad
     *
     * @param integer $ciudad
     * @return Consultorio.empresa
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return integer 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /** 
     * Set email
     *
     * @param string $email
     * @return Consultorio.empresa
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
     * Set web
     *
     * @param string $web
     * @return Consultorio.empresa
     */
    public function setWeb($web)
    {
        $this->web = $web;
    
        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /** 
     * Set telefono
     *
     * @param string $telefono
     * @return Consultorio.empresa
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /** 
     * Set observacion
     *
     * @param string $observacion
     * @return Consultorio.empresa
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
     * Set finicio
     *
     * @param \DateTime $finicio
     * @return Consultorio.empresa
     */
    public function setFinicio($finicio)
    {
        $this->finicio = $finicio;
    
        return $this;
    }

    /**
     * Get finicio
     *
     * @return \DateTime 
     */
    public function getFinicio()
    {
        return $this->finicio;
    }

    /** 
     * Set ffin
     *
     * @param \DateTime $ffin
     * @return Consultorio.empresa
     */
    public function setFfin($ffin)
    {
        $this->ffin = $ffin;
    
        return $this;
    }

    /**
     * Get ffin
     *
     * @return \DateTime 
     */
    public function getFfin()
    {
        return $this->ffin;
    }

    /** 
     * Set usucrea
     *
     * @param string $usucrea
     * @return Consultorio.empresa
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
     * @return Consultorio.empresa
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
     * @return Consultorio.empresa
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
     * @return Consultorio.empresa
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
     * Set caracter
     *
     * @param \Consultorio.caracter $caracter
     * @return Consultorio.empresa
     */
    public function setCaracter($caracter = null)
    {
        $this->caracter = $caracter;
    
        return $this;
    }

    /**
     * Get caracter
     *
     * @return \Consultorio.caracter 
     */
    public function getCaracter()
    {
        return $this->caracter;
    }

    /** 
     * Set orden
     *
     * @param \Consultorio.orden $orden
     * @return Consultorio.empresa
     */
    public function setOrden($orden = null)
    {
        $this->orden = $orden;
    
        return $this;
    }

    /**
     * Get orden
     *
     * @return \Consultorio.orden 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /** 
     * Set subsector
     *
     * @param \Consultorio.subsector $subsector
     * @return Consultorio.empresa
     */
    public function setSubsector($subsector = null)
    {
        $this->subsector = $subsector;
    
        return $this;
    }

    /**
     * Get subsector
     *
     * @return \Consultorio.subsector 
     */
    public function getSubsector()
    {
        return $this->subsector;
    }

    /** 
     * Set estado
     *
     * @param \Consultorio.estado $estado
     * @return Consultorio.empresa
     */
    public function setEstado($estado = null)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return \Consultorio.estado 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
