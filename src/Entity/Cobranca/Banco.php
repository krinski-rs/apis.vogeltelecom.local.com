<?php

namespace App\Entity\Cobranca;

class Banco
{
    private $bancCodigoid;

    private $banco;

    private $agencia;

    private $conta;

    private $bancoNum;

    private $default;

    private $boleto;

    private $cobrador;

    public function getBancCodigoid(): ?int
    {
        return $this->bancCodigoid;
    }

    public function getBanco(): ?string
    {
        return $this->banco;
    }

    public function setBanco(string $banco): self
    {
        $this->banco = $banco;

        return $this;
    }

    public function getAgencia(): ?string
    {
        return $this->agencia;
    }

    public function setAgencia(string $agencia): self
    {
        $this->agencia = $agencia;

        return $this;
    }

    public function getConta(): ?string
    {
        return $this->conta;
    }

    public function setConta(string $conta): self
    {
        $this->conta = $conta;

        return $this;
    }

    public function getBancoNum(): ?string
    {
        return $this->bancoNum;
    }

    public function setBancoNum(string $bancoNum): self
    {
        $this->bancoNum = $bancoNum;

        return $this;
    }

    public function getDefault(): ?bool
    {
        return $this->default;
    }

    public function setDefault(?bool $default): self
    {
        $this->default = $default;

        return $this;
    }

    public function getBoleto(): ?bool
    {
        return $this->boleto;
    }

    public function setBoleto(?bool $boleto): self
    {
        $this->boleto = $boleto;

        return $this;
    }

    public function getCobrador(): ?Cobrador
    {
        return $this->cobrador;
    }

    public function setCobrador(?Cobrador $cobrador): self
    {
        $this->cobrador = $cobrador;

        return $this;
    }
}
