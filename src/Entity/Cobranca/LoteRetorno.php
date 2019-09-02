<?php

namespace App\Entity\Cobranca;

class LoteRetorno
{
    private $loreCodigoid;

    private $tipoCarteira;

    private $valorPago;

    private $dataCreditoCc;

    private $formaPagamento;

    private $canalPagamento;

    private $motivosOcorrencia;

    private $dataInc;

    private $dataOcorrencia;

    private $valorDespesas;

    private $valorJuros;

    private $valorOutrasDespesas;

    private $loteArquivo;

    private $loteOcorrencia;

    private $loteBoleto;

    public function getLoreCodigoid(): ?int
    {
        return $this->loreCodigoid;
    }

    public function getTipoCarteira(): ?string
    {
        return $this->tipoCarteira;
    }

    public function setTipoCarteira(string $tipoCarteira): self
    {
        $this->tipoCarteira = $tipoCarteira;

        return $this;
    }

    public function getValorPago()
    {
        return $this->valorPago;
    }

    public function setValorPago($valorPago): self
    {
        $this->valorPago = $valorPago;

        return $this;
    }

    public function getDataCreditoCc(): ?\DateTimeInterface
    {
        return $this->dataCreditoCc;
    }

    public function setDataCreditoCc(?\DateTimeInterface $dataCreditoCc): self
    {
        $this->dataCreditoCc = $dataCreditoCc;

        return $this;
    }

    public function getFormaPagamento(): ?string
    {
        return $this->formaPagamento;
    }

    public function setFormaPagamento(?string $formaPagamento): self
    {
        $this->formaPagamento = $formaPagamento;

        return $this;
    }

    public function getCanalPagamento(): ?string
    {
        return $this->canalPagamento;
    }

    public function setCanalPagamento(?string $canalPagamento): self
    {
        $this->canalPagamento = $canalPagamento;

        return $this;
    }

    public function getMotivosOcorrencia(): ?string
    {
        return $this->motivosOcorrencia;
    }

    public function setMotivosOcorrencia(?string $motivosOcorrencia): self
    {
        $this->motivosOcorrencia = $motivosOcorrencia;

        return $this;
    }

    public function getDataInc(): ?\DateTimeInterface
    {
        return $this->dataInc;
    }

    public function setDataInc(\DateTimeInterface $dataInc): self
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    public function getDataOcorrencia(): ?\DateTimeInterface
    {
        return $this->dataOcorrencia;
    }

    public function setDataOcorrencia(?\DateTimeInterface $dataOcorrencia): self
    {
        $this->dataOcorrencia = $dataOcorrencia;

        return $this;
    }

    public function getValorDespesas()
    {
        return $this->valorDespesas;
    }

    public function setValorDespesas($valorDespesas): self
    {
        $this->valorDespesas = $valorDespesas;

        return $this;
    }

    public function getValorJuros()
    {
        return $this->valorJuros;
    }

    public function setValorJuros($valorJuros): self
    {
        $this->valorJuros = $valorJuros;

        return $this;
    }

    public function getValorOutrasDespesas()
    {
        return $this->valorOutrasDespesas;
    }

    public function setValorOutrasDespesas($valorOutrasDespesas): self
    {
        $this->valorOutrasDespesas = $valorOutrasDespesas;

        return $this;
    }

    public function getLoteArquivo(): ?LoteArquivo
    {
        return $this->loteArquivo;
    }

    public function setLoteArquivo(?LoteArquivo $loteArquivo): self
    {
        $this->loteArquivo = $loteArquivo;

        return $this;
    }

    public function getLoteOcorrencia(): ?LoteOcorrencia
    {
        return $this->loteOcorrencia;
    }

    public function setLoteOcorrencia(?LoteOcorrencia $loteOcorrencia): self
    {
        $this->loteOcorrencia = $loteOcorrencia;

        return $this;
    }

    public function getLoteBoleto(): ?LoteBoleto
    {
        return $this->loteBoleto;
    }

    public function setLoteBoleto(?LoteBoleto $loteBoleto): self
    {
        $this->loteBoleto = $loteBoleto;

        return $this;
    }
}
