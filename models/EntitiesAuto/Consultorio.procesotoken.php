<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.procesotoken
 *
 * @Table(name="consultorio.procesotoken")
 * @Entity
 */
class Consultorio.procesotoken
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="proceso", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.procesotoken_proceso_seq", allocationSize=1, initialValue=1)
     */
    private $proceso;

    /**
     * @var integer
     *
     * @Column(name="token", type="integer", nullable=false)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;


    /** 
     * Set proceso
     *
     * @param integer $proceso
     * @return Consultorio.procesotoken
     */
    public function setProceso($proceso)
    {
        $this->proceso = $proceso;
    
        return $this;
    }

    /**
     * Get proceso
     *
     * @return integer 
     */
    public function getProceso()
    {
        return $this->proceso;
    }

    /** 
     * Set token
     *
     * @param integer $token
     * @return Consultorio.procesotoken
     */
    public function setToken($token)
    {
        $this->token = $token;
    
        return $this;
    }

    /**
     * Get token
     *
     * @return integer 
     */
    public function getToken()
    {
        return $this->token;
    }

    /** 
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Consultorio.procesotoken
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}
