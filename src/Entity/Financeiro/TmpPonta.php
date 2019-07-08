<?php

namespace App\Entity\Financeiro;

class TmpPonta
{
    private $idTmpPonta;

    private $ponta;

    private $interface;

    private $logradouro;

    private $numero;

    private $complemento;

    private $cidade;

    private $estado;

    private $idPop;

    private $idTmpCircuito;

    public function getIdTmpPonta(): ?int
    {
        return $this->idTmpPonta;
    }

    public function getPonta(): ?string
    {
        return $this->ponta;
    }

    public function setPonta(?string $ponta): self
    {
        $this->ponta = $ponta;

        return $this;
    }

    public function getInterface(): ?string
    {
        return $this->interface;
    }

    public function setInterface(?string $interface): self
    {
        $this->interface = $interface;

        return $this;
    }

    public function getLogradouro(): ?string
    {
        return $this->logradouro;
    }

    public function setLogradouro(?string $logradouro): self
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getComplemento(): ?string
    {
        return $this->complemento;
    }

    public function setComplemento(?string $complemento): self
    {
        $this->complemento = $complemento;

        return $this;
    }

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(?string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(?string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getIdPop(): ?int
    {
        return $this->idPop;
    }

    public function setIdPop(?int $idPop): self
    {
        $this->idPop = $idPop;

        return $this;
    }

    public function getIdTmpCircuito(): ?TmpCircuito
    {
        return $this->idTmpCircuito;
    }

    public function setIdTmpCircuito(?TmpCircuito $idTmpCircuito): self
    {
        $this->idTmpCircuito = $idTmpCircuito;

        return $this;
    }
}
