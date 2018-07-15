<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Consultorio.horariosel
 *
 * @Table(name="consultorio.horariosel", indexes={@Index(name="IDX_F2F774D6E25853A3", columns={"horario"})})
 * @Entity
 */
class Consultorio.horariosel
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.horariosel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="codigo", type="string", length=80, nullable=true)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @Column(name="perano", type="smallint", nullable=true)
     */
    private $perano;

    /**
     * @var integer
     *
     * @Column(name="persem", type="smallint", nullable=true)
     */
    private $persem;

    /**
     * @var string
     *
     * @Column(name="usucrea", type="string", length=80, nullable=true)
     */
    private $usucrea;

    /**
     * @var \DateTime
     *
     * @Column(name="fechacrea", type="datetime", nullable=true)
     */
    private $fechacrea;

    /**
     * @var string
     *
     * @Column(name="usumod", type="string", length=80, nullable=true)
     */
    private $usumod;

    /**
     * @var \DateTime
     *
     * @Column(name="fechamod", type="datetime", nullable=true)
     */
    private $fechamod;

    /**
     * @var integer
     *
     * @Column(name="estado", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var \Consultorio.horario
     *
     * @ManyToOne(targetEntity="Consultorio.horario")
     * @JoinColumns({
     *   @JoinColumn(name="horario", referencedColumnName="id")
     * })
     */
    private $horario;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.horariosel
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
     * Set codigo
     *
     * @param string $codigo
     * @return Consultorio.horariosel
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /** 
     * Set perano
     *
     * @param integer $perano
     * @return Consultorio.horariosel
     */
    public function setPerano($perano)
    {
        $this->perano = $perano;
    
        return $this;
    }

    /**
     * Get perano
     *
     * @return integer 
     */
    public function getPerano()
    {
        return $this->perano;
    }

    /** 
     * Set persem
     *
     * @param integer $persem
     * @return Consultorio.horariosel
     */
    public function setPersem($persem)
    {
        $this->persem = $persem;
    
        return $this;
    }

    /**
     * Get persem
     *
     * @return integer 
     */
    public function getPersem()
    {
        return $this->persem;
    }

    /** 
     * Set usucrea
     *
     * @param string $usucrea
     * @return Consultorio.horariosel
     */
    public function setUsucrea($usucrea)
    {
        $this->usucrea = $usucrea;
    
        return $this;
    }

    /**
     * Get usucrea
     *
     * @return string 
     */
    public function getUsucrea()
    {
        return $this->usucrea;
    }

    /** 
     * Set fechacrea
     *
     * @param \DateTime $fechacrea
     * @return Consultorio.horariosel
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
     * Set usumod
     *
     * @param string $usumod
     * @return Consultorio.horariosel
     */
    public function setUsumod($usumod)
    {
        $this->usumod = $usumod;
    
        return $this;
    }

    /**
     * Get usumod
     *
     * @return string 
     */
    public function getUsumod()
    {
        return $this->usumod;
    }

    /** 
     * Set fechamod
     *
     * @param \DateTime $fechamod
     * @return Consultorio.horariosel
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

    /** 
     * Set estado
     *
     * @param integer $estado
     * @return Consultorio.horariosel
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
     * Set horario
     *
     * @param \Consultorio.horario $horario
     * @return Consultorio.horariosel
     */
    public function setHorario($horario = null)
    {
        $this->horario = $horario;
    
        return $this;
    }

    /**
     * Get horario
     *
     * @return \Consultorio.horario 
     */
    public function getHorario()
    {
        return $this->horario;
    }
}
