<?php

namespace App\Entity\Financeiro;

class Clienteaprovacao
{
    private $clieaproCodigoid;

    private $clieCodigoid;

    private $usuaCodigoid;

    private $clieaproDelin;

    private $aproCodigoid;

    public function getClieaproCodigoid(): ?int
    {
        return $this->clieaproCodigoid;
    }

    public function getClieCodigoid(): ?int
    {
        return $this->clieCodigoid;
    }

    public function setClieCodigoid(int $clieCodigoid): self
    {
        $this->clieCodigoid = $clieCodigoid;

        return $this;
    }

    public function getUsuaCodigoid(): ?int
    {
        return $this->usuaCodigoid;
    }

    public function setUsuaCodigoid(int $usuaCodigoid): self
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    public function getClieaproDelin(): ?int
    {
        return $this->clieaproDelin;
    }

    public function setClieaproDelin(int $clieaproDelin): self
    {
        $this->clieaproDelin = $clieaproDelin;

        return $this;
    }

    public function getAproCodigoid(): ?Aprovacao
    {
        return $this->aproCodigoid;
    }

    public function setAproCodigoid(?Aprovacao $aproCodigoid): self
    {
        $this->aproCodigoid = $aproCodigoid;

        return $this;
    }
}
