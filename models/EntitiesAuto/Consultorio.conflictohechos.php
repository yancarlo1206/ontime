<?php


/* Date: 28/06/2018 15:40:38 */

namespace Entities;

/**
 * Consultorio.conflictohechos
 *
 * @Table(name="consultorio.conflictohechos", indexes={@Index(name="IDX_C66992B492B57A0", columns={"conflicto"}), @Index(name="IDX_C66992B592024BF", columns={"hecho"})})
 * @Entity
 */
class Consultorio.conflictohechos
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="smallint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="consultorio.conflictohechos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Consultorio.conflictoalposd
     *
     * @ManyToOne(targetEntity="Consultorio.conflictoalposd")
     * @JoinColumns({
     *   @JoinColumn(name="conflicto", referencedColumnName="id")
     * })
     */
    private $conflicto;

    /**
     * @var \Consultorio.hechos
     *
     * @ManyToOne(targetEntity="Consultorio.hechos")
     * @JoinColumns({
     *   @JoinColumn(name="hecho", referencedColumnName="id")
     * })
     */
    private $hecho;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Consultorio.conflictohechos
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
     * Set conflicto
     *
     * @param \Consultorio.conflictoalposd $conflicto
     * @return Consultorio.conflictohechos
     */
    public function setConflicto($conflicto = null)
    {
        $this->conflicto = $conflicto;
    
        return $this;
    }

    /**
     * Get conflicto
     *
     * @return \Consultorio.conflictoalposd 
     */
    public function getConflicto()
    {
        return $this->conflicto;
    }

    /** 
     * Set hecho
     *
     * @param \Consultorio.hechos $hecho
     * @return Consultorio.conflictohechos
     */
    public function setHecho($hecho = null)
    {
        $this->hecho = $hecho;
    
        return $this;
    }

    /**
     * Get hecho
     *
     * @return \Consultorio.hechos 
     */
    public function getHecho()
    {
        return $this->hecho;
    }
}
