<?php

namespace App\Entity\Financeiro;

class TmpAtributo
{
    private $idTmpAtributo;

    private $colunaCsv;

    private $valor;

    private $idTmpPonta;

    public function getIdTmpAtributo(): ?int
    {
        return $this->idTmpAtributo;
    }

    public function getColunaCsv(): ?string
    {
        return $this->colunaCsv;
    }

    public function setColunaCsv(?string $colunaCsv): self
    {
        $this->colunaCsv = $colunaCsv;

        return $this;
    }

    public function getValor(): ?string
    {
        return $this->valor;
    }

    public function setValor(?string $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getIdTmpPonta(): ?TmpPonta
    {
        return $this->idTmpPonta;
    }

    public function setIdTmpPonta(?TmpPonta $idTmpPonta): self
    {
        $this->idTmpPonta = $idTmpPonta;

        return $this;
    }
}
