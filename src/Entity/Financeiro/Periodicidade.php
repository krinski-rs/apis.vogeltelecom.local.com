<?php

namespace App\Entity\Financeiro;

/**
 * Periodicidade
 */
class Periodicidade
{
    /**
     * @var int
     */
    private $periCodigoid;

    /**
     * @var int
     */
    private $periPeriodicidadefatura;

    /**
     * @var int
     */
    private $periPeriodicidadenota;

    /**
     * @var int
     */
    private $periParcelasfatura;

    /**
     * @var int
     */
    private $periParcelasnota;

    /**
     * @var int|null
     */
    private $periVencimento;

    /**
     * @var \DateTime
     */
    private $periDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var bool|null
     */
    private $periAposassinatura;

    /**
     * @var int
     */
    private $periPospago = '0';

    /**
     * @var int
     */
    private $periNumeroparcelas;

    /**
     * @var int|null
     */
    private $periCarenciadias;

    /**
     * @var int|null
     */
    private $periCarenciames;

    /**
     * @var \DateTime|null
     */
    private $periCarenciadatafixa;

    /**
     * @var \DateTime|null
     */
    private $periVencimentodatafixa;

    /**
     * @var \App\Entity\Financeiro\Contratovalor
     */
    private $contvaloCodigoid;


    /**
     * Get periCodigoid.
     *
     * @return int
     */
    public function getPeriCodigoid()
    {
        return $this->periCodigoid;
    }

    /**
     * Set periPeriodicidadefatura.
     *
     * @param int $periPeriodicidadefatura
     *
     * @return Periodicidade
     */
    public function setPeriPeriodicidadefatura($periPeriodicidadefatura)
    {
        $this->periPeriodicidadefatura = $periPeriodicidadefatura;

        return $this;
    }

    /**
     * Get periPeriodicidadefatura.
     *
     * @return int
     */
    public function getPeriPeriodicidadefatura()
    {
        return $this->periPeriodicidadefatura;
    }

    /**
     * Set periPeriodicidadenota.
     *
     * @param int $periPeriodicidadenota
     *
     * @return Periodicidade
     */
    public function setPeriPeriodicidadenota($periPeriodicidadenota)
    {
        $this->periPeriodicidadenota = $periPeriodicidadenota;

        return $this;
    }

    /**
     * Get periPeriodicidadenota.
     *
     * @return int
     */
    public function getPeriPeriodicidadenota()
    {
        return $this->periPeriodicidadenota;
    }

    /**
     * Set periParcelasfatura.
     *
     * @param int $periParcelasfatura
     *
     * @return Periodicidade
     */
    public function setPeriParcelasfatura($periParcelasfatura)
    {
        $this->periParcelasfatura = $periParcelasfatura;

        return $this;
    }

    /**
     * Get periParcelasfatura.
     *
     * @return int
     */
    public function getPeriParcelasfatura()
    {
        return $this->periParcelasfatura;
    }

    /**
     * Set periParcelasnota.
     *
     * @param int $periParcelasnota
     *
     * @return Periodicidade
     */
    public function setPeriParcelasnota($periParcelasnota)
    {
        $this->periParcelasnota = $periParcelasnota;

        return $this;
    }

    /**
     * Get periParcelasnota.
     *
     * @return int
     */
    public function getPeriParcelasnota()
    {
        return $this->periParcelasnota;
    }

    /**
     * Set periVencimento.
     *
     * @param int|null $periVencimento
     *
     * @return Periodicidade
     */
    public function setPeriVencimento($periVencimento = null)
    {
        $this->periVencimento = $periVencimento;

        return $this;
    }

    /**
     * Get periVencimento.
     *
     * @return int|null
     */
    public function getPeriVencimento()
    {
        return $this->periVencimento;
    }

    /**
     * Set periDatainc.
     *
     * @param \DateTime $periDatainc
     *
     * @return Periodicidade
     */
    public function setPeriDatainc($periDatainc)
    {
        $this->periDatainc = $periDatainc;

        return $this;
    }

