<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Sys.perfil
 *
 * @Table(name="sys.perfil")
 * @Entity
 */
class Sys.perfil
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sys.perfil_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="descripcion", type="string", length=30, nullable=true)
     */
    private $descripcion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ManyToMany(targetEntity="Sys.rol", mappedBy="perfil")
     */
    private $rol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ManyToMany(targetEntity="Sys.usuario", mappedBy="perfil")
     */
    private $usuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rol = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /** 
     * Set id
     *
     * @param integer $id
     * @return Sys.perfil
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sys.perfil
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
     * Add rol
     *
     * @param \Sys.rol $rol
     * @return Sys.perfil
     */
    public function addRol($rol)
    {
        $this->rol[] = $rol;
    
        return $this;
    }

    /**
     * Remove rol
     *
     * @param \Sys.rol $rol
     */
    public function removeRol($rol)
    {
        $this->rol->removeElement($rol);
    }

    /**
     * Get rol
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Add usuario
     *
     * @param \Sys.usuario $usuario
     * @return Sys.perfil
     */
    public function addUsuario($usuario)
    {
        $this->usuario[] = $usuario;
    
        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \Sys.usuario $usuario
     */
    public function removeUsuario($usuario)
    {
        $this->usuario->removeElement($usuario);
    }

    /**
     * Get usuario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
