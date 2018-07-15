<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.nucleo
 *
 * @Table(name="consultorio.nucleo", indexes={@Index(name="IDX_F516093E51E5B69B", columns={"persona"}), @Index(name="IDX_F516093EBF6E5FE1", columns={"etnia"}), @Index(name="IDX_F516093EC6DC246", columns={"ocupacion"}), @Index(name="IDX_F516093EAF47286F", columns={"relacion"})})
 * @Entity
 */
class Consultorio.nucleo
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.nucleo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=500, nullable=true)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fechaNacimiento;

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
     * @var \Consultorio.tiporelacion
     *
     * @ManyToOne(targetEntity="Consultorio.tiporelacion")
     * @JoinColumns({
     *   @JoinColumn(name="relacion", referencedColumnName="id")
     * })
     */
    private $relacion;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.nucleo
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
     * Set nombre
     *
     * @param string $nombre
     * @return Consultorio.nucleo
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
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Consultorio.nucleo
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    
        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /** 
     * Set usucrea
     *
     * @param string $usucrea
     * @return Consultorio.nucleo
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
     * @return Consultorio.nucleo
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
     * @return Consultorio.nucleo
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
     * @return Consultorio.nucleo
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
     * @return Consultorio.nucleo
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
     * Set etnia
     *
     * @param \Consultorio.etnia $etnia
     * @return Consultorio.nucleo
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
     * @return Consultorio.nucleo
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
     * Set relacion
     *
     * @param \Consultorio.tiporelacion $relacion
     * @return Consultorio.nucleo
     */
    public function setRelacion($relacion = null)
    {
        $this->relacion = $relacion;
    
        return $this;
    }

    /**
     * Get relacion
     *
     * @return \Consultorio.tiporelacion 
     */
    public function getRelacion()
    {
        return $this->relacion;
    }
}
