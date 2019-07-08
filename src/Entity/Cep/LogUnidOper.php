<?php

namespace App\Entity\Cep;

class LogUnidOper
{
    private $uopNuSequencial;

    private $ufeSg;

    private $uopNo;

    private $cep;

    private $uopEndereco;

    private $uopInCp;

    private $temp;

    private $locNuSequencial;

    private $logNuSequencial;

    private $baiNuSequencial;

    public function getUopNuSequencial(): ?int
    {
        return $this->uopNuSequencial;
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

    public function getUopNo(): ?string
    {
        return $this->uopNo;
    }

    public function setUopNo(string $uopNo): self
    {
        $this->uopNo = $uopNo;

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

    public function getUopEndereco(): ?string
    {
        return $this->uopEndereco;
    }

    public function setUopEndereco(string $uopEndereco): self
    {
        $this->uopEndereco = $uopEndereco;

        return $this;
    }

    public function getUopInCp(): ?string
    {
        return $this->uopInCp;
    }

    public function setUopInCp(?string $uopInCp): self
    {
        $this->uopInCp = $uopInCp;

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

    public function getLogNuSequencial(): ?LogLogradouro
    {
        return $this->logNuSequencial;
    }

    public function setLogNuSequencial(?LogLogradouro $logNuSequencial): self
    {
        $this->logNuSequencial = $logNuSequencial;

        return $this;
    }

    public function getBaiNuSequencial(): ?LogBairro
    {
        return $this->baiNuSequencial;
    }

    public function setBaiNuSequencial(?LogBairro $baiNuSequencial): self
    {
        $this->baiNuSequencial = $baiNuSequencial;

        return $this;
    }
}
