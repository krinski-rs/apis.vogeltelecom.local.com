<?php

namespace App\Entity\Cobranca;

class DeliveryInvoice
{
    private $id;

    private $delivery;

    private $invoice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDelivery(): ?Delivery
    {
        return $this->delivery;
    }

    public function setDelivery(?Delivery $delivery): self
    {
        $this->delivery = $delivery;

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
