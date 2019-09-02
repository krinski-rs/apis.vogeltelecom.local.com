<?php

namespace App\Entity\Cobranca;

class CcLog
{
    private $ccCodigoid;

    private $dataIncLog;

    private $operCodigoid;

    private $customer;

    private $dataInc;

    private $valor;

    private $tipo;

    private $descricao;

    private $saldoAnterior;

    private $idUser;

    private $bancCodigoid;

    private $dataRegistroSistema;

    public function getCcCodigoid(): ?int
    {
        return $this->ccCodigoid;
    }

    public function getDataIncLog(): ?\DateTimeInterface
    {
        return $this->dataIncLog;
    }

    public function getOperCodigoid(): ?int
    {
        return $this->operCodigoid;
    }

    public function setOperCodigoid(int $operCodigoid): self
    {
        $this->operCodigoid = $operCodigoid;

        return $this;
    }

    public function getCustomer(): ?int
    {
        return $this->customer;
    }

    public function setCustomer(int $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getDataInc(): ?\DateTimeInterface
    {
        return $this->dataInc;
    }

    public function setDataInc(\DateTimeInterface $dataInc): self
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
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

    public function getSaldoAnterior()
    {
        return $this->saldoAnterior;
    }

    public function setSaldoAnterior($saldoAnterior): self
    {
        $this->saldoAnterior = $saldoAnterior;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getBancCodigoid(): ?int
    {
        return $this->bancCodigoid;
    }

    public function setBancCodigoid(?int $bancCodigoid): self
    {
        $this->bancCodigoid = $bancCodigoid;

        return $this;
    }

    public function getDataRegistroSistema(): ?\DateTimeInterface
    {
        return $this->dataRegistroSistema;
    }

    public function setDataRegistroSistema(\DateTimeInterface $dataRegistroSistema): self
    {
        $this->dataRegistroSistema = $dataRegistroSistema;

        return $this;
    }
}
