<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Sys.opcion
 *
 * @Table(name="sys.opcion", indexes={@Index(name="IDX_392339E4E553F37", columns={"rol"}), @Index(name="IDX_392339E47D053A93", columns={"menu"})})
 * @Entity
 */
class Sys.opcion
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sys.opcion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @Column(name="descripcion", type="string", length=500, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @Column(name="url", type="string", length=100, nullable=true)
     */
    private $url;

    /**
     * @var integer
     *
     * @Column(name="nivel", type="integer", nullable=true)
     */
    private $nivel;

    /**
     * @var integer
     *
     * @Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var \Sys.rol
     *
     * @ManyToOne(targetEntity="Sys.rol")
     * @JoinColumns({
     *   @JoinColumn(name="rol", referencedColumnName="id")
     * })
     */
    private $rol;

    /**
     * @var \Sys.menu
     *
     * @ManyToOne(targetEntity="Sys.menu")
     * @JoinColumns({
     *   @JoinColumn(name="menu", referencedColumnName="id")
     * })
     */
    private $menu;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Sys.opcion
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
     * @return Sys.opcion
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
     * @return Sys.opcion
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
     * @return Sys.opcion
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
     * Set nivel
     *
     * @param integer $nivel
     * @return Sys.opcion
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    
        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /** 
     * Set estado
     *
     * @param integer $estado
     * @return Sys.opcion
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
     * Set rol
     *
     * @param \Sys.rol $rol
     * @return Sys.opcion
     */
    public function setRol($rol = null)
    {
        $this->rol = $rol;
    
        return $this;
    }

    /**
     * Get rol
     *
     * @return \Sys.rol 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /** 
     * Set menu
     *
     * @param \Sys.menu $menu
     * @return Sys.opcion
     */
    public function setMenu($menu = null)
    {
        $this->menu = $menu;
    
        return $this;
    }

    /**
     * Get menu
     *
     * @return \Sys.menu 
     */
    public function getMenu()
    {
        return $this->menu;
    }
}
