<?php

namespace App\Entity\Cobranca;

class DeliveryInvoiceLog
{
    private $id;

    private $createdAt;

    private $field;

    private $message;

    private $idDeliveryInvoice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getField(): ?string
    {
        return $this->field;
    }

    public function setField(string $field): self
    {
        $this->field = $field;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getIdDeliveryInvoice(): ?int
    {
        return $this->idDeliveryInvoice;
    }

    public function setIdDeliveryInvoice(int $idDeliveryInvoice): self
    {
        $this->idDeliveryInvoice = $idDeliveryInvoice;

        return $this;
    }
}
