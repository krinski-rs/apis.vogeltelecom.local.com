<?php

namespace App\Entity\Financeiro;

/**
 * Moeda
 */
class Moeda
{
    /**
     * @var int
     */
    private $moedCodigoid;

    /**
     * @var string
     */
    private $moedNome;

    /**
     * @var string
     */
    private $moedValor;

    /**
     * @var string
     */
    private $moedSigla;


    /**
     * Get moedCodigoid.
     *
     * @return int
     */
    public function getMoedCodigoid()
    {
        return $this->moedCodigoid;
    }

    /**
     * Set moedNome.
     *
     * @param string $moedNome
     *
     * @return Moeda
     */
    public function setMoedNome($moedNome)
    {
        $this->moedNome = $moedNome;

        return $this;
    }

    /**
     * Get moedNome.
     *
     * @return string
     */
    public function getMoedNome()
    {
        return $this->moedNome;
    }

    /**
     * Set moedValor.
     *
     * @param string $moedValor
     *
     * @return Moeda
     */
    public function setMoedValor($moedValor)
    {
        $this->moedValor = $moedValor;

        return $this;
    }

    /**
     * Get moedValor.
     *
     * @return string
     */
    public function getMoedValor()
    {
        return $this->moedValor;
    }

    /**
     * Set moedSigla.
     *
     * @param string $moedSigla
     *
     * @return Moeda
     */
    public function setMoedSigla($moedSigla)
    {
        $this->moedSigla = $moedSigla;

        return $this;
    }

    /**
     * Get moedSigla.
     *
     * @return string
     */
    public function getMoedSigla()
    {
        return $this->moedSigla;
    }
}
