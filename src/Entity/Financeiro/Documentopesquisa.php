<?php

namespace App\Entity\Financeiro;

class Documentopesquisa
{
    private $docupesqCodigoid;

    private $docupesqDado;

    private $docuCodigoid;

    private $pesqCodigoid;

    public function getDocupesqCodigoid(): ?int
    {
        return $this->docupesqCodigoid;
    }

    public function getDocupesqDado(): ?string
    {
        return $this->docupesqDado;
    }

    public function setDocupesqDado(string $docupesqDado): self
    {
        $this->docupesqDado = $docupesqDado;

        return $this;
    }

    public function getDocuCodigoid(): ?Documento
    {
        return $this->docuCodigoid;
    }

    public function setDocuCodigoid(?Documento $docuCodigoid): self
    {
        $this->docuCodigoid = $docuCodigoid;

        return $this;
    }

    public function getPesqCodigoid(): ?Pesquisa
    {
        return $this->pesqCodigoid;
    }

    public function setPesqCodigoid(?Pesquisa $pesqCodigoid): self
    {
        $this->pesqCodigoid = $pesqCodigoid;

        return $this;
    }
}
