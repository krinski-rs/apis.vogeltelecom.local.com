<?php

namespace App\Entity\Financeiro;

class EnderecoentregaatributovalorHisto
{
    private $endeentratrivaloHisto;

    private $atrivaloCodigoid;

    private $endeentratrivaloValor;

    private $endeentratrivaloDescricao;

    private $dataInc;

    private $registrante;

    private $endeentratrivaloCodigoid;

    public function getEndeentratrivaloHisto(): ?int
    {
        return $this->endeentratrivaloHisto;
    }

    public function getAtrivaloCodigoid(): ?int
    {
        return $this->atrivaloCodigoid;
    }

    public function setAtrivaloCodigoid(?int $atrivaloCodigoid): self
    {
        $this->atrivaloCodigoid = $atrivaloCodigoid;

        return $this;
    }

    public function getEndeentratrivaloValor(): ?string
    {
        return $this->endeentratrivaloValor;
    }

    public function setEndeentratrivaloValor(?string $endeentratrivaloValor): self
    {
        $this->endeentratrivaloValor = $endeentratrivaloValor;

        return $this;
    }

    public function getEndeentratrivaloDescricao(): ?string
    {
        return $this->endeentratrivaloDescricao;
    }

    public function setEndeentratrivaloDescricao(?string $endeentratrivaloDescricao): self
    {
        $this->endeentratrivaloDescricao = $endeentratrivaloDescricao;

        return $this;
    }

    public function getDataInc(): ?\DateTimeInterface
    {
        return $this->dataInc;
    }

    public function setDataInc(?\DateTimeInterface $dataInc): self
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    public function getRegistrante(): ?int
    {
        return $this->registrante;
    }

    public function setRegistrante(?int $registrante): self
    {
        $this->registrante = $registrante;

        return $this;
    }

    public function getEndeentratrivaloCodigoid(): ?Enderecoentregaatributovalor
    {
        return $this->endeentratrivaloCodigoid;
    }

    public function setEndeentratrivaloCodigoid(?Enderecoentregaatributovalor $endeentratrivaloCodigoid): self
    {
        $this->endeentratrivaloCodigoid = $endeentratrivaloCodigoid;

        return $this;
    }
}
