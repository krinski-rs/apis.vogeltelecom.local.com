<?php

namespace App\Entity\Cep;

class LogFaixaUf
{
    private $ufeSg;

    private $ufeNo;

    private $ufeRad1Ini;

    private $ufeSuf1Ini;

    private $ufeRad1Fim;

    private $ufeSuf1Fim;

    private $ufeRad2Ini;

    private $ufeSuf2Ini;

    private $ufeRad2Fim;

    private $ufeSuf2Fim;

    public function getUfeSg(): ?string
    {
        return $this->ufeSg;
    }

    public function getUfeNo(): ?string
    {
        return $this->ufeNo;
    }

    public function setUfeNo(string $ufeNo): self
    {
        $this->ufeNo = $ufeNo;

        return $this;
    }

    public function getUfeRad1Ini(): ?string
    {
        return $this->ufeRad1Ini;
    }

    public function setUfeRad1Ini(string $ufeRad1Ini): self
    {
        $this->ufeRad1Ini = $ufeRad1Ini;

        return $this;
    }

    public function getUfeSuf1Ini(): ?string
    {
        return $this->ufeSuf1Ini;
    }

    public function setUfeSuf1Ini(string $ufeSuf1Ini): self
    {
        $this->ufeSuf1Ini = $ufeSuf1Ini;

        return $this;
    }

    public function getUfeRad1Fim(): ?string
    {
        return $this->ufeRad1Fim;
    }

    public function setUfeRad1Fim(string $ufeRad1Fim): self
    {
        $this->ufeRad1Fim = $ufeRad1Fim;

        return $this;
    }

    public function getUfeSuf1Fim(): ?string
    {
        return $this->ufeSuf1Fim;
    }

    public function setUfeSuf1Fim(string $ufeSuf1Fim): self
    {
        $this->ufeSuf1Fim = $ufeSuf1Fim;

        return $this;
    }

    public function getUfeRad2Ini(): ?string
    {
        return $this->ufeRad2Ini;
    }

    public function setUfeRad2Ini(?string $ufeRad2Ini): self
    {
        $this->ufeRad2Ini = $ufeRad2Ini;

        return $this;
    }

    public function getUfeSuf2Ini(): ?string
    {
        return $this->ufeSuf2Ini;
    }

    public function setUfeSuf2Ini(?string $ufeSuf2Ini): self
    {
        $this->ufeSuf2Ini = $ufeSuf2Ini;

        return $this;
    }

    public function getUfeRad2Fim(): ?string
    {
        return $this->ufeRad2Fim;
    }

    public function setUfeRad2Fim(?string $ufeRad2Fim): self
    {
        $this->ufeRad2Fim = $ufeRad2Fim;

        return $this;
    }

    public function getUfeSuf2Fim(): ?string
    {
        return $this->ufeSuf2Fim;
    }

    public function setUfeSuf2Fim(?string $ufeSuf2Fim): self
    {
        $this->ufeSuf2Fim = $ufeSuf2Fim;

        return $this;
    }
}
