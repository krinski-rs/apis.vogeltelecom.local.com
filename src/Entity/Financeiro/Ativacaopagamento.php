<?php

namespace App\Entity\Financeiro;

/**
 * Ativacaopagamento
 */
class Ativacaopagamento
{
    /**
     * @var int
     */
    private $ativpagCodigoid;

    /**
     * @var bool|null
     */
    private $ativpagCobrado;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get ativpagCodigoid.
     *
     * @return int
     */
    public function getAtivpagCodigoid()
    {
        return $this->ativpagCodigoid;
    }

    /**
     * Set ativpagCobrado.
     *
     * @param bool|null $ativpagCobrado
     *
     * @return Ativacaopagamento
     */
    public function setAtivpagCobrado($ativpagCobrado = null)
    {
        $this->ativpagCobrado = $ativpagCobrado;

        return $this;
    }

    /**
     * Get ativpagCobrado.
     *
     * @return bool|null
     */
    public function getAtivpagCobrado()
    {
        return $this->ativpagCobrado;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Ativacaopagamento
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
