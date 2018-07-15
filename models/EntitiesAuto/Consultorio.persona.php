<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.persona
 *
 * @Table(name="consultorio.persona", indexes={@Index(name="IDX_5C621D8583AD768", columns={"escolaridad"}), @Index(name="IDX_5C621D8558D40EE3", columns={"estadocivil"}), @Index(name="IDX_5C621D85BF6E5FE1", columns={"etnia"}), @Index(name="IDX_5C621D85C6DC246", columns={"ocupacion"}), @Index(name="IDX_5C621D85AFDD2901", columns={"barrio"}), @Index(name="IDX_5C621D854B68B995", columns={"tipoide"})})
 * @Entity
 */
class Consultorio.persona
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.persona_id_seq", allocationSize=1, initialValue=1)
     */
    private $id = 'persona_id_seq';

    /**
     * @var string
     *
     * @Column(name="identificacion", type="string", length=80, nullable=true)
     */
    private $identificacion;

    /**
     * @var string
     *
     * @Column(name="apellidos", type="string", length=250, nullable=true)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @Column(name="nombres", type="string", length=250, nullable=true)
     */
    private $nombres;

    /**
     * @var \DateTime
     *
     * @Column(name="fechanacimiento", type="date", nullable=true)
     */
    private $fechanacimiento;

    /**
     * @var string
     *
     * @Column(name="direccion", type="string", length=120, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @Column(name="correo", type="string", length=100, nullable=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @Column(name="telfijo", type="string", length=20, nullable=true)
     */
    private $telfijo;

    /**
     * @var string
     *
     * @Column(name="telcel", type="string", length=20, nullable=true)
     */
    private $telcel;

    /**
     * @var string
     *
     * @Column(name="sisben", type="string", nullable=true)
     */
    private $sisben;

    /**
     * @var string
     *
     * @Column(name="referencia", type="string", length=500, nullable=true)
     */
    private $referencia;

    /**
     * @var string
     *
     * @Column(name="telreferencia", type="string", length=20, nullable=true)
     */
    private $telreferencia;

    /**
     * @var string
     *
     * @Column(name="usercrea", type="string", length=80, nullable=true)
     */
    private $usercrea;

    /**
     * @var \DateTime
     *
     * @Column(name="fechacrea", type="datetime", nullable=true)
     */
    private $fechacrea;

    /**
     * @var string
     *
     * @Column(name="usermod", type="string", length=80, nullable=true)
     */
    private $usermod;

    /**
     * @var \DateTime
     *
     * @Column(name="fechamod", type="datetime", nullable=true)
     */
    private $fechamod;

    /**
     * @var \Consultorio.escolaridad
     *
     * @ManyToOne(targetEntity="Consultorio.escolaridad")
     * @JoinColumns({
     *   @JoinColumn(name="escolaridad", referencedColumnName="id")
     * })
     */
    private $escolaridad;

    /**
     * @var \Consultorio.estadocivil
     *
     * @ManyToOne(targetEntity="Consultorio.estadocivil")
     * @JoinColumns({
     *   @JoinColumn(name="estadocivil", referencedColumnName="id")
     * })
     */
    private $estadocivil;

    /**
     * @var \Consultorio.etnia
     *
     * @ManyToOne(targetEntity="Consultorio.etnia")
     * @JoinColumns({
     *   @JoinColumn(name="etnia", referencedColumnName="id")
     * })
     */
    private $etnia;

    /**
     * @var \Consultorio.ocupacion
     *
     * @ManyToOne(targetEntity="Consultorio.ocupacion")
     * @JoinColumns({
     *   @JoinColumn(name="ocupacion", referencedColumnName="id")
     * })
     */
    private $ocupacion;

    /**
     * @var \Consultorio.barrio
     *
     * @ManyToOne(targetEntity="Consultorio.barrio")
     * @JoinColumns({
     *   @JoinColumn(name="barrio", referencedColumnName="id")
     * })
     */
    private $barrio;

    /**
     * @var \Consultorio.tipodocumento
     *
     * @ManyToOne(targetEntity="Consultorio.tipodocumento")
     * @JoinColumns({
     *   @JoinColumn(name="tipoide", referencedColumnName="id")
     * })
     */
    private $tipoide;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.persona
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
     * Set identificacion
     *
     * @param string $identificacion
     * @return Consultorio.persona
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
    
        return $this;
    }

    /**
     * Get identificacion
     *
     * @return string 
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /** 
     * Set apellidos
     *
     * @param string $apellidos
     * @return Consultorio.persona
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /** 
     * Set nombres
     *
     * @param string $nombres
     * @return Consultorio.persona
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    
        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /** 
     * Set fechanacimiento
     *
     * @param \DateTime $fechanacimiento
     * @return Consultorio.persona
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;
    
        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime 
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /** 
     * Set direccion
     *
     * @param string $direccion
     * @return Consultorio.persona
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
     * Set correo
     *
     * @param string $correo
     * @return Consultorio.persona
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    
        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /** 
     * Set telfijo
     *
     * @param string $telfijo
     * @return Consultorio.persona
     */
    public function setTelfijo($telfijo)
    {
        $this->telfijo = $telfijo;
    
        return $this;
    }

    /**
     * Get telfijo
     *
     * @return string 
     */
    public function getTelfijo()
    {
        return $this->telfijo;
    }

    /** 
     * Set telcel
     *
     * @param string $telcel
     * @return Consultorio.persona
     */
    public function setTelcel($telcel)
    {
        $this->telcel = $telcel;
    
        return $this;
    }

    /**
     * Get telcel
     *
     * @return string 
     */
    public function getTelcel()
    {
        return $this->telcel;
    }

    /** 
     * Set sisben
     *
     * @param string $sisben
     * @return Consultorio.persona
     */
    public function setSisben($sisben)
    {
        $this->sisben = $sisben;
    
        return $this;
    }

    /**
     * Get sisben
     *
     * @return string 
     */
    public function getSisben()
    {
        return $this->sisben;
    }

    /** 
     * Set referencia
     *
     * @param string $referencia
     * @return Consultorio.persona
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    
        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /** 
     * Set telreferencia
     *
     * @param string $telreferencia
     * @return Consultorio.persona
     */
    public function setTelreferencia($telreferencia)
    {
        $this->telreferencia = $telreferencia;
    
        return $this;
    }

    /**
     * Get telreferencia
     *
     * @return string 
     */
    public function getTelreferencia()
    {
        return $this->telreferencia;
    }

    /** 
     * Set usercrea
     *
     * @param string $usercrea
     * @return Consultorio.persona
     */
    public function setUsercrea($usercrea)
    {
        $this->usercrea = $usercrea;
    
        return $this;
    }

    /**
     * Get usercrea
     *
     * @return string 
     */
    public function getUsercrea()
    {
        return $this->usercrea;
    }

    /** 
     * Set fechacrea
     *
     * @param \DateTime $fechacrea
     * @return Consultorio.persona
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
     * Set usermod
     *
     * @param string $usermod
     * @return Consultorio.persona
     */
    public function setUsermod($usermod)
    {
        $this->usermod = $usermod;
    
        return $this;
    }

    /**
     * Get usermod
     *
     * @return string 
     */
    public function getUsermod()
    {
        return $this->usermod;
    }

    /** 
     * Set fechamod
     *
     * @param \DateTime $fechamod
     * @return Consultorio.persona
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
     * Set escolaridad
     *
     * @param \Consultorio.escolaridad $escolaridad
     * @return Consultorio.persona
     */
    public function setEscolaridad($escolaridad = null)
    {
        $this->escolaridad = $escolaridad;
    
        return $this;
    }

    /**
     * Get escolaridad
     *
     * @return \Consultorio.escolaridad 
     */
    public function getEscolaridad()
    {
        return $this->escolaridad;
    }

    /** 
     * Set estadocivil
     *
     * @param \Consultorio.estadocivil $estadocivil
     * @return Consultorio.persona
     */
    public function setEstadocivil($estadocivil = null)
    {
        $this->estadocivil = $estadocivil;
    
        return $this;
    }

    /**
     * Get estadocivil
     *
     * @return \Consultorio.estadocivil 
     */
    public function getEstadocivil()
    {
        return $this->estadocivil;
    }

    /** 
     * Set etnia
     *
     * @param \Consultorio.etnia $etnia
     * @return Consultorio.persona
     */
    public function setEtnia($etnia = null)
    {
        $this->etnia = $etnia;
    
        return $this;
    }

    /**
     * Get etnia
     *
     * @return \Consultorio.etnia 
     */
    public function getEtnia()
    {
        return $this->etnia;
    }

    /** 
     * Set ocupacion
     *
     * @param \Consultorio.ocupacion $ocupacion
     * @return Consultorio.persona
     */
    public function setOcupacion($ocupacion = null)
    {
        $this->ocupacion = $ocupacion;
    
        return $this;
    }

    /**
     * Get ocupacion
     *
     * @return \Consultorio.ocupacion 
     */
    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    /** 
     * Set barrio
     *
     * @param \Consultorio.barrio $barrio
     * @return Consultorio.persona
     */
    public function setBarrio($barrio = null)
    {
        $this->barrio = $barrio;
    
        return $this;
    }

    /**
     * Get barrio
     *
     * @return \Consultorio.barrio 
     */
    public function getBarrio()
    {
        return $this->barrio;
    }

    /** 
     * Set tipoide
     *
     * @param \Consultorio.tipodocumento $tipoide
     * @return Consultorio.persona
     */
    public function setTipoide($tipoide = null)
    {
        $this->tipoide = $tipoide;
    
        return $this;
    }

    /**
     * Get tipoide
     *
     * @return \Consultorio.tipodocumento 
     */
    public function getTipoide()
    {
        return $this->tipoide;
    }
}
