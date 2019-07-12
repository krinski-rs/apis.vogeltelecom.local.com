<?php

namespace App\Entity\Financeiro;

class Enderecoentrega
{
    private $endeentrCodigoid;

    private $contCodigoid;

    private $endeentrConcentrador;

    private $endeentrPais;

    private $endeentrEstado;

    private $endeentrCidade;

    private $endeentrBairro;

    private $endeentrLogradouro;

    private $endeentrCep;

    private $endeentrNumero;

    private $endeentrComplemento;

    private $endeentrPonta;

    private $endeentrLatitude;

    private $endeentrLongitude;

    private $endeentrDesignadorOld;

    private $admLogradouro;

    public function getEndeentrCodigoid(): ?int
    {
        return $this->endeentrCodigoid;
    }

    public function getContCodigoid(): ?int
    {
        return $this->contCodigoid;
    }

    public function setContCodigoid(?int $contCodigoid): self
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    public function getEndeentrConcentrador(): ?bool
    {
        return $this->endeentrConcentrador;
    }

    public function setEndeentrConcentrador(bool $endeentrConcentrador): self
    {
        $this->endeentrConcentrador = $endeentrConcentrador;

        return $this;
    }

    public function getEndeentrPais(): ?int
    {
        return $this->endeentrPais;
    }

    public function setEndeentrPais(int $endeentrPais): self
    {
        $this->endeentrPais = $endeentrPais;

        return $this;
    }

    public function getEndeentrEstado(): ?int
    {
        return $this->endeentrEstado;
    }

    public function setEndeentrEstado(int $endeentrEstado): self
    {
        $this->endeentrEstado = $endeentrEstado;

        return $this;
    }

    public function getEndeentrCidade(): ?int
    {
        return $this->endeentrCidade;
    }

    public function setEndeentrCidade(int $endeentrCidade): self
    {
        $this->endeentrCidade = $endeentrCidade;

        return $this;
    }

    public function getEndeentrBairro(): ?string
    {
        return $this->endeentrBairro;
    }

    public function setEndeentrBairro(string $endeentrBairro): self
    {
        $this->endeentrBairro = $endeentrBairro;

        return $this;
    }

    public function getEndeentrLogradouro(): ?string
    {
        return $this->endeentrLogradouro;
    }

    public function setEndeentrLogradouro(string $endeentrLogradouro): self
    {
        $this->endeentrLogradouro = $endeentrLogradouro;

        return $this;
    }

    public function getEndeentrCep(): ?string
    {
        return $this->endeentrCep;
    }

    public function setEndeentrCep(string $endeentrCep): self
    {
        $this->endeentrCep = $endeentrCep;

        return $this;
    }

    public function getEndeentrNumero(): ?int
    {
        return $this->endeentrNumero;
    }

    public function setEndeentrNumero(int $endeentrNumero): self
    {
        $this->endeentrNumero = $endeentrNumero;

        return $this;
    }

    public function getEndeentrComplemento(): ?string
    {
        return $this->endeentrComplemento;
    }

    public function setEndeentrComplemento(?string $endeentrComplemento): self
    {
        $this->endeentrComplemento = $endeentrComplemento;

        return $this;
    }

    public function getEndeentrPonta(): ?string
    {
        return $this->endeentrPonta;
    }

    public function setEndeentrPonta(?string $endeentrPonta): self
    {
        $this->endeentrPonta = $endeentrPonta;

        return $this;
    }

    public function getEndeentrLatitude(): ?string
    {
        return $this->endeentrLatitude;
    }

    public function setEndeentrLatitude(?string $endeentrLatitude): self
    {
        $this->endeentrLatitude = $endeentrLatitude;

        return $this;
    }

    public function getEndeentrLongitude(): ?string
    {
        return $this->endeentrLongitude;
    }

    public function setEndeentrLongitude(?string $endeentrLongitude): self
    {
        $this->endeentrLongitude = $endeentrLongitude;

        return $this;
    }

    public function getEndeentrDesignadorOld(): ?string
    {
        return $this->endeentrDesignadorOld;
    }

    public function setEndeentrDesignadorOld(?string $endeentrDesignadorOld): self
    {
        $this->endeentrDesignadorOld = $endeentrDesignadorOld;

        return $this;
    }

    public function getAdmLogradouro(): ?int
    {
        return $this->admLogradouro;
    }

    public function setAdmLogradouro(?int $admLogradouro): self
    {
        $this->admLogradouro = $admLogradouro;

        return $this;
    }
}
