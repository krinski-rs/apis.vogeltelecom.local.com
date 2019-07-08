<?php

namespace App\Entity\Cep;

class LogGrandeUsuario
{
    private $gruNuSequencial;

    private $ufeSg;

    private $gruNo;

    private $cep;

    private $gruEndereco;

    private $temp;

    private $logLocalidade;

    private $logLogradouro;

    private $logBairro;

    public function getGruNuSequencial(): ?int
    {
        return $this->gruNuSequencial;
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

    public function getGruNo(): ?string
    {
        return $this->gruNo;
    }

    public function setGruNo(string $gruNo): self
    {
        $this->gruNo = $gruNo;

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

    public function getGruEndereco(): ?string
    {
        return $this->gruEndereco;
    }

    public function setGruEndereco(string $gruEndereco): self
    {
        $this->gruEndereco = $gruEndereco;

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

    public function getLogLocalidade(): ?LogLocalidade
    {
        return $this->logLocalidade;
    }

    public function setLogLocalidade(?LogLocalidade $logLocalidade): self
    {
        $this->logLocalidade = $logLocalidade;

        return $this;
    }

    public function getLogLogradouro(): ?LogLogradouro
    {
        return $this->logLogradouro;
    }

    public function setLogLogradouro(?LogLogradouro $logLogradouro): self
    {
        $this->logLogradouro = $logLogradouro;

        return $this;
    }

    public function getLogBairro(): ?LogBairro
    {
        return $this->logBairro;
    }

    public function setLogBairro(?LogBairro $logBairro): self
    {
        $this->logBairro = $logBairro;

        return $this;
    }
}
