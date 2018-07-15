<?php


/* Date: 26/01/2018 20:18:40 */

namespace Entities;

/**
 * Mensaje
 *
 * @Table(name="mensaje", indexes={@Index(name="IXFK_mensaje_dosificacion", columns={"dosis"}), @Index(name="fk_mensaje_estadomensaje1_idx", columns={"estadomensaje"})})
 * @Entity
 */
class Mensaje
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
     * @var string
     *
     * @Column(name="telefono", type="string", length=20, nullable=false)
     */
    private $telefono;

    /**
     * @var \DateTime
     *
     * @Column(name="fechaprogramada", type="datetime", nullable=true)
     */
    private $fechaprogramada;

    /**
     * @var string
     *
     * @Column(name="mensaje", type="string", length=300, nullable=true)
     */
    private $mensaje;

    /**
     * @var \DateTime
     *
     * @Column(name="fechaenvio", type="datetime", nullable=true)
     */
    private $fechaenvio;

    /**
     * @var string
     *
     * @Column(name="correo", type="string", length=100, nullable=true)
     */
    private $correo;

    /**
     * @var integer
     *
     * @Column(name="tipomensaje", type="integer", nullable=true)
     */
    private $tipomensaje;

    /**
     * @var \Dosificacion
     *
     * @ManyToOne(targetEntity="Dosificacion")
     * @JoinColumns({
     *   @JoinColumn(name="dosis", referencedColumnName="id")
     * })
     */
    private $dosis;

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
     * @var \Estadomensaje
     *
     * @ManyToOne(targetEntity="Estadomensaje")
     * @JoinColumns({
     *   @JoinColumn(name="estadomensaje", referencedColumnName="id")
     * })
     */
    private $estadomensaje;

    /**
     * @var float
     *
     * @Column(name="valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $valor = '0';


    /** 
     * Set id
     *
     * @param integer $id
     * @return Mensaje
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
     * Set telefono
     *
     * @param string $telefono
     * @return Mensaje
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
     * Set fechaprogramada
     *
     * @param \DateTime $fechaprogramada
     * @return Mensaje
     */
    public function setFechaprogramada($fechaprogramada)
    {
        $this->fechaprogramada = $fechaprogramada;
    
        return $this;
    }

    /**
     * Get fechaprogramada
     *
     * @return \DateTime 
     */
    public function getFechaprogramada()
    {
        return $this->fechaprogramada;
    }

    /** 
     * Set mensaje
     *
     * @param string $mensaje
     * @return Mensaje
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    
        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string 
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /** 
     * Set fechaenvio
     *
     * @param \DateTime $fechaenvio
     * @return Mensaje
     */
    public function setFechaenvio($fechaenvio)
    {
        $this->fechaenvio = $fechaenvio;
    
        return $this;
    }

    /**
     * Get fechaenvio
     *
     * @return \DateTime 
     */
    public function getFechaenvio()
    {
        return $this->fechaenvio;
    }

    /** 
     * Set correo
     *
     * @param string $correo
     * @return Mensaje
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
     * Set tipomensaje
     *
     * @param integer $tipomensaje
     * @return Mensaje
     */
    public function setTipomensaje($tipomensaje)
    {
        $this->tipomensaje = $tipomensaje;
    
        return $this;
    }

    /**
     * Get tipomensaje
     *
     * @return integer 
     */
    public function getTipomensaje()
    {
        return $this->tipomensaje;
    }

    /** 
     * Set dosis
     *
     * @param \Dosificacion $dosis
     * @return Mensaje
     */
    public function setDosis($dosis = null)
    {
        $this->dosis = $dosis;
    
        return $this;
    }

    /**
     * Get dosis
     *
     * @return \Dosificacion 
     */
    public function getDosis()
    {
        return $this->dosis;
    }

    /** 
     * Set usuario
     *
     * @param \Usuario $usuario
     * @return Mensaje
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

    /** 
     * Set estadomensaje
     *
     * @param \Estadomensaje $estadomensaje
     * @return Mensaje
     */
    public function setEstadomensaje($estadomensaje = null)
    {
        $this->estadomensaje = $estadomensaje;
    
        return $this;
    }

    /**
     * Get estadomensaje
     *
     * @return \Estadomensaje 
     */
    public function getEstadomensaje()
    {
        return $this->estadomensaje;
    }

    /** 
     * Set valor
     *
     * @param \Valor $valor
     * @return Mensaje
     */
    public function setValor($valor = null)
    {
        $this->valor = $valor;
    
        return $this;
    }

    /**
     * Get valor
     *
     * @return \Valor 
     */
    public function getValor()
    {
        return $this->valor;
    }

}
