<?php

namespace App\Entity\Financeiro;

class IntegracaoWanLog
{
    private $id;

    private $contratoWanId;

    private $customerId;

    private $customerIdWan;

    private $status;

    private $dataHoraCriacao;

    private $message;

    private $contratoVogel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContratoWanId(): ?int
    {
        return $this->contratoWanId;
    }

    public function setContratoWanId(?int $contratoWanId): self
    {
        $this->contratoWanId = $contratoWanId;

        return $this;
    }

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function getCustomerIdWan(): ?int
    {
        return $this->customerIdWan;
    }

    public function setCustomerIdWan(?int $customerIdWan): self
    {
        $this->customerIdWan = $customerIdWan;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDataHoraCriacao(): ?\DateTimeInterface
    {
        return $this->dataHoraCriacao;
    }

    public function setDataHoraCriacao(?\DateTimeInterface $dataHoraCriacao): self
    {
        $this->dataHoraCriacao = $dataHoraCriacao;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getContratoVogel(): ?Contrato
    {
        return $this->contratoVogel;
    }

    public function setContratoVogel(?Contrato $contratoVogel): self
    {
        $this->contratoVogel = $contratoVogel;

        return $this;
    }
}
