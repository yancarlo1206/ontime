<?php


/* Date: 18/04/2018 11:20:19 */

namespace Entities;

/**
 * Formapago
 *
 * @Table(name="formapago")
 * @Entity
 */
class Formapago
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;


    /** 
     * Set id
     *
     * @param integer $id
     * @return Formapago
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
     * Set nombre
     *
     * @param string $nombre
     * @return Formapago
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
}