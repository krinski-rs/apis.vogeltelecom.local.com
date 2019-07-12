<?php

namespace App\Entity\Financeiro;

class Fatura
{
    private $fatuCodigoid;

    private $usuaCodigoid;

    private $fatuDatainc;

    private $fatuDatavencimento;

    private $fatuValor;

    private $fatuNsr;

    private $fatuEmitido;

    private $fatuDatade;

    private $fatuDataate;

    private $fatuExcedente;

    private $fatuConsumido;

    private $fatuCodigobarra;

    private $fatuLinhadigitavel;

    private $fatuNossonumero;

    private $fatuValorjuros;

    private $fatuValormulta;

    private $arquremeCodigoid;

    public function getFatuCodigoid(): ?int
    {
        return $this->fatuCodigoid;
    }

    public function getUsuaCodigoid(): ?int
    {
        return $this->usuaCodigoid;
    }

    public function setUsuaCodigoid(?int $usuaCodigoid): self
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    public function getFatuDatainc(): ?\DateTimeInterface
    {
        return $this->fatuDatainc;
    }

    public function setFatuDatainc(\DateTimeInterface $fatuDatainc): self
    {
        $this->fatuDatainc = $fatuDatainc;

        return $this;
    }

    public function getFatuDatavencimento(): ?\DateTimeInterface
    {
        return $this->fatuDatavencimento;
    }

    public function setFatuDatavencimento(\DateTimeInterface $fatuDatavencimento): self
    {
        $this->fatuDatavencimento = $fatuDatavencimento;

        return $this;
    }

    public function getFatuValor()
    {
        return $this->fatuValor;
    }

    public function setFatuValor($fatuValor): self
    {
        $this->fatuValor = $fatuValor;

        return $this;
    }

    public function getFatuNsr(): ?int
    {
        return $this->fatuNsr;
    }

    public function setFatuNsr(int $fatuNsr): self
    {
        $this->fatuNsr = $fatuNsr;

        return $this;
    }

    public function getFatuEmitido(): ?bool
    {
        return $this->fatuEmitido;
    }

    public function setFatuEmitido(bool $fatuEmitido): self
    {
        $this->fatuEmitido = $fatuEmitido;

        return $this;
    }

    public function getFatuDatade(): ?\DateTimeInterface
    {
        return $this->fatuDatade;
    }

    public function setFatuDatade(?\DateTimeInterface $fatuDatade): self
    {
        $this->fatuDatade = $fatuDatade;

        return $this;
    }

    public function getFatuDataate(): ?\DateTimeInterface
    {
        return $this->fatuDataate;
    }

    public function setFatuDataate(?\DateTimeInterface $fatuDataate): self
    {
        $this->fatuDataate = $fatuDataate;

        return $this;
    }

    public function getFatuExcedente()
    {
        return $this->fatuExcedente;
    }

    public function setFatuExcedente($fatuExcedente): self
    {
        $this->fatuExcedente = $fatuExcedente;

        return $this;
    }

    public function getFatuConsumido()
    {
        return $this->fatuConsumido;
    }

    public function setFatuConsumido($fatuConsumido): self
    {
        $this->fatuConsumido = $fatuConsumido;

        return $this;
    }

    public function getFatuCodigobarra(): ?string
    {
        return $this->fatuCodigobarra;
    }

    public function setFatuCodigobarra(?string $fatuCodigobarra): self
    {
        $this->fatuCodigobarra = $fatuCodigobarra;

        return $this;
    }

    public function getFatuLinhadigitavel(): ?string
    {
        return $this->fatuLinhadigitavel;
    }

    public function setFatuLinhadigitavel(?string $fatuLinhadigitavel): self
    {
        $this->fatuLinhadigitavel = $fatuLinhadigitavel;

        return $this;
    }

    public function getFatuNossonumero(): ?string
    {
        return $this->fatuNossonumero;
    }

    public function setFatuNossonumero(?string $fatuNossonumero): self
    {
        $this->fatuNossonumero = $fatuNossonumero;

        return $this;
    }

    public function getFatuValorjuros()
    {
        return $this->fatuValorjuros;
    }

    public function setFatuValorjuros($fatuValorjuros): self
    {
        $this->fatuValorjuros = $fatuValorjuros;

        return $this;
    }

    public function getFatuValormulta()
    {
        return $this->fatuValormulta;
    }

    public function setFatuValormulta($fatuValormulta): self
    {
        $this->fatuValormulta = $fatuValormulta;

        return $this;
    }

    public function getArquremeCodigoid(): ?Arquivoremessa
    {
        return $this->arquremeCodigoid;
    }

    public function setArquremeCodigoid(?Arquivoremessa $arquremeCodigoid): self
    {
        $this->arquremeCodigoid = $arquremeCodigoid;

        return $this;
    }
}
