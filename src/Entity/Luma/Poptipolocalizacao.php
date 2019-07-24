<?php

namespace App\Entity\Luma;

class Poptipolocalizacao
{
    private $idTipo;

    private $nome;

    public function getIdTipo(): ?int
    {
        return $this->idTipo;
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
}
