<?php

namespace App\Entity\Cobranca;

class InvoiceBoleto
{
    private $idInvoiceBoleto;

    private $dateRecord;

    private $invoice;

    private $boleto;

    public function getIdInvoiceBoleto(): ?int
    {
        return $this->idInvoiceBoleto;
    }

    public function getDateRecord(): ?\DateTimeInterface
    {
        return $this->dateRecord;
    }

    public function setDateRecord(?\DateTimeInterface $dateRecord): self
    {
        $this->dateRecord = $dateRecord;

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

    public function getBoleto(): ?Boleto
    {
        return $this->boleto;
    }

    public function setBoleto(?Boleto $boleto): self
    {
        $this->boleto = $boleto;

        return $this;
    }
}
