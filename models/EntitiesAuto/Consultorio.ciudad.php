<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.ciudad
 *
 * @Table(name="consultorio.ciudad", indexes={@Index(name="IDX_6447251440E497EB", columns={"departamento"})})
 * @Entity
 */
class Consultorio.ciudad
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="smallint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.ciudad_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Consultorio.departamento
     *
     * @ManyToOne(targetEntity="Consultorio.departamento")
     * @JoinColumns({
     *   @JoinColumn(name="departamento", referencedColumnName="id")
     * })
     */
    private $departamento;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.ciudad
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
     * @return Consultorio.ciudad
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
     * @return Consultorio.ciudad
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
     * Set departamento
     *
     * @param \Consultorio.departamento $departamento
     * @return Consultorio.ciudad
     */
    public function setDepartamento($departamento = null)
    {
        $this->departamento = $departamento;
    
        return $this;
    }

    /**
     * Get departamento
     *
     * @return \Consultorio.departamento 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }
}
