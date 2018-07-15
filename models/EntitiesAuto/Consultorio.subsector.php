<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.subsector
 *
 * @Table(name="consultorio.subsector", indexes={@Index(name="IDX_B89A19F54BA3D9E8", columns={"sector"})})
 * @Entity
 */
class Consultorio.subsector
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="smallint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.subsector_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="descripcion", type="string", length=150, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var \Consultorio.sector
     *
     * @ManyToOne(targetEntity="Consultorio.sector")
     * @JoinColumns({
     *   @JoinColumn(name="sector", referencedColumnName="id")
     * })
     */
    private $sector;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.subsector
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
     * @return Consultorio.subsector
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
     * @return Consultorio.subsector
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
     * Set sector
     *
     * @param \Consultorio.sector $sector
     * @return Consultorio.subsector
     */
    public function setSector($sector = null)
    {
        $this->sector = $sector;
    
        return $this;
    }

    /**
     * Get sector
     *
     * @return \Consultorio.sector 
     */
    public function getSector()
    {
        return $this->sector;
    }
}
