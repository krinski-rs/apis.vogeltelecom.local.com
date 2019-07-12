<?php

namespace App\Entity\Gcdb;

class AdmUf
{
    private $id;

    private $sigla;

    private $nome;

    private $admPais;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSigla(): ?string
    {
        return $this->sigla;
    }

    public function setSigla(?string $sigla): self
    {
        $this->sigla = $sigla;

        return $this;
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

    public function getAdmPais(): ?AdmPais
    {
        return $this->admPais;
    }

    public function setAdmPais(?AdmPais $admPais): self
    {
        $this->admPais = $admPais;

        return $this;
    }
}
