<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Sys.turno
 *
 * @Table(name="sys.turno", indexes={@Index(name="IDX_5DAB5F8A4E10122D", columns={"categoria"}), @Index(name="IDX_5DAB5F8A3BE496E4", columns={"cubiculo"})})
 * @Entity
 */
class Sys.turno
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sys.turno_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="codigo", type="string", length=50, nullable=true)
     */
    private $codigo;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @Column(name="persona", type="integer", nullable=true)
     */
    private $persona;

    /**
     * @var integer
     *
     * @Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @Column(name="atiende", type="string", length=80, nullable=true)
     */
    private $atiende;

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
     * @var \Sys.categorias
     *
     * @ManyToOne(targetEntity="Sys.categorias")
     * @JoinColumns({
     *   @JoinColumn(name="categoria", referencedColumnName="id")
     * })
     */
    private $categoria;

    /**
     * @var \Sys.cubiculo
     *
     * @ManyToOne(targetEntity="Sys.cubiculo")
     * @JoinColumns({
     *   @JoinColumn(name="cubiculo", referencedColumnName="id")
     * })
     */
    private $cubiculo;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Sys.turno
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
     * Set codigo
     *
     * @param string $codigo
     * @return Sys.turno
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /** 
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Sys.turno
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
     * Set persona
     *
     * @param integer $persona
     * @return Sys.turno
     */
    public function setPersona($persona)
    {
        $this->persona = $persona;
    
        return $this;
    }

    /**
     * Get persona
     *
     * @return integer 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /** 
     * Set estado
     *
     * @param integer $estado
     * @return Sys.turno
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
     * Set atiende
     *
     * @param string $atiende
     * @return Sys.turno
     */
    public function setAtiende($atiende)
    {
        $this->atiende = $atiende;
    
        return $this;
    }

    /**
     * Get atiende
     *
     * @return string 
     */
    public function getAtiende()
    {
        return $this->atiende;
    }

    /** 
     * Set usercrea
     *
     * @param string $usercrea
     * @return Sys.turno
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
     * @return Sys.turno
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
     * @return Sys.turno
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
     * @return Sys.turno
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
     * Set categoria
     *
     * @param \Sys.categorias $categoria
     * @return Sys.turno
     */
    public function setCategoria($categoria = null)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return \Sys.categorias 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /** 
     * Set cubiculo
     *
     * @param \Sys.cubiculo $cubiculo
     * @return Sys.turno
     */
    public function setCubiculo($cubiculo = null)
    {
        $this->cubiculo = $cubiculo;
    
        return $this;
    }

    /**
     * Get cubiculo
     *
     * @return \Sys.cubiculo 
     */
    public function getCubiculo()
    {
        return $this->cubiculo;
    }
}
