<?php

namespace App\Entity\Cobranca;

class FinancialPending
{
    private $idFinancialPending;

    private $descricaoPendencia;

    private $tipoPendencia;

    private $valor;

    private $idContrato;

    private $dtLimite;

    private $dtRegistro;

    private $status;

    private $idInvoiceType;

    private $dtPeriodoIni;

    private $dtPeriodoFim;

    private $invoice;

    public function getIdFinancialPending(): ?int
    {
        return $this->idFinancialPending;
    }

    public function getDescricaoPendencia(): ?string
    {
        return $this->descricaoPendencia;
    }

    public function setDescricaoPendencia(string $descricaoPendencia): self
    {
        $this->descricaoPendencia = $descricaoPendencia;

        return $this;
    }

    public function getTipoPendencia(): ?int
    {
        return $this->tipoPendencia;
    }

    public function setTipoPendencia(int $tipoPendencia): self
    {
        $this->tipoPendencia = $tipoPendencia;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getIdContrato(): ?int
    {
        return $this->idContrato;
    }

    public function setIdContrato(int $idContrato): self
    {
        $this->idContrato = $idContrato;

        return $this;
    }

    public function getDtLimite(): ?\DateTimeInterface
    {
        return $this->dtLimite;
    }

    public function setDtLimite(?\DateTimeInterface $dtLimite): self
    {
        $this->dtLimite = $dtLimite;

        return $this;
    }

    public function getDtRegistro(): ?\DateTimeInterface
    {
        return $this->dtRegistro;
    }

    public function setDtRegistro(?\DateTimeInterface $dtRegistro): self
    {
        $this->dtRegistro = $dtRegistro;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getIdInvoiceType(): ?int
    {
        return $this->idInvoiceType;
    }

    public function setIdInvoiceType(?int $idInvoiceType): self
    {
        $this->idInvoiceType = $idInvoiceType;

        return $this;
    }

    public function getDtPeriodoIni(): ?\DateTimeInterface
    {
        return $this->dtPeriodoIni;
    }

    public function setDtPeriodoIni(?\DateTimeInterface $dtPeriodoIni): self
    {
        $this->dtPeriodoIni = $dtPeriodoIni;

        return $this;
    }

    public function getDtPeriodoFim(): ?\DateTimeInterface
    {
        return $this->dtPeriodoFim;
    }

    public function setDtPeriodoFim(?\DateTimeInterface $dtPeriodoFim): self
    {
        $this->dtPeriodoFim = $dtPeriodoFim;

        return $this;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    public function setInvoice(?Invoice $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }
}
