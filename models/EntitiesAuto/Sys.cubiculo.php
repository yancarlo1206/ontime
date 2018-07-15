<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Sys.cubiculo
 *
 * @Table(name="sys.cubiculo")
 * @Entity
 */
class Sys.cubiculo
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="smallint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sys.cubiculo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="puesto", type="string", length=25, nullable=true)
     */
    private $puesto;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=20, nullable=true)
     */
    private $nombre;

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
     * @return Sys.cubiculo
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
     * Set puesto
     *
     * @param string $puesto
     * @return Sys.cubiculo
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;
    
        return $this;
    }

    /**
     * Get puesto
     *
     * @return string 
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /** 
     * Set nombre
     *
     * @param string $nombre
     * @return Sys.cubiculo
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
     * Set estado
     *
     * @param integer $estado
     * @return Sys.cubiculo
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
     * @return Sys.cubiculo
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
     * @return Sys.cubiculo
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
