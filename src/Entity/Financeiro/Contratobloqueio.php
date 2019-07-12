<?php

namespace App\Entity\Financeiro;

class Contratobloqueio
{
    private $contbloqCodigoid;

    private $contbloqMotivo;

    private $contbloqUsuario;

    private $contbloqDatainc;

    private $bloqCodigoid;

    private $contCodigoid;

    public function getContbloqCodigoid(): ?int
    {
        return $this->contbloqCodigoid;
    }

    public function getContbloqMotivo(): ?string
    {
        return $this->contbloqMotivo;
    }

    public function setContbloqMotivo(?string $contbloqMotivo): self
    {
        $this->contbloqMotivo = $contbloqMotivo;

        return $this;
    }

    public function getContbloqUsuario(): ?int
    {
        return $this->contbloqUsuario;
    }

    public function setContbloqUsuario(?int $contbloqUsuario): self
    {
        $this->contbloqUsuario = $contbloqUsuario;

        return $this;
    }

    public function getContbloqDatainc(): ?\DateTimeInterface
    {
        return $this->contbloqDatainc;
    }

    public function setContbloqDatainc(?\DateTimeInterface $contbloqDatainc): self
    {
        $this->contbloqDatainc = $contbloqDatainc;

        return $this;
    }

    public function getBloqCodigoid(): ?Bloqueio
    {
        return $this->bloqCodigoid;
    }

    public function setBloqCodigoid(?Bloqueio $bloqCodigoid): self
    {
        $this->bloqCodigoid = $bloqCodigoid;

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
