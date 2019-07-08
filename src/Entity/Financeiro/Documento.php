<?php

namespace App\Entity\Financeiro;

class Documento
{
    private $docuCodigoid;

    private $docuNome;

    private $docuDatainc;

    private $docuUsuainc;

    private $docuDatafim;

    private $docuUsuafim;

    private $docuAprovado;

    private $contCodigoid;

    private $tipodocuCodigoid;

    public function getDocuCodigoid(): ?int
    {
        return $this->docuCodigoid;
    }

    public function getDocuNome(): ?string
    {
        return $this->docuNome;
    }

    public function setDocuNome(string $docuNome): self
    {
        $this->docuNome = $docuNome;

        return $this;
    }

    public function getDocuDatainc(): ?\DateTimeInterface
    {
        return $this->docuDatainc;
    }

    public function setDocuDatainc(\DateTimeInterface $docuDatainc): self
    {
        $this->docuDatainc = $docuDatainc;

        return $this;
    }

    public function getDocuUsuainc(): ?int
    {
        return $this->docuUsuainc;
    }

    public function setDocuUsuainc(?int $docuUsuainc): self
    {
        $this->docuUsuainc = $docuUsuainc;

        return $this;
    }

    public function getDocuDatafim(): ?\DateTimeInterface
    {
        return $this->docuDatafim;
    }

    public function setDocuDatafim(?\DateTimeInterface $docuDatafim): self
    {
        $this->docuDatafim = $docuDatafim;

        return $this;
    }

    public function getDocuUsuafim(): ?int
    {
        return $this->docuUsuafim;
    }

    public function setDocuUsuafim(?int $docuUsuafim): self
    {
        $this->docuUsuafim = $docuUsuafim;

        return $this;
    }

    public function getDocuAprovado(): ?bool
    {
        return $this->docuAprovado;
    }

    public function setDocuAprovado(?bool $docuAprovado): self
    {
        $this->docuAprovado = $docuAprovado;

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

    public function getTipodocuCodigoid(): ?Tipodocumento
    {
        return $this->tipodocuCodigoid;
    }

    public function setTipodocuCodigoid(?Tipodocumento $tipodocuCodigoid): self
    {
        $this->tipodocuCodigoid = $tipodocuCodigoid;

        return $this;
    }
}
