<?php


/* Date: 18/04/2018 11:20:18 */

namespace Entities;

/**
 * Campana
 *
 * @Table(name="campana", indexes={@Index(name="IXFK_campana_usuario", columns={"usuario"})})
 * @Entity
 */
class Campana
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
     * @Column(name="fechacampa", type="datetime", nullable=true)
     */
    private $fechacampa;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

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
     * @return Campana
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
     * Set fechacampa
     *
     * @param \DateTime $fechacampa
     * @return Campana
     */
    public function setFechacampa($fechacampa)
    {
        $this->fechacampa = $fechacampa;
    
        return $this;
    }

    /**
     * Get fechacampa
     *
     * @return \DateTime 
     */
    public function getFechacampa()
    {
        return $this->fechacampa;
    }

    /** 
     * Set nombre
     *
     * @param string $nombre
     * @return Campana
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
     * Set usuario
     *
     * @param \Usuario $usuario
     * @return Campana
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
