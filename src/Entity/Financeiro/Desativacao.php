<?php

namespace App\Entity\Financeiro;

class Desativacao
{
    private $desaCodigoid;

    private $usuaCodigoid;

    private $desaDatainc;

    private $desaDatadesativado;

    private $desaAtivo;

    private $contCodigoid;

    public function getDesaCodigoid(): ?int
    {
        return $this->desaCodigoid;
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

    public function getDesaDatainc(): ?\DateTimeInterface
    {
        return $this->desaDatainc;
    }

    public function setDesaDatainc(\DateTimeInterface $desaDatainc): self
    {
        $this->desaDatainc = $desaDatainc;

        return $this;
    }

    public function getDesaDatadesativado(): ?\DateTimeInterface
    {
        return $this->desaDatadesativado;
    }

    public function setDesaDatadesativado(?\DateTimeInterface $desaDatadesativado): self
    {
        $this->desaDatadesativado = $desaDatadesativado;

        return $this;
    }

    public function getDesaAtivo(): ?bool
    {
        return $this->desaAtivo;
    }

    public function setDesaAtivo(bool $desaAtivo): self
    {
        $this->desaAtivo = $desaAtivo;

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
