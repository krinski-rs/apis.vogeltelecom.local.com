<?php

namespace App\Entity\Financeiro;

class ServicosWanServicosVogel
{
    private $id;

    private $servicoWanId;

    private $dataHoraCriacao;

    private $tprIdServico;

    private $peso;

    private $servicoVogel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServicoWanId(): ?int
    {
        return $this->servicoWanId;
    }

    public function setServicoWanId(?int $servicoWanId): self
    {
        $this->servicoWanId = $servicoWanId;

        return $this;
    }

    public function getDataHoraCriacao(): ?\DateTimeInterface
    {
        return $this->dataHoraCriacao;
    }

    public function setDataHoraCriacao(?\DateTimeInterface $dataHoraCriacao): self
    {
        $this->dataHoraCriacao = $dataHoraCriacao;

        return $this;
    }

    public function getTprIdServico(): ?string
    {
        return $this->tprIdServico;
    }

    public function setTprIdServico(?string $tprIdServico): self
    {
        $this->tprIdServico = $tprIdServico;

        return $this;
    }

    public function getPeso(): ?int
    {
        return $this->peso;
    }

    public function setPeso(?int $peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    public function getServicoVogel(): ?Servico
    {
        return $this->servicoVogel;
    }

    public function setServicoVogel(?Servico $servicoVogel): self
    {
        $this->servicoVogel = $servicoVogel;

        return $this;
    }
}
