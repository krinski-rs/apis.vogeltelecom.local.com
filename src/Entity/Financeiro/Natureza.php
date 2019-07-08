<?php

namespace App\Entity\Financeiro;

class Natureza
{
    private $natuCodigoid;

    private $natuDescricao;

    public function getNatuCodigoid(): ?int
    {
        return $this->natuCodigoid;
    }

    public function getNatuDescricao(): ?string
    {
        return $this->natuDescricao;
    }

    public function setNatuDescricao(string $natuDescricao): self
    {
        $this->natuDescricao = $natuDescricao;

        return $this;
    }
}
