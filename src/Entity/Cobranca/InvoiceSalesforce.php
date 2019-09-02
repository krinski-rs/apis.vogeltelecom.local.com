<?php

namespace App\Entity\Cobranca;

class InvoiceSalesforce
{
    private $id;

    private $idSalesforce;

    private $dataCriacao;

    private $dataIntegracao;

    private $invoice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSalesforce(): ?string
    {
        return $this->idSalesforce;
    }

    public function setIdSalesforce(?string $idSalesforce): self
    {
        $this->idSalesforce = $idSalesforce;

        return $this;
    }

    public function getDataCriacao(): ?\DateTimeInterface
    {
        return $this->dataCriacao;
    }

    public function setDataCriacao(\DateTimeInterface $dataCriacao): self
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    public function getDataIntegracao(): ?\DateTimeInterface
    {
        return $this->dataIntegracao;
    }

    public function setDataIntegracao(?\DateTimeInterface $dataIntegracao): self
    {
        $this->dataIntegracao = $dataIntegracao;

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
