<?php

namespace App\Entity\Financeiro;

class Designacao
{
    private $desigCodigoid;

    private $endeentrCodigoid;

    private $clieCodigoid;

    private $desigStt;

    private $desigNumero;

    private $desigPedido;

    private $desigPonta;

    public function getDesigCodigoid(): ?int
    {
        return $this->desigCodigoid;
    }

    public function getEndeentrCodigoid(): ?int
    {
        return $this->endeentrCodigoid;
    }

    public function setEndeentrCodigoid(?int $endeentrCodigoid): self
    {
        $this->endeentrCodigoid = $endeentrCodigoid;

        return $this;
    }

    public function getClieCodigoid(): ?int
    {
        return $this->clieCodigoid;
    }

    public function setClieCodigoid(?int $clieCodigoid): self
    {
        $this->clieCodigoid = $clieCodigoid;

        return $this;
    }

    public function getDesigStt(): ?string
    {
        return $this->desigStt;
    }

    public function setDesigStt(?string $desigStt): self
    {
        $this->desigStt = $desigStt;

        return $this;
    }

    public function getDesigNumero(): ?int
    {
        return $this->desigNumero;
    }

    public function setDesigNumero(int $desigNumero): self
    {
        $this->desigNumero = $desigNumero;

        return $this;
    }

    public function getDesigPedido(): ?string
    {
        return $this->desigPedido;
    }

    public function setDesigPedido(?string $desigPedido): self
    {
        $this->desigPedido = $desigPedido;

        return $this;
    }

    public function getDesigPonta(): ?int
    {
        return $this->desigPonta;
    }

    public function setDesigPonta(?int $desigPonta): self
    {
        $this->desigPonta = $desigPonta;

        return $this;
    }
}
