<?php

namespace App\Entity\Financeiro;

class Medida
{
    private $mediCodigoid;

    private $mediNome;

    private $mediSigla;

    private $mediMultiplicador;

    private $mediVezes;

    private $mediCategoria;

    public function getMediCodigoid(): ?int
    {
        return $this->mediCodigoid;
    }

    public function getMediNome(): ?string
    {
        return $this->mediNome;
    }

    public function setMediNome(string $mediNome): self
    {
        $this->mediNome = $mediNome;

        return $this;
    }

    public function getMediSigla(): ?string
    {
        return $this->mediSigla;
    }

    public function setMediSigla(string $mediSigla): self
    {
        $this->mediSigla = $mediSigla;

        return $this;
    }

    public function getMediMultiplicador(): ?int
    {
        return $this->mediMultiplicador;
    }

    public function setMediMultiplicador(int $mediMultiplicador): self
    {
        $this->mediMultiplicador = $mediMultiplicador;

        return $this;
    }

    public function getMediVezes(): ?int
    {
        return $this->mediVezes;
    }

    public function setMediVezes(int $mediVezes): self
    {
        $this->mediVezes = $mediVezes;

        return $this;
    }

    public function getMediCategoria(): ?int
    {
        return $this->mediCategoria;
    }

    public function setMediCategoria(int $mediCategoria): self
    {
        $this->mediCategoria = $mediCategoria;

        return $this;
    }
}
