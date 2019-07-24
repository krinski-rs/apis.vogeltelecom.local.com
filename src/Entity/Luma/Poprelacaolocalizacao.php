<?php

namespace App\Entity\Luma;

class Poprelacaolocalizacao
{
    private $idPopLocalizacao;

    private $dataInicio;

    private $dataFim;

    private $usuario;

    private $usuarioAprovador;

    private $observacaoAprovador;

    private $dataAprovador;

    private $pop;

    private $poplocalizacao;

    private $poptipolocalizacao;

    public function getIdPopLocalizacao(): ?int
    {
        return $this->idPopLocalizacao;
    }

    public function getDataInicio(): ?\DateTimeInterface
    {
        return $this->dataInicio;
    }

    public function setDataInicio(?\DateTimeInterface $dataInicio): self
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    public function getDataFim(): ?\DateTimeInterface
    {
        return $this->dataFim;
    }

    public function setDataFim(?\DateTimeInterface $dataFim): self
    {
        $this->dataFim = $dataFim;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(?string $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getUsuarioAprovador(): ?string
    {
        return $this->usuarioAprovador;
    }

    public function setUsuarioAprovador(?string $usuarioAprovador): self
    {
        $this->usuarioAprovador = $usuarioAprovador;

        return $this;
    }

    public function getObservacaoAprovador(): ?string
    {
        return $this->observacaoAprovador;
    }

    public function setObservacaoAprovador(?string $observacaoAprovador): self
    {
        $this->observacaoAprovador = $observacaoAprovador;

        return $this;
    }

    public function getDataAprovador(): ?\DateTimeInterface
    {
        return $this->dataAprovador;
    }

    public function setDataAprovador(?\DateTimeInterface $dataAprovador): self
    {
        $this->dataAprovador = $dataAprovador;

        return $this;
    }

    public function getPop(): ?Pop
    {
        return $this->pop;
    }

    public function setPop(?Pop $pop): self
    {
        $this->pop = $pop;

        return $this;
    }

    public function getPoplocalizacao(): ?Poplocalizacao
    {
        return $this->poplocalizacao;
    }

    public function setPoplocalizacao(?Poplocalizacao $poplocalizacao): self
    {
        $this->poplocalizacao = $poplocalizacao;

        return $this;
    }

    public function getPoptipolocalizacao(): ?Poptipolocalizacao
    {
        return $this->poptipolocalizacao;
    }

    public function setPoptipolocalizacao(?Poptipolocalizacao $poptipolocalizacao): self
    {
        $this->poptipolocalizacao = $poptipolocalizacao;

        return $this;
    }
}
