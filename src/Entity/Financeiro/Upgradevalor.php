<?php

namespace App\Entity\Financeiro;

class Upgradevalor
{
    private $upgrvaloCodigoid;

    private $upgrvaloValor;

    private $upgrValorsemdesconto;

    private $upgrValorsemimposto;

    private $moedCodigoid;

    private $natuCodigoid;

    private $periCodigoid;

    private $upgrCodigoid;

    public function getUpgrvaloCodigoid(): ?int
    {
        return $this->upgrvaloCodigoid;
    }

    public function getUpgrvaloValor()
    {
        return $this->upgrvaloValor;
    }

    public function setUpgrvaloValor($upgrvaloValor): self
    {
        $this->upgrvaloValor = $upgrvaloValor;

        return $this;
    }

    public function getUpgrValorsemdesconto()
    {
        return $this->upgrValorsemdesconto;
    }

    public function setUpgrValorsemdesconto($upgrValorsemdesconto): self
    {
        $this->upgrValorsemdesconto = $upgrValorsemdesconto;

        return $this;
    }

    public function getUpgrValorsemimposto()
    {
        return $this->upgrValorsemimposto;
    }

    public function setUpgrValorsemimposto($upgrValorsemimposto): self
    {
        $this->upgrValorsemimposto = $upgrValorsemimposto;

        return $this;
    }

    public function getMoedCodigoid(): ?Moeda
    {
        return $this->moedCodigoid;
    }

    public function setMoedCodigoid(?Moeda $moedCodigoid): self
    {
        $this->moedCodigoid = $moedCodigoid;

        return $this;
    }

    public function getNatuCodigoid(): ?Natureza
    {
        return $this->natuCodigoid;
    }

    public function setNatuCodigoid(?Natureza $natuCodigoid): self
    {
        $this->natuCodigoid = $natuCodigoid;

        return $this;
    }

    public function getPeriCodigoid(): ?Periodicidade
    {
        return $this->periCodigoid;
    }

    public function setPeriCodigoid(?Periodicidade $periCodigoid): self
    {
        $this->periCodigoid = $periCodigoid;

        return $this;
    }

    public function getUpgrCodigoid(): ?Upgrade
    {
        return $this->upgrCodigoid;
    }

    public function setUpgrCodigoid(?Upgrade $upgrCodigoid): self
    {
        $this->upgrCodigoid = $upgrCodigoid;

        return $this;
    }
}
