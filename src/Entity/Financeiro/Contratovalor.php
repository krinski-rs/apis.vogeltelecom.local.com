<?php

namespace App\Entity\Financeiro;

/**
 * Contratovalor
 */
class Contratovalor
{
    /**
     * @var int
     */
    private $contvaloCodigoid;

    /**
     * @var \DateTime
     */
    private $contvaloDatainic = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $contvaloDatafim;

    /**
     * @var string
     */
    private $contvaloValor;

    /**
     * @var string|null
     */
    private $contvaloValorsemdesconto;

    /**
     * @var string|null
     */
    private $contvaloValorsemimposto;

    /**
     * @var string|null
     */
    private $contvaloSva;

    /**
     * @var string|null
     */
    private $contvaloScm;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;

    /**
     * @var \App\Entity\Financeiro\Contratovalor
     */
    private $contvaloProximocodigoid;

    /**
     * @var \App\Entity\Financeiro\Contratovalor
     */
    private $contvaloAnteriorcodigoid;

    /**
     * @var \App\Entity\Financeiro\Moeda
     */
    private $moedCodigoid;

    /**
     * @var \App\Entity\Financeiro\Natureza
     */
    private $natuCodigoid;


    /**
     * Get contvaloCodigoid.
     *
     * @return int
     */
    public function getContvaloCodigoid()
    {
        return $this->contvaloCodigoid;
    }

    /**
     * Set contvaloDatainic.
     *
     * @param \DateTime $contvaloDatainic
     *
     * @return Contratovalor
     */
    public function setContvaloDatainic($contvaloDatainic)
    {
        $this->contvaloDatainic = $contvaloDatainic;

        return $this;
    }

    /**
     * Get contvaloDatainic.
     *
     * @return \DateTime
     */
    public function getContvaloDatainic()
    {
        return $this->contvaloDatainic;
    }

    /**
     * Set contvaloDatafim.
     *
     * @param \DateTime|null $contvaloDatafim
     *
     * @return Contratovalor
     */
    public function setContvaloDatafim($contvaloDatafim = null)
    {
        $this->contvaloDatafim = $contvaloDatafim;

        return $this;
    }

    /**
     * Get contvaloDatafim.
     *
     * @return \DateTime|null
     */
    public function getContvaloDatafim()
    {
        return $this->contvaloDatafim;
    }

    /**
     * Set contvaloValor.
     *
     * @param string $contvaloValor
     *
     * @return Contratovalor
     */
    public function setContvaloValor($contvaloValor)
    {
        $this->contvaloValor = $contvaloValor;

        return $this;
    }

    /**
     * Get contvaloValor.
     *
     * @return string
     */
    public function getContvaloValor()
    {
        return $this->contvaloValor;
    }

    /**
     * Set contvaloValorsemdesconto.
     *
     * @param string|null $contvaloValorsemdesconto
     *
     * @return Contratovalor
     */
    public function setContvaloValorsemdesconto($contvaloValorsemdesconto = null)
    {
        $this->contvaloValorsemdesconto = $contvaloValorsemdesconto;

        return $this;
    }

    /**
     * Get contvaloValorsemdesconto.
     *
     * @return string|null
     */
    public function getContvaloValorsemdesconto()
    {
        return $this->contvaloValorsemdesconto;
    }

    /**
     * Set contvaloValorsemimposto.
     *
     * @param string|null $contvaloValorsemimposto
     *
     * @return Contratovalor
     */
    public function setContvaloValorsemimposto($contvaloValorsemimposto = null)
    {
        $this->contvaloValorsemimposto = $contvaloValorsemimposto;

        return $this;
    }

    /**
     * Get contvaloValorsemimposto.
     *
     * @return string|null
     */
    public function getContvaloValorsemimposto()
    {
        return $this->contvaloValorsemimposto;
    }

    /**
     * Set contvaloSva.
     *
     * @param string|null $contvaloSva
     *
     * @return Contratovalor
     */
    public function setContvaloSva($contvaloSva = null)
    {
        $this->contvaloSva = $contvaloSva;

        return $this;
    }

    /**
     * Get contvaloSva.
     *
     * @return string|null
     */
    public function getContvaloSva()
    {
        return $this->contvaloSva;
    }

    /**
     * Set contvaloScm.
     *
     * @param string|null $contvaloScm
     *
     * @return Contratovalor
     */
    public function setContvaloScm($contvaloScm = null)
    {
        $this->contvaloScm = $contvaloScm;

        return $this;
    }

    /**
     * Get contvaloScm.
     *
     * @return string|null
     */
    public function getContvaloScm()
    {
        return $this->contvaloScm;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Contratovalor
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

    /**
     * Set contvaloProximocodigoid.
     *
     * @param \App\Entity\Financeiro\Contratovalor|null $contvaloProximocodigoid
     *
     * @return Contratovalor
     */
    public function setContvaloProximocodigoid(\App\Entity\Financeiro\Contratovalor $contvaloProximocodigoid = null)
    {
        $this->contvaloProximocodigoid = $contvaloProximocodigoid;

        return $this;
    }

    /**
     * Get contvaloProximocodigoid.
     *
     * @return \App\Entity\Financeiro\Contratovalor|null
     */
    public function getContvaloProximocodigoid()
    {
        return $this->contvaloProximocodigoid;
    }

    /**
     * Set contvaloAnteriorcodigoid.
     *
     * @param \App\Entity\Financeiro\Contratovalor|null $contvaloAnteriorcodigoid
     *
     * @return Contratovalor
     */
    public function setContvaloAnteriorcodigoid(\App\Entity\Financeiro\Contratovalor $contvaloAnteriorcodigoid = null)
    {
        $this->contvaloAnteriorcodigoid = $contvaloAnteriorcodigoid;

        return $this;
    }

    /**
     * Get contvaloAnteriorcodigoid.
     *
     * @return \App\Entity\Financeiro\Contratovalor|null
     */
    public function getContvaloAnteriorcodigoid()
    {
        return $this->contvaloAnteriorcodigoid;
    }

    /**
     * Set moedCodigoid.
     *
     * @param \App\Entity\Financeiro\Moeda|null $moedCodigoid
     *
     * @return Contratovalor
     */
    public function setMoedCodigoid(\App\Entity\Financeiro\Moeda $moedCodigoid = null)
    {
        $this->moedCodigoid = $moedCodigoid;

        return $this;
    }

    /**
     * Get moedCodigoid.
     *
     * @return \App\Entity\Financeiro\Moeda|null
     */
    public function getMoedCodigoid()
    {
        return $this->moedCodigoid;
    }

    /**
     * Set natuCodigoid.
     *
     * @param \App\Entity\Financeiro\Natureza|null $natuCodigoid
     *
     * @return Contratovalor
     */
    public function setNatuCodigoid(\App\Entity\Financeiro\Natureza $natuCodigoid = null)
    {
        $this->natuCodigoid = $natuCodigoid;

        return $this;
    }

    /**
     * Get natuCodigoid.
     *
     * @return \App\Entity\Financeiro\Natureza|null
     */
    public function getNatuCodigoid()
    {
        return $this->natuCodigoid;
    }
}
