<?php

namespace App\Entity\Financeiro;

/**
 * Duracaocontrato
 */
class Duracaocontrato
{
    /**
     * @var int
     */
    private $duracontCodigoid;

    /**
     * @var bool
     */
    private $duracontMeses;

    /**
     * @var int
     */
    private $duracontPeriodo;

    /**
     * @var \DateTime|null
     */
    private $duracontInicio;

    /**
     * @var \DateTime|null
     */
    private $duracontFim;

    /**
     * @var bool|null
     */
    private $duracontRenovado;

    /**
     * @var \App\Entity\Financeiro\Duracaocontrato
     */
    private $duracontProximocodigoid;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get duracontCodigoid.
     *
     * @return int
     */
    public function getDuracontCodigoid()
    {
        return $this->duracontCodigoid;
    }

    /**
     * Set duracontMeses.
     *
     * @param bool $duracontMeses
     *
     * @return Duracaocontrato
     */
    public function setDuracontMeses($duracontMeses)
    {
        $this->duracontMeses = $duracontMeses;

        return $this;
    }

    /**
     * Get duracontMeses.
     *
     * @return bool
     */
    public function getDuracontMeses()
    {
        return $this->duracontMeses;
    }

    /**
     * Set duracontPeriodo.
     *
     * @param int $duracontPeriodo
     *
     * @return Duracaocontrato
     */
    public function setDuracontPeriodo($duracontPeriodo)
    {
        $this->duracontPeriodo = $duracontPeriodo;

        return $this;
    }

    /**
     * Get duracontPeriodo.
     *
     * @return int
     */
    public function getDuracontPeriodo()
    {
        return $this->duracontPeriodo;
    }

    /**
     * Set duracontInicio.
     *
     * @param \DateTime|null $duracontInicio
     *
     * @return Duracaocontrato
     */
    public function setDuracontInicio($duracontInicio = null)
    {
        $this->duracontInicio = $duracontInicio;

        return $this;
    }

    /**
     * Get duracontInicio.
     *
     * @return \DateTime|null
     */
    public function getDuracontInicio()
    {
        return $this->duracontInicio;
    }

    /**
     * Set duracontFim.
     *
     * @param \DateTime|null $duracontFim
     *
     * @return Duracaocontrato
     */
    public function setDuracontFim($duracontFim = null)
    {
        $this->duracontFim = $duracontFim;

        return $this;
    }

    /**
     * Get duracontFim.
     *
     * @return \DateTime|null
     */
    public function getDuracontFim()
    {
        return $this->duracontFim;
    }

    /**
     * Set duracontRenovado.
     *
     * @param bool|null $duracontRenovado
     *
     * @return Duracaocontrato
     */
    public function setDuracontRenovado($duracontRenovado = null)
    {
        $this->duracontRenovado = $duracontRenovado;

        return $this;
    }

    /**
     * Get duracontRenovado.
     *
     * @return bool|null
     */
    public function getDuracontRenovado()
    {
        return $this->duracontRenovado;
    }

    /**
     * Set duracontProximocodigoid.
     *
     * @param \App\Entity\Financeiro\Duracaocontrato|null $duracontProximocodigoid
     *
     * @return Duracaocontrato
     */
    public function setDuracontProximocodigoid(\App\Entity\Financeiro\Duracaocontrato $duracontProximocodigoid = null)
    {
        $this->duracontProximocodigoid = $duracontProximocodigoid;

        return $this;
    }

    /**
     * Get duracontProximocodigoid.
     *
     * @return \App\Entity\Financeiro\Duracaocontrato|null
     */
    public function getDuracontProximocodigoid()
    {
        return $this->duracontProximocodigoid;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Duracaocontrato
     */
    public function setContCodigoid(\App\Entity\Financeiro\Contrato $contCodigoid = null)
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    /**
     * Get contCodigoid.
     *
     * @return \App\Entity\Financeiro\Contrato|null
     */
    public function getContCodigoid()
    {
        return $this->contCodigoid;
    }
}
