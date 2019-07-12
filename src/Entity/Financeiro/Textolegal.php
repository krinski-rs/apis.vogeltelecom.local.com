<?php

namespace App\Entity\Financeiro;

class Textolegal
{
    private $textlegaCodigoid;

    private $textlegaTexto;

    private $contCodigoid;

    public function getTextlegaCodigoid(): ?int
    {
        return $this->textlegaCodigoid;
    }

    public function getTextlegaTexto(): ?string
    {
        return $this->textlegaTexto;
    }

    public function setTextlegaTexto(string $textlegaTexto): self
    {
        $this->textlegaTexto = $textlegaTexto;

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
