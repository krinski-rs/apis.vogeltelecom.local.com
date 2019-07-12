<?php

namespace App\Entity\Financeiro;

class Reativacao
{
    private $reatCodigoid;

    private $usuaCodigoid;

    private $reatDatainc;

    private $reatDatareativado;

    private $contCodigoid;

    public function getReatCodigoid(): ?int
    {
        return $this->reatCodigoid;
    }

    public function getUsuaCodigoid(): ?int
    {
        return $this->usuaCodigoid;
    }

    public function setUsuaCodigoid(?int $usuaCodigoid): self
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    public function getReatDatainc(): ?\DateTimeInterface
    {
        return $this->reatDatainc;
    }

    public function setReatDatainc(\DateTimeInterface $reatDatainc): self
    {
        $this->reatDatainc = $reatDatainc;

        return $this;
    }

    public function getReatDatareativado(): ?\DateTimeInterface
    {
        return $this->reatDatareativado;
    }

    public function setReatDatareativado(?\DateTimeInterface $reatDatareativado): self
    {
        $this->reatDatareativado = $reatDatareativado;

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
