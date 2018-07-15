<?php


/* Date: 26/01/2018 20:18:40 */

namespace Entities;

/**
 * Tarifas
 *
 * @Table(name="tarifas", indexes={@Index(name="fk_tarifas_usuario1_idx", columns={"usuario"})})
 * @Entity
 */
class Tarifas
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
     * @Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @Column(name="porcentajedescuento", type="integer", nullable=false)
     */
    private $porcentajedescuento;

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
     * @return Tarifas
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
     * @return Tarifas
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
     * Set porcentajedescuento
     *
     * @param integer $porcentajedescuento
     * @return Tarifas
     */
    public function setPorcentajedescuento($porcentajedescuento)
    {
        $this->porcentajedescuento = $porcentajedescuento;
    
        return $this;
    }

    /**
     * Get porcentajedescuento
     *
     * @return integer 
     */
    public function getPorcentajedescuento()
    {
        return $this->porcentajedescuento;
    }

    /** 
     * Set usuario
     *
     * @param \Usuario $usuario
     * @return Tarifas
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
