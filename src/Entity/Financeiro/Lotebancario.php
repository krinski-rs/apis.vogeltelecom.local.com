<?php

namespace App\Entity\Financeiro;

class Lotebancario
{
    private $lotebancCodigoid;

    private $usuaCodigoid;

    private $lotebancDatainc;

    private $lotebancTexto;

    private $lotebancNome;

    private $bancCodigoid;

    public function getLotebancCodigoid(): ?int
    {
        return $this->lotebancCodigoid;
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

    public function getLotebancDatainc(): ?\DateTimeInterface
    {
        return $this->lotebancDatainc;
    }

    public function setLotebancDatainc(\DateTimeInterface $lotebancDatainc): self
    {
        $this->lotebancDatainc = $lotebancDatainc;

        return $this;
    }

    public function getLotebancTexto(): ?string
    {
        return $this->lotebancTexto;
    }

    public function setLotebancTexto(string $lotebancTexto): self
    {
        $this->lotebancTexto = $lotebancTexto;

        return $this;
    }

    public function getLotebancNome(): ?string
    {
        return $this->lotebancNome;
    }

    public function setLotebancNome(string $lotebancNome): self
    {
        $this->lotebancNome = $lotebancNome;

        return $this;
    }

    public function getBancCodigoid(): ?Banco
    {
        return $this->bancCodigoid;
    }

    public function setBancCodigoid(?Banco $bancCodigoid): self
    {
        $this->bancCodigoid = $bancCodigoid;

        return $this;
    }
}
