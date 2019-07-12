<?php

namespace App\Entity\Financeiro;

class Ativacaotemplatepermissao
{
    private $ativtemppermiCodigoid;

    private $ativtemppermiOrdem;

    private $ativtempCodigoid;

    private $atriCodigoid;

    public function getAtivtemppermiCodigoid(): ?int
    {
        return $this->ativtemppermiCodigoid;
    }

    public function getAtivtemppermiOrdem(): ?int
    {
        return $this->ativtemppermiOrdem;
    }

    public function setAtivtemppermiOrdem(?int $ativtemppermiOrdem): self
    {
        $this->ativtemppermiOrdem = $ativtemppermiOrdem;

        return $this;
    }

    public function getAtivtempCodigoid(): ?Ativacaotemplate
    {
        return $this->ativtempCodigoid;
    }

    public function setAtivtempCodigoid(?Ativacaotemplate $ativtempCodigoid): self
    {
        $this->ativtempCodigoid = $ativtempCodigoid;

        return $this;
    }

    public function getAtriCodigoid(): ?Atributo
    {
        return $this->atriCodigoid;
    }

    public function setAtriCodigoid(?Atributo $atriCodigoid): self
    {
        $this->atriCodigoid = $atriCodigoid;

        return $this;
    }
}
