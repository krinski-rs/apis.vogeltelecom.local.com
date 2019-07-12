<?php

namespace App\Entity\Financeiro;

class TmpContaCriada
{
    private $idTmpContaCriada;

    private $ramoAtividade;

    private $tipo;

    private $estado;

    private $cidade;

    private $cnpj;

    private $porte;

    private $tipoPessoa;

    private $contaCriada;

    private $gc;

    private $canalVenda;

    private $cid;

    public function getIdTmpContaCriada(): ?int
    {
        return $this->idTmpContaCriada;
    }

    public function getRamoAtividade(): ?string
    {
        return $this->ramoAtividade;
    }

    public function setRamoAtividade(?string $ramoAtividade): self
    {
        $this->ramoAtividade = $ramoAtividade;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

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

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(?string $cidade): self
    {
        $this->cidade = $cidade;

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

    public function getPorte(): ?string
    {
        return $this->porte;
    }

    public function setPorte(?string $porte): self
    {
        $this->porte = $porte;

        return $this;
    }

    public function getTipoPessoa(): ?string
    {
        return $this->tipoPessoa;
    }

    public function setTipoPessoa(?string $tipoPessoa): self
    {
        $this->tipoPessoa = $tipoPessoa;

        return $this;
    }

    public function getContaCriada(): ?int
    {
        return $this->contaCriada;
    }

    public function setContaCriada(?int $contaCriada): self
    {
        $this->contaCriada = $contaCriada;

        return $this;
    }

    public function getGc(): ?string
    {
        return $this->gc;
    }

    public function setGc(?string $gc): self
    {
        $this->gc = $gc;

        return $this;
    }

    public function getCanalVenda(): ?string
    {
        return $this->canalVenda;
    }

    public function setCanalVenda(?string $canalVenda): self
    {
        $this->canalVenda = $canalVenda;

        return $this;
    }

    public function getCid(): ?int
    {
        return $this->cid;
    }

    public function setCid(int $cid): self
    {
        $this->cid = $cid;

        return $this;
    }
}
