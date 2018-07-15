<?php


/* Date: 28/06/2018 15:40:37 */

namespace Entities;

/**
 * Sys.estudianteperfil
 *
 * @Table(name="sys.estudianteperfil", indexes={@Index(name="IDX_F901C02196657647", columns={"perfil"})})
 * @Entity
 */
class Sys.estudianteperfil
{

function __construct() {}

    /**
     * @var integer
     *
     * @Column(name="ano", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $ano;

    /**
     * @var integer
     *
     * @Column(name="periodo", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $periodo;

    /**
     * @var string
     *
     * @Column(name="estudiante", type="string", length=80, nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $estudiante;

    /**
     * @var \Sys.perfil
     *
     * @Id
     * @GeneratedValue(strategy="NONE")
     * @OneToOne(targetEntity="Sys.perfil")
     * @JoinColumns({
     *   @JoinColumn(name="perfil", referencedColumnName="id")
     * })
     */
    private $perfil;


    /** 
     * Set ano
     *
     * @param integer $ano
     * @return Sys.estudianteperfil
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    
        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /** 
     * Set periodo
     *
     * @param integer $periodo
     * @return Sys.estudianteperfil
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;
    
        return $this;
    }

    /**
     * Get periodo
     *
     * @return integer 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /** 
     * Set estudiante
     *
     * @param string $estudiante
     * @return Sys.estudianteperfil
     */
    public function setEstudiante($estudiante)
    {
        $this->estudiante = $estudiante;
    
        return $this;
    }

    /**
     * Get estudiante
     *
     * @return string 
     */
    public function getEstudiante()
    {
        return $this->estudiante;
    }

    /** 
     * Set perfil
     *
     * @param \Sys.perfil $perfil
     * @return Sys.estudianteperfil
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    
        return $this;
    }

    /**
     * Get perfil
     *
     * @return \Sys.perfil 
     */
    public function getPerfil()
    {
        return $this->perfil;
    }
}
