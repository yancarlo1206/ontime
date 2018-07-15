<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.conflictoalposd
 *
 * @Table(name="consultorio.conflictoalposd")
 * @Entity
 */
class Consultorio.conflictoalposd
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="smallint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.conflictoalposd_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @Column(name="persona", type="integer", nullable=false)
     */
    private $persona;

    /**
     * @var \DateTime
     *
     * @Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @Column(name="lugar", type="smallint", nullable=true)
     */
    private $lugar;

    /**
     * @var string
     *
     * @Column(name="anfora", type="string", length=10, nullable=true)
     */
    private $anfora;

    /**
     * @var integer
     *
     * @Column(name="denuncia", type="smallint", nullable=true)
     */
    private $denuncia;

    /**
     * @var integer
     *
     * @Column(name="ruv", type="smallint", nullable=true)
     */
    private $ruv;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.conflictoalposd
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
     * Set persona
     *
     * @param integer $persona
     * @return Consultorio.conflictoalposd
     */
    public function setPersona($persona)
    {
        $this->persona = $persona;
    
        return $this;
    }

    /**
     * Get persona
     *
     * @return integer 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /** 
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Consultorio.conflictoalposd
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

    /** 
     * Set lugar
     *
     * @param integer $lugar
     * @return Consultorio.conflictoalposd
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    
        return $this;
    }

    /**
     * Get lugar
     *
     * @return integer 
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /** 
     * Set anfora
     *
     * @param string $anfora
     * @return Consultorio.conflictoalposd
     */
    public function setAnfora($anfora)
    {
        $this->anfora = $anfora;
    
        return $this;
    }

    /**
     * Get anfora
     *
     * @return string 
     */
    public function getAnfora()
    {
        return $this->anfora;
    }

    /** 
     * Set denuncia
     *
     * @param integer $denuncia
     * @return Consultorio.conflictoalposd
     */
    public function setDenuncia($denuncia)
    {
        $this->denuncia = $denuncia;
    
        return $this;
    }

    /**
     * Get denuncia
     *
     * @return integer 
     */
    public function getDenuncia()
    {
        return $this->denuncia;
    }

    /** 
     * Set ruv
     *
     * @param integer $ruv
     * @return Consultorio.conflictoalposd
     */
    public function setRuv($ruv)
    {
        $this->ruv = $ruv;
    
        return $this;
    }

    /**
     * Get ruv
     *
     * @return integer 
     */
    public function getRuv()
    {
        return $this->ruv;
    }
}
