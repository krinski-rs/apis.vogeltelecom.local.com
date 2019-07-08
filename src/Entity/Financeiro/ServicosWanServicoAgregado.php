<?php

namespace App\Entity\Financeiro;

class ServicosWanServicoAgregado
{
    private $id;

    private $tprIdServico;

    private $dataInc;

    private $servagreCodigoid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTprIdServico(): ?string
    {
        return $this->tprIdServico;
    }

    public function setTprIdServico(string $tprIdServico): self
    {
        $this->tprIdServico = $tprIdServico;

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

    public function getServagreCodigoid(): ?ServicoAgregado
    {
        return $this->servagreCodigoid;
    }

    public function setServagreCodigoid(?ServicoAgregado $servagreCodigoid): self
    {
        $this->servagreCodigoid = $servagreCodigoid;

        return $this;
    }
}
