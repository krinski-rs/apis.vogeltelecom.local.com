<?php

namespace App\Entity\Cep;

class LogCpc
{
    private $cpcNuSequencial;

    private $ufeSg;

    private $cep;

    private $cpcNo;

    private $cpcEndereco;

    private $cpcTipo;

    private $cpcAbrangencia;

    private $temp;

    private $locNuSequencial;

    public function getCpcNuSequencial(): ?int
    {
        return $this->cpcNuSequencial;
    }

    public function getUfeSg(): ?string
    {
        return $this->ufeSg;
    }

    public function setUfeSg(string $ufeSg): self
    {
        $this->ufeSg = $ufeSg;

        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getCpcNo(): ?string
    {
        return $this->cpcNo;
    }

    public function setCpcNo(string $cpcNo): self
    {
        $this->cpcNo = $cpcNo;

        return $this;
    }

    public function getCpcEndereco(): ?string
    {
        return $this->cpcEndereco;
    }

    public function setCpcEndereco(string $cpcEndereco): self
    {
        $this->cpcEndereco = $cpcEndereco;

        return $this;
    }

    public function getCpcTipo(): ?string
    {
        return $this->cpcTipo;
    }

    public function setCpcTipo(?string $cpcTipo): self
    {
        $this->cpcTipo = $cpcTipo;

        return $this;
    }

    public function getCpcAbrangencia(): ?string
    {
        return $this->cpcAbrangencia;
    }

    public function setCpcAbrangencia(?string $cpcAbrangencia): self
    {
        $this->cpcAbrangencia = $cpcAbrangencia;

        return $this;
    }

    public function getTemp(): ?string
    {
        return $this->temp;
    }

    public function setTemp(?string $temp): self
    {
        $this->temp = $temp;

        return $this;
    }

    public function getLocNuSequencial(): ?LogLocalidade
    {
        return $this->locNuSequencial;
    }

    public function setLocNuSequencial(?LogLocalidade $locNuSequencial): self
    {
        $this->locNuSequencial = $locNuSequencial;

        return $this;
    }
}
