<?php

namespace App\Entity\Financeiro;

class Ativacaotemplate
{
    private $ativtempCodigoid;

    private $ativtempNome;

    private $servCodigoid;

    public function getAtivtempCodigoid(): ?int
    {
        return $this->ativtempCodigoid;
    }

    public function getAtivtempNome(): ?string
    {
        return $this->ativtempNome;
    }

    public function setAtivtempNome(string $ativtempNome): self
    {
        $this->ativtempNome = $ativtempNome;

        return $this;
    }

    public function getServCodigoid(): ?Servico
    {
        return $this->servCodigoid;
    }

    public function setServCodigoid(?Servico $servCodigoid): self
    {
        $this->servCodigoid = $servCodigoid;

        return $this;
    }
}
