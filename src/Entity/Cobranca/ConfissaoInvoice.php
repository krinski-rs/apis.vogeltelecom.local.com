<?php

namespace App\Entity\Cobranca;

class ConfissaoInvoice
{
    private $confissaoInvoiceId;

    private $tipo;

    private $confissao;

    private $invoice;

    public function getConfissaoInvoiceId(): ?int
    {
        return $this->confissaoInvoiceId;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getConfissao(): ?Confissao
    {
        return $this->confissao;
    }

    public function setConfissao(?Confissao $confissao): self
    {
        $this->confissao = $confissao;

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
