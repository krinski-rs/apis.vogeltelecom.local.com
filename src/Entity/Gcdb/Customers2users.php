<?php

namespace App\Entity\Gcdb;

class Customers2users
{
    private $id;

    private $dataAbertura;

    private $alqtIcms;

    private $recebeBoleto;

    private $cadUser;

    private $customer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataAbertura(): ?\DateTimeInterface
    {
        return $this->dataAbertura;
    }

    public function setDataAbertura(\DateTimeInterface $dataAbertura): self
    {
        $this->dataAbertura = $dataAbertura;

        return $this;
    }

    public function getAlqtIcms(): ?int
    {
        return $this->alqtIcms;
    }

    public function setAlqtIcms(int $alqtIcms): self
    {
        $this->alqtIcms = $alqtIcms;

        return $this;
    }

    public function getRecebeBoleto(): ?bool
    {
        return $this->recebeBoleto;
    }

    public function setRecebeBoleto(?bool $recebeBoleto): self
    {
        $this->recebeBoleto = $recebeBoleto;

        return $this;
    }

    public function getCadUser(): ?CadUsers
    {
        return $this->cadUser;
    }

    public function setCadUser(?CadUsers $cadUser): self
    {
        $this->cadUser = $cadUser;

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
