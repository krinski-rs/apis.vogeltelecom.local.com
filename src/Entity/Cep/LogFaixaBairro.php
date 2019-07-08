<?php

namespace App\Entity\Cep;

class LogFaixaBairro
{
    private $fcbNuOrdem;

    private $fcbRadIni;

    private $fcbSufIni;

    private $fcbRadFim;

    private $fcbSufFim;

    private $baiNuSequencial;

    public function getFcbNuOrdem(): ?int
    {
        return $this->fcbNuOrdem;
    }

    public function getFcbRadIni(): ?string
    {
        return $this->fcbRadIni;
    }

    public function setFcbRadIni(string $fcbRadIni): self
    {
        $this->fcbRadIni = $fcbRadIni;

        return $this;
    }

    public function getFcbSufIni(): ?string
    {
        return $this->fcbSufIni;
    }

    public function setFcbSufIni(string $fcbSufIni): self
    {
        $this->fcbSufIni = $fcbSufIni;

        return $this;
    }

    public function getFcbRadFim(): ?string
    {
        return $this->fcbRadFim;
    }

    public function setFcbRadFim(string $fcbRadFim): self
    {
        $this->fcbRadFim = $fcbRadFim;

        return $this;
    }

    public function getFcbSufFim(): ?string
    {
        return $this->fcbSufFim;
    }

    public function setFcbSufFim(string $fcbSufFim): self
    {
        $this->fcbSufFim = $fcbSufFim;

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
