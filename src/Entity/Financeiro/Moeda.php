<?php

namespace App\Entity\Financeiro;

class Moeda
{
    private $moedCodigoid;

    private $moedNome;

    private $moedValor;

    private $moedSigla;

    public function getMoedCodigoid(): ?int
    {
        return $this->moedCodigoid;
    }

    public function getMoedNome(): ?string
    {
        return $this->moedNome;
    }

    public function setMoedNome(string $moedNome): self
    {
        $this->moedNome = $moedNome;

        return $this;
    }

    public function getMoedValor()
    {
        return $this->moedValor;
    }

    public function setMoedValor($moedValor): self
    {
        $this->moedValor = $moedValor;

        return $this;
    }

    public function getMoedSigla(): ?string
    {
        return $this->moedSigla;
    }

    public function setMoedSigla(string $moedSigla): self
    {
        $this->moedSigla = $moedSigla;

        return $this;
    }
}
