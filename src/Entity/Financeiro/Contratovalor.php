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

    private $contCodigoid;

    private $contvaloProximocodigoid;

    private $contvaloAnteriorcodigoid;

    private $moedCodigoid;

    private $natuCodigoid;

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

    public function getContvaloValor()
    {
        return $this->contvaloValor;
    }

    public function setContvaloValor($contvaloValor): self
    {
        $this->contvaloValor = $contvaloValor;

        return $this;
    }

    public function getContvaloValorsemdesconto()
    {
        return $this->contvaloValorsemdesconto;
    }

    public function setContvaloValorsemdesconto($contvaloValorsemdesconto): self
    {
        $this->contvaloValorsemdesconto = $contvaloValorsemdesconto;

        return $this;
    }

    public function getContvaloValorsemimposto()
    {
        return $this->contvaloValorsemimposto;
    }

    public function setContvaloValorsemimposto($contvaloValorsemimposto): self
    {
        $this->contvaloValorsemimposto = $contvaloValorsemimposto;

        return $this;
    }

    public function getContvaloSva()
    {
        return $this->contvaloSva;
    }

    public function setContvaloSva($contvaloSva): self
    {
        $this->contvaloSva = $contvaloSva;

        return $this;
    }

    public function getContvaloScm()
    {
        return $this->contvaloScm;
    }

    public function setContvaloScm($contvaloScm): self
    {
        $this->contvaloScm = $contvaloScm;

        return $this;
    }

    public function getContCodigoid(): ?Contrato
    {
        return $this->contCodigoid;
    }

    public function setContCodigoid(?Contrato $contCodigoid): self
    {
        $this->contCodigoid = $contCodigoid;

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

    public function getNatuCodigoid(): ?Natureza
    {
        return $this->natuCodigoid;
    }

    public function setNatuCodigoid(?Natureza $natuCodigoid): self
    {
        $this->natuCodigoid = $natuCodigoid;

        return $this;
    }
}
