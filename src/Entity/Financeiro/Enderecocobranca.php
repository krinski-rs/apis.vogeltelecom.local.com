<?php

namespace App\Entity\Financeiro;

class Enderecocobranca
{
    private $endecobrCodigoid;

    private $endecobrPais;

    private $endecobrEstado;

    private $endecobrCidade;

    private $endecobrBairro;

    private $endecobrLogradouro;

    private $endecobrCep;

    private $endecobrNumero;

    private $endecobrComplemento;

    private $endecobrLatitude;

    private $endecobrLongitude;

    private $contCodigoid;

    public function getEndecobrCodigoid(): ?int
    {
        return $this->endecobrCodigoid;
    }

    public function getEndecobrPais(): ?int
    {
        return $this->endecobrPais;
    }

    public function setEndecobrPais(int $endecobrPais): self
    {
        $this->endecobrPais = $endecobrPais;

        return $this;
    }

    public function getEndecobrEstado(): ?string
    {
        return $this->endecobrEstado;
    }

    public function setEndecobrEstado(string $endecobrEstado): self
    {
        $this->endecobrEstado = $endecobrEstado;

        return $this;
    }

    public function getEndecobrCidade(): ?string
    {
        return $this->endecobrCidade;
    }

    public function setEndecobrCidade(string $endecobrCidade): self
    {
        $this->endecobrCidade = $endecobrCidade;

        return $this;
    }

    public function getEndecobrBairro(): ?string
    {
        return $this->endecobrBairro;
    }

    public function setEndecobrBairro(string $endecobrBairro): self
    {
        $this->endecobrBairro = $endecobrBairro;

        return $this;
    }

    public function getEndecobrLogradouro(): ?string
    {
        return $this->endecobrLogradouro;
    }

    public function setEndecobrLogradouro(string $endecobrLogradouro): self
    {
        $this->endecobrLogradouro = $endecobrLogradouro;

        return $this;
    }

    public function getEndecobrCep(): ?string
    {
        return $this->endecobrCep;
    }

    public function setEndecobrCep(string $endecobrCep): self
    {
        $this->endecobrCep = $endecobrCep;

        return $this;
    }

    public function getEndecobrNumero(): ?string
    {
        return $this->endecobrNumero;
    }

    public function setEndecobrNumero(string $endecobrNumero): self
    {
        $this->endecobrNumero = $endecobrNumero;

        return $this;
    }

    public function getEndecobrComplemento(): ?string
    {
        return $this->endecobrComplemento;
    }

    public function setEndecobrComplemento(?string $endecobrComplemento): self
    {
        $this->endecobrComplemento = $endecobrComplemento;

        return $this;
    }

    public function getEndecobrLatitude(): ?string
    {
        return $this->endecobrLatitude;
    }

    public function setEndecobrLatitude(?string $endecobrLatitude): self
    {
        $this->endecobrLatitude = $endecobrLatitude;

        return $this;
    }

    public function getEndecobrLongitude(): ?string
    {
        return $this->endecobrLongitude;
    }

    public function setEndecobrLongitude(?string $endecobrLongitude): self
    {
        $this->endecobrLongitude = $endecobrLongitude;

        return $this;
    }

    public function getContCodigoid(): ?Contrato
    {
        return $this->contCodigoid;
    }

    public function setContCodigoid(?Contrato $contCodigoid): self
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }
}
