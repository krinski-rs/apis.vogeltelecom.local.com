<?php

namespace App\Entity\Financeiro;

class ContratoServicoAgregado
{
    private $contservagreCodigoid;

    private $contservagreValor;

    private $contservagreDatainc;

    private $contservagreDatafim;

    private $contservagreDesconto;

    private $servCodigoid;

    private $contCodigoid;

    private $servagreCodigoid;

    private $natuCodigoid;

    private $periCodigoid;

    private $moedCodigoid;

    public function getContservagreCodigoid(): ?int
    {
        return $this->contservagreCodigoid;
    }

    public function getContservagreValor()
    {
        return $this->contservagreValor;
    }

    public function setContservagreValor($contservagreValor): self
    {
        $this->contservagreValor = $contservagreValor;

        return $this;
    }

    public function getContservagreDatainc(): ?\DateTimeInterface
    {
        return $this->contservagreDatainc;
    }

    public function setContservagreDatainc(\DateTimeInterface $contservagreDatainc): self
    {
        $this->contservagreDatainc = $contservagreDatainc;

        return $this;
    }

    public function getContservagreDatafim(): ?\DateTimeInterface
    {
        return $this->contservagreDatafim;
    }

    public function setContservagreDatafim(?\DateTimeInterface $contservagreDatafim): self
    {
        $this->contservagreDatafim = $contservagreDatafim;

        return $this;
    }

    public function getContservagreDesconto()
    {
        return $this->contservagreDesconto;
    }

    public function setContservagreDesconto($contservagreDesconto): self
    {
        $this->contservagreDesconto = $contservagreDesconto;

        return $this;
    }

    public function getServCodigoid(): ?Servico
    {
        return $this->servCodigoid;
    }

    public function setServCodigoid(?Servico $servCodigoid): self
    {
        $this->servCodigoid = $servCodigoid;

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

    public function getServagreCodigoid(): ?ServicoAgregado
    {
        return $this->servagreCodigoid;
    }

    public function setServagreCodigoid(?ServicoAgregado $servagreCodigoid): self
    {
        $this->servagreCodigoid = $servagreCodigoid;

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

    public function getMoedCodigoid(): ?Moeda
    {
        return $this->moedCodigoid;
    }

    public function setMoedCodigoid(?Moeda $moedCodigoid): self
    {
        $this->moedCodigoid = $moedCodigoid;

        return $this;
    }
}
