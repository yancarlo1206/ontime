<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.hechos
 *
 * @Table(name="consultorio.hechos")
 * @Entity
 */
class Consultorio.hechos
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="smallint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.hechos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="descripcion", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.hechos
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
     * @return Consultorio.hechos
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
     * @return Consultorio.hechos
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
}
