<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Sys.excel
 *
 * @Table(name="sys.excel", indexes={@Index(name="IDX_95587853E553F37", columns={"rol"})})
 * @Entity
 */
class Sys.excel
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sys.excel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="esquema", type="string", length=20, nullable=true)
     */
    private $esquema;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=80, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @Column(name="descripcion", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

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
     * @var \Sys.rol
     *
     * @ManyToOne(targetEntity="Sys.rol")
     * @JoinColumns({
     *   @JoinColumn(name="rol", referencedColumnName="id")
     * })
     */
    private $rol;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Sys.excel
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
     * Set esquema
     *
     * @param string $esquema
     * @return Sys.excel
     */
    public function setEsquema($esquema)
    {
        $this->esquema = $esquema;
    
        return $this;
    }

    /**
     * Get esquema
     *
     * @return string 
     */
    public function getEsquema()
    {
        return $this->esquema;
    }

    /** 
     * Set nombre
     *
     * @param string $nombre
     * @return Sys.excel
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sys.excel
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /** 
     * Set estado
     *
     * @param integer $estado
     * @return Sys.excel
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
     * Set usucrea
     *
     * @param string $usucrea
     * @return Sys.excel
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
     * @return Sys.excel
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
     * @return Sys.excel
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
     * @return Sys.excel
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
     * Set rol
     *
     * @param \Sys.rol $rol
     * @return Sys.excel
     */
    public function setRol($rol = null)
    {
        $this->rol = $rol;
    
        return $this;
    }

    /**
     * Get rol
     *
     * @return \Sys.rol 
     */
    public function getRol()
    {
        return $this->rol;
    }
}