    /**
     * Get periDatainc.
     *
     * @return \DateTime
     */
    public function getPeriDatainc()
    {
        return $this->periDatainc;
    }

    /**
     * Set periAposassinatura.
     *
     * @param bool|null $periAposassinatura
     *
     * @return Periodicidade
     */
    public function setPeriAposassinatura($periAposassinatura = null)
    {
        $this->periAposassinatura = $periAposassinatura;

        return $this;
    }

    /**
     * Get periAposassinatura.
     *
     * @return bool|null
     */
    public function getPeriAposassinatura()
    {
        return $this->periAposassinatura;
    }

    /**
     * Set periPospago.
     *
     * @param int $periPospago
     *
     * @return Periodicidade
     */
    public function setPeriPospago($periPospago)
    {
        $this->periPospago = $periPospago;

        return $this;
    }

    /**
     * Get periPospago.
     *
     * @return int
     */
    public function getPeriPospago()
    {
        return $this->periPospago;
    }

    /**
     * Set periNumeroparcelas.
     *
     * @param int $periNumeroparcelas
     *
     * @return Periodicidade
     */
    public function setPeriNumeroparcelas($periNumeroparcelas)
    {
        $this->periNumeroparcelas = $periNumeroparcelas;

        return $this;
    }

    /**
     * Get periNumeroparcelas.
     *
     * @return int
     */
    public function getPeriNumeroparcelas()
    {
        return $this->periNumeroparcelas;
    }

    /**
     * Set periCarenciadias.
     *
     * @param int|null $periCarenciadias
     *
     * @return Periodicidade
     */
    public function setPeriCarenciadias($periCarenciadias = null)
    {
        $this->periCarenciadias = $periCarenciadias;

        return $this;
    }

    /**
     * Get periCarenciadias.
     *
     * @return int|null
     */
    public function getPeriCarenciadias()
    {
        return $this->periCarenciadias;
    }

    /**
     * Set periCarenciames.
     *
     * @param int|null $periCarenciames
     *
     * @return Periodicidade
     */
    public function setPeriCarenciames($periCarenciames = null)
    {
        $this->periCarenciames = $periCarenciames;

        return $this;
    }

    /**
     * Get periCarenciames.
     *
     * @return int|null
     */
    public function getPeriCarenciames()
    {
        return $this->periCarenciames;
    }

    /**
     * Set periCarenciadatafixa.
     *
     * @param \DateTime|null $periCarenciadatafixa
     *
     * @return Periodicidade
     */
    public function setPeriCarenciadatafixa($periCarenciadatafixa = null)
    {
        $this->periCarenciadatafixa = $periCarenciadatafixa;

        return $this;
    }

    /**
     * Get periCarenciadatafixa.
     *
     * @return \DateTime|null
     */
    public function getPeriCarenciadatafixa()
    {
        return $this->periCarenciadatafixa;
    }

    /**
     * Set periVencimentodatafixa.
     *
     * @param \DateTime|null $periVencimentodatafixa
     *
     * @return Periodicidade
     */
    public function setPeriVencimentodatafixa($periVencimentodatafixa = null)
    {
        $this->periVencimentodatafixa = $periVencimentodatafixa;

        return $this;
    }

    /**
     * Get periVencimentodatafixa.
     *
     * @return \DateTime|null
     */
    public function getPeriVencimentodatafixa()
    {
        return $this->periVencimentodatafixa;
    }

    /**
     * Set contvaloCodigoid.
     *
     * @param \App\Entity\Financeiro\Contratovalor|null $contvaloCodigoid
     *
     * @return Periodicidade
     */
    public function setContvaloCodigoid(\App\Entity\Financeiro\Contratovalor $contvaloCodigoid = null)
    {
        $this->contvaloCodigoid = $contvaloCodigoid;

        return $this;
    }

    /**
     * Get contvaloCodigoid.
     *
     * @return \App\Entity\Financeiro\Contratovalor|null
     */
    public function getContvaloCodigoid()
    {
        return $this->contvaloCodigoid;
    }
}
