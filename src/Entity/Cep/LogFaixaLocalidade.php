<?php

namespace App\Entity\Cep;

class LogFaixaLocalidade
{
    private $locRad1Ini;

    private $locSuf1Ini;

    private $locRad1Fim;

    private $locSuf1Fim;

    private $locRad2Ini;

    private $locSuf2Ini;

    private $locRad2Fim;

    private $locSuf2Fim;

    private $locNuSequencial;

    public function getLocRad1Ini(): ?string
    {
        return $this->locRad1Ini;
    }

    public function setLocRad1Ini(string $locRad1Ini): self
    {
        $this->locRad1Ini = $locRad1Ini;

        return $this;
    }

    public function getLocSuf1Ini(): ?string
    {
        return $this->locSuf1Ini;
    }

    public function setLocSuf1Ini(string $locSuf1Ini): self
    {
        $this->locSuf1Ini = $locSuf1Ini;

        return $this;
    }

    public function getLocRad1Fim(): ?string
    {
        return $this->locRad1Fim;
    }

    public function setLocRad1Fim(string $locRad1Fim): self
    {
        $this->locRad1Fim = $locRad1Fim;

        return $this;
    }

    public function getLocSuf1Fim(): ?string
    {
        return $this->locSuf1Fim;
    }

    public function setLocSuf1Fim(string $locSuf1Fim): self
    {
        $this->locSuf1Fim = $locSuf1Fim;

        return $this;
    }

    public function getLocRad2Ini(): ?string
    {
        return $this->locRad2Ini;
    }

    public function setLocRad2Ini(?string $locRad2Ini): self
    {
        $this->locRad2Ini = $locRad2Ini;

        return $this;
    }

    public function getLocSuf2Ini(): ?string
    {
        return $this->locSuf2Ini;
    }

    public function setLocSuf2Ini(?string $locSuf2Ini): self
    {
        $this->locSuf2Ini = $locSuf2Ini;

        return $this;
    }

    public function getLocRad2Fim(): ?string
    {
        return $this->locRad2Fim;
    }

    public function setLocRad2Fim(?string $locRad2Fim): self
    {
        $this->locRad2Fim = $locRad2Fim;

        return $this;
    }

    public function getLocSuf2Fim(): ?string
    {
        return $this->locSuf2Fim;
    }

    public function setLocSuf2Fim(?string $locSuf2Fim): self
    {
        $this->locSuf2Fim = $locSuf2Fim;

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
