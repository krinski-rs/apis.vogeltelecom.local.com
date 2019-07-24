<?php

namespace App\Entity\Luma;

class Poplocalizacao
{
    private $idLocalizacao;

    private $cidade;

    private $endereco;

    private $bairro;

    private $referencia;

    private $latitude;

    private $longitude;

    private $latitudeMaps;

    private $longitudeMaps;

    private $telefone1;

    private $telefone2;

    private $cep;

    private $uf;

    private $nome;

    private $numero;

    private $complemento;

    private $complementoNumero;

    private $localeCodigoid;

    public function getIdLocalizacao(): ?int
    {
        return $this->idLocalizacao;
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

    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    public function setEndereco(?string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    public function setBairro(?string $bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getReferencia(): ?string
    {
        return $this->referencia;
    }

    public function setReferencia(?string $referencia): self
    {
        $this->referencia = $referencia;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitudeMaps(): ?string
    {
        return $this->latitudeMaps;
    }

    public function setLatitudeMaps(?string $latitudeMaps): self
    {
        $this->latitudeMaps = $latitudeMaps;

        return $this;
    }

    public function getLongitudeMaps(): ?string
    {
        return $this->longitudeMaps;
    }

    public function setLongitudeMaps(?string $longitudeMaps): self
    {
        $this->longitudeMaps = $longitudeMaps;

        return $this;
    }

    public function getTelefone1(): ?string
    {
        return $this->telefone1;
    }

    public function setTelefone1(?string $telefone1): self
    {
        $this->telefone1 = $telefone1;

        return $this;
    }

    public function getTelefone2(): ?string
    {
        return $this->telefone2;
    }

    public function setTelefone2(?string $telefone2): self
    {
        $this->telefone2 = $telefone2;

        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(?string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getUf(): ?string
    {
        return $this->uf;
    }

    public function setUf(?string $uf): self
    {
        $this->uf = $uf;

        return $this;
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

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
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

    public function getComplementoNumero(): ?string
    {
        return $this->complementoNumero;
    }

    public function setComplementoNumero(?string $complementoNumero): self
    {
        $this->complementoNumero = $complementoNumero;

        return $this;
    }

    public function getLocaleCodigoid(): ?int
    {
        return $this->localeCodigoid;
    }

    public function setLocaleCodigoid(?int $localeCodigoid): self
    {
        $this->localeCodigoid = $localeCodigoid;

        return $this;
    }
}
