<?php

namespace App\Entity\Financeiro;

class Enderecoentregaatributovalor
{
    private $endeentratrivaloCodigoid;

    private $endeentratrivaloPaicodigoid;

    private $endeentrCodigoid;

    private $endeentratrivaloValor;

    private $endeentratrivaloDescricao;

    private $dataInc;

    private $registrante;

    private $endeentratrivaloDatafim;

    private $atrivaloCodigoid;

    private $contrato;

    public function getEndeentratrivaloCodigoid(): ?int
    {
        return $this->endeentratrivaloCodigoid;
    }

    public function getEndeentratrivaloPaicodigoid(): ?int
    {
        return $this->endeentratrivaloPaicodigoid;
    }

    public function setEndeentratrivaloPaicodigoid(?int $endeentratrivaloPaicodigoid): self
    {
        $this->endeentratrivaloPaicodigoid = $endeentratrivaloPaicodigoid;

        return $this;
    }

    public function getEndeentrCodigoid(): ?int
    {
        return $this->endeentrCodigoid;
    }

    public function setEndeentrCodigoid(?int $endeentrCodigoid): self
    {
        $this->endeentrCodigoid = $endeentrCodigoid;

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

    public function setDataInc(\DateTimeInterface $dataInc): self
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

    public function getEndeentratrivaloDatafim(): ?\DateTimeInterface
    {
        return $this->endeentratrivaloDatafim;
    }

    public function setEndeentratrivaloDatafim(?\DateTimeInterface $endeentratrivaloDatafim): self
    {
        $this->endeentratrivaloDatafim = $endeentratrivaloDatafim;

        return $this;
    }

    public function getAtrivaloCodigoid(): ?Atributovalor
    {
        return $this->atrivaloCodigoid;
    }

    public function setAtrivaloCodigoid(?Atributovalor $atrivaloCodigoid): self
    {
        $this->atrivaloCodigoid = $atrivaloCodigoid;

        return $this;
    }

    public function getContrato(): ?Contrato
    {
        return $this->contrato;
    }

    public function setContrato(?Contrato $contrato): self
    {
        $this->contrato = $contrato;

        return $this;
    }
}
