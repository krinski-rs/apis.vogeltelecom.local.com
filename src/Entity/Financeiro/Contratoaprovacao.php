<?php

namespace App\Entity\Financeiro;

class Contratoaprovacao
{
    private $contaproCodigoid;

    private $usuaCodigoid;

    private $contaproDatainc;

    private $contaproDataaprovado;

    private $contaproAprovado;

    private $contCodigoid;

    public function getContaproCodigoid(): ?int
    {
        return $this->contaproCodigoid;
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

    public function getContaproDatainc(): ?\DateTimeInterface
    {
        return $this->contaproDatainc;
    }

    public function setContaproDatainc(\DateTimeInterface $contaproDatainc): self
    {
        $this->contaproDatainc = $contaproDatainc;

        return $this;
    }

    public function getContaproDataaprovado(): ?\DateTimeInterface
    {
        return $this->contaproDataaprovado;
    }

    public function setContaproDataaprovado(?\DateTimeInterface $contaproDataaprovado): self
    {
        $this->contaproDataaprovado = $contaproDataaprovado;

        return $this;
    }

    public function getContaproAprovado(): ?bool
    {
        return $this->contaproAprovado;
    }

    public function setContaproAprovado(?bool $contaproAprovado): self
    {
        $this->contaproAprovado = $contaproAprovado;

        return $this;
    }

    public function getContCodigoid(): ?Contrato
    {
        return $this->contCodigoid;
    }

    public function setContCodigoid(?Contrato $contCodigoid): self
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }
}
