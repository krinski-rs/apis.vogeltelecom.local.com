<?php

namespace App\Entity\Gcdb;

class Prioridade
{
    private $prioridadeid;

    private $nivel;

    private $customer;

    public function getPrioridadeid(): ?int
    {
        return $this->prioridadeid;
    }

    public function getNivel(): ?string
    {
        return $this->nivel;
    }

    public function setNivel(string $nivel): self
    {
        $this->nivel = $nivel;

        return $this;
    }

    public function getCustomer(): ?Customers
    {
        return $this->customer;
    }

    public function setCustomer(?Customers $customer): self
    {
        $this->customer = $customer;

        return $this;
    }
}
