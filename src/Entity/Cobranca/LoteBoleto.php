<?php

namespace App\Entity\Cobranca;

class LoteBoleto
{
    private $loboCodigoid;

    private $tipoCarteira;

    private $codOcorrencia;

    private $tipoDocumento;

    private $codAceite;

    private $primeiraInstrucao;

    private $segundaInstrucao;

    private $codMora;

    private $valordiaTaxamesJuro;

    private $boleto;

    private $lote;

    public function getLoboCodigoid(): ?int
    {
        return $this->loboCodigoid;
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

    public function getCodOcorrencia(): ?string
    {
        return $this->codOcorrencia;
    }

    public function setCodOcorrencia(string $codOcorrencia): self
    {
        $this->codOcorrencia = $codOcorrencia;

        return $this;
    }

    public function getTipoDocumento(): ?string
    {
        return $this->tipoDocumento;
    }

    public function setTipoDocumento(string $tipoDocumento): self
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    public function getCodAceite(): ?string
    {
        return $this->codAceite;
    }

    public function setCodAceite(string $codAceite): self
    {
        $this->codAceite = $codAceite;

        return $this;
    }

    public function getPrimeiraInstrucao(): ?string
    {
        return $this->primeiraInstrucao;
    }

    public function setPrimeiraInstrucao(?string $primeiraInstrucao): self
    {
        $this->primeiraInstrucao = $primeiraInstrucao;

        return $this;
    }

    public function getSegundaInstrucao(): ?string
    {
        return $this->segundaInstrucao;
    }

    public function setSegundaInstrucao(?string $segundaInstrucao): self
    {
        $this->segundaInstrucao = $segundaInstrucao;

        return $this;
    }

    public function getCodMora(): ?string
    {
        return $this->codMora;
    }

    public function setCodMora(?string $codMora): self
    {
        $this->codMora = $codMora;

        return $this;
    }

    public function getValordiaTaxamesJuro()
    {
        return $this->valordiaTaxamesJuro;
    }

    public function setValordiaTaxamesJuro($valordiaTaxamesJuro): self
    {
        $this->valordiaTaxamesJuro = $valordiaTaxamesJuro;

        return $this;
    }

    public function getBoleto(): ?Boleto
    {
        return $this->boleto;
    }

    public function setBoleto(?Boleto $boleto): self
    {
        $this->boleto = $boleto;

        return $this;
    }

    public function getLote(): ?Lote
    {
        return $this->lote;
    }

    public function setLote(?Lote $lote): self
    {
        $this->lote = $lote;

        return $this;
    }
}
