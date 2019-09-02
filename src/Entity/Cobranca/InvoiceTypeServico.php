<?php

namespace App\Entity\Cobranca;

class InvoiceTypeServico
{
    private $id;

    private $servCodigoid;

    private $productType;

    private $invoiceType;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getServCodigoid(): ?int
    {
        return $this->servCodigoid;
    }

    public function setServCodigoid(int $servCodigoid): self
    {
        $this->servCodigoid = $servCodigoid;

        return $this;
    }

    public function getProductType(): ?string
    {
        return $this->productType;
    }

    public function setProductType(?string $productType): self
    {
        $this->productType = $productType;

        return $this;
    }

    public function getInvoiceType(): ?InvoiceType
    {
        return $this->invoiceType;
    }

    public function setInvoiceType(?InvoiceType $invoiceType): self
    {
        $this->invoiceType = $invoiceType;

        return $this;
    }
}
