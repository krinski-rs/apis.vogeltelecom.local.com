<?php

namespace App\Entity\Financeiro;

class ContratovalorDiscriminacao
{
    private $contDiscriminacaoCodigoid;

    private $valor;

    private $contvaloCodigoid;

    private $discriminacaoCodigoid;

    public function getContDiscriminacaoCodigoid(): ?int
    {
        return $this->contDiscriminacaoCodigoid;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getContvaloCodigoid(): ?Contratovalor
    {
        return $this->contvaloCodigoid;
    }

    public function setContvaloCodigoid(?Contratovalor $contvaloCodigoid): self
    {
        $this->contvaloCodigoid = $contvaloCodigoid;

        return $this;
    }

    public function getDiscriminacaoCodigoid(): ?Discriminacao
    {
        return $this->discriminacaoCodigoid;
    }

    public function setDiscriminacaoCodigoid(?Discriminacao $discriminacaoCodigoid): self
    {
        $this->discriminacaoCodigoid = $discriminacaoCodigoid;

        return $this;
    }
}
