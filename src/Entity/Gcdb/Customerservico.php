<?php

namespace App\Entity\Gcdb;

class Customerservico
{
    private $custservCodigoid;

    private $idservico;

    private $customerid;

    private $custservAtivo;

    private $custservDatainc;

    public function getCustservCodigoid(): ?int
    {
        return $this->custservCodigoid;
    }

    public function getIdservico(): ?int
    {
        return $this->idservico;
    }

    public function setIdservico(int $idservico): self
    {
        $this->idservico = $idservico;

        return $this;
    }

    public function getCustomerid(): ?int
    {
        return $this->customerid;
    }

    public function setCustomerid(int $customerid): self
    {
        $this->customerid = $customerid;

        return $this;
    }

    public function getCustservAtivo(): ?bool
    {
        return $this->custservAtivo;
    }

    public function setCustservAtivo(bool $custservAtivo): self
    {
        $this->custservAtivo = $custservAtivo;

        return $this;
    }

    public function getCustservDatainc(): ?\DateTimeInterface
    {
        return $this->custservDatainc;
    }

    public function setCustservDatainc(\DateTimeInterface $custservDatainc): self
    {
        $this->custservDatainc = $custservDatainc;

        return $this;
    }
}
