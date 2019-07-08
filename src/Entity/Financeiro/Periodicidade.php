<?php

namespace App\Entity\Financeiro;

class Periodicidade
{
    private $periCodigoid;

    private $periPeriodicidadefatura;

    private $periPeriodicidadenota;

    private $periParcelasfatura;

    private $periParcelasnota;

    private $periVencimento;

    private $periDatainc;

    private $periAposassinatura;

    private $periPospago;

    private $periNumeroparcelas;

    private $periCarenciadias;

    private $periCarenciames;

    private $periCarenciadatafixa;

    private $periVencimentodatafixa;

    private $contvaloCodigoid;

    public function getPeriCodigoid(): ?int
    {
        return $this->periCodigoid;
    }

    public function getPeriPeriodicidadefatura(): ?int
    {
        return $this->periPeriodicidadefatura;
    }

    public function setPeriPeriodicidadefatura(int $periPeriodicidadefatura): self
    {
        $this->periPeriodicidadefatura = $periPeriodicidadefatura;

        return $this;
    }

    public function getPeriPeriodicidadenota(): ?int
    {
        return $this->periPeriodicidadenota;
    }

    public function setPeriPeriodicidadenota(int $periPeriodicidadenota): self
    {
        $this->periPeriodicidadenota = $periPeriodicidadenota;

        return $this;
    }

    public function getPeriParcelasfatura(): ?int
    {
        return $this->periParcelasfatura;
    }

    public function setPeriParcelasfatura(int $periParcelasfatura): self
    {
        $this->periParcelasfatura = $periParcelasfatura;

        return $this;
    }

    public function getPeriParcelasnota(): ?int
    {
        return $this->periParcelasnota;
    }

    public function setPeriParcelasnota(int $periParcelasnota): self
    {
        $this->periParcelasnota = $periParcelasnota;

        return $this;
    }

    public function getPeriVencimento(): ?int
    {
        return $this->periVencimento;
    }

    public function setPeriVencimento(?int $periVencimento): self
    {
        $this->periVencimento = $periVencimento;

        return $this;
    }

    public function getPeriDatainc(): ?\DateTimeInterface
    {
        return $this->periDatainc;
    }

    public function setPeriDatainc(\DateTimeInterface $periDatainc): self
    {
        $this->periDatainc = $periDatainc;

        return $this;
    }

    public function getPeriAposassinatura(): ?bool
    {
        return $this->periAposassinatura;
    }

    public function setPeriAposassinatura(?bool $periAposassinatura): self
    {
        $this->periAposassinatura = $periAposassinatura;

        return $this;
    }

    public function getPeriPospago(): ?int
    {
        return $this->periPospago;
    }

    public function setPeriPospago(int $periPospago): self
    {
        $this->periPospago = $periPospago;

        return $this;
    }

    public function getPeriNumeroparcelas(): ?int
    {
        return $this->periNumeroparcelas;
    }

    public function setPeriNumeroparcelas(int $periNumeroparcelas): self
    {
        $this->periNumeroparcelas = $periNumeroparcelas;

        return $this;
    }

    public function getPeriCarenciadias(): ?int
    {
        return $this->periCarenciadias;
    }

    public function setPeriCarenciadias(?int $periCarenciadias): self
    {
        $this->periCarenciadias = $periCarenciadias;

        return $this;
    }

    public function getPeriCarenciames(): ?int
    {
        return $this->periCarenciames;
    }

    public function setPeriCarenciames(?int $periCarenciames): self
    {
        $this->periCarenciames = $periCarenciames;

        return $this;
    }

    public function getPeriCarenciadatafixa(): ?\DateTimeInterface
    {
        return $this->periCarenciadatafixa;
    }

    public function setPeriCarenciadatafixa(?\DateTimeInterface $periCarenciadatafixa): self
    {
        $this->periCarenciadatafixa = $periCarenciadatafixa;

        return $this;
    }

    public function getPeriVencimentodatafixa(): ?\DateTimeInterface
    {
        return $this->periVencimentodatafixa;
    }

    public function setPeriVencimentodatafixa(?\DateTimeInterface $periVencimentodatafixa): self
    {
        $this->periVencimentodatafixa = $periVencimentodatafixa;

        return $this;
    }

    public function getContvaloCodigoid(): ?Contratovalor
    {
        return $this->contvaloCodigoid;
    }

    public function setContvaloCodigoid(?Contratovalor $contvaloCodigoid): self
    {
        $this->contvaloCodigoid = $contvaloCodigoid;

        return $this;
    }
}
