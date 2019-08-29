<?php

namespace App\Entity\Cobranca;

class CustomerFeature
{
    private $customerFeatureid;

    private $customer;

    private $dateRecord;

    private $userId;

    private $userModified;

    private $description;

    private $tipo;

    public function getCustomerFeatureid(): ?int
    {
        return $this->customerFeatureid;
    }

    public function getCustomer(): ?int
    {
        return $this->customer;
    }

    public function setCustomer(?int $customer): self
    {
        $this->customer = $customer;

        return $this;
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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getUserModified(): ?int
    {
        return $this->userModified;
    }

    public function setUserModified(?int $userModified): self
    {
        $this->userModified = $userModified;

        return $this;
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

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}
