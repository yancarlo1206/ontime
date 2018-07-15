<?php


/* Date: 18/04/2018 11:20:19 */

namespace Entities;

/**
 * Mensajecampana
 *
 * @Table(name="mensajecampana", indexes={@Index(name="IXFK_mensajecampana_campana", columns={"campana"})})
 * @Entity
 */
class Mensajecampana
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
     * @Column(name="telefono", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @Column(name="mensaje", type="string", length=300, nullable=true)
     */
    private $mensaje;

    /**
     * @var \DateTime
     *
     * @Column(name="fechaprogramada", type="datetime", nullable=true)
     */
    private $fechaprogramada;

    /**
     * @var \DateTime
     *
     * @Column(name="fechaenvio", type="datetime", nullable=true)
     */
    private $fechaenvio;

    /**
     * @var string
     *
     * @Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado;

    /**
     * @var \Campana
     *
     * @ManyToOne(targetEntity="Campana")
     * @JoinColumns({
     *   @JoinColumn(name="campana", referencedColumnName="id")
     * })
     */
    private $campana;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Mensajecampana
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
     * @return Mensajecampana
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
     * Set mensaje
     *
     * @param string $mensaje
     * @return Mensajecampana
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
     * Set fechaprogramada
     *
     * @param \DateTime $fechaprogramada
     * @return Mensajecampana
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
     * Set fechaenvio
     *
     * @param \DateTime $fechaenvio
     * @return Mensajecampana
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
     * Set estado
     *
     * @param string $estado
     * @return Mensajecampana
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /** 
     * Set campana
     *
     * @param \Campana $campana
     * @return Mensajecampana
     */
    public function setCampana($campana = null)
    {
        $this->campana = $campana;
    
        return $this;
    }

    /**
     * Get campana
     *
     * @return \Campana 
     */
    public function getCampana()
    {
        return $this->campana;
    }
}
