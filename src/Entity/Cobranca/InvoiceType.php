<?php

namespace App\Entity\Cobranca;

class InvoiceType
{
    private $idTypeInvoice;

    private $description;

    private $operacao;

    private $relacao;

    private $invoiceType;

    public function getIdTypeInvoice(): ?int
    {
        return $this->idTypeInvoice;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getOperacao(): ?string
    {
        return $this->operacao;
    }

    public function setOperacao(?string $operacao): self
    {
        $this->operacao = $operacao;

        return $this;
    }

    public function getRelacao(): ?int
    {
        return $this->relacao;
    }

    public function setRelacao(?int $relacao): self
    {
        $this->relacao = $relacao;

        return $this;
    }

    public function getInvoiceType(): ?self
    {
        return $this->invoiceType;
    }

    public function setInvoiceType(?self $invoiceType): self
    {
        $this->invoiceType = $invoiceType;

        return $this;
    }
}
