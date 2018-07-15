<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Sys.configuracion
 *
 * @Table(name="sys.configuracion")
 * @Entity
 */
class Sys.configuracion
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="sys.configuracion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="variable", type="string", length=60, nullable=false)
     */
    private $variable;

    /**
     * @var string
     *
     * @Column(name="valor", type="string", length=60, nullable=false)
     */
    private $valor;

    /**
     * @var integer
     *
     * @Column(name="estado", type="integer", nullable=false)
     */
    private $estado;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Sys.configuracion
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
     * Set variable
     *
     * @param string $variable
     * @return Sys.configuracion
     */
    public function setVariable($variable)
    {
        $this->variable = $variable;
    
        return $this;
    }

    /**
     * Get variable
     *
     * @return string 
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /** 
     * Set valor
     *
     * @param string $valor
     * @return Sys.configuracion
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    
        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /** 
     * Set estado
     *
     * @param integer $estado
     * @return Sys.configuracion
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
