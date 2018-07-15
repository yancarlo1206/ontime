<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.proceso
 *
 * @Table(name="consultorio.proceso", indexes={@Index(name="IDX_9F9BEFC7265DE1E3", columns={"estado"}), @Index(name="IDX_9F9BEFC751E5B69B", columns={"persona"}), @Index(name="IDX_9F9BEFC72A9BE2D1", columns={"sede"}), @Index(name="IDX_9F9BEFC7702D1D47", columns={"tipo"})})
 * @Entity
 */
class Consultorio.proceso
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.proceso_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="radicado", type="string", length=80, nullable=true)
     */
    private $radicado;

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
     * @var string
     *
     * @Column(name="recepciona", type="string", length=80, nullable=true)
     */
    private $recepciona;

    /**
     * @var string
     *
     * @Column(name="responsable", type="string", length=80, nullable=true)
     */
    private $responsable;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha_radicado", type="date", nullable=true)
     */
    private $fechaRadicado;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha_vencimiento", type="date", nullable=true)
     */
    private $fechaVencimiento;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha_recibido", type="date", nullable=true)
     */
    private $fechaRecibido;

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
     * @var string
     *
     * @Column(name="asesor", type="string", length=80, nullable=true)
     */
    private $asesor;

    /**
     * @var string
     *
     * @Column(name="observacion", type="string", length=250, nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @Column(name="sedereal", type="smallint", nullable=true)
     */
    private $sedereal;

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
     * @var \Consultorio.persona
     *
     * @ManyToOne(targetEntity="Consultorio.persona")
     * @JoinColumns({
     *   @JoinColumn(name="persona", referencedColumnName="id")
     * })
     */
    private $persona;

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
     * @var \Consultorio.tipo
     *
     * @ManyToOne(targetEntity="Consultorio.tipo")
     * @JoinColumns({
     *   @JoinColumn(name="tipo", referencedColumnName="id")
     * })
     */
    private $tipo;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.proceso
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
     * Set radicado
     *
     * @param string $radicado
     * @return Consultorio.proceso
     */
    public function setRadicado($radicado)
    {
        $this->radicado = $radicado;
    
        return $this;
    }

    /**
     * Get radicado
     *
     * @return string 
     */
    public function getRadicado()
    {
        return $this->radicado;
    }

    /** 
     * Set perano
     *
     * @param integer $perano
     * @return Consultorio.proceso
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
     * @return Consultorio.proceso
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
     * Set recepciona
     *
     * @param string $recepciona
     * @return Consultorio.proceso
     */
    public function setRecepciona($recepciona)
    {
        $this->recepciona = $recepciona;
    
        return $this;
    }

    /**
     * Get recepciona
     *
     * @return string 
     */
    public function getRecepciona()
    {
        return $this->recepciona;
    }

    /** 
     * Set responsable
     *
     * @param string $responsable
     * @return Consultorio.proceso
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
     * Set fechaRadicado
     *
     * @param \DateTime $fechaRadicado
     * @return Consultorio.proceso
     */
    public function setFechaRadicado($fechaRadicado)
    {
        $this->fechaRadicado = $fechaRadicado;
    
        return $this;
    }

    /**
     * Get fechaRadicado
     *
     * @return \DateTime 
     */
    public function getFechaRadicado()
    {
        return $this->fechaRadicado;
    }

    /** 
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     * @return Consultorio.proceso
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;
    
        return $this;
    }

    /**
     * Get fechaVencimiento
     *
     * @return \DateTime 
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /** 
     * Set fechaRecibido
     *
     * @param \DateTime $fechaRecibido
     * @return Consultorio.proceso
     */
    public function setFechaRecibido($fechaRecibido)
    {
        $this->fechaRecibido = $fechaRecibido;
    
        return $this;
    }

    /**
     * Get fechaRecibido
     *
     * @return \DateTime 
     */
    public function getFechaRecibido()
    {
        return $this->fechaRecibido;
    }

    /** 
     * Set usucrea
     *
     * @param string $usucrea
     * @return Consultorio.proceso
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
     * @return Consultorio.proceso
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
     * @return Consultorio.proceso
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
     * @return Consultorio.proceso
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
     * Set asesor
     *
     * @param string $asesor
     * @return Consultorio.proceso
     */
    public function setAsesor($asesor)
    {
        $this->asesor = $asesor;
    
        return $this;
    }

    /**
     * Get asesor
     *
     * @return string 
     */
    public function getAsesor()
    {
        return $this->asesor;
    }

    /** 
     * Set observacion
     *
     * @param string $observacion
     * @return Consultorio.proceso
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
     * Set sedereal
     *
     * @param integer $sedereal
     * @return Consultorio.proceso
     */
    public function setSedereal($sedereal)
    {
        $this->sedereal = $sedereal;
    
        return $this;
    }

    /**
     * Get sedereal
     *
     * @return integer 
     */
    public function getSedereal()
    {
        return $this->sedereal;
    }

    /** 
     * Set estado
     *
     * @param \Consultorio.estado $estado
     * @return Consultorio.proceso
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

    /** 
     * Set persona
     *
     * @param \Consultorio.persona $persona
     * @return Consultorio.proceso
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
     * Set sede
     *
     * @param \Consultorio.sedes $sede
     * @return Consultorio.proceso
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
     * Set tipo
     *
     * @param \Consultorio.tipo $tipo
     * @return Consultorio.proceso
     */
    public function setTipo($tipo = null)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return \Consultorio.tipo 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
