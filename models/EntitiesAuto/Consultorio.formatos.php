<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.formatos
 *
 * @Table(name="consultorio.formatos")
 * @Entity
 */
class Consultorio.formatos
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="smallint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.formatos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="descripcion", type="string", length=80, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @Column(name="archivo", type="string", length=120, nullable=true)
     */
    private $archivo;

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
     * Set id
     *
     * @param integer $id
     * @return Consultorio.formatos
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
     * @return Consultorio.formatos
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
     * Set archivo
     *
     * @param string $archivo
     * @return Consultorio.formatos
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;
    
        return $this;
    }

    /**
     * Get archivo
     *
     * @return string 
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /** 
     * Set estado
     *
     * @param integer $estado
     * @return Consultorio.formatos
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
     * @return Consultorio.formatos
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
     * @return Consultorio.formatos
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
}
