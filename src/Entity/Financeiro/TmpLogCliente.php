<?php

namespace App\Entity\Financeiro;

class TmpLogCliente
{
    private $id;

    private $descricao;

    private $dataInc;

    private $cnpj;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getDataInc(): ?string
    {
        return $this->dataInc;
    }

    public function setDataInc(?string $dataInc): self
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    public function getCnpj(): ?string
    {
        return $this->cnpj;
    }

    public function setCnpj(?string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}
