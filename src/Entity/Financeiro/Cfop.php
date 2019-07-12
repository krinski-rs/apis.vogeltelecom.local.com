<?php

namespace App\Entity\Financeiro;

class Cfop
{
    private $cfopCodigoid;

    private $cfopPaicodigoid;

    private $cfopCfop;

    private $cfopDescricao;

    private $cfopAplicacao;

    public function getCfopCodigoid(): ?int
    {
        return $this->cfopCodigoid;
    }

    public function getCfopPaicodigoid(): ?int
    {
        return $this->cfopPaicodigoid;
    }

    public function setCfopPaicodigoid(?int $cfopPaicodigoid): self
    {
        $this->cfopPaicodigoid = $cfopPaicodigoid;

        return $this;
    }

    public function getCfopCfop(): ?string
    {
        return $this->cfopCfop;
    }

    public function setCfopCfop(string $cfopCfop): self
    {
        $this->cfopCfop = $cfopCfop;

        return $this;
    }

    public function getCfopDescricao(): ?string
    {
        return $this->cfopDescricao;
    }

    public function setCfopDescricao(string $cfopDescricao): self
    {
        $this->cfopDescricao = $cfopDescricao;

        return $this;
    }

    public function getCfopAplicacao(): ?string
    {
        return $this->cfopAplicacao;
    }

    public function setCfopAplicacao(?string $cfopAplicacao): self
    {
        $this->cfopAplicacao = $cfopAplicacao;

        return $this;
    }
}
