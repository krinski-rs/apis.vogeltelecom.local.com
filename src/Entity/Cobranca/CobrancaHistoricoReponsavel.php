<?php

namespace App\Entity\Cobranca;

class CobrancaHistoricoReponsavel
{
    private $id;

    private $nome;

    private $gcdbAutUsuarioId;

    private $dataInicial;

    private $cobrancaHistorico;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getGcdbAutUsuarioId(): ?int
    {
        return $this->gcdbAutUsuarioId;
    }

    public function setGcdbAutUsuarioId(?int $gcdbAutUsuarioId): self
    {
        $this->gcdbAutUsuarioId = $gcdbAutUsuarioId;

        return $this;
    }

    public function getDataInicial(): ?\DateTimeInterface
    {
        return $this->dataInicial;
    }

    public function setDataInicial(?\DateTimeInterface $dataInicial): self
    {
        $this->dataInicial = $dataInicial;

        return $this;
    }

    public function getCobrancaHistorico(): ?CobrancaHistorico
    {
        return $this->cobrancaHistorico;
    }

    public function setCobrancaHistorico(?CobrancaHistorico $cobrancaHistorico): self
    {
        $this->cobrancaHistorico = $cobrancaHistorico;

        return $this;
    }
}
