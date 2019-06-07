<?php

namespace App\Entity\Financeiro;

/**
 * Upgradevalor
 */
class Upgradevalor
{
    /**
     * @var int
     */
    private $upgrvaloCodigoid;

    /**
     * @var string
     */
    private $upgrvaloValor;

    /**
     * @var string|null
     */
    private $upgrValorsemdesconto;

    /**
     * @var string|null
     */
    private $upgrValorsemimposto;

    /**
     * @var \App\Entity\Financeiro\Moeda
     */
    private $moedCodigoid;

    /**
     * @var \App\Entity\Financeiro\Natureza
     */
    private $natuCodigoid;

    /**
     * @var \App\Entity\Financeiro\Periodicidade
     */
    private $periCodigoid;

    /**
     * @var \App\Entity\Financeiro\Upgrade
     */
    private $upgrCodigoid;


    /**
     * Get upgrvaloCodigoid.
     *
     * @return int
     */
    public function getUpgrvaloCodigoid()
    {
        return $this->upgrvaloCodigoid;
    }

    /**
     * Set upgrvaloValor.
     *
     * @param string $upgrvaloValor
     *
     * @return Upgradevalor
     */
    public function setUpgrvaloValor($upgrvaloValor)
    {
        $this->upgrvaloValor = $upgrvaloValor;

        return $this;
    }

    /**
     * Get upgrvaloValor.
     *
     * @return string
     */
    public function getUpgrvaloValor()
    {
        return $this->upgrvaloValor;
    }

    /**
     * Set upgrValorsemdesconto.
     *
     * @param string|null $upgrValorsemdesconto
     *
     * @return Upgradevalor
     */
    public function setUpgrValorsemdesconto($upgrValorsemdesconto = null)
    {
        $this->upgrValorsemdesconto = $upgrValorsemdesconto;

        return $this;
    }

    /**
     * Get upgrValorsemdesconto.
     *
     * @return string|null
     */
    public function getUpgrValorsemdesconto()
    {
        return $this->upgrValorsemdesconto;
    }

    /**
     * Set upgrValorsemimposto.
     *
     * @param string|null $upgrValorsemimposto
     *
     * @return Upgradevalor
     */
    public function setUpgrValorsemimposto($upgrValorsemimposto = null)
    {
        $this->upgrValorsemimposto = $upgrValorsemimposto;

        return $this;
    }

    /**
     * Get upgrValorsemimposto.
     *
     * @return string|null
     */
    public function getUpgrValorsemimposto()
    {
        return $this->upgrValorsemimposto;
    }

    /**
     * Set moedCodigoid.
     *
     * @param \App\Entity\Financeiro\Moeda|null $moedCodigoid
     *
     * @return Upgradevalor
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
     * @return Upgradevalor
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

    /**
     * Set periCodigoid.
     *
     * @param \App\Entity\Financeiro\Periodicidade|null $periCodigoid
     *
     * @return Upgradevalor
     */
    public function setPeriCodigoid(\App\Entity\Financeiro\Periodicidade $periCodigoid = null)
    {
        $this->periCodigoid = $periCodigoid;

        return $this;
    }

    /**
     * Get periCodigoid.
     *
     * @return \App\Entity\Financeiro\Periodicidade|null
     */
    public function getPeriCodigoid()
    {
        return $this->periCodigoid;
    }

    /**
     * Set upgrCodigoid.
     *
     * @param \App\Entity\Financeiro\Upgrade|null $upgrCodigoid
     *
     * @return Upgradevalor
     */
    public function setUpgrCodigoid(\App\Entity\Financeiro\Upgrade $upgrCodigoid = null)
    {
        $this->upgrCodigoid = $upgrCodigoid;

        return $this;
    }

    /**
     * Get upgrCodigoid.
     *
     * @return \App\Entity\Financeiro\Upgrade|null
     */
    public function getUpgrCodigoid()
    {
        return $this->upgrCodigoid;
    }
}
