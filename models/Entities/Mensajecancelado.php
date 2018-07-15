<?php


/* Date: 18/04/2018 11:20:19 */

namespace Entities;

/**
 * Mensajecancelado
 *
 * @Table(name="mensajecancelado", indexes={@Index(name="IXFK_mensajecancelado_dosificacion", columns={"mensaje"})})
 * @Entity
 */
class Mensajecancelado
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @Column(name="codigo", type="string", length=6, nullable=true)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var \Mensaje
     *
     * @ManyToOne(targetEntity="Mensaje")
     * @JoinColumns({
     *   @JoinColumn(name="mensaje", referencedColumnName="id")
     * })
     */
    private $mensaje;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Mensajecancelado
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
     * @return Mensajecancelado
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
     * Set codigo
     *
     * @param string $codigo
     * @return Mensajecancelado
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
     * Set estado
     *
     * @param integer $estado
     * @return Mensajecancelado
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
     * Set mensaje
     *
     * @param \Dosificacion $mensaje
     * @return Mensajecancelado
     */
    public function setMensaje($mensaje = null)
    {
        $this->mensaje = $mensaje;
    
        return $this;
    }

    /**
     * Get mensaje
     *
     * @return \Dosificacion 
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }
}
