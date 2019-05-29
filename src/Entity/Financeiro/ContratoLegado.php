<?php

namespace App\Entity\Financeiro;

/**
 * ContratoLegado
 */
class ContratoLegado
{
    /**
     * @var int
     */
    private $contCodigoid;

    /**
     * @var string|null
     */
    private $propostaLegado;


    /**
     * Get contCodigoid.
     *
     * @return int
     */
    public function getContCodigoid()
    {
        return $this->contCodigoid;
    }

    /**
     * Set propostaLegado.
     *
     * @param string|null $propostaLegado
     *
     * @return ContratoLegado
     */
    public function setPropostaLegado($propostaLegado = null)
    {
        $this->propostaLegado = $propostaLegado;

        return $this;
    }

    /**
     * Get propostaLegado.
     *
     * @return string|null
     */
    public function getPropostaLegado()
    {
        return $this->propostaLegado;
    }
}
