<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.barrio
 *
 * @Table(name="consultorio.barrio", indexes={@Index(name="IDX_451C098B8E86059E", columns={"ciudad"})})
 * @Entity
 */
class Consultorio.barrio
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="smallint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.barrio_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Consultorio.ciudad
     *
     * @ManyToOne(targetEntity="Consultorio.ciudad")
     * @JoinColumns({
     *   @JoinColumn(name="ciudad", referencedColumnName="id")
     * })
     */
    private $ciudad;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.barrio
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
     * @return Consultorio.barrio
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
     * @return Consultorio.barrio
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
     * Set ciudad
     *
     * @param \Consultorio.ciudad $ciudad
     * @return Consultorio.barrio
     */
    public function setCiudad($ciudad = null)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return \Consultorio.ciudad 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
}
