<?php

namespace App\Entity\Financeiro;

class Arquivoremessa
{
    private $arquremeCodigoid;

    private $arquremeNome;

    private $arquremeIndice;

    private $arquremeTexto;

    private $arquremeDataenvio;

    private $arquremeDatainc;

    public function getArquremeCodigoid(): ?int
    {
        return $this->arquremeCodigoid;
    }

    public function getArquremeNome(): ?string
    {
        return $this->arquremeNome;
    }

    public function setArquremeNome(string $arquremeNome): self
    {
        $this->arquremeNome = $arquremeNome;

        return $this;
    }

    public function getArquremeIndice(): ?int
    {
        return $this->arquremeIndice;
    }

    public function setArquremeIndice(int $arquremeIndice): self
    {
        $this->arquremeIndice = $arquremeIndice;

        return $this;
    }

    public function getArquremeTexto(): ?string
    {
        return $this->arquremeTexto;
    }

    public function setArquremeTexto(string $arquremeTexto): self
    {
        $this->arquremeTexto = $arquremeTexto;

        return $this;
    }

    public function getArquremeDataenvio(): ?\DateTimeInterface
    {
        return $this->arquremeDataenvio;
    }

    public function setArquremeDataenvio(?\DateTimeInterface $arquremeDataenvio): self
    {
        $this->arquremeDataenvio = $arquremeDataenvio;

        return $this;
    }

    public function getArquremeDatainc(): ?\DateTimeInterface
    {
        return $this->arquremeDatainc;
    }

    public function setArquremeDatainc(\DateTimeInterface $arquremeDatainc): self
    {
        $this->arquremeDatainc = $arquremeDatainc;

        return $this;
    }
}
