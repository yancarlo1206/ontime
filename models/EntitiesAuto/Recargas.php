<?php


/* Date: 18/04/2018 11:20:19 */

namespace Entities;

/**
 * Recargas
 *
 * @Table(name="recargas", indexes={@Index(name="fk_recargas_usuario1_idx", columns={"usuario"}), @Index(name="fk_recargas_formapago1_idx", columns={"formapago"})})
 * @Entity
 */
class Recargas
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
     * @var integer
     *
     * @Column(name="valor", type="integer", nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @Column(name="referenciapago", type="string", length=45, nullable=true)
     */
    private $referenciapago;

    /**
     * @var \Formapago
     *
     * @ManyToOne(targetEntity="Formapago")
     * @JoinColumns({
     *   @JoinColumn(name="formapago", referencedColumnName="id")
     * })
     */
    private $formapago;

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
     * @return Recargas
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
     * @return Recargas
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
     * Set valor
     *
     * @param integer $valor
     * @return Recargas
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    
        return $this;
    }

    /**
     * Get valor
     *
     * @return integer 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /** 
     * Set referenciapago
     *
     * @param string $referenciapago
     * @return Recargas
     */
    public function setReferenciapago($referenciapago)
    {
        $this->referenciapago = $referenciapago;
    
        return $this;
    }

    /**
     * Get referenciapago
     *
     * @return string 
     */
    public function getReferenciapago()
    {
        return $this->referenciapago;
    }

    /** 
     * Set formapago
     *
     * @param \Formapago $formapago
     * @return Recargas
     */
    public function setFormapago($formapago = null)
    {
        $this->formapago = $formapago;
    
        return $this;
    }

    /**
     * Get formapago
     *
     * @return \Formapago 
     */
    public function getFormapago()
    {
        return $this->formapago;
    }

    /** 
     * Set usuario
     *
     * @param \Usuario $usuario
     * @return Recargas
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
