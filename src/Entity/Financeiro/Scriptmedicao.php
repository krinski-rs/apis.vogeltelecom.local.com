<?php

namespace App\Entity\Financeiro;

class Scriptmedicao
{
    private $scrimediCodigoid;

    private $scrimediNome;

    private $scrimediDescricao;

    private $scrimediPath;

    private $scrimediTiporetorno;

    public function getScrimediCodigoid(): ?int
    {
        return $this->scrimediCodigoid;
    }

    public function getScrimediNome(): ?string
    {
        return $this->scrimediNome;
    }

    public function setScrimediNome(string $scrimediNome): self
    {
        $this->scrimediNome = $scrimediNome;

        return $this;
    }

    public function getScrimediDescricao(): ?string
    {
        return $this->scrimediDescricao;
    }

    public function setScrimediDescricao(string $scrimediDescricao): self
    {
        $this->scrimediDescricao = $scrimediDescricao;

        return $this;
    }

    public function getScrimediPath(): ?string
    {
        return $this->scrimediPath;
    }

    public function setScrimediPath(string $scrimediPath): self
    {
        $this->scrimediPath = $scrimediPath;

        return $this;
    }

    public function getScrimediTiporetorno(): ?string
    {
        return $this->scrimediTiporetorno;
    }

    public function setScrimediTiporetorno(string $scrimediTiporetorno): self
    {
        $this->scrimediTiporetorno = $scrimediTiporetorno;

        return $this;
    }
}
