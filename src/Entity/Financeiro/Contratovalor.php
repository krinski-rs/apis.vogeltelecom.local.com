<?php

namespace App\Entity\Financeiro;

class Contratovalor
{
    private $contvaloCodigoid;

    private $contvaloDatainic;

    private $contvaloDatafim;

    private $contvaloValor;

    private $contvaloValorsemdesconto;

    private $contvaloValorsemimposto;

    private $contvaloSva;

    private $contvaloScm;

    private $contrato;

    private $contvaloProximocodigoid;

    private $contvaloAnteriorcodigoid;

    private $moedCodigoid;

    private $natureza;

    public function getContvaloCodigoid(): ?int
    {
        return $this->contvaloCodigoid;
    }

    public function getContvaloDatainic(): ?\DateTimeInterface
    {
        return $this->contvaloDatainic;
    }

    public function setContvaloDatainic(\DateTimeInterface $contvaloDatainic): self
    {
        $this->contvaloDatainic = $contvaloDatainic;

        return $this;
    }

    public function getContvaloDatafim(): ?\DateTimeInterface
    {
        return $this->contvaloDatafim;
    }

    public function setContvaloDatafim(?\DateTimeInterface $contvaloDatafim): self
    {
        $this->contvaloDatafim = $contvaloDatafim;

        return $this;
    }

    public function getContvaloValor(): ?string
    {
        return $this->contvaloValor;
    }

    public function setContvaloValor(string $contvaloValor): self
    {
        $this->contvaloValor = $contvaloValor;

        return $this;
    }

    public function getContvaloValorsemdesconto(): ?string
    {
        return $this->contvaloValorsemdesconto;
    }

    public function setContvaloValorsemdesconto(?string $contvaloValorsemdesconto): self
    {
        $this->contvaloValorsemdesconto = $contvaloValorsemdesconto;

        return $this;
    }

    public function getContvaloValorsemimposto(): ?string
    {
        return $this->contvaloValorsemimposto;
    }

    public function setContvaloValorsemimposto(?string $contvaloValorsemimposto): self
    {
        $this->contvaloValorsemimposto = $contvaloValorsemimposto;

        return $this;
    }

    public function getContvaloSva(): ?string
    {
        return $this->contvaloSva;
    }

    public function setContvaloSva(?string $contvaloSva): self
    {
        $this->contvaloSva = $contvaloSva;

        return $this;
    }

    public function getContvaloScm(): ?string
    {
        return $this->contvaloScm;
    }

    public function setContvaloScm(?string $contvaloScm): self
    {
        $this->contvaloScm = $contvaloScm;

        return $this;
    }

    public function getContrato(): ?Contrato
    {
        return $this->contrato;
    }

    public function setContrato(?Contrato $contrato): self
    {
        $this->contrato = $contrato;

        return $this;
    }

    public function getContvaloProximocodigoid(): ?self
    {
        return $this->contvaloProximocodigoid;
    }

    public function setContvaloProximocodigoid(?self $contvaloProximocodigoid): self
    {
        $this->contvaloProximocodigoid = $contvaloProximocodigoid;

        return $this;
    }

    public function getContvaloAnteriorcodigoid(): ?self
    {
        return $this->contvaloAnteriorcodigoid;
    }

    public function setContvaloAnteriorcodigoid(?self $contvaloAnteriorcodigoid): self
    {
        $this->contvaloAnteriorcodigoid = $contvaloAnteriorcodigoid;

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

    public function getNatureza(): ?Natureza
    {
        return $this->natureza;
    }

    public function setNatureza(?Natureza $natureza): self
    {
        $this->natureza = $natureza;

        return $this;
    }
}
