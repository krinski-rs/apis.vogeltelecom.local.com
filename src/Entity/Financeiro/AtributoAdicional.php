<?php

namespace App\Entity\Financeiro;

class AtributoAdicional
{
    private $idAtributoAdiconal;

    private $valor;

    private $infoInterna;

    private $infoExterna;

    private $dataInc;

    private $endeentratrivaloCodigoid;

    public function getIdAtributoAdiconal(): ?int
    {
        return $this->idAtributoAdiconal;
    }

    public function getValor(): ?string
    {
        return $this->valor;
    }

    public function setValor(?string $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getInfoInterna(): ?string
    {
        return $this->infoInterna;
    }

    public function setInfoInterna(?string $infoInterna): self
    {
        $this->infoInterna = $infoInterna;

        return $this;
    }

    public function getInfoExterna(): ?string
    {
        return $this->infoExterna;
    }

    public function setInfoExterna(?string $infoExterna): self
    {
        $this->infoExterna = $infoExterna;

        return $this;
    }

    public function getDataInc(): ?\DateTimeInterface
    {
        return $this->dataInc;
    }

    public function setDataInc(?\DateTimeInterface $dataInc): self
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    public function getEndeentratrivaloCodigoid(): ?Enderecoentregaatributovalor
    {
        return $this->endeentratrivaloCodigoid;
    }

    public function setEndeentratrivaloCodigoid(?Enderecoentregaatributovalor $endeentratrivaloCodigoid): self
    {
        $this->endeentratrivaloCodigoid = $endeentratrivaloCodigoid;

        return $this;
    }
}
