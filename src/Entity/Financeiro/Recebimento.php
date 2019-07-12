<?php

namespace App\Entity\Financeiro;

class Recebimento
{
    private $receCodigoid;

    private $receDatainc;

    private $receValor;

    private $receValormulta;

    private $receValorjuros;

    private $receDatarecebido;

    private $fatuCodigoid;

    private $lotebancCodigoid;

    public function getReceCodigoid(): ?int
    {
        return $this->receCodigoid;
    }

    public function getReceDatainc(): ?\DateTimeInterface
    {
        return $this->receDatainc;
    }

    public function setReceDatainc(\DateTimeInterface $receDatainc): self
    {
        $this->receDatainc = $receDatainc;

        return $this;
    }

    public function getReceValor()
    {
        return $this->receValor;
    }

    public function setReceValor($receValor): self
    {
        $this->receValor = $receValor;

        return $this;
    }

    public function getReceValormulta()
    {
        return $this->receValormulta;
    }

    public function setReceValormulta($receValormulta): self
    {
        $this->receValormulta = $receValormulta;

        return $this;
    }

    public function getReceValorjuros()
    {
        return $this->receValorjuros;
    }

    public function setReceValorjuros($receValorjuros): self
    {
        $this->receValorjuros = $receValorjuros;

        return $this;
    }

    public function getReceDatarecebido(): ?\DateTimeInterface
    {
        return $this->receDatarecebido;
    }

    public function setReceDatarecebido(\DateTimeInterface $receDatarecebido): self
    {
        $this->receDatarecebido = $receDatarecebido;

        return $this;
    }

    public function getFatuCodigoid(): ?Fatura
    {
        return $this->fatuCodigoid;
    }

    public function setFatuCodigoid(?Fatura $fatuCodigoid): self
    {
        $this->fatuCodigoid = $fatuCodigoid;

        return $this;
    }

    public function getLotebancCodigoid(): ?Lotebancario
    {
        return $this->lotebancCodigoid;
    }

    public function setLotebancCodigoid(?Lotebancario $lotebancCodigoid): self
    {
        $this->lotebancCodigoid = $lotebancCodigoid;

        return $this;
    }
}
