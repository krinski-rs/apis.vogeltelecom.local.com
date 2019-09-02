<?php

namespace App\Entity\Cobranca;

class InadimplenciasCliente
{
    private $cid;

    private $razao;

    private $segmento;

    private $faturasEmitidas2017;

    private $faturasPagas2017;

    private $valorEmAberto2017;

    private $valorVencido2017;

    private $dataUltimoPagamento;

    public function getCid(): ?int
    {
        return $this->cid;
    }

    public function getRazao(): ?string
    {
        return $this->razao;
    }

    public function setRazao(?string $razao): self
    {
        $this->razao = $razao;

        return $this;
    }

    public function getSegmento(): ?string
    {
        return $this->segmento;
    }

    public function setSegmento(?string $segmento): self
    {
        $this->segmento = $segmento;

        return $this;
    }

    public function getFaturasEmitidas2017(): ?int
    {
        return $this->faturasEmitidas2017;
    }

    public function setFaturasEmitidas2017(?int $faturasEmitidas2017): self
    {
        $this->faturasEmitidas2017 = $faturasEmitidas2017;

        return $this;
    }

    public function getFaturasPagas2017(): ?int
    {
        return $this->faturasPagas2017;
    }

    public function setFaturasPagas2017(?int $faturasPagas2017): self
    {
        $this->faturasPagas2017 = $faturasPagas2017;

        return $this;
    }

    public function getValorEmAberto2017()
    {
        return $this->valorEmAberto2017;
    }

    public function setValorEmAberto2017($valorEmAberto2017): self
    {
        $this->valorEmAberto2017 = $valorEmAberto2017;

        return $this;
    }

    public function getValorVencido2017()
    {
        return $this->valorVencido2017;
    }

    public function setValorVencido2017($valorVencido2017): self
    {
        $this->valorVencido2017 = $valorVencido2017;

        return $this;
    }

    public function getDataUltimoPagamento(): ?\DateTimeInterface
    {
        return $this->dataUltimoPagamento;
    }

    public function setDataUltimoPagamento(?\DateTimeInterface $dataUltimoPagamento): self
    {
        $this->dataUltimoPagamento = $dataUltimoPagamento;

        return $this;
    }
}
