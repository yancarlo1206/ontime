<?php


/* Date: 18/04/2018 11:20:19 */

namespace Entities;

/**
 * Dosificacion
 *
 * @Table(name="dosificacion", indexes={@Index(name="IXFK_dosificacion_frecuencia", columns={"frecuencia"}), @Index(name="IXFK_dosificacion_medicamento", columns={"medicamento"}), @Index(name="fk_dosificacion_cliente1_idx", columns={"cliente"}), @Index(name="fk_dosificacion_usuario1_idx", columns={"usuario"})})
 * @Entity
 */
class Dosificacion
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
     * @var integer
     *
     * @Column(name="dosis", type="integer", nullable=false)
     */
    private $dosis;

    /**
     * @var \DateTime
     *
     * @Column(name="fechainicio", type="datetime", nullable=true)
     */
    private $fechainicio;

    /**
     * @var string
     *
     * @Column(name="plantilla", type="string", length=50, nullable=true)
     */
    private $plantilla;

    /**
     * @var integer
     *
     * @Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var integer
     *
     * @Column(name="cantidadmensajes", type="integer", nullable=false)
     */
    private $cantidadmensajes;

    /**
     * @var integer
     *
     * @Column(name="mensajesenviados", type="integer", nullable=true)
     */
    private $mensajesenviados;

    /**
     * @var string
     *
     * @Column(name="tipomensaje", type="string", length=50, nullable=true)
     */
    private $tipomensaje;

    /**
     * @var boolean
     *
     * @Column(name="recompra", type="boolean", nullable=false)
     */
    private $recompra;

    /**
     * @var \Frecuencia
     *
     * @ManyToOne(targetEntity="Frecuencia")
     * @JoinColumns({
     *   @JoinColumn(name="frecuencia", referencedColumnName="id")
     * })
     */
    private $frecuencia;

    /**
     * @var \Medicamento
     *
     * @ManyToOne(targetEntity="Medicamento")
     * @JoinColumns({
     *   @JoinColumn(name="medicamento", referencedColumnName="id")
     * })
     */
    private $medicamento;

    /**
     * @var \Cliente
     *
     * @ManyToOne(targetEntity="Cliente")
     * @JoinColumns({
     *   @JoinColumn(name="cliente", referencedColumnName="id")
     * })
     */
    private $cliente;

    /**
     * @var \Usuario
     *
     * @ManyToOne(targetEntity="Usuario")
     * @JoinColumns({
     *   @JoinColumn(name="usuario", referencedColumnName="id")
     * })
     */
    private $usuario;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Dosificacion
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
     * Set dosis
     *
     * @param integer $dosis
     * @return Dosificacion
     */
    public function setDosis($dosis)
    {
        $this->dosis = $dosis;
    
        return $this;
    }

    /**
     * Get dosis
     *
     * @return integer 
     */
    public function getDosis()
    {
        return $this->dosis;
    }

    /** 
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Dosificacion
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
     * Set plantilla
     *
     * @param string $plantilla
     * @return Dosificacion
     */
    public function setPlantilla($plantilla)
    {
        $this->plantilla = $plantilla;
    
        return $this;
    }

    /**
     * Get plantilla
     *
     * @return string 
     */
    public function getPlantilla()
    {
        return $this->plantilla;
    }

    /** 
     * Set estado
     *
     * @param integer $estado
     * @return Dosificacion
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
     * Set cantidadmensajes
     *
     * @param integer $cantidadmensajes
     * @return Dosificacion
     */
    public function setCantidadmensajes($cantidadmensajes)
    {
        $this->cantidadmensajes = $cantidadmensajes;
    
        return $this;
    }

    /**
     * Get cantidadmensajes
     *
     * @return integer 
     */
    public function getCantidadmensajes()
    {
        return $this->cantidadmensajes;
    }

    /** 
     * Set mensajesenviados
     *
     * @param integer $mensajesenviados
     * @return Dosificacion
     */
    public function setMensajesenviados($mensajesenviados)
    {
        $this->mensajesenviados = $mensajesenviados;
    
        return $this;
    }

    /**
     * Get mensajesenviados
     *
     * @return integer 
     */
    public function getMensajesenviados()
    {
        return $this->mensajesenviados;
    }

    /** 
     * Set tipomensaje
     *
     * @param string $tipomensaje
     * @return Dosificacion
     */
    public function setTipomensaje($tipomensaje)
    {
        $this->tipomensaje = $tipomensaje;
    
        return $this;
    }

    /**
     * Get tipomensaje
     *
     * @return string 
     */
    public function getTipomensaje()
    {
        return $this->tipomensaje;
    }

    /** 
     * Set recompra
     *
     * @param boolean $recompra
     * @return Dosificacion
     */
    public function setRecompra($recompra)
    {
        $this->recompra = $recompra;
    
        return $this;
    }

    /**
     * Get recompra
     *
     * @return boolean 
     */
    public function getRecompra()
    {
        return $this->recompra;
    }

    /** 
     * Set frecuencia
     *
     * @param \Frecuencia $frecuencia
     * @return Dosificacion
     */
    public function setFrecuencia($frecuencia = null)
    {
        $this->frecuencia = $frecuencia;
    
        return $this;
    }

    /**
     * Get frecuencia
     *
     * @return \Frecuencia 
     */
    public function getFrecuencia()
    {
        return $this->frecuencia;
    }

    /** 
     * Set medicamento
     *
     * @param \Medicamento $medicamento
     * @return Dosificacion
     */
    public function setMedicamento($medicamento = null)
    {
        $this->medicamento = $medicamento;
    
        return $this;
    }

    /**
     * Get medicamento
     *
     * @return \Medicamento 
     */
    public function getMedicamento()
    {
        return $this->medicamento;
    }

    /** 
     * Set cliente
     *
     * @param \Cliente $cliente
     * @return Dosificacion
     */
    public function setCliente($cliente = null)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /** 
     * Set usuario
     *
     * @param \Usuario $usuario
     * @return Dosificacion
     */
    public function setUsuario($usuario = null)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
