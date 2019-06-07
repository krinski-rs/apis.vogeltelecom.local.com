<?php

namespace App\Entity\Financeiro;

/**
 * Excedente
 */
class Excedente
{
    /**
     * @var int
     */
    private $exceCodigoid;

    /**
     * @var string
     */
    private $exceValor;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get exceCodigoid.
     *
     * @return int
     */
    public function getExceCodigoid()
    {
        return $this->exceCodigoid;
    }

    /**
     * Set exceValor.
     *
     * @param string $exceValor
     *
     * @return Excedente
     */
    public function setExceValor($exceValor)
    {
        $this->exceValor = $exceValor;

        return $this;
    }

    /**
     * Get exceValor.
     *
     * @return string
     */
    public function getExceValor()
    {
        return $this->exceValor;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Excedente
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
