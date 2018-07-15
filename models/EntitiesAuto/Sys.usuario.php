<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Sys.usuario
 *
 * @Table(name="sys.usuario")
 * @Entity
 */
class Sys.usuario
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sys.usuario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="usuario", type="string", length=10, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @Column(name="clave", type="string", length=50, nullable=true)
     */
    private $clave;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ManyToMany(targetEntity="Sys.perfil", inversedBy="usuario")
     * @JoinTable(name="sys.usuarioperfil",
     *   joinColumns={
     *     @JoinColumn(name="usuario", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @JoinColumn(name="perfil", referencedColumnName="id")
     *   }
     * )
     */
    private $perfil;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ManyToMany(targetEntity="Sys.rol", inversedBy="usuario")
     * @JoinTable(name="sys.usuariorol",
     *   joinColumns={
     *     @JoinColumn(name="usuario", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @JoinColumn(name="rol", referencedColumnName="id")
     *   }
     * )
     */
    private $rol;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->perfil = new \Doctrine\Common\Collections\ArrayCollection();
        $this->rol = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /** 
     * Set id
     *
     * @param integer $id
     * @return Sys.usuario
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
     * Set usuario
     *
     * @param string $usuario
     * @return Sys.usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /** 
     * Set clave
     *
     * @param string $clave
     * @return Sys.usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    
        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Add perfil
     *
     * @param \Sys.perfil $perfil
     * @return Sys.usuario
     */
    public function addPerfil($perfil)
    {
        $this->perfil[] = $perfil;
    
        return $this;
    }

    /**
     * Remove perfil
     *
     * @param \Sys.perfil $perfil
     */
    public function removePerfil($perfil)
    {
        $this->perfil->removeElement($perfil);
    }

    /**
     * Get perfil
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Add rol
     *
     * @param \Sys.rol $rol
     * @return Sys.usuario
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
}
