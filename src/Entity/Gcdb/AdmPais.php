<?php

namespace App\Entity\Gcdb;

class AdmPais
{
    private $id;

    private $sigla;

    private $nome;

    private $codigoBacen;

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

    public function getCodigoBacen(): ?int
    {
        return $this->codigoBacen;
    }

    public function setCodigoBacen(int $codigoBacen): self
    {
        $this->codigoBacen = $codigoBacen;

        return $this;
    }
}
