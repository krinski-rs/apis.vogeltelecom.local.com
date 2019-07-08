<?php

namespace App\Entity\Gcdb;

class AdmCidades
{
    private $id;

    private $nome;

    private $codigoIbge;

    private $admUf;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCodigoIbge(): ?int
    {
        return $this->codigoIbge;
    }

    public function setCodigoIbge(?int $codigoIbge): self
    {
        $this->codigoIbge = $codigoIbge;

        return $this;
    }

    public function getAdmUf(): ?AdmUf
    {
        return $this->admUf;
    }

    public function setAdmUf(?AdmUf $admUf): self
    {
        $this->admUf = $admUf;

        return $this;
    }
}
