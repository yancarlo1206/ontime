<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Sys.servicio
 *
 * @Table(name="sys.servicio")
 * @Entity
 */
class Sys.servicio
{

function __construct() {}

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=30, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @Column(name="url", type="string", length=50, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @Column(name="imagen", type="string", length=30, nullable=true)
     */
    private $imagen;

    /**
     * @var integer
     *
     * @Column(name="rol", type="integer", nullable=false)
     */
    private $rol;

    /**
     * @var \Sys.rol
     *
     * @Id
     * @GeneratedValue(strategy="NONE")
     * @OneToOne(targetEntity="Sys.rol")
     * @JoinColumns({
     *   @JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;


    /** 
     * Set nombre
     *
     * @param string $nombre
     * @return Sys.servicio
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
     * @return Sys.servicio
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
     * Set url
     *
     * @param string $url
     * @return Sys.servicio
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /** 
     * Set imagen
     *
     * @param string $imagen
     * @return Sys.servicio
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /** 
     * Set rol
     *
     * @param integer $rol
     * @return Sys.servicio
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    
        return $this;
    }

    /**
     * Get rol
     *
     * @return integer 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /** 
     * Set id
     *
     * @param \Sys.rol $id
     * @return Sys.servicio
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return \Sys.rol 
     */
    public function getId()
    {
        return $this->id;
    }
}
