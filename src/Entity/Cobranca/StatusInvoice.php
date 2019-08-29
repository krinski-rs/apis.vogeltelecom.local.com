<?php

namespace App\Entity\Cobranca;

class StatusInvoice
{
    private $idStatusInvoice;

    private $description;

    public function getIdStatusInvoice(): ?int
    {
        return $this->idStatusInvoice;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
