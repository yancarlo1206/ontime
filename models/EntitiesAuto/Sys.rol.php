<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Sys.rol
 *
 * @Table(name="sys.rol")
 * @Entity
 */
class Sys.rol
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sys.rol_id_seq", allocationSize=1, initialValue=1)
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
     * @ManyToMany(targetEntity="Sys.perfil", inversedBy="rol")
     * @JoinTable(name="sys.perfilrol",
     *   joinColumns={
     *     @JoinColumn(name="rol", referencedColumnName="id")
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
     * @ManyToMany(targetEntity="Sys.usuario", mappedBy="rol")
     */
    private $usuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->perfil = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /** 
     * Set id
     *
     * @param integer $id
     * @return Sys.rol
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
     * @return Sys.rol
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
     * Add perfil
     *
     * @param \Sys.perfil $perfil
     * @return Sys.rol
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
     * Add usuario
     *
     * @param \Sys.usuario $usuario
     * @return Sys.rol
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
