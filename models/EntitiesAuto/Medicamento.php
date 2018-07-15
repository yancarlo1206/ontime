<?php


/* Date: 18/04/2018 11:20:19 */

namespace Entities;

/**
 * Medicamento
 *
 * @Table(name="medicamento", indexes={@Index(name="fk_medicamento_tipomedicamento1_idx", columns={"tipomedicamento"}), @Index(name="fk_medicamento_laboratorio1_idx", columns={"laboratorio"}), @Index(name="fk_medicamento_presentacion1_idx", columns={"presentacion"})})
 * @Entity
 */
class Medicamento
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
     * @Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @Column(name="infoadicional", type="string", length=50, nullable=false)
     */
    private $infoadicional;

    /**
     * @var \Laboratorio
     *
     * @ManyToOne(targetEntity="Laboratorio")
     * @JoinColumns({
     *   @JoinColumn(name="laboratorio", referencedColumnName="id")
     * })
     */
    private $laboratorio;

    /**
     * @var \Presentacion
     *
     * @ManyToOne(targetEntity="Presentacion")
     * @JoinColumns({
     *   @JoinColumn(name="presentacion", referencedColumnName="id")
     * })
     */
    private $presentacion;

    /**
     * @var \Tipomedicamento
     *
     * @ManyToOne(targetEntity="Tipomedicamento")
     * @JoinColumns({
     *   @JoinColumn(name="tipomedicamento", referencedColumnName="id")
     * })
     */
    private $tipomedicamento;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Medicamento
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
     * @return Medicamento
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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Medicamento
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /** 
     * Set infoadicional
     *
     * @param string $infoadicional
     * @return Medicamento
     */
    public function setInfoadicional($infoadicional)
    {
        $this->infoadicional = $infoadicional;
    
        return $this;
    }

    /**
     * Get infoadicional
     *
     * @return string 
     */
    public function getInfoadicional()
    {
        return $this->infoadicional;
    }

    /** 
     * Set laboratorio
     *
     * @param \Laboratorio $laboratorio
     * @return Medicamento
     */
    public function setLaboratorio($laboratorio = null)
    {
        $this->laboratorio = $laboratorio;
    
        return $this;
    }

    /**
     * Get laboratorio
     *
     * @return \Laboratorio 
     */
    public function getLaboratorio()
    {
        return $this->laboratorio;
    }

    /** 
     * Set presentacion
     *
     * @param \Presentacion $presentacion
     * @return Medicamento
     */
    public function setPresentacion($presentacion = null)
    {
        $this->presentacion = $presentacion;
    
        return $this;
    }

    /**
     * Get presentacion
     *
     * @return \Presentacion 
     */
    public function getPresentacion()
    {
        return $this->presentacion;
    }

    /** 
     * Set tipomedicamento
     *
     * @param \Tipomedicamento $tipomedicamento
     * @return Medicamento
     */
    public function setTipomedicamento($tipomedicamento = null)
    {
        $this->tipomedicamento = $tipomedicamento;
    
        return $this;
    }

    /**
     * Get tipomedicamento
     *
     * @return \Tipomedicamento 
     */
    public function getTipomedicamento()
    {
        return $this->tipomedicamento;
    }
}
