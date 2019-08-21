<?php

namespace App\Entity\Cobranca;

class InvoiceEmail
{
    private $emailInvoiceid;

    private $userId;

    private $dataInc;

    private $emailLumaId;

    private $cadUserEmailId;

    private $invoice;

    public function getEmailInvoiceid(): ?int
    {
        return $this->emailInvoiceid;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getDataInc(): ?\DateTimeInterface
    {
        return $this->dataInc;
    }

    public function setDataInc(?\DateTimeInterface $dataInc): self
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    public function getEmailLumaId(): ?int
    {
        return $this->emailLumaId;
    }

    public function setEmailLumaId(?int $emailLumaId): self
    {
        $this->emailLumaId = $emailLumaId;

        return $this;
    }

    public function getCadUserEmailId(): ?int
    {
        return $this->cadUserEmailId;
    }

    public function setCadUserEmailId(?int $cadUserEmailId): self
    {
        $this->cadUserEmailId = $cadUserEmailId;

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
