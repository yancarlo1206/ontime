<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Sys.categorias
 *
 * @Table(name="sys.categorias")
 * @Entity
 */
class Sys.categorias
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="smallint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sys.categorias_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @Column(name="usercrea", type="string", length=80, nullable=true)
     */
    private $usercrea;

    /**
     * @var \DateTime
     *
     * @Column(name="fechacrea", type="datetime", nullable=true)
     */
    private $fechacrea;

    /**
     * @var string
     *
     * @Column(name="usermod", type="string", length=80, nullable=true)
     */
    private $usermod;

    /**
     * @var \DateTime
     *
     * @Column(name="fechamod", type="datetime", nullable=true)
     */
    private $fechamod;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Sys.categorias
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
     * @return Sys.categorias
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
     * Set estado
     *
     * @param integer $estado
     * @return Sys.categorias
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
     * Set usercrea
     *
     * @param string $usercrea
     * @return Sys.categorias
     */
    public function setUsercrea($usercrea)
    {
        $this->usercrea = $usercrea;
    
        return $this;
    }

    /**
     * Get usercrea
     *
     * @return string 
     */
    public function getUsercrea()
    {
        return $this->usercrea;
    }

    /** 
     * Set fechacrea
     *
     * @param \DateTime $fechacrea
     * @return Sys.categorias
     */
    public function setFechacrea($fechacrea)
    {
        $this->fechacrea = $fechacrea;
    
        return $this;
    }

    /**
     * Get fechacrea
     *
     * @return \DateTime 
     */
    public function getFechacrea()
    {
        return $this->fechacrea;
    }

    /** 
     * Set usermod
     *
     * @param string $usermod
     * @return Sys.categorias
     */
    public function setUsermod($usermod)
    {
        $this->usermod = $usermod;
    
        return $this;
    }

    /**
     * Get usermod
     *
     * @return string 
     */
    public function getUsermod()
    {
        return $this->usermod;
    }

    /** 
     * Set fechamod
     *
     * @param \DateTime $fechamod
     * @return Sys.categorias
     */
    public function setFechamod($fechamod)
    {
        $this->fechamod = $fechamod;
    
        return $this;
    }

    /**
     * Get fechamod
     *
     * @return \DateTime 
     */
    public function getFechamod()
    {
        return $this->fechamod;
    }
}
