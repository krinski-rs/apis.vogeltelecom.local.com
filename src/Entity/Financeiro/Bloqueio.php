<?php

namespace App\Entity\Financeiro;

class Bloqueio
{
    private $bloqCodigoid;

    private $bloqAcao;

    public function getBloqCodigoid(): ?int
    {
        return $this->bloqCodigoid;
    }

    public function getBloqAcao(): ?string
    {
        return $this->bloqAcao;
    }

    public function setBloqAcao(?string $bloqAcao): self
    {
        $this->bloqAcao = $bloqAcao;

        return $this;
    }
}
